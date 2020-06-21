<?php 
 
  


?>






<div class="collapse" id = "create-post">

<div class="jumbotron">

<form action="php/postphph.php" class="form-group " method="post">

<div class="form-group">
<input type="text" name="title_post" class= "form-control" id="title_post" placeholder="Title of your post">
</div>

<div class="form-group">
<textarea name="body_post" id="body_post" class = "form-control" cols="40" rows="8"></textarea>
</div>

<div class="form-group">
<input type="text" name="aurthor_post" id="aurthor_post" class="form-control" placeholder="Aurthor name here">
</div>


<div class="form-group float-right">
<a class = "text-dark w-25" name="date_post" disabled><?php echo date("Y:M:d");?></a>
</div>

<button type="submit" class = "btn btn-dark" name="btn_post" >
Create post
</button>

</form>







</div>


</div>