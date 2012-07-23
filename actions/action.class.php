<?php
abstract class Action {
    
    /**
     * $tmpl - имя вида
     * @var type 
     */
    private $tmpl = 'index.tmpl.php';
    
    public function setTemplate($name) {
        $this->tmpl = $name;
    }
    
    // кодим кодим
    
    /**
     * Рендерит шаблон вида 
     */
    public function render()
    {
        require_once "/home/vladok/Projects/shop.loc/views/{$tmpl}";
    }
    
    public abstract function index();
}
?>