<section style="height: 1300px;margin-top: 0px;background-color: rgba(0,0,0,0.85);background-image: url(&quot;assets/img/gunaikapoutana.PNG&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;opacity: 0.80;filter: blur(2px);"></section>
    <div class="container" style="height: 600px;margin-top: -1058px;margin-bottom: 32px;">
        <div class="row" style="height: 600px;margin-top: -125px;">
            <div class="col" style="height: 12px;">
                <div style="height: 14px;background-color: #171f32;margin-top: -2px;margin-bottom: 0px;"></div>
            </div>
            <div class="col-md-12" style="margin-top: -294px;">
                <div class="card" style="margin-top: 294px;height: 960px;background-color: rgba(255,255,255,0.85);">
                    <div class="card-body" style="height: 600px;">
                        <h1 style="display:none;">h1</h1><h2 style="display:none;">h2</h2><h3 style="display:none;">h3</h3><h4 class="text-center card-title" style="font-size: 30px;">Δήλωση εργαζόμενων</h4>
                        <div style="height: 4px;background-color: #282d32;width: 700px;margin-left: 180px;"></div>
                        <p class="text-center card-text" style="margin-top: 44px;font-size: 18px;background-color: rgba(0,0,0,0);"><strong>Επιλέξτε την επιθυμητή επιχείρηση.</strong></p>
                        <?php
                        require 'businessSelectorForNewEmployee.php';
                        ?>
                        <p
                            class="text-center card-text" style="margin-top: 44px;font-size: 18px;margin-bottom: 27px;background-color: rgba(0,0,0,0);"><strong>Συπληρώστε την παρακάτω φόρμα με τα απαραίτητα στοιχεία του επιθυμητού εργαζόμενου που θέλετε να </strong><br><strong>εντάξετε στην επιχείρηση σας.</strong></p>
                            <form method="post" action="DilosiErgazOK.php" class="border rounded border-white shadow-lg align-content-center align-self-center custom-form"
                                style="width: 700px;height: 550px;margin-left: 179px;background-color: rgb(23,31,50);">
                                <fieldset style="margin-top: -30px;">
                                    <legend style="color: #f0f9ff;margin-top: 0px;"><i class="fa fa-envelope" style="color: #f0f9ff;"></i>&nbsp;Στοιχεία<small class="required-input" style="color: #edbd1f;">&nbsp;(*απαιτούνται)</small></legend>
                                </fieldset>
                                <div class="form-group has-feedback"><label for="newEmployeeFirstNameAria" style="color: #f0f9ff;">Όνομα εργαζόμενου</label><span class="required-input" style="color: #edbd1f;">*</span><input name="newEmployeeFirstName" class="form-control form-control-lg" type="text" id="newEmployeeFirstNameAria" tabindex="-1" required=""
                                        placeholder="Όνομα Εργαζόμενου"></div>
                                <div class="form-group has-feedback"><label for="newEmployeeLastNameAria" style="color: #f0f9ff;">Επίθετο εργαζόμενου</label><span class="required-input" style="color: #edbd1f;">*</span><input name="newEmployeeLastName" class="form-control form-control-lg" type="text" id="newEmployeeLastNameAria" tabindex="-1"
                                        placeholder="Επίθετο Εργαζόμενου" required=""></div>
                                <div class="form-group has-feedback"><label for="newEmployeePhoneNumberAria" style="color: #f0f9ff;">Τηλέφωνο εργαζόμενου</label><span class="required-input" style="color: #edbd1f;">*</span><input name="newEmployeePhoneNumber" class="form-control form-control-lg" type="tel" id="newEmployeePhoneNumberAria" placeholder="Τηλέφωνο επικοινωνίας"
                                        required="" minlength="10" maxlength="10"></div>
                                <div class="form-group has-feedback"><label for="newEmployeeEmailAria" style="color: #f0f9ff;">Email εργαζόμενου</label><span class="required-input" style="color: #edbd1f;">*</span><input name="newEmployeeEmail" class="form-control form-control-lg" type="email" id="newEmployeeEmailAria" placeholder="Ηλεκτρονικό Ταχυδρομείο"
                                        required=""></div>
                                        <input type="hidden" id="businessForNewEmployee" name="newEmployeeBusinessName" value="">
                                        <button name="newEmployeeButton" class="btn btn-light btn-block btn-lg border rounded submit-button" data-bs-hover-animate="pulse" type="submit" style="background-color: #0c7b09;color: #f0f9ff;margin-top: 56px;">Υποβολή</button></form>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 12px;">
                <div style="height: 8px;background-color: #171f32;margin-top: 0px;margin-bottom: 0px;filter: blur(NaNpx);"></div>
            </div>
        </div>
    </div><a id="scroll-to-top" title="Scroll to top" href="#" style="background-color: #555555;"><i class="fas fa-angle-up"></i></a>