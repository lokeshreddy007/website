<!DOCTYPE html>
<html>
<head>
  <title>SalesPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
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
 <?php
        $newdata = array();
        $olddata = array();
        ?>
        <?php foreach($viewfollowups as $item){?>
            
                <!-- <?php  echo "hello"; ?> -->
                <?php array_push($newdata, $item->iduser); ?>

        
                <?php } ?>
                
        <?php foreach($view as $item){?>
            
            <!-- <?php  echo "no"; ?> -->
            <?php array_push($olddata, $item->idenquirylist); ?>

        
            <?php } ?>
            <?php
        //  echo count($newdata);
        //  echo count($olddata);
        //  print_r($newdata);
        //  print_r($olddata);
         $result=array_diff($olddata,$newdata);
//          print_r($result);
//          echo count($result);
          $x= count($result);
         
?>
<tr>
<?php $num = 0;?>
            <?php foreach($viewfollowups as $data){ ?>
            <?php if( $data->newdata == date("Y-m-d")){ ?>
                    
                        <?php $num = $num+1;?>
                       
                        <?php } ?>
                <?php } ?>
                <tr>

           
                <?php foreach($result as $id){ ?>
                     <?php foreach($view as $data){ ?>
                        <?php if( $data->fdat == date("Y-m-d")){ ?>
                        <?php if( $data->idenquirylist ==$id ){ ?>
                     
                                     <?php $num = $num+1;?>
                     <?php } ?>
<tr/>
<?php } ?>
                    <?php } ?>
                    <?php } ?>


    <div class="container">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <button class="btn" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/todayfollowup'" >
                 
                <span>Today you have (</span><?php echo $num ?><span>) followups</span>
            </button>
    
        </div>
        
            <br><br><br><br><br><br><br><br><br><br>
        
         <div class="col-md-10 col-lg-2 col-sm-12">
             <button  style="margin-left:200px" class="btn" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Enquiryform'" >Create Enquiry</button>
        </div>
            <br><br><br><br><br><br><br><br><br><br>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <button style="margin-left:200px" class="btn" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Checkfollowuplist'" >Follow Up List</button>
        </div>
    </div>

</body>
</html> 

