<?php
session_status() === PHP_SESSION_ACTIVE ?: session_start();
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
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
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
    <div style="margin-top: 106px;height: 400px;margin-bottom: -232px;">
        <div class="container" style="height: 600px;">
            <div class="row" style="height: 1350px;width: 1500px;margin-right: 0px;margin-left: -187px;margin-bottom: 0px;margin-top: -35px;">
                <div class="col" style="height: 1350px;">
                    <div class="card border-white border rounded shadow" style="height: 1350px;">
                        <div class="card-header text-center" style="height: 100px;background-color: rgb(35,78,112);color: #ffffff;">
                            <h1 class="display-4 text-center mb-0" style="font-size: 40px;margin-top: 13px;">Τι μπορώ να κάνω ηλεκτρονικά;</h1>
                            <div style="height: 6px;background-color: #ffffff;margin-top: 6px;"></div>
                        </div>
                        <div class="card-body" style="height: 650px;background-color: rgb(208,211,215);">
                            <div class="card" style="margin-top: 20px;">
                                <div class="card-header">
                                    <p style="font-size: 18px;"><i class="fas fa-caret-right" style="font-size: 25px;"></i>&nbsp; <strong>Τι μπορείτε να κάνετε ηλεκτρονικά ως Εργαζόμενος;</strong></p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 18px;margin-left: 20px;"><i class="icon-arrow-right" style="font-size: 12px;"></i>&nbsp; Να ενημερωθείτε για τις πιο πρόσφατες οδηγίες και μέτρα πρόληψης του COVID-19 στον εργασιακό σας χώρο καθώς και τρόπους αντιμετώπισης της περίπτωσης εμφάνισης
                                        κρούσματος. <br></p><a class="btn btn-primary btn-block border rounded border-white shadow" role="button" data-bs-hover-animate="pulse" style="background-color: #234e70;width: 40%;margin-left: 30%;margin-top: -5px;margin-bottom: 20px;"
                                        href="COVID19.php"><strong>COVID-19</strong></a>
                                    <p class="card-text" style="font-size: 18px;margin-left: 20px;"><i class="icon-arrow-right" style="font-size: 12px;"></i>&nbsp; Να πληροφορηθείτε για τις επιλογές εργασίας που έχετε ως εργαζόμενος (εξ' αποστάσεως εργασία, αναστολή σύμβασης, άδεια ειδικού σκοπού) καθώς και να υποβάλετε
                                        δηλώσεις στα παραπάνω.</p><a class="btn btn-primary btn-block border rounded border-white shadow" role="button" data-bs-hover-animate="pulse" style="background-color: #234e70;width: 40%;margin-left: 30%;margin-top: -5px;margin-bottom: 20px;"
                                        href="EpilogesErgaz.php"><strong>Επιλογές Εργασίας</strong></a>
                                    <p class="card-text" style="font-size: 18px;margin-left: 20px;"><i class="icon-arrow-right" style="font-size: 12px;"></i>&nbsp; Μπορείτε, αφότου συνδεθείτε, να περιηγηθείτε στο προφίλ σας όπου έχετε πρόσβαση στα στοιχεία σας, τα ραντεβού σας, την τωρινή εργασιακή σας κατάσταση και
                                        άλλα. Έτσι, ενημερώνεστε ολοκληρωτικά για όσα αφορούν τα εργασιακά σας θέματα.<br></p><a class="btn btn-primary btn-block border rounded border-white shadow" role="button" data-bs-hover-animate="pulse" style="background-color: #234e70;width: 40%;margin-left: 30%;margin-top: -5px;margin-bottom: 20px;"
                                        href="ProfilErgaz.php"><strong>Το Προφίλ μου</strong></a></div>
                            </div>
                            <div class="card" style="margin-top: 50px;">
                                <div class="card-header">
                                    <p style="font-size: 18px;"><i class="fas fa-caret-right" style="font-size: 25px;"></i>&nbsp; <strong>Τι μπορείτε να κάνετε ηλεκτρονικά ως Εργοδότης;</strong></p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 18px;margin-left: 20px;"><i class="icon-arrow-right" style="font-size: 12px;"></i>&nbsp; Να ενημερωθείτε για τις πιο πρόσφατες οδηγίες και μέτρα πρόληψης του COVID-19 στον χώρο της επιχείρησης σας καθώς και τρόπους αντιμετώπισης της περίπτωσης
                                        εμφάνισης κρούσματος.<br></p><a class="btn btn-primary btn-block border rounded border-white shadow" role="button" data-bs-hover-animate="pulse" style="background-color: #234e70;width: 40%;margin-left: 30%;margin-top: -5px;margin-bottom: 20px;"
                                        href="COVID19.php"><strong>COVID-19</strong></a>
                                    <p class="card-text" style="font-size: 18px;margin-left: 20px;"><i class="icon-arrow-right" style="font-size: 12px;"></i>&nbsp; Να δηλώσετε επιχειρήσεις αλλά και εργαζομένους σε αυτες και να ενημερώσετε έτσι τα στοιχεία σας τα οποία αποθηκεύονται και παραμένουν στις βάσεις δεδομένων
                                        της σελίδας του υπουργείου.&nbsp;</p><a class="btn btn-primary btn-block border rounded border-white shadow" role="button" data-bs-hover-animate="pulse" style="background-color: #234e70;width: 40%;margin-left: 30%;margin-top: -5px;margin-bottom: 20px;"
                                        href="DilwseisErgod.php"><strong>Δήλωση Επιχείρησης/Εργαζομένων</strong></a>
                                    <p class="card-text" style="font-size: 18px;margin-left: 20px;"><i class="icon-arrow-right" style="font-size: 12px;"></i>&nbsp; Μπορείτε, αφότου συνδεθείτε, να περιηγηθείτε στο προφίλ σας όπου έχετε πρόσβαση στα στοιχεία σας, τα ραντεβού σας, τις επιχειρήσεις σας όπως και τους εργαζόμενους
                                        που εργοδοτείτε καθώς και την εργασιακή κατάσταση αυτών. Έτσι, ενημερώνεστε ολοκληρωτικά για όσα αφορούν τα εργασιακά σας θέματα.</p><a class="btn btn-primary btn-block border rounded border-white shadow" role="button"
                                        data-bs-hover-animate="pulse" style="background-color: #234e70;width: 40%;margin-left: 30%;margin-top: -5px;margin-bottom: 20px;" href="ProfilErgod.php"><strong>Το Προφίλ μου</strong></a>
                                    <p class="card-text" style="font-size: 18px;margin-left: 20px;"><i class="icon-arrow-right" style="font-size: 12px;"></i>&nbsp; Να δηλώσετε τους εργαζομένους σας σε αναστολή σύμβασης εργασίας ή εξ' αποστάσεως εργασία όπως και να άρετε οποιαδήποτε σας δήλωση. Το υπουργείο σας παρέχει
                                        μια πλήρως λειτουργική και κατανοητή διεπαφή όπου εισάγεται απαραίτητα στοιχεία και δηλώνετε ή αντίστοιχα άρετε αποφάσεις.</p><a class="btn btn-primary btn-block border rounded border-white shadow" role="button"
                                        data-bs-hover-animate="pulse" style="background-color: #234e70;width: 40%;margin-left: 30%;margin-top: -5px;margin-bottom: 20px;" href="DilwseisArseis.php"><strong>Μενού Δηλώσεων/Άρσεων</strong></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-white border rounded shadow" style="margin-top: 100px;background-color: #234e70;color: #ffffff;">
                <div class="card-header">
                    <h1 style="display:none;">h1</h1><h2 style="display:none;">h2</h2><h3 style="display:none;">h3</h3><h4 style="display:none;">h4</h4><h5 class="text-center mb-0" style="font-size: 25px;">Δεν σας κάλυψε τίποτα από τα παραπάνω και έχετε ακόμα απορίες;</h5>
                </div>
                <div class="card-body">
                    <p class="text-center card-text" style="font-size: 19px;">Μπορείτε να κλείσετε δια ζώσης ραντεβού και να έρθετε να τα πούμε από κοντά</p>
                </div>
            </div>
            <div class="row" style="height: 750px;width: 1500px;margin-right: 0px;margin-left: -187px;margin-bottom: 0px;margin-top: 100px;">
                <div class="col">
                    <div class="card border-white border rounded shadow" style="height: 900px;">
                        <div class="card-header text-center" style="height: 100px;background-color: rgb(35,78,112);color: #ffffff;">
                            <h1 class="display-4 text-center mb-0" style="font-size: 40px;margin-top: 13px;">Κλείσε ραντεβού</h1>
                            <div style="height: 6px;margin-top: 6px;background-color: #ffffff;"></div>
                        </div>
                        <div class="card-body" style="height: 650px;background-color: rgb(208,211,215);">
                            <section id="contact" style="padding: 0px;padding-right: 5px;padding-left: 4px;">
                                <div class="container">
                                    <form id="contactForm" style="padding: 0px;" action="YphresiesOK.php" method="post">
                                        <div class="form-row">
                                            <div class="col-auto col-md-6" style="padding-left:20px;padding-right:20px;">
                                                <fieldset>
                                                <legend style="font-size: 30px;"><i class="fa fa-info" style="color: #282d32;"></i>&nbsp;Πληροφορίες</legend>
                                                </fieldset>
                                                <p></p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead><tr style="display:none;"><th>header</th></tr></thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><i class="fa fa-building"></i></td>
                                                                <td style="font-size: 20px;">KvK: 58314687, BTW:&nbsp;NL223674965B01</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-map-marker"></i></td>
                                                                <td style="font-size: 20px;">Σταδίου 29, Αθήνα<br>105 59</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-phone"></i></td>
                                                                <td style="font-size: 20px;">213 - 151 66 49</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-phone"></i></td>
                                                                <td style="font-size: 20px;">213 - 151 66 51</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-envelope"></i></td>
                                                                <td style="font-size: 20px;">info@ypakp.gr</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-auto col-md-6" id="message" style="padding-left: 0px;">
                                                <fieldset>
                                                    <legend style="font-size: 30px;"><i class="fa fa-envelope" style="color: #282d32;"></i>&nbsp;Στοιχεία<small class="required-input">&nbsp;(*απαιτούνται)</small></legend>
                                                </fieldset>
                                                <?php
                                                $firstName = '';
                                                $lastName = '';
                                                $email = '';
                                                $phoneNumber = '';

                                                if(isset($_SESSION['firstName'])){
                                                    $firstName = $_SESSION['firstName']; 
                                                }

                                                if(isset($_SESSION['lastName'])){
                                                    $lastName = $_SESSION['lastName']; 
                                                }

                                                if(isset($_SESSION['email'])){
                                                    $email = $_SESSION['email']; 
                                                }

                                                if(isset($_SESSION['phoneNumber'])){
                                                    $phoneNumber = $_SESSION['phoneNumber']; 
                                                }

                                                echo "<div class=\"form-group has-feedback\"><label for=\"firstNameAria\" style=\"font-size: 17px;\"><strong>Όνομα</strong></label><span class=\"required-input\">*</span><input class=\"border rounded border-white shadow form-control\" type=\"text\" id=\"firstNameAria\"
                                                            tabindex=\"-1\" name=\"from_name\" placeholder=\"Όνομα\" value=\"{$firstName}\" required=\"\"></div>
                                                    <div class=\"form-group has-feedback\"><label for=\"lastNameAria\" style=\"font-size: 17px;\"><strong>Επώνυμο</strong></label><span class=\"required-input\">*</span><input class=\"border rounded border-white shadow form-control\" type=\"text\" id=\"lastNameAria\"
                                                            tabindex=\"-1\" name=\"from_name\" required=\"\" placeholder=\"Επώνυμο\" value=\"{$lastName}\"></div>
                                                    <div class=\"form-group has-feedback\"><label for=\"emailAria\" style=\"font-size: 17px;\"><strong>Email</strong></label><span class=\"required-input\">*</span><input class=\"border rounded border-white shadow form-control\" type=\"email\" id=\"emailAria\"
                                                            name=\"from_email\" required=\"\" placeholder=\"Ηλεκτρονικό Ταχυδρομείο\" value=\"{$email}\"></div>
                                                    <div class=\"form-group\"><label for=\"phoneAria\" style=\"font-size: 17px;\"><strong>Τηλέφωνο</strong></label><span class=\"required-input\">*</span><input class=\"form-control\" type=\"text\" id=\"phoneAria\" name=\"phone\" required=\"\" placeholder=\"Τηλέφωνο\" value=\"{$phoneNumber}\" minlength=\"10\" maxlength=\"10\"></div>";
                                                ?>

                                                
                                                <div class="form-group"><label for="dateAria" style="font-size: 17px;"><strong>Ημερομηνία</strong></label><span class="required-input">*</span><input class="border rounded border-white shadow form-control" name="appointmentDate" type="date" required="" id="dateAria"></div>
                                                <div
                                                    class="form-group"><label for="comments" style="font-size: 17px;"><strong>Σχόλια</strong></label><textarea class="border rounded border-white shadow form-control" id="comments" name="appointmentComment" placeholder="Γράψτε περιληπτικά πως επιθυμείτε να εξυπηρετηθείτε..."
                                                        rows="5"></textarea></div>
                                            <div class="form-group"><button class="btn btn-primary active btn-block border rounded border-white shadow" data-bs-hover-animate="pulse" style="background-color: #0c7b09;margin-top: 0px;" type="submit" name="appointmentButton">Υποβολή&nbsp;<i class="fa fa-chevron-circle-right"></i></button></div>
                                        </div>
                                </div>
                                </form>
                        </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class="call-to-action text-white text-center" style="background: url(&quot;bg-masthead.jpg&quot;) no-repeat center center;margin-top: 2550px;background-color: #ffffff;background-size: cover;background-image: url(&quot;assets/img/fade.jpg&quot;);height: 400px;">
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