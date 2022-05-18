<?php

namespace Project\Models;

class ProductManager extends Manager{

    // Création et ajout de produit dans la table pc en BDD en insérant les valeurs des champs requis

public function createProduct($title, $brand, $model, $processor, $ram, $hd,  $price, $img)
    {
        $db = $this->dbConnect();
        $ary = array($title, $brand, $model, $processor, $ram, $hd,  $price, $img);
        $req = $db->prepare('INSERT INTO pc (title, brand, model, processor, ram, hd, price, idImg) VALUE (?, ?, ?, ?, ?, ?, ?, ?)');
        $req->execute($ary);

        return $req; // select avec options dans formulaire
    }

    /* Affichage du nombre et n° des pages sur la page de présentation des produits de la table pc,
    * avec possibilité d'aller ou revenir à telle  page en cliquant sur le numéro
    */
private $perPage = 4;
private $cPage = 1;

public function nbPage()
    {
        $db = $this->dbConnect();
        $reqPage = $db->query('SELECT COUNT(*) AS total FROM pc');
        $result = $reqPage->fetch();
        $total = $result['total'];
        $nbPage = ceil($total / $this->perPage); // ceil : fontion native de PHP qui arrondit au nombre supérieur

        return $nbPage;
    }
    
    // Récupération des produits pc côté back avec getProducts

public function getProducts()
    {
        $db = $this->dbConnect();
        // INNER JOIN sur les tables pc et images qui permet de récupérer l'image correspondant au pc par son id
        $req = $db->query('SELECT images.title AS title, brand, img, model, processor, ram, hd, price, pc.id FROM pc INNER JOIN images ON pc.idImg = images.id');
        $req->execute();

        return $req;
    }
 
    // Suppression d'un produit de la table pc

public function deleteProduct($id)
    {
        $db = $this ->dbConnect();
        $req = $db->prepare('DELETE FROM pc WHERE id = ?');
        $req->execute(array($id));

    }

    // Edition et mise à jour de fiche(s) produit(s)

public function getProduct($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT images.title AS title, brand, img, model, processor, ram, hd, price, pc.id AS id FROM pc INNER JOIN images ON pc.idImg = images.id  WHERE pc.id = ?');
        $req->execute(array($id));

        return $req;
    }

public function updateProduct($id, $title, $brand, $model, $processor, $ram, $hd, $price)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE pc SET title = :title, brand = :brand,  model = :model, processor = :processor, ram = :ram, hd = :hd, price = :price WHERE id = :id');
        $req->execute(array(
            ':id' => $id,
            ':title' => $title,
            ':brand' => $brand,
            ':model' => $model,
            ':processor' => $processor,
            ':ram' => $ram,
            ':hd' => $hd,
            ':price' => $price
        ));
        
        return $req;
    }

public function lesProduits($cPage)
     {
         $this->cPage = $cPage;

         $db = $this->dbConnect();
         // On affiche les produits par ordre id ascendant, avec pagination LIMIT (nb article/pc maximum par page) et OFFSET (point de départ)
         $req = $db->query("SELECT images.title AS title, brand, img, price, pc.id AS id FROM pc INNER JOIN images ON pc.idImg = images.id ORDER BY id ASC LIMIT " . $this->perPage . " OFFSET " . ($this->cPage - 1) * $this->perPage);
             
         return $req;
    }

    // Gestion des images liées aux produits: affichage, ajout et suppression
public function images(){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, img FROM images ');
        $req->execute(array());
        
        return $req;
    }

public function createImage($title,$img)
    {
        $db = $this->dbConnect();
        $image = $db->prepare('INSERT INTO images (title, img) VALUE (?, ?)');
        $image->execute(array($title, $img));

        return $user;
    }

public function imageProduct()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, img FROM images');
        
        return $req;
    }

public function deleteImage($id)
    {
        $db = $this ->dbConnect();
        $req = $db->prepare('DELETE FROM images WHERE id = ?');
        $req->execute(array($id));
    }
}

