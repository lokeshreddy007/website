<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>orderconfirmation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <style>
     
      .Back{
          right: 3px;
          padding : 10px;
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-right: -70%;
          margin-bottom: 10px;
		  padding-right:0;
      }
   
      table {
            width: 100%;
         
        }

        table,
        th,
        td {
            border: solid 1px #DDD;
            border-collapse: collapse;
            text-align: center;
        }

      

</style>
</head>

<body>


    <div class="Back">
 <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);"> 
 <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Designerhome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>

    <h1 style="text-align: center;"><b>PRODUCTION REQURIEMENT</b></h1>
    </div>
     <form class="form-horizontal"  action="<?php echo base_url();?>Managementcontrol/stockinsert" method="post">
    <table>
        <thead>
          
               <tr>
                <th><b>SL.No</b></th>
                <th><b>List Of Materials</b></th>
                <th><b>Inventory</b></th>
                <th><b>In stock</b></th>
		<th><b>Release</b></th>
		<th><b>Date</b></th>
		<th><b>Balance</b></th>
		<th><b>CreatePO</b></th>
		<th><b>Price</b></th>
		<th><b>Vendor</b></th>
             </tr>
            
		       </thead>
                      <tr>
			 <div class="col-sm-8"> 
                                        <td>1</td>
                                        <td><input value="<?php echo $mat ?>"  name="comment"></td>
                                        <td><input value="<?php echo $total ?>"  style="width:50px;"  name="comment"></td>
                                        <td><input  style="width:50px;"  name="comment"></td>
                                        <td><input  style="width:50px;"  name="comment"></td>
                                        <td><input type="date"  name="comment"></td>
                                        <td><input style="width:50px;"   name="comment"></td>
                                        
         <td><a href="<?php echo base_url();?>Managementcontrol/Procurementpo"><i class="material-icons" style="font-size:20px;padding :10px;">arrow_forward</i>
         <td><input   name="comment"></td>
         <td><input   name="comment"></td>
                         </div>
             </tr>
					 
 
</table>

   <div class="col-xs-offset-6 ">
                 <button type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
                     </div>
  </form>
    
    
    <table>
    
                          
 
</table>
</body>
</html>


<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 


?>
<html>
    <head>
 <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
/*  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%);  make all photos black and white  
      width: 100%;  Set width to 100% 
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;  Hide the carousel text when the screen is less than 600 pixels wide 
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
    <!--  -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }*/
 .Back{
        
          right: 3px;
          padding : 10px;
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-right: -50%;
          margin-bottom: 10px;
      }
  </style>
</head>
  <?php $id = intval($_GET['id']);?>

  <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
 </div>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


<br/><br/>
<center><h1>Design Upload</h1>
<br></center>
<center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Image Upload</button>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">File Upload Form</h4>
      </div>
      <div class="modal-body">
       <center>
   
    
        <?php echo form_open_multipart('Managementcontrol/designdo_uploader');?>  
        <form method="post" >
            <table border="0">
                <tr>
                    <td>ID: </td>
                    <td><input  name="userid" value="<?php echo $id; ?> " size="50"/></td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="certificateName" size="50"/></td>
                </tr>
                
                <tr>
                    <td>Attach: </td>
                    <td><input type = "file" name ="userfile" size = "20" /> </td>
                </tr>
                 <tr>
                    <td>Description: </td>
                    <td><textarea rows="4" cols="50" name="Desc">
 
</textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Save">
                    </td>
                </tr>
            </table>
        </form>
    </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<section id="tab">

<div class="container">
   <table class="table">
    <thead class="thead-dark">
      <tr>
          <th>ID</th>
        <th>NAME</th>
        <th>IMAGE</th>
        <th>DESCRIPTION</th>
        <th>Comment</th>
        
      </tr>
    </thead>
     <tbody>
  <?php foreach($fileslist as $item){?>
				
				<tr>
        <td><?php echo $item->IMGTITLE; ?> </td>
        <td><img src=<a href="<?php echo base_url().$item->IMGPATH; ?>" alt="<?php echo $item->IMGPATH; ?>"height="100" width="142"> </a> </td>
        <td><?php echo $item->IMGDESC; ?>  </td>
         <td><a href="<?php echo base_url()."ProjectControl/deleteImageSlider"?>?imageId=<?php echo $item->imgid; ?>&fileName=<?php echo $item->IMGTITLE; ?>" class="btn btn-info" role="button">Delete</a></td>
         
       </tr>
				
			
			 <?php }?>  
       
      
      
    </tbody>
  </table>
  
</div>
</section>
</body>
</html>
