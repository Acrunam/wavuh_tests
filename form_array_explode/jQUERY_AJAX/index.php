<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View, Add & Edit Names</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="form_styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>

function save_users() {

	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			document.getElementById("users_view").innerHTML = this.responseText;
		}
	};
	
	formdata = new FormData(document.getElementById("save_name_form"));
	xmlhttp.open("POST","save_names.php",true);
	xmlhttp.send(formdata);
}

function update_names(){

	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			document.getElementById("users_view").innerHTML = this.responseText;
		}
	};

	formdata = new FormData(document.getElementById("update_names_form"));
	xmlhttp.open("POST","update_names.php",true);
	xmlhttp.send(formdata);
}

//jQuery AJAX zone



//jQuery AJAX zone

function show_users() {

	$.ajax({
 
    // The URL for the request
    url: "show_users.php",
 
    // Whether this is a POST or GET request
    type: "POST"
})
  // Code to run if the request succeeds (is done);
  // The response is passed to the function
  .done(function() {

  	$("#users_view").load("show_users.php");

  })
  // Code to run if the request fails; the raw request and
  // status codes are passed to the function
  .fail(function( xhr, status, errorThrown ) {
    alert( "Sorry, there was a problem!" );
    console.log( "Error: " + errorThrown );
    console.log( "Status: " + status );
    console.dir( xhr );
  })
  // Code to run regardless of success or failure;
  .always(function( xhr, status ) {
    alert( "The request is complete!" );
  });

}

</script>
</head>
<body onload="show_users();">

<div id="users_view">
</div>
<br>

<form onsubmit="save_users(this);" id="save_name_form">
<label>Enter Name</label>
<input type="textarea" name="names">
<button type ="submit" name="save_names" class="button-xsmall pure-button">Save to DB</button>
</form>

</body>
</html>