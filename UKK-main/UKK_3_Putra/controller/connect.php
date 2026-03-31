<?php 

class conn_user {
    private $host = "localhost";     
    private $database = ""; 
    private $username = "root";      
    private $password = "";          
    public $conn;                  

    //  koneksi ke database
    public function connect() {
        $this->conn = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );
        
        if(!$this->conn) {
            die("connect error: " . mysqli_connect_error());
        }
        return $this->conn;
    }

    // tutup koneksi
    public function disconnect() {
        mysqli_close($this->conn);
    }

}


?>