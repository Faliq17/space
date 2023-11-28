<?php 
include('../include/dbconn.php');
include ("../login/session.php");

session_start();

if (!isset($_SESSION['username'])) {
       header('Location: ../login');
		} 	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternSpace</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    body {
    background-image: url('bcg1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    backdrop-filter: blur(3px);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}


header {
    background-color: #212529;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    width: 98%;
    position: fixed; /* this will make the header stay at the top */
    top: 0; /* this will ensure the header is at the very top */
    z-index: 1000; /* this will ensure the header stays on top of other elements */
}

.logo {
    width: 100px;
    height: auto;
}


.login-form {
    font-family: Arial, Helvetica, sans-serif;
    color: aliceblue;
    background-color:#0d840b;
    
    padding: 50px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.1);
    width: 300px;
    box-shadow: 5px 5px 5px 5px rgba(255, 254, 254, 0.636);
 
}

.login-form label {
    font-weight: bold;
    display: block;
    margin-bottom: 10px;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    width: 80%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 3px;
    outline: none;
}

.login-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.login-form input[type="submit"]:hover {
    background-color: #45a049;
}

.login-button{
  display: inline-block;
  padding: 10px 10px;
  font-size: 13px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #000000;
  background-color: rgb(225, 207, 9);
  border: none;
  border-radius: 2px;
  box-shadow: 0 3px #999;
}
.login-button:hover {background-color: #d8a303}

.login-button:active {
  background-color: #ffd103;
  box-shadow: 0 4px #999;
  transform: translateY(6px);

}

.main {
  margin-left: 200px; 
  font-size:30px
}




.navbar {
  background-color: #212529;
  display:flex;
  justify-content: space-between;
  overflow: hidden;

 

}

.navbar a {
  float: center;
  font-size: 14px;
  color: white;
  text-align: center;
 padding:10px 10px 10px 10px;
  text-decoration: none;
}

.dropdown {
    
  float: left;
  overflow: hidden;
  
}

.dropdown .dropbtn {
  font-size: 14px;  
  border: none;
  outline: none;
  color: white;
  padding: 10px 10px 10px 10px;
  background-color: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  padding:0px 0px 150px 0px;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


.column {
  float: left;
  width: 25%;
  padding: 10px;
  
  height: 100px;
}

.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  height:auto;
}

.column a:hover {
  background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
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


@import url('https://fonts.googleapis.com/css?family=Roboto:700');
@keyframes showTopText {
  0% { transform: translate3d(0, 100%, 0); }
  40%, 60% { transform: translate3d(0, 50%, 0); }
  100% { transform: translate3d(0, 0, 0); }
}
@keyframes showBottomText {

  100% { transform: translate3d(0, 0, 0); }
}

.animated-title {
  color: #222;
  font-family: Roboto, Arial, sans-serif;
  height: 70vmin;
  left: 50%;
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 90vmin;
}
.animated-title > div {
  height: 50%;
  overflow: hidden;
  position: absolute;
  width: 100%;
}
.animated-title > div div {
  font-size: 40px;
  padding: 2vmin 0;
  position: absolute;
}
.animated-title > div div span {
  display: block;
}
.animated-title > div.text-top {
  border-bottom: 1vmin solid #000;
  top: 0;
}
.animated-title > div.text-top div {
  animation: showTopText 1s;
  animation-delay: 0.4s;
  animation-fill-mode: forwards;
  bottom: 0;
  transform: translate(0, 100%);
}
.animated-title > div.text-top div span:first-child {

  color: #767676;
}
.animated-title > div.text-bottom {
  bottom: 0;
}
.animated-title > div.text-bottom div {
  animation: showBottomText 0.5s;
  animation-delay: 1.5s;
  animation-fill-mode: forwards;
  top: 0;
  transform: translate(0, -100%);
}
</style>



<body>

  <header>
  <div class="navbar">
            <a href="#">HOME</a>
            <a href="#">ABOUT US</a>
            <a href="#">CONTACTS</a>





    <div class="dropdown">
    <button class="dropbtn">FIND INTERNSHIP 
    <i class="fa fa-caret-down"></i> </button>

    


    <div class="dropdown-content">



    <div class="row">
        <div class="column">
     <h3>About Company</h3>
      <a href="update_view_company.php">View Company Listing</a>
      <a href="update_view_company.php">Update Company </a>
      <a href="#">Industrial Training Student Placement (SLI-01)</a>
      <a href="#">Application Response form (BLI-02)</a>
    </div>

     
 <div class="column">
          <h3>Student Information</h3>
          <a href="view_user.php">Student Information Form (BLI-01)</a>
          <a href="#">Online Generate Resume</a>
          <a href="#">Cover Letter (SLI-02)</a>
        </div>

<div class="column">
          <h3>Approval Status</h3>
          <a href="#">Internship Placement Status</a>
        
        </div>
      </div>
    </div>
  </div> 
</div>



    <div class="sign">
    <a href="../login/logout.php" class="split">LOGOUT</a>
    </div>  
    </header>


    <div class="main">



<div class="animated-title">
  <div class="text-top">
    <div>
      <span>Welcome To</span>
      <span>InternSpace System</span>
    </div>
  </div>
  <div class="text-bottom">
    <div>Coordinator</div>
</div>
</div>

<br><br> 

<?php

    $username = $_SESSION['username'];
    
  $query = "SELECT * FROM user where username = '$username' ";
  $result = mysqli_query($dbconn, $query) or die ("Error: " . mysqli_error($dbconn));
  $numrow = mysqli_num_rows($result);
?>

<?php
echo "$username" 
?>




</body>
</html>