<?php
$con = new mysqli("localhost", "root","NikiSiddu3014!","Company_DB");
$usn=$_POST['usn'];
$pas=$_POST['pass'];

$sql = mysqli_query($con,"SELECT * FROM users WHERE user_id = '$usn'");
//$row = mysqli_num_rows($sql);
$rows=mysqli_fetch_assoc($sql);
$field1name = $rows["user_id"];
$field2name = $rows["password"];
$field4name = $rows["Type"];
$val='user';

if($pas==$field2name){
 if($field4name==$val)
 {
   session_start();
   $_SESSION['varname'] = $field1name;
   header('Location: user.php');
}
 else
 {
    session_start();
   $_SESSION['adminid'] = $field1name;
  	header('Location: index.php');
 }
}
  else {
    echo "error";
  }

?>