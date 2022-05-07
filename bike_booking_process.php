<?php



        $bikename=$_POST['bikename'];
        $pickupLoc=$_POST['pickupLoc'];
        $returnLoc=$_POST['returnLoc'];
        $pickupDate=$_POST['pickupDate'];
        $returnDate=$_POST['returnDate'];
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $contactNo=$_POST['contact'];
        $user=$_POST['users'];

         include('connection.php');

         $query="INSERT INTO bike_bookings(bike_name, pickupLoc, returnLoc, pickupDate, returnDate,fullname, email , contactNo,user) VALUES ('$bikename','$pickupLoc','$returnLoc','$pickupDate','$returnDate','$fullname','$email','$contactNo','$user')";


        if (mysqli_query($conn,$query)) {
        	echo "1" ;
        }else{echo "0";}


?>