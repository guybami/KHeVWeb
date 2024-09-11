
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  EventVideo   entity form
                * @author  
                *    Guy Bami 
                */
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/eventvideos.fr.res.php', 
                                            '../../UIResources/eventvideos.en.res.php',
                                            '../../UIResources/eventvideos.de.res.php');

                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="eventVideoDetailsForm" class="form-horizontal" data-dojo-id="eventVideoDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="eventId">'.EventVideoUIResource::eventIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="eventId" name="eventId" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="fileFullName">'.EventVideoUIResource::fileFullNameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="fileFullName" name="fileFullName" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="title">'.EventVideoUIResource::titleColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="title" name="title" class="form-control" />  
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
                 