<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
 <title>LiveInPassion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {
  background-image: url("<?php echo base_url(); ?>images/lp3.jpg");
  background-size: 1370px 700px;
    background-repeat: no-repeat;
} 


#live{
color:white;
}
</style>

 </head>
 
 
<body> 
  <div class="container-fluid"><br>
<!--  
<section>
  <a href="<?php echo base_url();?>" class="navbar-left"><img src="<?php echo base_url(); ?>images/logo.png"></a>
</section>-->
 
 


  <section id="live">
  <div class="row">
    <div class="col-sm-4">
       <div class="container">
       
       
           
           
            <!-- 
             <div class="dropdown">
    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">login As
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="<?php echo base_url();?>Managementcontrol/Saleshome">Sales</a></li>
      <li><a href="<?php echo base_url();?>Managementcontrol/Designerhome">Design</a></li>
      <li><a href="<?php echo base_url();?>Managementcontrol/Collectionshome">Collections</a></li>
      <li><a href="<?php echo base_url();?>Managementcontrol/Production">Production</a></li>
      <li><a href="<?php echo base_url();?>Managementcontrol/Procurementhomes">Procurementhomes</a></li>
      <li><a href="<?php echo base_url();?>Managementcontrol/Manager">Manager</a></li>
    </ul>
  </div>
            
  -->
                                     
</div>
     </div>
    <div>
  
     
     </div>
      <div class="col-sm-8" style="margin-top:-40px;margin-left:35em;">
      <h1><b>Login</b></h1>
        
       <form action="<?php echo base_url(); ?>UserControl/loginCheckManager" method="post">
           <font color="red"> <i><?php echo $this -> session->flashdata("Created"); ?></i></font>
  <div class="form-group" >
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="width:250px;"required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" style="width:250px;" required>
  </div>
  
  <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>-->
  
  
  <center> <font color="red"> <i><?php echo $this -> session->flashdata("managerlogin"); ?></i></font></center>

  <p><i> <a href="<?php echo base_url(); ?>UserControl/employeeregister" style="color:white;">Register here</a></i>&nbsp; 
  
  <a href="<?php echo base_url(); ?>UserControl/adminlogin" style="color:white;">Admin Login</a></i></p>


   <button type="submit" class="btn btn-info" role="button">login</button>
  
  
</form>
       
    </div>
    
      <div class="col-sm-4">
      
    </div>
    </div>
  
  </section>
  
  
  
  
  
  
  
  
  </div>
  
</body>
</html>
