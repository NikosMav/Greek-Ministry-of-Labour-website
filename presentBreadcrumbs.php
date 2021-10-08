<?php
// define here a correspondence of php files to greek names
function presentBreadcrumb($fileName){
    $fileNamesToGreek = array(
        "AnastolhSumbashs" => "Αναστολή σύμβασης εργασίας",
        "Anergoi" => "Άνεργοι",
        "ArseisDhlwsewn" => "Άρσεις Δηλώσεων",
        "ArseisFinalOK" => "Επιβεβαίωση Άρσεων",
        "COVID19" => "Πληροφορίες COVID",
        "COVIDErgaz" => "Πληροφορίες COVID για εργαζόμενους",
        "COVIDErgod" => "Πληροφορίες COVID για εργοδότες",
        "DhlwseisErgodoth" => "Δηλώσεις ειδικού καθεστώτος",
        "DhlwseisFinalOK" => "Επιβεβαίωση Δηλώσεων",
        "DilosiEpix" => "Δήλωση νέας επιχείρησης",
        "DilosiEpixOK" => "Επιβεβαίωση δήλωσης νέας επιχείρησης",
        "DilosiErgaz" => "Δήλωση νέου εργαζομένου",
        "DilosiErgazOK" => "Επιβεβαίωση δήλωσης νέου εργαζομένου",
        "DilwseisArseis" => "Δηλώσεις εναλλακτικών καθεστώτων εργασίας",
        "DilwseisErgod" => "Προσθήκη επιχείρησης/εργαζομένου",
        "DimosioiErgaz" => "Εργαζόμενοι Δημοσίου Τομέα",
        "EidikouSkopou" => "Άδεια ειδικού σκοπού",
        "EidikouSkopouOK" => "Επιβεβαίωση άδειας ειδικού σκοπού",
        "Epikoinonia" => "Επικοινωνία",
        "EpilogesErgaz" => "Εναλλακτικές επιλογές εργασίας λόγω COVID",
        "GenikhKatastashDhlwsewn" => "Γενική κατάσταση δηλώσεων",
        "IdiotikiErgaz" => "Εργαζόμενοι Ιδιωτικού Τομέα",
        "index" => "Αρχική Σελίδα",
        "Login" => "Σύνδεση",
        "loginAnswer" => "Επιβεβαίωση σύνδεσης",
        "Logout" => "Αποσύνδεση",
        "MicroMesaioi" => "Μικρομεσαίες επιχειρήσεις",
        "OrganotikiDomi" => "Οργανωτική Δομή",
        "Register" => "Εγγραφή",
        "RegisterOK" => "Επιβεβαίωση εγγραφής",
        "Thlegrasia" => "Τηλεργασία",
        "Yphresies" => "Υπηρεσίες",
        "YphresiesOK" => "Επιβεβαίωση ραντεβού",
        "ProfilErgaz" => "Το προφίλ μου",
        "ProfilErgod" => "Το προφίλ μου",
    );

    if(array_key_exists($fileName, $fileNamesToGreek)){
        return $fileNamesToGreek[$fileName];
    } else {
        return 'Μη διαθέσιμο';
    }

}