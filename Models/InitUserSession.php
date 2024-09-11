<?php

/**
 * Init user session class
 * @author Guy Watcho
 */
include_once "../Includes/Utils.php";

class InitUserSession {

    // class members with default values
    private $userLang = "fr-FR";

    static function setUserSessionData($userName, $encryptedData, $userLang) {
        Utils::checkAndStartSession();

        $_SESSION["userName"] = $userName;
        $_SESSION["encryptedData"] = $encryptedData;
        $_SESSION["userLang"] = $userLang;
    }

}

$encryptedData = null;
$userName = null;
$userLang = null;

if (isset($_POST) && isset($_POST["loginName"]) && isset($_POST["encryptedData"]) /* && isset($_POST["userLang"]) */) {
    $encryptedData = $_POST["encryptedData"];
    $userName = $_POST["loginName"];
    $userLang = "fr-FR"; //$_POST["userLang"];
    InitUserSession::setUserSessionData($userName, $encryptedData, $userLang);
    return;
}
if (!isset($userAction)) {
    echo "No session data sent...";
}
 

     




