<?php

namespace Project\Controllers\Front;

class FrontController{

    // Accès et affichage de la page Accueil (index.php)
    function accueil()
    {
        
        require 'app/Views/Front/accueil.php';
    }

    // Accès et affichage de la page Mentions Légales
    function legal()
    {
        require 'app/Views/Front/mentions-legales.php';
    }
    
    // Accès et affichage de la page RGPD
    function rgpd()
    {
        require 'app/Views/Front/rgpd.php';
    }

    // Affichage des fiches produits simples de la table PC
    function produits($cPage)
    {
        $produits = new \Project\Models\ProductManager();
        $numPage = $produits->nbPage();
        if(!($cPage>0  && $cPage<=$numPage)){
            $cPage = 1;
        }
        $lesProduits = $produits->lesProduits($cPage);
       
        require 'app/Views/Front/produits.php';
    }

    // Affichage de la fiche produit détaillée par n° ID
    function product()
    {
        $products = new \Project\Models\ProductManager();
        $product = $products->getProduct($_GET['id'])->fetch();

    // Affichage des avis et notes des utilisateurs dans la fiche produit
        $comments = new \Project\Models\CommentManager();
        $allComments = $comments->getComments($_GET['id']);
    
    // Affichage de la note moyenne des utilisateurs dans la fiche produit
        $notes = new \Project\Models\CommentManager();
        $allNotes = $notes->getNotes($_GET['id']);
     
        require 'app/Views/Front/product.php';
    }

    // Ajouter un avis et attribuer une note dans la fiche produit
    function createComment($idpc, $comment, $note){
        $comments = new \Project\Models\CommentManager();
        $addComment =$comments->createComment($idpc, $comment, $note);

        header('location: index.php?action=product&id='.$idpc); // . concaténation pour récupérer tous les commentaires et notes dans la BDD et les afficher

    }
    
    // Accès et affichage de la page Contact avec formulaire
    function contact(){
        require 'app/Views/Front/contact.php';
    }
    
    // Envoi de mails
    function contactMail($civil, $lastname, $firstname, $mail, $phone, $cp, $ville, $adresse, $sujet, $content)
    {
        $contactManager = new \Project\Models\ContactManager();
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                $contactUserMail = $contactManager->mail($civil, $lastname, $firstname, $mail, $phone, $cp, $ville, $adresse, $sujet, $content);
                
                require 'app/Views/Front/confirmMail.php';
            } else{

                header('location: app/Views/Front/error.php');
            }
    }
}
