<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Upload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- load jQuery and jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- load jQuery UI CSS theme -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">


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
          .Back{
          right: 3px;
          padding : 10px;
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-right: -50%;
          margin-bottom: 10px;
		  padding-right:0;
      }
    
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}



input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
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

   
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
                 <?php if (!$this->session->userdata('Manager')) {?>

        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

 <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
    </div>

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;">Stock UPload</h2>
        
  
  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Managementcontrol/stockinsert" method="post">
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
          <input type="text" class="form-control" id="Matname"   placeholder="Enter Material" name="Material" style="background-color:#5bc0de" >  
                           
      </div>
    </div>  
    
           
        
      
<div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Quantity*</label>
      <div class="col-sm-4">          
        <input type="text" name="meas" value="<?php echo $meas ?>"    class="form-control" id="pwd"  placeholder="Enter Quantity "  >
       </div>
       <div class="col-sm-4">
           <input type="text" name="unit"   id ="finalvalueofunit"   class="form-control" id="pwd"  placeholder="Enter value "  >
           
           
<!--       <select class="form-control"  value="<?php echo $unit ?>" id="pwd" name="unit" > 
      <option selected disabled  ><?php echo $unit ?></option>
    <option>Liters</option>
    <option>Units</option>
    <option>Kilo</option>
  </select>-->
    </div>
    </div>
        
         
        <!--include()-->
   <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Price*</label>
      <div class="col-sm-8">          
        <input type="number" class="form-control" id="pwd"  placeholder="Enter Price" name="Price" style="background-color:#5bc0de" >
      </div>
    </div>
        
        
      <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Tax*</label>
      <div class="col-sm-8"> 
      <input type="number" class="form-control" id="pwd" placeholder="Enter Tax" name="Tax"  >

    </label>
             
    </div>
    </div>
        
     <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Vendor</label>
      <div class="col-sm-8">          
      <input type="text" class="form-control" id="NowName" placeholder="Enter Vendor"  style="background-color:#5bc0de" name="Vendor"  >
      </div>
        
         </div>
    
    </div>
      
       
      
      <div class="col-sm-6"><br>
       
          
      <div class="form-group">
      <label class="control-label col-sm-4" for="email">Phone Number*:</label>
      <div class="col-sm-8">
          <input disabled type="number" class="form-control" id="Nowget" oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter phone number" name="Phone" style="background-color:#5bc0de">
      <p id="phone"></p>
      </div>
    </div>
            <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Email*</label>
      <div class="col-sm-8">          
          <input disabled type="email" class="form-control" id="NowMail" oninput="myFunction()" placeholder="Enter e-mail" name="Email"  data-validate="required,email" >  
                           <p id="demo"></p>
      </div>
    </div>
          
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Address*</label>
      <div class="col-sm-8">          
          <textarea disabled class="form-control" id="address" placeholder="Enter Address" name="Address" style="background-color:#5bc0de"></textarea>
      </div>
    </div>
  
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Date of recept*</label>
      <div class="col-sm-8">          
      <input type="data" id="datepicker" class="form-control"  placeholder="Enter date" name="Date" >

  <!-- <input id="txtstartdate"  class="form-control" placeholder="Enter Date" name="Date"  />  -->

      </div>
    </div>
        
            <br>
    
    </div> 
 
   </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <div class="btn-group">
  <input type="hidden" id ="Now"  name="Phone"  />
<input type="hidden" id ="email"  name="Email"  />
<input type="hidden" id ="add"  name="Address"  />

         
 <div class="btn-group">
           <button type="submit" id="button" style="margin:5px;" class="btn btn-primary">InFo By Name</button>
   <button  type="submit" id="net" style="margin:5px;" class="btn btn-primary">InFo By Number</button>
    <button  type="submit" class="btn btn-primary"  style="margin:5px;" id ="Check">Check</button>
   <button disabled type="submit" style="margin:5px;" id ="Submit" class="btn btn-primary">Submit</button>
</div> 

 

    </div>
    <script>
$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0});
  });
 
  </script>
