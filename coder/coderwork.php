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
        <th>CUSTOMER</th>
        <th>REQUIREMENT</th>
        <th>OTHER REQUIREMENTS</th>
        <th colspan="2">DATE OF COMPLETION</th>
    </tr>
     <?php
        $qry="select tblbuyer.bName,tblrequest.* from tblbuyer,tblrequest where tblrequest.cEmail='$email' and tblbuyer.bEmail=tblrequest.buyerEmail and tblrequest.reqStatus='accepted'";
        $res=mysql_query($qry);
        while ($row=mysql_fetch_array($res))
        {
            echo '<tr>';
            echo '<td>'.$row['bName'].'</td>';
            echo '<td>'.$row['reqDescription'].'</td>';
            echo '<td>'.$row['otherReq'].'</td>';
            echo '<td>'.$row['dateComp'].'</td>';
            echo '<td><a href="coderupdate.php?id='.$row['reqId'].'">Update status</a></td>';
            echo '</tr>';
        }
        ?>
        
</table>
</form>