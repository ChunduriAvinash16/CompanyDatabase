<?php
$con = mysqli_connect("localhost", "root", "NikiSiddu3014!", "Company_DB");
// Check connection
$id = $_GET['id'];
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con,"DELETE FROM cdb WHERE CNo='$id'");
mysqli_close($con);
header("Location: index.php");
?> 