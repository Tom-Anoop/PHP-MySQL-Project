<?php //
 session_start();
 $email=$_SESSION['email'];
include '../connection.php';
include 'header.php';
?>
<form style="margin-left: 250px; width:450px;">
    <h1>CODERS</h1>
<table class="data" border="0">
    
     <?php
        $qry="select * from tblcoder where cEmail in(select username from tbllogin where status='1')";
        $res=mysql_query($qry);
        while ($row=mysql_fetch_array($res))
        {
            echo '<tr>';
            echo '<td><img src="'.$row['cImg'].'" height="200px" width="200px"></td></tr>';
            echo '<tr><td>';
            $qry1="select avg(rating) from tblrating where cEmail='".$row['cEmail']."'";
            $c=0;
            $res1=mysql_query($qry1);
            $row1=mysql_fetch_array($res1);
           
            for($i=0;$i<$row1[0];$i++)
            {
                $c++;
                echo '<img src="../images/star1.png" height="20px" width="20px">';
            }
            for($i=0;$i<5-$c;$i++)
            {
                
                echo '<img src="../images/star2.png" height="20px" width="20px">';
            }
            echo '</td></tr>';
            echo '<tr><td>'.$row['cName'].'</td></tr>';
           
            
            echo '<td><a href="buyerrequest.php?id='.$row['cEmail'].'">Select</a></td>';
            
            $qry1="select count(*) from tblrating where cEmail='".$row['cEmail']."' and bEmail='$email'";
            $res1=mysql_query($qry1);
            $row1=mysql_fetch_array($res1);
            
            if($row1[0]==0)
                echo '<td><a href="buyerrating.php?id='.$row['cEmail'].'">Rate now</a></td>';
            echo '</tr>';
            echo '<tr><hr style="color:white;"></tr>';
        }
        ?>
        
</table>
</form>