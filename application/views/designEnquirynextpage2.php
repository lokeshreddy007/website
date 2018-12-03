<html>
<head>
    <title>Liveinpassion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>      
    <style>
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
        .Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 8%;
      }
        body {
            background-image: url("<?php echo base_url();?>images/background/enqfrm.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .modal-content {
            background-color:#ffffff ;
            width: 40%;
            left: 20%;
            top: 10%;
            bottom:10%;
        }

        .modal-header {
            padding: 0;
            float: left;
        }

        .row-sorter:nth-child(odd) {
            float: left;
            width: 50%;
            padding-left: 0;
        }

        .row-sorter:nth-child(even) {
            float: right;
            width: 50%;
            padding-right: 0;
        }

        .row-sorter:nth-last-child(1):nth-child(odd) {
            width: 50%;
            left: 25%;
            position: relative;
        }

        .header-bg {
            background-image: url("../img/child1.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .center-body {
            height: 1000px;
            margin: 30px;
            background-color: #ffffff;
            border: 1px solid black;
            opacity: 0.8;
            filter: alpha(opacity=60);
        }

        .web-data {
            color: #000000;
        }

        h1 {
            font-size: 40px;
            font-style: impact;
        }

        a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }

        .form-group {
            margin-bottom: 0px;

        }

        .margin-body {
            padding: 50px;
            border: 1px solid black;
            border-radius: 20px;
            background-color: white;
            margin-left: 3px;
        }
    </style>
</head>
<body>

  <?php $id = intval($_GET['id']);?>
   <?php
    $num = array();
?>
 <?php foreach($viewfollowups as $item){?>   
    
     <?php $id= $item->idenquirylist; ?>
    <?php
    array_push($num, $id);
    ?>
 <?php }?>

<?php
echo count($num); 

$range =  count($num);

 echo  $range;

$val = (int)$range -1 ; 
echo  $val;
?>

   <?php echo $num[$val]; ?>
 <?php $desginname = $_SESSION['Designername']; ?>
     <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Linkdesigner?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
         <!--<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Designerhome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>-->
     <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Designerhome?id=/<?php echo $desginname; ?>'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>


    </div>
    <fieldset>
        <div class="container">
            <div class="row">
  <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Managementcontrol/designsendmail" method="post">
<!--                        <input type="hidden" value="<?php echo $firstpage['name']; ?>"  name="name" />-->
<!--<input type="hidden" value="<?php echo $firstpage['dat']; ?>" name="dat" />
<input type="hidden" value="<?php echo $firstpage['comment'];  ?>" name="comment" />
<input type="hidden" value="<?php echo $firstpage['pname'];  ?>"  name="pname" />
<input type="hidden" value="<?php echo $firstpage['distance']; ?>" name="distance" />
<input type="hidden" value="<?php echo $firstpage['optradio']; ?>" name="optradio" />
<input type="hidden" value="<?php echo $firstpage['design']; ?>" name="design" />
<input type="hidden" value="<?php echo $firstpage['villa']; ?>"  name="villa" />
<input type="hidden" value="<?php echo $firstpage['aphone']; ?>" name="aphone"  />
<input type="hidden" value="<?php echo $firstpage['fdat']; ?>"  name="phone" />
<input type="hidden" value="<?php echo $firstpage['delivery']; ?>" name="delivery" />
<input type="hidden" value="<?php echo $firstpage['site']; ?>" name="site" />
<input type="hidden" value="<?php echo $firstpage['img']; ?>" name="img" />
<input type="hidden" value="<?php echo $firstpage['plots']; ?>" name="plots" />
<input type="hidden" value="<?php echo $firstpage['hdate']; ?>" name="hdate" />-->

                    <div class="col-lg-12 col-lg-offset-2 margin-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_scope">Scope of work</label>
                                    <textarea id="form_cmessage" name="scope" class="form-control" placeholder="Enter  Requirement" rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_flooring">Flooring</label>
                                    <textarea id="form_cmessage" name="flooring" class="form-control" placeholder="Enter flooring Requirement" rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_loose">Loose Furniture</label>
                                    <textarea id="form_cmessage" name="loose" class="form-control" style="background-color:#5bc0de" placeholder="Enter  Requirement"
                                        rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_metal">Metal Works</label>
                                    <textarea id="form_cmessage" name="metal" class="form-control" style="background-color:#5bc0de" placeholder="Enter flooring Requirement"
                                        rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
<!--
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_Kitchen">Kitchen</label>
                                    <textarea id="form_cmessage" name="Kitchen" class="form-control" placeholder="Enter kitchen Requirement" rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_metal">Bathroom Fittings</label>
                                    <textarea id="form_cmessage" name="Bathroomfittings" class="form-control" placeholder="Enter bathroom fittings Requirement "
                                        rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_loose">Wardrobes</label>
                                    <textarea id="form_cmessage" name="Wardrobes" class="form-control" style="background-color:#5bc0de" placeholder="Enter wardrobes Requirement "
                                        rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_metal">Floor Mats</label>
                                    <textarea id="form_cmessage" name="FloorMats" class="form-control" style="background-color:#5bc0de" placeholder="Enter floor mats Requirement "
                                        rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_loose">Complete Wood Work</label>
                                    <textarea id="form_cmessage" name="woodwork" class="form-control" placeholder="Enter wood work Requirement" rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_metal">POP</label>
                                    <textarea id="form_cmessage" name="pop" class="form-control" placeholder="Enter POP Requirement" rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_loose">Curtains</label>
                                    <textarea id="form_cmessage" name="curtains" class="form-control" style="background-color:#5bc0de" placeholder="Enter Curtains Requirement"
                                        rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_metal">Lightings</label>
                                    <textarea id="form_cmessage" name="Lightings" class="form-control" style="background-color:#5bc0de" placeholder="Enter Lightings Requirement"
                                        rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_loose">Electrical</label>
                                    <textarea id="form_cmessage" name="electrical" class="form-control" placeholder="Enter electrical Requirement" rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_metal">Other Requirements</label>
                                    <textarea id="form_cmessage" name="requirements" class="form-control" placeholder="Enter Requirement" rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>-->
                        <div id="customer-content" class="col-md-12"></div>
                        </div>
                        <input type="button" value="Add" onclick="openCategory()">
                        <br>
                        <div class="col-md-11">
                            <div class="form-group" style="text-align:center">
                                <input type="submit" class="btn btn-success btn-send" value="SUBMIT">
                                

                            </div>
                        </div>
                             <div class="col-md-1">
                            <div class="form-group" style="text-align:center">
                                <a class="btn btn-success btn-send" onclick="openQuotation()">Quotations </a>
                                

                            </div>
                           
                        </div>
                        <input type="hidden" value=" <?php echo $num[$val];?>" name="iduser" />

                    </div>
               
                <div>
                    <div>
                         </form>
                        <hr>
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <form>
                                    <label for="category">Category</label>
                                    <input type="text" id="category" name="category">
                                    <br>
                                    <label for="description">Description</label>
                                    <textarea id="description" rows="4" cols="50"></textarea>
                                </form>
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <button id="add-category" onclick="addCategory()">Add</button>
                                    <button onclick="closeCategory()">Close</button>
                                </div>
                            </div>
                        </div>
                        <div class="Animation ">
                        <div id="quotationModal" class="modal">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <center><h1><b><b>QUOTATION FORM</b></b></h1></center>
                                </div>
                                
                                <div class="modal-body">
                                    <form class="form-horizontal" action="/examples/actions/confirmation.php" method="post">
                                        <br> <br> 
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="inputName">Customer Name*:</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputName" placeholder="Enter name" style="background-color:#b4b4b4" name="name">
                                          </div>
                                          </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="inputReferenceNumber">Reference Number:</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputReferenceNumber" placeholder="Ref No" name="rnum">
                                          </div>
                                          </div>
                                    <br>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="inputPhoneNumber">Phone Number:</label>
                                            <div class="col-sm-8">
                                            <input type="number" class="form-control" id="inputPhoneNumber" placeholder="Phn No" style="background-color:#b4b4b4" name="pnum">
                                          </div>
                                          </div>
                                       <br>
                                           <div class="form-group">
                                            <label class="control-label col-sm-4" for="inputField1">Field 1:</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputfield1" placeholder="field" name="field1">
                                          </div>
                                          </div>
                                    <br>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="inputField2">Field 2:</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputfield2" placeholder="field" style="background-color:#b4b4b4" name="field2">
                                          </div>
                                          </div>
                                      <br>
                                               <div class="form-group">
                                            <label class="control-label col-sm-4" for="inputField3">Field 3:</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputfield3" placeholder="field" name="field3">
                                          </div>
                                          </div>
                                      <br>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="inputField4">Field 4:</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputfield4" placeholder="field" style="background-color:#b4b4b4" name="field4">
                                          </div>
                                          </div>
                                        <br>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="inputFinalAmount">Final Amount:</label>
                                            <div class="col-sm-8">
                                            <input type="number" class="form-control" id="inputFinalAmount" placeholder="Final Amount" name="field4">
                                          </div>
                                          </div>
                                        
                                          <div class="form-group">
                                             <label class="control-label col-sm-4" for="inputComments">Comments:</label>
                                             <div class="col-sm-8">          
                                             <textarea class="form-control" id="inputComments" placeholder="Please give comments" style="background-color:#b4b4b4" name="message"></textarea>
                                          </div>
                                          </div>
                                       
                                        <div class="form-group">
                                            <div class="col-xs-offset-6 col-xs-6">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button  type="button" class="btn btn-primary" onclick="closeQuotation()">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                               
<!--                                <div class="modal-footer">
                                    <button id="add-category" onclick="addCategory()">Add</button>
                                    <button onclick="closeQuotation()">Close</button>
                                </div>-->
                            </div>
                        </div>   
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-muted">
                            <strong>*</strong> These fields are required.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </fieldset>

    

    <script src="<?php echo base_url();?>validator.js"></script>
    <script src="<?php echo base_url();?>contact-2.js"></script>
    <script>

        var modal = document.getElementById('myModal');
        var modalQuotation = document.getElementById('quotationModal');

        function openCategory() 
        {
            modal.style.display = "block";
        }

        function closeCategory() {
            console.log("clicked")
            modal.style.display = "none";
        }
        
        function openQuotation() 
        {
            modalQuotation.style.display = "block";
        }

        function closeQuotation() {
            console.log("clicked")
            modalQuotation.style.display = "none";
        }

        function addCategory() {
            var catName = document.getElementById('category').value;
            var catDec = document.getElementById('description').value;
            var content = document.getElementById("customer-content");
            var catContent = `<div class="col-md-6 row-sorter">   
                            <div class="form-group">
                                <label for="form_metal">`+ catName + `</label>
                                <textarea id="form_cmessage" name="requirements" class="form-control" placeholder="Enter Requirement" rows="4" data-error="Please,leave us a message.">`+ catDec + `</textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>`;
            content.innerHTML += catContent;

            document.getElementById('category').value = "";
            document.getElementById('description').value = "";
            modal.style.display = "none";
        }
        function Quotation()
            {
            var URL = "http://localhost/liveinpassion.com/Managementcontrol/quotation";
            window.open(URL,"","width=950,height=700");
            }
            

//    
//    function validateForm() {
//    var a = document.forms["myForm"]["scope"].value;
//    var b = document.forms["myForm"]["flooring"].value;
//    var c = document.forms["myForm"]["loose"].value;
//    var d = document.forms["myForm"]["metal"].value;
//    var e = document.forms["myForm"]["Kitchen"].value;
//    var f = document.forms["myForm"]["Bathroomfittings"].value;
//    var g = document.forms["myForm"]["Wardrobes"].value;
//    var h = document.forms["myForm"]["FloorMats"].value;
//    var i = document.forms["myForm"]["woodwork"].value;
//    var j = document.forms["myForm"]["pop"].value;
//    var k = document.forms["myForm"]["curtains"].value;
//    var l = document.forms["myForm"]["Lightings"].value;
//    var m = document.forms["myForm"]["electrical"].value;
//    var n = document.forms["myForm"]["requirements"].value;
//
//
//
//
//
//
//
//if (a == "") {
//        alert("scope must be filled out");
//        return false;
//    }
//    if (b == "") {
//        alert("flooring must be filled out");
//        return false;
//    }
//    if (c == "") {
//        alert("loose must be filled out");
//        return false;
//    }
//    if (d == "") {
//        alert("metal must be filled out");
//        return false;
//    }
//    if (e == "") {
//        alert("kitchan must be filled out");
//        return false;
//    }
//    if (f == "") {
//        alert("Bathroomfittings must be filled out");
//        return false;
//    }
//    if (g == "") {
//        alert("Wardrobes must be filled out");
//        return false;
//    }
//    if (h == "") {
//        alert("FloorMats must be filled out");
//        return false;
//    }
//    if (i == "") {
//        alert("woodwork must be filled out");
//        return false;
//    }
//    if (j == "") {
//        alert("pop must be filled out");
//        return false;
//    }
//    if (k == "") {
//        alert("curtains must be filled out");
//        return false;
//    }
//    if (l == "") {
//        alert("Lightings must be filled out");
//        return false;
//    }
//    if (m == "") {
//        alert("electrical must be filled out");
//        return false;
//    }
//    if (n == "") {
//        alert("requirements must be filled out");
//        return false;
//    }
//
//
//    }
//    
//
//
//
//    </script>
    
</body>

</html>