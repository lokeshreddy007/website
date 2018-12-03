<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>orderconfirmation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
     
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
</head>

<body>
   <?php foreach($viewfollowups as $item){?>
    
                            
                                <?php $id = intval($_GET['id']);?>
                                 
                                  <?php if( $item->idenquirylist == $id){?>

                                 <?php $name =  $item->name; ?>
                                <?php $mail=  $item->mail; ?>
                               
                                <?php $phone=  $item->phone; ?>
                               

                              <?php }?>   
                                    <?php }?> 
                                    <?php $id = intval($_GET['id']);?>
<div class="container">
    <div class="Back">
    <button  onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Production'" style="text-align: center;" type="button" class="btn btn-success">Back</button>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Materialreceived?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
    <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Production'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
    <a href="<?php echo base_url();?>Managementcontrol/materialreq"  class="btn btn-success">
          <span class="glyphicon glyphicon-download-alt"></span> Download
        </a>
    <h1 style="text-align: center;"><b>MATERIALS REQUIRED</b></h1>

    </div>
      <div class="container" >
        
          <form class="form-horizontal" name="myForm"  action="<?php echo base_url();?>Managementcontrol/materialinsert" method="post">


                  <div >
                      <div class="row">
                                      <div class="col-sm-3" >
                              <div class="form-group">
                                  <label>CUSTOMER ID:</label>
                                  <input disabled style="margin-right:5px;" type="text" class="form-control" value="<?php echo $id ?>" placeholder="Enter Customer Id" name="iduser">
                              </div>
                          </div>
          
                              <div class="col-sm-3">
                              <div class="form-group">
                                  <label>CUSTOMER NAME:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $name ?>" placeholder="Enter name" name="name">
                              </div>
                          </div>  
                                   
                              <div class="col-sm-3">
                              <div class="form-group">
                                  <label>CUSTOMER Mail:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $mail ?>" placeholder="Enter name" name="name">
                              </div>
                          </div>  
                                  <div class="col-sm-3">
                              <div class="form-group">
                                  <label>CUSTOMER Phone Number:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $phone ?>" placeholder="Enter name" name="name">
                              </div>
                          </div>   
                                  </div>
                      <div id="installmenttable">
    <h3 id="filldetails" >Materialrequired:</h3>
    <div  id="container"/> 

<table  class="table table-hover " id="tb">
<tr class="tr-header">
<!--<th style="margin-right: 150px;">S.NO:</th>-->
<th>Material</th>
<th>Quantity</th>
<th>Date</th>

<!--<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>-->
</tr>
<tbody >
<tr>                               
<!--<td><input type="text" name="instabro[]" id = "instabro[]"  class="form-control"></td>-->
<td><input type="text" name="material[]" id = "material[]"  class="form-control"></td>
<td><input type="number" name="quantity[]"  id = "quantity[]"  class="form-control"></td>
<td><input type="date" name="date[]" id = "date[]"   class="form-control"></td>

<!--<td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td>-->
</tr>
</table>
    </div>
</div>
            <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Payment Check</h4>
      </div>
      <div class="modal-body">
        <p id="demo"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
<input type="hidden" value ="<?php echo $id ;?>" name="id"  />
 <input type="hidden" id ="instabro"  name="sno"  />
<input type="hidden" id ="material"  name="material"  />
<input type="hidden" id ="quantity"  name="quantity"  />
<input type="hidden" id ="date"  name="date"  />
<input type="hidden" value="<?php echo $id ?>"  name="id"  />
<input type="hidden"  value="<?php echo $name ?>"  name="name"  />
<input type="hidden"  value="<?php echo $mail ?>" name="mail"  />
<input type="hidden"  value="<?php echo $phone ?>"  name="phone"  />

            <div class="col-xs-offset-6 ">
                 
                 <button disabled  type="submit" class="btn btn-primary" id ="sumbit">Submit</button>
                 <button  type="submit" class="btn btn-primary" id ="Check">Check</button>

                 <button type="submit" id="install" class="btn btn-primary">Material add</button>

                     </div>
            
            
    
            </form>
            </br>

