<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<?php
include("db.php");
$conn = mysqli_connect("localhost","root","","loginsystem");
$mysql = "SELECT * FROM FriendRequests";
$my =mysqli_query($conn,$mysql);
?>


<!DOCTYPE html>
<html>
<head>
<style>
	td {
  text-align: center;
}
	img {
  width: 100%;
  height: auto;
}
</style>		
<meta charset="utf-8">
<title>Dashboard - Client area</title>
<link rel="stylesheet" href="style.css" />
</head>
<body> 
	
<div class="form">
<p>Hey, <?php echo $_SESSION['username']; ?>!</p>
<p>You are in user dashboard page.</p>
<p><a href="logout.php">Logout</a></p>
</div>

<div class="form">
<p>You have the following friend requests !</p>
</div>

<div class="form">

<?php
include('db.php');
$query = "SELECT username, email, Rating FROM FriendRequests";
$result = mysqli_query($con, $query);
?>
<table border ="0" cellspacing="0" cellpadding="10" >
  

<tr>
    <th> </th>
    <th>Name</th>
    <th>Trust Rating</th>
	<th>Accept Friend Request?</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo " "; ?> </td>
   <td><?php echo $data['username']; ?> </td>
   
   <td><?php echo $data['Rating']; ?> </td>
   <td><a href="accept.php?useract<?php echo $data['username'];?>"></a><input type="submit" value="Yes! " name="submit" class="loginbutton"/><input type="submit" value="No!!!" name="submit" class="loginbutton"/> </td>
   
 <tr>
	 
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 </table


</div>

</body>
</html>