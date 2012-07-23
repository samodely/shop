<?php
class Config{
    public $db_user = "root";
    public $db_pass = "1";
    public $db_name = "shop";
    public $db_host = "shop.loc";
    

    /**
     * Нада делать так:
     * private $db_user
     * и так:
     */
    public function getDbUser() {
        return $this->db_user;
    }
}
?>
