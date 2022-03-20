<?php
include("dashboard.php");
$acc =$_GET['username'];
$mysql ="DELETE FROM FriendRequests WHERE username='$acc'";
$obj =mysqli_query($con,$mysql);
if($obj)
 {
	echo "<script>
	alert('Friend Reqest Acccepted')
	window.location.href='dashboard.php'
	</script>";
}
else
{
	echo "<script>
	alert('error')
	window.location.href='dashboard.php'
	</script>";
}

?>