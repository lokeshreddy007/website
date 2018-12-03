<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>Procurementpo</title>
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
     h1{
	    margin-top: -40px;
		margin-bottom:10px;
	 } 
  

    body {
        
        background-color:#FFFFFF;
    }
    .form-horizontal .form-group {
    margin-right: -20px;
    margin-left: -75px;
}

.form-control {
    display: block;
    width: 75%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}


.getoder {
    display: inline;
}

.container
{
width:auto;
}  

table 
        {
            width: 70%;
            font: 17px Calibri;
        }
        table, th, td 
        {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
        }
		
		 table{
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid black;
    }
    table th, table td{
        padding: 6px;
        text-align: left;
    }
	
	tr:nth-child(even){
	background-color:#5bc0de;
	}

</style>
</head>

<body>
<div class="container">
    <div class="Back">
    <button  onclick="window.location.href='http://localhost/liveinpassion.com/Managementcontrol/Conformorder'" style="text-align: center;" type="button" class="btn btn-success">Back</button>
    <h1 style="text-align: center;"><b>PO</b></h1>
    </div>
    <input type="hidden" id="rowPayCountId" value="10">
    <table>
        <thead id="tableInvestmentId">
            <tr>
                <th><b>SL.No</b></th>
                <th><b>Materials</b></th>
                <th><b>Quantity</b></th>
                <th><b>Price</b></th>
				<th><b>Tax</b></th>
				<th><b>Vendor Selection</b></th>
				<th><b>Payment Term</b></th>
				<th><b>Reason</b></th>
				<th><b>Delivary date</b></th>
				<th><b>Comments</b></th>
				<th><b>Vendor Changed </b></th>
             </tr>
			 <tr>
			  </tr>
					 
        </thead>
		<tbody id="rowTableId"></tbody>
</table>

          <!-- <input type="number" id="investmentId" oninput="insterRows()" /> -->

   
        
</body>

</html>


