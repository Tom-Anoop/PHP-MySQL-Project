<?php //
include '../connection.php';
include 'header.php';
?>
<form style="margin-left: 250px; width:850px;">
    <h1>CODERS</h1>
<table class="data" border="1">
    <tr>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>CONTACT</th>
        <th>IMAGE</th>
        <th colspan="3">EMAIL</th>
    </tr>
     <?php
        $qry="select * from tblcoder where cEmail in(select username from tbllogin where status='0')";
        $res=mysql_query($qry);
        while ($row=mysql_fetch_array($res))
        {
            echo '<tr>';
            echo '<td>'.$row['cName'].'</td>';
            echo '<td>'.$row['cAddress'].'</td>';
            echo '<td>'.$row['cContact'].'</td>';
            echo '<td>'.$row['cEmail'].'</td>';
            echo '<td><img src="'.$row['cImg'].'" height="100px" width="100px"></td>';
            echo '<td><a href="approve.php?id='.$row['cEmail'].'&status=1">Approve</a></td>';
             echo '<td><a href="approve.php?id='.$row['cEmail'].'&status=-1">Reject</a></td>';
             
            echo '</tr>';
        }
        ?>
        
</table>
</form>