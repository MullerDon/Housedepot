<html>
	<head>
		<title>
		Email sent..
		</title>
	</head>
	
	<body>
		<h2>Thank you for your email </h2>
		We will get back to you shortly. Click the back arrow to return to the previous page.
		<br />
			<?php
			ini_set("include_path", '/home/f1642879/php:' . ini_get("include_path")  );		
			$mess_safe=strip_tags($_POST['message']);//strip html tags for security
			//mail("mullerd@mweb.co.za", "housedepot email", $_POST["message"]);
			mail("admin@housedepot.co.za,mullerd@mweb.co.za", "housedepot email", $mess_safe);
			?>
	</body>
</html>
