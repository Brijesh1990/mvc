<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- ajax apply with jquery -->
    <script>
      function str(val)
      {
        $.ajax({
            
            type:"POST",
            url:'setdata.php',
            data:'cn='+val,
            success:function(data)
            {
                $("#st").html(data);
            }

        })

      }


      function str1(val)
      {
        $.ajax({
            
            type:"POST",
            url:'setdata.php',
            data:'st='+val,
            success:function(data)
            {
                $("#ct").html(data);
            }

        })

      }


    </script>
</head>
<body>

    
           <div class="container bg-dark text-white mt-5 p-5">
            <h3 class="text-center">Ajax</h3>
            <hr class="border border-lg border-3 border-danger w-25 mx-auto">
            
            <div class="row">
                <div class="col-md-7">
                    <h5>What is ajax ?</h5>
                    <p>
                        <ul>
                            <li>ajax stands for asynchronous javascript and xml</li>
                            
                            <li>ajax are used to load a server data without page refresh in web page.</li>
                            <li>ajax are used some ready state.
                                <ol>
                                    <li>0 state (data not to intialized)</li>
                                    <li>1 state (data ready  to intialized)</li>
                                    <li>3 state (data request to insitialised to server)</li>
                                    <li>4 state (data ready to load without page refresh)</li>
                                </ol>
                            </li>
                            
                        </ul>
                    </p>
                </div>
                
            <div class="col-md-5">
            <form method="post">

                <div class="form-group mt-2">

                     <select name="country" class="form-control" id="cn" onchange="return str(this.value)">
                        <option value="">-select country-</option>
                        <?php 
                        require_once("config.php");
                        $sel="select * from tbl_country";
                        $exe=mysqli_query($con,$sel);
                        while($fetch=mysqli_fetch_array($exe))
                        {
                        ?>
                        <option value="<?php echo $fetch["cid"];?>"><?php echo  $fetch["cname"];?></option>
                       
                        <?php 
                        }
                        ?>
                    </select>
                </div>

                
                <div class="form-group mt-2">

                     <select name="state" class="form-control" id="st" onchange="return str1(this.value)">
                        <option value="">-select state-</option>
                        <option value=""></option>
                    </select>
                </div>

                
                <div class="form-group mt-2">

                     <select name="city" class="form-control" id="ct">
                        <option value="">-select city-</option>
                        <option value=""></option>
                    </select>
                </div>

                <div class="form-group mt-4">
                    <input type="submit" name="sub" value="Submit" class="btn btn-sm btn-danger">
                       
                </div>
                
            </form>
           </div>
           </div>
           </div>
</body>
</html>