<!DOCTYPE html>
<html lang="en">
<head>
<title>ConfrimedOrders</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
.Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 0;
      }
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
h1{
    margin-top: -40px;
    margin-bottom: 10px;
}

 tr:nth-child(even) {
        background-color: #5bc0de;
      }
</style>
</head>
<body>
    <div class="container">
    <div class="Back">
    <tbody >
       
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/materiallist'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
        <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
    </div>
    <div class="follow" align="center" > 
        <h1>Material Odered </h1>
    </div>
            
  <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
      
            <th>S.NO</th>
            <th>Materials</th>
            <th>Quantity</th>
            <th>TotalAmount</th>
            <th>View Invocie</th>
            <th>Download Invocie</th>
            
         
         <?php
            $num = 1;
          ?>
        <tbody >
        <?php foreach($viewdata as $item){?>
          <tr>
          <td><?php echo $num; ?></td>
         <?php  $num = $num+1; ?>
                <td><?php echo $item->Material; ?></td>
                <td><?php echo $item->Quantity; ?></td>
                <td><?php echo $item->Price; ?></td>
                <td><a href="<?php echo base_url();?>Managementcontrol/pdfdetails/<?php echo $item->id;?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>
                <td><a href="<?php echo base_url();?>Managementcontrol/pdfdetailsprint/<?php echo $item->id;?>"><span class="glyphicon glyphicon-download-alt"></span></td>
               
        </tr>
        
                  <?php }?>   
                 </tbody>
        </table>
     
    </div>
  
</body>
</html>                             