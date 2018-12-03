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
                                        <?php $paid=  $item->paidamount; ?>
                                        <?php $newdata = $item->newdata; ?>
                                      
                                      
                                       
                                   <?php  }?> 
    
    
     <?php foreach($bal as $item){?>
    <?php $hello = $item->Quantity;?>
   
      <?php }?> 
    <?php
    $bal = $finalamount-$hello-$paid;
    
    
    ?>
    
     <?php  }?> 
                               <?php foreach($installment as $item){?>
                                     
                                <?php if( $item->iduser == $id){ ?>
                                       
                                         
                                          <?php $installementno = $item->installementno; ?>
                                            
                                        <?php $dat = $item->dat; ?>
                                        
                                        <?php $amount = $item->amount; ?>
                                      
                                      
                                       
                                   <?php  }?>
                                   <?php  }?> 
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
       
       <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Collectionshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
         <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button> -->
                            
    </div>
    <div class="follow" align="center" > 
        <h1><b>DUE INFO</h1>
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
            <?php
            $paidamountdue = array();
            ?>
              <?php foreach($paydue as $item){?>  
            <?php if( $item->iduser == $id){?> 
             <?php array_push($paidamountdue,$item->paidamount);?>
           <?php }?>    
              <?php }?>
            
            <?php
           $nowfinal =  array_sum($paidamountdue);
           $toatalpaid = $paid + $nowfinal;
         $toatalbal =  $finalamount -$toatalpaid;
            ?>
            
           <div class="container">
                <div class="row">
                     <div class="col-sm-4" >
                              <div class="form-group">
                                  <label>Total Paid:</label>
                                  <input disabled style="margin-right:5px;" type="text" class="form-control" value="<?php echo $toatalpaid ; ?>" placeholder="Enter Customer Id" name="iduser">
                              </div>
                          </div>
                     <div class="col-sm-4" >
                              <div class="form-group">
                                  <label>Total Balance:</label>
                                  <input disabled style="margin-right:5px;" type="text" class="form-control" value="<?php echo $toatalbal; ?>" placeholder="Enter Customer Id" name="iduser">
                              </div>
                          </div>
                    
                </div>
                
            </div>                 


<!--  <h3>INstallments</h3>
          <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
    
            
            
        <tr>
            <th>S.NO</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Description</th>
            <th>Installment</th>
           
        </tr>-->
        
    
        <?php
         $num = 1;
        ?>  
           <tbody>   
        
            <?php $now = array();?>
             <?php $then = array();?>
            <?php foreach($paydue as $item){?>  
            <?php if( $item->iduser == $id){?> 
             <?php if( $item->paidamount == $item->dueamount){?> 
              <?php array_push($now,$item->intnum);?>
           
           
            <?php } else {?>
                 <?php array_push($then,$item->intnum);?>    
             
             <?php   }?>
              <?php }?>
             <?php }?>
             <?php $nun =  count($now);?>
                
            <?php $nu =  count($then);?>
                                  
            
        <?php  $all = array_merge(array_diff($now, $then), array_diff($then, $now)); ?>

              <?php
//              echo "now";
//               print_r($now);
//               echo "<br/>";
//                echo "thren";
//                print_r($then);
//                 echo "<br/>";
//                   echo "all";
//              print_r($all);
//               echo "<br/>";
              ?>
               
            <?php $in = array();?>
             <?php foreach($instlist as $item){?>  
            <?php if( $item->iduser == $id){?> 
              
             <?php array_push($in,$item->installementno);?>
            
                <?php }?>    
              <?php }?> 
               
            <?php $result= array_values(array_diff($in, $all)); ?>
             <?php
//              echo "<br/>";
//                   echo "diff";
//                   print_r($result);
                    ?>
            <?php $notpaid = count($result);?>
           
            
<!--            //  $result value= can print installment
              //  $now value= can skip installment
              // $then ale check mainint !=0 then print-->
            
          <!--some paid amount -->
          <tr>
             
           
<!-- not paid installemt -->
<?php
$notpaidarrayins = array(); 
$notpaidarrayid = array(); 
?>

             <?php for($i=0;$i<$notpaid;$i++){ ?>
            <?php foreach($instlist as $item){?>  
            <?php if( $item->iduser == $id){?> 
               <?php if( $item->installementno == $result[$i]){?> 
                  <?php if( $item->installementno != ''){?>     
                
               
               
           
           <?php array_push($notpaidarrayins,$item->installementno);?>
             <?php array_push($notpaidarrayid,$item->id);?>
        
             <?php }?> 
            <?php }?> 
             
  <?php }?>  
               <?php }?>    
          
              <?php }?>   
           
             
          
