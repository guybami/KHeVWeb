
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  Income   entity form
                * @author  
                *    Guy Bami 
                */
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/incomes.fr.res.php', 
                                            '../../UIResources/incomes.en.res.php',
                                            '../../UIResources/incomes.de.res.php');

                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="incomeDetailsForm" class="form-horizontal" data-dojo-id="incomeDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="eventId">'.IncomeUIResource::eventIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="eventId" name="eventId" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="title">'.IncomeUIResource::titleColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="title" name="title" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="amount">'.IncomeUIResource::amountColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="amount" name="amount" class="form-control" />  
                    </div>
                </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-4" for="category">'.IncomeUIResource::categoryColLabelText().'</label>
                        <div class="col-md-8">
                            <select style="width:15em;"  id="category" name="category" class="selectpicker">  
                                <option value="CultureWeek">CultureWeek</option><option value="FirstSemesterParty">FirstSemesterParty</option><option value="GalaNight">GalaNight</option><option value="Gaduation">Gaduation</option><option value="GrillParty">GrillParty</option><option value="Challenge">Challenge</option><option value="Mourning">Mourning</option><option value="Donation">Donation</option><option value="Sport">Sport</option><option value="Divers">Divers</option>
                            </select>
                        </div>
                    </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="billFileName">'.IncomeUIResource::billFileNameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="billFileName" name="billFileName" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="date">'.IncomeUIResource::dateColLabelText().'</label>
                    <div class="col-md-8">
                        <div class="input-group date">
                            <input type="text" class="form-control" id="date" name="date" aria-required="true"  data-placement="top" aria-invalid="false" required  />
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div> 
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
                 