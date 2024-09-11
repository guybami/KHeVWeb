
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  Member   entity form
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
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="memberDetailsForm" class="form-horizontal" data-dojo-id="memberDetailsForm" encType="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-md-4" for="gender">'.MemberUIResource::genderColLabelText().'</label>
                                <div class="col-md-8">
                                    <select style="width:15em;"  id="gender" name="gender" class="selectpicker">  
                                        <option value="Male">Male</option><option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="form-group">
                                <label class="control-label col-md-4" for="name">'.MemberUIResource::nameColLabelText().'</label>
                                <div class="col-md-8">
                                    <input type="text"  id="name" name="name" class="form-control" />  
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label class="control-label col-md-4" for="lastName">'.MemberUIResource::lastNameColLabelText().'</label>
                                <div class="col-md-8">
                                    <input type="text"  id="lastName" name="lastName" class="form-control" />  
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label class="control-label col-md-4" for="email">'.MemberUIResource::emailColLabelText().'</label>
                                <div class="col-md-8">
                                    <input type="text"  id="email" name="email" class="form-control" />  
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label class="control-label col-md-4" for="phoneNumber">'.MemberUIResource::phoneNumberColLabelText().'</label>
                                <div class="col-md-8">
                                    <input type="text"  id="phoneNumber" name="phoneNumber" class="form-control" />  
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label class="control-label col-md-4" for="zipCode">'.MemberUIResource::zipCodeColLabelText().'</label>
                                <div class="col-md-8">
                                    <input type="text"  id="zipCode" name="zipCode" class="form-control" />  
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label class="control-label col-md-4" for="city">'.MemberUIResource::cityColLabelText().'</label>
                                <div class="col-md-8">
                                    <input type="text"  id="city" name="city" class="form-control" />  
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label class="control-label col-md-4" for="address">'.MemberUIResource::addressColLabelText().'</label>
                                <div class="col-md-8">
                                    <input type="text"  id="address" name="address" class="form-control" />  
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label class="control-label col-md-4" for="position">'.MemberUIResource::positionColLabelText().'</label>
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
                 