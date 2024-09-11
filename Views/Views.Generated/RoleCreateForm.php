
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  Role   entity form
                * @author  
                *    Guy Bami 
                */
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/roles.fr.res.php', 
                                            '../../UIResources/roles.en.res.php',
                                            '../../UIResources/roles.de.res.php');

                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="roleDetailsForm" class="form-horizontal" data-dojo-id="roleDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="name">'.RoleUIResource::nameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="name" name="name" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="description">'.RoleUIResource::descriptionColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="description" name="description" class="form-control" />  
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
                 