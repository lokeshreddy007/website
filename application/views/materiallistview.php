<!DOCTYPE html>
<html lang="en">
<head>
  <title>Enquiryfrom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
function myFunction() {
    var x = document.getElementById("myInput").value;   
    var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(pattern.test(x)){
    	document.getElementById("demo").innerHTML =  "<p style='color:green'></p>";
    }
    else{
    	document.getElementById("demo").innerHTML =  "<p style='color:red'><i>Please Enter Vaild Email</i></p>";
    }
}

function phoneValidation(){
    var x = document.getElementById("id-phone").value;   
    if(x.length == 10){
    	document.getElementById("phone").innerHTML =  "<p style='color:green'></p>";
    }
    else{
    	document.getElementById("phone").innerHTML =  "<p style='color:red'><i>Please Enter Vaild Phone number</i></p>";
    }
}


function AphoneValidation(){
    var x = document.getElementById("id-Aphone").value;   
    if(x.length == 10){
    	document.getElementById("Aphone").innerHTML =  "<p style='color:green'></p>";
    }
    else{
    	document.getElementById("Aphone").innerHTML =  "<p style='color:red'><i>Please Enter Vaild Phone number</i></p>";
    }
}
</script>

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
      .Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 8%;
      }
      body{
          
      background-image: url("<?php echo base_url();?>images/background/enqfrm.jpg");    
      background-size: cover;
      background-repeat: no-repeat;
      }
      h2{
          border-bottom:solid Gray;
          border-width: 2px;
      
      }
      .color{
          background-color:#5bc0de;
          
          }
      </style>

</head>

<body>
    
     <?php
    $num = array();
 
    ?>
    <?php $id = intval($_GET['id']);?>

<?php foreach ($material as $item){?>
     <?php if( $item->idmt == $id){ ?>
     <?php $idmt = $item->idmt; ?> 
            <?php $name = $item->name; ?>
            <?php $meas = $item->meas; ?>
            <?php $num = $item->num; ?>
            <?php $vname = $item->vname; ?>
            <?php $phone = $item->phone; ?>
            <?php $mail = $item->mail; ?>
            <?php $address = $item->address; ?>

            <?php $unit = $item->unit; ?>
            
            <?php $des = $item->des; ?>
   <?php echo $item->des; ?>

            <?php } ?>
<?php } ?>
    
    
       
    
    <div class="Back">
         <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);"> 
          <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/materiallist'" style="text-align: center;" type="button" class="btn btn-success">Next</button> 
         <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>

    </div>

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;">Materials List View</h2>
        
  
  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Managementcontrol/cmaterial" method="post">
      <center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>
    <div class="col-sm-6"><br>
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Material Name*</label>
      <div class="col-sm-8">          
        <input disabled type="text" class="form-control" value="<?php echo $name ?>"    id="pwd" placeholder="Enter Material Name" style="background-color:#5bc0de" name="name">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Units*</label>
      <div class="col-sm-8">          
<select  disabled class="form-control"  value="<?php echo $unit ?>" id="pwd" name="unit" >
           
      <option selected disabled  ><?php echo $unit ?></option>
    <option>Liters</option>
    <option>Units</option>
    <option>Kilo</option>
  </select>      </div>
    </div>
     
        <!--include()-->
         
       
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Vendor ID*</label>
      <div class="col-sm-8">          
        <input  disabled type="number" class="form-control" id="pwd"  value="<?php echo $num; ?>" placeholder="Enter Vendor ID" name="num" style="background-color:#5bc0de" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Vendar Name*</label>
      <div class="col-sm-8">          
        <input  disabled type="text" class="form-control" id="pwd" value="<?php echo $vname; ?>"  placeholder="Enter Vendar Name"  name="vname">
      </div>
    </div>
         <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Description*</label>
      <div class="col-sm-8">          
          <textarea  disabled class="form-control" id="pwd" value=" <?php echo $item->des; ?>" placeholder="Enter Description" name="des"><?php echo $des ?></textarea>
      </div>
    </div>
         </div>
      
       
      
      <div class="col-sm-6"><br>
       
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Phone Number*:</label>
      <div class="col-sm-8">
          <input  disabled type="number" class="form-control" value="<?php echo $phone; ?>" id="id-phone" oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter phone number" name="phone">
      <p id="phone"></p>
      </div>
    </div>
          
     
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Email*</label>
      <div class="col-sm-8">          
          <input  disabled type="email" class="form-control" id="myInput" value="<?php echo $mail; ?>" oninput="myFunction()" placeholder="Enter e-mail" name="mail"  data-validate="required,email" style="background-color:#5bc0de">  
                           <p id="demo"></p>
      </div>
    </div>
        
          
         
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Address*</label>
      <div class="col-sm-8">          
          <textarea  disabled class="form-control" id="pwd"placeholder="Enter Address" name="address"> <?php echo $address ?></textarea>
      </div>
    </div>
          
    
            <br>
     <div class="btn-group">
         
  <button type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
 
   <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/EnqueryNextPage'" style="text-align: center;margin:5px;" type="button" class="btn btn-primary">Next</button> -->

       
</div>      
<script>

$('#myForm input').on('change', function() {
  //  alert($('input[name=radioName]:checked', '#myForm').val()); 
   var x = $('input[name=radioName]:checked', '#myForm').val();
   console.log(x);
   if(x == 2){
     var y= true;
          document.getElementById("Upload").disabled = y;
   }else{
    document.getElementById("Upload").disabled = false;
   }


});



</script> 

    </div>
    </div> 
 
   </div>
</form>
<!--<div id="mybutton1">
<button class="feed1" onClick="history.go(-1);">Back</button>
</div>


<div id="mybutton">
<button class="feed" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/uploadstock?id=9'">Next</button>
</div>-->
</body>
</html>
