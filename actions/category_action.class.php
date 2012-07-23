<?php
require_once '/home/vladok/Projects/shop.loc/actions/action.class.php';
require_once '/home/vladok/Projects/shop.loc//models/category_model.class.php';

class category_action extends Action {
    public function __construct() {
        //return parent::__construct();
    }
    
    public function index() {
        $model = new CategoryModel();
        $this->setTemplate('category_index.tmpl.php');
        $this->categories = $model->getCategories();
        echo $this->render();
        echo  "rendered";
    }
}
?>
