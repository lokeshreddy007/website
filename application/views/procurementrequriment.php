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
	  
   
	</style>
</head>

<body>
    <?php 
 $url = $_SERVER["REQUEST_URI"];
// echo $url;
//    $fragment = parse_url($url,PHP_URL_FRAGMENT); 
$arr = explode("/",$url);
//print_r($arr);
 $now = $arr;
 $len = count($now);
// echo $len;
 $val = $len -1;
// echo $val;
// echo $now[$val];
 $idinstall =  $now[$val];
// echo $idinstall;
 $mat = $len -2;
 $material = $now[$mat];
// echo $idinstall;
// echo $material;

      ?> 
<?php 


foreach($req as $items){

      $total = $items->so;

    $mat = $items->material;
}

foreach($stock as $items){
   
  
     
      
      $stock = $items->soo;

    }
    
foreach($balstock as $items){
 
   
    
    $prostock =  $items->soo;
    $proreleas =  $items->rel;
//     echo $proreleas;
//     echo $prostock;
       
}
 
 $stockfin =$stock-$proreleas;
// echo "values";
// echo $stockfin;

 $totalfin =$total-$proreleas;
//  echo "values";
///echo $totalfin;
//echo "<br/>";
?>
    
 <?php foreach($succ as $item){?>  
            <?php if( $item->iduser == $idinstall){?>                                             
            <?php $id=  $item->iduser; ?>
          <?php $name =  $item->name; ?>
     <?php $mail =  $item->mail; ?> 
         <?php $number =  $item->phone; ?>
              <?php }?>    
              <?php }?> 

    
			<div class="Back">
			<INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
				<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Conformorder?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
				<?php if (!$this->session->userdata('Manager')) {?>
				<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
		<?php }  else {?>
			<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

		<?php } ?>

			</div>
	 <h1 style="text-align: center;"><b><b>PRODUCTION REQURIEMENT</b></b></h1>
         
			
     <form class="form-horizontal"  action="<?php echo base_url();?>Managementcontrol/productionrequiment" method="post">
    
         <input type="hidden" value="<?php echo $idinstall ?>"  name="iduser"  />
         <input type="hidden" value="<?php echo $name ?>"  name="name"  />
         <input type="hidden" value="<?php echo $mail ?>"  name="mail"  />
         <input type="hidden" value="<?php echo $number ?>"  name="num"  />
         

         
         <table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">   
        <thead>
          
               <tr>
                <th><b>SL.No</b></th>
                <th><b>Materials</b></th>
                <th><b>Required</b></th>
                <th><b>In stock</b></th>
		<th><b>Release</b></th>
		<th><b>Date</b></th>
		<th><b>Oder Balance</b></th>
		
		
             </tr>
            
		       </thead>
                      <tr>
			 <div class="col-sm-8"> 
                                        <td>1</td>
                                        <td><input value="<?php echo $material  ?>"  name="material"></td>
                                        <td><input disabled id = "num" value="<?php echo $totalfin ?>" name = "total" style="width:50px;"  name="comment"></td>
                                        <td><input disabled id="stock" value="<?php echo $stockfin ?>" style="width:50px;"  name="stock"></td>
                                        <td><input id = "in" style="width:50px;"  name="releas"></td>
                                      
                                        <td><input type="date" class="form-control" id="pwd" placeholder="Enter date" name="dat" ></td> 
                                        <td><input disabled id = "demo"    name="balance"></td>
                                        
        
                         </div>
             </tr>
					 
 
</table>

   <div class="col-xs-offset-6 ">
       <button disabled  id="pay" type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
       <button   id="net" type="submit" style="margin:5px;" class="btn btn-primary">Check</button>
                     </div>
  </form>
    
    
    <table>
    
                          
 
</table>
<script>
 $(document).ready(function() {
      var stock = document.getElementById('stock').value;
      
//      console.log(stock);
 });

        $(document).ready(function() {
    //this calculates values automatically 

 
    $("#in").on("keydown keyup", function() {
        myFunction();
    });
});

function myFunction() {
    var fin = document.getElementById('num').value;
    var rel = document.getElementById('in').value;
  
    var finNum = parseInt(fin);
    var Num = parseInt(rel);
//    console.log(finNum);    
//    console.log(Num);
    var x = finNum - Num;
    
   
        document.getElementById("demo").value = x;
    }
$('#net').click(function (){
   
   var stock =   document.getElementById("stock").value;
      var now =   document.getElementById("demo").value;
       var totalnum =   document.getElementById("num").value;
 
       var inval =   document.getElementById("in").value; 
       console.log(inval);
       var finrel = parseInt(inval);
       console.log(totalnum);
        var finnum = parseInt(totalnum);
       console.log(stock);
        var finstock = parseInt(stock);

   if(finnum >=finrel && finstock>=finrel){
       
         document.getElementById("pay").disabled = false;
 
    }else{
        alert("Check Your Stock");
        document.getElementById("pay").disabled = true;
    }
    return false;
    
});
</script>
</body>
</html>


