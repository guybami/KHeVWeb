
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  EventVideo model entity.
                * @author  
                *    Guy Bami 
                */
                
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/eventvideos.fr.res.php', 
                                            '../../UIResources/eventvideos.en.res.php',
                                            '../../UIResources/eventvideos.de.res.php');
       
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
                <label for="eventIdLabel" class="control-label col-md-4">'.EventVideoUIResource::eventIdColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="eventIdLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="fileFullNameLabel" class="control-label col-md-4">'.EventVideoUIResource::fileFullNameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="fileFullNameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="titleLabel" class="control-label col-md-4">'.EventVideoUIResource::titleColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="titleLabel"></label>
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
                 