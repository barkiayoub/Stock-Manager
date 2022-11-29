<?php
require_once("DAO.php");
class Produit
{
    // LIBELLE	IMAGE	PRIXU	STOCK	PRIXV	

    public $refp;
    public $id;
    public $libelle;
    public $image;
    public $prixu;
    public $stock;
    public $prixv;

    function __construct($rp, $ip, $l, $i, $pu, $s, $pv)
    {

        $this->refp = $rp;
        $this->id = $ip;
        $this->libelle = $l;
        $this->image = $i;
        $this->prixu = $pu;
        $this->stock = $s;
        $this->prixv = $pv;
    }

    function savePro()
    {
        $dao = new DAO();
        return $dao->addProduct($this->libelle, $this->image, $this->prixu, $this->stock, $this->prixv);
    }

    static function listeDesPro()
    {
        $dao = new DAO();
        return $dao->listePro();
    }
}
