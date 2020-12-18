let body = document.querySelector("body")
let masque_body = document.querySelector(".masque-body")
let navbar = document.querySelector(".navbar")
let sous_menu = document.querySelectorAll(".block-sous-menu")
let sous_menu_link = document.querySelectorAll(".sous-menu-main-link")
let open_sous_sous_menu = document.querySelectorAll(".open-sous-sous-menu")
let sous_sous_menu = document.querySelectorAll(".sous-sous-menu")
let containerMenuResponsive__navbar__button = document.querySelector(".containerMenuResponsive__navbar__button--div")
let containerMenuResponsive__masque__aller  = document.querySelector(".containerMenuResponsive__masque--aller ")
let containerMenuResponsive__masque__retour  = document.querySelector(".containerMenuResponsive__masque--retour ")
let menu_responsive = document.querySelector(".menu-responsive")
let nav = document.querySelector(".navbar")
let sous_menu_responsive = document.querySelectorAll(".nav-item-open-sous-menu-responsive")
let sous_sous_menu_responsive = document.querySelectorAll(".sous-sous-menu-responsive")
let containerMenuResponsive__BlockMenu = document.querySelector(".containerMenuResponsive__BlockMenu")
let containerMenuResponsive__page = document.querySelector(".containerMenuResponsive__page")
let containerMenuResponsive__page__nav__ul__li__a = document.querySelectorAll(".containerMenuResponsive__page__nav__ul__li__a")
let containerMenuResponsive__page__nav__ul__li__a__contact = document.querySelector(".containerMenuResponsive__page__nav__ul__li__a--contact")
let menuResponsive__icone__resauxSociaux = document.querySelectorAll(".menuResponsive__icone__resauxSociaux")
let containerMenuResponsive__page__nav__ul__li__a__sousMenu = document.querySelectorAll(".containerMenuResponsive__page__nav__ul__li__a__sousMenu")
let containerMenuResponsive__page__sousMenu__sousSousSousMenu__a = document.querySelectorAll(".containerMenuResponsive__page__sousMenu__sousSousSousMenu__a")

///fonction qui rend le background du menu transparent au srolle 
window.addEventListener("scroll", function(){
    if (scrollY > 0){
        navbar.style.background="rgba(255,255,255,.5)"
    }
    else {
        navbar.style.background="#FFF"
    }
})
///fonction qui fait apparaitre les sous-menu lors du clique sur les éléments du menu associés
sous_menu_link[0].addEventListener("click", function(){
    sous_menu[0].classList.toggle("sous-menu-actife")
    if (sous_menu[1].classList.contains("sous-menu-actife") || sous_menu[2].classList.contains("sous-menu-actife")){
        sous_menu[1].classList.remove("sous-menu-actife")
        sous_menu[2].classList.remove("sous-menu-actife")
    }
})
sous_menu_link[1].addEventListener("click", function(){
    sous_menu[1].classList.toggle("sous-menu-actife")
    if (sous_menu[0].classList.contains("sous-menu-actife") || sous_menu[2].classList.contains("sous-menu-actife")){
        sous_menu[0].classList.remove("sous-menu-actife")
        sous_menu[2].classList.remove("sous-menu-actife")
    }
})
sous_menu_link[2].addEventListener("click", function(){
    sous_menu[2].classList.toggle("sous-menu-actife")
    if (sous_menu[0].classList.contains("sous-menu-actife") || sous_menu[1].classList.contains("sous-menu-actife")){
        sous_menu[0].classList.remove("sous-menu-actife")
        sous_menu[1].classList.remove("sous-menu-actife")
    }
})
///fonction qui fait apparaitre les sous-sous-menu lors du clique sur les éléments du soud-menu associés
open_sous_sous_menu[0].addEventListener("click", function(){
    open_sous_sous_menu[0].classList.toggle("sous-sous-menu-actif")
    if (open_sous_sous_menu[1].classList.contains("sous-sous-menu-actif")){
        open_sous_sous_menu[1].classList.remove("sous-sous-menu-actif")
    }
})
open_sous_sous_menu[1].addEventListener("click", function(){
    open_sous_sous_menu[1].classList.toggle("sous-sous-menu-actif")
    if (open_sous_sous_menu[0].classList.contains("sous-sous-menu-actif")){
        open_sous_sous_menu[0].classList.remove("sous-sous-menu-actif")
    }
})
///fonction qui fait disparatire les menu et les sous-menu lors du clique sur la fenetre 
masque_body.addEventListener("click", function(){
    sous_menu[0].classList.remove("sous-menu-actife")
    sous_menu[1].classList.remove("sous-menu-actife")
    sous_menu[2].classList.remove("sous-menu-actife")
    open_sous_sous_menu[0].classList.remove("sous-sous-menu-actif")
    open_sous_sous_menu[1].classList.remove("sous-sous-menu-actif")
})
///fonction qui fait disparatire les sous-sous-menu lors du clique sur un menu
sous_menu[0].addEventListener("click", function(){
    if (sous_menu[0].classList.contains("sous-menu-actife")){
        open_sous_sous_menu[0].classList.remove("sous-sous-menu-actif")
        open_sous_sous_menu[1].classList.remove("sous-sous-menu-actif")
    }
})
sous_menu[1].addEventListener("click", function(){
    if (sous_menu[1].classList.contains("sous-menu-actife")){
        open_sous_sous_menu[0].classList.remove("sous-sous-menu-actif")
        open_sous_sous_menu[1].classList.remove("sous-sous-menu-actif")
    }
})
///fonction qui créer l'effet du block responsive lors du click sur le boutton hamburger 
containerMenuResponsive__navbar__button.addEventListener("click", function(){
    containerMenuResponsive__navbar__button.parentNode.parentNode.classList.toggle("containerMenuResponsive__navbar__button--div--active")
    if (containerMenuResponsive__navbar__button.parentNode.parentNode.classList.contains("containerMenuResponsive__navbar__button--div--active")){
        containerMenuResponsive__navbar__button.parentNode.parentNode.classList.add("containerMenuResponsive__masque--aller--active")
        containerMenuResponsive__navbar__button.parentNode.parentNode.classList.remove("containerMenuResponsive__masque--retour--active")
        containerMenuResponsive__masque__retour.style.zIndex="1"
    }
    else {
        containerMenuResponsive__navbar__button.parentNode.parentNode.classList.add("containerMenuResponsive__masque--retour--active")
        containerMenuResponsive__navbar__button.parentNode.parentNode.classList.remove("containerMenuResponsive__masque--aller--active")
        /// fonction qui enleve le z-index de masque retour lors de la fermeture de menu responsive 
        setTimeout(()=>{
            containerMenuResponsive__masque__retour.style.zIndex="0"
        }, 1000)
    }
})
let background_color_function_ajout = 0
function background_color_function_aller(){
    background_color_function_ajout += 0.015
    if (containerMenuResponsive__navbar__button.parentNode.parentNode.classList.contains("containerMenuResponsive__masque--aller--active")){
        containerMenuResponsive__masque__aller.style.background="rgba(0, 0, 0, " + background_color_function_ajout + ")"
    }
    else {
        background_color_function_ajout = 0
        containerMenuResponsive__masque__aller.style.background="rgba(0, 0, 0, " + background_color_function_ajout + ")"  
    }
}
setInterval(background_color_function_aller, 20)

