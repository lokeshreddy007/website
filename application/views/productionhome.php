 <!DOCTYPE html>
<html lang="en">
<head>
  <title>followuplist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
</head>
<style>
 .Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 8%;
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

</style>
<body>

  <?php $id = intval($_GET['id']);?>
  
  <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Production?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
         <!-- <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
   </div> -->
     <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
    
            
            
        <tr>
             <th>S.NO</th>
            <th>ID</th>
             <th>NAME</th>
              <th>VIEW</th>
               <th>Materialrequired</th>
               <th>Materialreceived</th>
            
           
            
             </tr>
              <tbody >
      <tr>
           <?php $num = 1;?>    

<?php foreach($fileslist as $item){?>
     
     <td><?php echo $num  ;?></td>
      <td><?php echo  $item->iduser;?></td>
         <td><?php echo  $item->name;?></td>
         <td><a href="<?php echo base_url();?>Managementcontrol/productionview?id=<?php echo $item->iduser;?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>

        
 <td><a href="<?php echo base_url();?>Managementcontrol/materialrequired?id=<?php echo $item->iduser;?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>
  <td><a href="<?php echo base_url();?>Managementcontrol/materialreceived?id=<?php echo $item->iduser;?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>
  
           

</a></td> 
  <?php $num += 1; ?>
      </tr>
        <?php } ?>
      </tbody>  
      <table>
       <div id="mybutton1">

</body>
</body>

</html>


