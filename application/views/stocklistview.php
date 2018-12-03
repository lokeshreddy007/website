<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Upload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    

    <?php $id = intval($_GET['id']);?>

<?php foreach ($stock as $item){?>
     <?php if( $item->idstockup == $id){ ?>
     <?php $idstockup = $item->idstockup; ?> 
            <?php $Material = $item->Material; ?>
            <?php $Quantity = $item->Quantity; ?>
     <?php $Price = $item->Price; ?>
    
            <?php $Tax = $item->Tax; ?>
            <?php $Address = $item->Address; ?>
            <?php $Phone = $item->Phone; ?>
            <?php $Vendor = $item->Vendor; ?>
            <?php $Email = $item->Email; ?>

        <?php $Date = $item->Date; ?>
            
          


            <?php } ?>
<?php } ?>
    
        

    
    <div class="Back">
        <!-- <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);"> -->
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>


    </div>

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;">Stock List view</h2>
        
  
  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Managementcontrol/stocklist" method="post">
      <center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>
    <div class="col-sm-6"><br>
    
    <!-- <div class="form-group">
        <label class="control-label col-sm-4" for="email">Material*:</label>
        <div class="col-sm-8">
            
            <input type="text" class="form-control" id = "theFieldID" placeholder="Enter Material" name="Material" required value="<?php echo $name ?> ">
      </div>
    </div> -->
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Material*</label>
      <div class="col-sm-8">          
          <input disabled type="text" class="form-control" id="myInput"  value="<?php echo $Material ?>"   placeholder="Enter Material" name="Material" style="background-color:#5bc0de" >  
                           
      </div>
    </div>  
    
          <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Quantity*</label>
      <div class="col-sm-8"> 
      <input disabled type="number" class="form-control" id="pwd"  value="<?php echo $Quantity ?>" placeholder="Enter Tax" name="Quantity"  >     
      </label>           
      </div>
    </div>
        
         
        <!--include()-->
   <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Price*</label>
      <div class="col-sm-8">          
        <input disabled type="number" class="form-control" id="pwd"  value="<?php echo $Price ?>"  placeholder="Enter Price" name="Price" style="background-color:#5bc0de" >
      </div>
    </div>
        
        
      <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Tax*</label>
      <div class="col-sm-8"> 
      <input disabled type="number" class="form-control" id="pwd"  value="<?php echo $Tax ?>"  placeholder="Enter Tax" name="Tax"  >

    </label>
             
    </div>
    </div>
        
    
        
        <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Address*</label>
      <div class="col-sm-8">          
          <textarea disabled class="form-control" id="pwd"    placeholder="Enter Address" name="Address" style="background-color:#5bc0de"> <?php echo $Address ?> </textarea>
      </div>
    </div>
    
    </div>
      
       
      
      <div class="col-sm-6"><br>
       
          
      <div class="form-group">
      <label class="control-label col-sm-4" for="email">Phone Number*:</label>
      <div class="col-sm-8">
          <input disabled type="number" class="form-control" value="<?php echo $Phone ?>" id="id-phone" oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter phone number" name="Phone" style="background-color:#5bc0de">
      <p id="phone"></p>
      </div>
    </div>
          
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Vendor</label>
      <div class="col-sm-8">          
      <input disabled type="text" class="form-control" id="pwd"  value="<?php echo $Vendor ?>"  placeholder="Enter Vendor" name="Vendor"  >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Email*</label>
      <div class="col-sm-8">          
          <input disabled type="email" class="form-control" id="mail"  value="<?php echo $Email ?>"  oninput="myFunction()" placeholder="Enter e-mail" name="Email"  data-validate="required,email"  style="background-color:#5bc0de">  
                           <p id="demo"></p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Date of recept*</label>
      <div class="col-sm-8">          
      <input disabled type="date" class="form-control"  value="<?php echo $Date ?>" placeholder="Enter date" name="Date" >

  
    </div>
    </div>
        
   
            <br>
     <div class="btn-group">
         
  <button type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
 
   <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/EnqueryNextPage'" style="text-align: center;margin:5px;" type="button" class="btn btn-primary">Next</button> -->

       
</div> 

<script>
    $(document).ready(function(){
        document.theFieldID.focus();
    });
</script>

    </div>
    </div> 
 
   </div>
</form>
<div id="mybutton1">
<button class="feed1" onClick="history.go(-1);">Back</button>
</div>


<div id="mybutton">
<button class="feed" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes?id=9'">Next</button>
</div>
</body>
</html>
