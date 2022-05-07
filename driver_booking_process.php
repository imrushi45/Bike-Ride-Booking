<?php



      echo  $driverId=$_POST['driverId'];
            $drivername=$_POST['drivername'];
      echo  $pickupLoc=$_POST['pickupLoc'];
      echo  $returnLoc=$_POST['returnLoc'];
       echo $pickupDate=$_POST['pickupDate'];
      echo  $returnDate=$_POST['returnDate'];
      echo  $fullname=$_POST['fullname'];
      echo  $email=$_POST['email'];
     echo   $contactNo=$_POST['contact'];
      echo  $charges=$_POST['charges'];

         include('connection.php');

         $query="INSERT INTO driver_bookings( driverId,drivername, pickupLoc, returnLoc, pickupDate, returnDate,fullname, email , contactNo,charges) VALUES ('$driverId','$drivername','$pickupLoc','$returnLoc','$pickupDate','$returnDate','$fullname','$email','$contactNo','$charges')";


        if (mysqli_query($conn,$query)) {
        	echo 1 ;
        }else{echo 0;}


?>