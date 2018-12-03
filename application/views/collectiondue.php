<!DOCTYPE html>
<html>
    

<head>
  <title>FollowUpForm</title>
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
    
      .Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 0%;
      }
      .row {
    margin-right: -75px;
    margin-left: -75px;
}
   
body{
          background-color:whitesmoke;
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
          
      
      
/*      .col-md-6{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 350%;
      }
    */
      </style>
     
    </head>
      
    <body>
       
    <center><h1 style='color:white' <b>Due FORM</b></h1></center>
      
    
        <div class="container">
             <div class="Back">
             
            
        
                           


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

  <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Collectionshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
<INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
                         
                                
    </div>
    
<div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color:whitesmoke;">
    <br>        
    <div class="row">
       
  <?php $id = intval($_GET['id']);?>
        
        
                               <?php foreach($payment as $item){?>
                                     
                                    <?php if( $item->iduser == $idinstall){ ?>
                                   
                                       
                                        <?php $iduser = $item->iduser; ?> 
                                        <?php $name = $item->name; ?>
                                        <?php $mail = $item->mail; ?>
                                        <?php $phone = $item->phone; ?>
                                        <?php $finalamount = $item->finalamount; ?>
                                        <?php $newdata = $item->newdata; ?>
                                      
                                      
                                       
                                   <?php  }?> 
        <?php }?>
       
                            
      
      
                <div class="col-lg-8 col-lg-offset-2">


 
                    <form class="form-horizontal" action="<?php echo base_url();?>Managementcontrol/dueform" method="post">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                               
                                <div class="col-md-6">
                                    
                                    <div class="form-group" style="margin-left: 2px">
                                    <input type="hidden" value="<?php echo $idinstall; ?>" name="iduser" />
                                    <input type="hidden" value="<?php echo $name; ?>" name="name" />
                                    <input type="hidden" value="<?php echo $mail; ?>" name="mail" />
                                    <input type="hidden" value="<?php echo $phone; ?>" name="phone" />
                                    <input type="hidden" value="<?php echo $finalamount; ?>" name="finalamount" />
                                     <input type="hidden" value="<?php echo $nowdate; ?>" name="dat" /> 
                                    <input type="hidden" value="<?php echo $nowamount; ?>" name="amount" /> 
                                      <input type="hidden" value="<?php echo $id ; ?>" name="intnum" /> 
                                   

                                    <label for="form_name">ID*</label>
                                        <input disabled id="form_name" name ="iduser" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Name is required."  type="text" value="<?php echo $idinstall ?>">
                                        </br>
                                         <label for="form_name">Customar Name*</label>
                                        <input disabled id="form_name" name="name"  style="background-color:#5bc0de" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Name is required." type="text" value="<?php echo $name ?>">
                                        </br>
                                        <label for="form_email">Email *</label>
                                 <input disabled id="form_email" name ="mail"   class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." type="email" value="<?php echo $mail ?>">        
                                 </br>

                                        <label for="form_name">Phone Number*</label>
                                        <input disabled id="form_name" name="phone"   style="background-color:#5bc0de" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Name is required." type="text" value="<?php echo $phone ?>">
                                        </br>
                                        <label for="form_comment">Final Amount*</label>
                                          <input disabled  name="finalamount"  class="form-control" value="<?php echo $finalamount ?>"/>
                                         
                                          </br>
                                          <label for="form_dat">Due Date*</label>
                                          <input type=date disabled    class="form-control" value="<?php echo $nowdate ?>"/>
                                          
                                          </br>
                                          <label for="form_amount">Due Amount*</label>
                                          <input disabled    class="form-control" value="<?php echo $nowamount ?>"/>
                                         </br>
                                <label for="form_follow_up_date">Follow up Date*</label>
                                        <input id="datepicker" name="new"  style="background-color:#5bc0de" required="required" class="form-control" type="data">
                                        </br>
                                <label for="form_message">Comments</label>
                            <textarea id="form_message" name="newcomment" class="form-control" placeholder="Please give new comments" rows="4" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                         <div class="form-group">
                                            <div class="col-xs-offset-6 col-xs-6">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                               <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/collpayment?id=<?php echo $id; ?>/<?php echo $idinstall; ?>/<?php echo $nowamount; ?>/<?php echo $nowdate; ?>'" >Payment</button>
                                                <!--<button type="submit" class="btn btn-primary">Payment</button>-->
                              
                                            </div>
                                           
                                        </div>
                                        
                                        
                                    </div>
                                </div>

                                
                                </form>
                                <script>
$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0});
  });
 
  </script>



                    <div class="col-md-6">
                   <div class="form-group">
                                <label for="form_message">Previous Comments</label>
                                <table class="table" align="center"  border="2px" style="width:100%;margin:10px; ">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Previous Comments</th>
                                       <th style="width:100px">DATE </th>
                                    </tr>
                                </thead>
                                  
                                <tbody>
                                    <?php
                                     $sno = 1;
                                     ?>
                              <?php $id = intval($_GET['id']);?>
                               <?php foreach($duefollowup as $item){?>
                                     
                                    <?php if( $item->iduser == $idinstall){ ?>
                                    <tr>
                                        <td><?php echo $sno; ?></td>
                                          <?php $sno = $sno +1 ; ?>
                                        <?php $commentnew = $item->newcomment; ?>
                                        <?php $datanew = $item->newdata; ?>
                                        <td><?php echo $commentnew;?></td>
                                        <td><?php echo $datanew;?></td>
                                      
                                      
                                       </tr>   
                                
                                         <?php  }?> 
        <?php }?>
       </tbody>
                            </table>
 
                 </div>
                    </div>
 </div>
                             </div>
                         </div>
         
    </div>
   
     </div>
             </div>
<script>
    var id = " <?php echo $fragment ?>";
    console.log(id);

var val = "<?php echo $valbutton ?>";
console.log(val);
if (val > 0) {
        document.getElementById("quabtn").disabled = true;
        document.getElementById("editbtn").disabled = false;
        console.log("above....")
    }
    
</script>
                                                                                        

             </body>
</html>
