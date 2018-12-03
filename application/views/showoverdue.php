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

      
    </style>
</head>

<!-- <body style="background-image: url('E:/code/navya project/cafe/images/01.jpg');"> -->
<div class="container">
<?php $id = intval($_GET['id']);?>
                               <?php foreach($pay as $item){?>
                                     
                                    <?php if( $item->iduser == $id){ ?>
                                   
                                       
                                        <?php $iduser = $item->iduser; ?> 
                                        <?php $name = $item->name; ?>
                                        <?php $mail = $item->mail; ?>
                                        <?php $phone = $item->phone; ?>
                                        <?php $finalamount = $item->finalamount; ?>
                                        <?php $newdata = $item->newdata; ?>
                                      
                                      
                                       
                                   <?php  }?> 
     <?php  }?> 
                               <?php foreach($installment as $item){?>
                                     
                                <?php if( $item->iduser == $id){ ?>
                                       
                                         
                                          <?php $installementno = $item->installementno; ?>
                                            <?php echo $installementno;?>
                                        <?php $dat = $item->dat; ?>
                                        <?php echo $dat;?>
                                        <?php $amount = $item->amount; ?>
                                      
                                      
                                       
                                   <?php  }?>
                                   <?php  }?> 
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
        <h1><b>OVER DUE INFO</h1>
        </div>
          <div class="container" >
        
          <form class="form-horizontal" name="myForm"  action="<?php echo base_url();?>Managementcontrol/checkconform" method="post">


                  <div >
                      <div class="row">
                                      <div class="col-sm-4" >
                              <div class="form-group">
                                  <label>CUSTOMER ID:</label>
                                  <input disabled style="margin-right:5px;" type="text" class="form-control" value="<?php echo $iduser ?>" placeholder="Enter Customer Id" name="iduser">
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
                                  <input disabled type="number" class="form-control"  value="<?php echo $phone ?>" id="fin" placeholder="phonenumber" name="number">
                              </div>
                          </div>
          
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>FINAL QUATATION VALUE:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $finalamount ?>" id="final" placeholder="Final amount" name="finalamount">
                              </div>
                          </div>
          
                          
                          <input type="hidden" value="<?php echo $ID; ?>" name="iduser" />
                          <input type="hidden" value="<?php echo $name; ?>" name="name" />
                          <input type="hidden" value="<?php echo $mail; ?>" name="mail" />
                          <input type="hidden" value="<?php echo $phonenum; ?>" name="number" />
                          <input type="hidden" value="<?php echo $finalamount; ?>" name="finalamount" />

                  
                      </div>
                  </div>
                  
                  </div>
                  </div>
                 
   <div class="container">
            <h3>Payments Done</h3>
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
      
        <?php foreach($pay as $item){?>  
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
               <?php  $num = $num+1;?>
    
  
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
      <?php $num = $num+1;?>
  
             </tr>
              <?php }?>    
              <?php }?>  
    </tbody>
  </table>
                           

<!-- <input type="text" id="member" name="member" value="">Number of members: (max. 10)<br />-->

<div id = "payment" >
<h3>Installments</h3>

<table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">    
            
            
        <tr>
             <th>S.NO</th>
            <th>ID</th>
             <th>Installemt</th>
             <th>Amount</th>
              <th>Date</th>
    
             </tr>
              <tbody >							
    
	 
<tr>
   
<?php $num = 1;?>
		 <?php foreach($installment as $item){?>
                <?php if( $item->iduser == $id){ ?>
		<td> <?php echo $num;?> </td>
			<td><a href="<?php echo base_url(); ?>Managementcontrol/overdue?id=<?php echo $item->iduser; ?>/<?php echo $item->installementno; ?>" /> <?php echo $item->iduser; ?></td>   
                        <td><?php echo $item->installementno; ?></td> 
                         <td><?php echo $item->amount; ?></td> 
                             <td>  <?php echo $item->dat; ?></td>                
					<?php $num = $num+1;?>
					<tr/>
					<?php } ?>
					
				
						<?php } ?>
						


				</tbody>  
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


<div class="col-xs-offset-6 ">
                 
                 <!--<button disabled type="submit" class="btn btn-primary" id ="sumbit">Submit</button>-->
                 <!-- <button  type="submit" class="btn btn-primary" id ="pay">Pay</button> -->

                 <!--<button type="submit" id="button" class="btn btn-primary">Check</button>-->

                     </div>
<p id="demo"> </p>
                     </form>
                     
<script>

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
                        


