<!DOCTYPE html>
<html lang="en">

<head>
    <title>userorderconfirmation</title>
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

        /* // body {

        //     background-color: #ffffff;
        // }

        // .form-horizontal .form-group {
        //     margin-right: -20px;
        //     margin-left: -75px;
        // }

        // .form-control {
        //     display: block;
        //     width: 75%;
        //     height: 34px;
        //     padding: 6px 12px;
        //     font-size: 14px;
        //     line-height: 1.42857143;
        //     color: #555;
        //     background-color: #fff;
        //     background-image: none;
        //     border: 1px solid #ccc;
        //     border-radius: 4px;
        //     -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        //     box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        //     -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        //     -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        //     transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        // }


        // .getoder {
        //     display: inline;
        // }

        // .container {
        //     width: auto;
        // }

        // table {
        //     width: 70%;
        //     font: 17px Calibri;
        // }

        // table,
        // th,
        // td {
        //     border: solid 1px #DDD;
        //     border-collapse: collapse;
        //     padding: 2px 3px;
        //     text-align: center;
        // }

        // table {
        //     width: 100%;
        //     margin: 20px 0;
        //     border-collapse: collapse;
        // }

        // table,
        // th,
        // td {
        //     border: 1px solid #cdcdcd;
        // }

        // table th,
        // table td {
        //     padding: 5px;
        //     text-align: left;
        // }
 */

    </style>
</head>

<!-- <body style="background-image: url('E:/code/navya project/cafe/images/01.jpg');"> -->
<?php 
 $url = $_SERVER["REQUEST_URI"];
//  echo $url; 
//    $fragment = parse_url($url,PHP_URL_FRAGMENT); 
$arr = explode("/",$url);
//print_r($arr);
 $now = $arr;
 $len = count($now);
// /echo $len;
 $val = $len -1;
// echo $val;
// echo $now[$val];
 $val1 = $len -2;
 $val2 = $len -3;
 $nowdate =  $now[$val];
 $idinstall =  $now[$val2];
  $nowamount =  $now[$val1];
// echo '<br/>';
// echo $idinstall; 
// echo $nowamount ;
//  echo $nowdate ;
      ?> 
<div class="container">
<?php $id = intval($_GET['id']);?>
    <?php
    echo $id;
    
    ?>
                                    <?php foreach($view as $item){?>

                               
                                 
                                  <?php if( $item->iduser == $idinstall){?>
                                <?php $iduser=  $item->iduser; ?>
                                <?php $name=  $item->name; ?>
                                <?php $mail=  $item->mail; ?>
                                <?php $phone=  $item->phone; ?>
                               <?php $finalamount=  $item->finalamount; ?>
                        <?php $paid=  $item->paidamount; ?>
    
                                <?php }?>   
                                    <?php }?> 
    
     <?php foreach($bal as $item){?>
    <?php $hello = $item->Quantity;?>
   
      <?php }?> 
    <?php
    $bal = $finalamount-$hello-$paid;
    
    
    ?>
    <?php $id = intval($_GET['id']);?>
                                    <?php foreach($instlist as $item){?>

                                <?php $id = intval($_GET['id']);?>
    
                                 
                                  <?php if( $item->iduser == $idinstall){?>
                                <?php if( $item->installementno == $idinstall){?>
                                <?php $amount=  $item->amount; ?>
                               <?php }?>   
                                <?php }?>   
                                    <?php }?> 
    
    
                               
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
       
       <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
         <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button> -->
                            
    </div>
    <div class="follow" align="center" > 
        <h1><b> Payment</h1>
        </div>
          <div class="container" >
        
          <form class="form-horizontal" name="myForm"  action="<?php echo base_url();?>Managementcontrol/checkduepayment" method="post">


                  <div >
                      <div class="row">
                                      <div class="col-sm-4" >
                              <div class="form-group">
                                  <label>CUSTOMER ID:</label>
                                  <input disabled  style="margin-right:5px;" type="text" class="form-control" value="<?php echo $iduser ?>" placeholder="Enter Customer Id" name="iduser">
                              </div>
                          </div>
          
                              <div class="col-sm-4">
                              <div class="form-group">
                                  <label>CUSTOMER NAME:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $name ?>" placeholder="Enter name" name="name">
                              </div>
                          </div>
                          <!--  style="background-color: #5bc0de" <br> -->
                          <!-- <br> -->
                          <!-- <br> -->
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>EMAILID:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $mail ?>" id="fin" placeholder="mail" name="mail">
                              </div>
                          </div>
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>PHONE NUMBER:</label>
                                  <input disabled type="number" class="form-control"  value="<?php echo $phone ?>" id="fin" placeholder="phonenumber" name="phone">
                              </div>
                          </div>
          
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>FINAL QUATATION VALUE:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $finalamount ?>" id="final" placeholder="Final amount" name="finalamount">
                              </div>
                          </div>
                            <div class="col-sm-4">
                              <div class="form-group">
                                  <label>Due Amount:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $nowamount ?>" id="nowamount" placeholder="Final amount" name="amount">
                              </div>
                          </div>
          
                           
                          
                      </div>
                  </div>
         
          <input type="hidden" value="<?php echo $iduser ?>" name="iduser"  />
            <input type="hidden" value="<?php echo $name ?>" name="name"  />
            <input type="hidden" value="<?php echo $mail ?>" name="mail"  />
            <input type="hidden" value="<?php echo $phone ?>" name="phone"  />
            <input type="hidden" value="<?php echo $finalamount ; ?>" name="finalamount" />
            <input type="hidden" value="<?php echo $nowamount ; ?>" name="amount" />
            <input type="hidden" value="<?php echo $nowdate ; ?>" name="duedate" />
                  <br>
                  </div>
                  </div>
                 
                

