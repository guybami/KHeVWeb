<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Kameruner Heilbronn e.V - Test layout</title>
        
        <link rel="stylesheet" type="text/css" href="Resources/Styles/masterPage.css" />
        <link rel="stylesheet" type="text/css" href="Resources/Styles/common.css" />

        <link rel="stylesheet" type="text/css" href="Resources/Styles/bootstrap.css" />

        <script type="text/javascript" src="Scripts/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="Scripts/commonScript.js"></script>
        <script type="text/javascript" src="Scripts/loginScript.js"></script>
        <script type="text/javascript" src="Scripts/bootstrap-3.3.6.js"></script>

        <script type="text/javascript">
            var pageConfig = { useJqueryEffects : true, logToConsole : true, logLevel : 2 };
            var webSiteRootURL = "<?php include "Includes/Utils.php"; echo Utils::getWebsiteRootURL(); ?>";
            $(document).ready(function () {
                var windowHeight = $(window).height() - 1;
                //var headerHeight = windowHeight * 0.10;
                var contentHeight = windowHeight * 0.7;
                var footerHeight = windowHeight * 0.1 + 10;
                //$("#pageContent").attr("height", contentHeight + "px");
                //$("#pageFooter").attr("height", footerHeight + "px");
            });

        </script>

    </head>
    <body class="body">
        <div class="loginBody loginDiv">
            Test content
        </div>
    </body>
</html>