</form>

      <?php 
      
            $mat = array();
            $unit = array();
            $check = array();
            $mail = array();
            $name = array();
            ?>
       <?php foreach($material as $iteam){ ?>
        <?php array_push($mat,$iteam->name);?>
        <?php array_push($unit,$iteam->unit);?>
       <?php } ?>
            <?php foreach($vendor as $iteam){ ?>
                
               <?php array_push($check,$iteam->num);?>
             <?php array_push($mail,$iteam->mail);?>  
            <?php array_push($name,$iteam->name);?>  
                    
            <?php } ?>
      <script>
       
      var matval = <?php echo json_encode($mat); ?>; 
       var unitval = <?php echo json_encode($unit); ?>; 
      console.log("matval val is tha t");
       console.log(matval);
        console.log(unitval);
      
                    
               
                    $('#Check').click(function (){
//                        alert("button clicked");
                        var mat = document.getElementById("Matname").value;
                        var l = <?php echo json_encode($mat); ?>;
                        console.log(l);
                        console.log(mat);
                      
//                       
                         console.log(l.includes(mat));
                         if(l.includes(mat)){
                             alert("value is present");
                             var nowval = matval.indexOf(mat);
                              console.log("this is he check foikr nowval");
                             console.log(nowval);
                             var finvalunit = unitval[nowval];
                              console.log(finvalunit);
//                               console.log(y);
                             document.getElementById("finalvalueofunit").value = finvalunit;
                               document.getElementById("Submit").disabled = false;
                              
                         }else{
                             alert("The Material You Entered is Not Present in Material List");
                         }
                               

                        return false;
                    
            });
      
                       
      
      
      </script>
      
      
      
    <script> 
        var  all = <?php echo json_encode($vendor); ?>;
        console.log(all);
         console.log("hrheheh");
       console.log(all.length);
        console.log("len");
        var go =all.length; 
        var see = [];

        for(var x =0;x<go;x++){
            console.log(all[x]['name']);
             see.push(all[x]['name']);
        }
        var same = [];
        var size = see.length;
//         console.log("going inside");
//        console.log(size); 
        for(var i = 0; i <= size; i++) {
        for(var j = 0; j < i; j++) {
            if(see[i] == see[j]) {
//                console.log("inside loop");
                same.push(see[i]);
                  same.push(i);
//                console.log(see[i]);
               
            }
        }
    }
        console.log(same); 
        
        console.log(see);
     
        var lensame = same.length;
        console.log(lensame);
          
        console.log("see array");
       index = all.findIndex(x => x.name == "lok");
       console.log(index);
         console.log("hrheheh");
        console.log(all [0]['name']);
        
         console.log("looping.....");
    
        $('#button').click(function (){
        var number = document.getElementById("Nowget").value;
        var Email = document.getElementById("NowMail").value;
        var Name =  document.getElementById("NowName").value;
        
//     if(lensame > 0){
//         
//          for(var k = 0; k < lensame; k++) {
//               console.log("having an element");
//             console.log(same[k]);
//             console.log(same[k]);
//             document.getElementById("net").disabled = false;
//              }
//          
//      }else{
//          console.log("having an no  element");
//      }
  
        console.log(number);
        indexnum = all.findIndex(x => x.name == Name );
       console.log(indexnum);
     
        var id = all[indexnum]['idvregister'];
         var hello = all[indexnum]['name'];
          var mail = all[indexnum]['mail'];
           var address = all[indexnum]['address'];
           var num = all[indexnum]['num'];
            var aphone = all[indexnum]['aphone'];
            console.log(id);
             console.log(name);
              console.log(mail);
               console.log(address);
               console.log(num);
               console.log(aphone);
//
//                document.getElementById("id").value = id;
                 document.getElementById("NowMail").value = mail;
                 document.getElementById("address").value = address;
                  document.getElementById("Nowget").value = num;
                   document.getElementById("email").value = mail;
                 document.getElementById("add").value = address;
                  document.getElementById("Now").value = num;
               
       return false;

       


});

 $('#net').click(function (){
        var number = document.getElementById("Nowget").value;
        var Email = document.getElementById("NowMail").value;
        var Name =  document.getElementById("NowName").value;
        
     if(lensame > 0){
         
          for(var k = 0; k < lensame; k++) {
               console.log("having an element");
             console.log(same[k]);
             console.log(same[k]);
             document.getElementById("net").disabled = false;
              }
          
      }else{
          console.log("having an no  element");
      }
  
        console.log(number);
        indexnum = all.findIndex(x => x.num == number );
       console.log(indexnum);
     
        var id = all[indexnum]['idvregister'];
         var hello = all[indexnum]['name'];
          var mail = all[indexnum]['mail'];
           var address = all[indexnum]['address'];
           var num = all[indexnum]['num'];
            var aphone = all[indexnum]['aphone'];
            console.log(id);
             console.log(name);
              console.log(mail);
               console.log(address);
               console.log(num);
               console.log(aphone);
//               document.getElementById("details").value = name;
//                document.getElementById("id").value = id;
                 document.getElementById("NowMail").value = mail;
                 document.getElementById("address").value = address;
                  document.getElementById("Nowget").value = num;
                  document.getElementById("email").value = mail;
                 document.getElementById("add").value = address;
                  document.getElementById("Now").value = num;
               
       return false;

       


});
        </script>
            
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
var w = <?php echo json_encode($name); ?>;
var y = <?php echo json_encode($check); ?>;
//var z = <?php echo json_encode($mail); ?>;   
 var matval = <?php echo json_encode($mat); ?>;  

//console.log(y);
/*An array containing all the country names in the world:*/
var countries = y;
//var mail = z;
var name = w;
console.log(countries);
console.log(w);
//console.log("value of x");
//console.log(name);
//console.log(z);
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("Matname"), matval);
autocomplete(document.getElementById("Nowget"), countries);
//autocomplete(document.getElementById("NowMail"), mail);
autocomplete(document.getElementById("NowName"), w);
</script>

</body>
</html>
