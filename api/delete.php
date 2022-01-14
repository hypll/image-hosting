
<?php
function deleteImage($image){
    include './src/config.php';
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
    $sql = "DELETE FROM data WHERE id = $image";
    $result = mysqli_query($conn,$sql);
    if($result){
        return true;
    }else{
        return false;
    }
}
?>