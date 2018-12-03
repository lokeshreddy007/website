<!DOCTYPE html>
<html>
    

<head>
  <title>FollowUpForm</title>
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
//  echo $nowdate ;/
      ?> 
        <?php $id = intval($_GET['id']);?>
        
        <?php foreach($view as $item){?>
            <?php if( $item->iduser == $id){?>
                               <?php 
//                               echo $item->idconformtablenow;
//                                echo $item->finalamount;
                                $fin=  $item->finalamount;
//                                 echo $item->paidamount;
                                 $amountpaid =  $item->paidamount;
//                                  echo $item->iduser;
                               
                               ?>
                                    <?php }?> 
         <?php }?> 
        <?php foreach($instlist as $item){?>
                                     
                    <?php if( $item->iduser == $id){ ?>
                                       
                                         
                              <?php $installementno = $item->installementno; ?>
                               <?php echo $installementno;?>
                              <?php $dat = $item->dat; ?>
                             
                              <?php $amount = $item->amount; ?>
                                    <?php
                                    if($item->installementno !=0){
                                     $numint = $item->installementno; 
                                    
                                 }?>
                                       
                                   <?php  }?>
                                   <?php  }?> 
            <?php   
                                              echo $numint ;
            
            ?>
              <?php foreach($paydue as $item){?>
                                     
                    <?php if( $item->iduser == $id){ ?>
                                       
                                         
                              <?php $dueamount = $item->dueamount; ?>
                           
                              <?php $paidamount = $item->paidamount; ?>
                             
                             
                                      
                                      
                                       
                                   <?php  }?>
                                   <?php  }?> 
            
        <div class="container">
			<div class="Back">
			<INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
				<!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button> -->
				<?php if (!$this->session->userdata('Manager')) {?>
				<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Collectionshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
		<?php }  else {?>
			<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

		<?php } ?>

			</div>
            <form  action="<?php echo base_url();?>Managementcontrol/duecheckinstallment" method="post">
            
            
            
             <h1 style="text-align: center;"><b>FOLLOW UP LIST</b></h1>
                           

                      <div class="row">
                                      <div class="col-sm-4" >
                              <div class="form-group">
                                  <label>CUSTOMER ID:</label>
                                  <input disabled style="margin-right:5px;" type="text" class="form-control" value="<?php echo $item->iduser; ?>" placeholder="Enter Customer Id" name="iduser">
                              </div>
                          </div>
          
                              <div class="col-sm-4">
                              <div class="form-group">
                                  <label>CUSTOMER NAME:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $item->name; ?>" placeholder="Enter name" name="name">
                              </div>
                          </div>
                          <!--  style="background-color: #5bc0de" <br> -->
                          <!-- <br> -->
                          <!-- <br> -->
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>EMAILID:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $item->mail; ?>" id="fin" placeholder="mail" name="mail">
                              </div>
                          </div>
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>PHONE NUMBER:</label>
                                  <input disabled type="number" class="form-control"  value="<?php echo $item->phone; ?>" id="fin" placeholder="phonenumber" name="number">
                              </div>
                          </div>
          
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>FINAL QUATATION VALUE:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $item->finalamount; ?>" id="final" placeholder="Final amount" name="finalamount">
                              </div>
                          </div>
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>Due Amount:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $item->dueamount; ?>" id="final" placeholder="Final amount" name="finalamount">
                              </div>
                          </div>
          
                          
                          
                      </div>
                 
                  <br>
                  </div>
          <input type="hidden" value="<?php echo $nowamount ; ?>" name="amount" />
            <input type="hidden" value="<?php echo $nowdate ; ?>" name="duedate" />
        <div class="container">
            <h3>Payments</h3>
          <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
    
            
            
        <tr>
            <th>S.NO</th>
            <th>ID</th>
            <th>Name</th>
             <th>Finalamount</th>
          <th>Paidamount</th>
            <th>Date</th>
            <th>paymenttype</th>
            <th>bankname</th>
           
        </tr>
         <?php
        $num = 1;
        ?>  
           <tbody>   
     
        <?php foreach($view as $item){?>  
            <?php if( $item->iduser == $id){?>    
               <tr>
               
          <td><?php echo $num ; ?></td>                                          
         <td><?php echo $item->iduser; ?></td>
          <td><?php echo $item->name; ?></td>    
          <td><?php echo $item->finalamount; ?></td>
           <td><?php echo $item->paidamount; ?></td>
          
          <td><?php echo $item->payingdate; ?></td>
             <td><?php echo $item->paymentmethod; ?></td>
              <td><?php echo $item->bankname; ?></td>
              <?php echo $num = $num+1;?>
    
              
             </tr>
              <?php }?>    
              <?php }?>   
             <?php foreach($paydue as $item){?>  
            <?php if( $item->iduser == $id){?>    
               <tr>
               
          <td><?php echo $num ; ?></td>                                          
         <td><?php echo $item->iduser; ?></td>
          <td><?php echo $item->name; ?></td>    
          <td><?php echo $item->finalamount; ?></td>
           <td><?php echo $item->paidamount; ?></td> 
         
          <td><?php echo $item->payingdate; ?></td>
             <td><?php echo $item->paymentmethod; ?></td>
              <td><?php echo $item->bankname; ?></td>
           <?php $val =  $item->intnum; ?>   
      <?php echo $num = $num+1;?>
  
             </tr>
              <?php }?>    
              <?php }?> 
                </tbody>
  </table>
        </div>
            <div id="installmenttable">
    <h3 id="filldetails" >Installments</h3>
    <div  id="container"/> 

