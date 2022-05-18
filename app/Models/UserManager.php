<?php

namespace Project\Models;

class UserManager extends Manager{

    public function createAdmin( $firstname, $mail, $password)
    {
        $db = $this->dbConnect();
        $user = $db->prepare('INSERT INTO admins (firstname, mail, pass) VALUE (?, ?, ?)');
        $user->execute(array($firstname, $mail, $password));

        return $user;
    }

    public function getPassword($mail, $password)
    {
        $db = $this->dbConnect();
        $req=$db->prepare('SELECT * FROM admins WHERE mail= ?');
        $req->execute([$mail]);

        return $req;
    }
}