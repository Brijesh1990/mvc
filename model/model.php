<?php
class model 
{
     public $conn=""; 
     public function __construct()
     {
          session_start();
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

    //create a member function to insertalldata
   public function insdata($table,$data)
   {

    $k=array_keys($data);
    $kk=implode(",",$k);
    $v=array_values($data);
    $vv=implode("','",$v);
    $insert="insert into $table($kk) values('$vv')";
    $exe=mysqli_query($this->conn,$insert);
    return $exe;

   }
  //create a member function for login user
  public function loguser($table,$em,$pass)
  {
    $select="select * from $table where email='$em' and password='$pass'";
    $exe=mysqli_query($this->conn,$select);
    $fetch=mysqli_fetch_array($exe);
    $no_rows=mysqli_num_rows($exe);
    if($no_rows==1)
    {
      $_SESSION["r_id"]=$fetch["rid"];
      $_SESSION["fname"]=$fetch["firstname"];
      $_SESSION["em"]=$fetch["email"];

      return true;
       
    }
    else 
    {
     return false;
    }
  }  
//create a member function for manageprofile
 public function manageprofile($table,$table1,$table2,$where,$where1,$coulmn,$r_id)
 {
  $sel="select * from $table join $table1 on $where join $table2 on $where where $coulmn='$r_id'";
  $exe=mysqli_query($this->conn,$sel);
  $fetch=mysqli_fetch_array($exe);
  $arr[]=$fetch;
  return $arr;
 }
 //create a member function for forgetpassword 
 public function frgpassword($table,$em,$column)
 {
  $select="select $column from $table where email='$em'";
  $exe=mysqli_query($this->conn,$select);
  $fetch=mysqli_fetch_array($exe);
  $num_rows=mysqli_num_rows($exe);
  if($num_rows==1)
  {
    $pass=base64_decode($fetch["password"]);
    return $pass;
  }
  else 
  {
    return false;
  }
 }

 //create a member function for changepassword 
 public function changepassword($table,$opass,$npass,$cpass,$id)
 {
  $select="select * from $table where rid='$id'";
  $exe=mysqli_query($this->conn,$select);
  $fetch=mysqli_fetch_array($exe);
  $pass=$fetch["password"];

  if($opass==$pass && $npass==$cpass)
  {
    $upd="update $table set password='$npass' where rid='$id'";
    $exe=mysqli_query($this->conn,$upd);
    return $exe;
  }
  else 
  {
    return false;
  }

 }


//create a member function for logout
public function logout()
{
  unset($_SESSION["r_id"]);
  unset($_SESSION["fname"]);
  unset($_SESSION["em"]);
  session_destroy();
  return true; 

}


}

?>