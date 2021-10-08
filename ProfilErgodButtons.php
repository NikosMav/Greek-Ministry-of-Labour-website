<?php

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



// start as all transparent colors
$stoixeiaButtonColor = 'rgba(255,255,255,0.9)';
$rantebouButtonColor = 'rgba(255,255,255,0.9)';
$epixeirhseisButtonColor = 'rgba(255,255,255,0.9)';
$ergasiakhButtonColor = 'rgba(255,255,255,0.9)';
$sxetikaButtonColor = 'rgba(255,255,255,0.9)';


// set the colors based on the choice
if($_SESSION['menuOption'] === 'Stoixeia'){
    $stoixeiaButtonColor = 'rgb(140, 104, 4)';
}

if($_SESSION['menuOption'] === 'Rantebou'){
    $rantebouButtonColor = 'rgb(140, 104, 4)';
}

if($_SESSION['menuOption'] === 'Epixeirhseis'){
    $epixeirhseisButtonColor = 'rgb(140, 104, 4)';
}


if($_SESSION['menuOption'] === 'Ergasiakh'){
    $ergasiakhButtonColor = 'rgb(140, 104, 4)';
}


if($_SESSION['menuOption'] === 'Sxetika'){
    $sxetikaButtonColor = 'rgb(140, 104, 4)';
}



                    

                    


$buttonsHTML = '<form method="post" action="ProfilErgod.php">';

// make stoixeia button
$buttonsHTML.= "<div class=\"row\" style=\"margin-top: 48px;\">
<div class=\"col\"><i class=\"fa fa-book\" style=\"color: #000000;font-size: 50px;margin-left: 10%;margin-top: -2px;\"></i></div>
<div class=\"col\"><button name=\"stoixeiaButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"submit\" style=\"background-color: {$stoixeiaButtonColor};font-size: 22px;width: 160%;margin-left: -70%;color: #000000;\"><strong>Τα Στοιχεία μου</strong></button></div>
</div>";

// make rantebou button
$buttonsHTML.= "<div class=\"row\" style=\"margin-top: 25px;\">
<div class=\"col\"><i class=\"fa fa-calendar-o\" style=\"color: #000000;font-size: 50px;margin-left: 10%;margin-top: -2px;\"></i></div>
<div class=\"col\"><button name=\"rantebouButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"submit\" style=\"background-color: {$rantebouButtonColor};font-size: 22px;width: 160%;margin-left: -70%;color: #000000;\"><strong>Τα Ραντεβού μου</strong><br></button></div>
</div>";

// make epixeirhseis button
$buttonsHTML.= "<div class=\"row\" style=\"margin-top: 25px;\">
<div class=\"col\"><i class=\"fa fa-industry\" style=\"color: #000000;font-size: 50px;margin-left: 10%;margin-top: -4px;\"></i></div>
<div class=\"col\"><button name=\"epixeirhseisButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"submit\" style=\"background-color: {$epixeirhseisButtonColor};font-size: 22px;width: 160%;margin-left: -70%;color: #000000;\"><strong>Οι Επιχειρήσεις μου</strong><br></button></div>
</div>";

// make ergasiakh button
$buttonsHTML.= "<div class=\"row\" style=\"margin-top: 25px;\">
<div class=\"col\"><i class=\"far fa-chart-bar\" style=\"color: #000000;font-size: 50px;margin-left: 10%;margin-top: 13px;\"></i></div>
<div class=\"col\"><button name=\"ergasiakhButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"submit\" style=\"background-color: {$ergasiakhButtonColor};font-size: 22px;width: 160%;margin-left: -70%;color: #000000;\"><strong>Η Εργασιακή Κατασταση των Εργαζομένων μου</strong></button></div>
</div>";

// make sxetika button
$buttonsHTML.= "<div class=\"row\" style=\"margin-top: 25px;\">
<div class=\"col\"><i class=\"fa fa-info-circle\" style=\"color: #000000;font-size: 50px;margin-left: 10%;margin-top: -2px;margin-right: 0px;width: 10%;\"></i></div>
<div class=\"col\"><button name=\"sxetikaButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"submit\" style=\"background-color: {$sxetikaButtonColor};font-size: 22px;width: 160%;margin-left: -70%;color: #000000;\"><strong>Σχετικά</strong><br></button></div>
</div>";


$buttonsHTML .= '</form>';

// write the buttons
echo $buttonsHTML;

?>