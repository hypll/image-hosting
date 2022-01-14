<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/image-gallery">Image Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-code"></i> Developers
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">API</a></li>
            <li><a class="dropdown-item" href="#">Contributing</a></li>
            <li><a class="dropdown-item" href="#">Credits</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://github.com/hypll/image-hosting"><i class="fab fa-github"></i> Github</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
            <a href="/image-gallery/pages/upload.php" class="btn btn-primary my-2 my-sm-0" type="submit">
                <i class="fa fa-upload"></i> 
                Upload
            </a>
        <a  href="/image-gallery/pages/login.php" style="margin-left: 10px !important;" class="btn btn-secondary">
            <i class="fa fa-sign-in-alt"></i>
            Login
        </a>
      </form>
    </div>
  </div>
</nav>