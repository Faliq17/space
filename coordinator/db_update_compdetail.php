<?php
include('../include/dbconn.php');
$i=0;
foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}
	  $update = "UPDATE company_detail SET
				comp_id='$valuearr[0]',	  
				comp_name='$valuearr[1]',
				comp_address='$valuearr[2]',
				comp_email='$valuearr[3]',
				comp_phoneNo='$valuearr[4]'
				WHERE comp_id='$valuearr[0]'";
	  //echo $update;
	  $result = mysqli_query($dbconn, $update) or die ("Error: " . mysqli_error($dbconn));

	  if ($result) {
	  ?>
	  <script type="text/javascript">
	  	window.location = "update_view_company.php"
	  </script>
	  <?php }       
     
?>