<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
    
</style>

 </head>
 
 
 
<body> 
  <div class="container"><br>
   
  <section>
  <a href="<?php echo base_url();?>" class="navbar-left"><img src="images/logo.png"></a>
</section>
<br>
<br><br><br>
  
  
  <div class="row">
    <div class="col-sm-4">
    
     </div>
     
         <div class="col-sm-4">
     
  <form class="form-horizontal" action="registercheck.do" method="post">
   
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="uname" required >
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Email:</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="uemail" required>
    </div>
  </div>

  <!-- <div class="form-group">
    <label class="control-label col-sm-3" for="email">Email:</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="uemail" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Password:</label>
    <div class="col-sm-9"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="upwd" required>
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Mobile No:</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" id="pwd" placeholder="Enter mobile no" name="umobile" required>
    </div>
  </div> -->
  
  
  
  <div class="form-group"> 
    <div class="col-sm-offset-5 col-sm-7">
          <button type="submit" class="btn btn-info" role="button">Register</button>
      
    </div>
  </div>
   
</form>
  </div>
  
   <div class="col-sm-4">
    
     </div>
     </div>
  
  
  </div>
  
</body>
</html>