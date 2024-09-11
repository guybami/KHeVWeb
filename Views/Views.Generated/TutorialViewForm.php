
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  Tutorial model entity.
                * @author  
                *    Guy Bami 
                */
                
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/tutorials.fr.res.php', 
                                            '../../UIResources/tutorials.en.res.php',
                                            '../../UIResources/tutorials.de.res.php');
       
                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div class="_hideContent" id="viewItemDetailsFormContentDiv">
                    <div class="container">
                        <div class="form-horizontal" id="viewForm"> 
            <div class="form-group ">
                <label for="memberIdLabel" class="control-label col-md-4">'.TutorialUIResource::memberIdColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="memberIdLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="dateLabel" class="control-label col-md-4">'.TutorialUIResource::dateColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="dateLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="subjectLabel" class="control-label col-md-4">'.TutorialUIResource::subjectColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="subjectLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="levelLabel" class="control-label col-md-4">'.TutorialUIResource::levelColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="levelLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="locationLabel" class="control-label col-md-4">'.TutorialUIResource::locationColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="locationLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="shedulesLabel" class="control-label col-md-4">'.TutorialUIResource::shedulesColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="shedulesLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="statusLabel" class="control-label col-md-4">'.TutorialUIResource::statusColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="statusLabel"></label>
                </div>
            </div>
              </div>
                </div>
            </div>
             ' ;
                    $mainPage = new PageModel();
                    $userLang = "fr-FR";
                    $mainPage->setUseDojoScripts(false);
                    $mainPage->setActiveMenu("administration");
                    $mainPage->setDirectoryLevel(2);
                    $mainPage->setUserLanguage($userLang);
                    $mainPage->setPageJscript($script);
                    $mainPage->setTitle($title);
                    $mainPage->setContent($content);
                    $mainPage->displayPage();
                 