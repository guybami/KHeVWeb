<?php

    require_once "../../Includes/Common.php";
    require_once "../../DataAccessObject/DaoCommon.php";
    require_once "../../Models/EntityCommon.php";
    require "../PageModel.php";
    
    $mainPage = new PageModel();
    // get user language
    $userLang = $_SESSION['userLang'];
    $title = "Kameruner Heilbronn eV - Rapport Financier - D&eacute;penses";
    // load UI resource 
    Utils::loadUIResources("../../UIResources/expenses.fr.res.php", "../../UIResources/expenses.en.res.php");


    // custon page script, if needed
   $script = '
        <!--language texts for page -->
        <script  type="text/javascript">
            var pageLangTexts = {
		    viewAllItemsBtnLabel : "'.ExpenseUIResource::viewAllItemsBtnLabelText().'",
              };
        </script>
        <script  src="../../Lib/fusioncharts/fusioncharts.js" type="text/javascript"></script>
        <script src="../../Lib/fusioncharts/themes/fusioncharts.theme.fint.js" type="text/javascript"></script>
        <script   src="../../Scripts/financialReportExpensesScript.js"  type="text/javascript"> </script> 
        <script  defer src="../../Scripts/expensesChartScript.js"  type="text/javascript"> </script> 

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
                                <h2>Bilan Des D&eacute;penses</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Imprimer</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>  
                            <div class="x_content">
                                <div class="container">
                                    <div id="errorContentDiv" ></div>
                                    <table class="fullWidth cellspacing3 cellpadding3">
                                        <tr>
                                            <td class="fullWidth toLeft">
                                                <div class="input-group toRight pull-leftt">
                                                     <h4 id="periodLabel">Periode: 01.08.2016 - 31.07.2017</h4>
                                                </div>
                                            </td>
                                    </table>
                                    <table class="fullWidth cellspacing3 cellpadding3">
                                        <tr>
                                            <td class="fullWidth">
                                                <div class="col-md-6 pull-left searchBarMargin ">
                                                    <div class="fieldDetailsTitle">
                                                        <span class="">Total: </span><span id="totalExpenses"> - </span>
                                                    </div>
                                                </div>
                                                <div class="input-group toRight pull-right searchBarMargin">
                                                    <div class="btn-group" role="group" aria-label="filter members">
                                                      <button type="button" class="btn btn-default" id="filterPreviousPrevYearBtn">Tous</button>
                                                      <button type="button" class="btn btn-primary" id="filterPreviousYearBtn">2016</button>
                                                      <button type="button" class="btn btn-primary" id="filterCurrentYearBtn">2017</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table cellspacing0 cellpadding0" id="expensesListTable" >
                                          <tbody>
                                          </tbody>
                                        </table>
                                    </div>    
                                    <div id="tournamentsDiv" class="marginBotton">
                                    </div>
                                    
                                    <!-- modal content -->
                                    <!-- View bill modal dialog form -->
                                    <div id="billModalDialog" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" id="billDialogTitle">Facture</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-body-thumbnail">
                                                        <div class="dialogViewBillDiv">
                                                            <table class="fullWidth">
                                                                <tr>
                                                                    <td class="toCenter" >
                                                                        <div id="billDialogContent"></div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end View bill modal dialog form -->
                                </div>
                          </div> 
                          <!-- end x_content --> 
                    </div>
                </div>

                <!-- chart content --> 
                    <div class="col-md-12">
                        <div class="x_panel">
                          <div class="x_title">
                              <h2>Statistique Des Dépenses</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                          <i class="fa fa-wrench"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">Fermer</a></li>
                                      </ul>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                              </ul>
                              <div class="clearfix"></div>
                        </div> <!-- close x_title -->
                        <div class="x_content">
                              <div class="container">
                                    <table class="fullWidth normalBorder">
                                        <tr>
                                            <td align="center" class="toCenter">
                                                 <div id="chartContainer">Chart diagramm will load here...Please wait</div>
                                            </td>
                                        </tr>
                                    </table>
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
 


