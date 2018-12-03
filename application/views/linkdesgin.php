h<!DOCTYPE html>
<html lang="en">

<head>
    <title>orderconfirmation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
            padding: 6px 12px;
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


        .getoder {
            display: inline;
        }

        .container {
            width: auto;
        }

        table {
            width: 70%;
            font: 17px Calibri;
        }

        table,
        th,
        td {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
        }

        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #cdcdcd;
        }

        table th,
        table td {
            padding: 5px;
            text-align: left;
        }
        
      
    </style>
</head>

<body>
    $name = $_SESSION['Designername'];
    <?php $id = intval($_GET['id']);?>
           <?php foreach($designwork as $item){?>
                 <?php $id = intval($_GET['id']);?>
                    <?php if($item->iduser == $id){?>   
                          <?php $iduser =$item->iduser ;?> 
                          <?php $name =  $item->name;?>
                          <?php $mail =  $item->mail;?>
                          <?php $number =  $item->number;?> 
                         <?php $comment  =  $item->comment;?>
                         <?php $qua  =  $item->qua;?>
                          <?php $newdata  =  $item->newdata;?>
                          <?php $newcomment  =  $item->newcomment;?>

                                                    <?php $work  =  $item->work;?>
 
        <?php }?>
        <?php }?>
     
        
  <?php $id = intval($_GET['id']);?>
    <?php $desginname = $_SESSION['Designername']; ?>

   <div class="container">
        <div class="Back">
                   <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
                   <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/designerupoad?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
                   <?php if (!$this->session->userdata('Manager')) {?>
                   
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Designerhome?id=/<?php echo $desginname; ?>'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>                                                    


                                                                    
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>

            <h1 style="text-align: center;">
                <!--<b>ORDER CONFIRMATION</b>-->
            </h1>
        </div>
        <form class="form-horizontal" action="<?php echo base_url();?>Managementcontrol/Insertdesginer?id=<?php echo $idno;?> " method="post">

        <div class="col-lg-11 col-lg-offset-1 margin-body">
            <div class="row">
                            <div class="col-md-6">
                    <div class="form-group">
                        <label>APPLICATION No:</label>
                        <input type="text" disabled class="form-control" value="<?php echo $iduser ?>"  placeholder="Enter Application Id" name="iduser">
                    </div>
                </div>
                <input type="hidden" value="<?php echo $iduser;  ?>" name="iduser" />
                <input type="hidden" value="<?php echo $name;  ?>" name="name" />
                <input type="hidden" value="<?php echo $mail;  ?>" name="mail" />
                <input type="hidden" value="<?php echo $number;  ?>" name="number" />
                <input type="hidden" value="<?php echo $comment;  ?>" name="comment" />
                <input type="hidden" value="<?php echo $qua;  ?>" name="qua" />
                <input type="hidden" value="<?php echo $newdata;  ?>" name="newdata" />
                <input type="hidden" value="<?php echo $newcomment;  ?>" name="newcomment" />

                          
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>CUSTOMER NAME:</label>
                        <input type="text" disabled class="form-control" value="<?php echo $name ?>" id="cname"  placeholder="Enter name" name="name">
                    </div>
                </div>
                <br>
                <br>
                <br>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" disabled class="form-control" value="<?php echo $mail ?>" style="background-color:#5bc0de" id="cname" placeholder="email" name="mail">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>PhoneNumber:</label>
                        <input type="text" disabled class="form-control" value="<?php echo $number ?>" style="background-color:#5bc0de" id="cname" placeholder="PhoneNumber" name="number">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group" >
                        <label>Work:</label>
                    <select class="form-control"  name="design">
                     <option selected ><?php echo $work ?></option>
                      <option>Completed</option>
                      <option>NotYet</option>
                      <option>Work in progress</option>
                    </select>                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label>FINAL QUATATION VALUE:</label>
                        <input type="text" disabled class="form-control" value="<?php echo $qua ?>"  id="cname" placeholder="Final value" name="qua" >
                    </div>
                </div>
                        
            </form>      
            </div>
            <button type="submit"  class="btn btn-success" >Submit</button>  
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Enquiryformedit?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Edit Enquiry</button>
		<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Enquiryformview?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">View Enquiry</button>
		<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/quotationedit?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Edit Quatation</button>
		<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Quotationview?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">View Quatation</button>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/designerupoad?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Upload Design</button>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/showfileupload?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Edit Design</button>
                

		</div>
		
		<br>
		<br>
                
                        
		</form>

   
		</body>
		</html>