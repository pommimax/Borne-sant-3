<!DOCTYPE html>

<!-- Page html dédiée au questionnaire 
    Pommier maxime  ---  2022-->

<!-- salut c'est julia la grosse méchante -->
<!--coucou c max-->
<!--salut c est marie--> 
<!--salut c est roxane-->

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

            <!-- Création de la page 1-->

            <div class="page" id="page1">

                <!-- Q1 : Age de l'utilisateur, sous forme de tranche, adapter ensuite le questionnaire -->

                <h1>Age</h1>

                <div>

                <label for="Age"> Quel âge avez vous ?</label>

                    <div>
                        <input type="radio" name="Age" id="moins de 20 ans" value = "moins de 20 ans">
                        <label for="moins de 20 ans"> moins de 20 ans </label>
                    </div>

                    <div>
                        <input type="radio" name="Age" id="De 20 a 44 ans" value = "De 20 a 44 ans">
                        <label for="De 20 a 44 ans"> De 20 a 44 ans </label>
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
                </div>

                <!-- Création bouton suivant -->
                <button class="next" type="button">Suivant</button>

            </div>


            <!-- Création de la page 2-->

            <div class="page" id="page2">

                <!-- Q2 : Sexe de l'utilisateur -->
                <h1>Sexe</h1>

                <div>

                <label for="Sexe">Votre sexe</label>
                    <div>
                        <input type="radio" name="Sexe" id="masculin" value = "masculin">
                        <label for="masculin"> Masculin </label>
                    </div>

                    <div>
                        <input type="radio" name="Sexe" id="feminin" value = "feminin">
                        <label for="feminin"> Feminin </label>
                    </div>

                    <div>
                        <input type="radio" name="Sexe" id="Autres" value = "Autres">
                        <label for="Autres">Autres</label>
                    </div>

                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Création de la page 3-->

            <div class="page" id="page3">

                <!-- Q3 : Qualification de sa santé -->

                <h1>Qualification santé</h1>
                <div>
                <label for="Sante"> Comment qualifiriez vous votre santé ?</label>

                    <div>
                        <input type="radio" name="Sante" id="Excellente" value = "Excellente">
                        <label for="Excellente">Excellente</label>
                    </div>

                    <div>
                        <input type="radio" name="Sante" id="Tres bonne" value = "Tres bonne">
                        <label for="Tres bonne"> Tres bonne </label>
                    </div>

                    <div>
                        <input type="radio" name="Sante" id="Bonne" value = "Bonne">
                        <label for="Bonne">Bonne</label>
                    </div>

                    <div>
                        <input type="radio" name="Sante" id="Mauvaise" value = "Mauvaise">
                        <label for="Mauvaise">Mauvaise</label>
                    </div>

                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Création Page 4-->

            <div class="page" id="page4">

                <!-- Q4 : Activité physique -->

                <h1>Activité physique</h1>
                <div>
                <label for="ActivitePhysique"> Pratiquez-vous une activité physique quotidienne suffisante ? (marche, jardinage, vélo, ménage…) 
                </label>

                    <div>
                        <input type="radio" name="ActivitePhysique" id="Oui" value = "Oui">
                        <label for="Oui"> Oui </label>
                    </div>

                    <div>
                        <input type="radio" name="ActivitePhysique" id="Non" value = "Non">
                        <label for="Non">Non</label>
                    </div>

                    <div>
                        <input type="radio" name="Ne sais pas" id="Ne sais pas" value = "Ne sais pas">
                        <label for="Ne sais pas">Ne sais pas</label>
                    </div>

                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>

            <!-- Création Page 5-->

            <div class="page" id="page5">

                <!-- Q5 : Corpulence -->

                <h1>Corpulence</h1>

                <div>
                <label for="Corpulence"> Considérez-vous que vous êtes :</label>

                    <div>
                        <input type="radio" name="Corpulence" id="Beaucoup trop maigre" value = "Beaucoup trop maigre">
                        <label for="Beaucoup trop maigre">Beaucoup trop maigre</label>
                    </div>

                    <div>
                        <input type="radio" name="Corpulence" id="Un peu trop maigre" value = "Un peu trop maigre">
                        <label for="Un peu trop maigre">Un peu trop maigre</label>
                    </div>

                    <div>
                        <input type="radio" name="Corpulence" id=" D un poids normal" value = " D un poids normal">
                        <label for=" D un poids normal"> D un poids normal</label>
                    </div>

                    <div>
                        <input type="radio" name="Corpulence" id="Un peu trop gros(se)" value = "Un peu trop gros(se)">
                        <label for="Un peu trop gros(se)">Un peu trop gros(se)</label>
                    </div>

                    <div>
                        <input type="radio" name="Corpulence" id="Beaucoup trop gros(se)" value = "Beaucoup trop gros(se)">
                        <label for="Beaucoup trop gros(se)">Beaucoup trop gros(se)</label>
                    </div>

                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

                
            </div>

        

            <!-- Création Page 6-->

            <div class="page" id="page6">

                <!-- Q6 : Sommeil -->

                 <h1>Sommeil</h1>

            <div>
                <label for="Sommeil"> Comment évaluez-vous votre qualité du Sommeil :</label>

                <div>
                    <input type="radio" name="Sommeil" id="Excellente" value = "Excellente">
                    <label for="Excellente">Excellente</label>
                </div>
                <div>
                    <input type="radio" name="Sommeil" id="Tres bonne" value = "Tres bonne">
                    <label for="Tres bonne">Tres bonne</label>
                </div>
                <div>
                    <input type="radio" name="Sommeil" id="Bonne" value = "Bonne">
                    <label for="Bonne">Bonne</label>
                </div>
                <div>
                    <input type="radio" name="Sommeil" id="Moyenne" value = "Moyenne">
                    <label for="Moyenne">Moyenne</label>
                </div>
                <div>
                    <input type="radio" name="Sommeil" id="Mauvaise" value = "Mauvaise">
                    <label for="Mauvaise">Mauvaise</label>
                </div>
            </div>

                <!-- Création boutons précedent et suivant -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>
    
            </div>


        <!-- Nouveau formulaire pour conso -->

            <!-- Création Page 7 -->

            <div class="page" id="page7">

                <!-- Q7 : Choix conso alcool -->

                <h1>Alcool</h1>

            <div>
                <label for="Alcool"> Consommez vous de l'alcool? :</label>
                <radio onchange="change()" name="Alcool" id="Alcool" required>
                <div>
                    <input type="radio" name="Alcool" id="Oui" value = "Oui">
                    <label for="Oui">Oui</label>
                </div>
                <div>
                    <input type="radio" name="Alcool" id="Non" value = "Non">
                    <label for="Non">Non</label>
                </div>
                <div>
                    <input type="radio" name="Alcool" id="Occasionnellement" value = "Occasionnellement">
                    <label for="Occasionnellement">Occasionnellement</label>
                </div>
            </div>

                <!-- Q1 supplémentaire sur l'alcool -->

                <div id="CAQ1" class="CAQ">
                    
                    <label for="AQ1">A quelle fréquence consommez vous de l'Alcool ?  :</label>
                    <select name="AQ1" id="AQ1">
                    <option value="" disabled selected hidden> Choisissez la réponse</option>
                    <option value="Jamais">Jamais</option>
                    <option value="1 fois par mois">1 fois par mois</option>
                    <option value="2 à 4 fois par mois">2 à 4 fois par mois</option>
                    </select>                
                </div>

                <!-- Q2 supplémentaire sur l'alcool -->

                 <div id="CAQ2" class="CAQ">
                    
                    <label for="AQ2">Combien de verres standard buvez-vous les jours où vous buvez de l'alcool ?  :</label>
                    <select name="AQ2" id="AQ2">
                    <option value="" disabled selected hidden> Choisissez la réponse</option>
                    <option value="1 ou 2"> 1 ou 2</option>
                    <option value="3 ou 4"> 3 ou 4</option>
                    <option value="5 ou 6"> 5 ou 6</option>
                    <option value="7 à 9"> 7 à 9</option>
                    <option value="10 et plus"> 10 et plus</option>
                    </select>                

                </div>

                <!-- Q3 supplémentaire sur l'alcool -->

                 <div id="CAQ3" class="CAQ">
                    
                    <label for="AQ3">Est ce que votre entourage vous a fait des remarques concernant votre consomation d'alcool ?  :</label>
                    <select name="AQ3" id="AQ3">
                    <option value="" disabled selected hidden> Choisissez la réponse</option>
                    <option value="Oui"> Oui</option>
                    <option value="Non"> Non</option>
                    </select>             

                </div>


                <!-- Q4 supplémentaire sur l'alcool -->

                 <div id="CAQ4" class="CAQ">
                    
                    <label for="AQ4">Vous est-il arrivé de consommer de l'alcool le matin pour vous sentir en forme?  :</label>
                    <select name="AQ4" id="AQ4">
                    <option value="" disabled selected hidden> Choisissez la réponse</option>
                    <option value="Oui"> Oui</option>
                    <option value="Non"> Non</option>
                    </select>             

                </div>


                <!-- Q5 supplémentaire sur l'alcool -->

                 <div id="CAQ5" class="CAQ">
                    
                    <label for="AQ5">Vous est-il arrivé de boire et de ne plus vous souvenir le matin de ce que vous avez pu dire ou faire ?  :</label>
                    <select name="AQ5" id="AQ5">
                    <option value="" disabled selected hidden> Choisissez la réponse</option>
                    <option value="Oui"> Oui</option>
                    <option value="Non"> Non</option>
                    </select>             

                </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>

        
             <!-- Création Page 8 -->

            <div class="page" id="page8">

                <!-- Q8 : Choix conso Tabac --> 


            <h1>Tabac</h1>

            <div>
                <label for="Tabac"> Consommez vous du tabac? :</label>
                <div>
                    <input type="radio" name="Tabac" id="Oui" value = "Oui">
                    <label for="Oui">Oui</label>
                </div>
                <div>
                    <input type="radio" name="Tabac" id="Non" value = "Non">
                    <label for="Non">Non</label>
                </div>
                <div>
                    <input type="radio" name="Tabac" id="Occasionnellement" value = "Occasionnellement">
                    <label for="Occasionnellement">Occasionnellement</label>
                </div>
            </div>


                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>


            <!-- Création Page 9 -->

            <div class="page" id="page9">

                <!-- Q9: choix conso Cannabis -->

                <h1>Cannabis</h1>

            <div>
                <label for="Cannabis"> Consommez vous du cannabis? :</label>
                <div>
                    <input type="radio" name="Cannabis" id="Oui" value = "Oui">
                    <label for="Oui">Oui</label>
                </div>
                <div>
                    <input type="radio" name="Cannabis" id="Non" value = "Non">
                    <label for="Non">Non</label>
                </div>
                <div>
                    <input type="radio" name="Cannabis" id="Occasionnellement" value = "Occasionnellement">
                    <label for="Occasionnellement">Occasionnellement</label>
                </div>
            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>

            <!-- Création Page 10 -->

            <div class="page" id="page10">

                <!-- Q10: choix conso Héroine, cocaine -->

                <h1>Héroine, cocaine</h1>

            <div>
                <label for="HeroineCocaine"> Consommez vous de l'héroine ou de la cocaine? :</label>
                <div>
                    <input type="radio" name="HeroineCocaine" id="Oui" value = "Oui">
                    <label for="Oui">Oui</label>
                </div>
                <div>
                    <input type="radio" name="HeroineCocaine" id="Non" value = "Non">
                    <label for="Non">Non</label>
                </div>
                <div>
                    <input type="radio" name="HeroineCocaine" id="Occasionnellement" value = "Occasionnellement">
                    <label for="Occasionnellement">Occasionnellement</label>
                </div>
            </div>


                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>


            <!-- Création Page 11 -->

            <div class="page" id="page11">

                <!-- Q11: choix conso Autres substances -->

                <h1>Autres substances</h1>

            <div>
                <label for="AutresSubstances"> Consommez vous d'autres substances telles que le gaz hilarant, du LSD, de l'extasie ou des médicaments?</label>
                <div>
                    <input type="radio" name="AutresSubstances" id="Oui" value = "Oui">
                    <label for="Oui">Oui</label>
                </div>
                <div>
                    <input type="radio" name="AutresSubstances" id="Non" value = "Non">
                    <label for="Non">Non</label>
                </div>
                <div>
                    <input type="radio" name="AutresSubstances" id="Occasionnellement" value = "Occasionnellement">
                    <label for="Occasionnellement">Occasionnellement</label>
                </div>
            </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>

            <!-- Création Page 12 -->

            <div class="page" id="page11">

                <!-- Q11: Autres pratiques -->

                <h1> AutresPratiques </h1>

            <div>
                <label for="AutresPratiques"> Les pratiques suivantes : Jeux d'argent, jeux vidéo, sexe, sport, écrans, ont elles un impact sur votre vie personelle où professionelle (financier, isolement, perte de travail, perte de réseau social...) :</label>
                <div>
                    <input type="radio" name="AutresPratiques" id="Oui" value = "Oui">
                    <label for="Oui">Oui</label>
                </div>
                <div>
                    <input type="radio" name="AutresPratiques" id="Non" value = "Non">
                    <label for="Non">Non</label>
                </div>
                <div>
                    <input type="radio" name="AutresPratiques" id="Occasionnellement" value = "Occasionnellement">
                    <label for="Occasionnellement">Occasionnellement</label>
                </div>
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