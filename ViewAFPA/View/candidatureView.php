<?php
require_once ("../View/template2.php"); ?>
<div class="super_form">
    <div class="titre_admin rien_form">
        <h2>Candidature</h2>
        <div class="contenair_formulaire candidat_form">
            <form class="form_inscription" method="POST" action="">
                <div class="add_candidature">

                    <div>
                        <label>Date de Candidature</label>
                        <input type="date" id="date">
                        <span id="erreurDate"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="mode_candidature">Mode de candidature:</label>
                        <select id="mode" name="choix_mode" required>
                            <option value="">Choissir un mode</option>
                            <option value="0">Lettre</option>
                            <option value="2">Téléphone</option>
                            <option value="1">Email</option>
                            <option value="3">Sur place</option>
                        </select>
                        <span id="erreurMode"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="etat_demande">Etat :</label>
                        <select id="etat" name="etat_demande" required>
                            <option value="" >Choissir un etat</option>
                            <option value="0">En cours</option>
                            <option value="1">Fini</option>
                        </select>
                        <span id="erreurEtat"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="reponse_candidature">Réponse :</label>
                        <select id="reponse" name="reponse_candidature" required>
                            <option value="" >Choissir une reponse</option>
                            <option value="0">En attente</option>
                            <option value="1">Entretien en attente de réponse</option>
                            <option value="2">Refusé après entretien</option>
                            <option value="3">Refusé sans entretien</option>
                            <option value="4">Accepté</option>
                        </select>
                        <span id="erreurReponse"></span>
                    </div>

                    <div class="colum_candidat">
                        <label for="delai_reponse">Délai de la réponse (en semaines) :</label>
                        <input id="delai" type="integer" name="delai_reponse">
                        <span id="erreurFormation"></span>
                        <label for="formation">Formation :</label>
                        <select id="formation" name="choix_formation">
                        </select>
                        <span id="erreurDelai"></span>
                    </div>
                </div>
                <div class="bouton_form">
                    <input type="button" id="buttonAjout" class="button_add" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>
