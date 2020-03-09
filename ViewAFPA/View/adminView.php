<?php
require_once ("../View/template2.php"); ?>
<div class="contenair_admin">
    <div class="titre_admin taille_inscri">
        <h2>Inscrire</h2>
        <div class="contenair_formulaire">
            <div class="titre_inscri">
                <h2>Inscrire un utilisateur</h2>
            </div>
            <form class="form_inscription">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Nom de famille">
                <input type="text" placeholder="Prenom">
                <input type="text" placeholder="ID_OSIA">
                <input type="password" placeholder="Mot de passe">
                <input type="password" placeholder="Confirmer Mot de passe">
                <button class="button_connect button_inscription">Inscrire</button>
            </form>
        </div>
    </div>
    <div class="titre_admin">
        <h2>Nouveaux inscris</h2>
        <div class="user_activ">
            <div class="user">
                <div>
                    <label>Nom Prénom</label>
                    <p>Alban Dany</p>
                </div>
                <div>
                    <label>ID_OSIA</label>
                    <p>0115185481</p>
                </div>
                <div>
                    <label>date inscription</label>
                    <p>17/02/2019</p>
                </div>
                <div class="div_accept">
                    <div class="valide">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="pas_valide croix_desactive_js">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>

            <div class="user">
                <div>
                    <label>Nom Prénom</label>
                    <p>Arnaud Bihan</p>
                </div>
                <div>
                    <label>ID_OSIA</label>
                    <p>8115185481</p>
                </div>
                <div>
                    <label>date inscription</label>
                    <p>05/02/2019</p>
                </div>
                <div class="div_accept">
                    <div class="valide">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="pas_valide croix_desactive_js">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>

            <div id="ligne_js" class="user">
                <div>
                    <label>Nom Prénom</label>
                    <p>Dylan Lecraver</p>
                </div>
                <div>
                    <label>ID_OSIA</label>
                    <p>086945481</p>
                </div>
                <div>
                    <label>date inscription</label>
                    <p>20/02/2019</p>
                </div>
                <div class="div_accept">
                    <div class="valide croix_active_js">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="pas_valide croix_desactive_js">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>

            <div id="ligne_js" class="user">
                <div>
                    <label>Nom Prénom</label>
                    <p>Dylan Lecraver</p>
                </div>
                <div>
                    <label>ID_OSIA</label>
                    <p>086945481</p>
                </div>
                <div>
                    <label>date inscription</label>
                    <p>20/02/2019</p>
                </div>
                <div class="div_accept">
                    <div class="valide croix_active_js">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="pas_valide croix_desactive_js">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="column_admin">
        <div class="titre_admin taille_inscri">
            <h2>Formation</h2>
            <div class="contenair_formulaire">
                <div class="titre_inscri">
                    <h2>Nouvelle Formation</h2>
                </div>
                <form class="form_inscription">
                    <input type="text" placeholder="Nom Formation">
                    <input type="text" placeholder="Promotion">
                    <button class="button_connect button_inscription">Inscrire</button>
                </form>
            </div>
        </div>

        <div class="titre_admin taille_inscri contenair_formulaire_cont">
            <h2>Formateur</h2>
            <div class="contenair_formulaire contenair_formateur_form">
                <form class="form_inscription">
                    <div class="barre_recherche admin_search">
                        <i class="fas fa-search"></i>
                        <input type="search" name="searchBar" placeholder="Email d'utilisateur"/>
                    </div>
                </form>
                <div class="formateur_align">
                    <div class="liste_formateur">
                        <div class="nom_form">
                            <label>Nom Prénom</label>
                            <p>Arnaud le bihan</p>
                        </div>
                        <button class="button_connect button_inscription">Formateur</button>
                    </div>
                    <div class="liste_formateur">
                        <div class="nom_form">
                            <label>Nom Prénom</label>
                            <p>Arnaud le bihan</p>
                        </div>
                        <button class="button_connect button_inscription">Formateur</button>
                    </div>
                    <div class="liste_formateur">
                        <div class="nom_form">
                            <label>Nom Prénom</label>
                            <p>Arnaud le bihan</p>
                        </div>
                        <button class="button_connect button_inscription">Formateur</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    $(".croix_desactive_js")
</script>
