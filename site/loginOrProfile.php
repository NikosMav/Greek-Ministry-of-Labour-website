<?php
session_status() === PHP_SESSION_ACTIVE ?: session_start();

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
    // we must link the profile button to ergaz or ergod accordingly
    if($_SESSION['userType'] === 'employee'){
        $link = "ProfilErgaz.php";
    } else {
        $link = "ProfilErgod.php";
    }

    echo "<div class=\"col text-right\"
    style=\"margin: 34px;margin-right: -298px;\"><a class=\"text-right\" href=\"Epikoinonia.php\" style=\"background-color: rgba(0,0,0,0);color: #063570;font-size: 15px;margin-right: 7px;\">ΕΠΙΚΟΙΝΩΝΙΑ<br></a></div>
    </div><a class=\"btn btn-primary text-uppercase text-center border rounded border-white shadow float-right ml-auto\" role=\"button\" data-bs-hover-animate=\"pulse\" href=\"{$link}\" style=\"background-color: #8c6804;height: 70px;width: 108px;margin-right: -154px;padding: 20px;\"><strong>προφIλ</strong></a>
    <a
    class=\"text-right\" href=\"Logout.php\" style=\"background-color: rgba(0,0,0,0);color: #063570;font-size: 15px;margin-right: -194px;margin-left: 169px;margin-top: -7px;\">EΞΟΔΟΣ</a>
    </div>";
} else {
    echo "<div class=\"col text-right\"
    style=\"margin: 34px;margin-right: -365px;\"><a class=\"text-right\" href=\"Epikoinonia.php\" style=\"background-color: rgba(0,0,0,0);color: #063570;font-size: 15px;\">ΕΠΙΚΟΙΝΩΝΙΑ<br></a></div>
</div><button alt=\"navButton\" data-toggle=\"collapse\" class=\"navbar-toggler\" data-target=\"#navcol-1\">button</button><a class=\"btn btn-primary text-capitalize text-center border rounded border-white shadow float-right ml-auto\" role=\"button\" data-bs-hover-animate=\"pulse\"
href=\"Login.php\" style=\"background-color: #063570;height: 70px;width: 110px;margin-right: -200px;padding: 20px;padding-left: 17px;\"><strong>ΣΥΝΔΕΣΗ</strong></a></div>";
}
?>

