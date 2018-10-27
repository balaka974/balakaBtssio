<?php

require_once 'connexionDB.php';

class employe extends ConnexionDB  {

	public function getAllCategorie() {
        return $this->cnx->query("SELECT * FROM categories")->fetchAll();
	}

	public function getCategorie($id_cat) {
		$sql = $this->cnx->prepare("SELECT * FROM categories WHERE id_cat=?");
		$sql->execute( array($id) );
		return $sql->fetch();
	}

	public function addCategorie($cat)
	{
		$sql = $this->cnx->prepare("INSERT INTO categories (nom_cat, service_cat)
        VALUES (?,?)");
		$sql->execute( array($cat['nom_cat'],$cat['service_cat']) );
		return $sql->rowCount();
	}

	public function editCategorie($cat,$id_cat)
	{
	
		$sql = $this->cnx->prepare("UPDATE categories
                                    SET nom_cat=?,service_cat=?
                                    WHERE id_cat= ? ");
        $sql->execute( array($cat['nom_cat'],$cat['service_cat'],$id_cat) );
		return $sql->rowCount();
	}

	public function deleteCategorie($id_cat)
	{
		$sql = $this->cnx->prepare("DELETE FROM categories WHERE id_cat = ?");
		$sql->execute( array($id_cat) );
		return $sql->rowCount();
	}
}