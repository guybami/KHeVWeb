
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  Income model entity.
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
                
 $content = ' <div class="_hideContent" id="viewItemDetailsFormContentDiv">
                    <div class="container">
                        <div class="form-horizontal" id="viewForm"> 
            <div class="form-group ">
                <label for="eventIdLabel" class="control-label col-md-4">'.IncomeUIResource::eventIdColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="eventIdLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="titleLabel" class="control-label col-md-4">'.IncomeUIResource::titleColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="titleLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="amountLabel" class="control-label col-md-4">'.IncomeUIResource::amountColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="amountLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="categoryLabel" class="control-label col-md-4">'.IncomeUIResource::categoryColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="categoryLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="billFileNameLabel" class="control-label col-md-4">'.IncomeUIResource::billFileNameColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="billFileNameLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="dateLabel" class="control-label col-md-4">'.IncomeUIResource::dateColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="dateLabel"></label>
                </div>
            </div>
              </div>
                </div>
            </div>
             ' ;
                    $mainPage = new PageModel();
                    $userLang = "fr-FR";
                    $mainPage->setUseDojoScripts(false);
                    $mainPage->setActiveMenu("administration");
                    $mainPage->setDirectoryLevel(2);
                    $mainPage->setUserLanguage($userLang);
                    $mainPage->setPageJscript($script);
                    $mainPage->setTitle($title);
                    $mainPage->setContent($content);
                    $mainPage->displayPage();
                 