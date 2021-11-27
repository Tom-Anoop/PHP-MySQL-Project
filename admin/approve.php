<?php
include '../connection.php';
$id=$_GET['id'];
$status=$_GET['status'];
$qry="update tbllogin set status='$status' where username='$id'";
$res=mysql_query($qry);
echo '<script>location.href="admincoder.php"</script>';
?>