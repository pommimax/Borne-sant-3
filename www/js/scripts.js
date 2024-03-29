/* Projet Borne connectée en santée, ESEO-CHM, septembre 2022 - Janvier 2023
Equipe composée de Roxane LAIGNEAU, Julia Body, Marie LOMBART et Maxime POMMIER
Page contenant le code Javascript de notre projet
version 09/12
*/


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

    // On gère les boutons "précédent"
    boutons = document.querySelectorAll(".prev")

    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedente)
    }

    // On gère les boutons suivant pour pas d'alcool

    boutons = document.querySelectorAll(".nextA")

    for (let bouton of boutons){
        bouton.addEventListener("click",pageSuivanteAlcoolNon)
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
        bouton.addEventListener("click", pagePrecedenteCannabisNon)
    }

    // On gère les boutons suivants pour pas de tabac

    boutons = document.querySelectorAll(".nextT")

    for (let bouton of boutons){
        bouton.addEventListener("click", pageSuivanteTabacNon)

    }

    // On gère les boutons précédent pour le tabac

    boutons = document.querySelectorAll(".prevT")

    for (let bouton of boutons){
        bouton.addEventListener("click",pagePrecedenteTabacNon)
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
    i = i + 1;

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

    i = i - 1

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

 function pagePrecedenteCannabisNon(){

    for(let page of pages){
        page.style.display = "none"
    }

    // On affiche la page après les questions sur l'alcool

    this.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.style.display = 'initial'
}

/**
 * Cette fonction permet de ne pas afficher la question sur le tabac
 **/

 function pageSuivanteTabacNon(){
    for(let page of pages){
        page.style.display = "none"
    }

    // On affiche la page après les questions sur le tabac

    this.parentElement.nextElementSibling.nextElementSibling.style.display = 'initial'
 }

 /**
  * Cette fonction permet de ne pas revenir sur les questions du tabac
  **/ 

  function pagePrecedenteTabacNon(){
    for(let page of pages){
        page.style.display = "none"
    }

    // On affiche la page avant la question sur le tabac

    this.parentElement.previousElementSibling.previousElementSibling.style.display ='initial'
  }

/*
*Fonction pour afficher le bon bouton pour la question sur alcool 
*/

const Btn1 = document.getElementById('BtnSuivNA')
const Btn2 = document.getElementById('BtnSuivA')
const Btn3 = document.getElementById('BtnPrecA')
const Btn4 = document.getElementById('BtnPrecNA')

var valeur1;
var valeur2;
var valeur3;

function afficheBtnA(){

    if (document.getElementById('AlcID1').checked) {

        valeur1 = document.getElementById('AlcID1').value;}


        if (valeur1 === "Oui"){

            Btn1.style.visibility = 'visible'
            Btn2.style.visibility = 'hidden'
            Btn3.style.visibility = 'hidden'
            Btn4.style.visibility = 'visible'
            valeur1 = "Non";
        }

    if (document.getElementById('AlcID3').checked) {

        valeur3 = document.getElementById('AlcID3').value;}


        if (valeur3 === "Occasionnellement"){

            Btn1.style.visibility = 'visible'
            Btn2.style.visibility = 'hidden'
            Btn3.style.visibility = 'hidden'
            Btn4.style.visibility = 'visible'
            valeur1 = "Non";
        }


    if (document.getElementById('AlcID2').checked){
        valeur2 = document.getElementById('AlcID2').value;}

        if (valeur2 ==="Non"){
            Btn1.style.visibility = 'hidden'
            Btn2.style.visibility = 'visible'
            Btn3.style.visibility = 'visible'
            Btn4.style.visibility = 'hidden'
            valeur2 = "Oui"
        }

}

/**
 * Fonction pour afficher le bon bouton pour la question sur le cannabis
 **/ 

const Btn10 = document.getElementById('BtnSuivNC')
const Btn20 = document.getElementById('BtnSuivC')
const Btn30 = document.getElementById('BtnPrecC')
const Btn40 = document.getElementById('BtnPrecNC')

var valeur10;
var valeur20;
var valeur30;

function afficheBtnC(){

    if (document.getElementById('CanID1').checked) {

        valeur10 = document.getElementById('CanID1').value;}


        if (valeur10 === "Oui"){

            Btn10.style.visibility = 'visible'
            Btn20.style.visibility = 'hidden'
            Btn30.style.visibility = 'hidden'
            Btn40.style.visibility = 'visible'
            valeur10 = "Non";
        }

    if (document.getElementById('CanID3').checked) {

        valeur30 = document.getElementById('CanID3').value;}


        if (valeur30 === "Occasionnellement"){

            Btn10.style.visibility = 'visible'
            Btn20.style.visibility = 'hidden'
            Btn30.style.visibility = 'hidden'
            Btn40.style.visibility = 'visible'
            valeur30 = "Non";
        }


    if (document.getElementById('CanID2').checked){
        valeur20 = document.getElementById('CanID2').value;}

        if (valeur20 ==="Non"){
            Btn10.style.visibility = 'hidden'
            Btn20.style.visibility = 'visible'
            Btn30.style.visibility = 'visible'
            Btn40.style.visibility = 'hidden'
            valeur20 = "Oui"
        }

}

/**
 * Fonction pour afficher les bons boutons pour la question sur le tabac
 **/ 


var valeur100;
var valeur200;
var valeur300;

const Btn100 = document.getElementById('BtnSuivNT')
const Btn200 = document.getElementById('BtnSuivT')
const Btn300 = document.getElementById('BtnPrecT')
const Btn400 = document.getElementById('BtnPrecNT')

function afficheBtnT(){

    


    if (document.getElementById('TbcID1').checked) {

        valeur100 = document.getElementById('TbcID1').value;}


        if (valeur100 === "Oui"){

            Btn100.style.visibility = 'visible'
            Btn200.style.visibility = 'hidden'
            Btn300.style.visibility = 'hidden'
            Btn400.style.visibility = 'visible'
            valeur100 = "Non";
        }

    if (document.getElementById('TbcID3').checked) {

        valeur300 = document.getElementById('TbcID3').value;}


        if (valeur300 === "Occasionnellement"){

            Btn100.style.visibility = 'visible'
            Btn200.style.visibility = 'hidden'
            Btn300.style.visibility = 'hidden'
            Btn400.style.visibility = 'visible'
            valeur300 = "Non";
        }


    if (document.getElementById('TbcID2').checked){
        valeur200 = document.getElementById('TbcID2').value;}

        if (valeur200 ==="Non"){
            Btn100.style.visibility = 'hidden'
            Btn200.style.visibility = 'visible'
            Btn300.style.visibility = 'visible'
            Btn400.style.visibility = 'hidden'
            valeur200 = "Oui"
        }

}





/**
 * Fonction qui gère l'animation des avatars 
 */

function getAge()
{
    age = document.querySelector('input[name="Age"]:checked').value;
}


var i = -2;

function Animer(idimg, txtBulle)
{
    var div = document.getElementById('droite' + i);
    div.innerHTML = '<div id="avatarJ'+i+'" style="position:relative; height:150px; top:60px; width:5px; visibility:hidden; float:right; margin-right: 250px"><img src="./Image/'+ age +'J.png" width="150px" height="auto"></div><div id="avatarT'+i+'" style="position: relative;height:100px;top:100px; width:100px; visibility:hidden; float:right; margin-right: -100px"><img src="./Image/'+age+'T.png" width="150px" height="auto"></div><div id="bulle'+i+'" style="position: relative;height:150px;width:11%;visibility:hidden;float:right;clear:right; top:-150px"><img src="./Image/bulle.png" width="200px" height="auto"><span style="position:absolute;bottom: 50%;color: #00FF00; font-size:15px; right:5px">'+ txtBulle +'</span></div>';


    var element2 = document.getElementById(idimg);
    var position = 1000;
    document.getElementById('avatarJ'+i).style.visibility='hidden';
    document.getElementById('avatarT'+i).style.visibility='hidden';
    document.getElementById('bulle' + i).style.visibility='hidden';

    if(txtBulle !== 'non')
    {
        var element = document.getElementById('bulle'+i);
        element.style.visibility='visible';
    }

    //.style.visibility='hidden'
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
            if(txtBulle !== 'non')
            {
                element.style.left = position + "px";
            }
            element2.style.left = position + "px";
        }
    }
}

var santeChoix = "Defaut"
function ChoixSliderSante(){

    var value = event.currentTarget.value;
    console.log(value)
        if (value <= 20){
            santeChoix ="Mauvaise"
            Animer('avatarT1','non')
        }
        else if (21 <= value && value<= 40){
            santeChoix ="Moyenne"
            Animer('avatarT1','non')
        }
        else if(41<=value && value <=60){
            santeChoix = "Bonne"
            Animer('avatarJ1','non')
        }
        else if(61<= value && value <=80){
            santeChoix = "Tres bonne"
            Animer('avatarJ1','non')
        }
        else if(81<=value){
            santeChoix="Excellente"
            Animer('avatarJ1','non')
        }

    document.getElementById("demo").innerHTML = value
    document.cookie = "sante="+santeChoix+";"+ new Date().toUTCString() + ";path=/"
}
