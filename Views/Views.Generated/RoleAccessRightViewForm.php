
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  RoleAccessRight model entity.
                * @author  
                *    Guy Bami 
                */
                
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/roleaccessrights.fr.res.php', 
                                            '../../UIResources/roleaccessrights.en.res.php',
                                            '../../UIResources/roleaccessrights.de.res.php');
       
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
                <label for="roleIdLabel" class="control-label col-md-4">'.RoleAccessRightUIResource::roleIdColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="roleIdLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="entityTypeLabel" class="control-label col-md-4">'.RoleAccessRightUIResource::entityTypeColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="entityTypeLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="createRightLabel" class="control-label col-md-4">'.RoleAccessRightUIResource::createRightColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="createRightLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="readRightLabel" class="control-label col-md-4">'.RoleAccessRightUIResource::readRightColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="readRightLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="editRightLabel" class="control-label col-md-4">'.RoleAccessRightUIResource::editRightColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="editRightLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="deleteRightLabel" class="control-label col-md-4">'.RoleAccessRightUIResource::deleteRightColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="deleteRightLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="fullRightLabel" class="control-label col-md-4">'.RoleAccessRightUIResource::fullRightColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="fullRightLabel"></label>
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
                 