<?php
    // SERVER

if(getenv('REQUEST_METHOD') == 'POST') {
	$client_data = file_get_contents("php://input");
	echo "
		<SERVER>
			Hallo, I am server
			This is what I've got from you
			$client_data
		</SERVER>
	";
	exit();
}

//Print "Hello, World!";
    //echo "Welcome, I am connecting Android to PHP, MySQL";
?>
