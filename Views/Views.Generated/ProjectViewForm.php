
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  Project model entity.
                * @author  
                *    Guy Bami 
                */
                
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/projects.fr.res.php', 
                                            '../../UIResources/projects.en.res.php',
                                            '../../UIResources/projects.de.res.php');
       
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
                <label for="userIdLabel" class="control-label col-md-4">'.ProjectUIResource::userIdColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="userIdLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="titleLabel" class="control-label col-md-4">'.ProjectUIResource::titleColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="titleLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="summaryLabel" class="control-label col-md-4">'.ProjectUIResource::summaryColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="summaryLabel"></label>
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
                 