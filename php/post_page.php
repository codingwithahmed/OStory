<?php require 'php/postedphp.php';

foreach ($posted as $posted_mini){

    echo '
    
<form class = "form-group "disabled>
<div >


<div class="card w-100" style="width:400px">


<div class="card-body btn" disabled>

<h4 class="card-title">'.$posted_mini['title'].'</h4>
<p class="card-text">'. $posted_mini['body'].'</p>

<p class= "text text-black justify-content-center">'.date("Y,M,d").'</p>

<br>

<a href="" class="btn btn-primary">'.$posted_mini['aurthor'].'</a>


</div>



</div>
<br>
</form>
    
  '  ;

 
}


?>

