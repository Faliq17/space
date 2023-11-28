<?php
if(isset($_POST['submit'])){
    //get all the posted items
    
    $comp_id=$_POST['comp_id'];
    $comp_name=$_POST['comp_name'];
    $comp_address=$_POST['comp_address'];
    $comp_email=$_POST['comp_email'];
    $comp_phoneNo=$_POST['comp_phoneNo'];
    $password=$_POST['password'];
  

    //connect to db
    $dbconn=mysqli_connect('localhost','root','','internspacedb') or die(mysqli_error($dbcon));}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>InternSpace</title>
</head>
<style>
    
body {
    background-image:url(student/bcg.jpg);
    background-size: cover;
    background-repeat: no-repeat;

   
    align-items: center;
    margin: 0;
    padding: 0;
}

header {
    background-color: #212529;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    width: 98%;
}

.logo {
    width: 100px;
    height: auto;
}

nav ul {
    display: flex;
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li a {
    color: white;
    text-decoration: none;
    padding: 8px 16px;
}

nav ul li a:hover {
    background-color: #333;
}

.sign a {
    color: white;
    text-decoration: none;
    padding: 8px 16px;
    border: 1px solid white;
    margin-left: 8px;
}

.sign a:hover {
    background-color: #333}


 
        



</style>
<body>
    
    <header>
        <img src="logo.png" alt="Logo UITM" class="logo">
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">FIND INTERNSHIP</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACTS</a></li>
            </ul>
        </nav>
        <div class="sign">
            <a href="login/login.html">SIGN IN</a>
            <a href="login/register.html">SIGN UP</a>
        </div>  
    </header>

<center><h1>COMPANY LISTING</h1></center>


</body>
</html>