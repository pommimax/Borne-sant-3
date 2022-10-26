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
 */

function change(){
    
   document.getElementById("Alcool").addEventListener("change", function(event) {

    var value = event.target.value; // Contient la nouvelle valeur de la liste déroulante sélectionnée par le client
    if (value ==="Oui") {
        document.getElementById("CAQ1").style.visibility = "visible"

        // Afficher la partie de "premierElement"
        // Cacher la partie de "secondElement"
    } else if (value ==="Non") {
        // Cacher la partie de "premierElement"
        // Afficher la partie de "secondElement"
        document.getElementById("CAQ1").style.visibility = "hidden"
    }
});

}