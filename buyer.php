<?php //
include 'connection.php';
include 'header.php';
?>
<form style="margin-left: 350px; width:650px;" method="POST" enctype="multipart/form-data">
    <h2  align="center" > <b>Registration</b></h2>
      
    <table align="center" >
            <br><br>
            <tr>
                <td><b>Name :</b></td>
                <td><input type="text" pattern="[a-zA-Z ]+" name="name" required="" class="form-control"/></td>
            </tr>
            <tr>
                <td><b>Address :</b></td>
                <td><textarea name="address" required="" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td><b>Contact :</b></td>
                <td><input type="text" pattern="[6789][0-9]{9}" name="contact" required="" class="form-control"/></td>
            </tr>
            <tr>
                <td><b>Email :</b></td>
                <td><input type="email" name="email" required="" class="form-control"/></td>
            </tr>
            <tr>
                <td><b>Password :</b></td>
                <td><input type="password" name="pwd" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required="" class="form-control"/></td>
            </tr>
           
             <tr>
                 <td colspan="2" align="center"><input type="submit" name="submit" value="REGISTER" class="btn btn-success"/></td>
            </tr>
    </table>
    
            </form>
<?php  
          
          if (isset($_POST['submit'])){
  
  $name=$_POST['name'];
   $address=$_POST['address'];
   $contact=$_POST['contact'];
   $email=$_POST['email'];
   $pwd=$_POST['pwd'];
   
   $qry="select count(*) from tbllogin where lcase(username)='$email'";
   $res=mysql_query($qry);
   $row=mysql_fetch_array($res);
   
   if($row[0]==0)
   {
         $qry="insert into tblbuyer (bEmail,bName,bAddress,bContact) values('$email','$name','$address','$contact')";
         $res=mysql_query($qry);
         if($res)
         {
             $qry="insert into tbllogin (username,password,utype,status) values('$email','$pwd','buyer','1')";
             $res=mysql_query($qry);
             if($res)
             {
                    echo '<script>alert(" Registration successfull ....");</script>';
                    echo '<script>location.href="buyer.php"</script>';
             }
             else
             {
                  echo '<script>alert(" Registration error ....");</script>';
       echo '<script>location.href="buyer.php"</script>';
             }
         }
         else
         {
              echo '<script>alert(" Registration error ....");</script>';
       echo '<script>location.href="buyer.php"</script>';
         }
       
    }
          }
?>