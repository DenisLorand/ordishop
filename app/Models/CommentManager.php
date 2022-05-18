<?php

namespace Project\Models;

class CommentManager extends Manager{

    // Insertion des commentaires et notes pour chaque PC en BDD dans la table comments
public function createComment($idPc, $comment, $note)
    {$db =$this->dbConnect();
        $req = $db->prepare('INSERT INTO comments (idPc, comment, note) VALUES(?, ?, ?)');
        $req->execute(array($idPc, $comment, $note));

        return $req;
    }

    // Récupération des commentaires et notes pour chaque PC
public function getComments($idPc)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT comment, note FROM comments  WHERE  idPc = ?');
        $req->execute(array($idPc));
        
        return $req;
    }

    // Calcul et récupération de la note moyenne pour chaque PC 
public function getNotes($idPc)
    {
        $db = $this->dbConnect();
        // Moyenne avec fonction AVG, et affichage de la note arrondie à 2 chiffres après la virgule avec round,2
        $req = $db->prepare('SELECT round(AVG (note),2) AS NoteMoyenne FROM comments WHERE idPc = ?');
        $req->execute(array($idPc));

        return $req;
    }

}