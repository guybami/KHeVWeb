
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  Event   entity form
                * @author  
                *    Guy Bami 
                */
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/events.fr.res.php', 
                                            '../../UIResources/events.en.res.php',
                                            '../../UIResources/events.de.res.php');

                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="eventDetailsForm" class="form-horizontal" data-dojo-id="eventDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="title">'.EventUIResource::titleColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="title" name="title" class="form-control" />  
                    </div>
                </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-4" for="category">'.EventUIResource::categoryColLabelText().'</label>
                        <div class="col-md-8">
                            <select style="width:15em;"  id="category" name="category" class="selectpicker">  
                                <option value="CultureWeek">CultureWeek</option><option value="FirstSemesterParty">FirstSemesterParty</option><option value="GalaNight">GalaNight</option><option value="Gaduation">Gaduation</option><option value="GrillParty">GrillParty</option><option value="Challenge">Challenge</option><option value="Mourning">Mourning</option><option value="Divers">Divers</option>
                            </select>
                        </div>
                    </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="date">'.EventUIResource::dateColLabelText().'</label>
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
                    <label class="control-label col-md-4" for="location">'.EventUIResource::locationColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="location" name="location" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="summary">'.EventUIResource::summaryColLabelText().'</label>
                    <div class="col-md-8">
                        <textarea  rows="5" id="summary" name="summary" class="form-control"></textarea>  
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
                 