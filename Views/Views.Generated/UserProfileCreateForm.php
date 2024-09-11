
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  UserProfile   entity form
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
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="userProfileDetailsForm" class="form-horizontal" data-dojo-id="userProfileDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="userId">'.UserProfileUIResource::userIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="userId" name="userId" class="form-control" />  
                    </div>
                </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-4" for="gender">'.UserProfileUIResource::genderColLabelText().'</label>
                        <div class="col-md-8">
                            <select style="width:15em;"  id="gender" name="gender" class="selectpicker">  
                                <option value="Male">Male</option><option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="photoFileName">'.UserProfileUIResource::photoFileNameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="photoFileName" name="photoFileName" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="street">'.UserProfileUIResource::streetColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="street" name="street" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="zipCode">'.UserProfileUIResource::zipCodeColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="zipCode" name="zipCode" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="city">'.UserProfileUIResource::cityColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="city" name="city" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="address">'.UserProfileUIResource::addressColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="address" name="address" class="form-control" />  
                    </div>
                </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-4" for="defalutLanguage">'.UserProfileUIResource::defalutLanguageColLabelText().'</label>
                        <div class="col-md-8">
                            <select style="width:15em;"  id="defalutLanguage" name="defalutLanguage" class="selectpicker">  
                                <option value="DE">DE</option><option value="FR">FR</option><option value="EN">EN</option>
                            </select>
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
                 