<?php
class model 
{
     public $conn=""; 
     public function __construct()
     {
           //model is called here
           try 
           {
             $this->conn=new mysqli("localhost","root","","mvcdb");
             //echo "connection successfully";
           }
           catch(Exception $e)
           {
            die(mysqli_error($this->conn,$e));

           }
     }
     //create a member function for selectalldata or fetch data
     public function selectalldata($table)
     {
      $select="select * from $table";
      $exe=mysqli_query($this->conn,$select);
      while($fetch=mysqli_fetch_array($exe))
      {
          $arr[]=$fetch; 
      }
      return $arr;
     }
}

?>