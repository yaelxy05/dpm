<?php

namespace DPM\Models;


class CartModel extends CoreModel
{


    public function createTable()
    {
        // STEP WP CUSTOMTABLE : Create table in a Database

        $sql = "
            CREATE TABLE `cart` (
                `user_id` bigint(24) unsigned NOT NULL,
                `product_id` bigint(24) unsigned NOT NULL,
                `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
                `updated_at` datetime NULL
            );
        ";
        require_once(ABSPATH . 'wp-admin/panier.php');
        dbDelta($sql);
    }

    public function dropTable()
    {
        $sql = "DROP TABLE `cart`";
        $this->database->query($sql);
    }


    public function insert($userId, $productId)
    {
        $data = [
            'user_id' => $userId,
            'product_id' => $productId,
            "created_at" => date('Y-m-d H:i:s')
        ];

        $this->database->insert(
            'user_product',
            $data
        );
    }

    public function delete($id)
    {
        $where = [
            'id' => $id
        ];
        $this->database->delete(
            'user_product',
            $where
        );
    }

    public function update($id, $productId)
    {
        $data = [
            'product_id' => $productId,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $where = [
            'id' => $id
        ];

        $this->database->update(
            'user_product',
            $data,
            $where
        );
    }


    public function getProductByUserId($userId)
    {
        $sql = "
            SELECT
                *
            FROM `user_product`
            WHERE
                user_id = %d
        ";

        $rows = $this->executePreparedStatement(
            $sql,
            [
                $userId
            ]
        );

        $products = [];
        foreach($rows as $values) {
            // Récupération du post
            $product = get_post($values->product_id, 'product');
            $projects[] =  $product;
        }

        return $products;
    }
}

