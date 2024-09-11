
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  Member model entity.
                * @author  
                *    Guy Bami 
                */
                
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/members.fr.res.php', 
                                            '../../UIResources/members.en.res.php',
                                            '../../UIResources/members.de.res.php');
       
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
                <label for="genderLabel" class="control-label col-md-4">'.MemberUIResource::genderColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="genderLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="nameLabel" class="control-label col-md-4">'.MemberUIResource::nameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="nameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="lastNameLabel" class="control-label col-md-4">'.MemberUIResource::lastNameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="lastNameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="emailLabel" class="control-label col-md-4">'.MemberUIResource::emailColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="emailLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="phoneNumberLabel" class="control-label col-md-4">'.MemberUIResource::phoneNumberColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="phoneNumberLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="zipCodeLabel" class="control-label col-md-4">'.MemberUIResource::zipCodeColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="zipCodeLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="cityLabel" class="control-label col-md-4">'.MemberUIResource::cityColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="cityLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="addressLabel" class="control-label col-md-4">'.MemberUIResource::addressColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="addressLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="positionLabel" class="control-label col-md-4">'.MemberUIResource::positionColLabelText().'</label>
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
                 