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
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
         <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
 <?php } ?>
     <a href="<?php echo base_url();?>Managementcontrol/pdfstock"  class="btn btn-success">
          <span class="glyphicon glyphicon-download-alt"></span> Download
        </a>
    </div>
    <div class="follow" align="center" > 
        <h1><b>Stock List</b></h1>
    </div>
     <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
        <tr>
            <th>S.NO</th>     
            
              <th>Material Name</th>
                <th>Quantity*</th>
                  <th>Price</th>
           
            <th>Tax</th>
            <th>Phone Number</th>
            <th>Vendor Name</th>
            <th>Email</th>
            <!--<th>Date of recept</th>-->
<!--            <th>View </th>
            <th> Edit</th>-->
<!--            <th>Due Amount</th>
            <th>Description</th>-->
        </tr> 
         <tbody>
     <?php
     $num = 1;
     ?>
              <?php  $nowdata = array();?>
             
        
        <?php foreach ($allstock as $item){ ?>
               <?php foreach ($rel as $release){ ?>
              <?php if($item->material ==$release->material ){ ?>
              <?php array_push($nowdata,$item->material );?>
                                        
  <tr>
    <td><?php echo $num; ?></td>
    <!--<td><a href="<?php echo base_url(); ?>Managementcontrol/showdueall?id=<?php echo $item->idstockup; ?>" /> <?php echo $item->idstockup; ?></td>-->
          <td><?php echo $item->material; ?></td>
           <td><?php  echo $bal = $item->Quantity - $release->rel ; ?></td>
           <td><?php echo $item->Price; ?></td>
     <td><?php echo $item->Tax; ?></td>
     <td><?php echo $item->Phone; ?></td>
     <td><?php echo $item->Vendor; ?></td>
     <td><?php echo $item->Email; ?></td>
    
<!--     <td><a href="<?php echo base_url();?>Managementcontrol/stocklistview?id=<?php echo $item->idstockup; ?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>
     <td><a href="<?php echo base_url();?>Managementcontrol/stocklistedit?id=<?php echo $item->idstockup; ?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>-->

    <?php $num = $num+1; ?>

   </tr>
            <?php }?>    
    <?php }?>    
    <?php }?>
    <?php  $now = array();?>
   <?php foreach ($stock as $item){ ?>
    <?php array_push($now,$item->Material );?>
   
   <?php } ?>
   <?php
//       print_r($nowdata);
//       print_r($now);
        $result= array_values(array_diff($now, $nowdata));
//        print_r($result);
        $len = count($result);
   ?>
           <?php for($i=0;$i<$len;$i++){ ?>
                                   
           <?php foreach($stock as $item){?>
                <?php if( $item->Material == $result[$i] ){ ?>                      
		<td> <?php echo $num;?> </td>
          <td>  <?php echo $item->Material; ?></td>  
                             <td>  <?php echo $item->meas; ?></td>  
                             <td><?php echo $item->Price; ?></td> 
                              <td><?php echo $item->Tax; ?></td> 
                               
     <td><?php echo $item->Phone; ?></td>
     <td><?php echo $item->Vendor; ?></td>
     <td><?php echo $item->Email; ?></td>
					<?php $num = $num+1;?>
					<tr/>
					<?php } ?>
						<?php } ?> 
                      
                   <?php } ?> 
                
       </tbody>
  </table>
   
<!--  
        <?php foreach ($allstock as $item){ ?>
               <?php foreach ($rel as $release){ ?>
              <?php if($item->material ==$release->material ){ ?> 
    <?php
    
    echo $item->Quantity;
      echo $release->rel;
      echo $bal = $item->Quantity - $release->rel ;
    ?>
        
  <?php } ?>
						<?php } ?> 
   
                   <?php } ?> -->

 
</body>
</html>
