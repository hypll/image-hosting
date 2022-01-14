<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include '../components/header.php';
    ?>
    <title>Image Gallery - Login</title>
</head>
<body>
    <?php
        include '../components/navbar.php';
    ?>
    <!-- create a simple login form -->
    <section class="vh-110" style="background-color: #508bfc;">
  <form action="/image-gallery/api/includes/signup.inc.php" method="post" class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-3">Register</h3>

            <!-- usernmae -->
            <div class="form-outline mb-2">
              <label class="form-label">Username</label>
              <input type="text" name="uid" class="form-control form-control-lg" placeholder="Username" />
            </div>

            <!-- password -->
            <div class="form-outline mb-4">
              <label class="form-label">Password</label>
              <input type="password" name="pwd" class="form-control form-control-lg" placeholder="Password" />
            </div>

             <!-- repeat password -->
             <div class="form-outline mb-4">
              <label class="form-label">Repeat password</label>
              <input type="password" name="pwdrepeat" class="form-control form-control-lg" placeholder="Password" />
            </div>

              <!-- email -->
              <div class="form-outline mb-4">
              <label class="form-label">E-mail</label>
              <input type="text" name="email" class="form-control form-control-lg" placeholder="E-mail" />
            </div>

            <a href="/image-gallery/pages/login.php" class="btn-block">Already have an account? Login.</a>
            <br>
            <br>

            <button class="btn btn-primary btn-lg btn-block shadow-lg" type="submit" name="submit"><i class="fa fa-plus"></i> Create Account</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
</body>
</html>