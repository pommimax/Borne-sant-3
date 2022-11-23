// Fichier JS de notre questionnaire  o


// On va chercher les différents éléments de notre page
// Déclaration des constantes et variables

const pages = document.querySelectorAll(".page")
const header = document.querySelector("header")
const nbPages = pages.length // Nombre de pages du formulaire
var age;
let pageActive = 1

// On attend le chargement de la page
window.onload = () => {

    // On affiche la 1ere page du formulaire
    document.querySelector(".page").style.display = "initial"

    // On gère les boutons "suivant"
    let boutons = document.querySelectorAll(".next")

    for(let bouton of boutons){
        bouton.addEventListener("click", pageSuivante)
    }

    // On gère les boutons "suivant"
    boutons = document.querySelectorAll(".prev")

    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedente)
    }
}

/**
 * Cette fonction fait avancer le formulaire d'une page
 */
function pageSuivante(){
    // On masque toutes les pages
    for(let page of pages){
        page.style.display = "none"
    }

    // On affiche la page suivante
    this.parentElement.nextElementSibling.style.display = "initial"

}

/**
 * Cette fonction fait reculer le formulaire d'une page
 */
function pagePrecedente(){
    // On masque toutes les pages
    for(let page of pages){
        page.style.display = "none"
    }

    // On affiche la page suivante
    this.parentElement.previousElementSibling.style.display = "initial"

}

/**
 * Fonction pour afficher les bonnes questions par rapport à l'alcool
 */
/**
function change(){

   document.getElementById("Alcool").addEventListener("change", function(event) {

    var value = event.target.value; // Contient la nouvelle valeur de la liste déroulante sélectionnée par le client
    if (value ==="Oui") {
        document.getElementById("CAQ1").style.visibility = "visible"
        document.getElementById("CAQ2").style.visibility = "visible"
        document.getElementById("CAQ3").style.visibility = "visible"
        document.getElementById("CAQ4").style.visibility = "visible"
        document.getElementById("CAQ5").style.visibility = "visible"


    }

       
    else if (value ==="Non") {
        
        document.getElementById("CAQ1").style.visibility = "hidden"
        document.getElementById("CAQ2").style.visibility = "hidden"
        document.getElementById("CAQ3").style.visibility = "hidden"
        document.getElementById("CAQ4").style.visibility = "hidden"
        document.getElementById("CAQ5").style.visibility = "hidden"

}

});

}
*/
function getAge()
{
    age = document.querySelector('input[name="Age"]:checked').value;
}


function Animer(idimg, idbtn)
{
    var div = document.getElementById('droite1');
    div.innerHTML = '<div id="avatar" style="position:relative; height:150px; top:150px; width:100px; visibility:hidden; float:right; margin-right: 300px"><img src="./Image/'+ age +'J.jpg" width="150px" height="auto"></div>' +
        '<div id="avatar2" style="position: relative;height:100px;top:200px; width:100px; visibility:hidden; float:right; margin-right: -100px"><img src="./Image/'+age+'T.jpg" width="150px" height="auto"></div>' +
        '<div id="bulle" style="position: relative;height:150px;width:27%;visibility:hidden;float:right;clear:right; top:-150px"><img src="./Image/bulle.png" width="200px" height="auto">' +
        '<span style="position:absolute;bottom: 50%;color: #00FF00; font-size:15px; right:120px"><a href="https://www.mangerbouger.fr/">Visiter le site <br> "mangez bougez"</a></span></div>';

    var element = document.getElementById(idbtn);
    var element2 = document.getElementById(idimg);
    var position = 1000;
    document.getElementById('avatar').style.visibility='hidden';
    document.getElementById('avatar2').style.visibility='hidden';

    document.getElementById('bulle').style.visibility='hidden';


    //.style.visibility='hidden'
    element.style.visibility='visible';
    element2.style.visibility='visible';
    var id=setInterval(mvt,5);
    function mvt()
    {
        if(position < 50)
        {
            clearInterval(id)
        }
        else
        {
            position = position - 15;
            element.style.left = position + "px";
            element2.style.left = position + "px";
        }
    }
}