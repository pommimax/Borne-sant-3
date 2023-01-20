<!--Projet Borne connectée en santée, ESEO-CHM, septembre 2022 - janvier 2023
Equipe composée de Roxane LAIGNEAU, Julia Body, Marie LOMBART et Maxime POMMIER
Page contenant le code PHP de notre projet
version 20/01

-->

<!DOCTYPE html>

<!-- Initialisation de la page html et lien avec le css-->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <html lang="fr">
    <title>Formulaire</title>
    
    


<!-- tête du questionnaire test-->

</html>
<body class= "container">
    <main class="centered-element">

       
        <!-- début du questionnaire-->

        <form action="insert.php" method="post">

            <!-- Page 1 : page d'acceuil du patient pour attirer sur questionnaire -->      

            <div class="page" id="page1">

                <h1> Vous avez 2 minutes ?                
                </h1>

                <h2>
             Evaluez votre état de santé à travers ce questionnaire totalement anonyme, gratuit et sans aucun engagement de votre part.   
                </h2>

            <!-- Création bouton suivant -->

            <button class="next" type="button">Commencer</button>
            
            </div>


            <!-- Création de la page 2-->

            <div class="page" id="page2">

                <!-- Q1 : Age de l'utilisateur, sous forme de tranche, adapter ensuite le questionnaire -->

                <h1>Age</h1>

                <div>

                    <label for="Age"> Quel âge avez vous ?</label>

                    <table style="line-height: 150%;margin-left:40%;margin-right:20%" cellspacing="30">

                        <tr>
                            <td><input type="radio" name="Age" id="De 0 a 20 ans" value = "20"></td>
                            <td><label for="De 0 a 20 ans"> De 0 à 20 ans </label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Age" id="De 21 a 44 ans" value = "44"></td>
                            <td><label for="De 21 a 44 ans">De 21 à 44 ans</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Age" id="De 45 a 64 ans" value = "64"></td>
                            <td><label for="De 45 a 64 ans">De 45 à 64 ans</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Age" id="De 65 a 69 ans" value = "69"></td>
                            <td><label for="De 65 a 69 ans">De 65 à 69 ans</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Age" id="70 ans et plus" value = "70"></td>
                            <td><label for="70 ans et plus">70 ans et plus</label></td>
                        </tr>

                    </table>
                </div>

                <!-- Création bouton suivant -->
                <button class="next" type="button" onclick="getAge()">Suivant</button>

            </div>


            <!-- Création de la page 3-->

            <div class="page" id="page3">

                <!-- Q2 : Sexe de l'utilisateur -->
                <h1>Sexe</h1>

                <div>

                <label for="Sexe"></label>

                    <table style="line-height: 150%;margin-left:42%;margin-right:20%" cellspacing="30">
                        <tr>
                            <td><input type="radio" name="Sexe" id="Homme" value = "Homme"></td>
                            <td><label for="Homme">Homme</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Sexe" id="Femme" value = "Femme"></td>
                            <td><label for="Femme">Femme</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Sexe" id="Autres" value = "Autres"></td>
                            <td><label for="Autres">Autres</label></td>
                        </tr>

                    </table>

                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Création de la page 3-->

            <div class="page" id="page4">

                <!-- Q3 : Qualification de sa santé -->

                <div id="conteneur" class="gauche">

                <h1>Qualification santé</h1>

                <div class = "slidecontainer">
                <label for="Sante"> Comment qualifiriez vous votre santé ?</label>
                <div>
                <input type="range" min="0" max="100" class="slider" name ="Sante" id="sante" onchange="ChoixSliderSante()">
                <datalist id="tickmarks">
                    <option value="10" label="Mauvaise"></option>
                    <option value="30" label="Moyenne"></option>
                    <option value="50" label="Bonne"></option>
                    <option value="70" label="Tres bonne"></option>
                    <option value="90" label="Excellente"></option>
                </datalist>
                </div>
                <div id="demo"></div>
                </div>
                </div>
                <div id="droite1" class="droite"></div>
                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

           
            </div>


            <!-- Création de la page 5-->

            <div class="page" id="page5">

                <!-- Q4 : Impact alimentation -->

                <h1>Impact alimentation</h1>
                <div>

                <label for="Alimentation"> Pensez-vous que votre alimentation a un impact sur votre santé ?</label>

                <div id="conteneur">
                    <div id="droite2">
                    </div>
                    <table style="line-height: 150%;margin-left:39%;margin-right:40%" cellspacing="30">

                        <tr>
                            <td><input type="radio" name="Alimentation" id="Un peu" value = "Un peu" onclick="Animer('avatarJ2','<a href=https://www.mangerbouger.fr>Visiter le site <br> mangez bougez</a>')"></td>
                            <td><label for="Un peu"> Un peu </label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Alimentation" id="Beaucoup" value = "Beaucoup" onclick="Animer('avatarJ2','<a href=https://www.mangerbouger.fr>Visiter le site <br> mangez bougez</a>')"></td>
                            <td><label for="Beaucoup"> Beaucoup </label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Alimentation" id="Pas du tout" value = "Pas du tout" onclick="Animer('avatarT2','<a href=https://www.mangerbouger.fr>Visiter le site <br> mangez bougez</a>')"></td>
                            <td><label for="Pas du tout">Pas du tout</label></td>
                        </tr>

                    </table></div>
                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Création Page 6-->

            <div class="page" id="page6">

                <!-- Q5 : Activité physique -->

                <h1>Activité physique</h1>
                <div>
                <label for="ActivitePhysique"> Pratiquez-vous une activité physique quotidienne suffisante ? (marche, jardinage, vélo, ménage…) 
                </label>

                    <div id="conteneur">
                        <div id="droite3">
                        </div>

                        <table style="line-height: 150%;margin-left:38%;margin-right:35%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="ActivitePhysique" id="Oui" value = "Oui" onclick="Animer('avatarJ3','non')"></td>
                                <td><label for="Oui"> Oui </label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="ActivitePhysique" id="Non" value = "Non" onclick="Animer('avatarT3','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Ne sais pas" id="Ne sais pas" value = "Ne sais pas" onclick="Animer('avatarT3','non')"></td>
                                <td><label for="Ne sais pas">Ne sais pas</label></td>
                            </tr>

                        </table></div>

                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Création Page 7-->

            <div class="page" id="page7">

                <!-- Q6 : Corpulence -->

                <h1>Corpulence</h1>

                <div>
                <label for="Corpulence"> Considérez-vous que vous êtes :</label>

                    <div id="conteneur">
                        <div id="droite4">
                        </div>

                        <table style="line-height: 150%;margin-left:28%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="Corpulence" id="Beaucoup trop maigre" value = "Beaucoup trop maigre" onclick="Animer('avatarT4','<a href=http://www.caloris.fr/calcul-imc.php>Calculer votre IMC</a>')"></td>
                                <td><label for="Beaucoup trop maigre">Beaucoup trop maigre</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Corpulence" id="Un peu trop maigre" value = "Un peu trop maigre" onclick="Animer('avatarT4','<a href=http://www.caloris.fr/calcul-imc.php>Calculer votre IMC</a>')"></td>
                                <td><label for="Un peu trop maigre">Un peu trop maigre</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Corpulence" id="D un poids normal" value = "D un poids normal" onclick="Animer('avatarJ4','non')"></td>
                                <td><label for="D un poids normal">D un poids normal</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Corpulence" id="Un peu en surpoids" value = "Un peu en surpoids" onclick="Animer('avatarJ4','<a href=http://www.caloris.fr/calcul-imc.php>Calculer votre IMC</a>')"></td>
                                <td><label for="Un peu en surpoids">Un peu en surpoids</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Corpulence" id="Avec un surpoids important" value = "Avec un surpoids important" onclick="Animer('avatarT4','<a href=http://www.caloris.fr/calcul-imc.php>Calculer votre IMC</a>')"></td>
                                <td><label for="Avec un surpoids important">Avec un surpoids important</label></td>
                            </tr>

                        </table></div>

                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

                
            </div>

        <!-- Création page calcul ICM -->

            <div class="page" id="pageIMC">

                <!-- IMC -->

                <p>Calcul de votre IMC</p>

                <div>
                <div id="conteneur">
                <p> Taille en m : <p>
                <div id="taille-value"></div>
                <input type="range" id="Taille" class="slider" name="Taille" min="1.10" max="2.10" step="0.01" oninput="sliderPoidsEtTaille()">
                <datalist>
                    <option value="1.10" label="1.10"></option>
                    <option value="1.35" label="1.35"></option>
                    <option value="1.60" label="1.60"></option>
                    <option value="1.85" label="1.85"></option>
                    <option value="2.10" label="2.10"></option>
                </datalist>
                
                </div>

                <div>
                <p> Poids en kg : <p>
                <div id="poids-value"></div>
                <input type="range" id="Poids" class="slider" name="Poids" min="30" max="150" step="0.5" oninput="sliderPoidsEtTaille()">
                <datalist>
                    <option value="30" label="30"></option>
                    <option value="60" label="60"></option>
                    <option value="90" label ="90"></option>
                    <option value="120" label="120"></option>
                    <option value="150" label="150"></option>
                </datalist>
                
                </div>

                <div id="imc">
                    <p> Votre IMC </p>
                    <div id="imc-value"></div>
                    <div id="couleur-imc"></div>
                </div>
            </div>
            
            

            <!-- Création boutons suivant et précédent -->

            <button class="prev" type="button">Précédent</button>
            <button class="next" type="button">Suivant</button>

           
            </div>

            <!-- Création Page 8-->

            <div class="page" id="page8">

                <!-- Q7 : Sommeil -->

                 <h1>Sommeil</h1>

            <div>
                <label for="Sommeil"> Comment évaluez-vous votre qualité du Sommeil :</label>
                <div id="conteneur">
                    <div id="droite5">
                    </div>
                        <table style="line-height: 150%;margin-left:38%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="Sommeil" id="Excellente" value = "Excellente" onclick="Animer('avatarJ5','non')"></td>
                                <td><label for="Excellente">Excellente</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Sommeil" id="Tres bonne" value = "Tres bonne" onclick="Animer('avatarJ5','non')"></td>
                                <td><label for="Tres bonne">Tres bonne</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Sommeil" id="Bonne" value = "Bonne" onclick="Animer('avatarJ5','non')"></td>
                                <td><label for="Bonne">Bonne</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Sommeil" id="Moyenne" value = "Moyenne" onclick="Animer('avatarT5','non')"></td>
                                <td><label for="Moyenne">Moyenne</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Sommeil" id="Mauvaise" value = "Mauvaise" onclick="Animer('avatarT5','non')"></td>
                                <td><label for="Mauvaise">Mauvaise</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons précedent et suivant -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>
    
            </div>


               <!-- Nouveau formulaire pour conso -->

            <!-- Création Page 9 -->

            <div class="page" id="page9">

                <!-- Q8 : Choix conso alcool -->

                <h1>Alcool</h1>

            <div>
                <label for="Alcool"> Consommez vous des boissons alcoolisées ? :</label>

                <radio onchange="afficheBtn()" class = "Alcool" name="Alcool" id="AlcID" required>

                    <div id="conteneur">
                        <div id="droite6">
                        </div>
                            <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                                <tr>
                                    <td><input type="radio" class="Alcool" name="Alcool" id="AlcID1" value = "Oui" onclick="Animer('avatarT6','non')"></td>
                                    <td><label for="Oui">Oui</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" class="Alcool" name ="Alcool" id="AlcID2" value = "Non" onclick="Animer('avatarJ6','non')"></td>
                                    <td><label for="Non">Non</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" class="Alccol"name="Alcool"id="AlcID3" value = "Occasionnellement" onclick="Animer('avatarJ6','non')"></td>
                                    <td><label for="Occasionnellement">Occasionnellement</label></td>
                                </tr>

                            </table></div>

            </div>


                <!-- Création boutons suivant et précédent -->

                <button class="prev" id="BtnPrec" type="button">Précédent</button>
                <button class="next" id= "BtnSuiv" type="button">Suivant</button>
                <button class="nextA" id="BtnSuivA" type="button">Suivant</button>

            </div>

                <!-- Q1 supplémentaire sur l'alcool -->

            <div class="page" id="page9">

                <h1>Alcool</h1>

            <div>
                <label for="AQ1"> A quelle fréquence consommez-vous de l'alcool ? :</label>
                <div id="conteneur">
                    <div id="droite7">
                    </div>
                        <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="AQ1" id="Jamais" value = "Jamais" onclick="Animer('avatarJ7','non')"></td>
                                <td><label for="Jamais">Jamais</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ1" id="Une fois par mois ou moins" value = "Une fois par mois ou moins" onclick="Animer('avatarJ7','non')"></td>
                                <td><label for="Une fois par mois ou moins">Une fois par mois ou moins</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ1" id="2 a 4 fois par mois" value = "2 a 4 fois par mois" onclick="Animer('avatarJ7','non')"></td>
                                <td><label for="2 à 4 fois par mois">2 à 4 fois par mois</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ1" id="2 à 3 fois par semaine" value = "2 à 3 fois par semaine" onclick="Animer('avatarT7','non')"></td>
                                <td><label label for="2 à 3 fois par semaine">2 à 3 fois par semaine</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ1" id="4 fois ou plus par semaine" value = "4 fois ou plus par semaine" onclick="Animer('avatarT7','non')"></td>
                                <td><label for="4 fois ou plus par semaine">4 fois ou plus par semaine</label></td>
                            </tr>


                        </table></div>

                </div>
                <!-- Création boutons précédent et suivant -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>
            
            </div>


                <!-- Q2 supplémentaire sur l'alcool -->

            <div class="page" id="page10">

                   <h1>Alcool</h1>

            <div>
                <label for="AQ1"> Combien de verres standards buvez-vous les jours où vous buvez de l'alcool ? :</label>
                <div id="conteneur">
                    <div id="droite8">
                    </div>
                        <table style="line-height: 150%;margin-left:38%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="AQ2" id="1 ou 2" value = "1 ou 2" onclick="Animer('avatarJ8','non')"></td>
                                <td><label for="1 ou 2">1 ou 2</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ2" id="3 ou 4" value = "3 ou 4" onclick="Animer('avatarJ8','non')"></td>
                                <td><label for="3 ou 4">3 ou 4</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ2" id="5 ou 6" value = "5 ou 6" onclick="Animer('avatarT8','non')"></td>
                                <td><label for="5 ou 6">5 ou 6</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ2" id="7 à 9" value = "7 à 9" onclick="Animer('avatarT8','non')"></td>
                                <td><label for="7 à 9">7 à 9</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ2" id="10 et plus" value = "10 et plus" onclick="Animer('avatarT8','non')"></td>
                                <td><label for="10 et plus">10 et plus</label></td>
                            </tr>

                        </table></div>

                </div>
                <!-- Création boutons précédent et suivant -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>
            
            </div>

            <!-- Q3 supplémentaire sur l'alcool -->

            <div class="page" id="page11">

                <h1>Alcool</h1>

            <div>
                <label for="AQ3"> Est ce que votre entourage vous a fait des remarques concernant votre consommation d'alcool ? :</label>
                <div id="conteneur">
                    <div id="droite9">
                    </div>
                        <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="AQ3" id="Oui" value = "Oui" onclick="Animer('avatarJ9','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ3" id="Non" value = "Non" onclick="Animer('avatarT9','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                        </table></div>
    

                </div>
                <!-- Création boutons précédent et suivant -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>
            
            </div>    

            <!-- Q4 supplémentaire sur l'alcool -->

            <div class="page" id="page12">

                <h1>Alcool</h1>

            <div>
                <label for="AQ4">Vous est-il arrivé de consommer de l'alcool le matin pour vous sentir en forme ? :</label>
                <div id="conteneur">
                    <div id="droite10">
                    </div>
                        <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="AQ4" id="Oui" value = "Oui" onclick="Animer('avatarT10','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ4" id="Non" value = "Non" onclick="Animer('avatarJ10','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                        </table></div>

            </div>
    

                <!-- Création boutons précédent et suivant -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Q5 supplémentaire sur l'alcool -->

            <div class="page" id="page13">

                 <h1>Alcool</h1>

            <div>

                <label for="AQ4">Vous est-il arrivé de boire et de ne plus vous souvenir le matin de ce que vous avez pu dire ou faire ? :</label>
                <div id="conteneur">
                    <div id="droite11">
                    </div>
                        <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="AQ5" id="Oui" value = "Oui" onclick="Animer('avatarT11','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AQ5" id="Non" value = "Non" onclick="Animer('avatarJ11','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons précédent et suivant -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>

        
            <!-- Création Page 14 -->

            <div class="page" id="page14">

            <!-- Q9 : Choix conso Tabac --> 


            <h1>Tabac</h1>

            <div>
                <label for="Tabac"> Consommez vous du tabac ?</label>
                <div id="conteneur">
                    <div id="droite12">
                    </div>
                        <table style="line-height: 150%;margin-left:33%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="Tabac" id="Oui" value = "Oui" onclick="Animer('avatarT12','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Tabac" id="Non" value = "Non" onclick="Animer('avatarJ12','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Tabac" id="Occasionnellement" value = "Occasionnellement" onclick="Animer('avatarJ12','non')"></td>
                                <td><label for="Occasionnellement">Occasionnellement</label></td>
                            </tr>

                        </table></div>

            </div>
                <!-- Création boutons suivants et terminer -->
                <button class="prevA" type="button">Précédent</button>
                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Q1 question supplémentaire Tabac -->

            <div class="page" id="page15">

                <!-- Q3 : Echelle motivationelle tabac -->

                <h1>Echelle motivationnelle Tabac</h1>
                <div class = "slidecontainer">
                <label for="TQ1"> A quel point est-il important pour vous d'arrêter de fumer ?</label>
                    <div id="conteneur">
                        <div id="droite13">
                        </div>
                            <input type="range" min="0" max="10" step="1" class="slider" name ="TQ1" id="TQ1" list="tickmarks">
                            <datalist id="tickmarks">
                                <option value="0" label="0 : Ce n'est pas important" onclick="Animer('avatarT13','non')"></option>
                                <option value="1" onclick="Animer('avatarT13','non')"></option>
                                <option value="2" onclick="Animer('avatarT13','non')"></option>
                                <option value="3" onclick="Animer('avatarT13','non')"></option>
                                <option value="4" onclick="Animer('avatarT13','non')"></option>
                                <option value="5" onclick="Animer('avatarJ13','non')"></option>
                                <option value="6" onclick="Animer('avatarJ13','non')"></option>
                                <option value="7" onclick="Animer('avatarJ13','non')"></option>
                                <option value="8" onclick="Animer('avatarJ13','non')"></option>
                                <option value="9" onclick="Animer('avatarJ13','non')"></option>
                                <option value="10" label="10 : C'est très important" onclick="Animer('avatarJ13','non')"></option>
                            </datalist></div>
                </div>
                    
                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>


            <!-- Création Page 15 -->

            <div class="page" id="page15">

            <!-- Q10: choix conso Cannabis -->

                <h1>Cannabis</h1>

            <div>
                <label for="Cannabis"> Consommez vous du cannabis ? :</label>
                <radio onchange="afficheBtnC()" class = "Alcool" name="Alcool" id="AlcID" required>
                    <div id="conteneur">
                        <div id="droite14">
                        </div>
                            <table style="line-height: 150%;margin-left:33%;margin-right:25%" cellspacing="30">

                                <tr>
                                    <td><input type="radio" name="Cannabis" id="CanID1" value = "Oui" onclick="Animer('avatarT14','non')"></td>
                                    <td><label for="Oui">Oui</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="Cannabis" id="CanID2" value = "Non" onclick="Animer('avatarJ14','non')"></td>
                                    <td><label for="Non">Non</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="Cannabis" id="CanID3" value = "Occasionnellement" onclick="Animer('avatarJ14','non')"></td>
                                    <td><label for="Occasionnellement">Occasionnellement</label></td>
                                </tr>

                            </table></div>
            </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" id="BtnPrecC" type="button">Précédent</button>
                <button class="next" id= "BtnSuivC" type="button">Suivant</button>
                <button class="nextC" id="BtnSuivAC" type="button">Suivant</button>


            </div>

            <!-- Q1 supplémentaire sur le cannabis -->

            <div class="page" id="page16">

                 <h1>Cannabis</h1>

            <div>

                <label for="CQ1">Avez-vous déjà fumé du cannabis avant midi ?</label>
                <div id="conteneur">
                    <div id="droite15">
                    </div>
                        <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="CQ1" id="Oui" value = "Oui" onclick="Animer('avatarT15','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="CQ1" id="Non" value = "Non" onclick="Animer('avatarJ15','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Q2 supplémentaire sur le cannabis -->

            <div class="page" id="page17">

                 <h1>Cannabis</h1>

            <div>

                <label for="CQ2">Avez-vous déjà fumé du cannabis lorque vous étiez seul(e) ?</label>
                <div id="conteneur">
                    <div id="droite16">
                    </div>
                        <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="CQ2" id="Oui" value = "Oui" onclick="Animer('avatarT16','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="CQ2" id="Non" value = "Non" onclick="Animer('avatarJ16','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Q3 supplémentaire sur le cannabis -->

            <div class="page" id="page18">

                 <h1>Cannabis</h1>

            <div>

                <label for="CQ3">Avez-vous déjà eu des problèmes de mémoire quand vous fumez du cannabis ?</label>
                <div id="conteneur">
                    <div id="droite17">
                    </div>
                        <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="CQ3" id="Oui" value = "Oui" onclick="Animer('avatarT17','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="CQ3" id="Non" value = "Non" onclick="Animer('avatarJ17','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>


            <!-- Q4 supplémentaire sur le cannabis -->

            <div class="page" id="page19">

                 <h1>Cannabis</h1>

            <div>

                <label for="CQ4">Des amis ou des membres de votre famille vous ont-ils déjà dit que vous devriez réduire votre consommation de cannabis?</label>
                <div id="conteneur">
                    <div id="droite18">
                    </div>
                        <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="CQ4" id="Oui" value = "Oui" onclick="Animer('avatarJ18','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="CQ4" id="Non" value = "Non" onclick="Animer('avatarT18','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Q5 supplémentaire sur le cannabis -->

            <div class="page" id="page20">

                 <h1>Cannabis</h1>

            <div>

                <label for="CQ5">Avez-vous déjà essayé de réduire ou d'arrêter votre consommation de cannabis sans y parvenir ?</label>
                <div id="conteneur">
                    <div id="droite19">
                    </div>
                        <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="CQ5" id="Oui" value = "Oui" onclick="Animer('avatarJ19','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="CQ5" id="Non" value = "Non" onclick="Animer('avatarT19','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Q6 supplémentaire sur le cannabis -->

            <div class="page" id="page21">

                 <h1>Cannabis</h1>

            <div>

                <label for="CQ6">Avez-vous déjà eu des problèmes à cause de votre consommation de cannabis (dispute, bagarre, accident, mauvais résultat à l'école, etc.)?</label>
                <div id="conteneur">
                    <div id="droite20">
                    </div>
                        <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="CQ6" id="Oui" value = "Oui" onclick="Animer('avatarT20','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="CQ6" id="Non" value = "Non" onclick="Animer('avatarJ20','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>


            <!-- Création Page 21 -->

            <div class="page" id="page21">

                <!-- Q11: choix conso Héroine, cocaine -->

                <h1>Héroine, cocaine</h1>

            <div>
                <label for="HeroineCocaine"> Consommez vous de l'héroine ou de la cocaine? :</label>
                <div id="conteneur">
                    <div id="droite21">
                    </div>
                        <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="HeroineCocaine" id="Oui" value = "Oui" onclick="Animer('avatarT21','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="HeroineCocaine" id="Non" value = "Non" onclick="Animer('avatarJ21','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="HeroineCocaine" id="Occasionnellement" value = "Occasionnellement" onclick="Animer('avatarJ21','non')"></td>
                                <td><label for="Occasionnellement">Occasionnellement</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>


            <!-- Création Page 22 -->

            <div class="page" id="page22">

                <!-- Q12: choix conso Autres substances -->

                <h1>Autres substances</h1>

            <div>
                <label for="AutresSubstances"> Consommez vous d'autres substances telles que le gaz hilarant, du LSD, de l'extasie ou des médicaments?</label>
                <div id="conteneur">
                    <div id="droite22">
                    </div>
                        <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="AutresSubstances" id="Oui" value = "Oui" onclick="Animer('avatarT22','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AutresSubstances" id="Non" value = "Non" onclick="Animer('avatarJ22','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AutresSubstances" id="Occasionnellement" value = "Occasionnellement" onclick="Animer('avatarJ22','non')"></td>
                                <td><label for="Occasionnellement">Occasionnellement</label></td>
                            </tr>

                        </table></div>

            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>

            <!-- Création Page 23 -->

            <div class="page" id="page23">

                <!-- Q13: Autres pratiques -->

                <h1> AutresPratiques </h1>

            <div>
                <label for="AutresPratiques"> Les pratiques suivantes : Jeux d'argent, jeux vidéo, sexe, sport, écrans, ont elles un impact sur votre vie personelle où professionelle (financier, isolement, perte de travail, perte de réseau social...) :</label>
                <div id="conteneur">
                    <div id="droite23">
                    </div>
                        <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                            <tr>
                                <td><input type="radio" name="AutresPratiques" id="Oui" value = "Oui" onclick="Animer('avatarT23','non')"></td>
                                <td><label for="Oui">Oui</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AutresPratiques" id="Non" value = "Non" onclick="Animer('avatarJ23','non')"></td>
                                <td><label for="Non">Non</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="AutresPratiques" id="Occasionnellement" value = "Occasionnellement" onclick="Animer('avatarJ23','non')"></td>
                                <td><label for="Occasionnellement">Occasionnellement</label></td>
                            </tr>

                        </table></div>

            </div>

            <!-- Création boutons précédant et suivant -->

            <button class="prev" type="button">Précédent</button>
            <button class="next" type="button">Suivant</button>
            
            </div>


            <!-- Création page 24 -->
            <div class="page" id="page24">
                <h3>Carte de France interactive des régions</h3>
                <img src="./Image/carteSarthe.png" alt="Les régions de France" usemap="#reg" width="400">
                <map name="reg">
                  <area
                      shape="poly"
                      coords="443,563,423,563,400,558,401,572,385,588,371,602,376,615,366,616,366,632,353,644,313,648,
                      292,656,288,681,301,694,304,708,286,732,283,746,301,764,346,765,348,752,422,779,434,799,456,792,
                      476,800,511,793,508,738,534,716,558,698,582,701,600,676,608,676,610,659,620,647,607,628,568,622,
                      546,574,524,564,501,591,486,566,468,592,451,590"
                      href="#"
                      alt="Occitanie">
                  <area
                      shape="poly"
                      coords="281,428,268,436,254,432,238,446,244,471,235,480,266,526,242,504,229,578,243,583,231,588,
                      211,676,188,696,215,707,207,720,216,714,235,732,255,736,266,753,279,748,298,713,300,692,286,681,
                      291,655,305,646,325,642,344,642,359,632,364,612,374,611,368,600,400,569,399,556,415,556,424,562,
                      443,558,451,540,459,522,471,523,464,503,469,496,463,483,475,469,467,441,454,430,421,430,410,434,
                      391,434,371,413,371,402,358,384,337,380,330,366,318,360,308,367,290,365,281,371,265,375"
                      href="#"
                      alt="Aquitaine">
                  <area
                      shape="poly"
                      coords="167,326,189,321,193,307,220,306,232,295,241,299,249,285,256,280,255,258,256,239,277,241,
                      303,238,308,233,319,252,339,241,347,258,374,272,369,292,359,308,343,321,331,326,322,356,308,364,
                      284,364,269,375,276,424,273,434,258,433,243,429,235,437,202,415,183,380,194,364,180,357,195,340,168,342"
                      href="#"
                      alt="Pays de la loire">
                  <area
                      shape="poly"
                      coords="259,235,259,252,255,256,257,278,248,282,243,300,232,294,217,301,199,306,188,313,169,322,
                      142,318,151,308,128,309,107,297,87,285,68,278,55,282,38,260,63,253,46,242,35,229,39,216,84,206,
                      104,212,113,202,140,198,160,231,177,218,195,220,203,233,208,218,227,222,238,239"
                      href="#"
                      alt="Bretagne">
                  <area
                      shape="poly"
                      coords="231,225,238,238,248,230,269,237,284,240,312,234,323,252,345,243,353,263,369,268,370,257,
                      381,237,374,225,409,215,413,196,428,174,427,134,406,100,353,121,331,144,343,157,308,168,256,160,
                      249,138,247,127,213,123,229,172,234,197"
                      href="#"
                      alt="Normandie">
                  <area
                      shape="poly"
                      coords="422,27,416,79,422,88,410,99,429,125,426,151,430,173,449,179,486,189,508,186,531,210,541,
                      193,537,183,546,182,541,164,563,163,562,139,573,127,568,104,568,81,544,76,535,63,523,62,516,45,501,35,496,45,478,8"
                      href="#"
                      alt="hauts-de-france">
                  <area
                      shape="poly"
                      coords="425,175,421,187,409,190,419,222,439,259,468,260,472,271,496,274,505,256,527,252,535,232,
                      529,216,511,196,511,187,483,192"
                      href="#"
                      alt="ile-de-france">
                  <area
                      shape="poly"
                      coords="410,204,403,216,374,222,378,246,368,254,374,273,368,294,356,313,343,320,331,327,319,362,
                      336,380,352,374,377,412,403,434,457,428,473,416,483,402,502,395,499,356,494,347,491,327,498,325,
                      491,310,504,304,508,288,499,272,469,274,463,260,438,260,437,249"
                      href="#"
                      alt="Centre-val de loire">
                  <area
                      shape="poly"
                      coords="608,94,600,107,575,108,575,128,563,140,563,163,539,166,543,180,540,195,528,218,535,232,
                      526,250,557,289,606,284,643,322,665,309,683,288,723,288,756,324,769,331,778,316,780,275,787,251,
                      789,228,810,189,763,176,743,177,730,174,715,170,711,157,691,149,681,156,664,145,646,148,628,127,608,124"
                      href="#"
                      alt="Grand est">
                  <area
                      shape="poly"
                      coords="511,256,501,273,509,291,506,304,497,311,501,324,497,345,507,397,537,411,541,400,561,426,561,
                      445,584,451,593,439,605,438,612,450,624,417,639,421,658,440,668,436,683,439,692,428,700,408,716,392,
                      717,375,750,340,745,326,754,327,742,302,718,291,692,287,672,301,665,312,650,316,635,319,617,309,615,292,562,292,535,260"
                      href="#"
                      alt="Bourgogne-franche-comte">
                  <area
                      shape="poly"
                      coords="501,395,481,406,476,420,457,426,471,449,472,469,462,482,471,520,460,524,442,559,448,588,467,587,487,
                      566,498,588,510,568,525,557,531,573,544,572,569,619,582,624,607,622,630,617,660,632,672,627,660,602,670,598,
                      700,569,716,564,707,544,723,550,764,528,763,514,743,491,742,477,754,468,739,450,742,437,732,428,706,434,703,
                      445,690,450,696,430,680,439,656,440,636,421,619,429,614,447,590,442,580,450,562,448,561,436,563,428,540,401,515,408"
                      href="#"
                      alt="Auvergne rhone-alpes">
                  <area
                      shape="poly"
                      coords="609,620,622,646,608,657,607,674,597,676,587,691,604,704,624,704,634,702,653,704,689,727,711,724,742,717,741,
                      703,751,692,773,681,778,670,797,661,806,635,786,630,760,620,750,595,759,578,743,560,734,544,711,544,718,565,687,579,
                      674,595,662,610,677,626,662,633,636,621"
                      href="#"
                      alt="Provence-alpes-cote azur">
                </map>

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>
            </div>

            <!-- Création page 25 -->

            <div class="page" id="page25">

                <!-- fin du questionnaire-->

                <h2>Fin du questionnaire</h2>

                <h4>Ce questionnaire vous a permis de réaliser une première évaluation de vos habitudes de vie, nous vous encourageons à les approfondir en prenant contact avec votre médecin traitant ou un autre professionnel de santé.
                </h4>

            <div>
                <label for="Sondage"> Ce questionnaire vous apparait-il utile? </label>

                <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="Sondage" id="Pas du tout" value="Pas du tout"></td>
                        <td><label for="Pas du tout"> Pas du tout</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="Sondage" id="moyennement" value="moyennement"></td>
                        <td><label for="moyennement"> moyennement</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="Sondage" id="Beaucoup" value="Beaucoup"></td>
                        <td><label for="Beaucoup"> Beaucoup</label></td>
                    </tr>

                </table>

            </div>

            <!-- Création boutons suivant et terminer -->

            <button class="prev" type="button">Précédent</button>
            <button>Terminer</button>
                
            </div>

        </form>


   

    </main>

    
<script src="js/scripts.js"></script>
</body>
</html>