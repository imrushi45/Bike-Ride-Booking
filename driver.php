<?php include('connection.php') ; ?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>RideU</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

      
      <style type="text/css">
          img.size{height: 300px;}
     </style>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
    <div id="content"></div>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>DRIVER</h1>

                    <br>

                   
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">

                    <?php

                         $sql= "SELECT * FROM driver";
                         $res=mysqli_query($conn, $sql);
                         while($data=mysqli_fetch_assoc($res)){

                       echo "<div class='col-md-4 col-sm-4'>
                              <div class='courses-thumb courses-thumb-secondary'>
                                   <div class='courses-top'>
                                        <div class='courses-image'>
                                             <img src='images/".$data['pic']."' class='img-responsive size' alt=''>
                                        </div>
                                   </div>

                                   <div class='courses-detail'>
                                      <ul>
                                           <li>Name: ".$data['drivername']."</li>
                                           <li>Age: ".$data['age']."</li>
                                           <li>Address: ".$data['address']."</li>
                                           <li>Ph.No.: ".$data['phone']."</li>
                                      </ul>
                                     
                                   </div>

                                   <div class='courses-info'>
                                       <a href='book_driver.php?id=".$data['driverId']."&name=".$data['drivername']."'><button type='button' data-eid='".$data['driverId']."' data-toggle='modal' data-target='.bs-example-modal' class='section-btn btn btn-primary btn-block click'>Book Now</button></a> 
                                   </div>
                              </div>
                    </div>";       

                         }


                    ?>
                <!--     

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/Driver.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <ul>
                                        <li>Name: ABC</li>
                                        <li>Age: 30</li>
                                        <li>Address: Nagpur</li>
                                        <li>Ph.No.: 5252555252</li>
                                   </ul>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/Driver.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <ul>
                                        <li>Name: IJK</li>
                                        <li>Age: 32</li>
                                        <li>Address: Nagpur</li>
                                        <li>Ph.No.: 7875577878</li>
                                   </ul>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/Driver.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <ul>
                                        <li>Name: LMN</li>
                                        <li>Age: 40</li>
                                        <li>Address: Nagpur</li>
                                        <li>Ph.No.: 5653565655</li>
                                   </ul>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/Driver.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <ul>
                                        <li>Name: OPQ</li>
                                        <li>Age: 35</li>
                                        <li>Address: Nagpur</li>
                                        <li>Ph.No.: 4644655644</li>
                                   </ul>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/Driver.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <ul>
                                        <li>Name: RST</li>
                                        <li>Age: 26</li>
                                        <li>Address: Nagpur</li>
                                        <li>Ph.No.: 8656865844</li>
                                   </ul>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div> -->
               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>Nagpur</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 RideU</p>
                                   <!-- <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p> -->
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <!-- <p>+1 333 4040 5566</p> -->
                                   <p><a href="mailto:contact@company.com">RideU@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="terms.html">Terms & Conditions</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="#" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" id="pickupLoc" placeholder="Pick-up location" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" id="returnLoc" placeholder="Return location" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" id="pickupDate" placeholder="Pick-up date/time" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" id="returnDate" placeholder="Return date/time" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" id="fullname" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" id="email" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" id="contactNo" placeholder="Enter phone" required>
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
     <div class="toast" id="successmsg" style="background: green;width: 50%;margin-left: 25%;position: absolute;top: 30vh;border-radius: 8px;padding: 30px;">
    <div class="toast-header" style="color: #ddd; text-align: center; font-weight: bolder;font-size: 20px;">
      You have Successfully Booked <span style="color:#ffffff;"> </span>
    </div>
    <div style="color:#eee; text-align: center;margin-top: 30px;">Thank you for choosing RideU, Have a Safe Ride</div>
    
</div>

     <!-- SCRIPTS -->

     <script>
          $(document).ready(function(){
             $('#content').load("header.html");

              $('#successmsg').hide();

             // $(document).on('click','.click',function(){

             //    var dId= $(this).data('eid');

             //    $('#gridSystemModalLabel').text(dId);

                            
             // });

             
             // $('#submit').on('click',function(){
              
             //  var driverId=dId;
             // var pickupLoc=$('#pickupLoc').val();
             // let returnLoc=$('#returnLoc').val();
             // const pickupDate=$('#pickupDate').val();
             // const returnDate=$('#returnDate').val();
             // const fullname=$('#fullname').val();
             // const email=$('#email').val();
             // const contact=$('#contactNo').val();
             // const charges="N/A";

             // $.ajax({
             //   url:"driver_booking_process.php",
             //   type: "POST",
             //   data:{driverId:driverId,pickupLoc:pickupLoc,returnLoc:returnLoc,pickupDate:pickupDate,returnDate:returnDate,fullname:fullname,email:email,contact:contact,charges:charges},
             //   success: function(data){
             //        if (data) {
             //             alert(data);
             //             $('.toast').show(1000);
             //             setTimeout(function(){$('.toast').hide(1000)}, 4000);
             //             $('#contact-form').trigger("reset");
                         
             //             }else{alert('booking failled');}
             //   }
             // });

             // });


          });
     </script>


     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>