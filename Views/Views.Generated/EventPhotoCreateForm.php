
<?php

/* * This form content was auto generated with GWatcho module generator 
 * Insert an  EventPhoto   entity form
 * @author  
 *    Guy Bami 
 */

//load required ressources
require_once '../../Includes/Common.php';
require_once '../../DataAccessObject/DaoCommon.php';
require_once '../../Models/EntityCommon.php';
require '../PageModel.php';
// load UI resource 
Utils::loadUIResources('../../UIResources/eventphotos.fr.res.php', '../../UIResources/eventphotos.en.res.php', '../../UIResources/eventphotos.de.res.php');

$title = 'Module Generator - Test ContentPage';
$script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';

$content = '<div   id="editItemDetailsFormContentDiv" class="_hideContent">
                <div class="container">
                    <form id="eventPhotoDetailsForm" class="form-horizontal" data-dojo-id="eventPhotoDetailsForm" encType="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-md-4" for="eventId">' . EventPhotoUIResource::eventIdColLabelText() . '</label>
                            <div class="col-md-8">
                                <input type="number"  id="eventId" name="eventId" class="form-control" />  
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" for="fileFullName">' . EventPhotoUIResource::fileFullNameColLabelText() . '</label>
                            <div class="col-md-8">
                                <input type="text"  id="fileFullName" name="fileFullName" class="form-control" />  
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" for="title">' . EventPhotoUIResource::titleColLabelText() . '</label>
                            <div class="col-md-8">
                                <input type="text"  id="title" name="title" class="form-control"  />  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
             ';
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
