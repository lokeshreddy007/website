<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Live Data Search in Codeigniter using Ajax JQuery</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Live Data Search in Codeigniter using Ajax JQuery</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		<br />
		<br />
		<br />
                
                <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Vendar Name*</label>
      <div class="col-sm-8">       
          <input id="NowName" type="text" value="<?php echo $row->name ?> " class="form-control" name="vname" style="background-color:#5bc0de" placeholder=" Enter Name ">
          <!--<input id="NowName" type="text" class="form-control"   placeholder="Enter Vendar Name"  name="vname">-->
      </div>
    </div> 
      
         <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Vendor ID*</label>
      <div class="col-sm-8">          
        <input type="number" class="form-control" value="<?php echo $row->mail ?> " id="pwd"  placeholder="Enter Vendor ID" name="num"  >
      </div>
    </div>
    
        
         </div>
      
       
      
      <div class="col-sm-6"><br>
      <div class="form-group">
      <label class="control-label col-sm-4" for="email">Phone Number*:</label>
      <div class="col-sm-8">
          <!--<input type="number" class="form-control" id="id-phone" oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter phone number" style="background-color:#5bc0de" name="phone">-->
  
    <input id="Nowget" type="text"  value="<?php echo $row->name ?> " class="form-control" name="phone"  style="background-color:#5bc0de"  onkeypress="if(this.value.length==10) return false" min="0" placeholder="phone number ">
 
      </div>
     
    </div>
     
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Email*</label>
      <div class="col-sm-8">          
          <!--<input type="email" class="form-control" id="myInput" oninput="myFunction()" placeholder="Enter e-mail" name="mail"  data-validate="required,email">-->  
          <input id="NowMail"  value="<?php echo $row->mail ?> " class="form-control" type="text" name="mail" placeholder="Enter Mail ">  
          <p id="demo"></p>
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Address*</label>
      <div class="col-sm-8">          
          <textarea class="form-control" id="pwd" placeholder="Enter Address" style="background-color:#5bc0de" name="address"><?php echo $comment?></textarea>
      </div>
    </div>

                
	</body>
</html>


<script>
$(document).ready(function(){

	load_data();

	function load_data(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>Managementcontrol/fetchven",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#result').html(data);
			}
		})
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
});
</script>