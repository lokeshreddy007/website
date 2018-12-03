
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

             ****************************************
             *      DATA DISABLED                    *
             *                                       *
             ****************************************
<div class="col-md-6">
                    <div class="form-group">
                        <label>Next INSTALLMENT DATE:</label>
                        <!-- <input type="date" class="form-control"  name="date" id="date" /> -->
                        <input id="dateField" class="form-control" type="date" min="2014-01-01" disabled  />
                    </div>
                </div>

<script>
var input = document.getElementById("dateField");
      var today = new Date();
      var day = today.getDate();
      // Set month to string to add leading 0
      var mon = new String(today.getMonth()+1); //January is 0!
      var yr = today.getFullYear();
      
        if(mon.length < 2) { mon = "0" + mon; }
      
        var date = new String( yr + '-' + mon + '-' + day );
      
      input.disabled = false; 
      input.setAttribute('min', date);
      </script>

</body>
</html>



