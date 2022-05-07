<?php

include('connection.php');

$sql="SELECT * FROM bike_bookings";
$res=mysqli_query($conn,$sql);

$output="<table border= '1' ><tr><th>Id</th><th>name</th><th>Bike</th><th colspan='2'>Pick & Drop Date</th><th colspan='2'>Pick & Drop location</th ><th>Contact</th></tr>";


	while($data=mysqli_fetch_assoc($res)){
		$output .= "<tr><td>{$data['bookingId']}</td><td>{$data['fullname']}</td><td>{$data['bike_name']}</td><td>{$data['pickupDate']}</td><td>{$data['returnDate']}</td><td>{$data['pickupLoc']}</td><td>{$data['returnLoc']}</td><td>{$data['contactNo']}</td></tr>";
	};

	$output .="</table>";
	echo $output;




?>