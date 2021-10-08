<?php session_status() === PHP_SESSION_ACTIVE ?: session_start();
 ?>
<!DOCTYPE html>
<html lang="gr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/css/IM%20FELL%20French%20Canon.css">
    <link rel="stylesheet" href="assets/css/Oswald.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Calendar.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4-1.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4.css">
    <link rel="stylesheet" href="assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form-1.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Large-Dropdown-Menu-BS3-1.css">
    <link rel="stylesheet" href="assets/css/Large-Dropdown-Menu-BS3.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Pretty-Login-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/Scroll-To-Top.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
</head>

<?php
    // get access to db credentials
    require_once 'databaseLogin.php';
    
    // see if employer has tried to register a new business
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['childLeaveButton']))
    {
        newChildLeave($hn, $un, $pw, $db);
    } 

    function newChildLeave($hn, $un, $pw, $db){
        // connect to database
        $mysqli = new mysqli($hn, $un, $pw, $db);
        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $employeeID = $_SESSION['ID'];

        
        $insertQuery = "insert into `SpecialKidsLeave` (StartDate, EndDate, Employees_Users_ID) values (DATE \"{$startDate}\", DATE \"{$endDate}\", {$employeeID})";


        // run the query and be done with it
        $mysqli->query($insertQuery);
    }   
    ?>


<body>
    <?php require 'header.php'?>
    <ol class="breadcrumb" style="margin-top: 0px;margin-bottom: -1px;background-color: #bd3b04;">
        <?php require 'breadcrumbs.php'?>
    </ol>
    <?php require 'SuccessMessage.php';?>
    <section class="call-to-action text-white text-center" style="background: url(&quot;bg-masthead.jpg&quot;) no-repeat center center;margin-top: 0px;background-color: #ffffff;background-size: cover;background-image: url(&quot;assets/img/fade.jpg&quot;);height: 400px;margin-bottom: 0px;">
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
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>