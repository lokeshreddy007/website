<!DOCTYPE html>

<!--

To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates

and open the template in the editor.

-->

<html>

    <head>

        <meta charset="UTF-8">

        <title></title>

         <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>

<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"></style>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css"></style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    



    </head>

    <body>

        <div class="container">

        <?php

        // put your code here

        ?>

            <center><h2>Visitors List </h2>   </center>
             <center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>

    <table class="table table-striped table-bordered table-responsive" id="myTable">

           <thead>  

                             

    <tr>
        <th><strong>Name</strong></th>
        <th><strong>Email Id</strong></th>
        <th><strong>Phone</strong></th>
        <th><strong>Followup Date</strong></th>
        <th><strong>comments</strong></th>
    
        <th><strong>Edit</strong></th>
         <th><strong>Design</strong></th>

    </tr> 

     

           </thead>

           <tbody>

               <?php foreach(displayEnquiry as $item){?>

     <tr><td><?php echo $item->name; ?></td>
         <td><?php echo $item->phn; ?></td>
         <td><?php echo $item->email; ?></td>
         <td><?php echo $item->fdate; ?></td>
         <td><?php echo $item->dov; ?></td>
         <td><?php echo $item->Commmens; ?></td>
    
        <td><a href="<?php echo base_url()."ManagerController/deletevisitordata"?>?VId=<?php echo $item->id;?>" class="btn btn-info" role="button">x</a></td>
     </tr> 
       

        <?php }?>  

           </tbody>

    </table>

         </div>

        <script>

   $(document).ready(function() {

    $('#myTable').DataTable( {

    	responsive: true,

    	dom: 'Bfrtip',

        buttons: [

           

            'excelHtml5',

           

            'pdfHtml5'

        ]

    } );

} );

   </script>

    </body>

</html>

