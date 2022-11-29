<?php
require_once("CatClass.php");
extract($_POST);
$c = new Category($id, $nomcat);
$c->updateCat();
// $c->savCat();
header("location:categories.php");
