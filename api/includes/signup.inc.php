<?php 

if(isset($_POST["submit"])) 

{
    // Get the data from the form
    $uid = $_POST["uid"];
    $uid = $_POST["pwd"];
    $uid = $_POST["pwdrepeat"];
    $uid = $_POST["email"];

    // Instantiate the class
    include "../../classes/signup.classes.php";
    include "../../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

    // Running error handlers and user signup


    // Going back to the front page
}