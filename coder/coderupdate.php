<?php //
 session_start();
include '../connection.php';
include 'header.php';
$email=$_SESSION['email'];
$id=$_GET['id']
?>
<form style="margin-left: 350px; width:650px;" method="POST" enctype="multipart/form-data">
    <h2  align="center" > <b>Status</b></h2>
      
    <table align="center" >
            <br><br>
            <tr>
                <td><b>Work description :</b></td>
                <td><textarea name="desc" required="" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td><b>Link :</b></td>
                <td><input type="url"  name="link"  required="" class="form-control"/></td>
            </tr>
            <tr>
                <td><b>Status :</b></td>
                <td><input type="text"  name="status" required="" class="form-control"/></td>
            </tr>
             <tr>
                <td><b>Whether the work is completed :</b></td>
                <td><input type="radio"  name="comp" value="Yes" class="form-control"/>Yes
                <input type="radio"  name="comp" value="No" class="form-control"/>No</td>
            </tr>
          <tr>
                 <td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT" class="btn btn-success"/></td>
            </tr>
           
           
    </table>
    
            </form>
<table class="data" border="1" style="margin: 20px 10px 10px 450px;">
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
<?php  
          
          if (isset($_POST['submit'])){
  
  $desc=$_POST['desc'];
   $url=$_POST['link'];
   $comp=$_POST['comp'];
  if($comp=="Yes")
      $status="Completed";
  else
      $status=$_POST['status'];
  
         $qry="insert into tblworkstatus (reqId,link,workDesc,status) values('$id','$url','$desc','$status')";
         $res=mysql_query($qry);
         if($res)
         {
             
                    echo '<script>alert(" Status updated successfully ....");</script>';
                    echo '<script>location.href="coderwork.php"</script>';
             
         }
         else
         {
              echo '<script>alert(" Sorry some error ....");</script>';
       echo '<script>location.href="coderwork.php"</script>';
         }
       
    }
          
?>