<!DOCTYPE html>
<html lang="gr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="assets/css/IM%20FELL%20French%20Canon.css">
    <link rel="stylesheet" href="assets/css/Oswald.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Calendar.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4-1.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Large-Dropdown-Menu-BS3-1.css">
    <link rel="stylesheet" href="assets/css/Large-Dropdown-Menu-BS3.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Pretty-Login-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/Scroll-To-Top.css">
</head>

<!-- Here we will create a hidden form where php will pass data to JavaScript-->
<?php
require_once 'databaseLogin.php';

require_once 'helper.php';
session_status() === PHP_SESSION_ACTIVE ?: session_start();


// we must first connect to the database
$mysqli = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

// now we are connected

// we have the ID of the employer connected atm
$employerID = getLoggedInID();

// formulate the query to get the businesses of the employer
$employerBusinessesQuery = "select * from `businesses` where Employers_Users_ID = {$employerID}";

// execute the query
$businessesQueryResult = $mysqli -> query($employerBusinessesQuery);

// initialize data to send to JS
$hiddenInputTag = "<input id=\"dataFromPhp\" type=\"hidden\" value=\"";

// loop through the businesses
while ($businessRow = $businessesQueryResult->fetch_array()) {
    // add a !
    $hiddenInputTag .= '!';
    // now we must add the business name
    $hiddenInputTag .= $businessRow['BusinessName'];
    // now add a :
    $hiddenInputTag .= ':';

    // now we need to find all the employees that work in this business and are halted
    $haltedEmployeesQuery = 'select distinct Users_ID 
                       from `employees` inner join `businesses` 
                       on employees.Businesses_Employers_Users_ID = businesses.Employers_Users_ID
                       where employees.Users_ID in (select Employees_Users_ID from jobhaltings)
                       and   employees.Businesses_BusinessName = "' . $businessRow['BusinessName'] . '"';

    
    // now we need to find all the employees that work in this business and are at home
    $homeEmployeesQuery = 'select distinct Users_ID 
                       from `employees` inner join `businesses` 
                       on employees.Businesses_Employers_Users_ID = businesses.Employers_Users_ID
                       where employees.Users_ID in (select Employees_Users_ID from remoteperiods)
                       and   employees.Businesses_BusinessName = "' . $businessRow['BusinessName'] . '"';


    // now we need to find all the employees that work in this business and have a special child leave
    $childEmployeesQuery = 'select distinct Users_ID 
                       from `employees` inner join `businesses` 
                       on employees.Businesses_Employers_Users_ID = businesses.Employers_Users_ID
                       where employees.Users_ID in (select Employees_Users_ID from specialkidsleave)
                       and   employees.Businesses_BusinessName = "' . $businessRow['BusinessName'] . '"';


    // now we need to find all the employees that work in this business and are at work
    $workingEmployeesQuery = 'select distinct Users_ID 
                       from `employees` inner join `businesses` 
                       on employees.Businesses_Employers_Users_ID = businesses.Employers_Users_ID
                       where employees.Users_ID not in (select Employees_Users_ID from remoteperiods)
                       and   employees.Users_ID not in (select Employees_Users_ID from jobhaltings)
                       and   employees.Users_ID not in (select Employees_Users_ID from specialkidsleave)
                       and   employees.Businesses_BusinessName = "' . $businessRow['BusinessName'] . '"';


    // execute the queries
    $haltedEmployeesQueryResult = $mysqli -> query($haltedEmployeesQuery);
    $homeEmployeesQueryResult = $mysqli -> query($homeEmployeesQuery);
    $childEmployeesQueryResult = $mysqli -> query($childEmployeesQuery);
    $workingEmployeesQueryResult = $mysqli -> query($workingEmployeesQuery);


    // loop through the working employees found
    while ($employeeRow = $workingEmployeesQueryResult->fetch_array()) {
        // we must locate employee in users table, so as to get their first name, last name and ID
        $userQuery = 'select ID, FirstName, LastName from `users` inner join `employees` on users.ID = ' . $employeeRow['Users_ID'];

        // execute the query to find the data
        $userQueryResult = $mysqli -> query($userQuery);
        
        // we only have one row, get what we need
        $userRow = $userQueryResult->fetch_array();
        

        // add a ,
        $hiddenInputTag .= ',';
        // add first name and last name
        $hiddenInputTag .= $userRow['FirstName'] . ' ' . $userRow['LastName'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the ID
        $hiddenInputTag .= $userRow['ID'];

        // finish entry
        $hiddenInputTag .= ';;;,';
    }



    // loop through the halted employees found
    while ($employeeRow = $haltedEmployeesQueryResult->fetch_array()) {
        // we must locate employee in users table, so as to get their first name, last name and ID
        $userQuery = 'select ID, FirstName, LastName from `users` inner join `employees` on users.ID = ' . $employeeRow['Users_ID'];

        // execute the query to find the data
        $userQueryResult = $mysqli -> query($userQuery);
        
        // we only have one row, get what we need
        $userRow = $userQueryResult->fetch_array();
        
        // we must find which dhlwsh is active for that user
        $dhlwshQuery = 'select * from `jobhaltings` where jobhaltings.Employees_Users_ID = ' . $userRow['ID'];

        // actually execute the query
        $dhlwshQueryResult = $mysqli -> query($dhlwshQuery);

        // fetch the first row
        $dhlwshRow = $dhlwshQueryResult->fetch_array();

        
        // start writing data


        // add a ,
        $hiddenInputTag .= ',';
        // add first name and last name
        $hiddenInputTag .= $userRow['FirstName'] . ' ' . $userRow['LastName'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the ID
        $hiddenInputTag .= $userRow['ID'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the Halt
        $hiddenInputTag .= 'Halt';

        // add a ;
        $hiddenInputTag .= ';';
        // add the start date
        $hiddenInputTag .= $dhlwshRow['StartDate'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the end date
        $hiddenInputTag .= $dhlwshRow['EndDate'];

        // add another ,
        $hiddenInputTag .= ',';
    }


     // loop through the employees at home found
     while ($employeeRow = $homeEmployeesQueryResult->fetch_array()) {
        // we must locate employee in users table, so as to get their first name, last name and ID
        $userQuery = 'select ID, FirstName, LastName from `users` inner join `employees` on users.ID = ' . $employeeRow['Users_ID'];

        // execute the query to find the data
        $userQueryResult = $mysqli -> query($userQuery);
        
        // we only have one row, get what we need
        $userRow = $userQueryResult->fetch_array();
        
        // we must find which dhlwsh is active for that user
        $dhlwshQuery = 'select * from `remoteperiods` where remoteperiods.Employees_Users_ID = ' . $userRow['ID'];

        // actually execute the query
        $dhlwshQueryResult = $mysqli -> query($dhlwshQuery);

        // fetch the first row
        $dhlwshRow = $dhlwshQueryResult->fetch_array();

        
        // start writing data


        // add a ,
        $hiddenInputTag .= ',';
        // add first name and last name
        $hiddenInputTag .= $userRow['FirstName'] . ' ' . $userRow['LastName'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the ID
        $hiddenInputTag .= $userRow['ID'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the Halt
        $hiddenInputTag .= 'Home';

        // add a ;
        $hiddenInputTag .= ';';
        // add the start date
        $hiddenInputTag .= $dhlwshRow['StartDate'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the end date
        $hiddenInputTag .= $dhlwshRow['EndDate'];

        // add another ,
        $hiddenInputTag .= ',';
    }


    // loop through the employees with child found
    while ($employeeRow = $childEmployeesQueryResult->fetch_array()) {
        // we must locate employee in users table, so as to get their first name, last name and ID
        $userQuery = 'select ID, FirstName, LastName from `users` inner join `employees` on users.ID = ' . $employeeRow['Users_ID'];

        // execute the query to find the data
        $userQueryResult = $mysqli -> query($userQuery);
        
        // we only have one row, get what we need
        $userRow = $userQueryResult->fetch_array();
        
        // we must find which dhlwsh is active for that user
        $dhlwshQuery = 'select * from `specialkidsleave` where specialkidsleave.Employees_Users_ID = ' . $userRow['ID'];

        // actually execute the query
        $dhlwshQueryResult = $mysqli -> query($dhlwshQuery);

        // fetch the first row
        $dhlwshRow = $dhlwshQueryResult->fetch_array();

        
        // start writing data


        // add a ,
        $hiddenInputTag .= ',';
        // add first name and last name
        $hiddenInputTag .= $userRow['FirstName'] . ' ' . $userRow['LastName'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the ID
        $hiddenInputTag .= $userRow['ID'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the Halt
        $hiddenInputTag .= 'Child';

        // add a ;
        $hiddenInputTag .= ';';
        // add the start date
        $hiddenInputTag .= $dhlwshRow['StartDate'];

        // add a ;
        $hiddenInputTag .= ';';
        // add the end date
        $hiddenInputTag .= $dhlwshRow['EndDate'];

        // add another ,
        $hiddenInputTag .= ',';
    }

    // add another ! to end the business
    $hiddenInputTag .= '!';
}


// finalize HTML
$hiddenInputTag .= '">';

// send the data to JS
echo $hiddenInputTag;
?>


<body>
    <?php require 'header.php'?>
    <ol class="breadcrumb" style="margin-top: 0px;margin-bottom: -1px;background-color: #171f32;">
       <?php require 'breadcrumbs.php'?>
    </ol>

    <?php
    // check if an employer is connected
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && $_SESSION['userType'] === 'employer') {
        require 'ActualGenikhKatastashDhlwsewn.php';
    } else {
        require 'ErrorMessage.php';
    }
    ?>
    <section class="call-to-action text-white text-center" style="background: url(&quot;bg-masthead.jpg&quot;) no-repeat center center;margin-top: 1000px;background-color: #ffffff;background-size: cover;background-image: url(&quot;assets/img/fade.jpg&quot;);height: 400px;">
        <div class="overlay" style="background-color: #007bff;"></div>
        <div class="container" style="margin-top: -93px;">
            <div class="row" style="width: 1125px;">
                <div class="col-md-12" style="background-color: rgba(0,0,0,0.08);margin-bottom: 131px;"><em style="font-size: 20px;"><br><strong>"&nbsp; &nbsp;Το μεν εργάζεσθαι αγαθόν το δε αργείν κακόν&nbsp; &nbsp;"</strong><br></em>
                    <p class="text-right" style="font-size: 15px;"><strong>Ξενοφών, 430-355 π.Χ., Αρχαίος Έλληνας ιστορικός</strong><br></p>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: -118px;">
            <div class="row">
                <div class="col">
                    <div class="row" style="margin-bottom: 12px;background-color: rgba(0,0,0,0.15);width: 634px;">
                        <div class="col">
                            <h1 class="text-left" style="color: #ffffff;font-size: 20px;">Χρήσιμοι Σύνδεσμοι</h1>
                        </div>
                    </div>
                    <div class="row" style="background-color: rgba(0,0,0,0.15);width: 635px;">
                        <div class="col">
                            <div class="row" style="margin-top: -11px;">
                                <div class="col" style="margin-top: 20px;"><a class="text-left float-left" href="http://www.oaed.gr/ergasia-sten-europe-eures-" style="margin-top: 2px;margin-bottom: 0px;font-size: 15px;font-family: Lato, sans-serif;color: #ffffff;background-color: rgba(0,0,0,0.08);">EURES</a></div>
                            </div>
                            <div class="row" style="margin-top: -10px;">
                                <div class="col" style="margin-top: 20px;"><a class="text-left float-left" href="https://www.atlas.gov.gr/ATLAS/Atlas/Login.aspx" style="margin-top: 2px;margin-bottom: 0px;font-size: 15px;color: #ffffff;background-color: rgba(0,0,0,0.08);">Ασφαλιστική Ικανότητα</a></div>
                            </div>
                            <div class="row" style="margin-top: -10px;">
                                <div class="col" style="margin-top: 20px;"><a class="text-left float-left" href="http://www.kep.gov.gr/portal/page/portal/kep/" style="margin-top: 2px;margin-bottom: 0px;font-size: 15px;color: #ffffff;background-color: rgba(0,0,0,0.08);">ΚΕΠ</a></div>
                            </div>
                            <div class="row" style="margin-top: -10px;">
                                <div class="col" style="margin-top: 20px;"><a class="text-left float-left" style="margin-top: 2px;margin-bottom: 0px;font-size: 15px;color: #ffffff;background-color: rgba(0,0,0,0.08);" href="https://www.efka.gov.gr/el">ΕΦΚΑ</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row" style="margin-top: -10px;">
                                <div class="col" style="margin-top: 20px;"><a class="text-left float-left" href="https://www.espa.gr/el/Pages/Default.aspx" style="margin-top: 2px;margin-bottom: 0px;font-size: 15px;font-family: Lato, sans-serif;color: #ffffff;background-color: rgba(0,0,0,0.08);">ΕΣΠΑ 2014 - 2020</a></div>
                            </div>
                            <div class="row" style="margin-top: -11px;">
                                <div class="col" style="margin-top: 20px;"><a class="text-left float-left" href="https://keaprogram.gr/pubnr" style="margin-top: 2px;margin-bottom: 0px;font-size: 15px;color: #ffffff;background-color: rgba(0,0,0,0.08);">Κοινωνικό Εισόδημα Αλληλεγγύης</a></div>
                            </div>
                            <div class="row" style="margin-top: -11px;">
                                <div class="col" style="margin-top: 20px;"><a class="text-left float-left" href="https://covid19.gov.gr/" style="margin-top: 2px;margin-bottom: 0px;font-size: 15px;color: #ffffff;background-color: rgba(0,0,0,0.08);">Καθημερινότητα</a></div>
                            </div>
                            <div class="row" style="margin-top: -11px;">
                                <div class="col" style="margin-top: 20px;"><a class="text-left float-left" style="margin-top: 2px;margin-bottom: 0px;font-size: 15px;color: #ffffff;background-color: rgba(0,0,0,0.08);" href="http://www.amka.gr/">ΑΜΚΑ</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin-right: -149px;width: 480px;">
                    <div class="row" style="margin-bottom: 12px;background-color: rgba(0,0,0,0.15);width: 480px;">
                        <div class="col" style="margin-right: 0px;">
                            <h1 class="text-left" style="color: #ffffff;font-size: 20px;">Επικοινωνία</h1>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 12px;background-color: rgba(0,0,0,0.15);width: 480px;">
                        <div class="col">
                            <h1 class="display-1" style="font-size: 20px;margin-top: 4px;">Τηλέφωνο:&nbsp;<strong>213-1516649</strong><br><br></h1>
                            <h1 class="display-1" style="font-size: 20px;margin-top: -23px;margin-bottom: 27px;">Τηλέφωνο:&nbsp;<strong>213-1516651</strong><br></h1>
                            <div class="row" style="margin-bottom: 23px;margin-top: -6px;">
                                <div class="col"><a class="border rounded border-secondary" data-bs-hover-animate="pulse" style="width: 0px;font-size: 18px;background-color: #282d32;padding: 6px;margin-top: 0px;margin-bottom: 0px;color: #f0f9ff;" href="Epikoinonia.php">Επικοινωνία</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-dark" style="height: 130px;">
        <footer>
            <div class="container" style="margin-top: -30px;">
                <div class="row">
                    <div class="col item social"><img alt="" src="assets/img/EllhnikhDhmokratiaLogo.png" style="height: 60px;margin-left: 0px;filter: brightness(153%) contrast(117%);"><img alt="" src="assets/img/Flag_of_Europe.png" style="width: 60px;margin-right: 0px;margin-left: 0px;"><img alt="" src="assets/img/Flag_of_Greece.png" style="width: 60px;margin-right: 0px;">
                        <a
                            href="https://www.facebook.com/labourgovgr"><i class="icon ion-social-facebook" aria-hidden="true"><span class="sr-only">an icon</span></i></a><a style="color:#135987" href="https://twitter.com/labourgovgr?lang=el"><i class="icon ion-social-twitter" aria-hidden="true"><span class="sr-only">an icon</span></i></a></div>
                </div>
                <p class="copyright">Υπουργείο Εργασίας © 2021. All Rights Reserved</p>
            </div>
        </footer>
    </div><a id="scroll-to-top" title="Scroll to top" href="#" style="background-color: #555555;"><i class="fas fa-angle-up"></i></a>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="assets/js/genikhScript.js"></script>
</body>

</html>