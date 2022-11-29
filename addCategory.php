<?php
require_once("CatClass.php");
extract($_POST);
$d = new Category("", $nomcat);
$d->savCat();
// header("location:listeClients.php")
echo "added";
