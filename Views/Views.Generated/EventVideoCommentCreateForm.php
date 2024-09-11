
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  EventVideoComment   entity form
                * @author  
                *    Guy Bami 
                */
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/eventvideocomments.fr.res.php', 
                                            '../../UIResources/eventvideocomments.en.res.php',
                                            '../../UIResources/eventvideocomments.de.res.php');

                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="eventVideoCommentDetailsForm" class="form-horizontal" data-dojo-id="eventVideoCommentDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="videoId">'.EventVideoCommentUIResource::videoIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="videoId" name="videoId" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="userId">'.EventVideoCommentUIResource::userIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="userId" name="userId" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="commentText">'.EventVideoCommentUIResource::commentTextColLabelText().'</label>
                    <div class="col-md-8">
                        <textarea  rows="5" id="commentText" name="commentText" class="form-control"></textarea>  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="date">'.EventVideoCommentUIResource::dateColLabelText().'</label>
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
                 