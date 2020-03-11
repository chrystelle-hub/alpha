<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Afpa-S</title>
    <link rel="shortcut icon" type="image/png" href="image/logo.png"/>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/site.css">
    <script src="../jquery-3.4.1.min.js"></script>
    <script src="../jquery-ui-1.12.1/jquery-ui.js"></script>
</head>
<body>
<header class="fond_header_template2" id="header">
    <div class="contenair_header">
        <div class="logo2">
            <img src="../image/logo.png">
        </div>

        <div class="naviguation_menu2">
            <div class="option">
                <i class="fas fa-bell oui"></i>
                <label>Anotations</label>
            </div>
            <div class="option">
                <i class="fas fa-search oui"></i>
                <label>Rechercher</label>
            </div>
            <div id="option_js" class="option">
                <i class="fas fa-user oui"></i>
                <label>Mon Compte</label>
                <div id="header_absolute_js" class="absolute_header">
                    <ul>
                        <li>Mon profil <i class="far fa-user"></i></li>
                        <li>Administration <i class="fas fa-gavel"></i></li>
                        <li>Deconnexion <i class="fas fa-sign-out-alt"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="little_header">

    </div>

</header>
<script>


    voletProfil = true;

    function superFonction(){

        if(voletProfil){
            voletProfil = false;
            document.getElementById("header_absolute_js").classList.add("change_absolute");
        }
        else{
            voletProfil = true;
            document.getElementById("header_absolute_js").classList.remove("change_absolute");
        }
    }


    var varSuperCool = document.getElementById("option_js");
    varSuperCool.addEventListener("click",superFonction);


</script>