<!-- bvalidator validations -->
<script>
    $(document).ready(function(){
        $("#frm").bValidator();
    })
</script>
<div class="container content p-3">
<h2>Contact with Us</h2>
<hr>
<div class="row">
        <div class="col-md-5 mt-5">

        <p><b><i class="bi bi-geo-alt"></i>&nbsp; Address :</b> &nbsp; 3rd Fl Aval Complex, University Rd, Panchayat Nagar Chowk, Rajkot, Gujarat 360005</p>
        <p><b><i class="bi bi-clock"></i>&nbsp; Open & Close :</b> &nbsp; 10:00am to 8:30pm</p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.742240251198!2d70.76413124026777!3d22.287751860358146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2sTOPS%20Technologies%20Rajkot%20-%20Python%2C%20Java%2C%20Android%2C%20PHP%2C%20Web%20%26%20Graphic%20Designing%20Courses!5e0!3m2!1sen!2sin!4v1658395523038!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
           
        </div>
        <div class="col-md-7 mt-5">
            <div class="form-group">
                <form method="post" id="frm">

                <div class="form-group mt-2">
                    <input type="text"  name="fname" data-bvalidator="required,alpha" class="form-control" placeholder="Enter FirstName *">
                   </div>

                   <div class="form-group mt-2">
                    <input type="text" name="lname" data-bvalidator="required,alpha" class="form-control" placeholder="Enter LastName *">
                   </div>
                   <div class="form-group mt-2">
                    <input type="text" name="mail" data-bvalidator="required,email" class="form-control" placeholder="Enter Email *">
                   </div>

                   <div class="form-group mt-2">
                    <input type="text" name="phone" data-bvalidator="required,minlen[10],maxlen[10],digit" class="form-control" placeholder="Enter Phone *">
                   </div>

                   <div class="form-group mt-2">
                    <input type="text" name="sub" data-bvalidator="required" class="form-control" placeholder="Enter Subject *">
                   </div>
                   <div class="form-group mt-2">
                    <textarea  class="form-control" name="msg" data-bvalidator="required"placeholder="Enter Message *"></textarea>
                   </div>
    
                   <div class="form-group mt-4">
                    <input type="submit" name="addcontact" class="btn btn-success btn-lg" value="Send!" placeholder="Enter Email *" required>
                    <input type="submit" class="btn btn-danger btn-lg" value="Reset" placeholder="Enter Email *" required>
                  
                </div>
    
                
    
                </form>
            </div>
        </div>
    </div>
    </div>