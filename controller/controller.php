<?php 
require_once("model/model.php"); 
class controller extends model 
{
    public function __construct() 
    {
        parent:: __construct();
        // $name="hi krupanshi";
        // echo $name;
        //fetch state on register views
        $st=$this->selectalldata('tbl_state'); 
        //fetch city on register views
        $ct=$this->selectalldata('tbl_city'); 
        //store data in tbl_register table 
        if(isset($_POST["reg"]))
        {
            // upload photo
            $tmp_name=$_FILES["img"]["tmp_name"];
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024; 
            $path="uploads/users/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);

            $fnm=$_POST["fname"];
            $lname=$_POST["lname"];
            $em=$_POST["em"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $phone=$_POST["phone"];
            $g=$_POST["gender"];
            $h=implode(",",$_POST["chk"]);
            $add=$_POST["address"];
            $st=$_POST["state"];
            $ct=$_POST["city"];

            if($pass==$cpass)
            {

            $data=array("photo"=>$path,"firstname"=>$fnm,"lastname"=>$lname,"email"=>$em,"password"=>$pass,"phone"=>$phone,"gender"=>$g,"hobby"=>$h,"address"=>$add,"sid"=>$st,"ctid"=>$ct);
            $chk=$this->insdata('tbl_register',$data);
            if($chk)
            {
              echo "<script>
              alert('Thanks for create your account with Us')
              window.location='./';
              </script>";
            }
        }
            else 
            {
                echo "<script>
                alert('Your Password does not matched try again')
                window.location='./';
                </script>";
            }

        }
        // store data in contact from user contact form

        if(isset($_POST["addcontact"]))
        {
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $em=$_POST["mail"];
            $phone=$_POST["phone"];
            $sub=$_POST["sub"];
            $msg=$_POST["msg"];

            $data=array("fname"=>$fnm, "lname"=>$lnm, "email"=>$em,"phone"=>$phone,"subject"=>$sub,"msg"=>$msg);

            $result=$this->insdata('tbl_contact',$data);
            if($result)
            {
                echo "<script>
                alert('thanks for contact with us our one of admin contact with you soon')
                window.location='Contact-us';
                </script>";
            }
            else
            {
                echo "<script>
                alert('something went wrong')
                window.location='Contact-us';
                </script>";
    
            }
        }

        // login as user 
        if(isset($_POST["log"]))
        {
            $em=$_POST["em"];
            $pass=base64_encode($_POST["pass"]);
            $chk=$this->loguser('tbl_register',$em,$pass);
            if($chk)
            {
                echo "<script>
                alert('You are Logged in Successfully')
                window.location='ManageProfile';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('Your email and password are Incorrect try again')
                window.location='./';
                </script>";
            }
        }

        //manage profile 
        if(isset($_SESSION["r_id"]))
        {
            $r_id=$_SESSION["r_id"];
            $shwdata=$this->manageprofile('tbl_register','tbl_state','tbl_city','tbl_register.sid=tbl_state.sid','tbl_register.ctid=tbl_city.ctid','rid',$r_id);
        }
        // forget password logic
        if(isset($_POST["frg"]))
        {
            $em=$_POST["em"];
            $pass=$this->frgpassword('tbl_register',$em,'password');
            if($pass)
            {
               echo "<script>
               alert('Your password is :'+'$pass')
               window.location='./';
               </script>";
            }
            else 
            {
                echo "<script>
                alert('Your email does not exist with us try another email')
                window.location='ForgetPassword';
                </script>";
            }
        }

          // change password logic
          if(isset($_POST["change"]))
          {
              $id=$_SESSION["r_id"];
              $opass=base64_encode($_POST["opass"]);
              $npass=base64_encode($_POST["npass"]);
              $cpass=base64_encode($_POST["cpass"]);
              $chk=$this->changepassword('tbl_register',$opass,$npass,$cpass,$id);
              if($chk)
              {
                 unset($_SESSION["r_id"]);
                 unset($_SESSION["fname"]);
                 unset($_SESSION["em"]);

                 echo "<script>
                 alert('Your password successfully changed')
                 window.location='./';
                 </script>";
              }
              else 
              {
                  echo "<script>
                  alert('opass,new password and confirm password does not matched try agian')
                  window.location='Change-password';
                  </script>";
              }
          }
        //logout here
        if(isset($_GET["logout-here"]))
        {
            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
                alert('Your Are Logout successfully')
                window.location='./';
                </script>";
            }
        }
       
        // load your view here
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("register.php");
                
                           
                    break;
                case '/Contact-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("contact.php");
                    require_once("footer.php");
                  
                    break;

                case '/ManageProfile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("manageprofile.php");
                    require_once("footer.php");
                    break;

                    case '/ForgetPassword':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("forgetpassword.php");
                        require_once("footer.php");
                        break;

                    case '/Change-password':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("changepassword.php");
                        require_once("footer.php");
                        break;
                default:
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                break;
                
            }

        }

    }
     
}

$obj=new  controller;

?>