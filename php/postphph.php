<?php 
  if(isset($_POST['btn_post'])){ 
     require 'dbh.php';
     $post_title = $_POST['title_post']  ;
     $post_body = $_POST['body_post'];
     $post_aurthor = $_POST['aurthor_post'];

     if(empty($post_title) || empty($post_aurthor) || empty($post_body)){
         header("Location: ../index.php?error=emptyfeilds-posts");
         exit();
     }
     else if (!preg_match("/^[a-zA-Z0-9 ]*$/",$post_aurthor)){
        header("Location: ../index.php?error=wrong-aurthor-name");
        exit();
     }
     elseif (empty($post_body)){
         header("Location: ../index.php?error=empty-post");
         exit();
     }

     else {

        $sql = "SELECT body FROM post WHERE body = ? ";
        $stmt = mysqli_stmt_init($concc);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
           header("Location: ../index.php?error=sqlerror");
           exit();
        }

        else {
            mysqli_stmt_bind_param($stmt,"s",$post_body);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if($resultcheck > 0){
                header("Location: ../index.php?error=post-already-exit");
                exit();
            } 
            else {
                $sql= "INSERT INTO post (title,body,aurthor) VALUE (?,?,?)";
                $stmt = mysqli_stmt_init($concc);
                if(!mysqli_stmt_prepare($stmt , $sql)){
                    header("Location: ../index.php?error=sql2error");
                    exit();
                }else { 
        
                    mysqli_stmt_bind_param($stmt ,"sss",$post_title,$post_body,$post_aurthor);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?sucess=post-created");
                    exit();
             }

        }

     }


  }


 }








 else {
      header("Location: ../index.php");
      exit();
  }
    
    