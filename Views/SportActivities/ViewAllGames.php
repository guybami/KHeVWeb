<?php

    require_once "../../Includes/Common.php";
    require_once "../../DataAccessObject/DaoCommon.php";
    require_once "../../Models/EntityCommon.php";
    require "../PageModel.php";
    
    $mainPage = new PageModel();
    // get user language
    $userLang = $_SESSION['userLang'];
    $title = "Kameruner Heilbronn eV - Activites sportives";
    // load UI resource 
    Utils::loadUIResources("../../UIResources/conferences.fr.res.php", "../../UIResources/conferences.en.res.php");


    // custon page script, if needed
   $script = '
        <!--language texts for page -->
        <script  type="text/javascript">
            var pageLangTexts = {
		    viewAllItemsBtnLabel : "'.ConferenceUIResource::viewAllItemsBtnLabelText().'",
                    viewDetailsBtnLabel : "'.ConferenceUIResource::viewDetailsBtnLabelText().'",
                    updateItemBtnLabel : "'.ConferenceUIResource::updateItemBtnLabelText().'",
                    viewPreviousItemBtnLabel : "'.ConferenceUIResource::viewPreviousItemBtnLabelText().'",
                    viewNextItemBtnLabel : "'.ConferenceUIResource::viewNextItemBtnLabelText().'",
                    saveItemBtnLabel : "'.ConferenceUIResource::saveItemBtnLabelText().'",
                    cancelUpdateItemBtnLabel : "'.ConferenceUIResource::cancelUpdateItemBtnLabelText().'",
                    cancelAddItemBtnLabel : "'.ConferenceUIResource::cancelAddItemBtnLabelText().'"
              };
        </script>
        <script   src="../../Scripts/tournamentsListScript.js"  type="text/javascript"> </script> 

        ';
    // page content
    $content = ' 
        
         
          <!-- page content -->
          <div class="row hideContent">
            <div id="sitePathDiv"></div>
            <div class="container">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Nos Tournois</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Imprimer</a></li>
                                            <li class="divider"></li>
                                            <!-- Pour changer le dossier des flyers, modifie le chemin ci-dessous -->
                                            <li><a href="../../UploadedFiles/Images/Events/KulturTag_flyer_1.jpeg" target="_blank">Flyer Tournoi 1</a></li>
                                            <li><a href="../../UploadedFiles/Images/Events/KulturTag_flyer_2.jpeg" target="_blank">Flyer Tournoi 2</a></li>
                                            <li><a href="../../UploadedFiles/Images/Events/Tournoi_Veterants.jpeg" target="_blank">Flyer Tournoi Vétérans</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>  
                            <div class="x_content">
                                <div class="container">
                                    <table class="fullWidth cellspacing3 cellpadding3">
                                        <tr>
                                            <td class="fullWidth toRight">
                                                <div class="input-group toRight pull-right searchBarMargin">
                                                    <div class="btn-group" role="group" aria-label="filter members">
                                                      <button type="button" class="btn btn-default" id="filterPreviousPrevYearBtn">2015</button>
                                                      <button type="button" class="btn btn-default" id="filterPreviousYearBtn">2016</button>
                                                      <button type="button" class="btn btn-primary" id="filterCurrentYearBtn">2017</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div id="tournamentsDiv" class="marginBotton">
                                    </div>
                                    <!-- modal content -->
                                    <div class="modal fade " id="eventPhotosModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="modalTitle">Modal title</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- start thumbnail content -->
                                                    <div class="modal-body-thumbnail">
                                                        <div class="sliderThumbnailDiv">
                                                            <div class="sliderThumbnailImg" id="thumbnailHolder">
                                                                <table class="fullWidth ">
                                                                    <tr>
                                                                        <td class="toCenter">
                                                                            <div>
                                                                                <a class="left" role="button">
                                                                                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                                                                                    <span class="sr-only">Previous</span>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                        <td class="toCenter">
                                                                            <div class="toCenter">
                                                                                <img src="../../UploadedFiles/Images/Events/cS-1.jpg" id="currentPhoto" />
                                                                            </div>
                                                                        </td>
                                                                        <td class="toCenter">
                                                                            <div>
                                                                                <a class="right" role="button">
                                                                                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                                                                                    <span class="sr-only">Previous</span>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="userCommentsDiv leftBorder toTop photoCommentsDiv" id="photoCommentsDiv">
                                                            <table class="fullWidth userCommentInnerTableWithNoTop zeroSpacing">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="toTop">
                                                                            <div class="toTop"> 
                                                                                <img src="" class="userPhotoImg"> 
                                                                            </div>
                                                                        </td>
                                                                        <td class="toLeft fullWidth" valign="top">
                                                                            <span class="commentText">
                                                                                <span class="userDisplayName">Test-123 </span>
                                                                                    <span id="photoCommentText"> 
                                                                                        <text> 
                                                                                        <img src="../../Resources/Images/defaultUser.png" alt="-" />
                                                                                            commentaire....
                                                                                        </text>
                                                                                    </span>
                                                                            <br />
                                                                            </span> <span class="commentDate toLeft">12.11.2016 15:14:12</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <span id="insertCommentSpan"></span>
                                                            <table class="fullWidth userCommentInnerTableWithNoTop zeroSpacing">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="toTop">
                                                                            <span>Commentaire:</span>
                                                                        </td>
                                                                        <td class="toTop">
                                                                            <div class="toTop">
                                                                                <input type="text" class="form-control" id="userCommentField"
                                                                                    onkeypress="" placeholder="commentaire..." /> </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal-content -->
                                </div>
                          </div> 
                          <!-- end x_content -->       
                    </div>
                </div>
            </div> 
            <!-- end div container -->
        </div>     
    ';

    $mainPage->setUseDojoScripts(true);
    $mainPage->setActiveMenu("administration");
    $mainPage->setDirectoryLevel(2);
    $mainPage->setUserLanguage($userLang);
    $mainPage->setShouldDisplayLanguageSelection(false);
    $mainPage->setPageJscript($script);
    $mainPage->setTitle($title);
    $mainPage->setContent($content);
    $mainPage->displayPage();
 


