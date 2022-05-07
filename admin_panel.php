<!-- <?php 
include('connection.php');

?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin</title>

	   <link rel="stylesheet" href="css/bootstrap.min.css">
       <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->

	<style type="text/css">
		
		body{margin: 0;padding: 0;box-sizing: border-box;background:#333; color: #ccc;height: 100vh;}
		.header{color: #eee;display: flex;width: 100%;align-items:center;justify-content: space-between;}
		.menu{width: 20%;border-right: 1px solid #eee;}
		.menu ul li{width: 90%;margin:5%;background: #444;padding: 10%;text-align: center;list-style-type: none;border-radius: 4px;}
		.menu ul li:hover{background:#333;cursor: pointer;}
		.body{width: 80%; position: relative;}
		div.home,div.bike,div.driver{width: 100%;position: absolute;height: 75vh;}
		div.home{background: red; }
		div.bike{background: green;}
		div.driver{background: blue;}
		.biketable, .driverTable{width: 100%;margin-top: 20px;}
		h4{width: 100%;background: #444; border: 1px solid #111;padding: 10px;}
		table{width: 98%; text-align: center;margin: 1%; background: #333; padding: 10px;}
		th{text-align: center; padding: 5px 5px;}

		.features_title , .details{width: 98%;margin-left: 1%; background: ;padding-bottom: 15px;}
		.formDesign{width: 98%;margin-left: 1%;padding: 10px;background: #333;}
		#driver_list , #bike_list{padding: 1%;width: 98%;margin-left: 1%; background:#333 ;}
		.log{position: absolute;left: 0;top: 0;width: 100%;height: 100vh;background: rgba(0, 0, 0, 0.7); align-items: center; justify-content: center;display: flex;}
		.log div{}




	</style>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
	<div class="header">
		<div class="title"><h1>RideU</h1></div>
		<div id="session-name"> </div>
	</div><hr style="border:2px solid blue;">
	<div style="display: flex;">
		<div class="menu">
			<ul>
				<li id="home">Home</li>
				<li id="bike">Bike's</li>
				<li id="driver">Driver's</li>
				<li id="logout">LogOut</li>
				
			</ul>
		</div>
		<div class="body">
			<div class="home">
				<div class="bikeTable">
					<h4>Bikes</h4>
					
					<div id="bikebooking"></div>
				</div>
				<div class="driverTable">
					<h4>Drivers</h4>
					<div id="driverbooking"></div>
				</div>

			</div>


			<div class="bike">
				<div class="features_title">
					<h4>Add Bikes</h4>
				</div>
				<div class="details">

				<form id="fupForm" class="formDesign" enctype="multipart/form-data">
   
			        <input type="text" class="" id="name" name="name" placeholder="Bike name" required />
			        <input type="text" class="" id="cc" name="cc" placeholder="cc" required />
			        <input type="text" class="" id="millage" name="millage" placeholder="millage" required />
			        <input type="text" class="" id="weight" name="weight" placeholder="weight" required />
			        <input type="file" class="" id="file" name="file" required />
			   		<input type="submit" name="submit" class="btn btn-success submitBtn" value="SUBMIT"/>
				</form>
				<!-- <div class="statusMsg"></div> -->
					
				</div>
				<div id="bike_list"></div>
			</div>

			<div class="driver">
				<div class="features_title">
					<h4>Add Drivers</h4>
				</div>
				<div class="details">

				<form id="driverAddForm" class="formDesign" enctype="multipart/form-data">
   
			        <input type="text" class="" id="names" name="names" placeholder="Drivers name" required />
			        <input type="text" class="" id="address" name="address" placeholder="Address" required />
			        <input type="text" class="" id="phone" name="phone" placeholder="Phone" required />
			        <input type="text" class="" id="age" name="age" placeholder="Age" required />
			        <input type="file" class="" id="files" name="file" required />
			   		<input type="submit" name="submit" class="btn btn-success submitBtn" value="SUBMIT"/>
				</form>
				<div class="statusMsg"></div>
					
				</div>
				<div id="driver_list"></div>
			</div>
		</div>
	</div>
</div>
<div class="log">
	<div id="login">
		<input type="text" name="" placeholder="Username" id="username">
		<input type="password" name="" placeholder="Password" id="password">
		<input type="submit" name="" class="btn btn-primary" id="log-in">
		
	</div>
</div>







<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">

	
	
	$(document).ready(function(){
			$('.home').show();
			$('.bike').hide();
			$('.driver').hide();
			$('#home').css("background-color", "red");


		if (!sessionStorage.getItem("username")) {

				$('#log-in').click(function(e){
				e.preventDefault();
				var username=$('#username').val();
				var password=$('#password').val();
				if (username=='Rushi' && password=='password') {

					sessionStorage.setItem("username", username);
					$('.log').hide();
					 $('#session-name').text(`WelCome ${sessionStorage.getItem('username')}`);
					// var ssn =sessionStorage.getItem('username');

					// $('#session-name').innerText(ssn);

				}else{ alert('Wrong Credential')}
			});
		}else{

			$('.log').hide();
			 $('#session-name').text(`WelCome ${sessionStorage.getItem('username')}`);
			
		};

	
		// $('#session-name').text(ssn);

		$('#home').click(function(){ 
			$('.home').show();
			$('.bike').hide();
			$('.driver').hide();

			$(this).css("background-color", "red");
			$('#bike, #driver' ).css("background-color", "#444");

			
		});
		$('#bike').click(function(){ 
			$('.home').hide();
			$('.bike').show();
			$('.driver').hide();

			$(this).css("background-color", "green");
			$('#home , #driver' ).css("background-color", "#444");
		});
		$('#driver').click(function(){ 
			$('.home').hide();
			$('.bike').hide();
			$('.driver').show();

			$(this).css("background-color", "blue");
			$('#bike , #home' ).css("background-color", "#444");
		});
		$('#logout').click(function(){ 
			sessionStorage.clear();
			location.reload();
		});

 function LoadBikeBooking(){

 	$.ajax({
						url : "admin/loadBikeBookings.php",
						Type : "POST",
						data:{},
						success : function(data){
							if (data) {
								$('#bikebooking').html(data)
							}else{alert("0")}
						}
				});

 };
function LoadDriverBooking(){

				$.ajax({
						url : "admin/loadDriverBookings.php",
						Type : "POST",
						data:{},
						success : function(data){
							if (data) {
								$('#driverbooking').html(data)
							}else{alert("0")}
						}
					});
};

function LoadDriver(){
			$.ajax({
						url : "admin/loadDrivers.php",
						Type : "POST",
						data:{},
						success : function(data){
							if (data) {
								$('#driver_list').html(data)
							}else{alert("0")}
						}
					});

			DeleteDriverEntry();

};
function LoadBikes(){

			$.ajax({
						url : "admin/loadBikes.php",
						Type : "POST",
						data:{},
						success : function(data){
							if (data) {
								$('#bike_list').html(data)
							}else{alert("0")}
						}
					});
			DeleteBikeEntry();
};

function DeleteDriverEntry(){

	$(document).on('click','.del_driver',function(){

		var delDriver = $(this).attr('id');

		$.ajax({ 
				url:"admin/DeleteEntry.php",
				type:"POST",
				data:{delDriver:delDriver},
				success:function(data){ LoadDriver()}
			  });
	});
};

function DeleteBikeEntry(){

	$(document).on('click','.del-bike',function(){

		var delBike = $(this).attr('id');

		$.ajax({ 
				url:"admin/DeleteEntry1.php",
				type:"POST",
				data:{delBike:delBike},
				success:function(data){ LoadBikes()}
			  });
	});
};




LoadBikeBooking();
LoadDriverBooking();
 LoadDriver();
 LoadBikes();
 // DeleteDriverEntry();
 
		
	// bikes add to db	

    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'admin/bikesAdd.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(response){ 
                $('.statusMsg').html('');
                if(response.status == 1){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');

                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
                LoadBikes();
            }
        });
    });

// driver add to db


 $("#driverAddForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'admin/driversAdd.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#riverAddForm').css("opacity",".5");
            },
            success: function(response){ 
                $('.statusMsg').html('');
                if(response.status == 1){
                    $('#driverAddForm')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                    
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                }
                $('#driverAddForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
                 LoadDriver();
            }
        });
    });






	});
</script>
</body>
</html>