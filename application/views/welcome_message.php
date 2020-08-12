<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>

<div id="container">
	<h1>Congrats! You just created your first PHP web app in Azure App Service (Powered by CodeIgniter)!</h1>
	<?PHP
	foreach($_SERVER as $key_name => $key_value) {
	print $key_name . ” = ” . $key_value . “<br>”;
	}
	?>
</div>

</body>
</html>
