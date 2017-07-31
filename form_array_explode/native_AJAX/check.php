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
function show_users() {
 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //Change this to your POST functionality --
				document.getElementById("users_view").innerHTML = this.responseText;
            }
        };
		//Change this to post -- DONE
        xmlhttp.open("POST","show_users.php",true);
        xmlhttp.send();
    }

"user_strict";
function save_users(oFormElement){
  var xhr = new XMLHttpRequest();
  xhr.onload = function(){ alert (xhr.responseText); }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
	
	/*
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
			//Change this to your POST functionality --
			document.getElementById("users_saved").innerHTML = this.responseText;
		}
	};
	//Change this to post -- DONE
	
	//var x = document.getElementsByName("names");
	
	/*
	xmlhttp.open("POST","save_names.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("names");
	
	
	
"use strict";

  
  xmlhttp.onload = function(){ alert (xmlhttp.responseText); }
  xmlhttp.open (oFormElement.method, oFormElement.action, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send (new FormData (oFormElement));
  return false;

*/
	



</script>
</head>
<body>

<div id="users_view">
<button type="button" onclick="show_users()" class="button-small pure-button">Show users</button>
</div>

<br>

<!-- MAYBE HAVE A UNIFIED DIV TAG FOR THESE TWO -->

<div id="users_saved">
<form action="save_names.php" method="post" onsubmit="save_users(this);">

<label>Enter Name</label>

<input type="textarea" name="names">

<!-- <button type ="submit" name="save_names" class="button-xsmall pure-button">Save to DB</button> -->

<input type ="submit" name="save_names" class="button-xsmall pure-button" value="Save to DB">

</form>
</div>

</body>
</html>