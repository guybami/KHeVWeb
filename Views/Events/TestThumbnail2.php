
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

         

        </script>
        <script  src="../../Scripts/lightslider.js"  type="text/javascript"> </script> 

        <script  src="../../Scripts/thumbnailScript2.js"  type="text/javascript"> </script> 

        <script type="text/javascript">
             
        </script>
        <style type="text/css">
           ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin: 60px;
            text-align:center;
        }
		.content-slider li{
		    background-color: #ed3020;
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 0;
		}
		.demo {
			width: 900px;
			width: 800px;
            border: 5px solid #00ff90;
            margin: 0 auto;
		}

        .gallery li aimg{
           width:700px; 
           height:600px;
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
                                
                                <button type="button" class="btn btn-primary" id="showThumbnailBtn">
                                    Show Thumbnail Gallery  
                                </button>

                                <!-- thumbnail modal dialog form -->
                                <div id="thumbnailDialog" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Tornoi Karlsruhe</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div id="thumbnailDialogContent" class="demo" style="position:relative; height:400px;">
                                                    <div > </div>		
                                                    <!-- start thumbnail content -->											
													<table class="fullWidth normalBorder zeroPadding zeroSpacing">
														<tr>
															<td class="sliderThumbnailDiv">
																 <div class="demo sliderThumbnailDiv">
																	<div class="item">            
																		<div class="clearfix" style="max-width:auto; border:1px solid red;">
																			<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
																				<li data-thumb="img/thumb/cS-1.jpg"> 
																					<img src="img/cS-1.jpg"   />
																				</li>
																				<li data-thumb="img/thumb/cS-2.jpg"> 
																					<img src="img/cS-2.jpg" />
																				</li>
																				<li data-thumb="img/thumb/cS-3.jpg"> 
																					<img src="img/cS-3.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-4.jpg"> 
																					<img src="img/cS-4.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-5.jpg"> 
																					<img src="img/cS-5.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-6.jpg"> 
																					<img src="img/cS-6.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-7.jpg"> 
																					<img src="img/cS-7.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-8.jpg"> 
																					<img src="img/cS-8.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-9.jpg"> 
																					<img src="img/cS-9.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-10.jpg"> 
																					<img src="img/cS-10.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-11.jpg"> 
																					<img src="img/cS-11.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-12.jpg"> 
																					<img src="img/cS-12.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-13.jpg"> 
																					<img src="img/cS-13.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-14.jpg"> 
																					<img src="img/cS-14.jpg" />
																					 </li>
																				<li data-thumb="img/thumb/cS-15.jpg"> 
																					<img src="img/cS-15.jpg" />
																					 </li>
																			</ul>
																		</div>
																	</div>
																</div>        
																			  
															</td>
															<td class="userCommentsDiv leftBorder toTop">
																 comments here
																<div class="" id="s"></div>
															</td>
														</tr>
													</table>
                                                     
												</div>
                                            </div> <!-- end modal body -->
                                            <div class="modal-footer">
                                                <div>close footer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<!-- end thumbnail modal dialog form --> 
                                
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
 
