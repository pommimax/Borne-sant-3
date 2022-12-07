<!--Projet Borne connectée en santée, ESEO-CHM, septembre 2022 - janvier 2023
Equipe composée de Roxane LAIGNEAU, Julia Body, Marie LOMBART et Maxime POMMIER
Page contenant le code PHP de notre projet
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
<body>
    <main>
        <header>
        </header>

       
        <!-- début du questionnaire-->

        <form action="insert.php" method="post">

            <!-- Page 1 : page d'acceuil du patient pour attirer sur questionnaire -->      

            <div class="page" id="page1">

                <h1> Vous avez 2 minutes ?                
                </h1>

                <h2>
             Evaluez votre état de santé à travers ce questionnaire totalement anonyme, gratuit et sans aucun engagement de votre part   
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

<<<<<<< Updated upstream
                    <table style="line-height: 150%;margin-left:35%;margin-right:15%" cellspacing="30">

                        <tr>
                            <td><input type="radio" name="Age" id="De 0 à 20 ans" value = "20"></td>
                            <td><label for="De 0 à 20 ans"> De 0 à 20 ans </label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Age" id="De 21 a 44 ans" value = "44"></td>
                            <td><label for="De 21 a 44 ans"> De 21 a 44 ans </label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Age" id="De 45 a 64 ans" value = "64"></td>
                            <td><label for="De 45 a 64 ans">De 45 a 64 ans</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Age" id="De 65 a 69 ans" value = "69"></td>
                            <td><label for="De 65 a 69 ans">De 65 a 69 ans</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Age" id="70 ans et plus" value = "70"></td>
                            <td><label for="70 ans et plus"> 70 ans et plus</label></td>
                        </tr>

                    </table>
=======
                    <div>
                        <input type="radio" name="Age" id="De 0 à 20 ans" value = "De 0 à 20 ans">
                        <label for="De 0 à 20 ans"> De 0 à 20 ans </label>
                    </div>

                    <div>
                        <input type="radio" name="Age" id="De 21 a 44 ans" value = "De 21 a 44 ans">
                        <label for="De 21 a 44 ans"> De 21 a 44 ans </label>
                    </div>

                    <div>
                        <input type="radio" name="Age" id="De 45 a 64 ans" value = "De 45 a 64 ans">
                        <label for="De 45 a 64 ans">De 45 a 64 ans</label>
                    </div>

                    <div>
                        <input type="radio" name="Age" id="De 65 a 69 ans" value = "De 65 a 69 ans">
                        <label for="De 65 a 69 ans">De 65 a 69 ans</label>
                    </div>

                    <div>
                        <input type="radio" name="Age" id="70 ans et plus" value = "70 ans et plus">
                        <label for="70 ans et plus"> 70 ans et plus</label>
                    </div>
>>>>>>> Stashed changes
                </div>

                <!-- Création bouton suivant -->
                <button class="next" type="button" onclick="getAge()">Suivant</button>

            </div>


            <!-- Création de la page 3-->

            <div class="page" id="page3">

                <!-- Q2 : Sexe de l'utilisateur -->
                <h1>Sexe</h1>

                <div>

                <label for="Sexe">Sexe:</label>

                    <table style="line-height: 150%;margin-left:40%;margin-right:50%" cellspacing="30">
                        <tr>
                            <td><input type="radio" name="Sexe" id="Homme" value = "Homme"></td>
                            <td><label for="Homme"> Homme </label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Sexe" id="Femme" value = "Femme"></td>
                            <td><label for="Femme"> Femme </label></td>
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

                <h1>Qualification santé</h1>
                <div id="conteneur">
                    <div id="droite1">
                    </div>
                <div class = "slidecontainer">
                <label for="Sante"> Comment qualifiriez vous votre santé ?</label>
                <input type="range" min="0" max="100" class="slider" name ="Sante" id="sante" onchange="ChoixSlider()">
                <p> Value : <span id="demo"></span></p>
                </div></div>
                    
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
                                <td><label for="Bonne">Bonne</label></td>
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

<<<<<<< Updated upstream
                            <tr>
                                <td><input type="radio" name="Corpulence" id="Beaucoup trop maigre" value = "Beaucoup trop maigre" onclick="Animer('avatarT4','<a href=http://www.caloris.fr/calcul-imc.php>Calculer votre IMC</a>')"></td>
                                <td><label for="Beaucoup trop maigre">Beaucoup trop maigre</label></td>
                            </tr>
=======
                    <div>
                        <input type="radio" name="Corpulence" id="D un poids normal" value = "D un poids normal">
                        <label for="D un poids normal">D un poids normal</label>
                    </div>
