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
    <section class="vh-100" style="background-color: #508bfc;">
  <form action="/image-gallery/api/includes/login.inc.php" method="post" class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-3">Login</h3>

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

            <a href="/image-gallery/pages/register.php" class="btn-block">Dont have an account? Create one.</a>
            <br>
            <br>
            <button class="btn btn-primary btn-lg btn-block shadow-lg mb-2" type="submit" name="submit"><i class="fa fa-plus"></i> Create Account</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
</body>
</html>