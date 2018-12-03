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
<?php
 echo $this->session->userdata('Manager');
?>

<div class="container">
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Checkfollowuplist'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
       <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
         <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button> -->
                            
    </div>
    <div class="follow" align="center" > 
        <h1><b>TODAY'S FOLLOW UP</b></h1>
        <div class="form-group">
				<!-- <div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div> -->
            </div>
         
<input type="text"  align="center" border="1px" style="width:100%; line-height: 30px;" id="search" placeholder="Search Here">
<table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
 
    
            
            
    <tr>
         <th>S.NO</th>
        <th>ID</th>
         <th>NAME</th>
          <th>Email</th>
           <th>Phone Number</th>
           <th>Follow Updata</th>
        
       
        
         </tr>
          <tbody >							

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
<?php $num = 1;?>
            <?php foreach($viewfollowups as $data){ ?>
            <?php if( $data->dat == date("Y-m-d")){ ?>
                    <td> <?php echo $num;?> </td>
                        <td><a href="<?php echo base_url(); ?>Managementcontrol/followup?id=<?php echo $data->iduser; ?>" /> <?php echo $data->iduser; ?></td>   
                        <td><?php echo $data->name; ?> </td>
                        <td><?php echo $data->mail; ?> </td>
                        <td><?php echo $data->phone; ?> </td>
                        <?php $originalDate=  $data->dat; ?>
                        <?php 
                        $newDate = date("d-m-Y", strtotime($originalDate));
                        // echo $newDate;
                        ?>
                        <td><?php echo $newDate; ?> </td>
                        <?php $num = $num+1;?>
                        <tr/>
                        <?php } ?>
                <?php } ?>
                <tr>

           
                <?php foreach($result as $id){ ?>
                     <?php foreach($view as $data){ ?>
                        <?php if( $data->fdat == date("Y-m-d")){ ?>
                        <?php if( $data->idenquirylist ==$id ){ ?>
                     <td> <?php echo $num ; ?> </td>
                                <td><a href="<?php echo base_url(); ?>Managementcontrol/followup?id=<?php echo $data->idenquirylist; ?>" /> <?php echo $data->idenquirylist; ?></td>   

                                    <td><?php echo $data->name; ?> </td>
                                    <td><?php echo $data->mail; ?> </td>
                            
                                    <td><?php echo $data->phone; ?></td>
                                    <td><?php echo $data->fdat; ?></td>
                                     <?php $num = $num+1;?>
                     <?php } ?>
<tr/>
<?php } ?>
                    <?php } ?>
                    <?php } ?>


            </tbody>  
            </table>


<!-- <script>
$(document).ready(function(){

	load_data();

	function load_data(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>Managementcontrol/fetch1",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#result').html(data);
			}
		})
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
});
// </script> -->
</div>
</div>


    
    
    <script>
        var $rows = $('#table tr');
$('#search').keyup(function() {
    
    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
        reg = RegExp(val, 'i'),
        text;
    
    $rows.show().filter(function() {
        text = $(this).text().replace(/\s+/g, ' ');
        return !reg.test(text);
    }).hide();
});
        </script>
    

            </body>
</html>  

  
  