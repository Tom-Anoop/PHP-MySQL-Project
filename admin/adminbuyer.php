<?php //
include '../connection.php';
include 'header.php';
?>
<form style="margin-left: 250px; width:850px;">
    <h1>BUYERS</h1>
<table class="data" border="1">
    <tr>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>CONTACT</th>
        <th>EMAIL</th>
    </tr>
     <?php
        $qry="select * from tblbuyer where bEmail in(select username from tbllogin where status='1')";
        $res=mysql_query($qry);
        while ($row=mysql_fetch_array($res))
        {
            echo '<tr>';
            echo '<td>'.$row['bName'].'</td>';
            echo '<td>'.$row['bAddress'].'</td>';
            echo '<td>'.$row['bContact'].'</td>';
            echo '<td>'.$row['bEmail'].'</td>';
             
            echo '</tr>';
        }
        ?>
        
</table>
</form>