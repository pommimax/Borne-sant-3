/* Projet Borne connectée en santée, ESEO-CHM, septembre 2022 - Janvier 2023
Equipe composée de Roxane LAIGNEAU, Julia Body, Marie LOMBART et Maxime POMMIER
Page contenant le code Javascript de notre projet
* /


// On va chercher les différents éléments de notre page
// Déclaration des constantes et variables

const pages = document.querySelectorAll(".page")
const header = document.querySelector("header")
const nbPages = pages.length // Nombre de pages du formulaire
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

     // On gère les boutons suivant pour pas d'alcool

    boutons = document.querySelectorAll(".nextA")

    for (let bouton of boutons){
        bouton.addEventListener("click",pageSuivanteAlcoolNon)
    }

 

    // On gère les boutons "précédent"
    boutons = document.querySelectorAll(".prev")

    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedente)
    }

    // On gère les boutons précédent pour pas d'alcool

    boutons = document.querySelectorAll(".prevA")

    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedanteAlcoolNon )

    }

    // On gère les boutons suivants pour le cannabis

    boutons = document.querySelectorAll(".nextC")

    for(let bouton of boutons){
        bouton.addEventListener("click", pageSuivanteCannabisNon)
    }

    // On gère les boutons précédent pour le cannbis

    boutons = document.querySelectorAll(".prevC")

    for (let bouton of boutons){
        bouton.addEventListener("click", pagePrecedanteCannabisNon)
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
 * Cette fonction permet de ne pas demander les questions sur l'alcool
 */
function pageSuivanteAlcoolNon(){
    for (let page of pages){
        page.style.display= 'none'
    }

    this.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.style.display = 'initial'
}

/**
 * Cette fonction permet de ne pas revenir sur les questions d'alcool 
 */

function pagePrecedanteAlcoolNon(){
    for(let page of pages){
        page.style.display = "none"
    }

    // On affiche la page après les questions sur l'alcool

    this.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.style.display = 'initial'
}

/**
 * Cette fonction permet de ne pas demander les questions sur le cannabis 
 */ 

 function pageSuivanteCannabisNon(){
    for (let page of pages){
        page.style.display ='none'
    }

    // On affiche la page après les questions sur le cannabis 

    this.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.style.display = 'initial'


 }
/**
 * Cette fonction permet de ne pas revenir sur les questions sur le cannabis
 */ 

 function pagePrecedenteCannabis(){

    for(let page of pages){
        page.style.display = "none"
    }

    // On affiche la page après les questions sur l'alcool

    this.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.style.display = 'initial'
}

/*
*Fonction pour afficher le bon bouton pour la question sur alcool 
*/

const Btn1 = document.getElementById('BtnPrec')
const Btn2 = document.getElementById('BtnSuiv')
const Btn3 = document.getElementById('BtnSuivA')

var valeur1;
var valeur2;
var valeur3;

function afficheBtn(){

    if (document.getElementById('AlcID1').checked) {

        valeur1 = document.getElementById('AlcID1').value;}


        if (valeur1 === "Oui"){

            Btn1.style.visibility = 'visible'
            Btn2.style.visibility = 'visible'
            Btn3.style.visibility = 'hidden'
            valeur1 = "Non";
        }

    if (document.getElementById('AlcID3').checked) {

        valeur3 = document.getElementById('AlcID3').value;}


        if (valeur3 === "Occasionnellement"){

            Btn1.style.visibility = 'visible'
            Btn2.style.visibility = 'visible'
            Btn3.style.visibility = 'hidden'
            valeur1 = "Non";
        }


    if (document.getElementById('AlcID2').checked){
        valeur2 = document.getElementById('AlcID2').value;}

        if (valeur2 ==="Non"){
            Btn1.style.visibility = 'visible'
            Btn2.style.visibility = 'hidden'
            Btn3.style.visibility = 'visible'
            valeur2 = "Oui"
        }

}

/**
 * Fonction pour afficher le bon bouton pour la question sur le cannabis
 **/ 

const Btn10 = document.getElementById('BtnPrecC')
const Btn20 = document.getElementById('BtnSuivC')
const Btn30 = document.getElementById('BtnSuivAC')

var valeur10;
var valeur20;
var valeur30;

function afficheBtnC(){

    if (document.getElementById('CanID1').checked) {

        valeur10 = document.getElementById('CanID1').value;}


        if (valeur10 === "Oui"){

            Btn10.style.visibility = 'visible'
            Btn20.style.visibility = 'visible'
            Btn30.style.visibility = 'hidden'
            valeur10 = "Non";
        }

    if (document.getElementById('CanID3').checked) {

        valeur30 = document.getElementById('CanID3').value;}


        if (valeur30 === "Occasionnellement"){

            Btn10.style.visibility = 'visible'
            Btn20.style.visibility = 'visible'
            Btn30.style.visibility = 'hidden'
            valeur30 = "Non";
        }


    if (document.getElementById('CanID2').checked){
        valeur20 = document.getElementById('CanID2').value;}

        if (valeur20 ==="Non"){
            Btn10.style.visibility = 'visible'
            Btn20.style.visibility = 'hidden'
            Btn30.style.visibility = 'visible'
            valeur20 = "Oui"
        }

}

/**
 * Fonction qui gère l'animation des avatars 
 */ 

function Animer(idimg, idbtn)
{
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

