<?php
//Connect_to_MySQL
$con = mysqli_connect("localhost","root","zaq1024z","shoutit");

//Test Connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}