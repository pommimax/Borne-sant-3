// Fichier JS de notre questionnaire


// On va chercher les différents éléments de notre page
// Déclaration des constantes et variables

const pages = document.querySelectorAll(".page")
const header = document.querySelector("header")
const nbPages = pages.length // Nombre de pages du formulaire
let pageActive = 1

// On attend le chargement de la page
window.onload = () => {

    // On affiche la 1ère page du formulaire
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
 

function change(){

   document.getElementById("Alcool").addEventListener("change", function(event) {

    var value = event.target.value; // Contient la nouvelle valeur de la liste déroulante sélectionnée par le client
    if (value ==="Oui") {
        document.getElementById("page9").style.visibility = "visible"
        document.getElementById("page10").style.visibility = "visible"
        document.getElementById("page11").style.visibility = "visible"
        document.getElementById("page12").style.visibility = "visible"
        document.getElementById("page13").style.visibility = "visible"


    }

       
    else if (value ==="Non") {
        
        document.getElementById("page9").style.visibility = "hidden"
        document.getElementById("page10").style.visibility = "hidden"
        document.getElementById("page11").style.visibility = "hidden"
        document.getElementById("page12").style.visibility = "hidden"
        document.getElementById("page13").style.visibility = "hidden"

}

});

}
*/

let BtnOui = document.getElementById("BtnOui");
let BtnNon = document.getElementById("BtnNon");
let page8 = document.getElementById("page8");
let page9 = document.getElementById("page9");

BtnOui.addEventListener("click", () => {
  if(getComputedStyle(page8).display != "none"){
    page8.style.display = "none";
  } else {
    page8.style.display = "block";
  }
})

function togg(){
  if(getComputedStyle(page8).display != "none"){
    page8.style.display = "none";
  } else {
    page8.style.display = "block";
  }
};