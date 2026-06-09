<?php
        
    require_once "Includes/Common.php";
    require_once "DataAccessObject/DaoCommon.php";
    require_once "Models/EntityCommon.php";
    require "Views/PageModel.php";
    
    $mainPage = new PageModel();
    // get user language
    $userLang = $_SESSION['userLang'];
    $title = 'Kameruner Heilbronn e.V - Home';
    // load UI resource 
    Utils::loadUIResources("./UIResources/index.fr.res.php", "./UIResources/index.en.res.php");

    // custon page script, if needed
    $script = '
        <!-- inline script for index page -->
        <script src="./Scripts/homeScript.js" type="text/javascript" ></script>
        <!-- <script src="./Scripts/chartsScript.js" type="text/javascript" ></script> -->
        <script language="javascript" type="text/javascript">
        </script>';
    /// page content
    $content = ' 

        <!-- page content -->
                <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="count">5</div>
                            <h3 class="dashItem">ASSOCIATION</h3>
                            <p><a href="./Views/Association/ViewOfficeMembers.php">Notre Organigramme</a></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="count">46</div>
                            <h3 class="dashItem">MEMBRES</h3>
                            <p><a href="./Views/Members/ViewAllMembers.php">Nos Membres</a></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-sitemap"></i></div>
                            <div class="count">5</div>
                            <h3 class="dashItem">ACTIVITES</h3>
                            <p><a href="./Views/SportActivities/ViewAllGames.php">Nos Activit&eacute;s</a></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="count">2</div>
                            <h3 class="dashItem">VETERANS</h3>
                            <p><a href="./Views/Veterans/ViewAllVeterans.php">Nos Veterans</a></p>
                        </div>
                    </div>
                </div>
                <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-book"></i></div>
                            <div class="count">9</div>
                            <h3 class="dashItem">ETUDES</h3>
                            <p><a href="./Views/Studies/ViewOldExams.php">Aciens Examens</a></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-cubes"></i></div>
                            <div class="count">46</div>
                            <h3 class="dashItem">ANNONCES</h3>
                            <p><a href="./Views/Anouncements/ViewAllAnoucments.php">Nos Annonces</a></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="count">5</div>
                            <h3 class="dashItem">REFUGIES</h3>
                            <p><a href="./Views/Refugies/ViewRefugiesCommnunity.php">Cummunaut&eacute; R&eacute;fugies</a></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-cogs"></i></div>
                            <div class="count">2</div>
                            <h3 class="dashItem">SERVICES</h3>
                            <p><a href="./Views/Services/ViewAllServices.php">Nos Services</a></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Activites recentes</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Activites</a>
                                            </li>
                                             
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">Mai</p>
                                        <p class="day">20</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Tournois Football Karlsruhe 2017</a>
                                        <p>la Ville de Heilbronn participera &agrave; ce tournois</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">Juin</p>
                                        <p class="day">2</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="Challenge Camerounais 2017 - Reutlingen" target="_blank" href="https://www.challenge-camerounais.com/">Challenge Camerounais 2017 - Reutlingen</a>
                                        <p>la Ville de Heilbronn participera au Challenge dans la ville de Reutlingen (Vers Stuttgart)</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">Mai</p>
                                        <p class="day">13</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Tournois Football Gemersheim 2017</a>
                                        <p>Ce trounois a &eacute;t&eacute; remporte par l equipe de Stuttgart.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Activités à venir</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="./Views/SportActivities/ViewAllGames.php">Voir tous les Tournois</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">Juin</p>
                                        <p class="day">13</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="./Views/SportActivities/ViewAllGames.php">Tournoi Vétérans Ü35</a>
                                        <p>Brackenheim Wiesental Stadion - Tournoi spécial avec repas familial et animations</p>
                                        <div style="margin-top: 10px;">
                                            <a href="./UploadedFiles/Images/Events/Tournoi_Veterants.jpeg" target="_blank" title="Télécharger le flyer">
                                                <img src="./UploadedFiles/Images/Events/Tournoi_Veterants.jpeg" alt="Flyer Tournoi Vétérans" style="max-width: 150px; max-height: 100px; border: 1px solid #ddd; padding: 2px;">
                                            </a>
                                        </div>
                                    </div>
                                </article>

                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">Juin</p>
                                        <p class="day">27</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="./Views/SportActivities/ViewAllGames.php">Tournoi KulturTag</a>
                                        <p>Brackenheim Wiesental Stadion - Un événement culturel et sportif unique</p>
                                        <div style="margin-top: 10px;">
                                            <a href="./UploadedFiles/Images/Events/KulturTag_flyer_1.jpeg" target="_blank" title="Télécharger le flyer 1">
                                                <img src="./UploadedFiles/Images/Events/KulturTag_flyer_1.jpeg" alt="Flyer KulturTag 1" style="max-width: 150px; max-height: 100px; border: 1px solid #ddd; padding: 2px; margin-right: 5px;">
                                            </a>
                                            <a href="./UploadedFiles/Images/Events/KulturTag_flyer_2.jpeg" target="_blank" title="Télécharger le flyer 2">
                                                <img src="./UploadedFiles/Images/Events/KulturTag_flyer_2.jpeg" alt="Flyer KulturTag 2" style="max-width: 150px; max-height: 100px; border: 1px solid #ddd; padding: 2px;">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                
                            </div>
                        </div>
                    </div>
                </div>
             
        <!-- /page content -->
      ';
    $mainPage->setUseDojoScripts(false);
    $mainPage->setActiveMenu("home");
    $mainPage->setDirectoryLevel(0);
    $mainPage->setUserLanguage($userLang);
    $mainPage->setShouldDisplayLanguageSelection(true);
    $mainPage->setPageJscript($script);
    $mainPage->setTitle($title);
    $mainPage->setContent($content);
    $mainPage->displayPage();
        
 
