<section style="height: 900px;background-color: rgba(0,0,0,0.15);">
        <div class="container" id="info-container" style="margin-top: -1px;">
            <div class="row" style="margin-top: 44px;margin-right: -45px;margin-left: -43px;padding: 0px;padding-left: 0px;padding-right: 0px;">
                <div class="col-md-12">
                    <h1 class="text-center">Δήλωση&nbsp; Άδειας</h1>
                    <div style="height: 8px;margin-top: 11px;background-color: #bd3b04;margin-bottom: 16px;"></div>
                </div>
                <div class="col-12 col-sm-6 col-md-6" id="contact-box" style="background-color: white;padding: 21px;">
                    <h1 style="display:none;">h1</h1><h2 style="display:none;">h2</h2><h3 style="display:none;">h3</h3><h4 class="display-4 text-center" style="font-size: 30px;margin-top: 19px;background-color: rgba(0,0,0,0);margin-bottom: 15px;">Προσοχή</h4>
                    <div style="height: 3px;background-color: #bd3b04;margin-top: -5px;margin-bottom: 19px;width: 564px;"></div>
                    <p id="contact-text" style="font-size: 18px;">Στα πεδία "Βαθμίδα Εκπαίδευσης" και "Σχολική Τάξη" εισάγετε την <strong>ελάχιστη </strong>σχολική βαθμίδα και τάξη κάποιου παιδιού σας ανάμεσα από όλα τα παιδία σας.<br><br><strong>Υπενθυμίζεται </strong>ότι η Πρωτοβάθμια εκπαίδευση
                        περιλαμβάνει&nbsp;τις σχολικές χρονιές του Νηπιαγωγείου όσο και του Δημοτικού, ενώ η Δευτεροβάθμια τις σχολικές χρονίες του Γυμνασίου όσο και του Λυκείου.<br><br>Στο πεδίο "Ηλικία" εκχωρείτε την ηλικία του συγκεκριμένου παιδιού
                        <br>4 - 15 και τέλος στο πεδίο "Χρονικό Διάστημα" ορίζετε την διάρκεια της ισχύος της άδειάς σας.<br><br>Εφόσον έχετε τέκνα που&nbsp;φοιτούν σε ειδικά σχολεία ή σχολικές μονάδες ειδικής αγωγής και εκπαίδευσης, επιλέγεται το <strong>ειδικό ραδιοπλήκρο</strong>                        και αφήνεται τις <strong>υπόλοιπες επιλογές κενές </strong>αφού δεν χρειάζονται. <strong>Ομοίως </strong>πράτετε εφόσον έχετε τέκνα που είναι άτομα με αναπηρία.<br></p>
                </div>
                <div class="col-12 col-sm-6 col-md-6 site-form">
                    <form id="my-form" method="post" action="EidikouSkopouOK.php">
                        <div class="form-group" style="margin-bottom: 10px;"><label for="alvanos" style="color: #282d32;">Αριθμός Παιδιών</label><input id="alvanos" class="shadow-sm form-control" type="number" name="children" placeholder="Αριθμός Παιδιών" min="1" required=""></div>
                        <div class="form-group" style="margin-bottom: 10px;"><label for="alvanos2" style="color: #282d32;">Βαθμίδα Εκπαίδευσης</label><select id="alvanos2" class="shadow-sm form-control" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" id="calltime" required="" title="Ελάχιστη βαθμίδα εκπαίδευσης από όλα τα παιδιά."><option value="Πρωτοβάθμια">Πρωτοβάθμια</option><option value="Δευτεροβάθμια">Δευτεροβάθμια</option></select></div>
                        <div
                            class="form-group" style="margin-bottom: -7px;"><label for="alvanos3" style="color: #282d32;">Σχολική Τάξη</label><select id="alvanos3" class="shadow-sm form-control" id="calltime" required="" title="Ελάχιστη βαθμίδα εκπαίδευσης από όλα τα παιδιά."><optgroup label="Πρωτοβάθμια"><option value="Νηπιαγωγείο">Νηπιαγωγείο</option><option value="Α' Δημοτικού">Α' Δημοτικού</option><option value="Β' Δημοτικού">Β' Δημοτικού</option><option value="Γ' Δημοτικού">Γ' Δημοτικού</option><option value="Δ' Δημοτικού">Δ' Δημοτικού</option><option value="Ε' Δημοτικού">Ε' Δημοτικού</option><option value="ΣΤ' Δημοτικού">ΣΤ' Δημοτικού</option></optgroup><optgroup label="Δευτεροβάθμια"><option value="Α' Γυμνασίου">Α' Γυμνασίου</option><option value="Β' Γυμνασίου">Β' Γυμνασίου</option><option value="Γ' Γυμνασίου">Γ' Γυμνασίου</option></optgroup></select></div>
                <div
                    class="form-group"><label class="sr-only" for="messages">Last Name</label></div>
            <div class="form-group" style="margin-bottom: 10px;"><label for="alvanos4" style="color: #282d32;">Ηλικία</label><input id="alvanos4" class="shadow-sm form-control" type="number" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" name="children" placeholder="Ηλικία" min="4" max="15" required=""
                    title="Ηλικία του επιλεγμένου παιδιού."></div>
            <div class="form-check" style="margin-bottom: 16px;"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1" style="margin-top: 2px;">Eιδικό σχολείο ή σχολική μονάδα ειδικής αγωγής και εκπαίδευσης<br></label></div>
            <div class="form-check"
                style="margin-bottom: 14px;margin-top: -14px;"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1" style="margin-top: 2px;">Άτομο με αναπηρία<br></label></div>
            <div class="form-group"><label for="alvanos5" style="color: #282d32;">Αρχή Διαστήματος</label></div><input id="alvanos5" class="shadow-sm form-control" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" type="date" name="startDate" style="margin-top: -19px;margin-bottom: 16px;" title="Αρχή διαστήματος"
                required=""><label for="alvanos6" style="color: #282d32;">Τέλος Διαστήματος</label><input id="alvanos6" class="shadow-sm form-control" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" type="date" name="endDate" style="margin-top: -8px;margin-bottom: 22px;" title="Τέλος διαστήματος" required=""><button class="btn btn-light btn-lg shadow"
                data-bs-hover-animate="pulse" id="form-btn" type="submit" name="childLeaveButton" style="background-color: #0c7b09;color: #f0f9ff;margin-top: 34px;">Υποβολή</button></form>
        </div>
        <div class="clearfix"></div>
        </div>
        </div>
    </section>