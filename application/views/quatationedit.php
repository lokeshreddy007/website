<!DOCTYPE html>
<html lang="en">
<head>
<title>QUOTATION FORM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
     body{
          
      background-color: #99b3e6;    
     }
           
.now{
            background-color: #999999;
     }
    .bs-example{
    	margin: 20px;
    }
	/* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
    .form-horizontal .control-label{
        padding-top: 7px;
    }
    .Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 8%;
      }
    .modal-header {
            padding: 0;
            float: center ;
           
        }
.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
   
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
h1{
    margin-top: -30px;
    margin-bottom: 5px;
    color:white;
}
.form-style-5 .number {
    background: #5bc0de;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background:#5bc0de ;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
/*{
    background: #109177;
}
.modal-header{
    align-content: center;
    margin-left: 500px;
    color: blue;
}
body{
    background: #231f20;
}*/

</style>
</head>
<body>
       <?php $id = intval($_GET['id']);?>
        <?php foreach($viewfollowups as $item){?>
                                <?php $id = intval($_GET['id']);?>
                                 
                                  <?php if( $item->idenquirylist == $id){?>
                                 <?php $name =  $item->name; ?>
                                <?php $mail=  $item->mail; ?>
                                <?php $phone=  $item->phone; ?>
                               <?php  $dat =  $item->fdat;?>
                                <?php $userid = $item->idenquirylist;?>
    <?php }?>   
     <?php }?> 
     
   <?php $id = intval($_GET['id']);?>
            <?php foreach($viewfollow as $item){?>                                 
                             <?php $id = intval($_GET['id']);?>    
                         <?php if( $item->userid == $id){?>
                                 <?php  $item->field4; ?>
                          
                                <?php $ab =  $item->field4; ?>
                                 
                                <?php  $amount=  $item->field5; ?>
                           
                                <?php $comm=  $item->field6; ?>
                            
                               <?php $finamount =  $item->field7;?>
                           
                               
    
       <?php }?> 
     <?php }?> 

    
 
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

         <center><h1><b>QUOTATION FORM</b></h1></center>
    </div>
  
    <div class="form-style-5">
<form class="form-horizontal" action="<?php echo base_url();?>Managementcontrol/Insertquotation" method="post">
<fieldset>
<legend><span class="number">1</span> Customer Details</legend>
<input type="text" name="userid"  value="<?php echo $userid; ?>" placeholder="ID *" style="background-color:#5bc0de">
<input type="text" name="field1"  value="<?php echo $name; ?>" placeholder="Name *">
<input type="email" name="field2"  value="<?php echo $mail; ?>" placeholder="Email *" style="background-color:#5bc0de">
<input type="number" name="field3"  value="<?php echo $phone ;?>" placeholder="Phonenumber *">
<textarea name="field4" placeholder="About" style="background-color:#5bc0de"><?php echo $ab ;?></textarea>
<!--<textarea name="field4" placeholder="About" name="comment">"</textarea>-->

<label for="job">Interests:</label>
</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<input type="number"  value="<?php echo $amount; ?>"  name="field5" placeholder="Amount *">
<textarea name="field6"  placeholder="Comment" style="background-color:#5bc0de"><?php echo $comm; ?></textarea>
<input type="number" value="<?php echo $finamount; ?>"   name="field7" placeholder="Final Amount *">
</fieldset>
<input type="submit" value="SUBMIT" />
</form>
    
</div>
</body>
</html>                             


