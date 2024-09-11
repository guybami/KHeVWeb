
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  User   entity form
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
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="userDetailsForm" class="form-horizontal" data-dojo-id="userDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="loginName">'.UserUIResource::loginNameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="loginName" name="loginName" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="hashPassword">'.UserUIResource::hashPasswordColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="hashPassword" name="hashPassword" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="name">'.UserUIResource::nameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="name" name="name" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="lastName">'.UserUIResource::lastNameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="lastName" name="lastName" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="phoneNumber">'.UserUIResource::phoneNumberColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="phoneNumber" name="phoneNumber" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="email">'.UserUIResource::emailColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="email" name="email" class="form-control" />  
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
                 