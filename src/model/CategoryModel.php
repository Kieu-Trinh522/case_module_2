<?php


namespace APP\model;


class CategoryModel
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getCategory()
    {
        $sql = "SELECT * FROM `categorys`";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $array = [];
        foreach ($data as $item) {
            $category = new Category($item['category_name'], $item['description']);
            $category->setId($item['category_id']);
            array_push($array, $category);
        }
        return $array;
    }
}