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

				password='$valuearr[5]',

                username='$valuearr[6]'

				WHERE username='$valuearr[6]'";

	  //echo $update;
	  $result = mysqli_query($dbconn, $update) or die ("Error: " . mysqli_error($dbconn));

	  if ($result) {
	  ?>
	  <script type="text/javascript">
	  	window.location = "view_studentdetail.php"
	  </script>
	  <?php }       
     
?>