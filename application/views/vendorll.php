<!DOCTYPE html>
<html lang="en">
<head>
  <title>vendorlist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style>
      .follow{
          align:"center"
          
      }
h1{
    margin-top: -40px;
    margin-bottom: 10px;
}
      .Back{
        
          right: 3px;
          padding : 10px;
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-right: -50%;
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
      tr:nth-child(even) {
        background-color: #5bc0de;
      }  
     
  </style>
</head>
<body>
<div class="container">
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/stocklist'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
         <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php } ?>
   
  <?php {?>
          <tr>
          <a href="<?php echo base_url();?>Managementcontrol/fetchpdfven"  class="btn btn-success">
          <span class="glyphicon glyphicon-download-alt"></span> Download
      </a>
        </tr>
               <?php }?>   
                 </tbody>
   </div>
   
    <div class="follow" align="center" > 
        <h1><b>Vendor LIST</b></h1>
    </div>
     
   <?php 
    $due = array();
    $over = array();
    ?>

     <?php foreach($overduelist as $item){?>  
           <?php  array_push($over, $item->iduser); ?>
             <?php echo  $item->iduser; ?> 
              
      <?php } ?>
  
  <?php  $overdue = (array_unique($over)); ?>

    <?php foreach($duelist as $item){?>  
            
      <?php  array_push($due, $item->iduser); ?>
             <?php echo  $item->iduser; ?>
             <?php } ?>
    <?php  $duelist = (array_unique($due)); ?>
    <?php
    // echo "count";
    echo count($overdue);
    echo count($duelist);
    ?>
   
    <?php $dat = date("Y-m-d");?>
    <?php
    $check = array();
//    $dpos = array();
    ?>
    <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
        <tr>
            <th>SNO</th>     
            
              <th>Vendor ID</th>
                <th>Vendor Name</th>
                  <th>Vendor Email</th>
           
            <th>Vendor Number</th>
            
            <th>View </th>
            <th> Edit</th>
<!--            <th>Due Amount</th>
            <th>Description</th>-->
        </tr> 
         <tbody>
             <?php 
             $num = 1;
             
             ?>
        <?php foreach ($vendor as $vendoritem){ ?>
                                         
  <tr>
     
        <?php $idven =  $vendoritem->idvregister; ?> 
   
         
            <?php $venpro =  $vendoritem->hdate; ?> 
          
       <td><?php echo $num; ?></td>
          <td><a href="<?php echo base_url(); ?>Managementcontrol/vendorlistview?id=<?php echo $vendoritem->idvregister; ?>" /> <?php echo $vendoritem->idvregister; ?></td>
            <td><?php echo $vendoritem->name; ?></td>
              <td><?php echo $vendoritem->mail; ?></td>
           <td><?php echo $vendoritem->num; ?></td>
           <!-- <td><?php echo $vendoritem->hdate; ?></td>
          <td><?php echo $item->unit; ?></td>
            <td><?php echo $item->des; ?></td>
           -->
     <td><a href="<?php echo base_url();?>Managementcontrol/vendorlistview?id=<?php echo $vendoritem->idvregister; ?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>
     <td><a href="<?php echo base_url();?>Managementcontrol/vendorlistedit?id=<?php echo $vendoritem->idvregister; ?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>

    <?php $num = $num+1;?>
 

   </tr> 
   
             </tr>
            
 <?php }?>  
   
           
  
  
   
             
             
    
       </tbody>
  </table>        
   
  
        
        
  



 
</body>
</html>
