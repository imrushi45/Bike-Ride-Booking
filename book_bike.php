<?php  include('connection.php') ;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>



     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">




      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<div id="content"></div>

     <div class=" " tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                        <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                         <h4 class="modal-title" id="gridSystemModalLabel">
                         	<?php 

                         		$name=$_GET['bike_name']; 

                         		if ($name) {
                         			
                         		echo $name; 
                         	}else{
                    				header('location:bike.php');
                         	}
                     	 ?>
                     </h4>
                    </div>
                    
                    <div class="modal-body">
                         <form id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up location" id="pickupLoc" required>
										<!-- <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;q=nagpur&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:200px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:200px;}.gmap_iframe {height:200px!important;}</style></div> -->
                                   </div>

                                   <div class="col-md-6">
								   
                                        <input type="text" class="form-control" placeholder="Return location" id="returnLoc" required>
										<!-- <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;q=nagpur&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:200px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:200px;}.gmap_iframe {height:200px!important;}</style></div> -->
                                   </div>
                              </div>
								<div class="row">
								<div class="col">
								<hr>
								</div>
								</div>
                              <div class="row">
							  
                                   <div class="col-md-6">
								 <label>Pickup Date</label>   
                                        <input   type="datetime-local" class="form-control" id="pickupDate" placeholder="Pick-up date " required>
                                   </div>

                                   <div class="col-md-6">
								    <label>Drop Date</label>
                                        <input   type="datetime-local" class="form-control" id="returnDate" placeholder="Return date" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" id="fullname" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="number" class="form-control" id="contactNo" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>

                    <div class="modal-footer">
                         <button type="button" id="submit" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>
<div class="toast" style="background: green;width: 50%;margin-left: 25%;position: absolute;top: 30vh;border-radius: 8px;padding: 30px;">
    <div class="toast-header" style="color: #ddd; text-align: center; font-weight: bolder;font-size: 20px;">
      You have Successfully Booked <span style="color:#ffffff;"><?php echo $name; ?></span>
    </div>
    <div style="color:#eee; text-align: center;margin-top: 30px;">Thank you for choosing RideU, Have a Safe Ride</div>
    
</div>
     <!-- SCRIPTS -->
      <script>
          $(document).ready(function(){

               if (!localStorage.getItem('lastname')) {
                    alert("For Booking, plz logIn first");
                    location.replace('login.html');
               }

               $('.toast').hide();
               
             $('#content').load("header.html");

             
             $(document).on('click','#submit',function(e){
               e.preventDefault();

              var bikename="<?php echo $name=$_GET['bike_name']; ?>";
             var pickupLoc=$('#pickupLoc').val();
             let returnLoc=$('#returnLoc').val();
             const pickupDate=$('#pickupDate').val();
             const returnDate=$('#returnDate').val();
             const fullname=$('#fullname').val();
             const email=$('#email').val();
             const contact=$('#contactNo').val();
             const user="N/A";
	
 


             $.ajax({
             	url:"bike_booking_process.php",
             	type: "POST",
             	data:{bikename:bikename,pickupLoc:pickupLoc,returnLoc:returnLoc,pickupDate:pickupDate,returnDate:returnDate,fullname:fullname,email:email,contact:contact,users:user},
             	success: function(data){
             		if (data) {
                         $('.toast').show(1000);
                         setTimeout(function(){$('.toast').hide(1000)}, 4000);
                         $('#contact-form').trigger("reset");
             			
             		     }else{alert('booking failled');}
             	}
             });

             });

            


          });
     </script>

 
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <!-- <script src="js/jquery.js"></script> -->
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>