 
<?php
        
    require_once "../../Includes/Common.php";
    require_once "../../DataAccessObject/DaoCommon.php";
    require_once "../../Models/EntityCommon.php";
    require "../PageModel.php";
    
    $mainPage = new PageModel();
    // get user language
    $userLang = $_SESSION['userLang'];
    $title = "Kameruner Heilbronn eV - Office Members";
    // load UI resource 
    Utils::loadUIResources("../../UIResources/officeMembers.fr.res.php", "../../UIResources/officeMembers.en.res.php");


    // custon page script, if needed
   $script = '
        <!--language texts for page -->
        <script  type="text/javascript">

            var pageLangTexts = {
		      viewAllItemsBtnLabel : "'.OfficeMemberUIResource::viewAllItemsBtnLabelText().'",
              viewDetailsBtnLabel : "'.OfficeMemberUIResource::viewDetailsBtnLabelText().'",
              menuItemSectionTitleLabel : "'.OfficeMemberUIResource::menuItemSectionTitleLabelText().'",
              subMenuItemSectionTitleLabel : "'.OfficeMemberUIResource::subMenuItemSectionTitleLabelText().'"
		    };

        </script>
        <script   src="../../Scripts/officeMembersListScript.js"  type="text/javascript"> </script> 

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
                                <h2>Membres Du Bureau</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Print</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div> <!-- close x_title -->
                            <div class="x_content">
                                
                                <div class="container hideContent">
                                    <table class="fullWidth cellspacing0 cellpadding0 normalBorder">
                                        <tr>
                                            <td class="toLeft halfWidth rightBorder toTop">
                                                <div class="membersList ">
                                                    <table class="fullWidth cellspacing0 cellpadding0">
                                                        <tr>
                                                            <td class="toLeft">
                                                                <div class="table-responsive">
                                                                  <table class="table table-striped jambo_table cellspacing0 cellpadding0" id="membersListTable" >
                                                                    <tbody>
                                                                    </tbody>
                                                                  </table>
                                                                </div>    
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                            <td class="toLeft  halfWidth toTop memberDetailsCol">
                                                <table class="fullWidth zeroSpacing zeroPadding whiteBackground">
                                                    <tr>
                                                        <td class=" bottomBorder">
                                                            <table class="fullWidth cellspacing0 cellpadding0">
                                                                <tr>
                                                                    <td class="toLeft">
                                                                        <a class="memberDetailsPhoto" href="javascript:;"  aria-expanded="false">
			                                                                <img id="memberProfilePhoto" src="" alt="">
		                                                                </a>
                                                                    </td>
                                                                    <td class="toLeft fullWidth ">
                                                                        <span id="fullNameLabel" class="fieldDetailsTitle marginContent">-</span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <br/>
                                                <div class="memberDetailsBox hideContent">
                                                    <table class="fullWidth cellspacing5 cellpadding5 whiteBackground">
                                                        <tr>
                                                            <td class="toLeft fieldDetailsTitle halfWidth">
                                                                 <span>Poste</span>
                                                            </td>
                                                            <td class="toLeft">
                                                                 <span id="positionLabel">-</span>  
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="toLeft fieldDetailsTitle halfWidth">
                                                                 <span>Nom</span>
                                                            </td>
                                                            <td class="toLeft ">
                                                                 <span id="nameLabel">-</span> 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="toLeft fieldDetailsTitle">
                                                                 <span>Pr&eacute;nom</span>
                                                            </td>
                                                            <td class="toLeft ">
                                                                 <span id="lastNameLabel">-</span>    
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="toLeft fieldDetailsTitle">
                                                                 <span>Email</span>
                                                            </td>
                                                            <td class="toLeft ">
                                                                 <span id="emailLabel">-</span>    
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="toLeft fieldDetailsTitle halfWidth">
                                                                 <span>Numero T&eacute;l&eacute;phone</span>
                                                            </td>
                                                            <td class="toLeft">
                                                                 <span id="phoneNumberLabel">-</span>  
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                 
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
    $mainPage->setShouldDisplayLanguageSelection(false);
    $mainPage->setPageJscript($script);
    $mainPage->setTitle($title);
    $mainPage->setContent($content);
    $mainPage->displayPage();
 