<!--            <input type="text"  align="center" border="1px" style="width:100%; line-height: 30px;" id="search" placeholder=" Search Here">-->
<table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">    
            
            
        <tr>
             <th>S.NO</th>
             <th>Material</th>
              <th>Quantity</th>
               <th>Date</th>
           
            
           
            
             </tr>
              <tbody >							
              <?php $num = 1;?>
				<?php foreach($mat as $data){ ?>
                                <?php if($data->iduser == $id){ ?>
                                       <td> <?php echo $num;?></td>
					<td><?php echo $data->material; ?> </td>
					<td><?php echo $data->Quantity; ?> </td>
					 <td><?php echo $data->date; ?> </td> 
					<?php $num = $num+1;?>
					</tr>
					<?php } ?>
                                        <?php } ?>
	
                    </tbody >
                    <?php 
            $check = array();
           
            ?>
            <?php foreach($getmat as $iteam){ ?>
                
               <?php array_push($check,$iteam->name);?>
                   
                    
            <?php } ?>
                    <script>
                    
               
                    $('#Check').click(function (){
//                        alert("button clicked");
                        var mat = document.getElementById("material[]").value;
                        var y = <?php echo json_encode($check); ?>;
                      
//                        ["Sam", "Great", "Sample", "High"].includes("mat"); 
//                         console.log(y.includes(mat));
                         if(y.includes(mat)){
//                             alert("value is present");
                              console.log(mat);
                               console.log(y);
                               document.getElementById("sumbit").disabled = false;
                               document.getElementById("install").disabled = true;
                         }else{
                             alert("The Material You Entered is Not Present in Material List");
                         }

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
//var w = <?php echo json_encode($name); ?>;
var y = <?php echo json_encode($check); ?>;
//var z = <?php echo json_encode($mail); ?>;   

//console.log(y);
/*An array containing all the country names in the world:*/
var countries = y;
//var mail = z;
//var name = w;
console.log(countries);
console.log(y);
//console.log("value of x");
//console.log(name);
//console.log(z);
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("material[]"), countries);
//autocomplete(document.getElementById("NowMail"), mail);
//autocomplete(document.getElementById("NowName"), w);
</script>
                   
        <script>
            
             $(document).ready(function(){
                $("#installmenttable").hide();
            });

        $(function(){
            $('#install').on('click', function() {
                $("#installmenttable").show(); 
                return false;
            }); 
        });      
         
  </script>

  <script>
        var $rows = $('#table tr');
$('#search').keyup(function() {
    
    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
        reg = RegExp(val, 'i'),
        text;
    
    $rows.show().filter(function() {
        text = $(this).text().replace(/\s+/g, ' ');
        return !reg.test(text);
    }).hide();
});
        </script>


      
            <script>
            
//                 $('#myModal').modal('show');
//
//setTimeout(function() {
//    $('#myModal').modal('hide');
//}, 10000); 
           $(function(){

    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>0) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
}); 
//adfadsfdasfsa


$('#sumbit').click(function (){
        
        var arr = [];
        var installment = [];
        var date = [];
        var desri = [];
        $.each($("input[id^='instabro']"), function(i, item) {
        var hello =  $(item).val();
        var int = parseInt(hello);
            installment.push(int);
        });
        $.each($("input[id^='date']"), function(i, item) {
        var dat =  $(item).val();
        var nowdat = dat;
            date.push(nowdat);
        });
        $.each($("input[id^='material']"), function(i, item) {
        var des =  $(item).val();
        var nowdes = des;
        arr.push(nowdes);
        });

        $.each($("input[id^='quantity']"), function(i, item) {

        var grade =  $(item).val();
        var integer = parseInt(grade);
            desri.push(integer);
        });
         console.log(installment);
        console.log(arr);
       
         console.log(desri);
        console.log(date);
          var a = [];
            for(var i=0;i< installment.length;i++){
                if (isNaN(installment[i])) {
                console.log("it is null");
                 
                
        }else{
            console.log(installment[i]);
            a.push(installment[i]);
            
        }
        
    }
     var d = [];
            for(var i=0;i< date.length;i++){
                if (date[i] != '' ) {
               
                d.push(date[i]);
        }else{
            console.log("it is null");
        }
    }
      var m = [];
            for(var i=0;i< arr.length;i++){
                if (arr[i] !=  '') {
               
                m.push(arr[i]);
        }else{
            console.log("it is null");
        }
            }
           
            var q = [];
            for(var i=0;i< desri.length;i++){
                if (isNaN(desri[i])) {
                console.log("it is null");
        }else{
            console.log(desri[i]);
            q.push(desri[i]);
        }
    }
    console.log(a);
        console.log(m);
       
         console.log(q);
        console.log(d);
//          document.getElementById("instabro").value = a;
                document.getElementById("material").value = m;
                document.getElementById("date").value = d;
                document.getElementById("quantity").value = q;
//        return false;
              });
//            

            </script>
     
    
 

					 
 
</table>
</body>
</html>


