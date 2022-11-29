<?php
require_once("AdminClass.php");
require_once("proClass.php");
require_once("CatClass.php");
class DAO
{
    function getPDO()
    {
        return new PDO("mysql:host=localhost;dbname=gestion_stock", "root", "");
    }

    function authentification($email, $pswd)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM administrator WHERE email=? and pswd =? ;");
        $res->execute(array($email, $pswd));

        if ($res->fetch()) return True;
        return False;
    }

    ////////////////////////////////////////// Categories section /////////////////////////////////////////////////////////////////

    function addCategory($c)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO category (nomcat) values (?);");
        $res->execute(array($c));
    }

    function listeCat()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM category;");
        $res->execute();
        $lst = [];
        while ($ligne = $res->fetch()) {
            $lst[] = new Category($ligne["id"], $ligne["nomcat"]);
        }
        return $lst;
    }

    function updateCate($id, $nomcat)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("UPDATE category SET nomcat=? WHERE id=?; ");
        $res->execute(array($nomcat, $id));
    }

    function getCat($id)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM category where id=?;");
        $res->execute(array($id));

        if ($ligne = $res->fetch()) {
            return new Category($ligne["id"], $ligne["nomcat"]);
        }
        return null;
    }

    ////////////////////////////////////////// Products section //////////////////////////////////////////////////////////

    function addProduct($libelle, $image, $prixu, $stock, $prixv)
    {
        $pdo = $this->getPDO();
        // LIBELLE	IMAGE	PRIXU	STOCK	PRIXV	
        $res = $pdo->prepare("INSERT INTO produits (libelle,image,prixu,stock,prixv) values (?,?,?,?,?);");
        $res->execute(array($libelle, $image, $prixu, $stock, $prixv));
    }

    function listePro()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM produits;");
        $res->execute();
        $lst = [];
        while ($ligne = $res->fetch()) {
            $lst[] = new Produit($ligne["refp"], $ligne["id"], $ligne["image"], $ligne["libelle"], $ligne["prixu"], $ligne["prixv"], $ligne["stock"]);
        }
        return $lst;
    }
}
