<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
  body {
 /* background-color:black;*/
  
  color:black;
  
      font: 400 15px/1.8 Lato, sans-serif;
      
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color:cyan;
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
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
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
  }
  </style>
     </head>
    <body> 
  <div class="container">
  
  
  
  
  
    
    
    
    
    <!-- Trigger the modal with a button -->
<center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit Quotation</button></center>


<center> <font color="red"> <?php echo $this -> session->flashdata("quotationstatus"); ?></font></center>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Employee Invoice Registration</h4>
      </div>
      <div class="modal-body">
      
      
       <div class="row">
               <form class="form-horizontal" action="<?php echo base_url();?>ProjectControl/SaveInvoiceForm" method="post">

    <div class="col-sm-6" >
     
      
      
  <div class="form-group">
    <label class="control-label col-sm-5" for="email">Name:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="uname" required >
    </div>
  </div>
  <br>
  
  
  
   <div class="form-group">
    <label class="control-label col-sm-5" for="email">Mobile No:</label>
    <div class="col-sm-7">
      <input type="number" class="form-control" id="email" placeholder="Enter mobile no" name="umobile" required>
    </div>
  </div>
  <br>
  
  
  <div class="form-group">
    <label class="control-label col-sm-5" for="pwd">Invoice Amount:</label>
    <div class="col-sm-7"> 
      <input type="number" class="form-control" id="pwd" placeholder="Enter invoice amount" name="uinvoice" required>
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-5" for="pwd">Paid Amount:</label>
    <div class="col-sm-7"> 
      <input type="number" class="form-control" id="pwd" placeholder="" name="pamt" required>
    </div>
  </div>
      
      
      
      
      
      
      
      
        </div>
        
        
         <div class="col-sm-6" >
      
      
    
  <div class="form-group">
    <label class="control-label col-sm-5" for="pwd">Date:</label>
    <div class="col-sm-7"> 
      <input type="date" class="form-control" id="pwd" placeholder="Enter date" name="date" required>
    </div>
  </div>
  
  <br>
  
  <div class="form-group">
    <label class="control-label col-sm-5" for="pwd">Reference No:</label>
    <div class="col-sm-7"> 
      <input type="number" class="form-control" id="pwd" placeholder="Enter reference no" name="refno" required>
    </div>
  </div>
  
  <br>
  
   <div class="form-group">
    <label class="control-label col-sm-5" for="pwd">Balance:</label>
    <div class="col-sm-7"> 
      <input type="number" class="form-control" id="pwd" placeholder="Enter Balance" name="balnce" required>
    </div>
  </div>
  
  <br>
  
  
   <div class="form-group"> 
    <div class="col-sm-offset-5 col-sm-7">
          <button type="submit" class="btn btn-info" role="button">Submit</button>
      
    </div>
  </div>
      
   
      
  
        </div>
        </div>
        
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<br><br>



<table class="table">
    <thead style="background-color:white;">
      <tr>
        <th>Name</th>
        <th>Mobile No</th>
        <th>Invoice Amount</th>
        <th>Paid Amount</th>
        <th>Date</th>
        <th>Reference No</th>
        <th>Balance</th>
          <th>Edit</th>
            <th>Delete</th>
        
      </tr>
    </thead>
    <tbody>
            <?php foreach($quationlist as $item){?> 
      
      <tr class="danger">
      
        <td><?php echo $item->name; ?></td>
        <td><?php echo $item->mobileno; ?></td>
        <td><?php echo $item->invoiceamount;?></td>
        <td><?php echo $item->paidamt;?></td>
        <td><?php echo $item->date;?></td>
        <td><?php echo $item->referenceno;?></td>
        <td><?php echo $item->balance;?></td>
          
       <!-- <td><a href="<?php echo base_url();?>managercontrol/DeleteSubItem?itemid=<?php echo $item->subid;?>">X</a></td>-->
       
       <td><a href="">Edit</a></td>
  <td><a href="">X</a></td>
      </tr>
     
      
     
    </tbody>
    			<?php }?>    

  </table>




  
  
  
  
  
<!--
<center><h3>Employee Invoice Registration</h3></center>
  
  <div class="row">
     <form class="form-horizontal" action="<?php echo base_url();?>ProjectControl/SaveInvoiceForm" method="post">

     
         <div class="col-sm-6">
     
   
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="uname" required >
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Mobile No:</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="email" placeholder="Enter mobile no" name="umobile" required>
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Invoice Amount:</label>
    <div class="col-sm-9"> 
      <input type="number" class="form-control" id="pwd" placeholder="Enter invoice amount" name="uinvoice" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Paid Amount:</label>
    <div class="col-sm-9"> 
      <input type="number" class="form-control" id="pwd" placeholder="" name="pamt" required>
    </div>
  </div>
  
  </div>
  
  
  
  
    <div class="col-sm-6">
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Date:</label>
    <div class="col-sm-9"> 
      <input type="date" class="form-control" id="pwd" placeholder="Enter date" name="date" required>
    </div>
  </div>
  
  
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Reference No:</label>
    <div class="col-sm-9"> 
      <input type="number" class="form-control" id="pwd" placeholder="Enter reference no" name="refno" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Balance:</label>
    <div class="col-sm-9"> 
      <input type="number" class="form-control" id="pwd" placeholder="Enter Balance" name="balnce" required>
    </div>
  </div>
  
  
  
  <div class="form-group"> 
    <div class="col-sm-offset-5 col-sm-7">
          <button type="submit" class="btn btn-info" role="button">Submit</button>
      
    </div>
  </div>
   
</form>
  
  </div>
   
     </div>
  -->
  
  </div>
  
</body>
</html>
