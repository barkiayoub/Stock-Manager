<?php
require_once("proClass.php");
extract($_POST);
$d = new Produit("", "", $libelle, $image, $prixu, $stock, $prixv);
$d->savePro();
// header("location:listeClients.php")
echo "added";
