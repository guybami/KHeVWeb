
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  EventBillSummary   entity form
                * @author  
                *    Guy Bami 
                */
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/eventbillsummaries.fr.res.php', 
                                            '../../UIResources/eventbillsummaries.en.res.php',
                                            '../../UIResources/eventbillsummaries.de.res.php');

                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="eventBillSummaryDetailsForm" class="form-horizontal" data-dojo-id="eventBillSummaryDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="eventId">'.EventBillSummaryUIResource::eventIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="eventId" name="eventId" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="title">'.EventBillSummaryUIResource::titleColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="title" name="title" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="summary">'.EventBillSummaryUIResource::summaryColLabelText().'</label>
                    <div class="col-md-8">
                        <textarea  rows="5" id="summary" name="summary" class="form-control"></textarea>  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="summaryFileName">'.EventBillSummaryUIResource::summaryFileNameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="summaryFileName" name="summaryFileName" class="form-control" />  
                    </div>
                </div>
                  </form>
                </div>
            </div>
             ' ;
                    $mainPage = new PageModel();
                    $userLang = "fr-FR";
                    $mainPage->setUseDojoScripts(true);
                    $mainPage->setActiveMenu("administration");
                    $mainPage->setDirectoryLevel(2);
                    $mainPage->setUserLanguage($userLang);
                    $mainPage->setPageJscript($script);
                    $mainPage->setTitle($title);
                    $mainPage->setContent($content);
                    $mainPage->displayPage();
                 