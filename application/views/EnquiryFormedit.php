<!DOCTYPE html>
<html lang="en">
<head>
  <title>Enquiryfromedit</title>
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
</style>
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
    
     <?php
    $num = array();
 
    ?>
    
    
        <?php foreach($viewfollowups as $item){?>
    
                            
                                <?php $id = intval($_GET['id']);?>
                                 
                                  <?php if( $item->idenquirylist == $id){?>
                                    <?php $id =  $item->idenquirylist; ?>
                                 <?php $name =  $item->name; ?>
                                <?php $mail=  $item->mail; ?>
                                <?php $dat =  $item->dat;?>
                                <?php $phone=  $item->phone; ?>
                                <?php $fdat =  $item->fdat;?>
                                <?php $comment =  $item->comment;?>
                                <?php $pname =  $item->pname;?>
                                <?php $distance =  $item->distance;?>
                                <?php $optradio =  $item->optradio;?>
                                <?php $design =  $item->design;?>
                                <?php $villa =  $item->villa;?>
                                <?php $phone =  $item->phone;?>
                                <?php $aphone =  $item->aphone;?>
                                <?php $delivery =  $item->delivery;?>
                                <?php $site =  $item->site;?>
                                <?php $img =  $item->img;?>
                                <?php $plots =  $item->plots;?>
                                <?php $hdate =  $item->hdate;?>

                              <?php }?>   
                                    <?php }?> 

    
    <?php $desginname = $_SESSION['Designername']; ?>
    <div class="Back">
    <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
                   <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/designEnquirynextpage?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
         <!--<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Designerhome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>-->
 <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Designerhome?id=/<?php echo $desginname; ?>'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

    </div>

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;">Enquiry From</h2>
        
  
  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Managementcontrol/Enquiryedit/<?php echo $id;?>" method="post">
      <center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>
    <div class="col-sm-6"><br>
    
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">Customer Name*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="cname" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Email*</label>
      <div class="col-sm-8">          
          <input type="email" class="form-control" id="myInput" oninput="myFunction()" value="<?php echo $mail ?>" placeholder="Enter e-mail" name="mail"  data-validate="required,email" style="background-color:#5bc0de">  
                           <p id="demo"></p>
      </div>
    </div>
        
         <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Date</label>
      <div class="col-sm-8">          
        <input type="date" class="form-control" value="<?php echo $dat ?>"  placeholder="Enter date" name="dat" >
        <!-- <input id="txtstartdate"  class="form-control" placeholder="Enter Date" name="dat"  />  -->

      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Project Name*</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="pwd" value="<?php echo $pname ?>" placeholder="Enter project name" style="background-color:#5bc0de" name="pname">
      </div>
    </div>
        <!--include()-->
   <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Distance*</label>
      <div class="col-sm-8">          
        <input type="number" class="form-control" id="pwd" value="<?php echo $distance ?>" placeholder="Enter distance" name="distance" >
      </div>
    </div>
        
        
      <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Floor Plan*</label>
      <div class="col-sm-8"> 
          <div class="color">
              
          
      <label class="radio-inline"  >
      <input type="radio" name="optradio" value="yes">Yes
      </label>
          
    <label class="radio-inline">
    <input type="radio" name="optradio" value="no">No
    </label>
              </div>
    </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Designer*</label>
      <div class="col-sm-8">          
       
  <select class="form-control"  id="sel1" name="design">
       <option selected ><?php echo $design ?></option>
    <option>Designer1</option>
    <option>Designer2</option>
    <option>Designer3</option>
  </select>
    </div>
    </div>
        
   <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Number of Villa/Post*</label>
      <div class="col-sm-8">          
        <input type="number" class="form-control" id="pwd" placeholder="Enter number of villa" name="villa" value="<?php echo $villa?>" style="background-color:#5bc0de">
      </div>
    </div>
        
        <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Comments*</label>
      <div class="col-sm-8">          
          <textarea class="form-control" id="pwd" placeholder="Enter comments" name="comment"><?php echo $comment?></textarea>
      </div>
    </div>
    
    </div>
      
       
      
      <div class="col-sm-6"><br>
       
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Phone Number*:</label>
      <div class="col-sm-8">
          <input type="number" class="form-control" id="id-phone" oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter phone number" name="phone" value="<?php echo $phone ?>">
      <p id="phone"></p>
      </div>
    </div>
          
          
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Alternate Phone</label>
      <div class="col-sm-8">          
          <input type="number" class="form-control" id="id-Aphone" oninput="AphoneValidation()" onkeypress="if(this.value.length==10) return false;" min="0"  placeholder="Enter alternate phone number" name="aphone"  value="<?php echo $aphone ?>" style="background-color:#5bc0de ">
      <p id="Aphone"></p>
      </div>
    </div>
      
         <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Followup Date</label>
      <div class="col-sm-8">          
      <!-- <input id="txtstartdate1"  class="form-control" placeholder="Enter Date" name="fdat"  />  -->
       <input type="date" class="form-control" id="pwd" placeholder="Enter followup date" name="fdat" value="<?php echo $fdat ?>" >
      </div>
    </div>
          
          <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Expected Delivery</label>
      <div class="col-sm-8">          
        <input type="date" class="form-control" id="pwd" placeholder="Enter delivery" name="delivery" value="<?php echo $delivery ?>" style="background-color:#5bc0de" >
        <!-- <input id="txtstartdate2" style="background-color:#5bc0de" class="form-control" placeholder="Enter Date" name="delivery"  />  -->

      </div>
    </div>
          
          <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Website</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter website" name="site" value="<?php echo $site ?>" >
      </div>
    </div>
          
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Image Upload</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" id="pwd" placeholder="upload" name="img" <?php $img =  $item->img;?> style="background-color:#5bc0de ">
      </div>
    </div>
          
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Cost of Villa/Plots</label>
      <div class="col-sm-8">          
        <input type="number" class="form-control" id="pwd" placeholder="Enter cost of villa" name="plots" value="<?php echo $plots ?>" >
      </div>
    </div>
          
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Site Handover Date</label>
      <div class="col-sm-8">          
      <input type="date" class="form-control" id="pwd" placeholder="Enter date" name="hdate" value="<?php echo $hdate ?>" style="background-color:#5bc0de">
      <!-- <input id="txtstartdate3" style="background-color:#5bc0de" class="form-control" placeholder="Enter Date" name="hdate"  />  -->

      </div>
    </div>
            <br>
     <div class="btn-group">
         
  <button type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
 
   <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/EnqueryNextPage'" style="text-align: center;margin:5px;" type="button" class="btn btn-primary">Next</button> -->

       
