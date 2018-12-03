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
  <?php 
//  var_dump($userinfo);
  //var_dump($invoiceInfo);
    $invoiceamount=0;
  $balance=0;
    if(!empty($invoiceInfo)){
  $invoiceamount=$invoiceInfo[0]->invoiceamount;
  $balance=$invoiceInfo[0]->balance;
  }
  ?>
  
  
  
 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" onload="getData();" >

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
  <a href="<?php echo base_url();?>" class="navbar-left"><img src="<?php echo base_url();?>images/logo.png"></a>
      
      
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">DASH BOARD</a></li>
        
         <li><a href="<?php echo base_url();?>ProjectControl/contactus">Services</a>
                                    <ul>
                                      <!--  sk<li><a href="<?php echo base_url();?>ProjectControl/contactus">Design </a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/contactus">Production </a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/contactus">Carpentry </a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/contactus">General Design </a></li>
                                        -->
                                       
                                    </ul>
                                </li>
         <li><a href="<?php echo base_url();?>ProjectControl/ongoingproject">Projects</a>
                                    <ul>
   <!-- 
                                        <li><a href="<?php echo base_url();?>ProjectControl/ongoingproject">On Going Projects</a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/finishedproject">Finished Projects</a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/upcomingproject">Up Coming Projects</a></li>
                                -->       
                                    </ul>
                                </li>
        <li><a href="<?php echo base_url();?>ProjectControl/aboutus">About Us</a></li>
          <li><a href="<?php echo base_url();?>UserControl/userLogout">Log Out</a></li>
        
        
        
      <!--   <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li>-->
        
        
        
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>-->
<!-- 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   
    <!-- Wrapper for slides -->
 
   <br><br>
    <div class="container">
        <center><h2>Hi <?php echo $userinfo[0]->name;?> </h2></center>
    <div class="row">
    <div class="col-sm-6">
    <a href="#" class="btn btn-info" role="button">Quotation</a>
    
    </div>

    <div class="col-sm-6">
    <a href="#" class="btn btn-info" role="button" data-toggle="modal" data-target="#myModal">Payment</a>
    
    </div>
    
    </div>
     </div>



<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment</h4>
        </div>
        <div class="modal-body">
       <form action="<?php echo base_url();?>meTrnPay.php" method="POST">
        <input type="hidden" value="WL0000000007015" id="mid" name="mid">
        <input type="hidden" value="a7f9e71fe97fc24aa076572038350eca" id="enckey" name="enckey">
        <input type="hidden" value="5000000654" id="OrderId" name="OrderId">
        <input type="hidden" value="INR" id="currencyName" name="currencyName"> 
   <input type="hidden" value="S" id="meTransReqType" name="meTransReqType">
   <input type="hidden" value="" id="recurPeriod" name="recurPeriod">
   <input type="hidden" value="" id="recurDay" name="recurDay">
   <input type="hidden" name="numberRecurring" id="numberRecurring" value="">
   <input type="hidden" name="addField1" id="addField1"  />
   <input type="hidden" name="addField2" id="addField2" />
   <input type="hidden" name="addField3" id="addField3"  />
   <input type="hidden" name="addField4" id="addField4" />
   <input type="hidden" name="addField5" id="addField5" />
   <input type="hidden" name="addField6" id="addField6"  />
   <input type="hidden" name="addField7" id="addField7" />
   <input type="hidden" name="addField8" id="addField8" />
   
 
         <input type="hidden" value="<?php echo base_url();?>meTrnSuccess.php" id="responseUrl" name="responseUrl">
                 <div class="row">
    <div class="col-sm-6">
     
   
    <label class="radio">
      <input type="radio" id="partid" name="optradio" value="">Partial Payment
    </label>
    <label class="radio">
      <input type="radio" id="paritalid" name="optradio" value="<?php echo $balance; ?>">Full Payment
    </label>
     </div>
         <div class="col-sm-6">
      
   <div class="form-group">
       <label>Total Invoice Amount</label>
    <input type="number" class="form-control" id="email" name="psaa" style="width:150px;" value="<?php echo $invoiceamount;?>">
  </div>
  
   <div class="form-group">
      <label>Balance Amount</label>
    <input type="number" class="form-control" id="balance" name="balance" style="width:150px;"  value="<?php echo $balance;?>">
  </div>
  
  <div class="form-group">
      <label>Pay</label>
    <input type="hidden" class="form-control" id="amount" name="amount" style="width:150px;"  value="">
    <input type="text" class="form-control" id="partialpay" name="partialpay" style="width:150px;"  value="">
  </div>
  
    <label class="checkbox-inline">
      <input type="checkbox" value=""><a href="<?php echo base_url();?>UserControl/termsandconditions">Our Terms and Condition</a>
    </label>
  
           <button type="submit" class="btn btn-success">Pay</button>
  
   
    </div>
         </div>
         
         
         
         </div>
           </form>
         
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

 
 <script>
$(document).ready(function(){

$("input[name='optradio']").click(function() {
  
  
  
    $('#partialpay').val(this.value);
     $('#amount').val(this.value+"00");
    if(this.value=="")
    {
    alert("Please Enter the Amount");
    }
    
});
$('#partialpay').blur(function(){
       $('#amount').val(this.value+"00");
    });
});
</script>





<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

 
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
 
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

 
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>


 <script type="text/javascript">
		function getData()
		{
			var d = new Date();
			var n = d.getTime();
			var OrderId = n +  '' +randomFromTo(0,1000);
			
			document.getElementById("OrderId").value = OrderId;
			return true;
		}

		function randomFromTo(from, to){
			return Math.floor(Math.random() * (to - from + 1) + from);
		}


	</script>

</body>
</html>
