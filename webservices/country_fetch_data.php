<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src='main.js'></script>
</head>
<body>

    
           <div class="container bg-dark text-white mt-5 p-5">
            <form method="post">

                <div class="form-group">
                    <select name="country" class="form-control">
                        <option value="">-select country-</option>
                        <?php 
                        $url="country_data_json.json";
                        $data=file_get_contents($url,true);
                        $cn=json_decode($data, true);
                        foreach($cn as $cn1)
                        { 
                        ?>
                        <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>
                        <?php 
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group mt-4">
                    <input type="submit" name="sub" value="Submit" class="btn btn-sm btn-danger">
                       
                </div>
                
            </form>
           </div>
</body>
</html>