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
        .Back {

            right: 3px;
            padding: 10px;
            text-align: right;
            display: inline-block;
            width: 100%;
            margin-right: -50%;
            margin-bottom: 10px;
        }

 h1{
    margin-top: -40px;
    margin-bottom: 10px;
}

        body {

            background-color: #ffffff;
        }

        .form-horizontal .form-group {
            margin-right: -20px;
            margin-left: -75px;
        }

        .form-control {
            display: block;
            width: 75%;
            height: 34px;
            padding: 3px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }


     

        table {
            width: 100%;
         
        }

        table,
        th,
        td {
            border: solid 1px #DDD;
            border-collapse: collapse;
            text-align: center;
        }

    
        
      
    </style>
</head>

<body>
                            <?php $id = intval($_GET['id']);?>
                                    <?php foreach($viewfollowups as $item){?>

                                <?php $id = intval($_GET['id']);?>
                                 
                                  <?php if( $item->userid == $id){?>
                                <?php $amount=  $item->field7; ?>
                                <?php $phonenum=  $item->field3; ?>
                            
                          
    
                                <?php }?>   
                                    <?php }?> 
    
                                <?php $id = intval($_GET['id']);?>
                                 <?php foreach($viewname as $item){?>
                                 <?php $id = intval($_GET['id']);?>
                                  <?php if( $item->idenquirylist == $id){?>
                                   <?php $name =  $item->name; ?>
                                   <?php  $ID =  $item->idenquirylist;?>
                                    
                                <?php }?>   
                                    <?php }?> 
  

        
    <div class="container">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Managementcontrol/paymentinsert" method="post">

        <div class="Back">
                   <INPUT type="button" style="text-align: center" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
                    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

            <h1 style="text-align: center;">
                <b>ORDER CONFIRMATION</b>
            </h1>
        </div>



        <div class="col-lg-11 col-lg-offset-1 margin-body">
            <div class="row">
                            <div class="col-md-6">
                            
                    <div class="form-group">
                        <label>APPLICATION No:</label>
                        <input type="text" class="form-control" id="cname" value="<?php echo $ID ?>" placeholder="Enter Application Id" name="iduser">
                    </div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>CUSTOMER NAME:</label>
                        <input type="text" class="form-control" id="cname" value="<?php echo $name ?>" placeholder="Enter name" name="name">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <input type="hidden" value="<?php echo $phonenum ?>" name="phonenum" />
                <div class="col-md-6">
                    <div class="form-group">
                        <label>FINAL QUATATION VALUE:</label>
                        <input type="text" class="form-control"  value="<?php echo $amount ?>" id="fin" placeholder="Final amount" name="finalamount">
                    </div>
                </div>
      <!-- inst val        
     
      <?php $bal = array(); ?>
                              -->
      <?php foreach($viewdata as $item){?>  
          <?php echo "hello";?>  
          <?php $fin =  $item->finalamount; ?>
          <?php $installment =  $item->installment; ?>
          <?php array_push($bal, $item->amountnow); ?>         
      <?php } ?>
      <?php  $num= count($bal); ?>
      
    <?php 
   
    echo $num;
    echo $fin;
    echo array_sum($bal);
    $paid = array_sum($bal);
    $bal = $fin - $paid -$paid;
    echo $bal;
    
    
    ?>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>INSTALLMENT</label>
                        
                        <input type="text" class="form-control" value="<?php echo $installment ?>" name="installment" id="in"/>                   
                         </div>
                <!-- </div> -->
                <!-- <div class="col-md-3"> -->
                    <!-- <div class="form-group"> -->
                        <!-- <label style="margin-top:15px;"> Check:</label> -->
                        <!-- <button onclick="myFunction()" style="text-align: center;" type="button" class="btn btn-success">calculate</button> -->
                        <!-- <button onclick="myFunction()" id = "check" style="margin-top: 15px;margin-left: 15px" class="btn btn-primary"  >Calculate</button> -->
                <!-- </div> -->
<!-- </div>   -->
      </div>
    
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>BALANCE:</label>
                      <input type="text" class="form-control"   id="bal" value="<?php echo  $bal ?>"  placeholder="Balance" name="balance">
                    </div>
                </div>
          
