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
    <?php require 'header.php'?>
    <ol class="breadcrumb" style="margin-top: 0px;margin-bottom: -1px;background-color: #063570;">
        <?php require 'breadcrumbs.php'?>
    </ol>
    <section style="height: 800px;margin-top: 0px;background-color: rgb(245,245,245);background-image: url(&quot;assets/img/1200px-Coat_of_arms_of_Greece.svg.png&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;opacity: 0.30;filter: brightness(100%) contrast(100%);"></section>
    <div class="container align-content-center align-self-center" style="margin-top: -834px;height: 500px;margin-bottom: 0px;">
        <div class="row align-content-center align-self-center login-form" style="height: 700px;width: 1200px;margin-top: -13px;">
            <div class="col-md-4 offset-md-4" style="margin-right: 0px;">
                <h2 class="text-center border rounded border-white form-heading" style="color: #ffffff;margin-right: 43px;font-size: 30px;margin-top: 100px;background-color: rgba(40,45,50,0.88);padding-top: 13px;margin-bottom: 22px;">Σύνδεση</h2>
                <form method="post" action="loginAnswer.php" class="shadow-lg align-content-center align-self-center custom-form" style="width: 600px;height: 550px;margin-left: -135px;background-color: #ffffff;">
                    <div style="width: 600px;margin-left: -40px;height: 10px;background-color: #063570;margin-bottom: 32px;margin-top: -45px;padding-bottom: 0px;"></div>
                    <div class="form-group" style="margin-bottom: 23px;"><label for="userNameAria" style="color: #282d32;font-size: 17px;"><strong>Username</strong></label><input id="userNameAria" name="username" class="shadow form-control form-control-lg" type="text" placeholder="Username" style="color: #282d32;margin-bottom: 0px;" required=""></div>
                    <div
                        class="form-group" style="margin-top: 0px;"><label for="passwordAria" style="color: #282d32;font-size: 17px;"><strong>Password</strong><br></label><input id="passwordAria" name="password" class="shadow form-control form-control-lg" type="password" placeholder="Password" style="color: #282d32;margin-top: 0px;" required=""></div>
            <div
                class="form-check" style="margin-top: 43px;margin-bottom: 0px;"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1" style="color: #282d32;">Remember me</label></div><button class="btn btn-light btn-block border rounded border-white shadow-lg submit-button"
            data-bs-hover-animate="pulse" type="submit" name="loginButton" style="background-color: #0c7b09;margin-top: 21px;">Συνέχεια</button>
        <h2 class="text-center form-heading" style="color: #282d32;margin-right: 16px;font-size: 18px;margin-top: 49px;"><em>Αν δεν έχεις ήδη λογαριασμό τότε κάνε εγγραφή...</em></h2><a class="btn btn-primary border rounded border-white shadow" role="button" data-bs-hover-animate="pulse" style="width: 130px;padding: 9px;margin-left: 190px;background-color: #282d32;"
            href="Register.php">Εγγραφή</a>
        <div style="width: 600px;margin-left: -40px;height: 6px;background-color: #063570;margin-bottom: 32px;margin-top: 43px;padding-bottom: 0px;"></div>
        </form>
    </div>
    </div>
    </div>
    <div class="footer-dark" style="height: 130px;margin-top: 333px;">
        <footer>
            <div class="container" style="margin-top: -30px;">
                <div class="row">
                    <div class="col item social"><img alt="" src="assets/img/EllhnikhDhmokratiaLogo.png" style="height: 60px;margin-left: 0px;filter: brightness(153%) contrast(117%);"><img alt="" src="assets/img/Flag_of_Europe.png" style="width: 60px;margin-right: 0px;margin-left: 0px;"><img alt="" src="assets/img/Flag_of_Greece.png" style="width: 60px;margin-right: 0px;">
                        <a
                            href="https://www.facebook.com/labourgovgr"><i class="icon ion-social-facebook" aria-hidden="true"><span class="sr-only">an icon</span></i></a><a href="https://twitter.com/labourgovgr?lang=el"><i class="icon ion-social-twitter" aria-hidden="true"><span class="sr-only">an icon</span></i></a></div>
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