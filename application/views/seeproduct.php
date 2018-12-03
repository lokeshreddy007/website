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

    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/uploadstock'" style="text-align: center;" type="button" class="btn btn-success">StockUpload</button>
 <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">    <h1 style="text-align: center;"><b>Procurement home</b></h1>
    </div>
     
    <?php 
 $url = $_SERVER["REQUEST_URI"];
// echo $url;
//    $fragment = parse_url($url,PHP_URL_FRAGMENT); 
$arr = explode("/",$url);
//print_r($arr);
 $now = $arr;
 $len = count($now);
 echo $len;
 $val = $len -1;
// echo $val;
// echo $now[$val];
 $idinstall =  $now[$val];

 echo $idinstall;
 
 
      ?> 
    <?php echo "hello";?>
    <div class =" table1" >
        

         <table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">     
        <tr>
             <th>S.NO</th>
             <th>ID</th>
             <th>Quantity</th>
             <th>Release</th>
           
             
            
             </tr>
              <tbody >
      <tr>
           <?php $num = 1;?>    

<?php foreach($viewfollowups as $item){?>

     <td><?php echo $num  ;?></td>
     
     
     <td><a href="<?php echo base_url();?>Managementcontrol/Procurementrequriment/<?php echo $item->material;?>/<?php echo $idinstall;?>"><?php echo $item->material; ?></a></td>
      <td><?php echo  $item->Quantity;?></td>
        
      
            <?php foreach($view as $now){?>
                <?php if($now->material == $item->material ){?>
          <td><?php echo  $now->Quantity;?></td> -->
           <?php } ?>
           <?php } ?>
      
      
      
      
         
         
  <?php $num += 1; ?>
       </tr>
        <?php } ?>
      
      </tbody>
         </table>
            </div>
    
   
   
       
       
          
    
</body>

</html>



