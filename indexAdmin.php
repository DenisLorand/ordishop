<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';


try{
  $backController = new\Project\Controllers\Back\BackController();

    if(isset($_GET['action'])){
        if($_GET['action'] == 'createAdmin'){
            $firstname = $_POST['firstname'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $password = password_hash($pass, PASSWORD_DEFAULT); // function hash native à PHP pour crypter les mots de passe
            $backController->createAdmin($firstname, $mail, $pass);

        }
        elseif($_GET['action'] == 'connexionAdmin'){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];

            if(!empty($mail) && !empty($pass)){
                $backController->connexion($mail, $pass);
            } else{
                throw new Exception('Renseigner vos identifiants');
            }    
        }

        // Gestion des mails

        elseif($_GET['action'] == 'mails'){
            $backController->mails();
        }

        elseif(($_GET['action'] == 'deleteMail')){
            $id = $_GET['id'];
            $backController->deleteMail($id);
        }


        // Gestion des produits (products/product) en back : affichage, ajout, édition et mise à jour, suppression


        elseif($_GET['action'] == 'products'){
            $backController->products();
        }

        elseif(($_GET['action'] == 'deleteProduct')){
            $id = $_GET['id'];
            $backController->deleteProduct($id);
        }

        elseif($_GET['action'] == 'editProduct'){
            $id = $_GET['id'];
            $backController->editProduct($id);
        }

        elseif($_GET['action'] == 'updateProduct'){
            $id = $_GET['id'];
            $title = htmlspecialchars($_POST['title']);
            $brand = htmlspecialchars($_POST['brand']);
            $model = htmlspecialchars($_POST['model']);
            $processor = htmlspecialchars($_POST['processor']);
            $ram = htmlspecialchars($_POST['ram']); 
            $hd = htmlspecialchars($_POST['hd']);
            $price = htmlspecialchars($_POST['price']); 

            $backController->updateProduct($id,$title, $brand, $model, $processor, $ram, $hd, $price);
        }

        elseif($_GET['action'] == 'newProduct'){
            $backController->newProduct();
        }
        
        elseif($_GET['action'] == 'createProduct'){
            $title = ($_POST['title']);
            $brand = ($_POST['brand']);
            $model = ($_POST['model']);
            $processor = ($_POST['processor']);
            $ram = ($_POST['ram']);
            $hd = ($_POST['hd']);
            $price = ($_POST['price']);
            $img = ($_POST['img']);

            $backController-> createProduct($title, $brand, $model, $processor, $ram, $hd,  $price, $img);    
        }

        // Gestion des images

        elseif($_GET['action'] == 'images'){
            $backController-> images();
        }
        elseif($_GET['action'] == 'image'){
            $backController-> image();
        }

        elseif($_GET['action'] == 'createImage'){
            $title = htmlspecialchars($_POST['title']);
            if(!empty($title)){
                $backController-> createImage($title);}
        }

        elseif(($_GET['action'] == 'deleteImage')){
            $id = $_GET['id'];
            $backController->deleteImage($id);
        }

        // Gestion des marques (brands) en back : affichage, ajout, supression

        elseif($_GET['action'] == 'brands'){
            $backController->brands();
        }

        elseif($_GET['action'] == 'newBrand'){
            $backController->newBrand();
        }

        elseif($_GET['action'] == 'createBrand'){
            $brandname = htmlspecialchars($_POST['brandname']);
             if(!empty($brandname)){
                $backController->createBrand($brandname);}
        }

        elseif(($_GET['action'] == 'deleteBrand')){
            $id = $_GET['id'];
            $backController->deleteBrand($id);
        }

        // Tableau de Bord de l'Administrateur

         elseif($_GET['action'] == 'tdbAdmin'){
            $backController->tdbAdmin();
        }
        
        elseif($_GET['action'] == 'deconnexion'){
            session_destroy();
            header('Location: index.php');
        }
        
    }else{
        $backController->connexionAdmin();
    }
}catch(Exception $e){
  
    die('Erreur:'.$e->getMessage());
}