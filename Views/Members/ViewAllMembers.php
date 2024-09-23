 
<?php
        
    require_once "../../Includes/Common.php";
    require_once "../../DataAccessObject/DaoCommon.php";
    require_once "../../Models/EntityCommon.php";
    require "../PageModel.php";
    
    $mainPage = new PageModel();
    // get user language
    $userLang = $_SESSION['userLang'];
    $title = "Kameruner Heilbronn eV - Liste Des Members";
    // load UI resource 
    Utils::loadUIResources("../../UIResources/members.fr.res.php", "../../UIResources/members.en.res.php");


    // custon page script
   $script = '
        <!--language texts for page -->
        <script  type="text/javascript">

        var pageLangTexts = {
          viewAllItemsBtnLabel : "'.MemberUIResource::viewAllItemsBtnLabelText().'",
          viewDetailsBtnLabel : "'.MemberUIResource::viewDetailsBtnLabelText().'",
          updateItemBtnLabel : "'.MemberUIResource::updateItemBtnLabelText().'",
          viewPreviousItemBtnLabel : "'.MemberUIResource::viewPreviousItemBtnLabelText().'",
          viewNextItemBtnLabel : "'.MemberUIResource::viewNextItemBtnLabelText().'",
          saveItemBtnLabel : "'.MemberUIResource::saveItemBtnLabelText().'",
          cancelUpdateItemBtnLabel : "'.MemberUIResource::cancelUpdateItemBtnLabelText().'",
          cancelAddItemBtnLabel : "'.MemberUIResource::cancelAddItemBtnLabelText().'",

          addNewItemBtnLabel : "'.MemberUIResource::addNewItemBtnLabelText().'",
          deleteItemsBtnLabel : "'.MemberUIResource::deleteItemsBtnLabelText().'",
          finishBtnLabel : "'.MemberUIResource::finishBtnLabelText().'",
          editItemBtnLabel : "'.MemberUIResource::editItemBtnLabelText().'",
          okBtnLabel : "'.MemberUIResource::okBtnLabelText().'",
          confirmDeletionLabel : "'.MemberUIResource::confirmDeletionLabelText().'",
          confirmationCreationLabel :  "'.MemberUIResource::confirmationCreationLabelText().'",
          confirmationUpdateLabel : "'.MemberUIResource::confirmationUpdateLabelText().'",
          confirmationDeletionLabel : "'.MemberUIResource::confirmationDeletionLabelText().'",

          oneSelectedItemLabel : "'.MemberUIResource::oneSelectedItemLabelText().'",
          manySelectedItemsLabel : " '.MemberUIResource::manySelectedItemsLabelText().'",
          sectionViewTitleLabel : "'.MemberUIResource::sectionViewTitleLabelText().'",

          emptyDataLabel : "'.MemberUIResource::emptyDataLabelText().'",
          viewAllItemsLabel : "'.MemberUIResource::viewAllItemsLabelText().'",
          loadingMessageLabel : "'.MemberUIResource::loadingMessageLabelText().'",
          noDataMessageLabel : "'.MemberUIResource::noDataMessageLabelText().'",  
          errorMessageLabel : "'.MemberUIResource::errorMessageLabelText().'",
          filterItemsNameLabel : "'.MemberUIResource::filterItemsNameLabelText().'",
          backBtnLabel : "'.MemberUIResource::backBtnLabelText().'",

          createNewItemTitleLabel : "'.MemberUIResource::createNewItemTitleLabelText().'",
          viewItemDetailsTitleLabel : "'.MemberUIResource::viewItemDetailsTitleLabelText().'",
          updateItemDetailsTitleLabel : "'.MemberUIResource::updateItemDetailsTitleLabelText().'",

          titleColLabel : "'.MemberUIResource::viewAllItemsBtnLabelText().'",
          
          noItemSelectedLabel : "'.MemberUIResource::noItemSelectedLabelText().'",

          editItemDetailsTitleLabel : "'.MemberUIResource::editItemDetailsTitleLabelText().'",
          menuItemSectionTitleLabel : "'.MemberUIResource::menuItemViewSectionTitleLabelText().'",
          subMenuItemSectionTitleLabel : "'.MemberUIResource::subMenuItemViewSectionTitleLabelText().'"
        };

        </script>
        <script defer src="../../Scripts/membersListScript.js"  type="text/javascript"> </script> 

        ';
    // page content
    $content = ' 
        <div id="sitePathDiv"></div>
         
          <!-- page content -->
          <div class="row">
            <div class="container hideContent">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>'.MemberUIResource::subMenuItemSectionTitleLabelText().'</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:;">Imprimer</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div> <!-- close x_title -->
                            <div class="x_content">
                                
                                <div class="container">
                                    <table class="fullWidth cellspacing0 cellpadding0 normalBorder">
                                        <tr>
                                            <td class="toLeft halfWidth rightBorder">
                                                <div class="membersList ">
                                                    <table class="fullWidth cellspacing0 cellpadding0">
                                                        <tr>
                                                            <td class="bottomBorder">
                                                                <div class="input-group toLeft pull-left searchBarMargin">
                                                                    <div class="btn-group" role="group" aria-label="filter members">
                                                                      <button type="button" class="btn btn-primary" id="filterAllBtn">Tous</button>
                                                                      <button type="button" class="btn btn-default" id="filterRegisteredMembersBtn">Enregistres</button>
                                                                      <button type="button" class="btn btn-default" id="filterUnregisteredMembersBtn">Non enregistres</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 pull-right searchBarMargin _top_search">
                                                                    <div class="input-group">
                                                                         <input type="text" class="form-control" id="searchMemberField"
                                                                            onkeyup="filterMembers();" placeholder="Recherche..."/>
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-search"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
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
                                                                            <img id="memberProfilePhoto" src="../../Resources/Images/img.jpg" alt="">
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
                                                                 <span>Nom</span>
                                                            </td>
                                                            <td class="toLeft ">
                                                                 <span id="nameLabel">-</span> 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="toLeft fieldDetailsTitle halfWidth">
                                                                 <span>Pr&eacute;nom</span>
                                                            </td>
                                                            <td class="toLeft ">
                                                                 <span id="lastNameLabel">-</span>    
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="toLeft fieldDetailsTitle halfWidth">
                                                                 <span>Email</span>
                                                            </td>
                                                            <td class="toLeft ">
                                                                 <span id="emailLabel">-</span>    
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="toLeft fieldDetailsTitle halfWidth">
                                                                 <span>T&eacute;lephone</span>
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
    $mainPage->setActiveMenu("members");
    $mainPage->setDirectoryLevel(2);
    $mainPage->setUserLanguage($userLang);
    $mainPage->setShouldDisplayLanguageSelection(false);
    $mainPage->setPageJscript($script);
    $mainPage->setTitle($title);
    $mainPage->setContent($content);
    $mainPage->displayPage();
 
