<?php
require_once '/home/vladok/Projects/shop.loc/models/model.class.php';

class CategoryModel extends Model {
    public function __construct() {
        return parent::__construct();
    }
    
    public function getCategories()
    {
        $categories = array();
        $sql = "SELECT * FROM `Category`";
        
        $res = $this->query($sql);
        
        while($row = mysql_fetch_assoc($res)) {
            /**
             * Пример вывода:
             *  $row['id'] = 1;
             *  $row['name'] = 'Велосипеды'; 
             * 
             * Результатом будет что типа:
             * $categories[0]['id'] = 1;
             * $categories[0]['name'] = 'Велосипеды';
             *
             * $categories[1]['id'] = 2;
             * $categories[1]['name'] = 'Тренажеры';
             * 
             */
            $categories[] = $row;
        }
        
        return $categories;
    }
}
?>
