<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
/* Credit to bootsnipp.com for the css for the color graph */
body{
          
		  background-image: url("<?php echo base_url();?>images/background/enqfrm.jpg");    
		  background-size: cover;
		  background-repeat: no-repeat;
		  }
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
      .Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 8%;
      }
</style>
</head>
<body>
<?php   
$code = array();
$name = array();
    foreach($output as $i){

        array_push($code,$i->code);
        array_push($name,$i->name);

    }
  
?>
                                    <?php $id = intval($_GET['id']);?>
                                        <?php
                                            echo $id;
                                        
                                        ?>
    
                                        <?php foreach ($emp as $value) { ?>
                                        <?php if($value->id == $id){?>
                                        <?php echo "hello";?>
                                            <?php
                                            $namef = $value->fname;
                                            $name2 = $value->sname;
                                            $pass = $value->pass;
                                            $spass = $value->spass;
                                            $mail = $value->mail;
                                            $name = $value->name;
                                            $code = $value->code;
                                            $phone = $value->phone;
                                            $aphone = $value->aphone;
                                            $age = $value->age;
                                            $dat = $value->dat;
                                             $qua = $value->qua;
                                              $gender = $value->gender;
                                               $role = $value->role;
                                                $address = $value->address;
                                                echo $address;
                                            ?>
                                     <?php   } ?>
    <?php   } ?>
    
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
         <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button> -->
        

    </div>

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;">Empolyee Registeration From</h2>
        
  
  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>UserControl/updateregister" method="post">
      <center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>
    <div class="col-sm-6"><br>
    
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">First Name*:</label>
        <div class="col-sm-8">
            
            <input type="text" value="<?php echo $namef; ?>"   class="form-control" id="fname" placeholder="Enter first name" style="background-color:#5bc0de" name="fname" required >
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Last Name*</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" value="<?php echo $name2; ?>"   id="lname" placeholder="Enter Last name"  name="sname">
      </div>
	</div>
	
	<div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Password*:</label>
        <div class="col-sm-8">
            
            <input type="password"    class="form-control" id="pass" placeholder="Enter Password " name="passwordone" style="background-color:#5bc0de"  >
      </div>
	</div>
	<div class="form-group">
        <label class="control-label col-sm-4" for="pwd">ConfirmPassword*:</label>
        <div class="col-sm-8">
            
            <input type="password"   class="form-control" id="spass" placeholder="Confirm Password " name="passwordtwo" >
      </div>
	</div>
        
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Email*</label>
      <div class="col-sm-8">          
          <input type="email" value="<?php echo $mail; ?>"   class="form-control" id="mail" oninput="myFunction()"  placeholder="Enter e-mail" name="mail"  data-validate="required,email" style="background-color:#5bc0de">  
                           <p id="demo"></p>
      </div>
    </div>
        
        
		
	<div class="form-group">
        <label class="control-label col-sm-4" for="email">Manager's Name*:</label>
        <div class="col-sm-8">

             <input type="text" class="form-control" id="mname" placeholder="Manager's name" name="name">
             <p id = "status"></p>
      </div>
	</div>	
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">Manager's Code*:</label>
        <div class="col-sm-8">

            <input type="password" class="form-control" id="mcode" placeholder="Manager's Code" name="code">
              <p id = "hello"></p>
      </div>
	</div>

  
    
    </div>
      
       
      
	  <div class="col-sm-6"><br>
	  
	  
	  
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Phone Number*:</label>
      <div class="col-sm-8">
          <input type="number" value="<?php echo $phone; ?>"   class="form-control" id="phone" oninput="phoneValidation()" style="background-color:#5bc0de" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter phone number" name="phone">
      <!-- <p id="phone"></p> -->
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-4" for="email">Alter Phone Number*:</label>
      <div class="col-sm-8">
          <input type="number" value="<?php echo $aphone; ?>"   class="form-control" id="aphone" oninput="phoneValidation()" style="background-color:#5bc0de" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter alter phone number" name="aphone">
      <!-- <p id="phone"></p> -->
      </div>
    </div>       
          
	<div class="form-group">
      <label class="control-label col-sm-4" for="email">Age*:</label>
      <div class="col-sm-8">
          <input type="number" value="<?php echo $age; ?>"   class="form-control" id="age" oninput="ageValidation()" onkeypress="if(this.value.length==2) return false" min="0" placeholder="Enter Age" name="age" >
      <p id="phone"></p>
      </div>
	</div>  
	
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Date of Birth</label>
      <div class="col-sm-8">          
        <input type="date" value="<?php echo $dat; ?>"   class="form-control" id="Birth"  placeholder="Enter date" name="dat" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Qualification</label>
      <div class="col-sm-8">          
        <input type="text" value="<?php echo $qua ; ?>"   class="form-control" id="qua"  placeholder="Enter Qualification" style="background-color:#5bc0de" name="qua">
      </div>
	</div>
	     
         
         
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Gender*</label>
      <div class="col-sm-8">          
       
  <select class="form-control"    id="gen" name="gender" >
       <option selected value="<?php echo $gender; ?>"  > <?php echo $gender; ?></option>
    <option>Male</option>
    <option>Female</option>
   
  </select>
    </div>
	</div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Role*</label>
      <div class="col-sm-8">          
       
      
	<select class="form-control"    id="sales" name="role"  >
       <option selected ><?php echo $role; ?></option>
    <option>Sales</option>
    <option>Design</option>
	<option>Collections</option>
	<option>Production</option>
	<option>Procurement</option>
	<option>Manager</option>
  </select>
    </div>
	</div>

              <input type="hidden" value="<?php echo $id;?>" name="id" >
	
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Address*</label>
      <div class="col-sm-8">          
          <textarea class="form-control"   id="add" placeholder="Enter Address" name="address" style="background-color:#5bc0de"><?php echo $address; ?></textarea>
      </div>
    </div>
	
	<br>
     <div class="btn-group">
         
         <!--<button  id="check" type="submit" style="margin:5px;" class="btn btn-primary">check</button>-->
         <button  id ="pay" type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
 

       
