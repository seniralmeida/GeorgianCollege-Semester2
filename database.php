<?php
  class Database{
    private $connection;
    function __construct(){
    $this->connect_db();
    }
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'mydb');
     
      if(mysqli_connect_error()){
       die("Database Connection Failed" . mysqli_connect_error());
      }
    }
    public function getData($query){
      $result = $this->connection->query($query);
      if ($result == false){
        return false;
      }
      $rows = array();
      while ($row = $result->fetch_assoc()){
        $rows[] = $row;
      }
      return $rows;
    }
    public function execute($query){
      $result = $this->connection->query($query);
      if ($result == false){
        echo 'Error';
        return false;
      }else{
        return true;
      }
    }
    
  }
  $database = new Database();
?>
