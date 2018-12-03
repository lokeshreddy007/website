<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Live Data Search in Codeigniter using Ajax JQuery</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
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
/*	tr:nth-child(even) {
	  background-color: #5bc0de;
	}  
   */
	</style>
	</head>
	<body>
	<div class="container">
    <div class="Back">
	<INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
	<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/todayfollowup'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
		         <?php if (!$this->session->userdata('Manager')) {?>

		 <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
 <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>	
    </div>
     
	 <h1 style="text-align: center;"><b>Conformation Oders</b></h1>
	  <font color="red"> <i><?php echo $this -> session->flashdata("user"); ?></i></font>
	<input type="text"  align="center" border="1px" style="width:100%; line-height: 30px;" id="search" placeholder=" Search Here">
<table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">    
            
            
        <tr>
             <th>S.NO</th>
            <th>ID</th>
             <th>NAME</th>
              <th>Email</th>
               <th>Phone Number</th>
               <th>Amount </th>
                <th>Updated Amount </th>
                <th>View </th>
            
           
            
             </tr>

			
		<tr>
                     <?php
			$newdata = array();
                        $olddata = array();
			?>
                    <?php foreach($view as $data){ ?>
			<?php array_push($newdata, $data->iduser); ?>

					<?php } ?>
                     <?php foreach($viewfollowups as $data){ ?>
			<?php array_push($olddata, $data->iduser); ?>

					<?php } ?>  
                    <?php
//                                            print_r($newdata);
//                                             print_r($olddata);
              $output = array_merge(array_diff($newdata, $olddata), array_diff($olddata, $newdata));
//              print_r($output);
              $val = count($output);
//              echo  $val;

                    ?>

<?php $num = 1;?>
				<?php foreach($view as $data){ ?>
				<td> <?php echo $num;?> </td>
					<td><?php echo $data->iduser; ?> </td>
                                        <td><?php echo $data->name; ?> </td>
					<td><?php echo $data->mail; ?> </td>
					<td><?php echo $data->phone; ?> </td>
					<td><?php echo $data->finalamount; ?> </td>
					<td><?php echo $data->upqua ; ?> </td>
					<?php $num = $num+1;?>
                                        
<td><a href="<?php echo base_url();?>Managementcontrol/Invoicedue?id=<?php echo $data->iduser; ?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>
					<tr/>
					<?php } ?>
					<tr> 
                                    <?php  for($i=0;$i<$val;$i++){ ?>      
                                <?php foreach($viewfollowups as $data){ ?>
                                       <?php if($data->iduser == $output[$i]){ ?>
				<td> <?php echo $num;?> </td>
					<td><a href="<?php echo base_url(); ?>Managementcontrol/conformcheck?id=<?php echo $data->iduser; ?>" /> <?php echo $data->iduser; ?></td>   
                                        <td><?php echo $data->name; ?> </td>
					<td><?php echo $data->mail; ?> </td>
					<td><?php echo $data->number; ?> </td>
					<td><?php echo $data->qua; ?> </td>
					<td><?php echo $data->upqua ; ?> </td>
                                        
<td><a href="<?php echo base_url();?>Managementcontrol/Invoicedue?id=<?php echo $data->iduser; ?>"><i class="material-icons" style="font-size:20px">arrow_forward</i>
					<?php $num = $num+1;?>
					<tr/>
					<?php } ?>
                                          <?php } ?>
                                        <tr>	
                                        <?php } ?>
					


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