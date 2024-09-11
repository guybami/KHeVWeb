<?php

    require_once "../../Includes/Common.php";
    require_once "../../DataAccessObject/DaoCommon.php";
    require_once "../../Models/EntityCommon.php";
    require "../PageModel.php";
    
    $mainPage = new PageModel();
    // get user language
    $userLang = $_SESSION['userLang'];
    $title = "Kameruner Heilbronn eV - Rapport Financier";
    // load UI resource 
    Utils::loadUIResources("../../UIResources/expenses.fr.res.php", "../../UIResources/expenses.en.res.php");


    // custon page script, if needed
   $script = '
        <!--language texts for page -->
        <script  type="text/javascript">
            var pageLangTexts = {
		    totalTextLabel : "'.ExpenseUIResource::viewAllItemsBtnLabelText().'",
              };
        </script>
        <!--
        <script  src="../../Lib/fusioncharts/fusioncharts.js" type="text/javascript"></script>
        <script src="../../Lib/fusioncharts/themes/fusioncharts.theme.fint.js" type="text/javascript"></script>
        <script  defer src="../../Scripts/expensesChartScript.js"  type="text/javascript"> </script> 
        -->
        <script   src="../../Scripts/actualFinancialReportScript.js"  type="text/javascript"> </script> 

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
                                <h2>Bilan G&eacute;n&eacute;ral</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a onclick="" href="javascript:;">Imprimer</a></li>
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
                                                <div class="input-group toRight pull-left">
                                                     <h4 id="periodLabel">Periode: 01.08.2016 - 31.07.2017</h4>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="fullWidth cellspacing3 cellpadding3">
                                        <tr>
                                            <td class="halfWidth">
                                                <div class="col-md-21 pull-left searchBarMargin ">
                                                    <div class="fieldDetailsTitle">
                                                        <span class="">&Eacute;tat actuel des Caisses: </span><span id="totalActual"> - </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="halfWidth">
                                                <div class="col-md-61 pull-right searchBarMargin ">
                                                    <div class="fieldDetailsTitle">
                                                        <span class="">Derni&egrave;re Actualisation: </span><span id="lastUpdateStatus">10.07.2017</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table cellspacing0 cellpadding0" id="actualFinancialStatusTable" >
                                          <tbody>
                                          </tbody>
                                        </table>
                                    </div>    
                                    
                                     
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
    $mainPage->setActiveMenu("finances");
    $mainPage->setDirectoryLevel(2);
    $mainPage->setUserLanguage($userLang);
    $mainPage->setShouldDisplayLanguageSelection(false);
    $mainPage->setPageJscript($script);
    $mainPage->setTitle($title);
    $mainPage->setContent($content);
    $mainPage->displayPage();
 


