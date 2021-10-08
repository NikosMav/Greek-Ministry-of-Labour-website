
<?php
$changed = '';

// here we must create the html based on logged in user
// connect to get the user data
require_once 'databaseLogin.php';

// we must first connect to the database
$mysqli = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

// see if we got a click on update stoixeia
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateStoixeiaButton'])) {
    // update the stoixeia in the database
    $updateQuery = "update `users` set FirstName = \"{$_POST['firstName']}\", LastName = \"{$_POST['lastName']}\", Email = \"{$_POST['email']}\", PhoneNumber = \"{$_POST['phone']}\", UserName = \"{$_POST['userName']}\" where users.id = {$_SESSION['ID']}";

    // run the query
    $mysqli->query($updateQuery);
    $changed = "<h1 class=\"border-white d-xl-flex justify-content-xl-center\" style=\"font-size: 30px;margin: 13px;color: rgb(12,123,9);\">Η ενημέρωση των στοιχείων σας ήταν επιτυχής!</h1>";
}  


// make the query to get the data
$userQuery = "select * from `users` where ID = {$_SESSION['ID']}";
// run it
$userRow = $mysqli->query($userQuery)->fetch_array();

// now echo the html

echo "<div class=\"float-right\" style=\"width: 155%;margin-left: 0px;margin-top: 1px;height: 899px;background-color: #173f5f;\">
<div class=\"row\">
    <div class=\"col\">
        <h1 class=\"text-center border rounded border-white\" style=\"color: #ffffff;margin-top: 97px;margin-bottom: 15px;width: 80%;margin-left: 10%;background-color: rgba(40,45,50,0.88);padding-bottom: 35px;padding-top: 7px;\">Τα Στοιχεία μου</h1>
        <div style=\"height: 12px;margin-top: -41px;margin-bottom: 50px;background-color: #ffffff;width: 70%;margin-left: 15%;\"></div>
    </div>
</div>
<form method=\"post\" action=\"ProfilErgod.php\">
    <div class=\"form-row\" style=\"margin-left: -10px;margin-bottom: 15px;\">
        <div class=\"col\" style=\"margin-top: 20px;\">
            <div class=\"form-group\" style=\"margin-right: 50px;margin-left: 60px;\"><label for=\"firstName\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;\"><strong>Όνομα</strong><br></label>
                <div class=\"input-group border rounded border-warning shadow\"><input class=\"form-control\" type=\"text\" id=\"firstName\" name=\"firstName\" required=\"\" value=\"{$userRow['FirstName']}\" readonly=\"\">
                    <div class=\"input-group-prepend\"><button id=\"firstNameEditButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"button\" style=\"background-color: #8c6804;\"><i class=\"fa fa-pencil\" style=\"font-size: 20px;color: #000000;\"></i><small style=\"display: none;\">koumpi</small></button></div>
                </div>
            </div>
        </div>
        <div class=\"col\" style=\"margin-top: 20px;\">
            <div class=\"form-group\" style=\"margin-right: 50px;margin-left: 60px;\"><label for=\"lastName\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;\"><strong>Επίθετο</strong><br></label>
                <div class=\"input-group border rounded border-warning shadow\"><input class=\"form-control\" type=\"text\" id=\"lastName\" name=\"lastName\" required=\"\" value=\"{$userRow['LastName']}\" readonly=\"\">
                    <div class=\"input-group-prepend\"><button id=\"lastNameEditButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"button\" style=\"background-color: #8c6804;\"><i class=\"fa fa-pencil\" style=\"font-size: 20px;color: #000000;\"></i><small style=\"display: none;\">koumpi</small></button></div>
                </div>
            </div>
        </div>
    </div>
    <div style=\"height: 3px;background-color: #ffffff;width: 80%;margin-left: 10%;\"></div>
    <div class=\"form-row\" style=\"margin-left: -10px;margin-top: 0px;margin-bottom: 15px;\">
        <div class=\"col\" style=\"margin-top: 20px;\">
            <div class=\"form-group\" style=\"margin-right: 50px;margin-left: 60px;\"><label for=\"email\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;\"><strong>Email</strong><br></label>
                <div class=\"input-group border rounded border-warning shadow\"><input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" value=\"{$userRow['Email']}\" readonly=\"\">
                    <div class=\"input-group-prepend\"><button id=\"emailEditButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"button\" style=\"background-color: #8c6804;\"><i class=\"fa fa-pencil\" style=\"font-size: 20px;color: #000000;\"></i><small style=\"display: none;\">koumpi</small></button></div>
                </div>
            </div>
        </div>
        <div class=\"col\" style=\"margin-top: 20px;\">
            <div class=\"form-group\" style=\"margin-right: 50px;margin-left: 60px;\"><label for=\"phone\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;\"><strong>Κινητό Τηλέφωνο</strong><br></label>
                <div class=\"input-group border rounded border-warning shadow\"><input class=\"form-control\" type=\"tel\" id=\"phone\" name=\"phone\" minlength=\"10\" maxlength=\"10\" value=\"{$userRow['PhoneNumber']}\" readonly=\"\">
                    <div class=\"input-group-prepend\"><button id=\"phoneEditButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"button\" style=\"background-color: #8c6804;\"><i class=\"fa fa-pencil\" style=\"font-size: 20px;color: #000000;\"></i><small style=\"display: none;\">koumpi</small></button></div>
                </div>
            </div>
        </div>
    </div>
    <div style=\"height: 3px;background-color: #ffffff;width: 80%;margin-left: 10%;\"></div>
    <div class=\"form-row\" style=\"margin-left: -10px;\">
        <div class=\"col\" style=\"margin-top: 20px;\">
            <div class=\"form-group\" style=\"margin-right: 50px;margin-left: 60px;\"><label for=\"userName\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;\"><strong>Username</strong><br></label>
                <div class=\"input-group border rounded border-warning shadow\"><input class=\"form-control\" type=\"text\" id=\"userName\" name=\"userName\" required=\"\" value=\"{$userRow['UserName']}\" readonly=\"\">
                    <div class=\"input-group-prepend\"><button id=\"userNameEditButton\" class=\"btn btn-primary border rounded border-warning\" data-bs-hover-animate=\"pulse\" type=\"button\" style=\"background-color: #8c6804;\"><i class=\"fa fa-pencil\" style=\"font-size: 20px;color: #000000;\"></i><small style=\"display: none;\">koumpi</small></button></div>
                </div>
            </div>
        </div>
        <div class=\"col\" style=\"margin-top: 20px;\"><button class=\"btn btn-primary border rounded border-white\" data-bs-hover-animate=\"pulse\" type=\"submit\" name=\"updateStoixeiaButton\" style=\"margin-top: 33px;padding: 11px;width: 50%;margin-left: 130px;padding-bottom: 16px;padding-top: 16px;background-color: #0c7b09;\"><strong>Ενημέρωση Στοιχείων</strong><br></button>
        {$changed}
        </div>
    </div>
</form>
</div>";

?>


<script src="assets/js/allaghStoixeiwn.js"></script>