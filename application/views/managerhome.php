<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<style>
.dropbtn {
    background-color: blue;
    color: white;
    padding: 16px;
    font-size: 16px;
    border-radius: 25px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 260px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 25px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-radius: 25px;
}

.dropdown-content a:hover {background-color:gray;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: blue;}
  
body {
 background-image: url("<?php echo base_url(); ?>images/lp3.jpg");
 background-size: 1370px 700px;
    background-repeat: no-repeat;
} 
.parallelogram {
	width: 100px;
	height: 50px;
	transform: skew(20deg);
	background: #555;
}
.a {
  position: relative;
  display: block;
  width: 230px;
  height: 50px;
  border-radius: 10px 5px 5px 10px;
  background: transparent;
  font: 22px Constantia, sans-serif;
  color: black;
  font-weight:550;
  line-height: 50px;
  text-align: center;
  text-decoration: none;
}

.a:before,
.a:after {
  content: '';
  position: absolute;
  left: -15px;
  width: 32px;
  height: 15px;
  border-radius: 5px;
  background: lightgrey;
}
.a:before {
  top: 9px;
  -webkit-transform: rotate(295deg);
  -ms-transform: rotate(295deg);
  transform: rotate(295deg);
}
.a:after {
  bottom: 9px;
  -webkit-transform: rotate(-295deg);
  -ms-transform: rotate(-295deg);
  transform: rotate(-295deg);
}
.inner{
  display:inline-block;
}
#outer
{
  width:100%;
  text-align:center;
}

</style>
</head>
<body>
    <h1 style="text-align : center;color:white;">Manager Page</h1>
<div id="outer">    
    <div style="align:right;">
<div class="dropdown"  style="margin:20px;padding: 20px;">
    <p class="a">Sales Home </p>
    <!-- <a href="">sales</a> -->
  <div class="dropdown-content">
    <a href="<?php echo base_url();?>Managementcontrol/Saleshome">Sales Home </a>
    <a href="<?php echo base_url();?>Managementcontrol/todayfollowup">Today Followup</a>
    <!-- <a href="<?php echo base_url();?>Managementcontrol/Checkfollowuplist">Checkfollowuplist </a> -->
        <a href="<?php echo base_url();?>Managementcontrol/Checkfollowuplist">Followup </a>
                <a href="<?php echo base_url();?>Managementcontrol/Conformorder">Oder Conformation </a>

            <!-- <a href="<?php echo base_url();?>Managementcontrol/Conformorder">Conformorder </a> -->
  </div>
</div>

<!-- <div class="dropdown dropright">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Dropright button
    </button>
    <div class="dropdown-menu"> -->


    <div class="dropdown dropright">
<!-- <div class="dropdown" style="margin:20px;padding: 20px;"> -->
        <p class="a" >Design Home </p>
  <div class="dropdown-content">
    <a href="<?php echo base_url();?>Managementcontrol/showdesgin">Designer</a>
    <!-- <a href="<?php echo base_url();?>Managementcontrol/showoverduelist">Designs</a>
    <a href="<?php echo base_url();?>Managementcontrol/showoverduelist">Orders Confirmed -->
</a>
  </div>
</div>
    
<div class="dropdown" style="margin:20px;padding: 20px;">
    <p class="a">Collection Home </p>
  <div class="dropdown-content">
    <a href="<?php echo base_url();?>Managementcontrol/Collectionshome">Collection Home</a>
    <a href="<?php echo base_url();?>Managementcontrol/showduelist">Due list</a>
    <a href="<?php echo base_url();?>Managementcontrol/showoverduelist">Over Due list</a>
    <a href="<?php echo base_url();?>Managementcontrol/Clearlist">Clear List</a>
    <!-- <a href="#">Link 2</a> -->
    <!-- <a href="#">Link 3</a> -->
  </div>
</div>
<br>
<div class="dropdown" style="margin:20px;padding: 20px;">
<p class="a">Production Home </p>
    <!-- <button class="dropbtn">Production Home </button> -->
  <div class="dropdown-content">
    <a href="<?php echo base_url();?>Managementcontrol/Production">Production Home</a>
    <!--<a href="<?php echo base_url();?>Managementcontrol/Materialrequired">material Required</a>-->
    <!--<a href="<?php echo base_url();?>Managementcontrol/Materialreceived">material Received</a>-->
    <!-- <a href="<?php echo base_url();?>Managementcontrol/showoverduelist">Link 3</a> -->
  </div>
    </div>
    
<div class="dropdown" style="margin:20px;padding: 20px;">
<p class="a">Procurement Home</p>
    <!-- <button class="dropbtn">Procurement Home </button> -->

  <div class="dropdown-content">
    <a href="<?php echo base_url();?>Managementcontrol/Procurementhomes">Procurement Home</a>
    <a href="<?php echo base_url();?>Managementcontrol/materiallist">Material List</a>
    <a href="<?php echo base_url();?>Managementcontrol/vendorll">Vendor List</a>
        <a href="<?php echo base_url();?>Managementcontrol/stocklist">Stock List</a>
    <a href="<?php echo base_url();?>Managementcontrol/uploadstock">Stock Upload</a>
    <!-- <a href="<?php echo base_url();?>Managementcontrol/showoverduelist">Invoice</a> -->
  </div>
</div>
</div>
<div>
</body>
</html>

