let prix = ById("prix");
let errPrix = ById("errPrix");
let nbPers = ById("nbPers");
let errPers = ById("errPers");
let nbLit = ById("nbLit");
let errLit = ById("errLit");
let PasErreur = false;

prix.addEventListener("blur", () => {
    PasErreur = false;
    if( prix.value >= 50 && prix.value <= 250 ){
        errPrix.innerHTML = "";
        PasErreur = true;
    }else{
        errPrix.innerHTML = "Le prix doit être compris entre 50 et 250 € !";
    }
    
})

    
nbLit.addEventListener("blur",() => {
    PasErreur = false;
    if( nbLit.value != 2 ){
        errLit.innerHTML = "Le nombre de lit doit être à 2 !";
    }
    else{
        errLit.innerHTML = ""
        PasErreur = true;
    }
})

nbPers.addEventListener("blur",() => {
    PasErreur = false;
    if( nbPers.value >= 1 && nbPers.value <= 4){ 
        errPers.innerHTML = "";
        PasErreur = true;
    }else{
        errPers.innerHTML = "Le nombre de personnes doit être compris entre 1 et 4 !"                
    }
})


form.addEventListener("submit", (e) => {
    e.preventDefault();
    if( PasErreur = true ) form.submit();
})


function ById(id){return document.getElementById(id);}