<!-- upto here                                         -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Next INSTALLMENT DATE:</label>
                        <!-- <input type="date" class="form-control"  name="date" id="date" /> -->
                        <input id="dateField" class="form-control" name = newdate type="date" min="2014-01-01"   />
                    </div>
                </div>
            </div>
        </div>
        
        <table style="width:100%;margin: 0px;">
    
            
            
        <tr>
            <th>S.NO</th>
            <th>ID</th>
            <th>Name</th>
             <th>finalamount</th>
          <th>Paidamount</th>
            <th>Date</th>
                <th>paymenttype</th>
              <th>bankname</th>
           
        </tr>
         <?php
        $num = 1;
        ?>
   
         
           <tbody>   
      
        <?php foreach($viewdata as $item){?>  
               
               <tr>
               
          <td><?php echo $num ; ?></td>                                          
         <td><?php echo $item->iduser; ?></td>
          <td><?php echo $item->name; ?></td>
           
           <?php $installment =  $item->installment; ?>
          <td><?php echo $item->finalamount; ?></td>
           <td><?php echo $item->amountnow; ?></td>
           
           <?php $balnow =  $item->balance; ?>
             <?php $fin =  $item->finalamount; ?>
           <td><?php echo $item->date; ?></td>
            <td><?php echo $item->paymenttype; ?></td>
             <td><?php echo $item->bankname; ?></td>
     <?php $num += 1; ?>
  
             </tr>
              <?php }?>    
    </tbody>
  </table>

        <br>
        <br>
                  
        <h2>Payments</h2>


        <table>
            <thead id="tableInvestmentId">
                <tr>
                 <th>SL.No</th>
                    <th>Amount</th>
                          <th>Refrence.No</th>
                    
              
                    <th>Date</th>
                    <th>Cheque.No</th>
                    <th>Bank Name</th>
                    <th>Description</th>
                    <th>Payment Type</th>
                </tr>

                <tr>
                    <td>1</td>
                
                   
                   <?php $amountnow =  $item->amountnow; ?>
                    <td>
                        <input type="text" id ="demo"  value="<?php echo $amountnow ?>"    name="amountnow"  />
                    </td>
                 
                    <td>
                        <input  name="refrenceno" type="number" />
                    </td>
	
                    <td>
                        <input name="dat" type="date"  />
                    </td>
                    <td>
                        <input  name="cheque" type="number" />
                    </td>
                    <td>
                        <input  name="bankname" type="text" />
                    </td>
                    <td>
                        <input  name="des" type="text" />
                    </td>
                    
                    <td>
                        <select name="paymenttype" id="payment"> 
                          <option value="Cash">Cash</option>
                            <option value="Checq">Checq</option>
                            <option value="Card">Card</option>
                            <option value="Net banking">Net banking</option>
                            <option value="Others">Others</option>
                        </select>
                    </td>
                </tr>
            </thead>
            <tbody id="rowTableId"></tbody>
        </table>
        <div>
             <div class="col-xs-offset-6 ">
                 <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                       </div>
   
                   
        <hr>
        <script>
//             function insertRows() {
//                 var invCount = document.getElementById("investmentId").value;
// //                var invCount = Number(e.options[e.selectedIndex].value);
//                 // var invCount = document.getElementById('investmentId').value;
//                 console.log(invCount);
//                 if (invCount > 0) {
//                     if (invCount > 100) {
//                         invCount = 100;
//                     }
//                     document.getElementById("rowTableId").innerHTML = `<tbody id="rowTableId"></tbody>`
//                     for (var count = 1; count < invCount; count++) {
//                         document.getElementById("rowTableId").innerHTML += `
//                                 <tbody id="rowTableId">
//                                     <tr>
//                                         <td>`+ (count + 1) + `</td>
                                        
//                                         <td><input  type="text"/></td>
//                                             <td><input  type="text"/></td>
//                                                  <td><input type="date"/></td>
//                          <td><input  type="text"/></td>
//                                                         <td><input  type="text"/></td>
//                                                             <td><input  type="text"/></td>
//                                                                  <td>
//                         <select name="type" >
//                             <option selected= "true" disabled="disabled">Select Options</option>  
//                             <option value="Cash">Cash</option>
//                             <option value="Checq">Checq</option>
//                             <option value="Card">Card</option>
//                             <option value="Net banking">Net banking</option>
//                             <option value="Others">Others</option>
//                         </select>
//                     </td>                                                  
                           
