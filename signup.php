<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RideU</title>
</head>
<style>
    
    body{ 
    background: url("images/offer2.jpg")no-repeat;
    background-size: cover;
    opacity: 0.8;
    background-attachment: fixed;
    padding: 5%;
    align-items:center;
    justify-content:center;
    display:flex;
    font-family:sans-serif;
    }

    p{
        text-align: center;
        font-size: x-large;
    }
  
    div{
       width: 40%;
       height: min-content;
        padding: 25px;
        border-style: groove;
        margin: 0;
        border: none;
        background-color: white;
    }

    .login_form{
    border: 5px;
    padding: 0px 0px;
    padding-left: 20%;
    }
    
    input[type=text],input[type=password]{
        width: 100%;
        font-size: medium;
        margin: 8px 0;
        display: inline-block;
        padding: 3px;
        border:1px solid#f36565;
        box-sizing: border-box;
    }

    input[type=submit]{
        background: linear-gradient(to bottom right,#FFE530,#FF2525)no-repeat;
        width: 60%;
        padding: 10px;
        color: white;
        border: none;
    }

    @media only screen and (max-width:800px) {
     .login_form,div,p,body{
         width: 80%;
        
     }
        
    }
    @media only screen and (max-wedth:500px) {
       .login_form,div,p,body{
        width: 100%;}
    }
    
</style>
<script>
    function validation(){
        var f=document.form.fname.value;
        var e=document.form.lname.value;
        var b=document.form.pass.value;
        var c=document.form.Cpass.value;
        var a=document.form.Email.value;


        if(!(f>='a'&&f<='z')&&!(f>='A'&&f<='z')){
            alert(" not use number");
        }

        if(!(e>='a'&&e<='z')&&!(e>='A'&&e<='z')){
            alert(" not use number");
        }
        atpos = a.indexOf("@");
        dotpos = a.lastIndexOf(".");

            if (atpos < 1 || ( dotpos - atpos < 2 )) {
               alert("Please enter correct email ID");
            }
       
        if(b.length<6||b.length>10){
            
            alert("Please enter the password more than 6 and less than 10");
        }
         else if(b!=c){
             alert("conform password must be same as password");
         }

    }
  </script>
<body>
    <form class="login_form" action="" method="post" name="form" onsubmit="return(validation())">
    <div>
       <p style="color: #f36565;">Sign Up</p>
       <label for="fname">First Name</label>
       <input type="text" placeholder="Fname" name="fname" required>

       <label for="lname">Last Name</label><br>
       <input type="text" placeholder="Lname" name="lname" required>

       <label for="email">Email</label><br>
       <input type="text" placeholder="Email" name="Email" required>

       <label for="pass">Password</label>
       <input type="password" placeholder="Password" name="pass" required>  

       <label for="Cpass"> Conform Password</label>
       <input type="password" placeholder="Conform Password" name="Cpass" required>  


       <p><input type="submit" name="submit" value="Sign Up"></p>
       <label>    Already have an account? <a href="login.html">Log In</a></label>
    </div>
    </form>
</body>
</html>

<?php

  include('connection.php');

  if(isset($_POST['submit'])){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['Email'];
    $pass=$_POST['pass'];

    $sql="INSERT INTO users(fname,lname,email,password) VALUES ('$fname','$lname','$email','$pass')";
    $res=mysqli_query($conn,$sql);
    if($res){
        header('location:login.html');
    }else{
        header('location:signup.php');
    }
  }
  




 ?>   