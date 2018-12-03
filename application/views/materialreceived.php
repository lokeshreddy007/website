<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>orderconfirmation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
</head>

<body>
  <?php foreach($viewfollowups as $item){?>
    
                            
                                <?php $id = intval($_GET['id']);?>
                                 
                                  <?php if( $item->idenquirylist == $id){?>

                                 <?php $name =  $item->name; ?>
                                <?php $mail=  $item->mail; ?>
                               
                                <?php $phone=  $item->phone; ?>
                               

                              <?php }?>   
                                    <?php }?> 
                                    <?php $id = intval($_GET['id']);?>
<div class="container">
    <div class="Back">
    <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
    <!-- <button  onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Production'" style="text-align: center;" type="button" class="btn btn-success">Back</button> -->
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/production?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
    <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Production'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
    <h1 style="text-align: center;"><b>MATERIALS RECEIVED</b></h1>
    </div>
      <div class="container" >
        
          <form class="form-horizontal" name="myForm"  action="<?php echo base_url();?>Managementcontrol/checkconform" method="post">


                  <div >
                      <div class="row">
                                      <div class="col-sm-3" >
                              <div class="form-group">
                                  <label>CUSTOMER ID:</label>
                                  <input disabled style="margin-right:5px;" type="text" class="form-control" value="<?php echo $id ?>" placeholder="Enter Customer Id" name="iduser">
                              </div>
                          </div>
          
                              <div class="col-sm-3">
                              <div class="form-group">
                                  <label>CUSTOMER NAME:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $name ?>" placeholder="Enter name" name="name">
                              </div>
                          </div>  
                                   
                              <div class="col-sm-3">
                              <div class="form-group">
                                  <label>CUSTOMER Mail:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $mail ?>" placeholder="Enter name" name="name">
                              </div>
                          </div>  
                                  <div class="col-sm-3">
                              <div class="form-group">
                                  <label>CUSTOMER Phone Number:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $phone ?>" placeholder="Enter name" name="name">
                              </div>
                          </div>   
                                  </div>
                     
    <h3 id="filldetails" >Material Recevied:</h3>
    
     <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">    
                  <tr>
             <th>S.NO</th>
             <th>material</th>
             <th>Quantity</th>
             <th>date</th>
            
             
            
             </tr>
              <tbody >
      <tr>
           <?php $num = 1;?> 
                 
                 <?php foreach($view as $item){?>

     <td><?php echo $num  ;?></td>
     
      <td><?php echo  $item->material;?></td>
      <td><?php echo  $item->Quantity;?></td>
       
          <td><?php echo  $item->date;?></td>
          
        
  <?php $num += 1; ?>
      </tr>
        <?php } ?>

</tbody>
         </table>
         
                     
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </form>
	

      
     
    
 
                      
 		 
 
</table>
</body>
</html>


