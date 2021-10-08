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
    <section>
        <div style="margin-top: 30px;">
            <div class="container-fluid">
                <h1 class="display-4 text-center" style="font-size: 40px;background-color: rgba(40,45,50,0.88);padding: 8px;color: #ffffff;width: 80%;margin-right: 0px;margin-left: 10%;">Πληροφορίες Επικοινωνίας</h1>
                <hr>
                <form id="contactForm" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden"
                        name="to" value="email@awebsite.com">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div id="successfail"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-md-6" id="message">
                            <h1 style="display:none;">h1</h1><h2 class="text-left h4" style="font-size: 30px;padding: 5px;color: #282d32;"><i class="fa fa-envelope"></i>&nbsp; Στοιχεία</h2>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead><tr style="display:none;"><th>header</th></tr></thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="card shadow-sm">
                                                    <div class="card-header" style="background-color: #234e70;color: #000000;">
                                                        <h1 style="display:none;">h1</h1><h2 style="display:none;">h2</h2><h3 style="display:none;">h3</h3><h4 style="display:none;">h4</h4><h5 class="display-4 text-center mb-0" style="font-size: 23px;color: #f0f9ff;">Τηλεφωνικά</h5>
                                                        <div style="margin-top: 3px;height: 4px;background-color: #ffffff;"></div>
                                                    </div>
                                                    <div class="card-body" style="background-color: rgb(208,211,215);color: #000000;">
                                                        <p class="card-text" style="font-size: 20px;"><i class="material-icons" style="font-size: 20px;">phone</i>&nbsp; &nbsp;213 - 151 66 49</p>
                                                        <p class="card-text" style="font-size: 20px;"><i class="material-icons" style="font-size: 20px;">phone</i>&nbsp; &nbsp;213 - 151 66 51</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="card shadow-sm">
                                                    <div class="card-header" style="background-color: #234e70;color: #f0f9ff;">
                                                        <h1 style="display:none;">h1</h1><h2 style="display:none;">h2</h2><h3 style="display:none;">h3</h3><h4 style="display:none;">h4</h4><h5 class="display-4 text-center mb-0" style="font-size: 23px;">Ηλεκτρονικά</h5>
                                                        <div style="margin-top: 3px;height: 4px;background-color: #ffffff;"></div>
                                                    </div>
                                                    <div class="card-body" style="background-color: rgb(208,211,215);color: #000000;">
                                                        <p class="card-text" style="font-size: 20px;"><i class="material-icons" style="font-size: 11px;">fiber_manual_record</i><strong>&nbsp; Τμήμα κοινοβουλευτικού ελέγχου:</strong>&nbsp;ypertns@ypakp.gr<br></p>
                                                        <p class="card-text" style="font-size: 20px;"><i class="material-icons" style="font-size: 11px;">fiber_manual_record</i><strong>&nbsp; Τμήμα νομοθετικής πρωτοβουλίας:</strong>&nbsp;nomothetikotmima@ypakp.gr<br></p>
                                                        <p class="card-text" style="font-size: 20px;"><i class="material-icons" style="font-size: 11px;">fiber_manual_record</i><strong>&nbsp; Τμήμα εσωτερικού ελέγχου:</strong>&nbsp;internal.audit@ypakp.gr<br></p>
                                                        <p class="card-text" style="font-size: 20px;"><i class="material-icons" style="font-size: 11px;">fiber_manual_record</i><strong>&nbsp; Τμήμα πολιτικής σχεδίασης έκτακτης ανάγκης:</strong>&nbsp;psea@ypakp.gr<br></p>
                                                        <p class="card-text" style="font-size: 20px;margin-bottom: -13px;"><i class="material-icons" style="font-size: 11px;">fiber_manual_record</i><strong>&nbsp; Τμήμα διεθνών σχέσεων:</strong>&nbsp;diethneis_sxeseis@ypakp.gr<br></p><a class="btn btn-primary border rounded border-white float-right"
                                                            role="button" data-bs-hover-animate="pulse" style="margin-top: 25px;width: 179px;background-color: #234e70;" href="404Error1.php"><strong>Περισσότερα</strong></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h1 style="display:none;">h1</h1><h2 class="text-left h4" style="font-size: 30px;padding: 5px;color: #282d32;"><i class="fa fa-location-arrow"></i>&nbsp;Βρείτε μας</h2>
                            <div class="form-row"><div class="col"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.8589244319405!2d23.728891015596897!3d37.980421508073476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd3bad145a41%3A0x6db1fc0cbb58a00a!2zzqXPgM6_z4XPgc6zzrXOr86_IM6Vz4HOs86xz4POr86xz4IgzrrOsc65IM6azr_Ouc69z4nOvc65zrrPjs69IM6lz4DOv864zq3Pg861z4nOvQ!5e0!3m2!1sel!2sgr!4v1609886193669!5m2!1sel!2sgr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div></div>
                            <div class="form-row" style="margin-top: 20px;">
                                <div class="col">
                                    <h1 style="display:none;">h1</h1><h2 class="text-left h4" style="padding: 5px;color: #282d32;font-size: 30px;"><i class="fa fa-location-arrow"></i>&nbsp;Διεύθυνση</h2>
                                    <div></div>
                                    <div style="font-size: 20px;"><span>Σταδίου 29, Αθήνα 105 59</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 style="display:none;">h1</h1><h2 style="display:none;">h2</h2><h3 style="display:none;">h3</h3><h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <form id="contactForm" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
                                    type="hidden" name="to" value="email@awebsite.com">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div id="successfail"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-md-6" id="message">
                                        <h1 style="display:none;">h1</h1><h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                                        </h2>
                                        <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" id="from-name" name="name" required="" placeholder="Full Name"></div>
                                        </div>
                                        <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" id="from-email" name="email" required="" placeholder="Email Address"></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" id="from-phone" name="phone" required="" placeholder="Primary Phone"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" id="from-calltime" name="call time"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" id="from-comments" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                                <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                            </div>
                                        </div>
                                        <hr class="d-flex d-md-none">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h1 style="display:none;">h1</h1><h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                        <div class="form-row">
                                            <div class="col-12">
                                                <div class="static-map"><a rel="noopener" href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                                                        target="_blank"> <img alt="Ο χάρτης που δείχνει που είναι το υπουργείο" class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                            </div>
                                            <div class="col-sm-6 col-md-12 col-lg-6">
                                                <h1 style="display:none;">h1</h1><h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                <div><span><strong>Name</strong></span></div>
                                                <div><span>email@awebsite.com</span></div>
                                                <div><span>www.awebsite.com</span></div>
                                                <hr class="d-sm-none d-md-block d-lg-none">
                                            </div>
                                            <div class="col-sm-6 col-md-12 col-lg-6">
                                                <h1 style="display:none;">h1</h1><h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                                <div><span><strong>Office Name</strong></span></div>
                                                <div><span>55 Icannot Dr</span></div>
                                                <div><span>Daytone Beach, FL 85150</span></div>
                                                <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                                <hr class="d-sm-none">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call-to-action text-white text-center" style="background: url(&quot;bg-masthead.jpg&quot;) no-repeat center center;margin-top: 110px;background-color: #ffffff;background-size: cover;background-image: url(&quot;assets/img/fade.jpg&quot;);height: 400px;">
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
    <div class="footer-dark" style="height: 130px;margin-top: 0px;">
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