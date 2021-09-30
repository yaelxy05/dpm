<?php

namespace DPM\Models;


class CommandLineModel extends CoreModel
{


    public function createTable()
    {
        $sql = "
            CREATE TABLE `command_line` (
                `id` bigint(24) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `price` tinyint(4) unsigned NOT NULL,
                `name` varchar(64) NOT NULL,
                `command_id` bigint(24) unsigned NOT NULL, 
                `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
                `updated_at` datetime NULL
            );
        ";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public function dropTable()
    {
        $sql = "DROP TABLE `command_line`";
        $this->database->query($sql);
    }


    public function insert($commandId, $productName, $price = 0)
    {
        // STEP WP CUSTOMTABLE insert
        // le tableau data stocke les données à insérer dans la table
        $data = [
            'command_id' => $commandId,
            'name' => $productName,
            'price' => $price,
            "created_at" => date('Y-m-d H:i:s')
        ];

        $this->database->insert(
            'command_line', // table dans laquelle insérer les données
            $data // les données à insérer dans la table
        );
    }

    public function delete($id)
    {
        $where = [
            'id' => $id
        ];
        $this->database->delete(
            'command_line',
            $where
        );
    }

    public function update($id, $commandId, $nameCommand, $price)
    {
        $data = [
            'id' => $id,
            'command_id' => $commandId,
            'name' => $nameCommand,
            'price' => $price,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $where = [
            'id' => $id
        ];

        $this->database->update(
            'command_line',
            $data,
            $where
        );
    }


    public function getAllCommandLineByCommand($commandId)
    {

        $sql = "
            SELECT
                *
            FROM `command_line`
            WHERE
                command_id = %d
        ";

        $rows = $this->executePreparedStatement(
            $sql,
            [
                $commandId
            ]
        );
 
        return $rows;
    }
}

