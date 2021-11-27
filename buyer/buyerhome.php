<?php //
 session_start();
include '../connection.php';
include 'header.php';
$email=$_SESSION['email'];
$qry="select * from tblbuyer where bEmail ='$email'";
$res=mysql_query($qry);
$row=mysql_fetch_array($res);
?>
<form style="margin-left: 350px; width:650px;" method="POST" enctype="multipart/form-data">
    <h2  align="center" > <b>Profile</b></h2>
      
    <table align="center" >
            <br><br>
            <tr>
                <td><b>Name :</b></td>
                <td><input type="text" pattern="[a-zA-Z ]+" name="name" value="<?php echo $row['bName']; ?>" required="" class="form-control"/></td>
            </tr>
            <tr>
                <td><b>Address :</b></td>
                <td><textarea name="address" required="" class="form-control"><?php echo $row['bAddress']; ?></textarea></td>
            </tr>
            <tr>
                <td><b>Contact :</b></td>
                <td><input type="text" pattern="[6789][0-9]{9}" name="contact" value="<?php echo $row['bContact']; ?>" required="" class="form-control"/></td>
            </tr>
            <tr>
                <td><b>Email :</b></td>
                <td><input type="email" name="email" required="" value="<?php echo $row['bEmail']; ?>" class="form-control"/></td>
            </tr>
            
           
           
    </table>
    
            </form>
