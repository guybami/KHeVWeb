<?php


function testDates(){

    $m = "EventPhoto";
    echo date('d.m.y H:i:s');
    echo "Result: " . strtolower(substr($m, 0, 1)) . substr($m, 1, strlen($m) - 1);


    if (strpos($m, 'tP') !== false) {
        echo ' <br /> Token found';
    }
    else{
        echo ' <br /> Token NOT found';
    }
    echo  ' <br /> Date now: ' . date_format(date_create(), 'Y-m-d H:i:s');

    echo ' <br /> dirname(__FILE__): '. dirname(__FILE__);

    $timezone = date_default_timezone_get();
    echo "<br />  The current server timezone is: " . $timezone;

    $date = new DateTime('',  new DateTimeZone('Europe/Berlin'));
    echo ' <br /> now date Berlin: ' . $date->format('Y-m-d H:i:s') . "\n";
  


}

class UploadFileStatus {
    public $status = false;
    public $message = "";
    public function __construct() {
    }
     
}

//json_encode(array("apples" => true, "bananas" => null))

function testUploadJson(){

    $jsonArray = array();
    $obj = new UploadFileStatus();
    $obj->status = true;
    array_push($jsonArray, $obj);

    $obj->message = "Upload file was successfull";
    $obj->status = true;
    $obj->message = "Upload file WAS NOT successfull";
    array_push($jsonArray, $obj);
    echo json_encode($jsonArray, true);
    //$arrayData = json_decode($jsonData, true);
    //var_dump($arrayData[0]);
}


function testJson(){

    $jsonData = '[{"date": "2016-09-08 10:32:11", "title": "this is conf test",
                    "location":"location value", "summary":"summary value-1"}]';
    $arrayData = json_decode($jsonData, true);
    var_dump($arrayData[0]);
}

function testJson2(){

include_once "../Includes/Utils.php";

    $jsonData = 'PDOException occured: SQLSTATE[HY000] [2002] Es konnte keine Verbindung
                    hergestellt werden, da der Zielcomputer die Verbindung verweigerte.';
    $jsonData = Utils::formatJsonErrorMessage($jsonData);
    $arrayData = json_decode($jsonData, true);
    var_dump($arrayData[0]);
}


function testMail(){
    $type = "email";
    $senderFullName = "Guy Watcho";
    $userPhoto = "president.jpg";
    $message = "Confirmer cet enregistrement";
    Utils::sendMailToGroup($type, $senderFullName, $userPhoto, $message);
}

 //testJson2();
 // testUploadJson();
// testJson();

//testDates();






































?>