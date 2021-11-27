<?php //
include 'connection.php';
include 'header.php';
?>
<form style="margin-left: 350px; width:650px;" method="POST" enctype="multipart/form-data">
    <h2  align="center" > <b>Login</b></h2>
      
    <table align="center" >
            <br><br>
            <tr>
                <td><b>Email :</b></td>
                <td><input type="email" name="email" required="" class="form-control"/></td>
            </tr>
            <tr>
                <td><b>Password :</b></td>
                <td><input type="password" name="pwd" required="" class="form-control"/></td>
            </tr>
           
             <tr>
                 <td colspan="2" align="center"><input type="submit" name="submit" value="LOGIN" class="btn btn-success"/></td>
            </tr>
    </table>
    
            </form>
<?php  
          
          if (isset($_POST['submit'])){
  
  
   $email=$_POST['email'];
   $pwd=$_POST['pwd'];
   
   $qry="select count(*) from tbllogin where lcase(username)='$email'";
   $res=mysql_query($qry);
   $row=mysql_fetch_array($res);
   
   if($row[0]>0)
   {
    
       $qry="select * from tbllogin where lcase(username)='$email'";
        $res=mysql_query($qry); 
        $row=mysql_fetch_array($res);
            if($row['password']==$pwd)
            {
                session_start();
                $_SESSION['email']=$email;
                if($row['status']=='1')
                {
                    if($row['utype']=='admin')
                        echo '<script>location.href="admin/adminhome.php"</script>';
                    else if($row['utype']=='buyer')
                    {
                                    echo '<script>location.href="buyer/buyerhome.php"</script>';
                    }
                    else if($row['utype']=='coder')
                    {
                                    echo '<script>location.href="coder/coderhome.php"</script>';
                    }
                }
                else{
      
       echo '<script>alert(" Account inactive");</script>';
        
}
            }
            else{
      
       echo '<script>alert(" incorrect password ....");</script>';
        
}
   }
   else{
      
       echo '<script>alert(" User doesnt exist ....");</script>';
        
}
}
?>