let background_color_function_delete = 0.8
function background_color_function_retour(){
    background_color_function_delete -= 0.02
    if (containerMenuResponsive__navbar__button.parentNode.parentNode.classList.contains("containerMenuResponsive__masque--retour--active")){
        containerMenuResponsive__masque__retour.style.background="rgba(0, 0, 0, " + background_color_function_delete + ")"
    }
    else {
        background_color_function_delete = 0.8
        containerMenuResponsive__masque__retour.style.background="rgba(0, 0, 0, " + background_color_function_delete + ")"  
    }
}
setInterval(background_color_function_retour, 20)
///fonction qui fait apparaite les sous-menu sur les menu responsive 
containerMenuResponsive__page__nav__ul__li__a__sousMenu[0].addEventListener("click", function(){
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[0].classList.toggle("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[1].classList.remove("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[2].classList.remove("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
})
containerMenuResponsive__page__nav__ul__li__a__sousMenu[1].addEventListener("click", function(){
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[1].classList.toggle("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[0].classList.remove("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[2].classList.remove("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
})
containerMenuResponsive__page__nav__ul__li__a__sousMenu[2].addEventListener("click", function(){
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[2].classList.toggle("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[0].classList.remove("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[1].classList.remove("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
})
///fonction qui fait apparaite les sous-sous-menu sur les menu responsive 
containerMenuResponsive__page__sousMenu__sousSousSousMenu__a[0].addEventListener("click", function(){
    containerMenuResponsive__page__sousMenu__sousSousSousMenu__a[0].parentNode.classList.toggle("containerMenuResponsive__page__sousMenu__sousSousSousMenu__a--active")
    containerMenuResponsive__page__sousMenu__sousSousSousMenu__a[1].parentNode.classList.remove("containerMenuResponsive__page__sousMenu__sousSousSousMenu__a--active")
})
containerMenuResponsive__page__sousMenu__sousSousSousMenu__a[1].addEventListener("click", function(){
    containerMenuResponsive__page__sousMenu__sousSousSousMenu__a[1].parentNode.classList.toggle("containerMenuResponsive__page__sousMenu__sousSousSousMenu__a--active")
    containerMenuResponsive__page__sousMenu__sousSousSousMenu__a[0
    ].parentNode.classList.remove("containerMenuResponsive__page__sousMenu__sousSousSousMenu__a--active")
})

containerMenuResponsive__navbar__button.addEventListener("click", function(){
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[0].classList.remove("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[1].classList.remove("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
    containerMenuResponsive__page__nav__ul__li__a__sousMenu[2].classList.remove("containerMenuResponsive__page__nav__ul__li__a__sousMenu--active")
    containerMenuResponsive__page__sousMenu__sousSousSousMenu__a[0].parentNode.classList.remove("containerMenuResponsive__page__sousMenu__sousSousSousMenu__a--active")
    containerMenuResponsive__page__sousMenu__sousSousSousMenu__a[1].parentNode.classList.remove("containerMenuResponsive__page__sousMenu__sousSousSousMenu__a--active")
})

