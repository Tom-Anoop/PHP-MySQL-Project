<?php //
 session_start();
include '../connection.php';
include 'header.php';
$email=$_SESSION['email'];
?>
<form style="margin-left: 250px; width:850px;">
    <h1>REQUEST</h1>
<table class="data" border="1">
    <tr>
        <th>CODER</th>
        <th>REQUIREMENT</th>
        <th>OTHER REQUIREMENTS</th>
        <th colspan="2">DATE OF COMPLETION</th>
    </tr>
     <?php
        $qry="select tblcoder.cName,tblrequest.* from tblcoder,tblrequest where tblrequest.buyerEmail='$email' and tblcoder.cEmail=tblrequest.cEmail and tblrequest.reqStatus='accepted'";
        $res=mysql_query($qry);
        while ($row=mysql_fetch_array($res))
        {
            echo '<tr>';
            echo '<td>'.$row['cName'].'</td>';
            echo '<td>'.$row['reqDescription'].'</td>';
            echo '<td>'.$row['otherReq'].'</td>';
            echo '<td>'.$row['dateComp'].'</td>';
            echo '<td><a href="buyerstatus.php?id='.$row['reqId'].'">View status</a></td>';
            echo '</tr>';
        }
        ?>
        
</table>
</form>