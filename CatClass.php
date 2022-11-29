<?php
require_once("DAO.php");
class Category
{
    public $nomcat;
    public $id;

    function __construct($id, $c)
    {
        $this->id = $id;
        $this->nomcat = $c;
    }

    function savCat()
    {
        $dao = new DAO();
        return $dao->addCategory($this->nomcat);
    }

    static function listeDesCat()
    {
        $dao = new DAO();
        return $dao->listeCat();
    }

    function updateCat()
    {
        $dao = new DAO();
        $dao->updateCate($this->nomcat, $this->id);
    }

    static function getCat($id)
    {
        $dao = new DAO();
        return $dao->getCat($id);
    }
}
