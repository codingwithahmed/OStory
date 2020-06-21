<?php 

  require 'dbh.php';

  $posted = array();
   

  $sql = "SELECT * FROM post ;";
  $result = mysqli_query($concc,$sql);
  $result_check = mysqli_num_rows($result);

  if($result_check > 0 ){
       while ($row = mysqli_fetch_assoc($result)){
          $posted[] =  $row ;
       }
  }

  



