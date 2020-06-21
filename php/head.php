<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar dark">
<a href="#" class="navbar-brand text-danger" >OStory</a>

<ul class="navbar-nav ">

<li class="nav-item">
<a href="" class="nav-link">Home</a>
</li>

<li class="nav-item">
<a href="" class="nav-link">Content</a>
</li>

<li class="nav-item">
<a href="" class="nav-link">Setting</a>
</li>
</ul>
<div class="container justify-content-end">
<?php 
if(isset($_SESSION['userid'])){
    echo('<form action="php/logout.php" method = "POST"><input type="submit"  value="Log out" class="btn btn-dark">
    </form>
    <button data-toggle = "collapse" data-target="#create-post" value="Create Post" class="btn btn-dark"> Create Post </button>

    ');
}
else {
    echo '<button data-toggle = "collapse" data-target="#Login" value="Login" class="btn btn-dark" >Login </button>
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

</div>';
}
?>

</div>
</nav>
<div class="container-fulid">
</div>