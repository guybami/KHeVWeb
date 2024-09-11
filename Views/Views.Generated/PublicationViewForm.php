
                <?php
               

                /** This form content was auto generated with GWatcho module generator 
                * Insert an  Publication model entity.
                * @author  
                *    Guy Bami 
                */
                
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/publications.fr.res.php', 
                                            '../../UIResources/publications.en.res.php',
                                            '../../UIResources/publications.de.res.php');
       
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
                <label for="userIdLabel" class="control-label col-md-4">'.PublicationUIResource::userIdColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="userIdLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="categoryLabel" class="control-label col-md-4">'.PublicationUIResource::categoryColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="categoryLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="summaryLabel" class="control-label col-md-4">'.PublicationUIResource::summaryColLabelText().'</label>
                <div class="col-md-8">
                    <label class="form-control-static dataViewLabel" id="summaryLabel"></label>
                </div>
            </div>
            
            <div class="form-group ">
                <label for="dateLabel" class="control-label col-md-4">'.PublicationUIResource::dateColLabelText().'</label>
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
                 