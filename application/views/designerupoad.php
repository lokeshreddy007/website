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
.feed1 {
  background-color : #31B0D5;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton1 {
  position: fixed;
  bottom: -4px;
  left: 10px;
}
     
      .feed {
  background-color : #31B0D5;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton {
  position: fixed;
  bottom: -4px;
  right: 10px;
}
      
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
            .row {
    margin-right: -75px;
    margin-left: -90px;
}
 
  </style>
</head>
  <?php $id = intval($_GET['id']);?>
 <?php $desginname = $_SESSION['Designername']; ?>
  <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/showfileupload?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
        <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Designerhome?id=/<?php echo $desginname; ?>'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>

<center><h1>Design Upload</h1></center>
 </div>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
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
     <?php $id = intval($_GET['id']);?>
        <?php foreach($viewfollowups as $item){?>
                            
                                <?php $id = intval($_GET['id']);?>
                                 
                                  <?php if( $item->idenquirylist == $id){?>
                                 <?php $name =  $item->name; ?>
           
     <?php }?>   
            <?php }?>  
        <?php echo form_open_multipart('Managementcontrol/designdo_uploader');?>  
        <form method="post" >
            <table border="0">
                <tr>
                    <td>ID: </td>
                    <td><input  name="userid" value="<?php echo $id; ?> " size="50"/></td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><input name="name" value="<?php echo $name; ?> "  size="50"/></td>
                </tr>
                 <tr>
                 <td>TITLE: </td>
                    <td><input type="text" name="certificateName" size="50"/></td>
                </tr>
                
                <tr>
                    <td>Attach: </td>
                    <td><input type = "file" name ="userfile" size = "20" /> </td>
                </tr>
                 <tr>
                    <td>Comments: </td>
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
  
  </table>
  
</div>
</section>

</body>
</html>
