<?php
namespace Project\Models;

class Manager{

    protected function dbConnect()
    {
        try{
            $db = new \PDO('mysql:host=localhost;dbname=ordishop;charset=utf8', 'root', '');
            return $db;
            /* 
             * url du site : https://www.greta-bretagne-sud.fr/stagiaires/denis-lorand/
             * accès phpmyadmin : greta-bretagne-sud.fr/phpmyadmin
             * dbname=gretaxao_denisLorand
             * root='gretaxao_denisLorand', password='denisLorand2021'
            */

        } catch(Exception $e){
            die('Erreur:' . $e->getMesssage());
        }
    }
}