<?php include_once('inc/header.php'); ?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your Username and password!</p>
              
			  <form action="login.php" method="POST">
				<div class="form-outline form-white mb-4">
				<input type="email" name="user_email" class="form-control"  value="<?php if(isset($_COOKIE["user_email"])) { echo $_COOKIE["user_email"]; } ?>" required>
					<label class="form-label" for="typeEmailX">Username</label>
				</div>

				<div class="form-outline form-white mb-4">
				<input type="password" name="user_password" class="form-control" value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" required>
					<label class="form-label" for="typePasswordX">Password</label>
				</div>
				<input type="submit" name="login" value="Login" class="btn btn-outline-light btn-lg px-5">
				<div class="form-group">
				<label for="login-remember"><input type="checkbox" id="remember" name="remember" <?php  if(isset($_COOKIE["user_email"])) { ?> checked <?php } ?>>Remember Me</label>
			</div>
			  </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include_once('inc/footer.php'); ?>