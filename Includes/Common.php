<?php
/* Module used to include usefull modules.
 * Author: Guy Bami
 * Last update: 19.09.2016
 */
    include_once "ReportErrors.php";
    include_once "Sessions.php";
    //include_once "CommonNoSessionsCheck.php"; //"CheckSessions.php";
    //include_once "CheckSessions.php";  
    include_once "Utils.php";




    abstract class Common{
        const UPDATE_SUCCESSFUL = "SUCCESSFUL_UPDATE";
        const UPDATE_INLINE_SUCCESSFUL = "SUCCESSFUL_UPDATE_INLINE";
        const INSERT_SUCCESSFUL = "SUCCESSFUL_INSERT";
        const DELETE_SUCCESSFUL = "SUCCESSFUL_DELETE";
        const UPDATE_FAILED = "UPDATE_FAILED";
        const DELETE_FAILED = "DELETE_FAILED";
        const INSERT_FAILED = "INSERT_FAILED";

    }