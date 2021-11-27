<?php
include '../connection.php';
$id=$_GET['id'];
$status=$_GET['status'];
$qry="update tblrequest set reqStatus='$status' where reqId='$id'";
$res=mysql_query($qry);
echo '<script>location.href="coderrequest.php"</script>';
?>