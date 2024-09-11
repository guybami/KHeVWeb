
                <?php
               

                /**This form content was auto generated with GWatcho module generator 
                * Insert an  MemberFee   entity form
                * @author  
                *    Guy Bami 
                */
        
                    //load required ressources
                    require_once '../../Includes/Common.php';
                    require_once '../../DataAccessObject/DaoCommon.php';
                    require_once '../../Models/EntityCommon.php';
                    require '../PageModel.php';
                    // load UI resource 
                    Utils::loadUIResources('../../UIResources/memberfees.fr.res.php', 
                                            '../../UIResources/memberfees.en.res.php',
                                            '../../UIResources/memberfees.de.res.php');

                    $title = 'Module Generator - Test ContentPage';
                    $script = '
                <script type="text/javascript">
                    $(document).ready(function () { $("#viewItemDetailsFormContentDiv").removeClass("hideContent"); 
                        $("#editItemDetailsFormContentDiv").removeClass("hideContent");});
                </script>
                ';
                
 $content = ' <div   id="editItemDetailsFormContentDiv" class="_hideContent">
                    <div class="container">
                        <form id="memberFeeDetailsForm" class="form-horizontal" data-dojo-id="memberFeeDetailsForm" encType="multipart/form-data">
                    
                <div class="form-group">
                    <label class="control-label col-md-4" for="memberId">'.MemberFeeUIResource::memberIdColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="memberId" name="memberId" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="amount">'.MemberFeeUIResource::amountColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="number"  id="amount" name="amount" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="billFileName">'.MemberFeeUIResource::billFileNameColLabelText().'</label>
                    <div class="col-md-8">
                        <input type="text"  id="billFileName" name="billFileName" class="form-control" />  
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4" for="transactionDate">'.MemberFeeUIResource::transactionDateColLabelText().'</label>
                    <div class="col-md-8">
                        <div class="input-group date">
                            <input type="text" class="form-control" id="transactionDate" name="transactionDate" aria-required="true"  data-placement="top" aria-invalid="false" required  />
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
                 