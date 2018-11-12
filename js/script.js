function dempro() {
    document.getElementById("dem").style.height = '50vh';
    document.getElementById("pro").style.height = '50vh';
    document.getElementById("pro").style.bottom = '0px';
    document.getElementById('connex').innerHTML = "";
    setTimeout(ecriretitre,1000);
}
function ecriretitre(){
    document.getElementById('dem').innerHTML = "<p class ='dp' id='demander'> Je demande de l'aide </p>";
    document.getElementById('pro').innerHTML = "<p class ='dp' id='proposer'> Je propose de l'aide </p>";
}


function dem() {
    if (document.getElementById("dem").style.height == '50vh') {
        document.getElementById("demander").style.marginTop = "3vh";
        document.getElementById("dem").style.height = '100vh';
        document.getElementById("pro").style.height = '0vh';
        document.getElementById("pro").innerHTML = "";
        setTimeout(demanderpage, 1000);
    }
    
}
function demanderpage() {
    document.location.href="demander/demander.html"
}

function pro() {
    if (document.getElementById("pro").style.height == '50vh') {
        document.getElementById("proposer").style.marginTop = "3vh";
        document.getElementById("pro").style.height = '100vh';
        document.getElementById("dem").style.height = '0vh';
        document.getElementById("dem").innerHTML = "";
        setTimeout(proposerpage, 1000);
    }
    
}
function proposerpage() {
    document.location.href="proposer/proposer.html"
}



function procovoiturage() {
    document.location.href="procovoiturage.html"
}
function procours() {
    document.location.href="procours.html"
}
function demcovoiturage() {
    document.location.href="demcovoiturage.html"
}
function demcours() {
    document.location.href="demcours.html"
}
