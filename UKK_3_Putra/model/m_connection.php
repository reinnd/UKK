<?php 

// cara buat class
class m_connection{

// property
    private $host = "localhost", $username = "root", $password = "", $database = "ukk_3_putra";
    public $conn;

    function __construct(){
        $this->conn = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if(!$this->conn){
            die("error:" . mysqli_connect_error());
        }
        else{
            echo "yay";
        }
    }
}

$test = new m_connection();


?>