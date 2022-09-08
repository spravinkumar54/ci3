<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>
<style type="text/css">
	input{
		margin:10px;
	}
</style>

<form action='interested' method="post" margin="10px;">
	<input type ="text" name = "name" id="name" placeholder="input your name here"><br>
	<input type="number" name="mobile" id="mobile" placeholder="your mobile number here"><br>
	<input type="text" name= "city" id="city" placeholder="Current city"><br>
	<input type="submit" value="submit">

</form>

<script type="text/javascript">
	let name = document.getElementsByName('name');
	let mobile = document.getElementById('mobile');
	function validateform(){
		console.log(name[0].value);
		alert("hello " + name[0].value);
	}

</script>