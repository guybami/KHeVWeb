
<?php
        
    require_once "../../Includes/Common.php";
    require_once "../../DataAccessObject/DaoCommon.php";
    require_once "../../Models/EntityCommon.php";
    require "../PageModel.php";
    
    $mainPage = new PageModel();
    // get user language
    $userLang = $_SESSION['userLang'];
    $title = 'Blue Money - Test Thumbnail';
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
          cancelAddItemBtnLabel : "'.ConferenceUIResource::cancelAddItemBtnLabelText().'",

          addNewItemBtnLabel : "'.ConferenceUIResource::addNewItemBtnLabelText().'",
          deleteItemsBtnLabel : "'.ConferenceUIResource::deleteItemsBtnLabelText().'",
          finishBtnLabel : "'.ConferenceUIResource::finishBtnLabelText().'",
          editItemBtnLabel : "'.ConferenceUIResource::editItemBtnLabelText().'",
          okBtnLabel : "'.ConferenceUIResource::okBtnLabelText().'",
          confirmDeletionLabel : "'.ConferenceUIResource::confirmDeletionLabelText().'",
          confirmationCreationLabel :  "'.ConferenceUIResource::confirmationCreationLabelText().'",
          confirmationUpdateLabel : "'.ConferenceUIResource::confirmationUpdateLabelText().'",
          confirmationDeletionLabel : "'.ConferenceUIResource::confirmationDeletionLabelText().'",

          oneSelectedItemLabel : "'.ConferenceUIResource::oneSelectedItemLabelText().'",
          manySelectedItemsLabel : " '.ConferenceUIResource::manySelectedItemsLabelText().'",
          sectionViewTitleLabel : "'.ConferenceUIResource::sectionViewTitleLabelText().'",

          emptyDataLabel : "'.ConferenceUIResource::emptyDataLabelText().'",
          viewAllItemsLabel : "'.ConferenceUIResource::viewAllItemsLabelText().'",
          loadingMessageLabel : "'.ConferenceUIResource::loadingMessageLabelText().'",
          noDataMessageLabel : "'.ConferenceUIResource::noDataMessageLabelText().'",  
          errorMessageLabel : "'.ConferenceUIResource::errorMessageLabelText().'",
          filterItemsNameLabel : "'.ConferenceUIResource::filterItemsNameLabelText().'",
          backBtnLabel : "'.ConferenceUIResource::backBtnLabelText().'",

          createNewItemTitleLabel : "'.ConferenceUIResource::createNewItemTitleLabelText().'",
          viewItemDetailsTitleLabel : "'.ConferenceUIResource::viewItemDetailsTitleLabelText().'",
          updateItemDetailsTitleLabel : "'.ConferenceUIResource::updateItemDetailsTitleLabelText().'",

          titleColLabel : "'.ConferenceUIResource::viewAllItemsBtnLabelText().'",
          descriptionColLabel : "'.ConferenceUIResource::descriptionColLabelText().'",
          
          noItemSelectedLabel : "'.ConferenceUIResource::noItemSelectedLabelText().'",

          editItemDetailsTitleLabel : "'.ConferenceUIResource::editItemDetailsTitleLabelText().'",
          menuItemSectionTitleLabel : "'.ConferenceUIResource::menuItemSectionTitleLabelText().'",
          subMenuItemSectionTitleLabel : "'.ConferenceUIResource::subMenuItemSectionTitleLabelText().'"
		  };

        </script>
        <script   src="../../Scripts/jqBootstrapValidation.js"  type="text/javascript"> </script> 
        <script   src="../../Scripts/validateFormScript.js"  type="text/javascript"> </script> 

        <script type="text/javascript">
             
        </script>
        <style type="text/css">
            /* Simple message styles customization */
            errors {
                border-left: 5px solid #a94442;
                padding-left: 15px;
            }
            errors li {
                list-style-type: none;
            }
            #errors li:before {
                content: "\b7\a0";
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
                                            <li><a href="#">Add item</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div> <!-- close x_title -->
                            <div class="x_content">
                                
                            <form id="sendMessageForm" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Full name</label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="fullName" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Email</label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="email" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Title</label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="title" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Content</label>
                                    <div class="col-xs-6">
                                        <textarea class="form-control" name="content" rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Show the messages in errors -->
                                <div class="form-group">
                                    <div class="col-xs-9 col-xs-offset-3">
                                        <ul id="errors"></ul>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-9 col-xs-offset-3">
                                        <button type="submit" class="btn btn-default">Validate</button>
                                    </div>
                                </div>
                            </form>
                                 
                                 

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
 
