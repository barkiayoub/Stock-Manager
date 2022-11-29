<?php
require_once("AdminClass.php");
extract($_POST);
$a = new Admin("", $email, $pswd);

if ($a->estUnAdmin()) {
    session_start();
    $_SESSION['email'] = $email;
    header("location:dashboard.html");
    // echo "welcome";
} else {
    header("location:login.php");
    // echo "back the fuck up before u get smacked the fuck up";
}
