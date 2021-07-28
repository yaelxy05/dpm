<?php

namespace DPM\Models;


class CartModel extends CoreModel
{


    public function createTable()
    {
        // STEP WP CUSTOMTABLE : Create table in a Database

        $sql = "
            CREATE TABLE `cart_products` (
                `user_id` bigint(24) unsigned NOT NULL,
                `product_id` bigint(24) unsigned NOT NULL,
                `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
                `updated_at` datetime NULL
            );
        ";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public function dropTable()
    {
        $sql = "DROP TABLE `cart_products`";
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
            'cart_products',
            $data
        );
    }

    public function delete($id)
    {
        $where = [
            'id' => $id
        ];
        $this->database->delete(
            'cart_products',
            $where
        );
    }

    // TODO: verify that it's ok
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
            'cart_products',
            $data,
            $where
        );
    }


    public function getProductByUserId($userId)
    {
        $sql = "
            SELECT
                *
            FROM `cart_products`
            WHERE
                user_id = %d
        ";

        $rows = $this->executePreparedStatement(
            $sql,
            [
                $userId
            ]
        );

        $clothings = [];
        foreach($rows as $values) {
            // Récupération du post
            $clothing = get_post($values->product_id, 'clothing');
            $clothings[] =  $clothing;
        }

        return $clothings;
    }
}

