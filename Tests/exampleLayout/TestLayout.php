<?php


 

class PageModel {

    // class members with default values
    private $pageContent = "No content";
    private $pageTitle = "Kameruner Heilbronner eV";
    private $userLanguage = "fr-FR";  //default language culture


    function setTitle($newTitle) {
        $this->pageTitle = $newTitle;

    }

    function setPageJscript($script) {
        $this->pageJscript = $script;
    }

    function setContent($content) {
        $this->pageContent = $content;
    }

    function setUserLanguage($userLang) {
        $this->userLanguage = $userLang;
    }

    /**
     * Displays header page
     * @return void
     */
    function displayHeader() {
            echo '
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html lang="en">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <title>'.$this->pageTitle.'</title>
                            <!--include all CSS files-->
                            <link rel="stylesheet" type="text/css" href="Resources/Styles/example.css" />
                            <!--[if IE 6]>
                            <style>
                                body {behavior: url("Resources/Styles/csshover3.htc");}
                            </style>
                            <![endif]-->
                            <!--[if lt IE 9]>
                                <script src="/Scripts/html5.js"></script>
                            <![endif]-->
                    </head>
                    <body>
                    ';
    }

    /**
     * Displays the main menu page
     * @return void
     */
    function displayMainMenu() {
        // to do
    }


    /**
     * Displays conten page
     * @return void
     */
    function displayContent() {
        echo $this->pageJscript;
        echo $this->pageContent;
    }


    /**
     * Displays footer page
     * @return void
     */
    function displayFooter() {
        echo '</body>
            </html>
            ';
    }


    /**
     * Get current language
     * @return string
     */
    static function getUserLanguage() {
        
        if(isset($_GET) && isset($_GET['userLang'])){
            $userLang = $_GET['userLang'];
            //echo "<br /> YES GET : $userLang";
        }
        else if(isset($_SESSION) && isset($_SESSION['userLang'])){
            $userLang = $_SESSION['userLang'];
            //echo "<br /> YES SESSION : $userLang";
        }
        else{
            $userLang = "fr-FR";  // default langauge
            //echo "<br /> YES default : $userLang";
        }
        
        return $userLang;
    }

    /**
     * Displays the page
     * @return void
     */
    function displayPage() {
        $this->displayHeader();
        $this->displayMainMenu();
        $this->displayContent();
        $this->displayFooter();
    }

    /**
     * Checks and start session
     * @return void
     */
    public static function checkAndStartSession() {

        $sessionStarted = FALSE;
        if (php_sapi_name() !== 'cli') {
            if (version_compare(phpversion(), '5.4.0', '>=')) {
                $sessionStarted = session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
            } else {
                $sessionStarted = session_id() === '' ? FALSE : TRUE;
            }
        }
        if($sessionStarted === FALSE && strlen(session_id()) < 2){
            // starts session
            session_start();
            //echo "Session Started with id: " . session_id();
        }
    }



    /**
     * Loads UI Ressource files
     * @return void
     */
    static function  loadUIResource() {
        
        self::checkAndStartSession();
        $userLang = self::getUserLanguage();

        if(!isset($userLang)){
            include_once "UIResources/example.en.res.php";
            return;
        }
        if ($userLang == "fr-FR"){
            include_once "UIResources/example.fr.res.php";
        }
        else if ($userLang == "en-US"){
            include_once "UIResources/example.en.res.php";
        }
        else if ($userLang == "de-DE"){
            include_once "UIResources/example.de.res.php";
        }
        else{
            include_once "UIResources/example.en.res.php";
        }  
            
    }
}
    
    

    PageModel::loadUIResource();

    $title = "Example Test layout";
    $script = ' <script type="text/javascript">
                      <!-- global variables -->
                      var pageLangTextsObj = {
		                  okBtnLabel : "'.ExampleUIResource::getOkBtnLabelText().'",
                          confirmMessageLabel : "'.ExampleUIResource::getConfirmMessageLabelText().'",
                          openingDatesLabel : "'.ExampleUIResource::getOpeningDatesLabelText().'" 
                    };
                 </script>
                 
            ';
    /// page content
    $content = '
        <script type="text/javascript" src="Scripts/exampleScript.js"></script>
        <div id="someDiv"></div>
        <br />
        <h1>This is just an example layout</h1>
        <hr /> 
        <br />
        <br />
        
        <table class="fullWidth  zeroPadding zeroSpacing cellspacing0">
            <tr>
                <td class="toLeft sectionTitleDiv fullWidth">
                    <label>'.ExampleUIResource::getSectionTitleLabelText().'</label>
                </td>
            </tr>
            <tr>
                <td class="fullWidth">
                    <table class="fullWidth hideBorder cellspacing2">
                        <tr>
                            <td class="toLeft fullWidth">
                                <div>'.ExampleUIResource::getDescriptionLabelText().'</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="toRight fullWidth">
                                <button id="okBtn" onClick="okBtnClick();" />'.ExampleUIResource::getOkBtnLabelText().'</button>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    ';

    
    $userLang = PageModel::getUserLanguage();

    $mainPage = new PageModel();
    $mainPage->setUserLanguage($userLang);
    $mainPage->setPageJscript($script);
    $mainPage->setTitle($title);
    $mainPage->setContent($content);
    $mainPage->displayPage();
     


















?>