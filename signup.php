<?php require_once'inc/conn.php'; ?>
<?php include "header.php"; ?>


<div class="card-body px-5 py-5" style="background-color:darkgray;">
  <h3 class="card-title text-left mb-3">Register</h3>
                  <?php
                  
                  require_once'inc/errors.php';
                  ?>
  <form method="post" action="handle/handleSignup.php">
    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control p_input" name="name">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control p_input" name="email">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="text" class="form-control p_input" name="pass">
    </div>
    <div class="form-group">
      <label>Confirm Pass</label>
      <input type="text" class="form-control p_input" name="confirmPass">
    </div>
    <div class="form-group">
      <label>Phone</label>
      <input type="text" class="form-control p_input" name="phone">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" class="form-control p_input" name="address">
   
    </div>

      <?php if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==1){ ?>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" name="is_admin">
      <label class="form-check-label">Admin</label>
    </div>

    <?php } ?>
    <div class="form-group d-flex align-items-center justify-content-between">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
      <a href="#">Forgot Password?</a>
    </div>
    <div class="text-center">
      <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Signup</button>
    </div>
    <div class="d-flex">
      <button class="btn btn-facebook col me-2">
        <i class="mdi mdi-facebook"></i> Facebook </button>
      <button class="btn btn-google col">
        <i class="mdi mdi-google-plus"></i> Google plus </button>
    </div>
    <p class="sign-up text-center">Already have an Account?<a href="login.php"> Login</a></p>
    <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
  </form>
</div>

<?php include "footer.php"; ?>
