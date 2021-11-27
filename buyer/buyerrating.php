<?php //
 session_start();
 $email=$_SESSION['email'];
include '../connection.php';
include 'header.php';
$id=$_GET['id'];
?>
<form style="margin-left: 250px; width:450px;">
    <h1>CODERS</h1>
<table class="data" border="0">
    
     <?php
        $qry="select * from tblcoder where cEmail ='$id'";
        $res=mysql_query($qry);
        while ($row=mysql_fetch_array($res))
        {
            echo '<tr>';
            echo '<td><img src="'.$row['cImg'].'" height="200px" width="200px"></td></tr>';
            echo '<tr><td>'.$row['cName'].'</td></tr>';
            echo '<tr><hr style="color:white;"></tr>';
        }
        ?>
    
</table>
</form>
<div style="margin: -400px 50px 50px 850px;">
        Rate now :
        <a href="rate.php?id=<?php echo $id ?>&rating=1"><img src="../images/star2.png" height="30px" width="30px"></a>
        <a href="rate.php?id=<?php echo $id ?>&rating=2"><img src="../images/star2.png" height="30px" width="30px"></a>
        <a href="rate.php?id=<?php echo $id ?>&rating=3"><img src="../images/star2.png" height="30px" width="30px"></a>
        <a href="rate.php?id=<?php echo $id ?>&rating=4"><img src="../images/star2.png" height="30px" width="30px"></a>
        <a href="rate.php?id=<?php echo $id ?>&rating=5"><img src="../images/star2.png" height="30px" width="30px"></a>
    </div>