<html>
    <head>
        <title>Liveinpassion</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- load jQuery UI CSS theme -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

	<style>
	body {
  background-image: url("<?php echo base_url(); ?>images/lp3.jpg");
  background-size: 1370px 700px;
    background-repeat: no-repeat;
} 



.body {
	background-color:#c8cbd1;
}

.jumbotron-flat {
   background-color: solid #4DB8FFF; 
  background-color: solid #c8cbd1;

 
  height: 100%;
   border: 1px solid #4DB8FF; 
 

}

.centered {
    text-align: left;
	margin-left:30%;
	
}

.title {
 padding-top: 15px;   
}
.div{
	border : 0px  solid black;
	margin-left:30%;
	padding-left:30px;
	
}
	 body {
	background-image: url("<?php echo base_url(); ?>images/lp3.jpg");
	background-size: 1370px 700px;
		background-repeat: no-repeat;
	}  
        .Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          /*margin-bottom: 10px;*/
          padding-right: 8%;
      }
	</style>
    </head>
    <body>
	  
<!--<section>
  <a href="<?php echo base_url();?>" class="navbar-left"><img src="<?php echo base_url(); ?>images/logo.png"></a>
</section>-->
</br>
<div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
         <button onclick="window.location.href='<?php echo base_url();?>UserControl/displayemp'" style="text-align: center;" type="button" class="btn btn-success">Employee List</button>
  

    </div>
        <div class="container">
        <div class="centered title"><h1>Manager Code Create</h1></div>
     </div>
<!-- / <hr class="/eaturette-divider"></hr> -->
<span class="border border-primary">
<div class="div" style="border-style: solid; border-width:0.5px;border-radius: 15px;background-color: white;left:900px; width: 600px;">
         <div class="container"   >
		 
            <div class="row">
                <div class="col-sm-5">
                <div class="tab-content">
  <div id="stripe" class="tab-pane fade in active">
                       <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
					   <form class="form-horizontal" action="<?php echo base_url();?>UserControl/insertcode" method="post">            <br>
          <div class='form-row' >
              <div class='form-group required'>
                <div class='error form-group hide'>
                
            </div>
                <label class='control-label'>Name</label>
                <input class='form-control'  placeholder='enter name' name="name" type='text'>
              </div>
                    
            </div>
            <div class='form-row'>
              <div class='form-group card required'>
                  <label class='control-label'>Email</label>
                <input autocomplete='off' placeholder='enter mail' name = "mail" class='form-control card-number' style="background-color:#5bc0de" type='email'>
              </div>
            </div>
             <div class='form-row'>
              <div class='form-group card required'>
                <label class='control-label'>Phone Number</label>
                <input autocomplete='off'  placeholder='enter number' oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" name = "num" class='form-control'  type='number'>
              </div>
            </div>
            <div class='form-row'>
              <div class='form-group cvc required'>
                <label class='control-label'>Code:</label>
                <input autocomplete='off' class='form-control card-cvc' name = "code"style="background-color:#5bc0de" placeholder='ex. 311'  type='text'>
              </div>
              <div class='form-group expiration required'>
                <label class='control-label'>Retype Code:</label>
                <input class='form-control card-expiry-month' name = "codebro" placeholder='ex. 311' type='text'>
              </div>
              <div class='form-group expiration required'>
                <label class='control-label'>Date</label>
<input type="data" id="datepicker" class="form-control"  placeholder="Enter date now" name="dat" >
              </div>
            </div>
    
           
			<button type="submit" style="margin-left:150px;" class="btn btn-primary">Submit</button>  

        
     
          
            <br><br><br>
        </div>
		</span>   
                    
                    
                </div>
               
				</div>   
                
            </div>
        </div>
		

        
        </form>
        <script>
$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0});
  });
  </script>
    </body>
</html>