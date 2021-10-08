<!-- <select id="businessSelector"  onchange="handleBusinessChange(event);" class="border rounded border-white" style="width: 700px;height: 52px;background-color: #171f32;color: #f0f9ff;margin-right: -27px;margin-left: 178px;padding: 0px;padding-bottom: 0px;margin-bottom: -15px;padding-right: 0px;padding-left: 275px;font-size: 23px;"><optgroup label="Επιχειρήσεις"><option value="12" selected="">Μαγαζάκι 1</option><option value="13">Μαγαζάκι 2</option><option value="14">Μαγαζάκι 3</option></optgroup></select> -->

<?php
// get access to session
session_status() === PHP_SESSION_ACTIVE ?: session_start();

require_once 'databaseLogin.php';

// we must first connect to the database
$mysqli = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

// now we are connected

// we have the ID of the employer connected atm
$employerID = $_SESSION['ID'];

// formulate the query to get the businesses of the employer
$employerBusinessesQuery = "select * from `businesses` where Employers_Users_ID = {$employerID}";

// execute the query
$businessesQueryResult = $mysqli -> query($employerBusinessesQuery);

$selectorString = '<label><select id="businessSelector"  onchange="handleBusinessChange(event);" class="border rounded border-white" style="width: 700px;height: 52px;background-color: #171f32;color: #f0f9ff;margin-right: -27px;margin-left: 178px;padding: 0px;padding-bottom: 0px;margin-bottom: -15px;padding-right: 0px;padding-left: 275px;font-size: 23px;"><optgroup label="Επιχειρήσεις">';

while ($businessRow = $businessesQueryResult->fetch_array()) {
    $businessName = $businessRow['BusinessName'];
    $selectorString .= "<option value=\"{$businessName}\">{$businessName}</option>";
}


$selectorString .= '</optgroup></select></label>';

// we must create a selector with the businesses of the logged in employer
echo $selectorString;
?>