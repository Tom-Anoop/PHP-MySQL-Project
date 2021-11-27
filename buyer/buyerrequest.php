<?php //
 session_start();
include '../connection.php';
include 'header.php';
$email=$_SESSION['email'];
$id=$_GET['id']
?>
<form style="margin-left: 350px; width:650px;" method="POST" enctype="multipart/form-data">
    <h2  align="center" > <b>Request</b></h2>
      
    <table align="center" >
            <br><br>
            <tr>
                <td><b>Main requirements :</b></td>
                <td><textarea name="req" required="" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td><b>Other requirements :</b></td>
                <td><textarea name="other" required="" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td><b>Date of completion :</b></td>
                <td><input type="date"  name="date" min="<?php  echo date('Y-m-d');?>" required="" class="form-control"/></td>
            </tr>
          <tr>
                 <td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT" class="btn btn-success"/></td>
            </tr>
           
           
    </table>
    
            </form>
<?php  
          
          if (isset($_POST['submit'])){
  
  $req=$_POST['req'];
   $other=$_POST['other'];
   $date=$_POST['date'];
  
   
  
         $qry="insert into tblrequest (buyerEmail,reqDescription,otherReq,dateComp,reqStatus,cEmail) values('$email','$req','$other','$date','submitted','$id')";
         $res=mysql_query($qry);
         if($res)
         {
             
                    echo '<script>alert(" Request added successfully ....");</script>';
                    echo '<script>location.href="buyerrequest.php"</script>';
             
         }
         else
         {
              echo '<script>alert(" Sorry some error ....");</script>';
       echo '<script>location.href="buyerrequest.php"</script>';
         }
       
    }
          
?>