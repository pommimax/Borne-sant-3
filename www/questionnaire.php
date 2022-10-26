<!DOCTYPE html>

<!-- Page html dédiée au questionnaire 
    Pommier maxime  ---  2022-->

<!-- salut c'est julia la grosse méchante -->
<!--coucou c max-->
<!--salut c est marie--> 
<!--salut c est roxane-->

<!-- Initialisation de la page html et lien avec le css-->

<head>

    <html lang="fr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/styles.css">
    


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
                <h1>Age test</h1>

                <div>
                    <label for="Age"> Quel âge avez vous ?</label>
                    <select name="Age" id="Age" required>
                    <option value="" disabled selected hidden> Choisissez la réponse</option>
                    <option value="moins de 20 ans"> moins de 20 ans</option>
                    <option value="De 21 a 44 ans"> De 21 a 44 ans</option>
                    <option value="De 45 a 64"> De 45 a 64 ans</option>
                    <option value="65 ans et plus"> 65 ans et plus</option>
                    </select>
                </div>
                <!-- Création bouton suivant -->
                <button class="next" type="button">Suivant</button>
            </div>


            <!-- Création de la page 1-->

            <div class="page" id="page2">

                <!-- Q2 : Qualification de sa santé -->

                <h1>Qualification santé</h1>

                <div>
                    <label for="Sante"> Comment qualifiriez vous votre santé ?</label>
                    <select name="Sante" id="Sante" required>
                    <option value="" disabled selected hidden> Choisissez la réponse</option>
                    <option value="Excellente"> Excellente </option>
                    <option value="Tres bonne">Tres bonne</option>
                    <option value="Bonne"> Bonne </option>
                    <option value="Mauvaise"> Mauvaise </option>
                    </select>

                </div>

                <!-- Création boutons suivant et précédent -->

                    <button class="prev" type="button">Précédent</button>
                    <button class="next" type="button">Suivant</button>
            </div>

            <!-- Création Page 3-->

            <div class="page" id="page3">

                <!-- Q3 : Activité physique -->

                <h1>Activité physique</h1>

                <div>
                    <label for="ActivitePhysique"> Pratiquez-vous une activité physique quotidienne suffisante ? (marche, jardinage, vélo, ménage…) </label>
                    <select name="ActivitePhysique" id="ActivitePhysique" required>
                    <option value="" disabled selected hidden>Choisissez la réponse</option>
                    <option value="Oui"> Oui</option>
                    <option value="Non"> Non</option>
                    <option value="Ne sais pas">Pas vraiment</option>
                    </select>
                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>

            <!-- Création Page 4-->

            <div class="page" id="page4">

                <!-- Q4 : Corpulence -->

                <h1>Corpulence</h1>

                <div>
                    <label for="Corpulence"> Considérez-vous que vous êtes :</label>
                    <select name="Corpulence" id="Corpulence" required>
                    <option value="" disabled selected hidden>Choisissez la réponse</option>
                    <option value="Beaucoup trop maigre"> Beaucoup trop maigre</option>
                    <option value="Un peu trop maigre">Un peu trop maigre</option>
                    <option value="D un poids normal"> D un poids normal </option>
                    <option value="Un peu trop gros(se)"> Un peu trop gros(se) </option>
                    <option value="Beaucoup trop gros(se)"> Beaucoup trop gros(se) </option>
                    </select>
                </div>

                <!-- Création boutons suivant et précédent -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

                
            </div>

        

            <!-- Création Page 5-->

            <div class="page" id="page5">

                <!-- Q5 : Sommeil -->

                <h1>Sommeil</h1>

                <div>
                    <label for="Sommeil"> Comment évaluez-vous votre qualité du Sommeil :</label>
                    <select name="Sommeil" id="Sommeil" required>
                    <option value="" disabled selected hidden>Choisissez la réponse</option>
                    <option value="Excellente">Excellente</option>
                    <option value="Tres bonne">Tres bonne</option>
                    <option value="Bonne"> Bonne  </option>
                    <option value="Moyenne">Moyenne</option>
                    <option value=" "> Mauvaise </option>
                    </select>                
                </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>
    
            </div>


        <!-- Nouveau formulaire pour conso -->

            <!-- Création Page 6 -->

            <div class="page" id="page6">

                <!-- Q6 : Choix conso alcool --> 

                <h1>Alcool</h1>
                
        
                <div>
                    <label for="Alcool"> Consommez vous de l'alcool? :</label>
                    <select onchange="change()" name="Alcool" id="Alcool" required>
                    <option value="" disabled selected hidden>Choisissez la réponse</option>
                    <option value="Oui">Oui</option>
                    <option value="Non">Non</option>
                    <option value="Occasionnellement">Occasionnellement</option>
                    </select>                
                </div>

                 <div id="CAQ1">

                    <label for="AQ1">A quelle fréquence consommez vous de l'Alcool ?  :</label>
                    <select name="AQ1" id="AQ1" required>
                    <option value="" disabled selected hidden> Choisissez la réponse</option>
                    <option value="Oui">Jamais</option>
                    <option value="Non">1 fois par mois</option>
                    <option value="Occasionnellement">2 à 4 fois par mois</option>
                    </select>                
                </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>

            

           

             <!-- Création Page 7 -->

            <div class="page" id="page8">

                <!-- Q7 : Choix conso Tabac --> 

                <h1>Tabac</h1>

                <div>
                    <label for="Tabac"> Consommez vous du tabac? :</label>
                    <select name="Tabac" id="Tabac" required>
                    <option value="" disabled selected hidden>Choisissez la réponse</option>
                    <option value="Oui">Oui</option>
                    <option value="Non">Non</option>
                    <option value="Occasionnellement">Occasionnellement</option>
                    </select>                
                </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>

            </div>





            <!-- Création Page 8 -->

            <div class="page" id="page8">

                <!-- Q7: choix conso Cannabis -->

                <h1>Cannabis</h1>

                 <div>
                    <label for="Cannabis"> Consommez vous du cannabis? :</label>
                    <select name="Cannabis" id="Cannabis" required>
                    <option value="" disabled selected hidden>Choisissez la réponse</option>
                    <option value="Oui">Oui</option>
                    <option value="Non">Non</option>
                    <option value="Occasionnellement">Occasionnellement</option>
                    </select>                
                </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>

            <!-- Création Page 9 -->

            <div class="page" id="page9">

                <!-- Q9: choix conso Héroine, cocaine -->

                <h1>Héroine, cocaine</h1>

                 <div>
                    <label for="HeroineCocaine"> Consommez vous de l'héroine ou de la cocaine? :</label>
                    <select name="HeroineCocaine" id="HeroineCocaine" required>
                    <option value="" disabled selected hidden>Choisissez la réponse</option>
                    <option value="Oui">Oui</option>
                    <option value="Non">Non</option>
                    <option value="Occasionnellement">Occasionnellement</option>
                    </select>                
                </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>


            <!-- Création Page 10 -->

            <div class="page" id="page10">

                <!-- Q10: choix conso Autres substances -->

                <h1>Autres substances</h1>

                 <div>
                    <label for="AutresSubstances"> Consommez vous d'autres substances telles que le gaz hilarant, du LSD, de l'extasie ou des médicaments? :</label>
                    <select name="AutresSubstances" id="AutresSubstances" required>
                    <option value="" disabled selected hidden>Choisissez la réponse</option>
                    <option value="Oui">Oui</option>
                    <option value="Non">Non</option>
                    <option value="Occasionnellement">Occasionnellement</option>
                    </select>                
                </div>

                <!-- Création boutons suivant et terminer -->

                <button class="prev" type="button">Précédent</button>
                <button class="next" type="button">Suivant</button>


            </div>

            <!-- Création Page 11 -->

            <div class="page" id="page11">

                <!-- Q11: Autres pratiques -->

                <h1> Autres pratiques </h1>

                 <div>
                    <label for="AutresPratiques"> Les pratiques suivantes : Jeux d'argent, jeux vidéo, sexe, sport, écrans, ont elles un impact sur votre vie personelle où professionelle (financier, isolement, perte de travail, perte de réseau social...) :</label>
                    <select name="AutresPratiques" id="AutresPratiques" required>
                    <option value="" disabled selected hidden>Choisissez la réponse</option>
                    <option value="Oui">Oui</option>
                    <option value="Non">Non</option>
                    <option value="Occasionnellement">Occasionnellement</option>
                    </select>                
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