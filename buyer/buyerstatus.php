<?php //
 session_start();
include '../connection.php';
include 'header.php';
$email=$_SESSION['email'];
$id=$_GET['id']
?>
<form style="margin-left: 350px; width:550px;" method="POST" enctype="multipart/form-data">
    <h1>Work Status</h1>
   <table class="data" border="1" >
    <tr>
        <th>LINK</th>
        <th>WORK DESCRIPTION</th>
        <th>STATUS</th>
    </tr>
     <?php
        $qry="select * from tblworkstatus where reqId='$id'";
        $res=mysql_query($qry);
        while ($row=mysql_fetch_array($res))
        {
            echo '<tr>';
            echo '<td><a href="'.$row['link'].'" target="_blank">'.$row['link'].'</td>';
            echo '<td>'.$row['workDesc'].'</td>';
            echo '<td>'.$row['status'].'</td>';
            echo '</tr>';
        }
        ?>
        
</table>

    
            </form>
