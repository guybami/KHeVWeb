
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  Tutorial   entity form
                * @author  
                *    Guy Bami 
                */
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/tutorials.fr.res.php', 
                                            '../../UIResources/tutorials.en.res.php',
                                            '../../UIResources/tutorials.de.res.php');

                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="tutorialDetailsForm" class="form-horizontal" data-dojo-id="tutorialDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="memberId">'.TutorialUIResource::memberIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="memberId" name="memberId" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="date">'.TutorialUIResource::dateColLabelText().'</label>
                    <div class="col-md-8">
                        <div class="input-group date">
                            <input type="text" class="form-control" id="date" name="date" aria-required="true"  data-placement="top" aria-invalid="false" required  />
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div> 
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="subject">'.TutorialUIResource::subjectColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="subject" name="subject" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="level">'.TutorialUIResource::levelColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="level" name="level" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="location">'.TutorialUIResource::locationColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="location" name="location" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="shedules">'.TutorialUIResource::shedulesColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="shedules" name="shedules" class="form-control" />  
                    </div>
                </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-4" for="status">'.TutorialUIResource::statusColLabelText().'</label>
                        <div class="col-md-8">
                            <select style="width:15em;"  id="status" name="status" class="selectpicker">  
                                <option value="Cancelled">Cancelled</option><option value="Active">Active</option>
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
                 