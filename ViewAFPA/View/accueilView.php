<?php
require_once ("../View/template2.php"); ?>
<div class="place_ligne">
    <div class="contenair_accueil">
        <div class="test_admin">
            <i class="fas fa-user"></i>
            <button class="button_connect button_inscription">Mon profil</button>
            <h2>Accèder à mon profil</h2>
            <div class="bloc_noir">
                <div>
                    <p>Accéder à votre compte afin de pouvoir consulter
                        l’historique de vos précédentes démarches
                        d’entreprise. Actualiser aussi
                        vos informations afin d’avoir un profil toujours à jour.
                        Bénéficier de ce service sur votre pc smartphone et tablette.</p>

                    <button class="button_connect button_inscription">Mon profil</button>
                    <i class="fab fa-linkedin"></i>
                </div>
            </div>
        </div>
        <div class="test_admin ole">
            <i class="fas fa-search"></i>
            <button class="button_connect button_inscription">Mon profil</button>
            <h2>Rechercher une entreprise</h2>
            <div class="bloc_noir">
                <div>
                    <p>Rechercher une entreprise facilement et rapidement. Plus de 3000 entreprises sont
                    resensé sur AFPA stage. Un chiffres fréquement mis à jour gràce à vos formateur et modérateur
                    qui continue d'en rajouter.</p>

                    <button class="button_connect button_inscription">Rechercher une entreprise</button>
                    <i class="fab fa-linkedin"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="papa ok_accueil">
        <p class="connexion_formulaire form_ligne_effect"><i class="fas fa-angle-double-down"></i></p>
    </div>

    <div class="blabla_accueil">

        <div id="bloc_1" class="ok_accueil_blabla">
            <i class="fas fa-users"></i>
            <p>Profiter d'une entraide mutuel entre chaque utilisateur
                d'AFPA Stage. C'est ensemble que vous augmenterais vos chance de trouver un stage
            facilement, et dans un cadre qui vous correspond.</p>
            <h3>Entraide et Partage</h3>
        </div>

        <div id="bloc_2" class="ok_accueil_blabla">
            <i class="fas fa-shield-alt"></i>
            <p>Naviguer pleinement en toute sécurité sur AFPA Stage.Conçus par nos meilleurs
            informaticiens, AFPA Stage assure que vos données ne seront pas partagées nis sauvegarder
            après résilation de compte.</p>
            <h3>Sécurité et Respect</h3>

        </div>

        <div id="bloc_3" class="ok_accueil_blabla">
            <i class="fas fa-file-signature"></i>
            <p>Rechercher facilement une entreprise qui vous correspond grace à nos algorithme puissant
            et évolutif. Des entreprises sont rajouté sans cesse par nos différents formateur et administrateur.
            </p>
            <h3>Recherche et Rapidité</h3>
        </div>
    </div>

    <div class="deco_accueil">
        <div class="img_deco">
        </div>
        <div class="chiffre_deco">
            <div>
                <p>98%</p>
                <h3>de chance de trouver un stage rémunérer</h3>
            </div>

            <div>
                <p>97%</p>
                <h3> de chance que les entreprises vous démarche directement</h3>
            </div>

            <div>
                <p>95%</p>
                <h3> de chance que vous récupérer des parts dans l'entreprise</h3>
            </div>
        </div>
    </div>

</div>
<footer class="accueil_footer">
    <div>
        <div>
            <a class="non_a" href="https://www.facebook.com/AFPA.JEUNES"><i class="fab fa-facebook-square"></i></a>
            <a class="non_a"  href="https://twitter.com/afpa_formation"><i class="fab fa-twitter-square"></i></a>
            <a class="non_a"  href="https://www.youtube.com/user/AfpaWebTv"><i class="fab fa-youtube"></i></a>
            <a class="non_a"  href="https://www.linkedin.com/company/afpa"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</footer>



<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 200) {
                $('#bloc_1').addClass('effect_bloc');
                $('#bloc_2').addClass('effect_bloc');
                $('#bloc_3').addClass('effect_bloc');
            }
        });
    });
</script>

