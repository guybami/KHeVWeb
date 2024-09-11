<?php


include "../Controllers/IncomeController.php";


/**
 * IncomeControllerTest unit Test
 *
 * CRUD methods will be tested here
 * @author Guy Bami
 */
class IncomeControllerTest  /*extends PHPUnit_Framework_TestCase */
{

    var $numRecordsToInsert;
    var $numRecordsToDelete;


    function __construct() {
         $this->numRecordsToInsert = 1;
        $this->numRecordsToDelete= 1;
    }

    protected function setUp() {
        $this->numRecordsToInsert = 1;
        $this->numRecordsToDelete= 1;
    }


    function testInsertNewIncome(){
        $userAction = "insertNewItem";
        $incomeController = new IncomeController($userAction);
        for($i = 0; $i < $this->numRecordsToInsert; $i++){

        /*
        "transactionDate": "2017-03-31T22:00:00.000Z",
	"eventId": "2",
	"title": "title-f559078",
	"amount": "4",
	"category": "CultureWeek",
	"billFileName": "antrag-visa.pdf"
        */
            $transactionDate = date('Y-m-d H:i:s');
            $eventId = "2";
            $title = "title-Value-" . $i;
            $amount = "4";
            $category = "CultureWeek";
            $billFileName = "antrag-visa.pdf";

            $jsonData = '{"transactionDate": "'.$transactionDate
                        .'", "eventId": "'.$eventId
                        .'", "title": "'.$title
                        .'", "amount":"'.$amount
                        .'", "category":"'.$category
                        .'", "billFileName":"'.$billFileName.'"}';
            $resultValue = $incomeController->insertNewIncome($jsonData);
            $arrayData = json_decode($resultValue, true);
            $result = count($arrayData) > 0 && strlen($arrayData[0]['insertedItemKey']) > 0;
            //$result = strpos($resultValue, 'SUCCESSFUL_INSERT') !== false;
            echo "Result is: " . print_r($arrayData);
            //$this->assertTrue($result);
            if(!$result)
                break;
        }

    }


    function testDeleteAllIncomes(){

        $userAction = "deleteAllItems";
        $incomeController = new IncomeController($userAction);
        $resultValue = $incomeController->deleteAllIncomes();
        $arrayData = json_decode($resultValue, true);
        $result = count($arrayData) > 0 &&
            strpos($arrayData[0], Utils::formatJsonResultMessage(Common::DELETE_SUCCESSFUL)) !== false;
        $this->assertTrue($result);
    }


    function testSelectAllIncomes(){

        $userAction = "getAllItems";
        $incomeController = new IncomeController($userAction);
        $resultValue = $incomeController->getAllIncomes();
        $arrayData = json_decode($resultValue, true);
        $result = count($arrayData) > 0 && count($arrayData[0]) > 0;
        $this->assertTrue($result);
    }


    function testAllTests(){
        $this->testInsertNewIncome();
        $this->testSelectAllIncomes();
        //$this->testDeleteAllIncomes();
        

    }



}

$unitTest = new IncomeControllerTest();

$unitTest->testInsertNewIncome();