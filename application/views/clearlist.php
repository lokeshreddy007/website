 <!DOCTYPE html>
<html lang="en">
<head>
  <title>followuplist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/incomingpayemt'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
         <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Collectionshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>

    </div>
    <div class="follow" align="center" > 
        <h1><b>Clearlist</b></h1>
    </div>
         
<?php $now = array();?>
  <?php $then = array();?>


            <?php foreach($duelist as $item){?>  
           
              <?php array_push($now,1);?>
            <?php }?>

             <?php foreach($overduelist as $item){?>  
                 <?php array_push($then,1);?>    
             
             <?php   }?>
                    <?php foreach($overduelistdue as $item){?>  
                 <?php array_push($then,1);?>    
             
             <?php   }?>
                    <?php foreach($duelistdue as $item){?>  
                 <?php array_push($now,1);?>    
             
             <?php   }?>
             
            <?php $nowval = count($now);?>
 <?php $thenval = count($then);?>
<?php // echo $nowval;?>
<?php // echo $thenval;?>

<?php $com = array();?>
<?php foreach($view as $item){?>  
<?php foreach($check as $he){?> 
   <?php if( $item->iduser == $he->iduser ){ ?>
<?php // echo $he->sanm;?> 
<?php $dueamount =  $he->sanm;?>
<?php $finalamount = $item->finalamount;?> 
<?php //  echo $finalamount;?>
<?php //  echo "<br/>";?>
<?php $paidamount = $item->paidamount;?> 
<?php //  echo $paidamount;?>
<?php //  echo "<br/>";?>

<?php //  echo "<br/>";?>
<?php $fin = $paidamount + $dueamount ; ?>
<?php //  echo $fin;?>
<?php //  echo "<br/>";?>

 <?php if( $fin == $finalamount ){ ?>
<?php //  echo "hello";?>
        
 <?php array_push($com,$item->iduser);?> 
       
    
 <?php } else { ?>

<?php //  echo "nononon";?>
 <?php }?>
 <?php }?>
    
 <?php }?>
 
    
 <?php }?>
<?php // print_r($com);
    $checkduernotcount = count($com);
            ?>
        <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
        <tr>
            <th>ID</th>     
            <th>Name</th>
            <th>Mail</th>
             <th>Number</th>
            <th>Amount</th>
            
        </tr> 
                
    <tbody>
        <tr>
            <?php for($i=0;$i<$checkduernotcount;$i++){ ?>
            <?php foreach ($view as $item) { ?>
              <?php if($item->iduser == $com[$i]) { ?>
 
     <td><?php echo $item->iduser; ?></td>
      <td><?php echo $item->name; ?></td>
    
 
     <td><?php echo $item->mail; ?></td>
     <td><?php echo $item->finalamount; ?></td>
     <td><?php echo $item->phone; ?></td>
   
                
    </tbody>

     <?php }?>
     </tr>
 <?php }?>
 <?php }?>
          </table>

      


 
         
</body>
</html>
