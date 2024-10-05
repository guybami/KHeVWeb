<?php


include "../Controllers/ConferenceController.php";


/**
 * ConferenceControllerTest unit Test
 *
 * CRUD methods will be tested here
 * @author Guy Bami
 */
class ConferenceControllerTest extends PHPUnit_Framework_TestCase {

    var $numRecordsToInsert;
    var $numRecordsToDelete;

    protected function setUp() {
        $this->numRecordsToInsert = 5;
        $this->numRecordsToDelete= 2;
    }


    function testInsertNewConference(){
        $userAction = "insertNewItem";
        $conferenceController = new ConferenceController($userAction);
        for($i = 0; $i < $this->numRecordsToInsert; $i++){
            $date = date('Y-m-d H:i:s');
            $title = "title-Value-" . $i;
            $location = "location-Value-" . $i;
            $summary = "summary-Value-" . $i;
            $jsonData = '{"date": "'.$date.'", "title": "'.$title.'", "location":"'.$location.'", "summary":"'.$summary.'"}';
            $resultValue = $conferenceController->insertNewConference($jsonData);
            $arrayData = json_decode($resultValue, true);
            $result = count($arrayData) > 0 && strlen($arrayData[0]['jsonResult']) > 0;
            //$result = strpos($resultValue, 'SUCCESSFUL_INSERT') !== false;
            $this->assertTrue($result);
            if(!$result)
                break;
        }

    }


    function testDeleteAllConferences(){

        $userAction = "deleteAllItems";
        $conferenceController = new ConferenceController($userAction);
        $resultValue = $conferenceController->deleteAllConferences();
        $arrayData = json_decode($resultValue, true);
        $result = count($arrayData) >= 0 &&
            strpos($arrayData[0], Utils::formatJsonResultMessage(Common::DELETE_SUCCESSFUL)) !== false;
        $this->assertTrue($result);
    }


    function testSelectAllConferences(){

        $userAction = "getAllItems";
        $conferenceController = new ConferenceController($userAction);
        $resultValue = $conferenceController->getAllConferences();
        $arrayData = json_decode($resultValue, true);
        $result = count($arrayData) > 0 && count($arrayData[0]) > 0;
        $this->assertTrue($result);
    }


    function testAllTests(){
        $this->testInsertNewConference();
        $this->testSelectAllConferences();
        //$this->testDeleteAllConferences();
        

    }



}