<?php
require_once ("../View/template2.php"); ?>
<div class="super_form">
    <div class="titre_admin rien_form">
        <h2>Modifier Contact</h2>
        <div class="contenair_formulaire candidat_form">
            <form class="formulaire_contact" method="POST" action="">
                <span id="message"></span>
                <div class="add_candidature">

                    <div>
                        <label for="fonction_contact">Fonction :</label>
                        <input type="text" id="fonction_contact" name="fonction_contact" placeholder="Fonction" required>
                        <span id="erreurFonction"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="tel_contact">Tel :</label>
                        <input type="text" id="tel_contact" name="tel_contact" placeholder="Téléphone">
                        <span id="erreurTel"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="email_contact">Email :</label>
                        <input type="text" id="email_contact" name="email_contact" placeholder="Email">
                        <span id="erreurEmail"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="linkedin_contact">Linkedin :</label>
                        <input type="text" id="linkedin_contact" name="linkedin_contact" placeholder="Linkedin">
                        <span id="erreurLinkedin"></span>
                    </div>

                </div>
                <div class="bouton_form">
                    <input type="button" id="buttonAjout" class="button_add" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>