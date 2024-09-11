
<?php
        
    require_once "../../Includes/Common.php";
    require_once "../../DataAccessObject/DaoCommon.php";
    require_once "../../Models/EntityCommon.php";
    require "../PageModel.php";
    
    $mainPage = new PageModel();
    // get user language
    $userLang = $_SESSION['userLang'];
    $title = 'Kameruner Heilbronn e.V -  - Test Thumbnail';
    // load UI resource 
    Utils::loadUIResources("../../UIResources/conferences.fr.res.php", "../../UIResources/conferences.en.res.php");


    // custon page script, if needed
   $script = '
        <!--language texts for page -->
        <script  type="text/javascript">

         

        </script>
        <script  src="../../Scripts/thumbnailScript4.js"  type="text/javascript"> </script> 
        <script  src="../../Scripts/lightslider.js"  type="text/javascript"> </script> 

        

        <script type="text/javascript">
             
        </script>
        <style type="text/css">
           aul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
         
		 
		 

        


        </style>

        ';
    /// page content
    $content = ' 
        <div id="sitePathDiv"></div>

        <!-- page content -->
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Members List</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Delete items</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- close x_title -->
                        <div class="x_content">

                            <button type="button" class="btn btn-primary" id="showThumbnailBtn">
                                Show Thumbnail Gallery
                            </button>
                            <button type="button" class="btn" data-toggle="modal" id="openModal">Demo</button>

                            <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Modal title</h4>
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
                                                                        <img src="img/cS-1.jpg" id="currentPhoto" />
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
                                                                    <div class="toTop"> <img src="img/cS-2.jpg" class="userPhotoImg"> </div>
                                                                </td>
                                                                <td class="toLeft fullWidth" valign="top">
                                                                    <span class="commentText">
                                                                                    <span class="userDisplayName">Test-123 </span>
                                                                    <span id="photoCommentText"> <text> <img src="ss" alt="aaa" />
                                                                                        Erfolgt die Zahlung erst nach der Zahlungsfrist, wird eine Mahngeb�hr i.H.v. EUR 12 und ein den gesetzlichen Regelungen
                                                                                        entsprechender Zinssatz erhoben.
                                                                                        Sollten Sie Fragen zur Rechnung haben, wenden Sie sich bitte per Email an verkauf@de.one.com | Unsere Allgemeinen
                                                                                        Gesch�ftsbedingungen finden Sie unter folgender Internetadresse http://www.one.com/de/geschaeftsbedingungen
                                                                                        F�r den Fall, dass Sie Ihren Webspace nicht erneuern wollen, ist es wichtig, dass Sie Ihren Webspace vor dem 19.03.16 k�ndigen.
                                                                                        Weitere Informationen entnehmen Sie bitte dieser Adresse: http://www.one.com/de/kundigung
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
                                                                    <span>Your comment:</span>
                                                                </td>
                                                                <td class="toTop">
                                                                    <div class="toTop">
                                                                        <input type="text" class="form-control" id="userCommentField" onkeypress="sle" placeholder="comment..." /> </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hideContent buffer">
                                            <table class="fullWidth userCommentInnerTableWithNoTop zeroSpacing">
                                                <tbody>
                                                    <tr>
                                                        <td class="toTop">
                                                            <div class="toTop"> <img src="img/cS-2.jpg" class="userPhotoImg"> </div>
                                                        </td>
                                                        <td class="toLeft fullWidth" valign="top">
                                                            <span class="commentText">
                                                                    <span class="userDisplayName">Test-123 </span>
                                                            <span id="photoCommentText">
                                                                        Erfolgt die Zahlung erst nach der Zahlungsfrist, wird eine Mahngeb�hr i.H.v. EUR 12 und ein den gesetzlichen Regelungen
                                                                        entsprechender Zinssatz erhoben.
                                                                        Sollten Sie Fragen zur Rechnung haben, wenden Sie sich bitte per Email an verkauf@de.one.com | Unsere Allgemeinen
                                                                        Gesch�ftsbedingungen finden Sie unter folgender Internetadresse http://www.one.com/de/geschaeftsbedingungen
                                                                        F�r den Fall, dass Sie Ihren Webspace nicht erneuern wollen, ist es wichtig, dass Sie Ihren Webspace vor dem 19.03.16 k�ndigen.
                                                                        Weitere Informationen entnehmen Sie bitte dieser Adresse: http://www.one.com/de/kundigung
                                                                    </span>
                                                            <br />
                                                            </span> <span class="commentDate toLeft">12.11.2016 15:14:12</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end .modal-content -->
                                </div>
                            </div>
                            <hr />
                            <br />
                        </div>
                        <!-- end x_content -->
                    </div>
                    <!-- close x_panel -->
                </div>
                <!-- close div m-12 -->
            </div>
            <!-- end div container -->
        </div>
        <!-- end div row -->
    ';

    $mainPage->setUseDojoScripts(true);
    $mainPage->setActiveMenu("administration");
    $mainPage->setDirectoryLevel(2);
    $mainPage->setUserLanguage($userLang);
    $mainPage->setShouldDisplayLanguageSelection(true);
    $mainPage->setPageJscript($script);
    $mainPage->setTitle($title);
    $mainPage->setContent($content);
    $mainPage->displayPage();
 
