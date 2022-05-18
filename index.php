<?php
// echo password_hash('toto', PASSWORD_DEFAULT);
session_start();

require_once __DIR__ . '/vendor/autoload.php';

try{
    $frontController = new\Project\Controllers\Front\FrontController();

    // Accès et affichage de la page Produits avec pagination
    if(isset($_GET['action'])){
        if($_GET['action'] == 'produits'){
            if(isset($_GET['page'])){
                $cPage = $_GET['page'];
            } else {
                $cPage = 1;
            }
            $frontController->produits($cPage);
        }

        // Accès et affichage de la page Product avec fiche par ID
        elseif($_GET['action'] == 'product'){
            $frontController->product();
        }
        elseif($_GET['action'] == 'comments'){
            $frontController->getComments();
        }
        elseif($_GET['action'] == 'comment'){
            $frontController->comment();
        }
        elseif($_GET['action'] == 'notes'){
            $frontController->getNotes();
        }
        elseif($_GET['action'] == 'notes')
            $frontController->bestNote();

        // Envoi du commentaire (avis et note de l'utilisateur) en BDD
        elseif($_GET['action'] == 'createComment'){
            $idpc = $_GET['idPc'];
            $comment = htmlspecialchars($_POST['comment']);
            $note = htmlspecialchars($_POST['note']);
            
            if(!empty($idpc) && (!empty($comment)) &&(!empty($note)) ){
            $frontController->createComment($idpc, $comment, $note);
            } else{
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }

        // Accès et affichage de la page Mentions Légales
        elseif($_GET['action'] == 'mentions-legales'){
            $frontController->legal();
        }
        
        // Accès et affichage de la page RGPD
        elseif($_GET['action'] == 'rgpd'){
            $frontController->rgpd();
        }

        // Accès et affichage de la page Contact avec formulaire
        elseif($_GET['action'] == 'contact'){
            $frontController->contact();
        }

        // Envoi du mail en BDD
        elseif($_GET['action'] == 'contactMail'){
            $civil = htmlspecialchars($_POST['civil']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $mail = htmlspecialchars($_POST['mail']);
            $phone = htmlspecialchars($_POST['phone']);
            $cp = htmlspecialchars($_POST['cp']);
            $ville = htmlspecialchars($_POST['ville']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $sujet = htmlspecialchars($_POST['sujet']);
            $content = htmlspecialchars($_POST['content']);

            // On vérifie que tous les champs obligatoires (required) sur fond jaune sont remplis (ne sont pas vides) pour valider l'envoi du formulaire
            if((!empty($lastname)) && (!empty($firstname)) && (!empty($mail)) && (!empty($sujet)) &&(!empty($content))){
            $frontController->contactMail($civil, $lastname, $firstname, $mail, $phone, $cp, $ville, $adresse, $sujet, $content);
            }
             else{
                 throw new Exception('Tous les champs obligatoires ne sont pas remplis');
            }   
        }
        else{
            throw new Exception('Désolé, cette page n\'existe pas');}
        
    } else{
        $frontController->accueil();
    }

} catch(Exception $e){
    
    die('Erreur:' . $e->getMessage());
};