<!-- <input type="text" id="member" name="member" value="">Number of members: (max. 10)<br />-->

<div id = "payment" >
<h3>Payments</h3>


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
            <td>
            <input style="width:50px;" name="Amountnow" value = "1" type="number" />
            </td>

            <td>
                <input   name="Amountnow"  id= "nowpay" type="number" />
            </td>
            <td>
                <input  name="RefrenceNo" type="number" />
            </td>

            <td>
                <input name="dat" type="date"  />
            </td>
            <td>
                <input  name="Cheque" type="number" />
            </td>
            <td>
                <input  name="bankname" type="text"  />
            </td>
            <td>
                <input  name="des" type="text" />
            </td>

            <td style="background-color: #5bc0de">
                <select name="paymenttype">
                  <option value="Cash">Cash</option>
                    <option value="Checq">Checq</option>
                    <option value="Card">Card</option>
                    <option value="Net banking">Net banking</option>
                    <option value="Others">Others</option>
                </select>
            </td>
        </tr>
    </thead>
</table>
</div>
</br>

<!--<div id="installmenttable">
    <h3 id="filldetails" onclick="addFields()">Installments</h3>
    <div  id="container"/> 

<table  class="table table-hover " id="tb">
<tr class="tr-header">
<th style="margin-right: 150px;">SNO:</th>
<th>Date</th>
<th>Amount</th>
<th>Description</th>
<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
</tr>
<tbody >
<tr>                               
<td><input type="text" name="installment[]" id = "installment[]"  class="form-control"></td>
<td><input type="date" name="date[]" id = "date[]"   class="form-control"></td>
<td><input type="text" name="Amount[]" id = "check[]"  class="form-control"></td>
<td><input type="text" name="description[]"  id = "description[]"  class="form-control"></td>
<td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td>
</tr>
</table>
    </div>
</div>-->
<!-- <input type="hidden" id ="instabro"  name="instabro"  /> -->
<input type="hidden" id ="instabro"  name="instabro"  />
<input type="hidden" id ="date"  name="date"  />
<input type="hidden" id ="amountnow"  name="amountnow"  />
<input type="hidden" id ="desicri"  name="desicri"  />
<input type="hidden" value="<?php echo $nowamount ; ?>" name="dueamount" />
<input type="hidden" value="<?php echo $id ; ?>" name="intnum" />

<div class="col-xs-offset-6 ">
                 
                 <!--<button disabled type="submit" class="btn btn-primary" id ="sumbit">Submit</button>-->
                 <button  type="submit" class="btn btn-primary" id ="pay">Pay</button>

                 <!--<button type="submit" id="button" class="btn btn-primary">Check</button>-->

                     </div>
<p id="demo"> </p>
                     </form>
                     
<script>
$('#pay').click(function (){
    
//         var fin = document.getElementById("Amountnow").value;            
         var final = document.getElementById("nowpay").value;
          var nowam = document.getElementById("nowamount").value;
//              console.log(final);
//               console.log(nowamount);
 var nowpay = parseInt(nowam);
            var now =   parseInt(final);
           
           typeof now;
             typeof nowpay;
//              console.log(typeof(now));
//              console.log(now);
              if (isNaN(now)) {
                  alert('Enter amount to pay');
//                  console.log("helloe");
                   return false;
              }
                    console.log(nowpay);
               console.log(now);
         
              if (now <= nowpay) {
                
                  console.log("helloe");
                   
              }
              else{
                     alert('please check the paying amount');
                     return false;   
              }
             
             
      
       
    


});   
//      $(document).ready(function(){
//        $("#payment").hide();
//    });
//
//$(function(){
//    $('#pay').on('click', function() {
//        $("#payment").show(); 
//    }); 
//});         


//$(function(){
//
//    $('#addMore').on('click', function() {
//              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
//              data.find("input").val('');
//     });
//     $(document).on('click', '.remove', function() {
//         var trIndex = $(this).closest("tr").index();
//            if(trIndex>0) {
//             $(this).closest("tr").remove();
//           } else {
//             alert("Sorry!! Can't remove first row!");
//           }
//      });
//});      
</script>

<!-- <script>

 $(document).ready(function() {
    // document.getElementById("sumbit").disabled = true;

    //this calculates values automatically 
    $("#install").on("keydown keyup", function() {
        addFields();
        
    });
});

function addFields(){
    var number = document.getElementById("install").value;
    var fin = document.getElementById("final").value;
    // console.log(fin);
    // console.log(number); 
    var x= fin/number;
    // console.log(x);
    for (i=1;i<number;i++){
        // console.log(i);
        var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');

    }
    var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
    $("#tb tr:eq(2)").hide();
    

}


//$('#button').click(function (){
//        var number = document.getElementById("nowpay").value;
//        var fin = document.getElementById("final").value;
//        console.log(number);
//        console.log(fin);
//        if(number == fin){
//            alert("super");
//        }else{
//            alert("pls check amount");
//            $("#installmenttable").show(); 
//            
//        }
//        return false;
//
//});

   
</script> -->







        
            
                    </body>
                    </html>
                        


