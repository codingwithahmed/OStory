<?php
if (isset($_POST['signup-btn'])) {
        require 'dbh.php';
        $username = $_POST['uname'];
        $password = $_POST['pwsd'];
        $password_repeat = $_POST['pwsd-repeat'];
        $email = $_POST['email'];

 if( empty($username) || empty($email) || empty($password)){
    header("Location: ../index.php?error=emptyfeild&uname=".$username. "&email:".$email);
    exit();
 }
  
  else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/" ,$username)){
      header("Location:../index.php?error=invalid-username-and-email");
      exit();
  }

 else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
     header("Locataion: ../index.php?error=invalidemail&username=".$username );
     exit();}
 
 else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
     header("Location: ../index.php?error=invalidusername&email=".$email);
     exit();
 }
 else if($password != $password_repeat){
    header("Location: ../index.php?error=passwords-do-not-match");
    exit();
}
else{
     $sql = "SELECT username FROM user Where username = ?";
     $stmt = mysqli_stmt_init($concc);
     if(!mysqli_stmt_prepare($stmt , $sql)){
         header("Location: ../index.php?error=sql1error");
         exit();
     }else {
         mysqli_stmt_bind_param($stmt ,"s",$username);
         mysqli_stmt_execute($stmt);
         mysqli_stmt_store_result($stmt);
        $resultcheck = mysqli_stmt_num_rows($stmt);
        if($resultcheck > 0){
            header("Location: ../index.php?error=Usernamealreadytaken&email=".$email);
            exit();
        } 
        else {
            $sql= "INSERT INTO user (username,email,password) VALUE (?,?,?)";
            $stmt = mysqli_stmt_init($concc);
            if(!mysqli_stmt_prepare($stmt , $sql)){
                header("Location: ../index.php?error=sql2error");
                exit();
            }else {
                $hashed_password = password_hash($password,PASSWORD_DEFAULT); 
    
                mysqli_stmt_bind_param($stmt ,"sss",$username,$email,$hashed_password);
                mysqli_stmt_execute($stmt);
                header("Location: ../index.php?signup=sucess");
                exit();
         }
     }
     
    }

 }
 mysqli_stmt_close($stmt);
 mysqli_close($concc);

}

else {
   header("Location: ../index.php");
   exit();
}