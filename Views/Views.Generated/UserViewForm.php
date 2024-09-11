
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  User model entity.
                * @author  
                *    Guy Bami 
                */
                
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/users.fr.res.php', 
                                            '../../UIResources/users.en.res.php',
                                            '../../UIResources/users.de.res.php');
       
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
                <label for="loginNameLabel" class="control-label col-md-4">'.UserUIResource::loginNameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="loginNameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="hashPasswordLabel" class="control-label col-md-4">'.UserUIResource::hashPasswordColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="hashPasswordLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="nameLabel" class="control-label col-md-4">'.UserUIResource::nameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="nameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="lastNameLabel" class="control-label col-md-4">'.UserUIResource::lastNameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="lastNameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="phoneNumberLabel" class="control-label col-md-4">'.UserUIResource::phoneNumberColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="phoneNumberLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="emailLabel" class="control-label col-md-4">'.UserUIResource::emailColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="emailLabel"></label>
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
                 