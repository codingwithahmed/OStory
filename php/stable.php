
Login form
------------------------------------------------------------------
<button data-toggle = "collapse" data-target="#Login" value="Login" class="btn btn-dark" >Login </button>
<button data-toggle = "collapse" data-target="#register" value="Register" class="btn btn-dark"> Register </button>

<div class= "collapse" id="Login">
<form action="php/login.php" class="form-inline row" method = "POST">

<div class="input-group col-sm-6">
<div class="input-group-prepend mr-6">
<span class="input-group-text ">@</span>
</div>
<input type="text" class="form-control" placeholder="Username or email" name="uname_email">
</div>

<div class="input-group col-sm-6 mt-1">
<div class="input-group-prepend">
<span class="input-group-text">
#
</span>
</div>
<input type="password" class="form-control col-sm-6 " placeholder="Password" name="log_pass">
<input type="submit" value="Sign in" class="btn text-light btn-outline-dark col-sm-4" name="login">
</div>





</form>

</div>

-------------------------------------------------------------------------------

POSTING SYSTEM

<?php 
if(isset($_SESSION['userid'])){
    require 'php/posts.php';
}
?>