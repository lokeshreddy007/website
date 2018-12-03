<!DOCTYPE html>
<html lang="en">
<head>
<title>Desginer</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
.Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 0;
      }
h1{
    margin-top: -40px;
    margin-bottom: 10px;
}
/*
 tr:nth-child(even) {
        background-color: #5bc0de;*/
/*      }*/
</style>
</head>
<body>
    <div class="container">
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
    </div>
    <div class="follow" align="center" > 
        <h1><b>DESIGNER PAGE</b></h1>
    </div>
        
        
       
     
  <table class="table" align="center" border="2px" style="width:100%; line-height: 30px;">
        <tr>
            <th style="text-align: center" colspan = "4"> ORDER CONFIRMATION</th>   
              <th style="text-align: center" rowspan="2">DESIGN</th>
               <th style="text-align: center" rowspan="2">EXPECTED DELIVER</th>
        </tr>
        <tr>
            <th>S.NO</th>
            <th>Id</th>
            <th>Name</th>
             <th>TotalAmount</th>
         </tr>
         <tr>
             
        <tbody >
               <?php $num = 1; ?>
           
        <?php foreach($viewfollowups as $item){?>
          
                 <td><?php echo $num ;?> </td>
                  <?php $num = $num +1; ?>
                   
                        <td><a href="<?php echo base_url();?>Managementcontrol/Linkdesigner?id=<?php echo $item->iduser; ?>"><?php echo $item->iduser; ?></a></td>
                   
                   
                   
                        <td><?php echo $item->name; ?></td>
                 
        
                     <td><?php echo $item->qua; ?></td>
                     <td><?php echo $item->work; ?></td>

                   <td>
                       <?php $checkid= $item->iduser; ?>
     
                        <?php foreach($viewfollow as $item){?>
                        <?php if( $item->idenquirylist == $checkid){?>
                        <?php echo $item->delivery; ?>
                
                        <?php }?> 
                         <?php }?>
                    </td>
                   
                       
                </tr> 

              <?php }?>  
                 </tbody>
                  
     
                     
                      
                 
                   
        
 </table>
       
       
        
        
    </div>
</body>
</html>                             