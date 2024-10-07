
<?php

    //load required ressources
    require_once '../../Includes/Common.php';
    require_once '../../DataAccessObject/DaoCommon.php';
    require_once '../../Models/EntityCommon.php';
    require '../PageModel.php';
    // load UI resource 
    Utils::loadUIResources('../../UIResources/memberRegistration.fr.res.php', '../../UIResources/memberRegistration.en.res.php',
    '../../UIResources/memberRegistration.de.res.php');

    $userLang = $_SESSION['userLang'];
    $title = "Kameruner Heilbronn eV - Devenir Membre";

    $script = '
        <!--language texts for page -->
        <script  type="text/javascript">

        var pageLangTexts = {
          viewAllItemsBtnLabel : "' . MemberRegistrationUIResource::viewAllItemsBtnLabelText() . '",
          viewDetailsBtnLabel : "' . MemberRegistrationUIResource::viewDetailsBtnLabelText() . '",
          updateItemBtnLabel : "' . MemberRegistrationUIResource::updateItemBtnLabelText() . '",
          viewPreviousItemBtnLabel : "' . MemberRegistrationUIResource::viewPreviousItemBtnLabelText() . '",
          viewNextItemBtnLabel : "' . MemberRegistrationUIResource::viewNextItemBtnLabelText() . '",
          saveItemBtnLabel : "' . MemberRegistrationUIResource::saveItemBtnLabelText() . '",
          cancelUpdateItemBtnLabel : "' . MemberRegistrationUIResource::cancelUpdateItemBtnLabelText() . '",
          cancelAddItemBtnLabel : "' . MemberRegistrationUIResource::cancelAddItemBtnLabelText() . '",

          addNewItemBtnLabel : "' . MemberRegistrationUIResource::addNewItemBtnLabelText() . '",
          deleteItemsBtnLabel : "' . MemberRegistrationUIResource::deleteItemsBtnLabelText() . '",
          finishBtnLabel : "' . MemberRegistrationUIResource::finishBtnLabelText() . '",
          editItemBtnLabel : "' . MemberRegistrationUIResource::editItemBtnLabelText() . '",
          okBtnLabel : "' . MemberRegistrationUIResource::okBtnLabelText() . '",
           
          manySelectedItemsLabel : " ' . MemberRegistrationUIResource::manySelectedItemsLabelText() . '",
          sectionViewTitleLabel : "' . MemberRegistrationUIResource::sectionViewTitleLabelText() . '",

          confirmationCreationLabel :  "Merci de votre Enregistrement &agrave; la KHe.V. Confirmez s\'il vous plait votre Enregistrement via e-mail qui vous a &eacute;t&eacute; envoy&eacute;.",
          confirmRegistrationFromMailLabel :  "Merci de la Confirmation de votre Enregistrement &agrave; la KHe.V.",
          
          confirmationUpdateLabel : "' . MemberRegistrationUIResource::confirmationUpdateLabelText() . '",
          confirmationDeletionLabel : "' . MemberRegistrationUIResource::confirmationDeletionLabelText() . '",

          viewAllItemsLabel : "' . MemberRegistrationUIResource::viewAllItemsLabelText() . '",
          loadingMessageLabel : "' . MemberRegistrationUIResource::loadingMessageLabelText() . '",
          noDataMessageLabel : "' . MemberRegistrationUIResource::noDataMessageLabelText() . '",  
          errorMessageLabel : "' . MemberRegistrationUIResource::errorMessageLabelText() . '",
          filterItemsNameLabel : "' . MemberRegistrationUIResource::filterItemsNameLabelText() . '",
          acceptGCALabel : " Vous devez acceptet les Conditions G&eacute;n&eacute;rales d\'Adh&eacute;sion </a> &agrave; l\'Association KHe.V ",

          createNewItemTitleLabel : "' . MemberRegistrationUIResource::createNewItemTitleLabelText() . '",
          viewItemDetailsTitleLabel : "' . MemberRegistrationUIResource::viewItemDetailsTitleLabelText() . '",
          updateItemDetailsTitleLabel : "' . MemberRegistrationUIResource::updateItemDetailsTitleLabelText() . '",
          titleColLabel : "' . MemberRegistrationUIResource::viewAllItemsBtnLabelText() . '",
          noItemSelectedLabel : "' . MemberRegistrationUIResource::noItemSelectedLabelText() . '",
          editItemDetailsTitleLabel : "' . MemberRegistrationUIResource::editItemDetailsTitleLabelText() . '",
          menuItemSectionTitleLabel : "' . MemberRegistrationUIResource::menuItemViewSectionTitleLabelText() . '",
          subMenuItemSectionTitleLabel : "' . MemberRegistrationUIResource::subMenuItemViewSectionTitleLabelText() . '"
        };

        </script>
        <script defer src="../../Scripts/memberRegistrationScript.js"  type="text/javascript"> </script> 
        ';

   

    $formContent = ' 
                <!-- success and error overlay content -->
                <div id="successOverlayDiv"></div>
                <div id="errorContentDiv"></div>
                <div   id="memberRegistrationFormContentDiv" class="hideContent">
                     <form id="memberRegistrationForm" class="form-horizontal needs-validation" data-dojo-id="memberRegistrationForm" encType="multipart/form-data">
                        <table class="fullWidth ">
                            <tr>
                                <td class="toLeft col-sm-4">
                                    <label class="control-label col-sm-4" for="gender">'.MemberRegistrationUIResource::genderColLabelText() . '</label>
                                </td>
                                <td class="toLeft col-sm-8">
                                     <select   id="gender" name="gender" class="selectpicker">  
                                        <option value="Male">Mr.</option><option value="Female">Mme</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="toLeft col-sm-4">
                                    <label class="control-label col-sm-4" for="lastName">' . MemberRegistrationUIResource::lastNameColLabelText() . '*</label>
                                </td>
                                <td class="toLeft col-sm-8">
                                     <input type="text"  id="lastName" name="lastName" class="form-control" required/> 
                                </td>
                            </tr>
                            <tr>
                                <td class="toLeft col-sm-4">
                                    <label class="control-label col-sm-4" for="name">' . MemberRegistrationUIResource::nameColLabelText() . '*</label>
                                </td>
                                <td class="toLeft col-sm-8">
                                     <input type="text"  id="name" name="name" class="form-control" required/>  
                                </td>
                            </tr>
                            <tr>
                                <td class="toLeft col-sm-4">
                                    <label class="control-label col-sm-4" for="email">' . MemberRegistrationUIResource::emailColLabelText() . '*</label>
                                </td>
                                <td class="toLeft col-sm-8">
                                     <input type="text"  id="email" name="email" class="form-control" required/>  
                                </td>
                            </tr>
                            <tr>
                                <td class="toLeft col-sm-4">
                                    <label class="control-label col-sm-4" for="phoneNumber">' . MemberRegistrationUIResource::phoneNumberColLabelText() . '</label>
                                </td>
                                <td class="toLeft col-sm-8">
                                     <input type="text"  id="phoneNumber" name="phoneNumber" class=" form-control " />  
                                </td>
                            </tr>
                            <tr>
                                <td class="toLeft col-sm-4">
                                    <label class="control-label col-sm-4" for="address">' . MemberRegistrationUIResource::addressColLabelText() . '</label>
                                </td>
                                <td class="toLeft col-sm-8">
                                     <input type="text"  id="address" name="address" class="form-control" />  
                                </td>
                            </tr>
                            <tr>
                                <td class="toLeft col-sm-4">
                                    <label class="control-label col-sm-4" for="zipCode">' . MemberRegistrationUIResource::zipCodeColLabelText() . '</label>
                                </td>
                                <td class="toLeft col-sm-8">
                                     <input type="text"  id="zipCode" name="zipCode" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td class="toLeft col-sm-4">
                                    <label class="control-label col-sm-4" for="city">' . MemberRegistrationUIResource::cityColLabelText() . '</label>
                                </td>
                                <td class="toLeft col-sm-8">
                                     <input type="text"  id="city" name="city" class="form-control" />  
                                </td>
                            </tr>
                            <tr class="hideContent">
                                <td class="toLeft col-sm-4 ">
                                    <label class="control-label col-sm-4" for="position">' . MemberRegistrationUIResource::positionColLabelText() . '</label>
                                </td>
                                <td class="toLeft col-sm-8">
                                     <input type="text"  id="position" name="position" class="form-control" />  
                                </td>
                            </tr>
                            <tr id="agbDiv">
                                <td class="toLeft col-sm-4 smallMsg">
                                    <label class="control-label  " for="agbCheckbox" id="agbLabel">
                                        J\'accepte les <a href="../Association/ViewStatus.php" class="link-primary"> Conditions G&eacute;n&eacute;rales d\'Adh&eacute;sion </a> &agrave; l\'Association K.H. e.V
                                    </label>
                                </td>
                                <td class="col-sm-8 form-check toLeft">
                                     <input class="form-check-input" type="checkbox"   id="agbCheckbox" name="agbCheckbox" />  
                                </td>
                            </tr>
                            <tr class="">
                                <td class="toLeft col-sm-4 " colspan="2">
                                     <div > &nbsp; </div>
                                </td>
                            </tr>
                        </table>
                     </form>
                    
                <div class="toRight">
                    <table class="fullWidth topBorder">
                        <tr>
                            <td>
                                <table align="right">
                                    <tr>
                                        <td class="toRight">
                                            <button type="button" class="btn btn-primary" id="registerMemberBtn" name="registerMemberBtn">
                                                Inscription
                                            </button>
                                        </td>
                                        <td class="toRight">
                                            <button type="button" class="btn btn-default" id="resetFieldsBtn" name="resetFieldsBtn">Annuler</button>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
             ';
