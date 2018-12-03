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
// echo $url;
//    $fragment = parse_url($url,PHP_URL_FRAGMENT); 
$arr = explode("/",$url);
//print_r($arr);
 $now = $arr;
 $len = count($now);
// echo $len;
 $val = $len -1;
// echo $val;
// echo $now[$val];
 $idinstall =  $now[$val];
// echo $idinstall;
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
       
        <div class="container">
			<div class="Back">
			<INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
				<!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button> -->
				<?php if (!$this->session->userdata('Manager')) {?>
				<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Collectionshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
		<?php }  else {?>
			<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

		<?php } ?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">Print</button>
			</div>
            <!-- <form  action="<?php echo base_url();?>Managementcontrol/checkinstallment" method="post"> -->
            
            
            
             <h1 style="text-align: center;"><b>INVOICE</b></h1>
                           

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
                                  <input type="number" class="form-control"  value="<?php echo $item->phone; ?>" id="fin" placeholder="phonenumber" name="number">
                              </div>
                          </div>
          
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>FINAL QUATATION VALUE:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $item->finalamount; ?>" id="final" placeholder="Final amount" name="finalamount">
                              </div>
                          </div>
          
                          
                          
                      </div>
                                   </div>
        
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
                <?php
      $sumbal = [];
      ?>
      
        <?php foreach($view as $item){?>  
            <?php if( $item->iduser == $id){?>    
               <tr>
               
          <td><?php echo $num ; ?></td>                                          
         <td><?php echo $item->iduser; ?></td>
          <td><?php echo $item->name; ?></td>    
          <td><?php echo $item->finalamount; ?></td>
           <td><?php echo $item->paidamount; ?></td> 
            <?php array_push($sumbal, $item->paidamount);?>
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
              <?php array_push($sumbal, $item->paidamount);?>
          <td><?php echo $item->payingdate; ?></td>
             <td><?php echo $item->paymentmethod; ?></td>
              <td><?php echo $item->bankname; ?></td>
      <?php  $num = $num+1;?>
  
             </tr>
              <?php }?>    
              <?php }?>  
    </tbody>
  </table>
             <?php
  
           
              $paid =  array_sum($sumbal);
              $bal = $fin-$paid;
             ?>
            <div class="container">
                <div class="row">
                     <div class="col-sm-4" >
                              <div class="form-group">
                                  <label>Total Paid:</label>
                                  <input disabled style="margin-right:5px;" type="text" class="form-control" value="<?php echo array_sum($sumbal) ; ?>" placeholder="Enter Customer Id" name="iduser">
                              </div>
                          </div>
                     <div class="col-sm-4" >
                              <div class="form-group">
                                  <label>Total Balance:</label>
                                  <input disabled style="margin-right:5px;" type="text" class="form-control" value="<?php echo $bal; ?>" placeholder="Enter Customer Id" name="iduser">
                              </div>
                          </div>
                    
                </div>
                
            </div>
            
              <h3>INstallments</h3>
          <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
    
            
            
        <tr>
            <th>S.NO</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Description</th>
            <th>Installment</th>
           
        </tr>
        
    
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
<tr>
             <?php for($i=0;$i<$notpaid;$i++){ ?>
            <?php foreach($instlist as $item){?>  
            <?php if( $item->iduser == $id){?> 
               <?php if( $item->installementno == $result[$i]){?> 
                  <?php if( $item->installementno != ''){?>     
                
               
               
            <td><?php echo $num; ?></td>
          <td><?php echo $item->amount; ?></td>    
          <td><?php echo $item->dat; ?></td>
           <td><?php echo $item->des; ?></td> 
            <td><?php echo $item->installementno; ?></td> 
          
           <?php $num = $num+1; ?>
            <?php echo $item->installementno; ?>
             <?php echo $item->amount; ?>
             <?php }?> 
            <?php }?> 
             
  <?php }?>  
               <?php }?>    
             </tr>
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

    </tbody>
  </table>
        </div>  
            
            
            
            
            <!-- </form> -->
	

      
            
            
                
</form>     
                
    </body>
</html>