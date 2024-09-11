
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  Veteran   entity form
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
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="veteranDetailsForm" class="form-horizontal" data-dojo-id="veteranDetailsForm" encType="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="control-label col-md-4" for="gender">'.VeteranUIResource::genderColLabelText().'</label>
                        <div class="col-md-8">
                            <select style="width:15em;"  id="gender" name="gender" class="selectpicker">  
                                <option value="Male">Male</option><option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="name">'.VeteranUIResource::nameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="name" name="name" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="lastName">'.VeteranUIResource::lastNameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="lastName" name="lastName" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="email">'.VeteranUIResource::emailColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="email" name="email" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="phoneNumber">'.VeteranUIResource::phoneNumberColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="phoneNumber" name="phoneNumber" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="zipCode">'.VeteranUIResource::zipCodeColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="zipCode" name="zipCode" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="city">'.VeteranUIResource::cityColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="city" name="city" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="address">'.VeteranUIResource::addressColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="address" name="address" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="position">'.VeteranUIResource::positionColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="position" name="position" class="form-control" />  
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
                 