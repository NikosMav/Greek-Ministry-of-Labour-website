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

<body>
    <?php
    
    // get access to db credentials
    require_once 'databaseLogin.php';
    
    // see if user has tried to log in
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['loginButton']))
    {
        tryToLogUserIn($hn, $un, $pw, $db, $_POST['username'], $_POST['password']);
    }

    function tryToLogUserIn($hn, $un, $pw, $db, $username, $password){
        // connect to database
        $mysqli = new mysqli($hn, $un, $pw, $db);
        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

        // now we need to make a query to see if the username and password are correct
        $loginQuery = 'select * from `users` where users.UserName = "' . $username . '" and users.Password = "' . $password . '"';


        // run the query
        $loginResult = $mysqli->query($loginQuery);
        
        // see if the username and password were bad
        if ($loginResult->num_rows === 0){
            // no log in, inform
        } else {
            // log in and save variables to session

            // get the actual data for the user
            $userData = $loginResult->fetch_array();

            $_SESSION['loggedIn'] = true;
            $_SESSION['ID'] = $userData['ID'];
            $_SESSION['userName'] = $userData['UserName'];
            $_SESSION['password'] = $userData['Password'];
            $_SESSION['firstName'] = $userData['FirstName'];
            $_SESSION['lastName'] = $userData['LastName'];
            $_SESSION['email'] = $userData['Email'];
            $_SESSION['phoneNumber'] = $userData['PhoneNumber'];

            // we must identify the user as employee or employer
            $employerQuery = 'select * from `employers` where Users_ID = ' . $userData['ID'];
            
            if($mysqli->query($employerQuery)->num_rows !== 0){
                // he is an employer
                $_SESSION['userType'] = 'employer';
            } else {
                // he is an employee
                $_SESSION['userType'] = 'employee';
            }

            // now we must inform user that they are logged in
        }
    }
    ?>
    <?php require 'header.php'?>
    <ol class="breadcrumb" style="margin-top: 0px;margin-bottom: -1px;background-color: #063570;">
        <?php require 'breadcrumbs.php'?>
    </ol>

    <?php
    // see if we logged in, inform accordingly
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        require 'SuccessMessage.php';
    } else {
        require 'NoLoginMessage.php';
    }
    ?>



    </div>
    </div>
    <div class="footer-dark" style="height: 130px;margin-top: 333px;">
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
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>