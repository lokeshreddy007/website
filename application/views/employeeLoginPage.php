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
 background: #bdc3c7;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
   
       color:white;
   
   
   
    } 
    
    #myModal{
    
    color:black;
    
    }
    
</style>

 </head>
 
 
 
<body> 
  <div class="container"><br>
     <div id="logo">
                            <a href="<?php echo base_url();?>Welcome/index">
                                <img class="logo" src="images/logo.png" alt="">
                            </a></div>
  <section>
  <a href="<?php echo base_url();?>Welcome/index" class="navbar-left"><img src="<?php echo base_url();?>images/logo.png"></a>
</section>
<div id="wrapper">

    <br/><br/><br/>
 
  
  <div class="row">
   
         <div class="col-sm-6">
         <img src="<?php echo base_url();?>images/payment.jpg" width="850"/>
         <!--
          <h1><b><center>Customer Registration</center></b></h1>
     
  <form class="form-horizontal" action="<?php echo base_url();?>UserControl/customerRegistration" method="post">
      <center> <font color="white"> <?php echo $this -> session->flashdata("status"); ?></font></center>
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="uname" style="width:250px;" required >
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Email:</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="uemail" style="width:250px;" required>
    </div>
  </div>
  
<div class="form-group">
    <label class="control-label col-sm-3" for="email">Description:</label>
    <div class="col-sm-9">
      <textarea type="text" class="form-control" id="description" placeholder="searching for....." name="udesc" style="width:250px; height:100px;" ></textarea>
    </div>
  </div> 
  
  
   <div class="form-group">
   
    <label class="control-label col-sm-3" for="NUM">Mobile No:</label>
    <div class="col-sm-9"> 
      <input type="number" class="form-control" id="num" placeholder="Enter mobile no" name="umobile" style="width:250px;" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Password:</label>
    <div class="col-sm-9"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="upwd" style="width:250px;" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Confirm password:</label>
    <div class="col-sm-9"> 
      <input type="password" class="form-control" id="cpwd" placeholder="Re-enter Password" name="cpassword" style="width:250px;" required>
    </div>
  </div>
  
  
  
  <div class="form-group"> 
    <div class="col-sm-offset-5 col-sm-7">
          <button type="submit" class="btn btn-info" role="button" onclick="myFunction()">Register</button>
      
    </div>
  </div>
   
</form>
-->
  </div>
   <div class="col-sm-3">
    </div>
  
   <div class="col-sm-3">
    
     <h1><b>Login</b></h1>
     
       <form action="<?php echo base_url();?>UserControl/CustomerLoginCheck" method="post">
             <center> <font color="white"> <?php echo $this -> session->flashdata("userlogin"); ?></font></center>
  <div class="form-group" >
    <label for="mobile no.">Mobile no.:</label>
    <input type="text" class="form-control" id="mobile no." placeholder="Enter mobile number" name="umobile" style="width:250px;"required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="uupwd" style="width:250px;" required>
  </div>
  
  
  <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>-->
  
  
  
  <!--  <p data-toggle="modal" data-target="#myModal"><i>&nbsp;&nbsp;&nbsp;Forgot Password?</i></p> -->
  
  
  
   <button type="submit" class="btn btn-info" role="button">login</button>
   
  <a href="<?php echo base_url();?>ProjectControl/contactus" type="button" class="btn">Register here</a>

  
</form>
   <center style="color:red;"> <?php echo $this -> session->flashdata("status3"); ?></center>      

    
    
     </div>
     </div>
  
  
  </div>
   
   
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forget Password</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="forgetpassword.do" method="post">
       $this->session->set_flashdata('status3','registered Successfully');
         
          <div class="form-group">
   
    <label class="control-label col-sm-2" for="NUM">Mobile No:</label>
    <div class="col-sm-10"> 
      <input type="number" class="form-control" id="num" placeholder="Enter mobile no" name="umobile"  style="width:250px;" required>
    </div>
  </div>
  
  <br><br><br>
           <center> <button type="submit" class="btn btn-info" role="button">Submit</button></center>
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  <script>
  var pwd = document.getElementById("pwd")
  var cpwd = document.getElementById("cpwd");

function validatePassword(){
	
  if(pwd.value != cpwd.value) {
    cpwd.setCustomValidity("Passwords Don't Match");
  } 
  
  else {
    cpwd.setCustomValidity('');
  }
}

pwd.onchange = validatePassword;
cpwd.onkeyup = validatePassword;
  
</script> 
<script>
function myFunction() {
    alert("Register Successful");
}
</script>

  
  
</body>
</html>
