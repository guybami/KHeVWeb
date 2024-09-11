
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  Veteran model entity.
                * @author  
                *    Guy Bami 
                */
                
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/veterans.fr.res.php', 
                                            '../../UIResources/veterans.en.res.php',
                                            '../../UIResources/veterans.de.res.php');
       
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
                <label for="genderLabel" class="control-label col-md-4">'.VeteranUIResource::genderColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="genderLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="nameLabel" class="control-label col-md-4">'.VeteranUIResource::nameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="nameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="lastNameLabel" class="control-label col-md-4">'.VeteranUIResource::lastNameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="lastNameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="emailLabel" class="control-label col-md-4">'.VeteranUIResource::emailColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="emailLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="phoneNumberLabel" class="control-label col-md-4">'.VeteranUIResource::phoneNumberColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="phoneNumberLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="zipCodeLabel" class="control-label col-md-4">'.VeteranUIResource::zipCodeColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="zipCodeLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="cityLabel" class="control-label col-md-4">'.VeteranUIResource::cityColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="cityLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="addressLabel" class="control-label col-md-4">'.VeteranUIResource::addressColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="addressLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="positionLabel" class="control-label col-md-4">'.VeteranUIResource::positionColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="positionLabel"></label>
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
                 