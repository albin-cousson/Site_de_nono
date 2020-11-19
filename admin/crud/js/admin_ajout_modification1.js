let div = document.querySelectorAll(".form-group")
let label = document.querySelectorAll("label")

let verif = "Id"

for (i=0; i<label.length; i++){
    mots = label[i].textContent
    let resultat = mots.indexOf(verif)
    if (resultat == false){
        div[i].classList.add("id")
    }
}

