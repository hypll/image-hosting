<div class="container">
  <div class="row">
    <?php
    include './src/config.php';
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
    $sql = "SELECT * FROM data";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="col-md-4 mt-4">
        <div class="card">
          <img class="card-img-top" src="'.$uploads_dir2.'/'.$row['image'].'">
          <div class="card-body">
            <h5 class="card-title">'.$row['title'].'</h5>
            <h5 class="mt-3" style="font-family: monospace; font-size: 17px;">'.$row['description'].'</h5>
            
            <a download href="'.$uploads_dir2.'/'.$row['image'].'" class="btn btn-primary mt-2">
                <i class="fa fa-download"></i>
                Download
            </a>
            <a  href="'.$uploads_dir2.'/'.$row['image'].'" class="btn btn-success ml-4 mt-2" target="_blank">
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