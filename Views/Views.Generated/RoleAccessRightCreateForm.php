
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  RoleAccessRight   entity form
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
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="roleAccessRightDetailsForm" class="form-horizontal" data-dojo-id="roleAccessRightDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="roleId">'.RoleAccessRightUIResource::roleIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="roleId" name="roleId" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="entityType">'.RoleAccessRightUIResource::entityTypeColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="entityType" name="entityType" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="createRight">'.RoleAccessRightUIResource::createRightColLabelText().'</label>
                    <div class="col-md-8">
                        <input class="styled styled-primary" type="checkbox"  id="createRight" name="createRight"  />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="readRight">'.RoleAccessRightUIResource::readRightColLabelText().'</label>
                    <div class="col-md-8">
                        <input class="styled styled-primary" type="checkbox"  id="readRight" name="readRight"  />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="editRight">'.RoleAccessRightUIResource::editRightColLabelText().'</label>
                    <div class="col-md-8">
                        <input class="styled styled-primary" type="checkbox"  id="editRight" name="editRight"  />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="deleteRight">'.RoleAccessRightUIResource::deleteRightColLabelText().'</label>
                    <div class="col-md-8">
                        <input class="styled styled-primary" type="checkbox"  id="deleteRight" name="deleteRight"  />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="fullRight">'.RoleAccessRightUIResource::fullRightColLabelText().'</label>
                    <div class="col-md-8">
                        <input class="styled styled-primary" type="checkbox"  id="fullRight" name="fullRight"  />  
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
                 