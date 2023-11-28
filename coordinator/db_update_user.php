<?php
include('../include/dbconn.php');
$i=0;
foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}
$update = "UPDATE user SET
user_id='$valuearr[0]',
name='$valuearr[1]',
address='$valuearr[2]',
phoneNo='$valuearr[3]',
email='$valuearr[4]',
username='$valuearr[5]'
WHERE username='$valuearr[5]'";

	  //echo $update;
	  $result = mysqli_query($dbconn, $update) or die ("Error: " . mysqli_error($dbconn));

	  if ($result) {
	  ?>
	  <script type="text/javascript">
	  	window.location = "view_user.php"
	  </script>
	  <?php }       
     
?>