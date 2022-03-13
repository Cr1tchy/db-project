<?php

	header('Content-Type: test/html; charset=utf-8');
	
	$db = mysqli_connect('localhost', 'test', 'test1234', 'market');

	if(!$db)
	{
		die('Connect Error: ' .mysqli_connect_error());
	}
?>

