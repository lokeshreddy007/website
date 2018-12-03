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
       
    <center><h1 style='color:white' <b>Over Due FORM</b></h1></center>
      
    
        <div class="container">
             <div class="Back">
             
            
        
<?php 
 $url = $_SERVER["REQUEST_URI"];
 echo $url;
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
                           




       

  <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Collectionshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
<INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
                         
                                
    </div>
    
<div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color:whitesmoke;">
    <br>        
    <div class="row">
       
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
        <?php }?>
        <?php $id = intval($_GET['id']);?>
                               <?php foreach($installment as $item){?>
                                     
                                <?php if( $item->iduser == $id){ ?>
                                       
                                      <?php if( $item->installementno == $idinstall){ ?>    
                                          <?php $installementno = $item->installementno; ?>
                                            <?php echo $installementno;?>
                                        <?php $dat = $item->dat; ?>
                                        <?php echo $dat;?>
                                        <?php $amount = $item->amount; ?>
                                      
                                         <?php  }?>
                                       
                                   <?php  }?>
                                   <?php  }?> 

                <div class="col-lg-8 col-lg-offset-2">


 
                    <form class="form-horizontal" action="<?php echo base_url();?>Managementcontrol/overduef" method="post">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                               
                                <div class="col-md-6">
                                    
                                    <div class="form-group" style="margin-left: 2px">
                                    <input type="hidden" value="<?php echo $iduser; ?>" name="iduser" />
                                    <input type="hidden" value="<?php echo $name; ?>" name="name" />
                                    <input type="hidden" value="<?php echo $mail; ?>" name="mail" />
                                    <input type="hidden" value="<?php echo $phone; ?>" name="phone" />
                                    <input type="hidden" value="<?php echo $finalamount; ?>" name="finalamount" />
                                    <input type="hidden" value="<?php echo $newdata; ?>" name="newdata" />
                                     <input type="hidden" value="<?php echo $dat; ?>" name="dat" /> 
                                    <input type="hidden" value="<?php echo $amount; ?>" name="amount" /> 
                                    <input type="hidden" value="<?php echo $idinstall; ?>" name="intnum" /> 

                                    <label for="form_name">ID*</label>
                                        <input disabled id="form_name" name ="iduser" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Name is required."  type="text" value="<?php echo $id ?>">
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
                                          <input type=date disabled    name="dat" class="form-control" value="<?php echo $dat ?>"/>
                                          
                                          </br>
                                          <label for="form_amount">Over Due Amount*</label>
                                          <input disabled name="amount" class="form-control" value="<?php echo $amount ?>"/>
                                         </br>
                                <label for="form_follow_up_date">Follow up Date*</label>
                                        <input id="newdate" name="num"  style="background-color:#5bc0de" required="required" class="form-control" type="date">
                                        </br>
                                <label for="form_message">Comments</label>
                            <textarea id="form_message" name="newcomment" class="form-control" placeholder="Please give new comments" rows="4" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                         <div class="form-group">
                                            <div class="col-xs-offset-6 col-xs-6">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                               <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/overduepay?id=<?php echo $iduser; ?>'" >Payment</button>
                                                <!--<button type="submit" class="btn btn-primary">Payment</button>-->
                              
                                            </div>
                                           
                                        </div>
                                        
                                        
                                    </div>
                                </div>

                                
                                </form>

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
                               <?php foreach($duedata as $item){?>
                                     
                                    <?php if( $item->iduser == $id){ ?>
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
var val = "<?php echo $valbutton ?>";
console.log(val);
if (val > 0) {
        document.getElementById("quabtn").disabled = true;
        document.getElementById("editbtn").disabled = false;
        console.log("above....")
    }
    
</script>
     /* else {
        document.getElementById("btn").disabled = true;
    }
    var now = "<?php echo $valbutton ?>";


if(now != 0) {
        document.getElementById("quabtn").disabled = true;
    } else {
        document.getElementById("quabtn").disabled = false;
    } */ */


             </body>
</html>
/* jbjdc


<?php echo count($quatation); ?>
                   <?php
                   if (in_array("Yes", $quatation))
                        {
                        echo "Match found";
                        }
                        else
                        {
                        echo "Match not found";
                        }

                   ?>
                   <?php
                    $arrlength = count($quatation);

                    for($x = 0; $x < $arrlength; $x++) {
                        echo $quatation[$x];
                        echo "<br>";
                    }
                    ?>
                   
 */