//                                     </tr>
//                                 </tbody >`
//                     }
//                 }
//                 else {
//                     document.getElementById("rowTableId").innerHTML = `<tbody id="rowTableId"></tbody>`
//                 }
//             }
            ///////////////////////////////////////////////////////////////////////////////////////////////////

//            function addPaymentRows() {
//                var paymentSlCount = Number(document.getElementById('rowPayCountId').value);
//                // document.getElementById("rowPaymentTableId").innerHTML = `<tbody id="rowPaymentTableId"></tbody>`
//
//                document.getElementById("rowPaymentTableId").innerHTML += `
//                                <tbody id="rowPaymentTableId">
//                                    <tr id="`+ (Number(paymentSlCount) + 1) + `">
//                                        <td>`+ (Number(paymentSlCount) + 1) + `</td>
//                                        <td><input type="text"/></td>
//                                          <td><input type="date"/></td>
//                                        <td>
//										<select>
//										<option value="Cash">Cash</option>
//										<option value="Checq">Checq</option>
//										<option value="Card">Card</option>
//										<option value="Net banking">Net banking</option>
//                                                                             <option value="Others">Others</option>
//										</select>										</td>
//                                        <td><input type="text"/></td>
//                                        <td><input type="date"/></td>
//                                        <td><input type="text"/></td>
//                                        <td><input type="text"/></td>
//                                        <td><input type="text"/></td>
//                                    </tr>
//                                </tbody >`
//                document.getElementById('rowPayCountId').value = Number(paymentSlCount) + 1;
//            }
//
////            function removePaymentRows() {
//                var paymentSlCount = Number(document.getElementById('rowPayCountId').value);
//                if (paymentSlCount > 1) {
//                    stringId = String(paymentSlCount);
//                    document.getElementById(stringId).remove();
//                    document.getElementById('rowPayCountId').value = Number(paymentSlCount) - 1;
//
//                }
//            }
        </script>
         <script>
        $(document).ready(function() {
    //this calculates values automatically 

 
    $("#in").on("keydown keyup", function() {
        myFunction();
    });
});

function myFunction() {
    var fin = document.getElementById('fin').value;
    var ins = document.getElementById('in').value;
    var pointNum = parseFloat(fin);
    var Num = parseFloat(ins);
    console.log(pointNum);
    console.log(Num);
    var x = pointNum/Num;
    var bal= pointNum-x;
    console.log(bal);
    console.log(pointNum/Num);
    var n = x.toFixed(0);
    var b = bal.toFixed(0);
    // var x = 3.2;
    var decimals = x - Math.floor(n);
    console.log(decimals.toFixed(2)); 
    console.log(decimals.toFixed(2) * Num); 

    document.getElementById("demo").value = n;
fb    // document.getElementById("bal").innerHTML = bal;
    // window.alert('Installment is divided in to ' + Num +' installment of rupess' + x+' for Each installment');
 
    // console.log(fin+ins);
    
}

//     DISABLED DATA GO HERE ------------------------


// function sum() {
//             var x = document.getElementById('fin').value;
//             var y = document.getElementById('now').value;
//             console.log(x);
//             console.log(y);
//             var sum = x+y;
//            console.log(sum);
        
//             }


 function validateForm() {
    var a = document.forms["myForm"]["newdate"].value;
    var b = document.forms["myForm"]["refrenceno"].value;
    var c = document.forms["myForm"]["dat"].value;
    var d = document.forms["myForm"]["cheque"].value;
    var e = document.forms["myForm"]["bankname"].value;
    var f = document.forms["myForm"]["des"].value;

    if (a == "") {
        alert("Enter next installment date must be filled out");
        return false;
    }
    if (b == "") {
        alert("refrenceno must be filled out");
        return false;
    }
    if (c == "") {
        alert("date must be filled out");
        return false;
    }
    if (d == "") {
        alert("cheque must be filled out");
        return false;
    }
    if (e == "") {
        alert("bankname must be filled out");
        return false;
    }
    if (f == "") {
        alert("description must be filled out");
        return false;
    }
 }
        
         </script>
           </form>

    </div>

</body>

</html>




