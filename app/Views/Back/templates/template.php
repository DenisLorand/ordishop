<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <!--Feuilles de style-->
    <!--Google Fonts Open Sans-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app/public/Back/css/style.css">
    <!--Librarie d'icones Fontawesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> 
</head>

<body>
    
    
        <div class="tdb">
                <div class="btn_admin">
                   <a href="indexAdmin.php?action=tdbAdmin">Retour au tableau de bord</a>
                </div>
                
                <div class='btn_admin'>
                    <a href="indexAdmin.php?action=deconnexion">Déconnexion</a>
                </div>
        </div>
        
        <?= $content ?>
    
</body>
</html>