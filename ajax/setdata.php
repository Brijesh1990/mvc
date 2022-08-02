<?php
require_once("config.php");
if(isset($_POST["cn"]))
{
    $cn=$_POST["cn"];
    $sel="select * from tbl_state where cid='$cn'";
    $ex=mysqli_query($con,$sel);
    while($fetch=mysqli_fetch_array($ex))
    {
   ?>
   <option value="<?php echo $fetch["sid"];?>"><?php echo $fetch["sname"];?></option>
  <?php 
    }      
} 
?>
<?php
if(isset($_POST["st"]))
{
    $st=$_POST["st"];
    $sel="select * from tbl_city where sid='$st'";
    $ex=mysqli_query($con,$sel);
    while($fetch=mysqli_fetch_array($ex))
    {
   ?>
   <option value="<?php echo $fetch["ctid"];?>"><?php echo $fetch["ctname"];?></option>
  <?php 
    }      
} 
?>