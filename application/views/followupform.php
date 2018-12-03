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
    
        
      
    <center><h1 style='color:white' <b>FOLLOW UP FORM</b></h1></center>
    <?php $id = intval($_GET['id']);?>  
        <div class="container">
             <div class="Back">
             
             <?php $id = intval($_GET['id']);?>
        <?php foreach($button as $item){?>
            <?php if( $item->iduser == $id){?>
            <?php $idlink = $item->iduser;?>
            <?php echo $item->qua;?>
            <?php $valbutton = $item->qua;?>
            
            <?php }?>   
            <?php }?> 
            <?php echo $valbutton;?>
         <?php $id = intval($_GET['id']);?>
        <?php foreach($viewfollowups as $item){?>
                            
                                <?php $id = intval($_GET['id']);?>
                                 
                                  <?php if( $item->idenquirylist == $id){?>
                                 <?php $name =  $item->name; ?>
                                <?php $mail=  $item->mail; ?>
                                <?php $phone=  $item->phone; ?>
                               <?php  $dat =  $item->fdat;?>
                               <?php }?>   
                                    <?php }?> 
        
   
                           




       
<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/conformcheck?id=<?php echo $id ; ?>'" style="text-align: center;" type="button" class="btn btn-success">Createorder</button>
             <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/followeditenquiry?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Edit Enquiry</button>
<button id = "quabtn" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/quotation?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Create Quatation</button>
 <button disabled id="editbtn" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/salesQuotationformedit?id=<?php echo $id;?>'" style="text-align: center;" type="button" class="btn btn-success">Edit Quatation</button>
 <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/conformcheck?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button> 
  <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

                                
                                    <?php
                                    
                                    $quatation = array();
                                    ?>
                                    <?php $id = intval($_GET['id']);?>
                               <?php foreach($view as $item){?>
                                     <?php if( $item->iduser == $id){ ?>
                                        
                                    <?php array_push($quatation, $item->sendquatation); ?>
                                                                                                
                                   <?php  }?> 
                                 <?php }?>
                                
    </div>
<div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color:whitesmoke;">
    <br>        
    <div class="row">
         <form class="form-horizontal" action="<?php echo base_url();?>Managementcontrol/followupdata" method="post">


                <div class="col-lg-8 col-lg-offset-2">


 
                    <!--<form class="form-horizontal" action="Managementcontrol/getcomment" method="post">-->

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                               
                                <div class="col-md-6">
                                      <?php $today = date("Y-m-d");
//                            echo $today;
                           ?> 
                         
                                <?php foreach($viewfollowups as $item){?>
                            
                                <?php $id = intval($_GET['id']);?>
                                 
                                  <?php if( $item->idenquirylist == $id){?>
                                 <?php $name =  $item->name; ?>
                                 <?php $iduser =  $item->idenquirylist; ?>
                                <?php $mail=  $item->mail; ?>
                                <?php $phone=  $item->phone; ?>
                                <?php $dat =  $item->fdat;?>
                                <?php $comment = $item->comment;?>

                         
                                  <?php }?>   
                                    <?php }?> 
                                    <div class="form-group" style="margin-left: 2px">
                                    <input type="hidden" value="<?php echo $phone; ?>" name="phone" />
                                    <input type="hidden" value="<?php echo $comment; ?>" name="comment" />
                                    <input type="hidden" value="<?php echo $iduser;?>" name="iduser" />
                                    <input type="hidden" value="<?php echo $name; ?>" name="name" />
                                    <input type="hidden" value="<?php echo $mail; ?>" name="mail" />
                                    <label for="form_name">ID*</label>
                                        <input disabled id="form_name" name ="iduser" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Name is required."  type="text" value="<?php echo $id ?>">
                                         <label for="form_name">Name*</label>
                                        <input disabled id="form_name" name="name"  style="background-color:#5bc0de" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Name is required." type="text" value="<?php echo $name ?>">
                                        <label for="form_email">Email *</label>
                                 <input disabled id="form_email" name ="mail"   class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." type="email" value="<?php echo $mail ?>">        
                                

                                        <label for="form_name">Phone Number*</label>
                                        <input disabled id="form_name" name="number"  style="background-color:#5bc0de" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Name is required." type="text" value="<?php echo $phone ?>">
                                         
                                          <label for="form_comment">OLd Comment*</label>
                                          <input disabled  name="comment"  class="form-control" value="<?php echo $comment ?>"/>
                                          </br>
                                 <?php $id = intval($_GET['id']);?>
                                    <?php foreach($button as $item){?> 
                                    <?php if( $item->iduser  == $id){?>
                                    <?php $amount=  $item->qua; ?>                    
                                    <?php }?>   
                                        <?php }?>   
                                                  
                                        <label for="form_message">Sent Quataion</label><br>
                                         <input type="radio" name="sendquatation" value="No"> No<br>
                                         <input type="radio" name="sendquatation" value="Yes" > Yes<br>
                                         <?php if ($amount !=0) { ?>
                                            <?php  echo "Quataion Sent" ; ?>
                                            <a href="#"><span class="glyphicon glyphicon-ok"></span></a>
                                             <?php  } ?>
                                              </br>
                                <label for="form_follow_up_date">New Follow up*</label>
                                <input type="data" class="form-control" id="datepicker"  style="background-color:#5bc0de" placeholder="Enter date" name="dat" value="<?php echo $hdate ?>">

                                <label for="form_message">New Comments</label>
                            <textarea id="form_message" name="newcomment" class="form-control" placeholder="Please give new comments" rows="4" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                         <div class="form-group">
                                            <div class="col-xs-offset-6 col-xs-6">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                              
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>

                                
                                </form>
      

                    <div class="col-md-6">
                   <div class="form-group">
                   <div class="b" >
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
                                     <?php foreach($button as $item){?>
                                     
                                    <?php if( $item->iduser == $id){ ?>
                                    <tr>
                                        <td><?php echo $sno; ?></td>
                                          <?php $sno = $sno +1 ; ?>
                                        <?php $commentnew = $item->newcomment; ?>
                                        <?php $datanew = $item->newdata; ?>
                                        <td style="word-wrap:break-word;"><?php echo $commentnew;?></td>
                                        <td><?php echo $datanew;?></td>
                                      
                                      
                                       </tr>   
                                   <?php  }?> 
        <?php }?>
                               <?php foreach($view as $item){?>
                                     
                                    <?php if( $item->iduser == $id){ ?>
                                    <tr>
                                        <td><?php echo $sno; ?></td>
                                          <?php $sno = $sno +1 ; ?>
                                        <?php $commentnew = $item->newcomment; ?>
                                        <?php $datanew = $item->dat; ?>
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
    <script>
$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0});
  });

  </script>




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

    </html>