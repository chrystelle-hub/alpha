<?php
    require_once ("../View/template1.php"); ?>

<div class="contenair_principal">
    <div class="info">
        <div class="stat_sup">
            <div class="stat espacement_cool">
                <p><b>Entraide</b><i class="fas fa-users"></i></p>
                <h3>Profiter d'une entraide mutuel entre chaque utilisateur
                d'AFPA Stage</h3>
                <ul>
                    <li> <label>></label> Statistique D'acceptation</li>
                    <li> <label>></label> Repertoire d'entreprises</li>
                    <li> <label>></label> Liste de contact</li>
                    <li> <label>></label> Avis de stagiaires</li>
                </ul>
                <div class="position_button_info">
                    <button class="button_connect button_info">Information sur l'Afpa ?</button>
                </div>
            </div>
            <div class="stat espacement_pascool">
                <p><b>Sécurité</b><i class="fas fa-shield-alt"></i></p>
                <h3>Utiliser nos services en toute sécurité, et bénificier
                d'une assistance 7j7</h3>
                <ul>
                    <li> <label>></label> Statistique D'acceptation</li>
                    <li> <label>></label> Repertoire d'entreprises</li>
                    <li> <label>></label> Liste de contact</li>
                    <li> <label>></label> Avis de stagiaires</li>
                </ul>
                <div class="position_button_info">
                    <button class="button_connect button_info">Information sur le Coronavirus ?</button>
                </div>
            </div>
            <div class="stat espacement_cool">
                <p><b>Suivis</b><i class="fas fa-file-signature"></i></p>
                <h3>Suivis constant de vos candidatures, par vous ainsi que par
                votre formateur</h3>
                <ul>
                    <li> <label>></label> Statistique D'acceptation</li>
                    <li> <label>></label> Repertoire d'entreprises</li>
                    <li> <label>></label> Liste de contact</li>
                    <li> <label>></label> Avis de stagiaires</li>
                </ul>
                <div class="position_button_info">
                    <button class="button_connect button_info">Information sur le Communisme ?</button>
                </div>
            </div>

        </div>
    </div>
    <div class="contenair_formulaire">
        <div class="titre_inscri">
            <h2>Je m'inscris <label><b>maintenant</b></label> </h2>
        </div>
        <form class="form_inscription">
            <input type="email" placeholder="Email">
            <div class="form_centre"><p>Exemple: Afpa56@gmail.com</p></div>
            <input type="text" placeholder="Nom de famille">
            <input type="text" placeholder="Prenom">
            <input type="text" placeholder="ID_OSIA">
            <div class="form_centre"><p>* Seulement les inscris AFPA possède un identifiant OSIA</p></div>
            <input type="password" placeholder="Mot de passe">
            <div class="form_centre"><p>* Saisisez au moins 6 caractères</p></div>
            <input type="password" placeholder="Confirmer Mot de passe">
            <button class="button_connect button_inscription">S'inscrire</button>
            <a class="a_defini" href="#">Je n'arrive pas à m'inscrire</a>

        </form>
    </div>
</div>
<?php
require_once ("../View/footer.php"); ?>


