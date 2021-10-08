<?php
// start the html to echo
$htmlToEcho = "<div class=\"float-right\" style=\"width: 155%;margin-left: 0px;margin-top: 1px;height: 899px;background-color: #173f5f;\">
<div class=\"row\">
    <div class=\"col\">
        <h1 class=\"text-center border rounded border-white shadow-lg\" style=\"color: #ffffff;margin-top: 97px;margin-bottom: 15px;width: 80%;margin-left: 10%;background-color: rgba(40,45,50,0.88);padding-bottom: 35px;padding-top: 7px;\">Τα Ραντεβού μου</h1>
        <div style=\"height: 12px;margin-top: -41px;margin-bottom: 50px;background-color: #ffffff;width: 70%;margin-left: 15%;\"></div>
    </div>
</div>";

// connect to see if the user has an appointment
require_once 'databaseLogin.php';

// we must first connect to the database
$mysqli = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

// make the query
$appointmentQuery = "select * from `appointments` where appointments.Users_ID = {$_SESSION['ID']}";
$appointmentResults = $mysqli->query($appointmentQuery);

// check if there actually exists one appointment
if($appointmentResults->num_rows !== 0){

    while($appointmentRow = $appointmentResults->fetch_array()){
        // add the row to the html
        $htmlToEcho .= "<div class=\"row\" style=\"margin-left: -10px;margin-bottom: 15px;height: 170px;\">
        <div class=\"col\" style=\"margin-top: 20px;\">
            <form style=\"margin-left: 60px;margin-right: 30px;\">
                <div class=\"form-group\"><label for=\"dateAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;\"><strong>Ημερομηνία</strong><br></label><input id=\"dateAria\" class=\"border rounded border-warning shadow-lg form-control\" type=\"date\" value=\"{$appointmentRow['Date']}\" style=\"height: 50px;\"
                        readonly=\"\"></div>
            </form>
        </div>
        <div class=\"col\" style=\"margin-top: 20px;\">
            <form style=\"margin-left: 50px;margin-right: 30px;\">
                <div class=\"form-group\"><label for=\"hourAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;\"><strong>Ώρα</strong><br></label><select id=\"hourAria\" class=\"border rounded border-warning shadow-lg form-control\" style=\"height: 50px;\" disabled=\"\"><optgroup label=\"Ώρες\"><option value=\"7:00\" selected=\"\">7:00</option><option value=\"8:00\">8:00</option><option value=\"9:00\">9:00</option><option value=\"10:00\" selected=\"\">10:00</option><option value=\"11:00\">11:00</option><option value=\"12:00\">12:00</option></optgroup></select></div>
            </form>
        </div>
        <div class=\"col\" style=\"margin-top: 20px;\">
            <form style=\"margin-left: 50px;margin-right: 30px;\">
                <div class=\"form-group\"><label for=\"addressAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;\"><strong>Διεύθυνση</strong><br></label><input id=\"addressAria\" class=\"border rounded border-warning shadow-lg form-control\" type=\"text\" value=\"Σταδίου 59\" style=\"height: 50px;\"
                        readonly=\"\"></div>
            </form>
        </div>
        <div class=\"col\" style=\"margin-top: 20px;\">
            <form style=\"margin-left: 50px;margin-right: 30px;\">
                <div class=\"form-group\"><label for=\"commentsAria\" style=\"color: rgba(255,255,255,0.9);font-size: 20px;\"><strong>Σχόλια</strong><br></label><textarea id=\"commentsAria\" class=\"border rounded border-warning shadow-lg form-control\" style=\"height: 90px;\" readonly=\"\">{$appointmentRow['Comment']}</textarea></div>
            </form>
        </div>
    </div>";
    }


}

// finish the html
$htmlToEcho .= "<div style=\"height: 3px;background-color: #ffffff;width: 80%;margin-left: 10%;\"></div>
</div>";

// echo it
echo $htmlToEcho;
?>