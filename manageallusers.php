<div class="container content p-3">
<h2 class="text-center">Manage All users</h2>
<hr class="border border-3 w-50 mx-auto">
<div class="row">
    <div class="col-md-4 mt-5 jubotron bg-dark text-white p-5">
    <ul class="sidebar">
    <li><a href="" class="btn btn-block btn-success text-white">Welcome : <?php echo ucfirst($_SESSION["fname"]); ?></a></li>
    <li><a href="">Manage Profile</a></li>
    <li><a href="<?php echo $mainurl;?>Manageallusers">Manage All users<span class="badge badge-danger bg-danger"><?php echo $countuser[0]["total"];?></span></a></li>
    <li><a href="<?php echo $mainurl;?>Change-password">Change Password</a></li>
    <li><a href="<?php echo $mainurl;?>?delete-user=<?php echo base64_encode($shwdata[0]["rid"]); ?>" onclick="return confirm('Are you sure to Delete Account?')">Delete Account</a></li>
    <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to logout as User?')">Logout!</a></li>
    </ul>
    </div>
    <div class="col-md-8 mt-5">
    <table class="table">

    <tr>
        <th>Id</th>
        <th>photo</th>
        <th>firstname</th>
        <th>email</th>
        <th>phone</th>
        <th>gender</th>
        <th>address</th>
        <th>state</th>
        <th>city</th>
        <th>Action</th>
    </tr>

   
    <?php
    foreach($shwusers as  $row)
    { 
    ?>
    <tr>
      <td><?php echo $row["rid"];?></td>
      <td><img src="<?php echo $row["photo"];?>" width="45px" height="45px"></td>
      <td><?php echo $row["firstname"];?></td>
      <td><?php echo $row["email"];?></td>
      <td><?php echo $row["phone"];?></td>
      <td><?php echo $row["gender"];?></td>
      <td><?php echo $row["address"];?></td>
      <td><?php echo $row["sname"];?></td>
      <td><?php echo $row["ctname"];?></td>
      <td><div class="w-75" style="min-width:100px"><a href="https://api.whatsapp.com/send?phone=91<?php echo $row["phone"];?>&text=hello%20jayraj%20kem%20cho%20maja%20ma%20badhu%20saru%20che%20na%20::))" title="send whatsapp here"><i class="bi bi-whatsapp text-success"></i></a> | <a href="" title="delete users"><i class="bi bi-trash text-danger"></i></a> | <a href="" title="edit account"><i class="bi bi-pencil text-info"></i></a> </div></td>
    </tr>
<?php 
    }
    ?>    
</table>

        </div>
    </div>
</div>
</div>