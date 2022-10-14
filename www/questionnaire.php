<!DOCTYPE html>
<!-- Page html dédiée au questionnaire 
    Pommier maxime  ---  2022-->

<!-- salut c'est julia -->
<!--coucou c max-->
<!--salut c est marie-->

<!-- Initialisation de la page html et lien avec le css-->

<head>
    <html lang="fr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/styles.css">


<!-- tête du questionnaire -->

</head>
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
                    <select name="Age" id="Age" required>
                    <option value="" disabled selected hidden> Choisissez la réponse</option>
                    <option value="moins de 20 ans"> moins de 20 ans</option>
                    <option value="De 21 à 44 ans"> De 21 à 44 ans</option>
                    <option value="De 45 à 64"> De 45 à 64 ans</option>
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
                <button>Terminer</button>
                
            </div>


        </form>
    </main>
    
    <script src="js/scripts.js"></script>
</body>
</html>