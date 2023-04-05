<?php

require_once(__DIR__."/../config/credential.php");

class PmpProvider {

    public function connect() {

        try {
            return new PDO('mysql:host=localhost;dbname='.DB, USER, PASSWORD);

        } catch (PDOException $e) {
            return null;
            print "Error!: " . $e->getMessage() . "<br/>";
             die();
        }

    }

}