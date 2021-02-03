/*******Variables*******/

var backButton=document.getElementById("backButton");

/*******Fonctions*******/

function goBack(){
    window.history.back();
}

/*******EVENTS**********/

backButton.addEventListener("click",goBack);