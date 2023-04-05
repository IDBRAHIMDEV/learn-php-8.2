<?php

require(dirname(__FILE__) . '/../../config/index.php');

class DataProvider {

    protected function connect() {

        try {
            
            return new PDO(CONFIG['db'], CONFIG['db_user'], CONFIG['db_password']);

        } catch (PDOException $e) {
            
            return null;
        }

    }

}