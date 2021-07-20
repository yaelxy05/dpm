<?php

namespace DPM\Models;


class CoreModel
{

    // IMPORTANT WP CUSTOMTABLE with the property $database we get the component in order to dialog with the DataBase
    protected $database;

    public function __construct()
    {
        // DOC WP CUSTOMTABLE $wpdb https://developer.wordpress.org/reference/classes/wpdb/
        global $wpdb;
        $this->database = $wpdb;
    }

    public function executePreparedStatement($sql, $parameters = [])
    {

        // requests SQL without "variable" (no parameters)
       
        if(empty($parameters)) {
            return $this->database->get_results($sql);
        }
        else {
            // DOC WP CUSTOMTABLE prepared statement https://developer.wordpress.org/reference/classes/wpdb/#examples-9
            $preparedStatement = $this->database->prepare(
                $sql,
                $parameters
            );

            // execution of the prepared request
            return $this->database->get_results($preparedStatement);
        }
    }
}
