<?php
namespace Project\Controllers\Back;
Use Project\Models\UserManager;

class BackController{

    // Gestion de l'espace Administrateur(s)

    function connexionAdmin()
    {
        require 'app/Views/Back/connexionAdmin.php';
    }

    // Gestion Admin : création et connexion

    function createAdmin($firstname, $mail, $pass )
    {
        $userManager = new\Project\Models\UserManager();
        $user = $userManager->createAdmin($firstname, $mail, $pass);
    }
    function connexion($mail, $pass)
    {
        $userManager = new \Project\Models\UserManager();
        $connexAdm = $userManager->getPassword($mail, $pass); // getPassword est une méthode

        $result = $connexAdm->fetch();

        $isPasswordCorrect = password_verify($pass, $result['pass']); // password_verify est une fonction native de PHP

        $_SESSION['mail'] = $result['mail'];
        $_SESSION['pass'] = $result['pass'];
        $_SESSION['id'] = $result['id'];
        $_SESSION['firstname'] = $result['firstname'];

        if ($isPasswordCorrect){
            require 'app/Views/Back/tableauDeBord.php';
        } else{
            echo 'Vos identifiants sont incorrects';
        }
    }

    // Gestion des emails : récupération et suppression

    function mails(){
        $mails = new \Project\Models\ContactManager();
        $allMails = $mails->getMails();

        require 'app/Views/Back/mails.php';
    }

    function deleteMail($id)
    {
        $mail = new \Project\Models\ContactManager();
        $deletMails = $mail->deleteMail($id);

        header('Location: indexAdmin.php?action=mails');
    }

    // Gestion des images

    function image()
    {
        require 'app/Views/Back/createImage.php';
    }
    function images(){
        $images = new \Project\Models\ProductManager();
        $allImages = $images->images();
        
        require 'app/Views/Back/images.php';
    }

    function createImage($title)
    {
        $target_dir = "app/public/Back/images/";
        $target_file =   basename($_FILES["fileToUpload"]["name"]); // spécifie le chemin du fichier à télécharger
        $uploadOk = 1; // n'est pas encore utilisé, sera utilisé plus tard
        $imageFileType = strtolower(pathinfo ($target_file, PATHINFO_EXTENSION)); // contient l'extension du fichier

        // on vérifie que le fichier image est une image réelle
            $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
            if ($check !== false){
                // on vérifie la taille du fichier (file size)
                if ($_FILES['fileToUpload']['size'] > 500000){
                    echo 'Désolé, votre fichier est trop volumineux.';
                    $uploadOk = 0;
                }
                // on autorise les images au formats suivants, avec extensions : .jpg, .gif et .png
                if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif'){
                    echo 'Seuls les formats JPG, PNG et GIF sont autorisés.';
                    $uploadOk = 0;
                }
                // On vérifie si  "$uploadOk is set to 0 by an error"
                if ($uploadOk == 0) {
                    echo 'Désolé, votre avatar n\'a pu être envoyé';
                    // Si tout est OK, on essaie de télécharger le fichier 
                } else{
               // Concaténation du chemin complet (dossier + fichier) après chargement vers BDD
                    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_dir .  $target_file)) {
                        $userManager = new \Project\Models\ProductManager();
                        $uploadImg = $userManager->createImage($title, $target_file);  
                    
                
                    header('location: indexAdmin.php?action=images');
                } else{
                    echo 'Désolé, une erreur est survenue dans l\'envoi de votre fichier.';
                }
                }
            } else{
                echo 'Ce fichier n\'est pas une image';
                $uploadOk = 0;
            }
        }

    function deleteImage($id)
        {
            $image = new \Project\Models\ProductManager();
            $deleteImage = $image->deleteImage($id);
    
            header('Location: indexAdmin.php?action=images');
        }
    
    // Gestion des Produits côté back, administration

    function products(){
        $products = new \Project\Models\ProductManager();
        $allProducts = $products->getProducts();

        require 'app/Views/Back/products.php';
    }
    // Suppression de produit(s) dans l'interface admin

    function deleteProduct($id)
    {
        $product = new \Project\Models\ProductManager();
        $deleteProduct = $product->deleteProduct($id);

        header('Location: indexAdmin.php?action=products');
    }

    // Ajout (création), Edition et mise à jour de fiche(s) produit(s) dans l'interface admin

    function editProduct($id)
    {
        $product = new \Project\Models\ProductManager();
        $getProduct = $product->getProduct($id);


        require 'app/Views/Back/editProduct.php';
    }

    function updateProduct($id, $title, $brand, $model, $processor, $ram, $hd, $price)
    {
        $product = new \Project\Models\ProductManager();
        $updateProduct = $product->updateProduct($id, $title, $brand, $model, $processor, $ram, $hd, $price);

        header('Location: indexAdmin.php?action=products');
        
    }

    function createProduct($title, $brand, $model, $processor, $ram, $hd,  $price, $img){

        $product = new \Project\Models\ProductManager;
        $createProduct= $product->createProduct($title, $brand, $model, $processor, $ram, $hd,  $price, $img);
       
        header('Location: indexAdmin.php?action=products');
    }

    function newProduct(){
        $imageProduct = new \Project\Models\ProductManager;
        $imageProducts = $imageProduct->imageProduct();
        
        require 'app/Views/Back/newProduct.php';
         
    }

    // Affichage des produits et fiche(s) côté front

    function produits(){
         $produits = new \Project\Models\ProductManager();
         $lesProduits = $produits->lesProduits();

        require 'app/Views/Front/produits.php';
    }

    // Gestion des marques côté administrateur : affichage, ajout et suppression de marque
    
    function brands(){
        $brands = new \Project\Models\BrandManager();
        $allBrands = $brands->allBrands();

       require 'app/Views/Back/brands.php';
   }

   function newBrand(){
   
    require 'app/Views/Back/newBrand.php';
     
}

    function createBrand($brandname){
        $brand = new \Project\Models\BrandManager;
        $createBrand= $brand->createBrand($brandname);
       
        header('Location: indexAdmin.php?action=brands');
    }

    function deleteBrand($id)
    {
        $brand = new \Project\Models\BrandManager();
        $deleteBrand = $brand->deleteBrand($id);

        header('Location: indexAdmin.php?action=brands');
    }

    function tdbAdmin(){
        require 'app/Views/Back/tableauDeBord.php';
    }
}