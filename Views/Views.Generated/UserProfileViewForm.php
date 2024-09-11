
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  UserProfile model entity.
                * @author  
                *    Guy Bami 
                */
                
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/userprofiles.fr.res.php', 
                                            '../../UIResources/userprofiles.en.res.php',
                                            '../../UIResources/userprofiles.de.res.php');
       
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
                <label for="userIdLabel" class="control-label col-md-4">'.UserProfileUIResource::userIdColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="userIdLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="genderLabel" class="control-label col-md-4">'.UserProfileUIResource::genderColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="genderLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="photoFileNameLabel" class="control-label col-md-4">'.UserProfileUIResource::photoFileNameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="photoFileNameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="streetLabel" class="control-label col-md-4">'.UserProfileUIResource::streetColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="streetLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="zipCodeLabel" class="control-label col-md-4">'.UserProfileUIResource::zipCodeColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="zipCodeLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="cityLabel" class="control-label col-md-4">'.UserProfileUIResource::cityColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="cityLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="addressLabel" class="control-label col-md-4">'.UserProfileUIResource::addressColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="addressLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="defalutLanguageLabel" class="control-label col-md-4">'.UserProfileUIResource::defalutLanguageColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="defalutLanguageLabel"></label>
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
                 