</div> 
</div>   
</div> 

<script> 
    var y = <?php echo json_encode($code); ?>;
    var x = <?php echo json_encode($name);?>;
//    console.log(x);
//    console.log(y);

//console.log(x.includes("lokesh"));

$("#mname").on("keydown keyup", function() {
        myFunction();
    });
    function myFunction(){
        var name = document.getElementById("mname").value;
//        console.log(name);
        if(x.includes(name)){
//            console.log("hehehhehe");
            $("#status").text("\u2713 Available"); 

        }else{
            $("#status").text(""); 
            
        }
    }
    $("#mcode").on("keydown keyup", function() {
        myFunctionnow();
    });
    function myFunctionnow(){
        var code = document.getElementById("mcode").value;
//        console.log(code);
        if(y.includes(code)){
//            console.log("eheheheheeh");
            $("#hello").text("\u2713 Available"); 
            var fincode = code;
//            console.log("the final code is fincode");
//            console.log(fincode);
            

        }else{
            $("#hello").text(""); 
            
        }
    }
    $('#pay').click(function (){
   
      var now =   document.getElementById("mname").value;
      
//      console.log(now);  
       var inval =   document.getElementById("mcode").value; 
//       console.log(inval);  
      if(y.includes(inval) && x.includes(now)){
         document.getElementById("pay").disabled = false;
        
    }else{
        alert("The code you entered and the Name you entered are not present in the database");
        return false;
    }
   
    
    
});
function validateForm() {
     var x = document.forms["myForm"]["fname"].value;
     var y = document.forms["myForm"]["lname"].value;
      var z = document.forms["myForm"]["pass"].value;
       var a = document.forms["myForm"]["spass"].value;
        var b = document.forms["myForm"]["mail"].value;
         // var c = document.forms["myForm"]["pname"].value;
          var d = document.forms["myForm"]["phone"].value;
           var e = document.forms["myForm"]["aphone"].value;
            var f = document.forms["myForm"]["age"].value;
             var g = document.forms["myForm"]["Birth"].value;
             var h = document.forms["myForm"]["qua"].value;
//             var i = document.forms["myForm"]["gen"].value;
//             var j = document.forms["myForm"]["sales"].value;
             var k = document.forms["myForm"]["add"].value;
//             var l = document.forms["myForm"]["plots"].value;
      
     if (x == "") {
         alert("NAME must be filled out");
         return false;
     }
      if (y == "") {
         alert("Last Name must be filled out");
         return false;
     }
     if (z == "") {
         alert("password must be filled out");
         return false;
     }
       if (a == "") {
         alert("password must be filled out");
         return false;
     }
       if (b == "") {
         alert("EMAIL must be filled out");
         return false;
     }
//       if (c == "") {
//         alert("distance must be filled out");
//         return false;
//     }
        if (d == "") {
          alert("phone must be filled out");
          return false;
      }
       if (e == "") {
         alert("phone must be filled out");
         return false;
     }
       if (f == "") {
         alert("age must be filled out");
         return false;
     }
       if (g == "") {
         alert("Birth must be filled out");
         return false;
       }

      if (h == "") {
         alert("Qualification  must be filled out");
         return false;
      }
      
         if (i == "") {
         alert("Gender must be filled out");
         return false;
        
 }

 if (j == "") {
         alert("Role must be filled out");
         return false;
 }

 if (k == "") {;
         alert("Address must be filled out");
         return false;
 }

// if (l == "") {
//         alert("plots must be filled out");
//        return false;
//    }


 }
    
</script> 

</form   



	</body>
	</html>
