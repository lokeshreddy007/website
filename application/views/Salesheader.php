  <!DOCTYPE html>

<html lang="en">

<head>

  <title>Liveinpassion</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>

      

      @import url('https://fonts.googleapis.com/css?family=Lato:300,400');



html, body {

  font-family: 'Lato', serif;  

}



.navbar-default {

  font-size: 1.15em;

  font-weight: 400;

  background-color: #ffffff;

  padding: 10px;
  
  text:f9eeee;

  border: 0px;

  border-radius: 0px;

}



.navbar-default .navbar-nav>li>a {

  color: #f9eeee;

}



.navbar-default .navbar-nav>li>a:hover {

  color: #cbf0ff;

}



.navbar-default .navbar-brand {

  color: #002433;

}



.navbar-default .navbar-brand:hover {

  color: #111756;

  text-shadow: 1px -1px 8px #b3e9ff;

}



.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus {

  background-color: #1a2f6d;

  color: white;

}



.navbar-default .navbar-toggle {

  border: none;

}



.navbar-default .navbar-collapse, .navbar-default .navbar-form {

  border: none;

}



.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {

  background-color: #002433;

}



.navbar-default .navbar-toggle .icon-bar {

  background-color: #ffffff;

}



.dropdown-menu {

  background-color: #004059;

  color: white;

  border: 0px;

  border-radius: 2px;

  padding-top: 10px;

  padding-bottom: 10px;

}



.dropdown-menu>li>a {

  background-color: #f2f6f7;

  color: white;

}



.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {

  background-color: #004059;

  color:white;

}



.dropdown-menu .divider {

    height: 1px;

    margin: 9px 0;

    overflow: hidden;

    background-color: #003246;

}



.navbar-default .navbar-nav .open .dropdown-menu>li>a {

    color: black;

}



@media (max-width: 767px) { 

  .dropdown-menu>li>a {

    background-color: #006b96;

    color: #ffffff;

  }

  .dropdown-menu>li>a:hover {

    color: #ffffff;

  }

  

  .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus, .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {

    color: #ffffff;

    background-color: transparent;

  }

  

  .dropdown-menu .divider {

    height: 1px;

    margin: 9px 0;

    overflow: hidden;

    background-color: #005577;

  }

} /* END Media Query */



  </style>





</head>

<body>
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
      
    <div class="navbar-header">
  <!-- <a href="<?php echo base_url();?>" class="navbar-left"><img src="<?php echo base_url();?>images/logo.png"></a> -->
    </div>
     <ul class="nav navbar-nav navbar-right">
     <?php
      $salesname = $_SESSION['Salesname'];
      ?>

      <li><a href="<?php echo base_url();?>Managementcontrol/Enquiryform">Enquiry</a></li>
      <li><a href="<?php echo base_url();?>Managementcontrol/todayfollowup">Today Follow Up's</a></li>
      <li><a href="<?php echo base_url();?>Managementcontrol/Checkfollowuplist">Follow up list</a></li>
      <li><a href="<?php echo base_url();?>Managementcontrol/Conformorder">0rder Confirmation</a></li>
      <li><a href="#"><?php echo $salesname; ?></a></li>
       <li><a href="<?php echo base_url();?>UserControl/userLogout">Logout</a></li>

    </ul>
  </div>
</nav>
</body>

</html>

