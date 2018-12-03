
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
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>


    </div>

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;">Purchase Oder</h2>
        
  
  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Managementcontrol/insertpo" method="post">
      <center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>
    <div class="col-sm-6"><br>
    
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">Material*:</label>
        <div class="col-sm-8">
            
            <input type="text"  style="background-color:#5bc0de" class="form-control" id="cname" placeholder="Enter Material" name="Material" required  ">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">Quantity*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="cname" placeholder="Enter Quantity" name="Quantity" required ">
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Price*</label>
      <div class="col-sm-8">          
          <input type="number" style="background-color:#5bc0de" class="form-control" id="myInput"  placeholder="Price" name="Price"  data-validate="required,email">                             
      </div>
    </div>
        
         
        <!--include()-->
  
        
        
      <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Tax*</label>
      <div class="col-sm-8"> 
      <input type="number" class="form-control" id="pwd" placeholder="Enter Tax" name="Tax" >

    </label>
             
    </div>
    </div>
        
    
        
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Vendor*</label>
      <div class="col-sm-8">          
       
       <input type="text" class="form-control" id="NowName" placeholder="Enter Vendor" style="background-color:#5bc0de" name="Vendor" >
     

    </div>
    </div>
    
    </div>
      
       
      
      <div class="col-sm-6"><br>
      <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Vendor Changed</label>
      <div class="col-sm-8">          
      <input type="text" style="background-color:#5bc0de" class="form-control" id="mail" oninput="myFunction()" placeholder="Enter Vendor Changed" name="Changed"  data-validate="required,email" >        </div>
    </div>
          
      <div class="form-group">
      <label class="control-label col-sm-4" for="email">Payment Term*:</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="id-phone" placeholder="Enter Payment Term" name="Payment">
      <p id="phone"></p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Comments</label>
      <div class="col-sm-8">          
      <input type="text" style="background-color:#5bc0de" class="form-control" id="pwd" placeholder="Enter Comments" name="Comments">
      </div>
    </div>
    
          
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Reason</label>
      <div class="col-sm-8">          
      <input type="text" class="form-control" id="pwd" placeholder="Enter Reason" name="Reason" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Delivary date*</label>
      <div class="col-sm-8">          
      <input type="date" style="background-color:#5bc0de" class="form-control"  placeholder="Enter date" name="Date" >
    </div>

    
   
    <!-- <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Comments</label>
      <div class="col-sm-8">          
      <input type="text" class="form-control" id="pwd" placeholder="Enter Comments" name="Comments">
      </div>
    </div> -->
    <!-- <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Vendor Changed*</label>
      <div class="col-sm-8">          
          <input type="text" class="form-control" id="mail" oninput="myFunction()" placeholder="Enter Vendor Changed" name="Changed"  data-validate="required,email" >  
                          
      </div>
    </div> -->
   
    </div>
        
            <br>
     <div class="btn-group">
         
  <button type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
 
   <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/EnqueryNextPage'" style="text-align: center;margin:5px;" type="button" class="btn btn-primary">Next</button> -->
  <?php 
            $check = array();
            $mail = array();
            $name = array();
            ?>
            <?php foreach($vendor as $iteam){ ?>
                
               <?php array_push($check,$iteam->num);?>
             <?php array_push($mail,$iteam->mail);?>  
            <?php array_push($name,$iteam->name);?>  
                    
            <?php } ?>
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
//        for (var key in all) {
//  if (all.hasOwnProperty(key)) {
//    var val = all[key];
//    console.log(val);
//  }
//}
        
        $('#button').click(function (){
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
//               document.getElementById("details").value = name;
                document.getElementById("id").value = id;
                 document.getElementById("NowMail").value = mail;
                 document.getElementById("address").value = address;
                  document.getElementById("Nowget").value = num;
               
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
                document.getElementById("id").value = id;
                 document.getElementById("NowMail").value = mail;
                 document.getElementById("address").value = address;
                  document.getElementById("Nowget").value = num;
               
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
//autocomplete(document.getElementById("Nowget"), countries);
//autocomplete(document.getElementById("NowMail"), mail);
autocomplete(document.getElementById("NowName"), w);
</script>
            
<script>


//var y = <?php echo json_encode($check); ?>;
//console.log(y);


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
</body>
</html>


