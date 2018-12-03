<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>orderconfirmation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <style>
     
      .Back{
          right: 3px;
          padding : 10px;
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-right: -50%;
          margin-bottom: 10px;
		  padding-right:0;
      }
    
</style>
</head>

<body>

<div class="container">
    <div class="Back">
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Vendorlist'" style="text-align: center;" type="button" class="btn btn-success">Vendor Register</button>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/creatematerial'" style="text-align: center;" type="button" class="btn btn-success">Create Material</button>

   
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/showpo'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
 <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">    <h1 style="text-align: center;"><b>Procurement </b></h1>
    </div>
    <div class =" table1" >
        

         <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">     
        <tr>
             <th>S.NO</th>
             <th>ID</th>
             <th>Name</th>
             <th>Mail</th>
             <th>Phone</th>
             
            
             </tr>
              <tbody >
      <tr>
           <?php $num = 1;?>    







<?php foreach($success as $item){?>

     <td><?php echo $num  ;?></td>
     
     
     <td><a href="<?php echo base_url();?>Managementcontrol/seeproduct/<?php echo $item->iduser;?>"><?php echo $item->iduser; ?></a></td>
      <td><?php echo  $item->name;?></td>
        <td><?php echo  $item->mail;?></td>
          <td><?php echo  $item->phone;?></td>
          
        
  <?php $num += 1; ?>
      </tr>
        <?php } ?>
      </tbody>
         </table>
            </div>
    <?php
  $now = array();
    ?>
            
            <?php foreach($check as $item){?>
              <?php array_push($now,$item->iduser);?>
             

   <?php } ?>
    <?php
//    print_r($now);

    

?>
</body>

</html>



