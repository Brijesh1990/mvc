<!-- register modal load here -->
<div class="modal fade" id="reg" role="dialog">
<div class="modal-dialog">
    <div class="modal-content p-5">
       <div class="row">
         
        <h2>Register with Us</h2>
<hr>
<div class="row">
        
        <div class="col-md-12 mt-2">
            <div class="form-group">
                <form method="post">
                    <div class="form-group mt-2">
                        <input type="file" class="form-control" placeholder="Enter Photo *" required>
                       </div>


    
                <div class="form-group mt-2">
                    <input type="text" class="form-control" placeholder="Enter FirstName *" required>
                   </div>

                   <div class="form-group mt-2">
                    <input type="text" class="form-control" placeholder="Enter LastName *" required>
                   </div>
                   <div class="form-group mt-2">
                    <input type="text" class="form-control" placeholder="Enter Email *" required>
                   </div>

                   
                   <div class="form-group mt-2">
                    <input type="password" class="form-control" placeholder="Enter Password *" required>
                   </div>

                   
                   <div class="form-group mt-2">
                    <input type="password" class="form-control" placeholder="Enter Confirm Password *" required>
                   </div>

                   <div class="form-group mt-2">
                    <input type="text" class="form-control" placeholder="Enter Phone *" required>
                   </div>

                   <div class="form-group mt-2">
                    Male <input type="radio" name="gender" value="male"  required>
                    Female <input type="radio" name="gender" value="female">
                   </div>

                   <div class="form-group mt-2">
                    Reading <input type="checkbox" name="chk[]" value="reading"  required>
                    Writing <input type="checkbox" name="chk[]" value="writing">
                    Play <input type="checkbox" name="chk[]" value="play">
                   </div>

                   <div class="form-group mt-2">
                    <textarea  class="form-control" placeholder="Enter Address *" required></textarea>
                   </div>
    
                   
                   <div class="form-group mt-2">
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

                   
                   <div class="form-group mt-2">
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
                    <input type="submit" class="btn btn-success btn-lg" value="Register!"  required>
                    <input type="submit" class="btn btn-danger btn-lg" value="Reset" required>
                  
                </div>
    
                
    
                </form>
            </div>
        </div>
    </div>

       </div> 

    </div>
</div>
