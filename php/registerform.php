


<div id = "register" class="collapse">
 <div class="jumbotron ">

    <div class="container">
      <form action="php/signup.php" class="was-validated" method="POST">
        <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" name="uname" id="uname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this feild.</div>
        </div>
        <br>

        <div class="form-group">
        <label for="pwsd" >Password:</label>
        <input type="password" name="pwsd" id="pwsd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this feild.</div>        
        </div><br>

        <div class="form-group">
        <label for="pwsd-repeat" >Confirm Password:</label>
        <input type="password" name="pwsd-repeat" id="pwsd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this feild.</div>        
        </div><br>

        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this feild.</div>
        </div>
        <br>

        <div class="form-group form-check">
        <label class="form-check-label"></label>
        <input type="checkbox" name="remember" class="form-check-input" required> I agree to share my information publically that I share on this website.
        <div class="invalid-feedback">Check this checkbox register</div>
        </div>
      <input type="submit" class="btn btn-danger" value="Sign up" name="signup-btn">
      </form>
    </div>
    </div>
</div>
