<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>

<h3>Start typing a name in the input field below:</h3>

<form action=""> 
First name: <input type="text" id="txt1" onkeyup="showHint(this.value)">
</form>

<p>Suggestions: <span id="txtHint"></span></p> 

<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo base_url(); ?>Ajaxsearch/fetch?q="+str, true);
  xhttp.send();   
}
</script>
<script>  
$(document).ready(function(){
	load_data();

	function load_data(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>Ajaxsearch/fetch",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#result').html(data);
			}
		});
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search !== '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
});
</script>
</body>
</html>