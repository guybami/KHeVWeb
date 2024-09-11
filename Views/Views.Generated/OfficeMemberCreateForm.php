
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  OfficeMember   entity form
                * @author  
                *    Guy Bami 
                */
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/officemembers.fr.res.php', 
                                            '../../UIResources/officemembers.en.res.php',
                                            '../../UIResources/officemembers.de.res.php');

                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="officeMemberDetailsForm" class="form-horizontal" data-dojo-id="officeMemberDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="memberId">'.OfficeMemberUIResource::memberIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="memberId" name="memberId" class="form-control" />  
                    </div>
                </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-4" for="position">'.OfficeMemberUIResource::positionColLabelText().'</label>
                        <div class="col-md-8">
                            <select style="width:15em;"  id="position" name="position" class="selectpicker">  
                                <option value="President">President</option><option value="Secretary">Secretary</option><option value="ChiefCulture">ChiefCulture</option><option value="ChiefSport">ChiefSport</option><option value="Treasurer">Treasurer</option>
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
                 