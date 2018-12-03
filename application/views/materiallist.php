 <!DOCTYPE html>
<html lang="en">
<head>
  <title>materiallist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
      .follow{
          align:"center"
          
      }
      .glyphicon {
/*    font-size: 25px;*/
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
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/vendorll'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
         <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php } ?>
 <?php {?>
      <?php }?>   
     <a href="<?php echo base_url();?>Managementcontrol/fetchpdfmat"  class="btn btn-success">
          <span class="glyphicon glyphicon-download-alt"></span> Download
        </a>
          
       
     
    </div>
    <div class="follow" align="center" > 
        <h1><b>MATERIAL LIST</b></h1>
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
            <th>ID</th>     
            <th>Material</th>
            <th>Units</th>
            <th>Description</th>
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
        <?php foreach ($material as $item){ ?>
                                         
  <tr>
    
    <td><a href="<?php echo base_url(); ?>Managementcontrol/showdueall?id=<?php echo $item->idmt; ?>" /> <?php echo $item->idmt; ?></td>
          <td><?php echo $item->name; ?></td>
           <td><?php echo $item->unit; ?></td>
           <td><?php echo $item->des; ?></td>
     <td><?php echo $item->num; ?></td>
     <td><?php echo $item->vname; ?></td>
     <td><?php echo $item->mail; ?></td>
     <td><?php echo $item->phone; ?></td>
     <td><a href="<?php echo base_url();?>Managementcontrol/materiallistview?id=<?php echo $item->idmt; ?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>
     <td><a href="<?php echo base_url();?>Managementcontrol/materiallistedit?id=<?php echo $item->idmt; ?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>

     <!--<td><?php echo $item->des; ?></td>-->

   </tr>
            <?php }?>     
   
  
   
             
             
    
       </tbody>
  </table>        
   
  
        
        
  


</body>
</html>
