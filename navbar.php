<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $mainurl;?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $mainurl;?>Contact-us" tabindex="-1">ContactUs</a>
        </li>

        <?php
        if(!isset($_SESSION["r_id"]))
        { 
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MyAccount
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reg">Register</a></li>
            <li><a class="dropdown-item" href="<?php echo $mainurl;?>">Login</a></li>
            </ul>
        </li>
        <?php 
        }
        else 
        {
          ?>
          
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome : <b class="text-success"><?php echo ucfirst($_SESSION["fname"]);?> </b>
          </a>
    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
    <li ><a class="dropdown-item"  href="">Manage Profile</a></li>
    <li><a class="dropdown-item"  href="">Manage Notifications</a></li>
    <li><a class="dropdown-item"  href="">Change Password</a></li>
    <li><a class="dropdown-item"  href="">Delete Account</a></li>

    <li><a class="dropdown-item btn btn-sm btn-danger"  href="<?php echo $mainurl;?>?logout-here" onclick="return confirm('Are you sure to Logout user?')">Logout!</a></li>

    
            </ul>
        </li>
       
        <?php 
        }
        ?>

        </ul>
        
      <form class="d-flex">
       
      </form>

      
    </div>
  </div>
</nav>