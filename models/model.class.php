<?php
require_once '/home/vladok/Projects/shop.loc/config/config.class.php';

class Model
{
    /**
     * Указатель на текущее соединение с БД
     */
    protected $dbconn = null;

    
    /**
     * Базовый класс модели
     * Содержит подключениe к бд
     * В конструкторе будет создаваться соединение 
     * к Базе Данных
     */
    public function __construct()
    {
        $config = new Config();
        
        $this->dbconn = mysql_connect($config->db_host, $config->db_user, $config->db_pass);
        mysql_select_db($config->db_name);
        
        
        // для того, чтобы мы могли работать с базой
        // в юникоде
        $sql = "SET NAMES `utf8`";
        $this->query($sql);
    }
    
    
    public function query($sql) {
        return mysql_query($sql, $this->dbconn);
    }
}
?>
