<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Image Host" />
    <mea name="theme-color" content="#3f51b5" />
    <!-- stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" 
        rel="stylesheet"
    />
    <link rel="stylesheet" href="./src/css/index.css" />
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>

    <title>Image Gallery</title>
</head>
<body>
<!-- the form to upload an image -->
<form class="form-control" action="./api/upload.php" method="post" enctype="multipart/form-data">
     <div class="mb-3">
        <label class="form-label">Title</label> <br>
        <input class="form-control" type="text" name="title" required/>
    </div> 
    <div class="mb-3">
        <label>File Upload</label>
        <input class="form-control" type="File" name="file" id="formFile" required>
    </div>
    <button class="btn btn-primary" type="submit" name="submit">
        <i class="fa fa-upload"></i> 
            Upload
    </button>
</form>

<div class="container">
  <div class="row">
    <?php
    include './src/config.php';
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
    $sql = "SELECT * FROM data";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="col-md-4 mt-4">
        <div class="card">
          <img class="card-img-top" src="'.$uploads_dir2.'/'.$row['image'].'">
          <div class="card-body">
            <h5 class="card-title">'.$row['title'].'</h5>
            <a download href="'.$uploads_dir2.'/'.$row['image'].'" class="btn btn-primary">
                <i class="fa fa-download"></i>
                Download
            </a>
            <a  href="'.$uploads_dir2.'/'.$row['image'].'" class="btn btn-success ml-2" target="_blank">
             <i class="fa fa-eye"></i>
             View
             </a>
            </div>
        </div>
        </div>';
    }

    # if there is no image in the database, display this message
    if(mysqli_num_rows($result) == 0){
        echo '<div class="col-md-12 mt-2">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">No images found</h3>
          </div>
        </div>
        </div>';
    }

    ?>
</body>
</html>