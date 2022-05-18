<?php

namespace Project\Models;

class ContactManager extends Manager{

    // Envoi de mails en remplissant les champs requis ou non du formulaire de contact
    public function mail($civil, $lastname, $firstname, $mail, $phone, $cp, $ville, $adresse, $sujet, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO mails (civil, lastname, firstname, mail, phone, cp, ville, adresse, sujet, content) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $req->execute(array($civil, $lastname, $firstname, $mail, $phone, $cp, $ville, $adresse, $sujet, $content));
        
        return $req;
    }

    // Récupération des mails transmis via le formulaire de contact en BDD en sélectionnant les champs voulus
    public function getMails()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT civil, lastname, firstname, mail, phone, cp, ville, adresse, sujet, content FROM mails ORDER BY id DESC');

        return $req;
    }

    // Suppression de mail(s) de la BDD
    public function deleteMail($id)
    {
        $db = $this ->dbConnect();
        $req = $db->prepare('DELETE FROM mails WHERE id = ?');
        $req->execute(array($id));

        return $req;
    }
}