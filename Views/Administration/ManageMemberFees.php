
<?php
        
    require_once "../../Includes/Common.php";
    require_once "../../DataAccessObject/DaoCommon.php";
    require_once "../../Models/EntityCommon.php";
    require "../PageModel.php";
    
    $mainPage = new PageModel();
    // get user language
    $userLang = $_SESSION['userLang'];
    $title = 'Kameruner Heilbronn e.V - MemberFees';
    // load UI resource 
    Utils::loadUIResources("../../UIResources/memberFees.fr.res.php", "../../UIResources/memberFees.en.res.php");


    // custon page script, if needed
   $script = '
        <!--language texts for page -->
        <script  type="text/javascript">

        var pageLangTexts = {
		  viewAllItemsBtnLabel : "'.MemberFeeUIResource::viewAllItemsBtnLabelText().'",
          viewDetailsBtnLabel : "'.MemberFeeUIResource::viewDetailsBtnLabelText().'",
          updateItemBtnLabel : "'.MemberFeeUIResource::updateItemBtnLabelText().'",
          viewPreviousItemBtnLabel : "'.MemberFeeUIResource::viewPreviousItemBtnLabelText().'",
          viewNextItemBtnLabel : "'.MemberFeeUIResource::viewNextItemBtnLabelText().'",
          saveItemBtnLabel : "'.MemberFeeUIResource::saveItemBtnLabelText().'",
          cancelUpdateItemBtnLabel : "'.MemberFeeUIResource::cancelUpdateItemBtnLabelText().'",
          cancelAddItemBtnLabel : "'.MemberFeeUIResource::cancelAddItemBtnLabelText().'",

          addNewItemBtnLabel : "'.MemberFeeUIResource::addNewItemBtnLabelText().'",
          addNewItemDialogBtnLabel : "'.MemberFeeUIResource::addNewItemBtnLabelText().'",
          deleteItemsBtnLabel : "'.MemberFeeUIResource::deleteItemsBtnLabelText().'",
          finishBtnLabel : "'.MemberFeeUIResource::finishBtnLabelText().'",
          editItemBtnLabel : "'.MemberFeeUIResource::editItemBtnLabelText().'",
          okBtnLabel : "'.MemberFeeUIResource::okBtnLabelText().'",
          confirmDeletionLabel : "'.MemberFeeUIResource::confirmDeletionLabelText().'",
          confirmationCreationLabel :  "'.MemberFeeUIResource::confirmationCreationLabelText().'",
          confirmationUpdateLabel : "'.MemberFeeUIResource::confirmationUpdateLabelText().'",
          confirmationDeletionLabel : "'.MemberFeeUIResource::confirmationDeletionLabelText().'",

          oneSelectedItemLabel : "'.MemberFeeUIResource::oneSelectedItemLabelText().'",
          manySelectedItemsLabel : " '.MemberFeeUIResource::manySelectedItemsLabelText().'",
          sectionViewTitleLabel : "'.MemberFeeUIResource::sectionViewTitleLabelText().'",

          emptyDataLabel : "'.MemberFeeUIResource::emptyDataLabelText().'",
          viewAllItemsLabel : "'.MemberFeeUIResource::viewAllItemsLabelText().'",
          loadingMessageLabel : "'.MemberFeeUIResource::loadingMessageLabelText().'",
          noDataMessageLabel : "'.MemberFeeUIResource::noDataMessageLabelText().'",  
          errorMessageLabel : "'.MemberFeeUIResource::errorMessageLabelText().'",
          filterItemsNameLabel : "'.MemberFeeUIResource::filterItemsNameLabelText().'",
          backBtnLabel : "'.MemberFeeUIResource::backBtnLabelText().'",

          createNewItemTitleLabel : "'.MemberFeeUIResource::createNewItemTitleLabelText().'",
          viewItemDetailsTitleLabel : "'.MemberFeeUIResource::viewItemDetailsTitleLabelText().'",
          updateItemDetailsTitleLabel : "'.MemberFeeUIResource::updateItemDetailsTitleLabelText().'",
          noItemSelectedLabel : "'.html_entity_decode(MemberFeeUIResource::noItemSelectedLabelText()).'",

          editItemDetailsTitleLabel : "'.MemberFeeUIResource::editItemDetailsTitleLabelText().'",
          menuItemSectionTitleLabel : "'.MemberFeeUIResource::menuItemSectionTitleLabelText().'",
          subMenuItemSectionTitleLabel : "'.MemberFeeUIResource::subMenuItemSectionTitleLabelText().'"


		  };

        </script>
        <script defer src="../../Scripts/memberFeesScript.js'.Utils::jsVersion().'"  type="text/javascript"> </script> 

         
        ';
    /// page content
    $content = ' 
        <div id="sitePathDiv"></div>
         
          <!-- page content -->
          <div class="row hideContent_">
            <div class="container">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>'.MemberFeeUIResource::sectionViewTitleLabelText().'</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="" id="printDataListMenuItem"  >'.MemberFeeUIResource::printDropMenuLabelText().'</a></li>
                                            <li><a href="#" id="exportDataListToCsvMenuItem">'.MemberFeeUIResource::exportCsvDropMenuLabelText().'</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div> <!-- close x_title -->
                            <div class="x_content">
                                <div id="sectionTitleAndToolbarBtnDiv" class="hideContent">
                                    <!-- main toolbar -->
                                    <table class="fullWidth hideContent zeroSpacing zeroPadding"   id="toolbarButtonsTable">
                                        <tr>
                                            <td class="toLeft zeroPadding" align="left">
                                                <div>
                                                    <table class="fullWidth cellspacing2 cellpadding2">
                                                        <tr>
                                                            <td class="toLeft">
                                                                <div id="toolbarButtonsDiv" class="hideContent">
                                                                    <span id="spanAddNewItemBtn" class="hideContent">
                                                                        <button type="button" class="btn btn-default" id="addNewItemBtn"  > 
                                                                            <span class="glyphicon glyphicon-plus"></span> 
                                                                             '.MemberFeeUIResource::addNewItemBtnLabelText().'
                                                                         </button>
                                                                    </span>
                                                                    <span id="spanDeleteItemsBtn" class="hideContent">
                                                                        <button type="button" class="btn btn-default" id="deleteItemsBtn">
                                                                            <span class="glyphicon glyphicon-trash"></span> 
                                                                                  '.MemberFeeUIResource::deleteItemsBtnLabelText().'
                                                                         </button>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
								<!-- end main toolbar -->
                                <!-- success and error overlay content -->
                                <div id="successOverlayDiv"></div>
                                <div id="errorContentDiv"></div>
                                <!-- data items view div -->
                                <div id="gridDataViewDiv">
                                    <span id="resultsDiv" class="selectedItemsDiv toLeft"></span>
                                    <table class="hideBorder fullWidth cellspacing0">
                                        <tr>
                                            <td class="cellpadding0">
                                                <table class="fullWidth hideBorder cellspacing0">
                                                    <tr>
                                                        <td class="fullWidth cellpadding0">
                                                            <!-- datagrid items view -->
                                                            <div id="memberFeesGridDiv"></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- end data items view div -->

								<!-- Add item modal dialog form -->
                                <div id="memberFeeDetailsDialog" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">'.MemberFeeUIResource::addNewItemBtnLabelText().'</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div id="addNewItemDialogContent"></div>
                                            </div> <!-- end modal body -->
                                            <div class="modal-footer">
                                                <table class="fullWidth">
                                                    <tr>
                                                        <td>
                                                            <table align="right">
                                                                <tr>
                                                                    <td class="toRight">
                                                                        <button type="button" class="btn btn-primary" id="addNewItemBtnDialog" >
                                                                         '.MemberFeeUIResource::addNewItemDialogBtnLabelText().'</button>
                                                                    </td>
                                                                    <td class="toRight">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">'.MemberFeeUIResource::cancelAddItemBtnLabelText().'</button>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<!-- end Add modal dialog form --> 

                                <!-- View/Edit item modal dialog form -->
                                <div id="viewItemDetailsDialog" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">'.MemberFeeUIResource::editItemDetailsTitleLabelText().'</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="viewItemDetailsDialogContent"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <table class="fullWidth">
                                                        <tr>
                                                            <td>
                                                                <table align="right">
                                                                    <tr>
                                                                        <td class="toRight">
                                                                            <span id="spanEditItemBtnDialogDialog" class="hideContent">
                                                                                <button  class="btn btn-primary"
                                                                                     title="'.MemberFeeUIResource::editItemDetailsTitleLabelText().'"
                                                                                    type="button" id="editItemBtnDialog">
                                                                                    <span>'.MemberFeeUIResource::editItemBtnLabelText().'</span>
                                                                                </button>
                                                                            </span>
                                                                        </td>
                                                                        <td class="toRight">
                                                                             <span id="spanCloseEditBtnDialog" class="hideContent">
                                                                                <button   type="button" class="btn btn-default"
                                                                                    id="closeEditBtnDialog" title="'.MemberFeeUIResource::closeDialogBtnLabelText().'">
                                                                                    <span>'.MemberFeeUIResource::closeDialogBtnLabelText().'</span>
                                                                                </button>
                                                                            </span>
                                                                        </td>
                                                                        <td class="toRight">
                                                                              <span id="spanSaveChangesBtnDialog" class="hideContent">
                                                                                <button   id="saveChangesBtnDialog"
                                                                                    class="btn btn-primary"
                                                                                    type="button" title="'.MemberFeeUIResource::saveItemBtnLabelText().'">
                                                                                    <span>'.MemberFeeUIResource::saveItemBtnLabelText().'</span>
                                                                                </button>
                                                                            </span>
                                                                        </td>
                                                                        <td class="toRight">
                                                                             <span id="spanCancelChangesBtnDialog" class="hideContent">
                                                                                <button  id="cancelChangesBtnDialog" class="btn btn-default"
                                                                                    type="button" title="'.MemberFeeUIResource::cancelUpdateItemBtnLabelText().'">
                                                                                    <span>'.MemberFeeUIResource::cancelUpdateItemBtnLabelText().'</span>
                                                                                </button>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                    </div>
                                </div>
								<!-- end View modal dialog form -->   

                                <!-- Confirm deletion dialog form -->
                                <div id="confirmDeletionDialog" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- confirm delete Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">'.MemberFeeUIResource::confirmDeletionDialogTitleLabelText().'</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <table class="fullWidth cellspacing5 cellpadding5">
                                                        <tr>
                                                            <td class="toCenter">
                                                                <label class="">'.MemberFeeUIResource::confirmDeletionLabelText().'</label>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <table class="fullWidth">
                                                    <tr>
                                                        <td>
                                                            <table align="right">
                                                                <tr> 
                                                                    <td class="toRight">
                                                                        <button type="button" class="btn btn-primary" id="confirmItemsDeletionBtnDialog">'.MemberFeeUIResource::okBtnLabelText().'</button>
                                                                    </td>
                                                                    <td class="toRight">
                                                                        <button type="button" class="btn btn-default confirmDeletion" data-dismiss="modal">'.MemberFeeUIResource::cancelDeleteItemBtnLabelText().'</button>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<!-- end Confirm deletion modal dialog form -->    
         
                                <!-- view Item details div content-->
                                <div class="hideContent" id="viewItemDetailsFormContentDiv">
                                    <div class="container">
                                        <div class="form-horizontal" id="viewForm">
                                            <div class="form-group ">
                                                <label for="memberIdLabel" class="control-label col-md-4">' . MemberFeeUIResource::memberIdColLabelText() . '</label>
                                                <div class="col-md-8">
                                                    <label class="form-control-static dataViewLabel" id="memberIdLabel"></label>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="amountLabel" class="control-label col-md-4">' . MemberFeeUIResource::amountColLabelText() . '</label>
                                                <div class="col-md-8">
                                                    <label class="form-control-static dataViewLabel" id="amountLabel"></label>
                                                </div>
                                            </div>
            
                                            <div class="form-group ">
                                                <label for="billFileNameLabel" class="control-label col-md-4">' . MemberFeeUIResource::billFileNameColLabelText() . '</label>
                                                <div class="col-md-8">
                                                    <label class="form-control-static dataViewLabel" id="billFileNameLabel"></label>
                                                </div>
                                            </div>
            
                                            <div class="form-group ">
                                                <label for="transactionDateLabel" class="control-label col-md-4">' . MemberFeeUIResource::transactionDateColLabelText() . '</label>
                                                <div class="col-md-8">
                                                    <label class="form-control-static dataViewLabel" id="transactionDateLabel"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <!-- end view Item details div content-->

                                <!-- Add/Edit Item details div content-->
                                <div id="editItemDetailsFormContentDiv" class="hideContent">
                                    <div class="container">
                                        <form id="memberFeeDetailsForm" class="form-horizontal" data-dojo-id="memberFeeDetailsForm" encType="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-4" for="transactionDate">' . MemberFeeUIResource::transactionDateColLabelText() . '</label>
                                                <div class="col-md-8">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="transactionDate" name="transactionDate" aria-required="true"  data-placement="top" aria-invalid="false" required  />
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4" for="memberId">' . MemberFeeUIResource::memberIdColLabelText() . '</label>
                                                <div class="col-md-8">
                                                    <select  id="memberId" name="memberId" class="form-control">
                                                        <option value="1">Bami Guy</option>
                                                    </select>
                                                </div>
                                            </div>
                
                                            <div class="form-group">
                                                <label class="control-label col-md-4" for="amount">' . MemberFeeUIResource::amountColLabelText() . '</label>
                                                <div class="col-md-8">
                                                    <input type="number"  id="amount" name="amount" class="form-control" />  
                                                </div>
                                            </div>
                
                                            

                                            <div class="form-group">
                                                <label class="control-label col-md-4" for="billFileName">' . MemberFeeUIResource::billFileNameColLabelText() . '</label>
                                                <div class="col-md-8" nowrap="nowrap">
                                                    <div class="input-group">
                                                        <input type="text" id="billFileName" name="billFileName" readonly  class="form-control" />
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-secondary" type="button" onClick="showSelectFileDialog(\'billFileNameToUpload\');">Selectionez...</button>
                                                        </span>
                                                        <div class="hideContent">
                                                            <input type="file"  id="billFileNameToUpload" name="billFileNameToUpload"   accept=".gif, .jpeg, .jpg, .pdf, .doc, .png"/>
                                                            <input type="hidden"  name="userAction" id="userAction" value="uploadIncomeBill"/>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                
                                            
                                             
                                        </form>
                                    </div>
                                </div>
                                
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
    $mainPage->setDirectoryLevel(2);
    $mainPage->setUserLanguage($userLang);
    $mainPage->setShouldDisplayLanguageSelection(false);
    $mainPage->setPageJscript($script);
    $mainPage->setTitle($title);
    $mainPage->setContent($content);
    $mainPage->displayPage();
 
