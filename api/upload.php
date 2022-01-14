<?php

include '../src/config.php';
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
    
     $title = $_POST["title"];
     $description = $_POST["description"];
     
    $pname = uniqid()."-".$_FILES["file"]["name"];
 
    
    $tname = $_FILES["file"]["tmp_name"];

    $allowed = array('jpeg','jpg','png','gif');

    $ext = pathinfo($pname, PATHINFO_EXTENSION);
    if(!in_array($ext,$allowed)){
        echo "File type not allowed";
        header("Location: /image-gallery/api/upload.php?error=File-type-not-allowed&upload=error");
        exit;
    }
   
    
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    
    $sql = "INSERT into data(title,image,description) VALUES('$title', '$pname', '$description')";
 
    if(mysqli_query($conn,$sql)){
        # console.log($sql);
        header("Location: ../index.php?upload=success&error=none");
    }
    else{
        echo "Error";
    }
}
 
 
?>

<!DOCTYPE html>
<head lang="en">
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
    <body class="text-center mt-2">
    <a href="../index.php" class="btn btn-primary mt-3">
        <i class="fa fa-home"></i>
        Return Home
    </a>
    </body>
