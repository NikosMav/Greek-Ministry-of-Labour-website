<?php
function getLoggedInID(){
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        return (int) $_SESSION['ID'];
    } else {
        return -1;
    }
}
?>