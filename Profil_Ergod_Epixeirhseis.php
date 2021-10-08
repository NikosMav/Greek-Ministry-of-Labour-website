
<div class="float-right" style="width: 155%;margin-left: 0px;margin-top: 1px;height: 899px;background-color: #173f5f;">
    <div class="row">
        <div class="col">
            <h1 class="text-center border rounded border-white shadow-lg" style="color: #ffffff;margin-top: 97px;margin-bottom: 15px;width: 80%;margin-left: 10%;background-color: rgba(40,45,50,0.88);padding-bottom: 35px;padding-top: 7px;">Οι Επιχειρήσεις μου</h1>
            <div style="height: 12px;margin-top: -41px;margin-bottom: 50px;background-color: #ffffff;width: 70%;margin-left: 15%;"></div>
        </div>
    </div>
    <div class="row" style="margin-left: -10px;margin-bottom: 15px;height: 170px;">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead><tr style="display:none;"><th>header</th></tr></thead>
                    <tbody>

                        <?php
                        // connect to see if the user has an appointment
                        require_once 'databaseLogin.php';

                        // we must first connect to the database
                        $mysqli = new mysqli($hn, $un, $pw, $db);
                        // Check connection
                        if ($mysqli -> connect_errno) {
                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                        exit();
                        }

                        // here we must get all the businesses and simply list their data
                        $businessesQuery = 'select * from businesses where Employers_Users_ID = ' . $_SESSION['ID'];

                        // run the query to get the businesses
                        $businessesResult = $mysqli->query($businessesQuery);

                        // loop through all the businesses
                        while($businessRow = $businessesResult->fetch_array()){
                            // we only have the name, fill the others with whatever
                            echo "<tr>
                                    <td style=\"color: #ffffff;width: 25%;\">
                                        <div class=\"form-group\"><label for=\"businessNameAria\" style=\"width: 100%;\"><strong>Όνομα Επιχείρησης</strong></label><input id=\"businessNameAria\" class=\"border rounded border-warning shadow\" type=\"text\" style=\"width: 100%;\" value=\"{$businessRow['BusinessName']}\" readonly=\"\"></div>
                                    </td>
                                    <td style=\"color: #ffffff;width: 25%;\">
                                        <div class=\"form-group\"><label for=\"businessAddressAria\" style=\"width: 100%;\"><strong>Διεύθυνση Επιχείρησης</strong></label><input id=\"businessAddressAria\" class=\"border rounded border-warning shadow\" type=\"text\" style=\"width: 100%;\" value=\"Χαριλάου Τρικούπη 32\" readonly=\"\"></div>
                                    </td>
                                    <td style=\"color: #ffffff;width: 25%;\">
                                        <div class=\"form-group\"><label for=\"businessPhoneAria\" style=\"width: 100%;\">Σταθερό Τηλέφωνο Επικοινωνίας</label><input id=\"businessPhoneAria\" class=\"border rounded border-warning shadow\" type=\"tel\" style=\"width: 100%;\" value=\"2101726354\" readonly=\"\"></div>
                                    </td>
                                    <td style=\"color: #ffffff;width: 25%;\">
                                        <div class=\"form-group\"><label for=\"businessCellAria\" style=\"width: 100%;\">Κινητό Τηλέφωνο Επικοινωνίας</label><input id=\"businessCellAria\" class=\"border rounded border-warning shadow\" type=\"tel\" style=\"width: 100%;\" value=\"6918273645\" readonly=\"\"></div>
                                    </td>
                                </tr>";
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
