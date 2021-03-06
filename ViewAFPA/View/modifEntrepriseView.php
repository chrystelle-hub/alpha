<?php
require_once ("../View/template2.php"); ?>
<div class="super_form">
    <div class="titre_admin rien_form">
        <h2>Modifier Entreprise</h2>
        <div class="contenair_formulaire candidat_form">
            <form class="formulaire_contact" method="POST" action="">
                <span id="message"></span>
                <div class="add_candidature">

                    <div class="colum_candidat">
                        <label for="formation">Formation visée :</label>
                        <select id="formation" multiple="true" name="choix_formation" placeholder="Choisissez une formation">
                        </select>
                        <span id="erreurFormation"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="activite">Secteur d'activité :</label>
                        <input type="text" id="activite" name="activite" placeholder="Secteur d'activité" required>
                        <span id="erreurSecteur"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="adresse">Adresse :</label>
                        <input type="text" id="adresse" name="adresse" placeholder="Adresse" required>
                        <span id="erreurAdresse"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="code_postal">Code postal :</label>
                        <input type="text" id="code_postal" name="code_postal" placeholder="Code postal" required>
                        <span id="erreurCode"></span>
                    </div>

                    <div class="colum_candidat">
                        <label class="tel">Tel :</label>
                        <input type="text" id= "tel" name="tel" placeholder="Tel">
                        <span id="erreurTel"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="email">Email :</label>
                        <input type="text" id="email" name="email" placeholder="Email">
                        <span id="erreurEmail"></span>
                    </div>


                </div>
                <div class="bouton_form">
                    <input type="button" id="buttonAjout" class="button_add" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>