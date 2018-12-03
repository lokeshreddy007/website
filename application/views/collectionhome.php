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
      tr:nth-child(even) {
        background-color: #5bc0de;
      }  
     .btn {
  display: inline-block;
  background: transparent;
  text-transform: uppercase;
  font-weight: 500;
  font-style: normal;
  font-size: 3.5rem;
  letter-spacing: 0.3em;
  color:#6ACADF;
  border-radius: 0;
  padding: 18px 80px 20px;
  transition: all 0.7s ease-out;
  background: linear-gradient(270deg,#222222,#6AB3DF,#6AADDF, #346A92);
  background-position: 1% 50%;
  background-size: 300% 300%;
  text-decoration: none;
  margin: 0.625rem;
  border: none;
  border: 1px solid #6AB3DF;
}
.btn:hover {
    color: #fff;
    text-decoration: none;
}
.btn:hover {
  color: #fff;
  border: 1px solid #38919F;
  color: white;
  background-position: 99% 50%;
}

body {
  background: #fdfdfd;
  color: #fff;
  font-family: "Helvetica Neue", Helvetica, Arials, sans;
}
article {
  height: 100vh;
}
/*
body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}*/
  </style>
</head>
<body>
   
     
                                        
                                        
        <!--Clearlist--> installment
    
   
    <div class="container">
     
    <div class="follow" align="center" > 
        <h1><b>COLLECTION PAGE</b></h1>
    </div>  
   
""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""



<?php $now = array();?>
  <?php $then = array();?>


            <?php foreach($duelist as $item){?>  
           
              <?php array_push($now,$item->iduser);?>
            <?php }?>

             <?php foreach($overduelist as $item){?>  
                 <?php array_push($then,$item->iduser);?>    
             
             <?php   }?>
                    <?php foreach($overduelistdue as $item){?>  
                 <?php array_push($then,$item->iduser);?>    
             
             <?php   }?>
                    <?php foreach($duelistdue as $item){?>  
                 <?php array_push($now,$item->iduser);?>    
             
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
   $valview = array();
            ?>
     <?php foreach ($view as $item) { ?>
    <?php array_push($valview,$item->iduser);?> 
    <?php }?>

    <?php 
    print_r($valview);
    
   echo $checkdue;
    $all = array_merge(array_diff($valview, $com), array_diff($com, $valview)); 
    print_r($all);
    $checkdue = count($all);
//    $dueall = array_merge(array_diff($valview, $now), array_diff($now, $valview)); 
//    print_r($now);
//    $checkdue = count($dueall);
    $ab=array();
            ?>
 <?php for($i=0;$i<$nowval;$i++){ ?>  
 <?php foreach ($view as $item) { ?>
              <?php if($item->iduser == $all[$i]) { ?>
<?php array_push($ab,$item->iduser);?> 
 <?php }?>
 <?php }?>
 <?php }?>
    <?php 
     print_r($ab);
 $checkall = count($ab);
 echo $checkall;
  ?>
""""""""""""""""""""""""""""""""""""""""""""""""""""
         
     
    
      <!--  <div class="col-md-10 col-lg-2 col-sm-12">
             <button  style="margin-left:200px" class="btn" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/showoverduelist'" >
                 <span>over DUE LIST(</span><?php echo count($ab)  ; ?><span>)</span>
                 </button>
        </div>
            
             -->
        <div class="col-md-6 col-lg-6 col-sm-12">
            <button class="btn" style="margin-left:280px" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/showduelist'" >
                <span>DUE LIST(</span><?php echo count($ab); ?><span>)</span>
            </button>
    
        </div>
        
            <br><br><br><br><br><br><br><br><br><br>
        
     
            
            
        <div class="col-md-6 col-lg-6 col-sm-12">
            <button style="margin-left:250px" class="btn" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Clearlist'" >
                <span>clear list(</span><?php echo count($com); ?><span>)</span>
                </button>
        </div>
    </div>
       
       
       
  
</body>
</html>