/// page content
$content = ' 
        <div id="sitePathDiv"></div>
          <!-- page content -->
          <div class="row">
            <div class="container _hideContent">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Enregistrement Membre KHe.V - 2024/2025</h2>
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
                                    <table class="fullWidth __normalBorder">
                                        <tr>
                                            <td class="toCenter">
                                               '. $formContent.'  
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

        <div id="confirmDivContent" class="hideContent">
            <div class="toLeft"> 
                <div class="panel panel-primary">
                  <div class="panel-heading">Confirmation Enregirstrement KHeV - 2024/2025</div>
                  <div class="panel-body">
      		            <span id="confirmTextSpan">Confirm message</span>
      		            <div class="row ">
                          <div  class=" toRight">
                              <button type="button" class="btn btn-primary" onClick="javascript:goToHome();" id="confirmPanelOkBtn" name="confirmPanelOkBtn">
                                  OK
                              </button> 
                          </div>
      	              </div>
                     
                  </div>
                </div>
            </div>
        </div>  
        <div id="acceptGCALabelDiv" class="hideContent">Vous devez accepter les Conditions G&eacute;n&eacute;rales d\'Adh&eacute;sion </a> &agrave; l\'Association K.H. e.V  </div>
    ';

    $mainPage = new PageModel();
    $mainPage->setUseDojoScripts(true);
    $mainPage->setActiveMenu("members");
    $mainPage->setDirectoryLevel(2);
    $mainPage->setUserLanguage($userLang);
    $mainPage->setPageJscript($script);
    $mainPage->setTitle($title);
    $mainPage->setContent($content);
    $mainPage->displayPage();