>>>>>>> Stashed changes

                            <tr>
                                <td><input type="radio" name="Corpulence" id="Un peu trop maigre" value = "Un peu trop maigre" onclick="Animer('avatarT4','<a href=http://www.caloris.fr/calcul-imc.php>Calculer votre IMC</a>')"></td>
                                <td><label for="Un peu trop maigre">Un peu trop maigre</label></td>
                            </tr>

                            <tr>
                                <td><input type="radio" name="Corpulence" id=" D un poids normal" value = " D un poids normal" onclick="Animer('avatarJ4','non')"></td>
                                <td><label for=" D un poids normal"> D un poids normal</label></td>
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

        

            <!-- Création Page 8-->

            <div class="page" id="page8">

                <!-- Q7 : Sommeil -->

                 <h1>Sommeil</h1>

            <div>
                <label for="Sommeil"> Comment évaluez-vous votre qualité du Sommeil :</label>

                <table style="line-height: 150%;margin-left:38%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="Sommeil" id="Excellente" value = "Excellente"></td>
                        <td><label for="Excellente">Excellente</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="Sommeil" id="Tres bonne" value = "Tres bonne"></td>
                        <td><label for="Tres bonne">Tres bonne</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="Sommeil" id="Bonne" value = "Bonne"></td>
                        <td><label for="Bonne">Bonne</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="Sommeil" id="Moyenne" value = "Moyenne"></td>
                        <td><label for="Moyenne">Moyenne</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="Sommeil" id="Mauvaise" value = "Mauvaise"></td>
                        <td><label for="Mauvaise">Mauvaise</label></td>
                    </tr>

                </table>

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

                    <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                        <tr>
                            <td><input type="radio" class="Alcool" name="Alcool" id="AlcID1" value = "Oui"></td>
                            <td><label for="Oui">Oui</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" class="Alcool" name ="Alcool" id="AlcID2" value = "Non"></td>
                            <td><label for="Non">Non</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" class="Alccol"name="Alcool"id="AlcID3" value = "Occasionnellement"></td>
                            <td><label for="Occasionnellement">Occasionnellement</label></td>
                        </tr>

                    </table>

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

                <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="AQ1" id="Jamais" value = "Jamais"></td>
                        <td><label for="Jamais">Jamais</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AQ1" id="1 fois par mois" value = "1 fois par mois"></td>
                        <td><label for="1 fois par mois">1 fois par mois</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AQ1" id="2 à 4 fois par mois" value = "2 à 4 fois par mois"></td>
                        <td><label for="2 à 4 fois par mois">2 à 4 fois par mois</label></td>
                    </tr>

                </table>

                </div>
                <!-- Création boutons précédent et suivant -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>
            
            </div>


                <!-- Q2 supplémentaire sur l'alcool -->

            <div class="page" id="page10">

                   <h1>Alcool</h1>

            <div>
                <label for="AQ1"> Combien de verres standard buvez-vous les jours où vous buvez de l'alcool ? :</label>

                <table style="line-height: 150%;margin-left:38%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="AQ2" id="1 ou 2" value = "1 ou 2"></td>
                        <td><label for="1 ou 2">1 ou 2</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AQ2" id="3 ou 4" value = "3 ou 4"></td>
                        <td><label for="3 ou 4">3 ou 4</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AQ2" id="5 ou 6" value = "5 ou 6"></td>
                        <td><label for="5 ou 6">5 ou 6</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AQ2" id="7 à 9" value = "7 à 9"></td>
                        <td><label for="7 à 9">7 à 9</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AQ2" id="10 et plus" value = "10 et plus"></td>
                        <td><label for="10 et plus">10 et plus</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="AQ3" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AQ3" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                </table>
    

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

                <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="AQ4" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AQ4" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="AQ5" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AQ5" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:33%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="Tabac" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="Tabac" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="Tabac" id="Occasionnellement" value = "Occasionnellement"></td>
                        <td><label for="Occasionnellement">Occasionnellement</label></td>
                    </tr>

                </table>

            </div>
                <!-- Création boutons suivants et terminer -->
                <button class="prevA" type="button">Précédent</button>
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

                    <table style="line-height: 150%;margin-left:33%;margin-right:25%" cellspacing="30">

                        <tr>
                            <td><input type="radio" name="Cannabis" id="CanID1" value = "Oui"></td>
                            <td><label for="Oui">Oui</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Cannabis" id="CanID2" value = "Non"></td>
                            <td><label for="Non">Non</label></td>
                        </tr>

                        <tr>
                            <td><input type="radio" name="Cannabis" id="CanID3" value = "Occasionnellement"></td>
                            <td><label for="Occasionnellement">Occasionnellement</label></td>
                        </tr>

                    </table>
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

                <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="CQ1" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="CQ1" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="CQ2" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="CQ2" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="CQ3" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="CQ3" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="CQ4" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="CQ4" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="CQ5" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="CQ5" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:42%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="CQ6" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="CQ6" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="HeroineCocaine" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="HeroineCocaine" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="HeroineCocaine" id="Occasionnellement" value = "Occasionnellement"></td>
                        <td><label for="Occasionnellement">Occasionnellement</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="AutresSubstances" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AutresSubstances" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AutresSubstances" id="Occasionnellement" value = "Occasionnellement"></td>
                        <td><label for="Occasionnellement">Occasionnellement</label></td>
                    </tr>

                </table>

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

                <table style="line-height: 150%;margin-left:35%;margin-right:25%" cellspacing="30">

                    <tr>
                        <td><input type="radio" name="AutresPratiques" id="Oui" value = "Oui"></td>
                        <td><label for="Oui">Oui</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AutresPratiques" id="Non" value = "Non"></td>
                        <td><label for="Non">Non</label></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="AutresPratiques" id="Occasionnellement" value = "Occasionnellement"></td>
                        <td><label for="Occasionnellement">Occasionnellement</label></td>
                    </tr>

                </table>

            </div>

            <!-- Création boutons précédant et suivant -->

            <button class="prev" type="button">Précédent</button>
            <button class="next" type="button">Suivant</button>
            
            </div>

            <!-- Création page 24 -->

            <div class="page" id="page24">

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