<?php

// check if connected employee
if (!(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && $_SESSION['userType'] == 'employee')) {
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
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ergasiakhButton'])) {
    $_SESSION['menuOption'] = 'Ergasiakh';
}  

// see if we got a click on sxetika
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sxetikaButton'])) {
    $_SESSION['menuOption'] = 'Sxetika';
}  

// depending on which one he has clicked one, require appropriate page

if($_SESSION['menuOption'] === 'Stoixeia'){
    require 'Profil_Ergaz_Stoixeia.php';
}

if($_SESSION['menuOption'] === 'Rantebou'){
    require 'Profil_Ergaz_Rantebou.php';
}


if($_SESSION['menuOption'] === 'Ergasiakh'){
    // in this case, we must further check what the user actually does right now
    require_once 'databaseLogin.php';

    // we must first connect to the database
    $mysqli = new mysqli($hn, $un, $pw, $db);
    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }


    $realWorker = true;

    // now, find out if employee with logged in ID has a remote period
    $remoteQuery = "select * from `remoteperiods` where remoteperiods.Employees_Users_ID = {$_SESSION['ID']}";
    $remoteResults = $mysqli->query($remoteQuery);
    if($remoteResults->num_rows !== 0){
        // this dude is a remote worker
        $remoteRow = $remoteResults->fetch_array();
        $remoteHTML = "<div class=\"float-right\" style=\"width: 155%;margin-left: 0px;margin-top: 1px;height: 899px;background-color: #173f5f;\">
        <div class=\"row\">
            <div class=\"col\">
                <h1 class=\"text-center border rounded border-white shadow-lg\" style=\"color: #ffffff;margin-top: 97px;margin-bottom: 15px;width: 80%;margin-left: 10%;background-color: rgba(40,45,50,0.88);padding-bottom: 35px;padding-top: 7px;\">Η Εργασιακή μου Κατάσταση</h1>
                <div style=\"height: 12px;margin-top: -41px;margin-bottom: 50px;background-color: #ffffff;width: 70%;margin-left: 15%;\"></div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-left: -10px;margin-bottom: 15px;height: 170px;\">
            <div class=\"col\" style=\"margin-top: 20px;\">
                <p class=\"text-left\" style=\"color: #ffffff;font-size: 20px;margin-left: 168px;\"><strong>Κατάσταση:</strong></p><button class=\"btn btn-primary bg-success border rounded border-white\" data-toggle=\"tooltip\" data-bs-tooltip=\"\" data-placement=\"left\" data-bs-hover-animate=\"pulse\" type=\"submit\" style=\"background-color: #00000000;margin-left: 200px;width: 55px;height: 50px;font-size: 20px;\"
                    title=\"Εργασία εξ'αποστάσεως\"><i class=\"fa fa-home\" data-bs-hover-animate=\"pulse\" style=\"color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;\"></i><small style=\"display: none;\">koumpi</small></button></div>
            <div class=\"col\" style=\"margin-top: 20px;\">
                <div class=\"card border-warning border rounded float-right\" style=\"background-color: rgba(40,45,50,0.88);color: #ffffff;width: 80%;margin-left: 0px;margin-right: 10%;margin-top: 8px;\">
                    <div class=\"card-header\">
                        <h1 style=\"display:none;\">h1</h1><h2 style=\"display:none;\">h2</h2><h3 style=\"display:none;\">h3</h3><h4 style=\"display:none;\">h4</h4><h5 class=\"text-center mb-0\">Υπενθύμιση</h5>
                    </div>
                    <div class=\"card-body\" style=\"height: 83px;\">
                        <p class=\"text-center\">Βρίσκεστε σε καθεστώς εξ' αποστάσεως εργασίας</p>
                    </div>
                </div>
            </div>
            <div class=\"col\" style=\"margin-top: 20px;\">
                <div class=\"form-group\"><label for=\"startDateAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;width: 100%;\"><strong>Από:</strong><br></label><input id=\"startDateAria\" class=\"border rounded border-warning shadow-lg\" type=\"date\" value=\"{$remoteRow['StartDate']}\" style=\"height: 50px;width: 80%;margin-left: 0px;\"
                        readonly=\"\"></div>
            </div>
            <div class=\"col\" style=\"margin-top: 20px;\">
                <div class=\"form-group\"><label for=\"endDateAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;width: 100%;\"><strong>Μέχρι:</strong><br></label><input id=\"endDateAria\" class=\"border rounded border-warning shadow-lg\" type=\"date\" value=\"{$remoteRow['EndDate']}\" style=\"height: 50px;width: 80%;margin-left: 0px;\"
                        readonly=\"\"></div>
            </div>
        </div>
        <div style=\"height: 3px;background-color: #ffffff;width: 80%;margin-left: 10%;\"></div>
    </div>";
        echo $remoteHTML;
        $realWorker = false;

    }

    // now, find out if employee with logged in ID has a halt period
    $haltQuery = "select * from `jobhaltings` where jobhaltings.Employees_Users_ID = {$_SESSION['ID']}";
    $haltResults = $mysqli->query($haltQuery);
    if($haltResults->num_rows !== 0){
        // this dude is a halted worker
        $haltRow = $haltResults->fetch_array();
        $haltHTML = "<div class=\"float-right\" style=\"width: 155%;margin-left: 0px;margin-top: 1px;height: 899px;background-color: #173f5f;\">
        <div class=\"row\">
            <div class=\"col\">
                <h1 class=\"text-center border rounded border-white shadow-lg\" style=\"color: #ffffff;margin-top: 97px;margin-bottom: 15px;width: 80%;margin-left: 10%;background-color: rgba(40,45,50,0.88);padding-bottom: 35px;padding-top: 7px;\">Η Εργασιακή μου Κατάσταση</h1>
                <div style=\"height: 12px;margin-top: -41px;margin-bottom: 50px;background-color: #ffffff;width: 70%;margin-left: 15%;\"></div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-left: -10px;margin-bottom: 15px;height: 170px;\">
            <div class=\"col\" style=\"margin-top: 20px;\">
                <p class=\"text-left\" style=\"color: #ffffff;font-size: 20px;margin-left: 168px;\"><strong>Κατάσταση:</strong></p><button class=\"btn btn-primary bg-warning border rounded border-white\" data-toggle=\"tooltip\" data-bs-tooltip=\"\" data-placement=\"right\" data-bs-hover-animate=\"pulse\" type=\"submit\" style=\"background-color: #00000000;margin: 0;padding: -25px;margin-left: 200px;width: 55px;height: 50px;\"
                    title=\"Αναστολή σύμβασης εργασίας\"><i class=\"fa fa-pause\" data-bs-hover-animate=\"pulse\" style=\"color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;font-size: 20px;\"></i><small style=\"display: none;\">koumpi</small></button></div>
            <div class=\"col\" style=\"margin-top: 20px;\">
                <div class=\"card border-warning border rounded float-right\" style=\"background-color: rgba(40,45,50,0.88);color: #ffffff;width: 80%;margin-left: 0px;margin-right: 10%;margin-top: 8px;\">
                    <div class=\"card-header\">
                        <h1 style=\"display:none;\">h1</h1><h2 style=\"display:none;\">h2</h2><h3 style=\"display:none;\">h3</h3><h4 style=\"display:none;\">h4</h4><h5 class=\"text-center mb-0\">Υπενθύμιση</h5>
                    </div>
                    <div class=\"card-body\" style=\"height: 83px;\">
                        <p class=\"text-center\">Βρίσκεστε σε καθεστώς αναστολής σύμβασης εργασίας</p>
                    </div>
                </div>
            </div>
            <div class=\"col\" style=\"margin-top: 20px;\">
                <div class=\"form-group\"><label for=\"startDateAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;width: 100%;\"><strong>Από:</strong><br></label><input id=\"startDateAria\" class=\"border rounded border-warning shadow-lg\" type=\"date\" value=\"{$haltRow['StartDate']}\" style=\"height: 50px;width: 80%;margin-left: 0px;\"
                        readonly=\"\"></div>
            </div>
            <div class=\"col\" style=\"margin-top: 20px;\">
                <div class=\"form-group\"><label for=\"endDateAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;width: 100%;\"><strong>Μέχρι:</strong><br></label><input <input id=\"endDateAria\" class=\"border rounded border-warning shadow-lg\" type=\"date\" value=\"{$haltRow['EndDate']}\" style=\"height: 50px;width: 80%;margin-left: 0px;\"
                        readonly=\"\"></div>
            </div>
        </div>
        <div style=\"height: 3px;background-color: #ffffff;width: 80%;margin-left: 10%;\"></div>
    </div>";
        echo $haltHTML;
        $realWorker = false;
    }

    // now, find out if employee with logged in ID has a child period
    $childQuery = "select * from `specialkidsleave` where specialkidsleave.Employees_Users_ID = {$_SESSION['ID']}";
    $childResults = $mysqli->query($childQuery);
    if($childResults->num_rows !== 0){
        // this dude is a child worker
        $childRow = $childResults->fetch_array();
        $childHTML = "<div class=\"float-right\" style=\"width: 155%;margin-left: 0px;margin-top: 1px;height: 899px;background-color: #173f5f;\">
        <div class=\"row\">
            <div class=\"col\">
                <h1 class=\"text-center border rounded border-white shadow-lg\" style=\"color: #ffffff;margin-top: 97px;margin-bottom: 15px;width: 80%;margin-left: 10%;background-color: rgba(40,45,50,0.88);padding-bottom: 35px;padding-top: 7px;\">Η Εργασιακή μου Κατάσταση</h1>
                <div style=\"height: 12px;margin-top: -41px;margin-bottom: 50px;background-color: #ffffff;width: 70%;margin-left: 15%;\"></div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-left: -10px;margin-bottom: 15px;height: 170px;\">
            <div class=\"col\" style=\"margin-top: 20px;\">
                <p class=\"text-left\" style=\"color: #ffffff;font-size: 20px;margin-left: 168px;\"><strong>Κατάσταση:</strong></p><button class=\"btn btn-primary border rounded border-white shadow\" data-toggle=\"tooltip\" data-bs-tooltip=\"\" data-placement=\"right\" data-bs-hover-animate=\"pulse\" type=\"submit\" style=\"background-color: #f2c2c2;margin: 0;padding: -25px;margin-left: 200px;width: 55px;height: 50px;\"
                    title=\"Άδεια Ειδικού Σκοπού\"><i class=\"fas fa-child\" data-bs-hover-animate=\"pulse\" style=\"color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;font-size: 20px;\"></i><small style=\"display: none;\">koumpi</small></button></div>
            <div class=\"col\" style=\"margin-top: 20px;\">
                <div class=\"card border-warning border rounded shadow-lg float-right\" style=\"background-color: rgba(40,45,50,0.88);color: #ffffff;width: 80%;margin-left: 0px;margin-right: 10%;margin-top: 8px;\">
                    <div class=\"card-header\">
                        <h1 style=\"display:none;\">h1</h1><h2 style=\"display:none;\">h2</h2><h3 style=\"display:none;\">h3</h3><h4 style=\"display:none;\">h4</h4><h5 class=\"text-center mb-0\">Υπενθύμιση</h5>
                    </div>
                    <div class=\"card-body\" style=\"height: 83px;\">
                        <p class=\"text-center\">Βρίσκεστε σε καθεστώς άδειας ειδικού σκοπού</p>
                    </div>
                </div>
            </div>
            <div class=\"col\" style=\"margin-top: 20px;\">
                <div class=\"form-group\"><label for=\"startDateAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;width: 100%;\"><strong>Από:</strong><br></label><input id=\"startDateAria\" class=\"border rounded border-warning shadow-lg\" type=\"date\" value=\"{$childRow['StartDate']}\" style=\"height: 50px;width: 80%;margin-left: 0px;\"
                        readonly=\"\"></div>
            </div>
            <div class=\"col\" style=\"margin-top: 20px;\">
                <div class=\"form-group\"><label for=\"endDateAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;width: 100%;\"><strong>Μέχρι:</strong><br></label><input <input id=\"endDateAria\" class=\"border rounded border-warning shadow-lg\" type=\"date\" value=\"{$childRow['EndDate']}\" style=\"height: 50px;width: 80%;margin-left: 0px;\"
                        readonly=\"\"></div>
            </div>
        </div>
        <div style=\"height: 3px;background-color: #ffffff;width: 80%;margin-left: 10%;\"></div>
    </div>";
        echo $childHTML;
        $realWorker = false;
    }

    // if all else fails, he a real worker
    if($realWorker){
        require 'Profil_Ergaz_Ergasiakh_Kammia.php';
    }


}


if($_SESSION['menuOption'] === 'Sxetika'){
    require 'Profil_Ergaz_Sxetika.php';
}

?>