<!--            
            <h3>INstallments</h3>
          <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
    
            
            
        <tr>
            <th>S.NO</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Description</th>
           
        </tr>-->



 
 
            <?php $installment = array();?>
             <?php $dueid = array();?>
             <?php $duenum = array();?>
              <?php foreach($instlist as $item){?>  
            <?php if( $item->iduser == $id){?> 
             <?php array_push($installment,$item->id);?>
              <?php }?> 
              
            <?php }?> 
             <?php foreach($updue as $updues){?>  
            <?php if( $updues->iduser == $id){?> 
            <?php echo $updues->iduser;?>
             <?php array_push($dueid,$updues->hello);?>
              <?php array_push($duenum,$updues->num);?>
              <?php }?>
 <?php }?>
 <?php          
//            print_r($installment);
             $installmentcount = count($installment);
//             echo $installmentcount;
//             echo '<br/>';
//             print_r($duenum);
             $duenumcount = count($duenum);
//             echo $duenumcount;
//             echo '<br/>';
//            print_r($dueid);
              $dueidcount = count($dueid);
//            echo '<br/>';
//            print_r($notpaidarrayins);
//             echo '<br/>';
//            print_r($notpaidarrayid);
//             echo '<br/>';
             $notpaidarrayidcount = count($notpaidarrayid); 
//              echo $notpaidarrayidcount;
//             $all = array_merge(array_diff($due, $che), array_diff($che, $due)); 
              $updatedcom = array();
               $updatedid = array();
           ?>
<?php for($i= 0;$i<$dueidcount;$i++){?>
   <?php  foreach($updue as $items){?>
   <?php if( $item->iduser == $id){?> 
     <?php    if($items->num == $notpaidarrayins[$i]){?>
     
      <?php array_push($updatedcom,$items->num);?>
<?php array_push($updatedid,$items->hello);?>
  <?php } ?>
              <?php } ?>
  <?php } ?>
  <?php } ?>
          
 <?php
              
 echo '<br/>';
//            print_r($updatedcom);
//             echo '<br/>';
//               echo " updatedcomcount valu eis ";
             $updatedcomcount = count($updatedcom); 
//              echo $updatedcomcount;
//               echo '<br/>';
               
//                        print_r($updatedid);
                         $updatedidcount = count($updatedid); 
//              echo $updatedidcount;
//             echo '<br/>';
//               echo " updatedcomid  valu eis ";
            
// echo "hello world for check";
// $checkduernot=array_diff($notpaidarrayins,$updatedcom );
  $checkduernot = array_merge(array_diff($notpaidarrayins, $updatedcom), array_diff($updatedcom, $notpaidarrayins)); 
// print_r($checkduernot);
 $checkduernotcount = count($checkduernot);
//  echo '<br/>';
            ?>
 <h3>INstallments</h3>
          <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
    
            
            
        <tr>
            <th>S.NO</th>
            <th>ID</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Description</th>
            <th>Installment</th>
           
        </tr>
        
    
        <?php
         $num = 1;
        ?>  
           <tbody>  
               <tr>
                   <?php
//                     echo '<br/>';
//                   echo "this the final check ";
//                     echo $updatedcomcount;
//                     print_r($notpaidarrayid);
                   ?>
     <!--updated comment in due form-->
 <?php for($i=0;$i<$updatedidcount;$i++){ ?>
            <?php foreach($duedat as $item){?> 
      <?php if( $item->iduser == $id){?>
     
            
               <?php if( $item->id == $updatedid[$i]){?> 
      <td><?php echo $num ; ?></td>    
<td><a href="<?php echo base_url(); ?>Managementcontrol/collectiondue?id=<?php echo $item->intnum; ?>/<?php echo $item->iduser; ?>/<?php echo $item->amount; ?>/<?php echo $item->newdata; ?>" /> <?php echo $item->iduser; ?></td>
          
             <td><?php echo $item->amount; ?></td>    
          <td><?php echo $item->newdata; ?></td>
           <td><?php echo $item->newcomment; ?></td> 
            <td><?php echo $item->intnum; ?></td> 
             <?php $num = $num+1; ?>
           
            <?php }?> 
             <?php }?> 
       <?php }?>
              <tr>
  <?php }?> 
               <!--not updated  comment in due form-->
             </tr>
            
               <?php for($i=0;$i<$checkduernotcount;$i++){ ?>
            <?php foreach($instlist as $item){?> 
      <?php if( $item->iduser == $id){?> 
            <?php if( $item->installementno == $checkduernot[$i]){?> 
                  

            <td><?php echo $num; ?></td>
<td><a href="<?php echo base_url(); ?>Managementcontrol/collectiondue?id=<?php echo $item->installementno; ?>/<?php echo $item->iduser; ?>/<?php echo $item->amount; ?>/<?php echo $item->dat; ?>" /> <?php echo $item->iduser; ?></td>
          <td><?php echo $item->amount; ?></td>    
          <td><?php echo $item->dat; ?></td>
           <td><?php echo $item->des; ?></td> 
            <td><?php echo $item->installementno; ?></td> 
           <?php $num = $num+1; ?>
        
          
            
             <?php }?> 
            <?php }?> 
             <?php }?> 
             </tr>
              <?php }?>
           
             

            
                    </body>
                    </html>
                        