</div>      
<script>


// function validateForm() {
//     var x = document.forms["myForm"]["name"].value;
//     var y = document.forms["myForm"]["mail"].value;
//      var z = document.forms["myForm"]["dat"].value;
//       var a = document.forms["myForm"]["comment"].value;
//        var b = document.forms["myForm"]["distance"].value;
//         var c = document.forms["myForm"]["pname"].value;
//          var d = document.forms["myForm"]["design"].value;
//           var e = document.forms["myForm"]["delivery"].value;
//            var f = document.forms["myForm"]["hdate"].value;
//             var g = document.forms["myForm"]["img"].value;
            
      
//     if (x == "") {
//         alert("NAME must be filled out");
//         return false;
//     }
//      if (y == "") {
//         alert("EMAIL must be filled out");
//         return false;
//     }
//     if (z == "") {
//         alert("dat must be filled out");
//         return false;
//     }
//       if (a == "") {
//         alert("comment must be filled out");
//         return false;
//     }
//       if (b == "") {
//         alert("EMAIL must be filled out");
//         return false;
//     }
//       if (c == "") {
//         alert("distance must be filled out");
//         return false;
//     }
//       if (d == "") {
//         alert("pname must be filled out");
//         return false;
//     }
//       if (e == "") {
//         alert("delivery must be filled out");
//         return false;
//     }
//       if (f == "") {
//         alert("hdate must be filled out");
//         return false;
//     }
//       if (g == "") {
//         alert("img must be filled out");
//         return false;
    
// }
// }
</script> 

    </div>
    </div> 
 
   </div>
</form>

</body>
</html>
