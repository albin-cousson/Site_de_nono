let url_complete = new URL(window.location.href)
let search = new URLSearchParams(url_complete.search.slice("true"))

if (search.has("reload")){
    window.stop()
}

window.addEventListener("load", function(){
    let url = new URLSearchParams(window.location.search)
    url.set("reload", "true")
    history.replaceState(null, null, "?" + url.toString())
    window.location.reload()
})

// Récuperation du message et des coordonés du contact à afficher lors de l'appui sur le bouton "Voir"
let voir = document.querySelectorAll('.voir')
let pop_up = document.querySelector(".pop-up")
let pop_up_contenu = document.querySelectorAll(".pop-up__contenu")
let pop_up_close = document.querySelector(".pop-up__close")

for (let i=0; i<voir.length; i++){
    voir[i].addEventListener('click', (e)=>{
        let request = new XMLHttpRequest()
        request.onreadystatechange = function() {
            if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
                pop_up.style.display="flex"
                let response = JSON.parse(this.responseText);
                for (let j=0; j<response.length; j++){
                    pop_up_contenu[j].textContent = response[j];
                }
            }
        };
        request.open('GET', "api_messagerie.php/?id=" + voir[i].id)
        request.send()
    })
}

pop_up_close.addEventListener('click', ()=>{
    pop_up.style.display="none"
})

