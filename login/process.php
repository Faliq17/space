<?php
// Inialize session
session_start();

// Include database connection settings
include('../include/dbconn.php');

if(isset($_POST['login'])){
	
	/* capture values from HTML form */
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	
	$sql= "SELECT username, password, level_id FROM user WHERE username= '$username' AND password= '$password'";
	$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error());
	$row = mysqli_num_rows($query);
	if($row == 0){
	 // Jump to wrong page
	header('Location: wrong.html'); 
	}
	else{
	 $r = mysqli_fetch_assoc($query);
	 $username= $r['username'];
	 //$password= $r['password'];
	 $level= $r['level_id'];
	 //echo($levelID);
	
		if($level==1) { 
			$_SESSION['username'] = $r['username'];
			// Jump to secured page
			header('Location: ../student'); 
		} 
		elseif($level==2) {
			$_SESSION['username'] = $r['username'];
			// Jump to secured page
			header('Location: ../academic_supervisor');
		}
		elseif($level==3) {
			$_SESSION['username'] = $r['username'];
			// Jump to secured page
			header('Location: ../industrial_supervisor');
		}
		elseif($level==4) {
			$_SESSION['username'] = $r['username'];
			// Jump to secured page
			header('Location: ../coordinator');
		}
		else {
			header('Location: index.php');
			//echo($level);
		}
		
	}	
}
mysqli_close($dbconn);
?>