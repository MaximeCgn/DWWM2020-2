/********************Variables*******************/
var recto = document.getElementsByClassName("carteRecto")[0];
var verso = document.getElementsByClassName("carteVerso")[0];
var fleche = document.getElementsByClassName("fleche")[0];

/********************Function*******************/

function retourneCarte(e) {
    if (document.getElementsByClassName("adresse")[0] != null && document.getElementsByClassName("tel")[0] != null) {
        if (recto.style.display == "flex") {
            recto.style.display = "none";
            verso.style.display = "flex";
        } else {
            recto.style.display = "flex";
            verso.style.display = "none";
        }
    }

}

/********************Events*******************/
fleche.addEventListener("click", retourneCarte);