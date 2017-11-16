<?php
session_start();
if(!$_SESSION['username']){
header("location:loggedIn.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>