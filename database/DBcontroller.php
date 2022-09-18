<?php

class DBcontroller
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = 'mysql';
    protected $database = 'mobile_senpai';

    public $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        if($this->con->connect_error){
            echo"Fail: ".$this->con->error; 
        }
        // else{
        //     echo "Connection Successful";
        // }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection(){
        if($this->con!=null){
            $this->con->close();
            $this->con=null;
        }
    }
}


