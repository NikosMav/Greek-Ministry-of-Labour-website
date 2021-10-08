<?php

// check if  connected
    if (!(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && $_SESSION['userType'] == 'employer')) {
        require 'ErrorMessage.php';
        exit;
    }
// see if the user has clicked a button, else make him click on first
if(!isset($_SESSION['menuOption'])){
    $_SESSION['menuOption'] = 'Stoixeia';
}

// see if we got a click on stoixeia
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['stoixeiaButton'])) {
    $_SESSION['menuOption'] = 'Stoixeia';
} 

// see if we got a click on rantebou
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['rantebouButton'])) {
    $_SESSION['menuOption'] = 'Rantebou';
}

// see if we got a click on ergasiakh
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['epixeirhseisButton'])) {
    $_SESSION['menuOption'] = 'Epixeirhseis';
}  

// see if we got a click on ergasiakh
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ergasiakhButton'])) {
    $_SESSION['menuOption'] = 'Ergasiakh';
}  

// see if we got a click on sxetika
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sxetikaButton'])) {
    $_SESSION['menuOption'] = 'Sxetika';
}  


// depending on which one he has clicked one, require appropriate page
if($_SESSION['menuOption'] === 'Stoixeia'){
    require 'Profil_Ergod_Stoixeia.php';
}

if($_SESSION['menuOption'] === 'Rantebou'){
    require 'Profil_Ergod_Rantebou.php';
}

if($_SESSION['menuOption'] === 'Epixeirhseis'){
    require 'Profil_Ergod_Epixeirhseis.php';
}


if($_SESSION['menuOption'] === 'Ergasiakh'){
   require 'Profil_Ergod_Ergasiakh.php';
}


if($_SESSION['menuOption'] === 'Sxetika'){
    require 'Profil_Ergod_Sxetika.php';
}

?>