<?php
if(isset($_POST['submit'])){
    //get all the posted items
    //$user_id=$_POST['user_id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phoneNo=$_POST['phoneNo'];
    $email=$_POST['email'];
    $level_id=$_POST['level_id'];

  

    //connect to db
    $dbconn=mysqli_connect('localhost','root','','internspacedb') or die(mysqli_error($dbcon));

    //construct and run query to check if username is taken
    $q="select * from user where username='$username'";
    $res=mysqli_query($dbconn,$q);
    $num=mysqli_num_rows($res);
    if($num!=0) header("Location: register.html");

    //construct and run query to store new user
    $q="insert into user(username,password,name,address,phoneNo,email,level_id) values($username,'$password','$name','$address','$phoneNo','$email','$level_id')";
    $res=mysqli_query($dbconn,$q);
    echo "<h1>New user created. Please <a href=/internSpace/login/login.html>Login</a></h1>";

    //clear results and close the connection
//    mysqli_free_result($res);
    mysqli_close($dbconn);
}else{ header("Location: register.html");}
?>