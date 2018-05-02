new WOW().init(); /* Inicia las animaciones programadas */

function To_User() {
	document.getElementById("Settings").style.display = "none";
    document.getElementById("Home").style.display = "none";
    document.getElementById("Stats").style.display = "none";
    document.getElementById("Routines").style.display = "none";
    document.getElementById("User").style.display = "block";
}

function To_Home() {
	document.getElementById("Settings").style.display = "none";
    document.getElementById("User").style.display = "none";
    document.getElementById("Stats").style.display = "none";
    document.getElementById("Routines").style.display = "none";
    document.getElementById("Home").style.display = "block";
}

function To_Settings() {
    document.getElementById("Home").style.display = "none";
    document.getElementById("User").style.display = "none";
    document.getElementById("Stats").style.display = "none";
    document.getElementById("Routines").style.display = "none";
    document.getElementById("Settings").style.display = "block";
}

function To_Stats() {
    document.getElementById("Home").style.display = "none";
    document.getElementById("User").style.display = "none";
    document.getElementById("Settings").style.display = "none";
    document.getElementById("Routines").style.display = "none";
    document.getElementById("Stats").style.display = "block";
}

function To_Routines() {
    document.getElementById("Home").style.display = "none";
    document.getElementById("User").style.display = "none";
    document.getElementById("Settings").style.display = "none";
    document.getElementById("Stats").style.display = "none";
    document.getElementById("Routines").style.display = "block";
}


function toMaps() {
    window.location.replace('/logs/maps');
}
