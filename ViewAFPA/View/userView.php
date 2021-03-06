<?php
require_once ("../View/template2.php"); ?>

    <div class="contenair_relative">
        <div class="contenair_photo">
            <div class="place_button">
                <button class="button_connect button_inscription button_deco">Déconnexion <i class="fas fa-cog"></i></button>
            </div>
        </div>
        <div class="contenair_absolute">
            <div class="cadre_user">
            </div>
            <div class="txt_user">
                <h2>Bienvenue sur votre compte</h2>
                <p>Nom utilisateur</p>
            </div>
        </div>
    </div>

    <div class="contenair_historique">
        <div class="historique">
            <h2>Historique de mes candidatures</h2>
            <div class="historique_contenair">
                <div class="ligne_histo">
                    <div class="contenair_deco">
                        <div class="decor_histo">

                        </div>
                    </div>
                    <div class="nom_histo">
                        <label>Nom entreprise</label>
                        <h3>Kebab Dylan</h3>
                    </div>

                    <div class="date_histo">
                        <label>Date</label>
                        <h3> 12/06/2020 à 14h02</h3>
                    </div>

                    <div class="statut_histo">
                        <div>
                            <label>Statut</label>
                            <h3>en cours</h3>
                        </div>
                        <i class="fas fa-circle"></i>
                    </div>
                </div>

                <div class="ligne_histo">
                    <div class="contenair_deco">
                        <div class="decor_histo">

                        </div>
                    </div>
                    <div class="nom_histo">
                        <label>Nom entreprise</label>
                        <h3>Kebab Dylan</h3>
                    </div>

                    <div class="date_histo">
                        <label>Date</label>
                        <h3> 12/06/2020 à 14h02</h3>
                    </div>

                    <div class="statut_histo">
                        <div>
                            <label>Statut</label>
                            <h3>en cours</h3>
                        </div>
                        <i class="fas fa-circle"></i>
                    </div>
                </div>

                <div class="ligne_histo">
                    <div class="contenair_deco">
                        <div class="decor_histo">

                        </div>
                    </div>
                    <div class="nom_histo">
                        <label>Nom entreprise</label>
                        <h3>Kebab Dylan</h3>
                    </div>

                    <div class="date_histo">
                        <label>Date</label>
                        <h3> 12/06/2020 à 14h02</h3>
                    </div>

                    <div class="statut_histo">
                        <div>
                            <label>Statut</label>
                            <h3>en cours</h3>
                        </div>
                        <i class="fas fa-circle"></i>
                    </div>
                </div>
                <div class="ligne_histo">
                    <div class="contenair_deco">
                        <div class="decor_histo">

                        </div>
                    </div>
                    <div class="nom_histo">
                        <label>Nom entreprise</label>
                        <h3>Kebab Dylan</h3>
                    </div>

                    <div class="date_histo">
                        <label>Date</label>
                        <h3> 12/06/2020 à 14h02</h3>
                    </div>

                    <div class="statut_histo">
                        <div>
                            <label>Statut</label>
                            <h3>en cours</h3>
                        </div>
                        <i class="fas fa-circle"></i>
                    </div>
                </div>

                <div class="ligne_histo">
                    <div class="contenair_deco">
                        <div class="decor_histo">

                        </div>
                    </div>
                    <div class="nom_histo">
                        <label>Nom entreprise</label>
                        <h3>Carrefour</h3>
                    </div>

                    <div class="date_histo">
                        <label>Date</label>
                        <h3> 05/04/2020 à 9h46</h3>
                    </div>

                    <div class="statut_histo">
                        <div>
                            <label>Statut</label>
                            <h3>en cours</h3>
                        </div>
                        <i class="fas fa-circle"></i>
                    </div>
                </div>
                <div class="ligne_histo">
                    <div class="contenair_deco">
                        <div class="decor_histo">

                        </div>
                    </div>
                    <div class="nom_histo">
                        <label>Nom entreprise</label>
                        <h3>Dylan Store</h3>
                    </div>

                    <div class="date_histo">
                        <label>Date</label>
                        <h3> 04/03/2020 à 15h37</h3>
                    </div>

                    <div class="statut_histo">
                        <div>
                            <label>Statut</label>
                            <h3>cloturé</h3>
                        </div>
                        <i class="fas fa-circle red"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="mes_infos">
            <h2>Mes informations</h2>
            <div class="contenair_user">

                <div class="place_edit">
                    <div id="menu_1" class="user_info ouvert_user">
                        <div class="parti_1">
                            <ul>
                                <li>Nom</li>
                                <li>Prenom</li>
                                <li>Email</li>
                                <li>Statut</li>
                                <li>formation</li>
                            </ul>
                        </div>
                        <div class="parti_2">
                            <ul>
                                <li>Le craver</li>
                                <li>Dylan</li>
                                <li>dylanCool56@hotmail.fr</li>
                                <li>Formateur</li>
                                <li>Concepteur développeur d'Aplication</li>
                            </ul>
                        </div>
                    </div>

                    <form id ="menu_2" class="form_info cache_menu2">
                        <input type="text" placeholder="Nom...">
                        <input type="text" placeholder="Prénom...">
                        <input type="text" placeholder="Email...">
                        <button class="button_connect button_form_edit">Enregistrer</button>
                    </form>
                </div>
                <div class="buton_profil">
                    <button id="buton_edit_js" class="button_connect button_inscription">Modifier mon profil <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>

<script>

    voletProfil = true;

    function ouvertureMenuSetting(){

        if(voletProfil){
            voletProfil = false;
            document.getElementById("menu_1").classList.remove("ouvert_user");
            document.getElementById("menu_1").classList.add("cache_user");
            document.getElementById("menu_2").classList.remove("cache_menu2");
            document.getElementById("menu_2").classList.add("ferme_cache");
            document.getElementById("buton_edit_js").textContent = "retour";
        }
        else{
            voletProfil = true;
            document.getElementById("menu_1").classList.remove("cache_user");
            document.getElementById("menu_1").classList.add("ouvert_user");
            document.getElementById("menu_2").classList.remove("ferme_cache");
            document.getElementById("menu_2").classList.add("cache_menu2");
            document.getElementById("buton_edit_js").textContent = "Modifier mon profil"
        }
    }


    var varFermetureSetting = document.getElementById("buton_edit_js");
    varFermetureSetting.addEventListener("click",ouvertureMenuSetting);

</script>




