<?php  include('connection.php');

 ?>

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
     <script>
          $(document).ready(function(){
             $('#content').load("header.html");
          });
     </script>

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

     <section class="section-background">
          <div class="container">
               <div class="row">


               <?php

                         $sql = "SELECT * FROM bikes";
                         $res = mysqli_query($conn,$sql);
                        
                         while($data=mysqli_fetch_assoc($res)){
                              echo 
                         

                    
                     

                   " <div class='col-md-4 col-sm-4'>
                         <div class='courses-thumb courses-thumb-secondary'>
                              <div class='courses-top'>
                                   <div class='courses-image'>
                                        <img src='images/".$data['bike_pic']."' class='img-responsive size' >
                                   </div>
                              </div>

                              <div class='courses-detail'>
                                   <h3>".$data['bike_name']."</h3>
                                   <ul>
                                       <li>".$data['bike_cc']."CC</li>
                                       <li>".$data['bike_millage']."Km/l</li>
                                       <li>".$data['bike_weight']."Kg</li>
                                        <li style='visibility:hidden;'>".$data['id']."</li>
                                   </ul>
                              </div>
                              <div class='courses-info'>
                                   <a href='book_bike.php?bike_name=".$data['bike_name']."'><button type='button' data-toggle='modal' data-target='.bs-example-modal' class='section-btn btn btn-primary btn-block'>Book Now</button></a>
                              </div>
                         </div>
                    </div>
            " ;};  ?>
                   <!--  <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/Yamah MT-15.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Yamaha MT-15</a></h3>
                                    <ul>
                                        <li>155.0 CC</li>
                                        <li>48 Km/l</li>
                                        <li>138 Kg</li>
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
                                        <img src="images/Yamah MT-15.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Yamaha FZ S V3.0 Fi</a></h3>
                                   <ul>
                                       <li>149.0 CC</li>
                                       <li>45 Km/l</li>
                                       <li>148 Kg</li>
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
                                        <img src="images/honda hornet 2.0.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Honda Hornet 2.0</a></h3>
                                   <ul>
                                       <li>184.4 CC</li>
                                       <li>40 Km/l</li>
                                       <li>142 Kg</li>
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
                                        <img src="images/bajaj-pulsar-ns160.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Bajaj Pulsar NS160</a></h3>
                                   <ul>
                                       <li>160.3 CC</li>
                                       <li>45 km/l</li>
                                       <li>151 Kg</li>
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
                                        <img src="images/hero-xtreme-200s.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Hero Xtreme 200S</a></h3>
                                   <ul>
                                       <li>199.6 CC</li>
                                       <li>36.9 Km/l</li>
                                       <li>155 Kg</li>
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
                                       <img src="images/KTM RC 390.jpg" class="img-responsive" alt="">
                                  </div>
                             </div>

                             <div class="courses-detail">
                                  <h3><a href="bike.html">KTM RC 390</a></h3>
                                  <ul>
                                      <li>373.2 CC</li>
                                      <li>35 km/l</li>
                                      <li>147 Kg</li>
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
                                        <img src="images/TVS apache RTR 180.png" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">TVS Apache RTR 180</a></h3>
                                   <ul>
                                       <li>177.4 CC</li>
                                       <li>47 km/l</li>
                                       <li>139 Kg</li>
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
                                        <img src="images/Husqvarna svartpilen 250.jpg" class="img-responsive" alt="">
                                   </div> 
                             </div>

                             <div class="courses-detail">
                                   <h3><a href="bike.html">Husqvarna Svartpilen 250</a></h3>
                                   <ul>
                                        <li>248.8 CC</li>
                                        <li>35 km/l</li>
                                       <li>154 Kg</li>
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
                                        <img src="images/Yamaha YZF R15 V3.jpeg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Yamaha YZF R15 V3</a></h3>
                                   <ul>
                                        <li>Engine Displ.: 106 CC</li>
                                        <li>Mileage: 48 km/l</li>
                                        <li>Fuel Type: Petrol</li>
                                   </ul>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
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
                                        <img src="images/royal enfield classic 350.jpg" class="img-responsive" alt="">
                                   </div>  
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Royal Enfield Classic 350</a></h3>
                                   <ul>
                                        <li>Emission Type: BS6</li>
                                        <li>Engine Displ: 346 CC</li>
                                        <li>Mileage: 41.93 Km/l</li>
                                        <li>Max Power: 19.36 PS @ 5250 rpm</li>
                                        <li>Gear Box: 5 Speed</li>
                                        <li>Fuel Type: Petrol</li>
                                        <li>ABS: Dual Channel</li>
                                        <li>Head lamp:NA</li>
                                        <li>Wheels Type: Spoke</li>
                                        <li>Tyre Type: Tubeless</li>
                                        <li>Standard Warranty(Years): NA</li>
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
                                        <img src="images/royal enfield bullet 350.jpeg" class="img-responsive" alt="">
                                   </div>
                             </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Royal Enfield Bullet 350</a></h3>
                                   <ul>
                                        <li>Emission Type: BS6</li>
                                        <li>Engine Displ: 346 CC</li>
                                        <li>Mileage: NA</li>
                                        <li>Max Power: 19.36 PS @ 5250 rpm</li>
                                        <li>Gear Box: 5 Speed</li>
                                        <li>Fuel Type: Petrol</li>
                                        <li>ABS: Single Channel</li>
                                        <li>Head Lamp: NA</li>
                                        <li>Wheels Type: Spoke</li>
                                        <li>Tyre Type: Tube</li>
                                        <li>Standard Warranty(Years): NA</li>
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
                                        <img src="images/bajaj avenger street 160.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Bajaj Average Street 160</a></h3>
                                   <ul>
                                        <li>Emission Type: BS6</li>
                                        <li>Engine Displ: 160 CC</li>
                                        <li>Mileage: 47.2 Km/l</li>
                                        <li>Max Power: 15 PS @ 8500 rpm</li>
                                        <li>Gear Box: 5 Speed</li>
                                        <li>Fuel Type: Petrol</li>
                                        <li>ABS: single Channel</li>
                                        <li>Head lamp: NA</li>
                                        <li>Wheels Type: Alloy</li>
                                        <li>Tyre Type: Tubeless</li>
                                        <li>Standard Warranty(Years): NA</li>
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
                                        <img src="images/bajaj avenger cruise 220.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Bajaj Average Cruise 220</a></h3>
                                   <ul>
                                        <li>Emission Type: BS6</li>
                                        <li>Engine Displ: 220 CC</li>
                                        <li>Mileage: NA</li>
                                        <li>Max Power: 19.03 PS @ 8500 rpm</li>
                                        <li>Gear Box: 5 Speed</li>
                                        <li>Fuel Type: Petrol</li>
                                        <li>ABS: single Channel</li>
                                        <li>Head lamp: NA</li>
                                        <li>Wheels Type: Spoke</li>
                                        <li>Tyre Type: Tube</li>
                                        <li>Standard Warranty(Years): NA</li>
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
                                        <img src="images/bajaj pulsar 150.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Bajaj Pulser 150</a></h3>
                                   <ul>
                                        <li>Emission Type: BS6</li>
                                        <li>Engine Displ: 149.5 CC</li>
                                        <li>Mileage: NA</li>
                                        <li>Max Power: 14 PS @ 8500 rpm</li>
                                        <li>Gear Box: 5 Speed</li>
                                        <li>Fuel Type: Petrol</li>
                                        <li>ABS: single Channel</li>
                                        <li>Head lamp: NA</li>
                                        <li>Wheels Type: Alloy</li>
                                        <li>Tyre Type: Tubeless</li>
                                        <li>Standard Warranty(Years): NA</li>
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
                                        <img src="images/hero spendor plus.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Hero Spendor Plus</a></h3>
                                   <ul>
                                        <li>Emission Type: BS6</li>
                                        <li>Mileage: NA</li>
                                        <li>Engine Displ.:97.2 CC</li>
                                        <li>Brakes Front: Drum</li>
                                        <li>Max Power: 8.02 PS @ 8000 rpm</li>
                                        <li>Kerb Weight: 112 Kg</li>
                                        <li>Starting: Kick and Self Start</li>
                                        <li>Wheels Type: Alloy</li>
                                        <li>Tyre Type: Tubeless</li>
                                        <li>Digital Fuel Indicator: NA</li>
                                   </ul>
                                   <br>
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
                                        <img src="images/HF DELUXE.jpg" class="img-responsive" alt="">
                                  </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">HF Delux</a></h3>
                                   <ul>
                                        <li>Emission Type: BS6</li>
                                        <li>Mileage: NA</li>
                                        <li>Engine Displ.: 97.2 CC</li>
                                        <li>Brakes Front: Drum</li>
                                        <li>Max Power: 8.02 PS @ 8000 rpm</li>
                                        <li>Kerb Weight: 112 Kg</li>
                                   </ul>
                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                  <br>
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
                                        <img src="images/apache RTR 160 4v.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Apache RTR 160 4V</a></h3>
                                   <ul>
                                        <li>Emission Type: BS6</li>
                                        <li>Engine Displ: 159.7 CC</li>
                                        <li>Mileage: 54.78 Km/l</li>
                                        <li>Max Power: 17.63 PS @ 9250 rpm</li>
                                        <li>Gear Box: 5 Speed</li>
                                        <li>Fuel Type: Petrol</li>
                                        <li>ABS: single Channel</li>
                                        <li>Head lamp: NA</li>
                                        <li>Wheels Type: Alloy</li>
                                   </ul>
                                   <br>      
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
                                        <img src="images/TVS jupiter.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">TVS Jupiter</a></h3>
                                   <ul>
                                        <li>Engine Displ.:109.7 CC</li>
                                        <li>Mileage: 60.44 Km/l</li>
                                        <li>Brakes Front: Disc</li>
                                        <li>Max Power: 7.47 PS @ 7000 rpm</li>
                                        <li>Kerb Weight: 107 Kg</li>
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
                                        <img src="images/honda-activa-6g.jpg" class="img-responsive" alt="">
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">Honda Activa 6G</a></h3>
                                   <ul>
                                        <li>Engine Displ.:109.51 CC</li>
                                        <li>Mileage: NA</li>
                                        <li>Max Power: 7.79 PS @ 8000 rpm</li>
                                        <li>Gear Box: CVT</li>
                                        <li>Fuel Type: Petrol</li>
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
                                        <img src="images/TVS NTORQ 125.jpg" class="img-responsive" alt="">
                                   </div>  
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="bike.html">TVS NTORQ 125</a></h3>
                                   <ul>
                                        <li>Engine Displ.:124.8 CC</li>
                                        <li>Mileage: 47 Km/l</li>
                                        <li>Max Power: 9.38 PS @ 7000 rpm</li>
                                        <li>Gear Box: CVT</li>
                                        <li>Fuel Type: Petrol</li>
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
                                        <input type="text" class="form-control" placeholder="Pick-up location" required>
										<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;q=nagpur&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:200px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:200px;}.gmap_iframe {height:200px!important;}</style></div>
                                   </div>

                                   <div class="col-md-6">
								   
                                        <input type="text" class="form-control" placeholder="Return location" required>
										<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;q=nagpur&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:200px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:200px;}.gmap_iframe {height:200px!important;}</style></div>
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
                                        <input   type="datetime-local" class="form-control" placeholder="Pick-up date " required>
                                   </div>

                                   <div class="col-md-6">
								    <label>Drop Date</label>
                                        <input   type="datetime-local" class="form-control" placeholder="Return date" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>