<table  class="table table-hover " id="tb">
<tr class="tr-header">
<!--<th style="margin-right: 150px;">S.NO:</th>-->
<th>Date</th>
<th>Amount</th>
<th>Description</th>
<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
</tr>
<tbody >
<tr>                               
<!--<td><input type="text" name="installment[]" id = "installment[]"  class="form-control"></td>-->
<td><input type="date" name="date[]" id = "date[]"   class="form-control"></td>
<td><input type="text" name="Amount[]" id = "check[]"  class="form-control"></td>
<td><input type="text" name="description[]"  id = "description[]"  class="form-control"></td>
<td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td>
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
            <input type="hidden"  value="<?php echo $item->finalamount; ?>"  name="finalamount" />
<input type="hidden"  value="<?php echo $item->phone; ?>"  name="number" />
<input type="hidden"  value="<?php echo $item->mail; ?>"  name="mail" />
<input type="hidden"  value="<?php echo $item->name; ?>"  name="name" />
<input type="hidden"  value="<?php echo $item->iduser; ?>"  name="iduser" />

       <input type="hidden" id ="instabro"  name="instabro"  />
<input type="hidden" id ="date"  name="date"  />
<input type="hidden" id ="amountnow"  name="amountnow"  />
<input type="hidden" id ="desicri"  name="desicri"  />
<input type="hidden" value="<?php echo $val ; ?>" name="intnum" />        
<div class="col-xs-offset-6 ">
                 
                 <button disabled type="submit" class="btn btn-primary" id ="sumbit">Submit</button>
                 <button  type="submit" class="btn btn-primary" id ="pay">Check</button>

                 <button type="submit" id="install" class="btn btn-primary">Installment</button>

                     </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </form>
	

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
            $(function(){
            $('#pay').on('click', function() {
               
            }); 
        });  
            var numint  = "<?php echo $numint ?>";
           var nowcheck =  parseInt(numint);
            console.log(nowcheck);
            var fin = "<?php echo $dueamount ?>";
            var amountpaid = "<?php echo $paidamount ?>";
            console.log(fin);
            console.log(amountpaid);
            if(fin == amountpaid){
                var x= "You have paid Your total amount";
                    document.getElementById("demo").innerHTML = x;
                    document.getElementById("sumbit").disabled = false;
            }else{
                var x= "the amount you paid is " + amountpaid  + " which is not equal to the total amount pay with installment";
                    document.getElementById("demo").innerHTML =x;
            }
            
            </script>
            <script>
                 $('#myModal').modal('show');

setTimeout(function() {
    $('#myModal').modal('hide');
}, 10000); 
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


$('#pay').click(function (){
        
        var arr = [];
//        var installment = [];
        var date = [];
        var desri = [];
//        $.each($("input[id^='installment']"), function(i, item) {
//        var hello =  $(item).val();
//        var int = parseInt(hello);
//            installment.push(int);
//        });
        $.each($("input[id^='date']"), function(i, item) {
        var dat =  $(item).val();
        var nowdat = dat;
            date.push(nowdat);
        });
        $.each($("input[id^='description']"), function(i, item) {
        var des =  $(item).val();
        var nowdes = des;
        desri.push(nowdes);
        });

        $.each($("input[id^='check']"), function(i, item) {

        var grade =  $(item).val();
        var integer = parseInt(grade);
            arr.push(integer);
        });
        console.log(arr);
//        console.log(installment);
        console.log(date);
        console.log(desri);
// check nan value
            var a = [];
            for(var i=0;i< arr.length;i++){
                if (isNaN(arr[i])) {
                console.log("it is null");
        }else{
            console.log(arr[i]);
            a.push(arr[i]);
        }
            }
             //   
//             var b = [];
//            for(var i=0;i< installment.length;i++){
//                if (isNaN(installment[i])) {
//                console.log("it is null");
//        }else{
//            console.log(installment[i]);
//            b.push(installment[i]);
//        }
//            }   
            //  
            var c = [];
            for(var i=0;i< date.length;i++){
                if (date[i] != '' ) {
               
                c.push(date[i]);
        }else{
            console.log("it is null");
        }
            }  
            //
            var d = [];
            for(var i=0;i< desri.length;i++){
                if (desri[i] !=  '') {
               
                d.push(desri[i]);
        }else{
            console.log("it is null");
        }
            } 

       
       
        console.log(c);
        console.log(d);
            console.log(a);
             console.log("the vale of a");
            var sum = 0;
                for (var i = 0; i < a.length; i++) {
                sum += a[i]
                }
                sum = sum + parseInt(amountpaid);
                console.log(sum);
            var len = a.length;
            console.log(len);
            var final = document.getElementById("final").value;
            var finalval = parseInt(fin);
            console.log("the sum  is " + sum);
//            console.log(b);

            if(finalval == sum){
                console.log("super....");
                document.getElementById("install").value = len;
                alert("Your installment is good to go with total installments of " + len );
                document.getElementById("sumbit").disabled = false;
                document.getElementById("install").disabled = true;
                
//                var len = a.length;
                   
               var b = []
               for(var i =1;i<=len;i++){
                   b.push(i +nowcheck);
               }
               console.log("the value of b id ");
                console.log(b);
               document.getElementById("amountnow").value = a;
                document.getElementById("instabro").value = b;
                document.getElementById("date").value = c;
                document.getElementById("desicri").value = d;
                 return false;
                
            }
            else{
                console.log("pls entern...");
                alert("pls check the installment the total amount is " + fin + " which is not equal to the  total installments you gave " + sum);
                return false;
                
            }
            // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            // installment
            
            var b = [];
            for(var i=0;i< installment.length;i++){
                if (isNaN(installment[i])) {
                console.log("it is null");
        }else{
            console.log(installment[i]);
            b.push(installment[i]);
        }
            }
            console.log("hehehehheheh");

            console.log(b);
            document.getElementById("instabro").value = b;

            // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ date,description


});
            </script>
                
</form>     
                
    </body>
</html>