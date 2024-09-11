
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
        <script defer src="../../Scripts/thumbnailScript.js"  type="text/javascript"> </script> 

        <script type="text/javascript">
             
        </script>
        <style type="text/css">
            .thumbnail  img {
                height: 100%;
                width: 100%;   
            }
             
            
            div.item img{
                height: 100%;
                width: 100%; 
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
                                
                                <table class="fullWidth normalBorder zeroPadding zeroSpacing">
                                    <tr>
                                        <td class="sliderThumbnailDiv">
                                            <!-- Top part of the slider -->
                                                    <div class="" id="carousel-bounding-box">
                                                        <div class="carousel slide" id="myCarousel">
                                                            <!-- Carousel items -->
                                                            <div class="carousel-inner">
                                                                <div class="active item" data-slide-number="0">
                                                                    <img src="http://placehold.it/770x300&text=one">
                                                                </div>

                                                                <div class="item" data-slide-number="1">
                                                                <img src="http://placehold.it/770x300&text=two"></div>

                                                                <div class="item" data-slide-number="2">
                                                                <img src="http://placehold.it/770x300&text=three"></div>

                                                                <div class="item" data-slide-number="3">
                                                                <img src="http://placehold.it/770x300&text=four"></div>

                                                                <div class="item" data-slide-number="4">
                                                                <img src="http://placehold.it/770x300&text=five"></div>

                                                                <div class="item" data-slide-number="5">
                                                                <img src="http://placehold.it/770x300&text=six"></div>
                                                            </div><!-- Carousel nav -->
                                                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                                <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                                            </a>
                                                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                                <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                                            </a>                                
                                                        </div>
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="userCommentsDiv leftBorder toTop" rowspan="2">
                                            <div class="" id="carousel-text"></div>
                                            <div class="" id="slider">
                                                    <div id="slide-content" style="display: none;">
                                                        <div id="slide-content-0">
                                                            <h2>Slider One</h2>
                                                            <p>Lorem Ipsum Dolor</p>
                                                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                                        </div>

                                                        <div id="slide-content-1">
                                                            <h2>Slider Two</h2>
                                                            <p>Lorem Ipsum Dolor</p>
                                                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                                        </div>

                                                        <div id="slide-content-2">
                                                            <h2>Slider Three</h2>
                                                            <p>Lorem Ipsum Dolor</p>
                                                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                                        </div>

                                                        <div id="slide-content-3">
                                                            <h2>Slider Four</h2>
                                                            <p>Lorem Ipsum Dolor</p>
                                                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                                        </div>

                                                        <div id="slide-content-4">
                                                            <h2>Slider Five</h2>
                                                            <p>Lorem Ipsum Dolor</p>
                                                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                                        </div>

                                                        <div id="slide-content-5">
                                                            <h2>Slider Six</h2>
                                                            <p>Lorem Ipsum Dolor</p>
                                                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="topBorder" >
                                            <div class="sliderThumbnailImg" id="slider-thumbsA">
                                                <!-- Bottom switcher of slider -->
                                                <ul class="hide-bullets">
                                                    <li class="col-sm-2  ">
                                                        <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x80&text=one"></a>
                                                    </li>

                                                    <li class="col-sm-2  ">
                                                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x80&text=two"></a>
                                                    </li>

                                                    <li class="col-sm-2">
                                                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x80&text=three"></a>
                                                    </li>

                                                    <li class="col-sm-2">
                                                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x80&text=four"></a>
                                                    </li>
                                                    <li class="col-sm-2">
                                                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x80&text=five"></a>
                                                    </li>

                                                    <li class="col-sm-2">
                                                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x80&text=six"></a>
                                                    </li>

                                                    <li class="col-sm-2">
                                                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x80&text=five"></a>
                                                    </li>

                                                    <li class="col-sm-2">
                                                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x80&text=six"></a>
                                                    </li><li class="col-sm-2">
                                                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x80&text=five"></a>
                                                    </li>

                                                    <li class="col-sm-2">
                                                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x80&text=six"></a>
                                                    </li>
                                                </ul>                 
                                            </div>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <hr />

                                <div class="container">
                                    

                                            
                                </div>

                                         
                                </div> <!-- end container -->
                                 
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
 
