<div class="container content p-3">
<h2 class="text-center">Manage Your profile</h2>
<hr class="border border-3 w-50 mx-auto">
<div class="row">
    <div class="col-md-4 mt-5 jubotron bg-dark text-white p-5">
    <ul class="sidebar">
    <li><a href="" class="btn btn-block btn-success text-white">Welcome : <?php echo ucfirst($_SESSION["fname"]); ?></a></li>
    <li><a href="">Manage Profile</a></li>
    <li><a href="">Manage Notifications</a></li>
    <li><a href="">Change Password</a></li>
    <li><a href="">Delete Account</a></li>
    <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to logout as User?')">Logout!</a></li>
    </ul>
       
    </div>
    <div class="col-md-8 mt-5">
        <div class="form-group">
           

            <form method="post" enctype="multipart/form-data">
                <div class="form-group mt-2">

                    <img src="<?php echo $shwdata[0]["photo"];?>">

                    <input type="file" name="img" class="form-control" placeholder="Enter Photo *" required>
                   </div>


                   <div class="row">
            <div class="form-group mt-2 col-md-6">
                <input type="text" name="fname" value="<?php echo $shwdata[0]["firstname"];?>" class="form-control" placeholder="Enter FirstName *" required>
               </div>
              
               <div class="form-group mt-2 col-md-6">
                <input type="text" name="lname" value="<?php echo $shwdata[0]["lastname"];?>" class="form-control" placeholder="Enter LastName *" required>
               </div>
               </div>

               <div class="form-group mt-2">
                <input type="text" name="em" value="<?php echo $shwdata[0]["email"];?>" class="form-control" placeholder="Enter Email *" required>
               </div>
           
           
               <div class="form-group mt-2">
                <input type="text" name="phone" value="<?php echo $shwdata[0]["phone"];?>" class="form-control" placeholder="Enter Phone *" required>
               </div>

               <div class="form-group mt-2">
                Male <input type="radio" name="gender" value="male"  required
                <?php 
                 if($shwdata[0]["gender"]=='male')
                 {
                    echo "checked='checked'";
                 }
                ?>>
                Female <input type="radio" name="gender" value="female" <?php 
                 if($shwdata[0]["gender"]=='female')
                 {
                    echo "checked='checked'";
                 }
                ?>>
               </div>

               <div class="form-group mt-2">
                Reading <input type="checkbox" name="chk[]" value="reading"  required>
                Writing <input type="checkbox" name="chk[]" value="writing">
                Play <input type="checkbox" name="chk[]" value="play">
               </div>

               <div class="form-group mt-2">
                <textarea  name="address" class="form-control" placeholder="Enter Address *" required></textarea>
               </div>

<div class="row">               
               <div class="form-group mt-2 col-md-6">
                <select name="state" class="form-control" placeholder="Enter state *" required>
                    <option value="">-select state-</option>
                    <?php
                    foreach($st as $st1)
                    { 
                    ?>
                    <option value="<?php echo $st1["sid"];?>"><?php echo $st1["sname"];?></option>
                
                     <?php 
                    }
                    ?>
                </select>
               </div>

               
               <div class="form-group mt-2 col-md-6">
                <select name="city" class="form-control" placeholder="Enter city *" required>
                    <option value="">-select city-</option>
                    <?php
                    foreach($ct as $ct1)
                    { 
                    ?>
                    <option value="<?php echo $ct1["ctid"];?>"><?php echo $ct1["ctname"];?></option>
                
                     <?php 
                    }
                    ?>
                </select>
               </div>
               <div class="form-group mt-4">
                <input type="submit" name="upd" class="btn btn-success btn-lg" value="Update Profile!"  required>
                <input type="submit" class="btn btn-danger btn-lg" value="Reset" required>
              
            </div>
            </div>

            </form>

        </div>
    </div>
</div>
</div>