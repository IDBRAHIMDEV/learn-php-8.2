<?php
require_once("provider.php");

class Course extends PmpProvider {

    public $id = 0;
    public $title;
    public $description;
    public $image;
    public $price;

    public function __construct($title="", $description="", $image="", $price=0) {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
    }

    public function add() {

        $db = $this->connect();

       if($db == null) {
           return;
       }

       $sql = "INSERT INTO courses (title, description, image, price) VALUES (:title, :description, :image, :price)";

       $smt = $db->prepare($sql);

       $smt->execute([
           ":title" => $this->title,
           ":description" => $this->description,
           ":image" => $this->image,
           ":price" => $this->price,
       ]);

       $smt = null;
       $db = null;
    }

    public function all() {
        
        $db = $this->connect();
        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM courses');

        $data = $query->fetchAll(PDO::FETCH_OBJ);

        $query = null;
        $db = null;

        return $data;
       
    }


    public function getCourseById($id) {
        $db = $this->connect();

        if($db == null) {
            return;
        }
 
        $sql = "SELECT * FROM tasks WHERE id = :id";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":id" => $id
        ]);

        $data = $smt->fetch();
 
        $smt = null;
        $db = null;

        if(!$data) {
            return "Data not found 404";
        }

        return $data[0];
    }

    public function search($search) {
       
        $db = $this->connect();

        if($db == null) {
            return;
        }
 
        $sql = "SELECT * FROM courses WHERE title LIKE :search OR description LIKE :search";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":search" => '%' . $search . '%'
        ]);

        $data = $smt->fetchAll(PDO::FETCH_OBJ);
 
        $smt = null;
        $db = null;

        if(!$data) {
            return [];
        }

        return $data;
    }

    public function update($id, $title, $description, $image, $price) {
      
        $db = $this->connect();

        if($db == null) {
            return;
        }
 
        $sql = "UPDATE courses SET title = :title, description = :description, image= :image, price= :price WHERE id = :id";
 
        $smt = $db->prepare($sql);
        $smt->execute([
            ":title" => $title,
            ":image" => $image,
            ":price" => $price,
            ":description" => $description,
            ":id" => $id
        ]);
 
        $smt = null;
        $db = null;
    }

    public function delete($id) {
      
        $db = $this->connect();

        if($db == null) {
            return false;
        }
 
        $sql = "DELETE FROM courses WHERE id = :id";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":id" => $id
        ]);
 
        $smt = null;
        $db = null;

        return true;
    }

    
}
