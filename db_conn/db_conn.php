<?php
error_reporting(0);
Class Database{
    const DB_HOSTNAME = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'resume';
    public  $conn;
    function __construct()
    {
        try{
            $this->conn = mysqli_connect(self::DB_HOSTNAME,self::DB_USERNAME,self::DB_PASSWORD,self::DB_NAME);
        }catch(Exception $e){
            echo "Message: ' .$e->getMessage()";
            exit;
        }
    }
}
?>