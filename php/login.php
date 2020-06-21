<?php 
if(isset($_POST['login'])){

   require 'dbh.php';

    $uname_email = $_POST['uname_email'];
    $passsword = $_POST['log_pass'];
    if(empty($uname_email) || empty($passsword)){
        echo $passsword;
        header("Location: ../index.php?error=empty-feilds");
        exit();
        
    } 
    else{
        $sql = "SELECT * FROM user Where username=? OR email=?;";
        $stmt = mysqli_stmt_init($concc);
        
    
    if(!mysqli_stmt_prepare($stmt,$sql)){
         header("Location: ../index.php?error=sqlerror");
         exit();
    }
    else{
      mysqli_stmt_bind_param($stmt , "ss", $uname_email,$uname_email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)){
          $pwdcheck = password_verify($passsword ,$row['password']);
          if($pwdcheck == false){
              header("Location: ../index.php?error=wrongpwd");
              exit();
              
          }
          elseif ($pwdcheck == true ) {
            session_start();
            $_SESSION['userid']=$row['user'];
            $_SESSION['usernameid']=$row['username'];

            header('Location: ../index.php?sucess=login');
            exit();
          }
          else {
              header("Location: ../index.php?error=wrong-pwd2");
              exit();
          }
      }
      else {
          header("Location: ../index.php?error=login-failed");
          exit();
      }
    }

}
}


else {
header("Location: ../index.php?fail");
exit();
}