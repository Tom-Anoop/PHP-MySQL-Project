<?php
session_start();
include '../connection.php';
$id=$_GET['id'];
$rating=$_GET['rating'];
$email=$_SESSION['email'];
$qry="insert into tblrating (cEmail,bEmail,rating) values('$id','$email','$rating')";
$res=mysql_query($qry);
echo '<script>location.href="buyercoder.php"</script>';
?>