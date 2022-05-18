<?php

namespace Project\Models;

class BrandManager extends Manager{

    // Gestion des marques (brands) des PC : création/ajout et suppression
	
	public function allBrands()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, brandname, brandimage FROM brands');
        $req->execute(array());
        
        return $req;
    }

    public function createBrand($brandname)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO brands (brandname) VALUE (?)');
        $req->execute(array($brandname));
    
        return $req;
    }

    public function deleteBrand($id)
    {
        $db = $this ->dbConnect();
        $req = $db->prepare('DELETE FROM brands WHERE id = ?');
        $req->execute(array($id));

    }
}