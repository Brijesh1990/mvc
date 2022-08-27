<div class="container content p-3">
<h2 class="text-center">Change Your Password</h2>
<hr class="border border-3 w-50 mx-auto">
<div class="row">
    <div class="col-md-4 mt-5 jubotron bg-dark text-white p-5">
    <ul class="sidebar">
    <li><a href="" class="btn btn-block btn-success text-white">Welcome : <?php echo ucfirst($_SESSION["fname"]); ?></a></li>
    <li><a href="<?php echo $mainurl;?>ManageProfile">Manage Profile</a></li>
    <li><a href="">Manage Notifications</a></li>
    <li><a href="<?php echo $mainurl;?>Change-password">Change Password</a></li>
    <li><a href="">Delete Account</a></li>
    <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to logout as User?')">Logout!</a></li>
    </ul>
    </div>
    <div class="col-md-8 mt-5">
        <div class="form-group">
           

            <form method="post" enctype="multipart/form-data">
               

            <div class="form-group mt-2 col-md-8">
                <input type="password" name="opass"  class="form-control" placeholder="Enter Old Password *" required>
               </div>
               <div class="form-group mt-2 col-md-8">
                <input type="password" name="npass"  class="form-control" placeholder="Enter New Password *" required>
               </div>
               <div class="form-group mt-2 col-md-8">
                <input type="password" name="cpass"  class="form-control" placeholder="Enter Confirm Password *" required>
               </div>
              
               <div class="form-group mt-4">
                <input type="submit" name="change" class="btn btn-success btn-lg" value="Submit!"  required>
              
              
            </div>
            </div>

            </form>

        </div>
    </div>
</div>
</div>