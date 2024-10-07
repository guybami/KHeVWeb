-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2017 at 12:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `khev`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `deleteAllConferences`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllConferences`()
BEGIN
                DELETE FROM khev_Conference;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventBillSummaries`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllEventBillSummaries`()
BEGIN
                DELETE FROM khev_EventBillSummary;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventPhotoComments`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllEventPhotoComments`()
BEGIN
                DELETE FROM khev_EventPhotoComment;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventPhotos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllEventPhotos`()
BEGIN
                DELETE FROM khev_EventPhoto;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEvents`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllEvents`()
BEGIN
                DELETE FROM khev_Event;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventVideoComments`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllEventVideoComments`()
BEGIN
                DELETE FROM khev_EventVideoComment;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventVideos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllEventVideos`()
BEGIN
                DELETE FROM khev_EventVideo;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllExpenses`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllExpenses`()
BEGIN
                DELETE FROM khev_Expense;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllLogActivities`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllLogActivities`()
BEGIN
                DELETE FROM khev_LogActivity;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllMemberFees`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllMemberFees`()
BEGIN
                DELETE FROM khev_MemberFee;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllMembers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllMembers`()
BEGIN
                DELETE FROM khev_Member;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllOfficeMembers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllOfficeMembers`()
BEGIN
                DELETE FROM khev_OfficeMember;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllOldExams`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllOldExams`()
BEGIN
                DELETE FROM khev_OldExam;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllProjects`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllProjects`()
BEGIN
                DELETE FROM khev_Project;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllPublications`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllPublications`()
BEGIN
                DELETE FROM khev_Publication;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllRoleAccessRights`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllRoleAccessRights`()
BEGIN
                DELETE FROM khev_RoleAccessRight;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllRoles`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllRoles`()
BEGIN
                DELETE FROM khev_Role;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllTutorials`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllTutorials`()
BEGIN
                DELETE FROM khev_Tutorial;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllUserProfiles`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllUserProfiles`()
BEGIN
                DELETE FROM khev_UserProfile;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllUsers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllUsers`()
BEGIN
                DELETE FROM khev_User;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllVeterans`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllVeterans`()
BEGIN
                DELETE FROM khev_Veteran;

            END$$

DROP PROCEDURE IF EXISTS `deleteConference`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteConference`(_conferenceId  int(11)  
)
BEGIN

                DELETE FROM khev_Conference
                WHERE  conferenceId = _conferenceId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEvent`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEvent`(_eventId  int(11)  
)
BEGIN

                DELETE FROM khev_Event
                WHERE  eventId = _eventId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventBillSummary`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEventBillSummary`(_billSummaryId  int(11)  
)
BEGIN

                DELETE FROM khev_EventBillSummary
                WHERE  billSummaryId = _billSummaryId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventPhoto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEventPhoto`(_photoId  int(11)  
)
BEGIN

                DELETE FROM khev_EventPhoto
                WHERE  photoId = _photoId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventPhotoComment`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEventPhotoComment`(_photoCommentId  int(11)  
)
BEGIN

                DELETE FROM khev_EventPhotoComment
                WHERE  photoCommentId = _photoCommentId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventVideo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEventVideo`(_videoId  int(11)  
)
BEGIN

                DELETE FROM khev_EventVideo
                WHERE  videoId = _videoId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventVideoComment`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEventVideoComment`(_videoCommentId  int(11)  
)
BEGIN

                DELETE FROM khev_EventVideoComment
                WHERE  videoCommentId = _videoCommentId;

            END$$

DROP PROCEDURE IF EXISTS `deleteExpense`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteExpense`(_expenseId  int(11)  
)
BEGIN

                DELETE FROM khev_Expense
                WHERE  expenseId = _expenseId;

            END$$

DROP PROCEDURE IF EXISTS `deleteIncome`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteIncome`(_incomeId  int(11)  
)
BEGIN

                DELETE FROM khev_Income
                WHERE  incomeId = _incomeId;

            END$$

DROP PROCEDURE IF EXISTS `deleteLogActivity`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteLogActivity`(_activityId  int(11)  
)
BEGIN

                DELETE FROM khev_LogActivity
                WHERE  activityId = _activityId;

            END$$

DROP PROCEDURE IF EXISTS `deleteMember`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteMember`(_memberId  int(11)  
)
BEGIN

                DELETE FROM khev_Member
                WHERE  memberId = _memberId;

            END$$

DROP PROCEDURE IF EXISTS `deleteMemberFee`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteMemberFee`(_memberFeeId  int(11)  
)
BEGIN

                DELETE FROM khev_MemberFee
                WHERE  memberFeeId = _memberFeeId;

            END$$

DROP PROCEDURE IF EXISTS `deleteOfficeMember`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteOfficeMember`(IN `_officeMemberId` INT(11))
BEGIN

                DELETE FROM khev_OfficeMember
                WHERE  officeMemberId = _officeMemberId;

            END$$

DROP PROCEDURE IF EXISTS `deleteOldExam`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteOldExam`(_examId  int(11)  
)
BEGIN

                DELETE FROM khev_OldExam
                WHERE  examId = _examId;

            END$$

DROP PROCEDURE IF EXISTS `deleteProject`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteProject`(_projectId  int(11)  
)
BEGIN

                DELETE FROM khev_Project
                WHERE  projectId = _projectId;

            END$$

DROP PROCEDURE IF EXISTS `deletePublication`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deletePublication`(_publicationId  int(11)  
)
BEGIN

                DELETE FROM khev_Publication
                WHERE  publicationId = _publicationId;

            END$$

DROP PROCEDURE IF EXISTS `deleteRole`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteRole`(_roleId  int(11)  
)
BEGIN

                DELETE FROM khev_Role
                WHERE  roleId = _roleId;

            END$$

DROP PROCEDURE IF EXISTS `deleteRoleAccessRight`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteRoleAccessRight`(_roleAccessId  int(11)  
)
BEGIN

                DELETE FROM khev_RoleAccessRight
                WHERE  roleAccessId = _roleAccessId;

            END$$

DROP PROCEDURE IF EXISTS `deleteTutorial`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteTutorial`(_tutorialId  int(11)  
)
BEGIN

                DELETE FROM khev_Tutorial
                WHERE  tutorialId = _tutorialId;

            END$$

DROP PROCEDURE IF EXISTS `deleteUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUser`(_userId  int(11)  
)
BEGIN

                DELETE FROM khev_User
                WHERE  userId = _userId;

            END$$

DROP PROCEDURE IF EXISTS `deleteUserProfile`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUserProfile`(_profileId  int(11)  
)
BEGIN

                DELETE FROM khev_UserProfile
                WHERE  profileId = _profileId;

            END$$

DROP PROCEDURE IF EXISTS `deleteVeteran`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteVeteran`(_veteranId  int(11)  
)
BEGIN

                DELETE FROM khev_Veteran
                WHERE  veteranId = _veteranId;

            END$$

DROP PROCEDURE IF EXISTS `insertNewConference`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewConference`(_date  datetime  
,_title  varchar(50)  
,_location  varchar(50)  
,_summary  text  
)
BEGIN
                INSERT INTO khev_Conference (
                    date  
,title  
,location  
,summary  

                )
                VALUES (
                    _date  
,_title  
,_location  
,_summary  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewEvent`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewEvent`(_title  varchar(50)  
,_category  enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Divers','Football','Tournament')  
,_date  datetime  
,_location  varchar(50)  
,_summary  text  
)
BEGIN
                INSERT INTO khev_Event (
                    title  
,category  
,date  
,location  
,summary  

                )
                VALUES (
                    _title  
,_category  
,_date  
,_location  
,_summary  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewEventBillSummary`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewEventBillSummary`(_eventId  int(11)  
,_title  varchar(50)  
,_summary  text  
,_summaryFileName  varchar(512)  
)
BEGIN
                INSERT INTO khev_EventBillSummary (
                    eventId  
,title  
,summary  
,summaryFileName  

                )
                VALUES (
                    _eventId  
,_title  
,_summary  
,_summaryFileName  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewEventPhoto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewEventPhoto`(_eventId  int(11)  
,_fileFullName  varchar(512)  
,_title  varchar(50)  
)
BEGIN
                INSERT INTO khev_EventPhoto (
                    eventId  
,fileFullName  
,title  

                )
                VALUES (
                    _eventId  
,_fileFullName  
,_title  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewEventPhotoComment`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewEventPhotoComment`(IN `_photoId` INT(11), IN `_userId` INT(11), IN `_commentText` TEXT, IN `_date` DATETIME)
BEGIN
                INSERT INTO khev_EventPhotoComment (
                    photoId  
,userId  
,commentText  
,date  

                )
                VALUES (
                    _photoId  
,_userId  
,_commentText  
,_date  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewEventVideo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewEventVideo`(_eventId  int(11)  
,_fileFullName  varchar(512)  
,_title  varchar(50)  
)
BEGIN
                INSERT INTO khev_EventVideo (
                    eventId  
,fileFullName  
,title  

                )
                VALUES (
                    _eventId  
,_fileFullName  
,_title  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewEventVideoComment`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewEventVideoComment`(_videoId  int(11)  
,_userId  int(11)  
,_commentText  text  
,_date  datetime  
)
BEGIN
                INSERT INTO khev_EventVideoComment (
                    videoId  
,userId  
,commentText  
,date  

                )
                VALUES (
                    _videoId  
,_userId  
,_commentText  
,_date  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewExpense`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewExpense`(_eventId  int(11)  
,_title  varchar(50)  
,_amount  double  
,_category  enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Donation','Sport','Divers')  
,_billFileName  varchar(512)  
,_transactionDate  datetime  
)
BEGIN
                INSERT INTO khev_Expense (
                    eventId  
,title  
,amount  
,category  
,billFileName  
,transactionDate  

                )
                VALUES (
                    _eventId  
,_title  
,_amount  
,_category  
,_billFileName  
,_transactionDate  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewIncome`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewIncome`(_eventId  int(11)  
,_title  varchar(50)  
,_amount  double  
,_category  enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Donation','Sport','Divers')  
,_billFileName  varchar(512)  
,_transactionDate  datetime  
)
BEGIN
                INSERT INTO khev_Income (
                    eventId  
,title  
,amount  
,category  
,billFileName  
,transactionDate  

                )
                VALUES (
                    _eventId  
,_title  
,_amount  
,_category  
,_billFileName  
,_transactionDate  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewLogActivity`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewLogActivity`(_userId  int(11)  
,_summary  text  
,_date  datetime  
)
BEGIN
                INSERT INTO khev_LogActivity (
                    userId  
,summary  
,date  

                )
                VALUES (
                    _userId  
,_summary  
,_date  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewMember`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewMember`(_gender  enum('Male','Female')  
,_name  varchar(50)  
,_lastName  varchar(50)  
,_email  varchar(100)  
,_phoneNumber  varchar(50)  
,_zipCode  varchar(10)  
,_city  varchar(50)  
,_address  varchar(256)  
,_position  varchar(50)  
)
BEGIN
                INSERT INTO khev_Member (
                    gender  
,name  
,lastName  
,email  
,phoneNumber  
,zipCode  
,city  
,address  
,position  

                )
                VALUES (
                    _gender  
,_name  
,_lastName  
,_email  
,_phoneNumber  
,_zipCode  
,_city  
,_address  
,_position  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewMemberFee`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewMemberFee`(_memberId  int(11)  
,_amount  double  
,_billFileName  varchar(512)  
,_transactionDate  datetime  
)
BEGIN
                INSERT INTO khev_MemberFee (
                    memberId  
,amount  
,billFileName  
,transactionDate  

                )
                VALUES (
                    _memberId  
,_amount  
,_billFileName  
,_transactionDate  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewOfficeMember`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewOfficeMember`(_memberId  int(11)  
,_position  enum('President','Secretary','ChiefCulture','ChiefSport','Treasurer')  
)
BEGIN
                INSERT INTO khev_OfficeMember (
                    memberId  
,position  

                )
                VALUES (
                    _memberId  
,_position  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewOldExam`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewOldExam`(_userId  int(11)  
,_subject  varchar(50)  
,_title  varchar(120)  
,_semester  varchar(10)  
,_date  datetime  
)
BEGIN
                INSERT INTO khev_OldExam (
                    userId  
,subject  
,title  
,semester  
,date  

                )
                VALUES (
                    _userId  
,_subject  
,_title  
,_semester  
,_date  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewProject`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewProject`(_userId  int(11)  
,_title  varchar(50)  
,_summary  text  
)
BEGIN
                INSERT INTO khev_Project (
                    userId  
,title  
,summary  

                )
                VALUES (
                    _userId  
,_title  
,_summary  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewPublication`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewPublication`(_userId  int(11)  
,_category  enum('Info','Concert','Hiwi','Mourning')  
,_summary  text  
,_date  datetime  
)
BEGIN
                INSERT INTO khev_Publication (
                    userId  
,category  
,summary  
,date  

                )
                VALUES (
                    _userId  
,_category  
,_summary  
,_date  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewRole`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewRole`(_name  varchar(50)  
,_description  varchar(120)  
)
BEGIN
                INSERT INTO khev_Role (
                    name  
,description  

                )
                VALUES (
                    _name  
,_description  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewRoleAccessRight`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewRoleAccessRight`(_roleId  int(11)  
,_entityType  varchar(50)  
,_createRight  bit(1)  
,_readRight  bit(1)  
,_editRight  bit(1)  
,_deleteRight  bit(1)  
,_fullRight  bit(1)  
)
BEGIN
                INSERT INTO khev_RoleAccessRight (
                    roleId  
,entityType  
,createRight  
,readRight  
,editRight  
,deleteRight  
,fullRight  

                )
                VALUES (
                    _roleId  
,_entityType  
,_createRight  
,_readRight  
,_editRight  
,_deleteRight  
,_fullRight  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewTutorial`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewTutorial`(_memberId  int(11)  
,_date  datetime  
,_subject  varchar(50)  
,_level  varchar(50)  
,_location  varchar(50)  
,_shedules  varchar(50)  
,_status  enum('Cancelled','Active')  
)
BEGIN
                INSERT INTO khev_Tutorial (
                    memberId  
,date  
,subject  
,level  
,location  
,shedules  
,status  

                )
                VALUES (
                    _memberId  
,_date  
,_subject  
,_level  
,_location  
,_shedules  
,_status  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewUser`(_loginName  varchar(50)  
,_hashPassword  varchar(20)  
,_name  varchar(50)  
,_lastName  varchar(50)  
,_phoneNumber  varchar(50)  
,_email  varchar(100)  
)
BEGIN
                INSERT INTO khev_User (
                    loginName  
,hashPassword  
,name  
,lastName  
,phoneNumber  
,email  

                )
                VALUES (
                    _loginName  
,_hashPassword  
,_name  
,_lastName  
,_phoneNumber  
,_email  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewUserProfile`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewUserProfile`(_userId  int(11)  
,_gender  enum('Male','Female')  
,_photoFileName  varchar(256)  
,_street  varchar(50)  
,_zipCode  varchar(10)  
,_city  varchar(50)  
,_address  varchar(256)  
,_defalutLanguage  enum('DE','FR','EN')  
)
BEGIN
                INSERT INTO khev_UserProfile (
                    userId  
,gender  
,photoFileName  
,street  
,zipCode  
,city  
,address  
,defalutLanguage  

                )
                VALUES (
                    _userId  
,_gender  
,_photoFileName  
,_street  
,_zipCode  
,_city  
,_address  
,_defalutLanguage  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `insertNewVeteran`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNewVeteran`(_gender  enum('Male','Female')  
,_name  varchar(50)  
,_lastName  varchar(50)  
,_email  varchar(100)  
,_phoneNumber  varchar(50)  
,_zipCode  varchar(10)  
,_city  varchar(50)  
,_address  varchar(256)  
,_position  varchar(50)  
)
BEGIN
                INSERT INTO khev_Veteran (
                    gender  
,name  
,lastName  
,email  
,phoneNumber  
,zipCode  
,city  
,address  
,position  

                )
                VALUES (
                    _gender  
,_name  
,_lastName  
,_email  
,_phoneNumber  
,_zipCode  
,_city  
,_address  
,_position  

                );
                SELECT LAST_INSERT_ID();
            END$$

DROP PROCEDURE IF EXISTS `selectAllConferences`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllConferences`()
BEGIN
                SELECT khev_Conference.*
                FROM khev_Conference    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEntitiesRecordsCount`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllEntitiesRecordsCount`()
BEGIN
    SELECT table_name AS tableName, table_rows tableRows 
	FROM information_schema.tables 
	WHERE  table_schema = 'khev';
	
END$$

DROP PROCEDURE IF EXISTS `selectAllEventBillSummaries`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllEventBillSummaries`()
BEGIN
                SELECT khev_EventBillSummary.*
                FROM khev_EventBillSummary    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEventPhotoComments`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllEventPhotoComments`()
BEGIN
                SELECT khev_EventPhotoComment.*,khev_PhotoVideo.*,khev_User.*
                FROM khev_EventPhotoComment   LEFT JOIN khev_PhotoVideo ON  khev_EventPhotoComment.photoId = khev_PhotoVideo.photoId  
 LEFT JOIN khev_User ON  khev_EventPhotoComment.userId = khev_User.userId  
   ORDER BY khev_EventPhotoComment.date  DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEventPhotos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllEventPhotos`()
BEGIN
   SELECT khev_EventPhoto.*, khev_Event.title AS eventTitle
    FROM khev_EventPhoto 
	LEFT JOIN  khev_Event 
	ON  khev_Event.eventId =  khev_EventPhoto.eventId
	ORDER BY khev_Event.date  DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEvents`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllEvents`()
BEGIN
                SELECT khev_Event.*
                FROM khev_Event    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEventVideoComments`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllEventVideoComments`()
BEGIN
                SELECT khev_EventVideoComment.*,khev_EventVideo.*,khev_User.*
                FROM khev_EventVideoComment   LEFT JOIN khev_EventVideo ON  khev_EventVideoComment.videoId = khev_EventVideo.videoId  
 LEFT JOIN khev_User ON  khev_EventVideoComment.userId = khev_User.userId  
   ORDER BY khev_EventVideoComment.date  DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEventVideos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllEventVideos`()
BEGIN
                SELECT khev_EventVideo.*,khev_Event.*
                FROM khev_EventVideo   LEFT JOIN khev_Event ON  khev_EventVideo.eventId = khev_Event.eventId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllExpenses`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllExpenses`()
BEGIN
    SELECT khev_Expense.*, khev_Event.title AS eventTitle
    FROM khev_Expense 
	LEFT JOIN  khev_Event 
	ON  khev_Event.eventId =  khev_Expense.eventId
	ORDER BY khev_Expense.transactionDate  DESC;         
END$$

DROP PROCEDURE IF EXISTS `selectAllExpensesByYear`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllExpensesByYear`()
BEGIN
    SELECT 
        SUM(amount) AS sumExpenses,  
        MONTH(transactionDate) AS currentMonth,
        YEAR(transactionDate) AS currentYear
        FROM khev_Expense   
        GROUP BY  MONTH(transactionDate), YEAR(transactionDate)
        ORDER BY  YEAR(transactionDate), MONTH( transactionDate);  
                
	
END$$

DROP PROCEDURE IF EXISTS `selectAllIncomes`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllIncomes`()
BEGIN
    SELECT khev_Income.*, khev_Event.title AS eventTitle
    FROM khev_Income 
	LEFT JOIN  khev_Event 
	ON  khev_Event.eventId =  khev_Income.eventId
	ORDER BY khev_Income.transactionDate  DESC;
	
END$$

DROP PROCEDURE IF EXISTS `selectAllIncomesByYear`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllIncomesByYear`()
BEGIN
    SELECT 
        SUM(amount) AS sumIncomes,  
        MONTH(transactionDate) AS currentMonth,
        YEAR(transactionDate) AS currentYear
        FROM khev_Income   
        GROUP BY  MONTH(transactionDate), YEAR(transactionDate)
        ORDER BY  YEAR(transactionDate), MONTH( transactionDate);   
                
	
END$$

DROP PROCEDURE IF EXISTS `selectAllLogActivities`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllLogActivities`()
BEGIN
                SELECT khev_LogActivity.*,khev_User.*
                FROM khev_LogActivity   LEFT JOIN khev_User ON  khev_LogActivity.userId = khev_User.userId  
   ORDER BY khev_LogActivity.date  DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllMemberFees`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllMemberFees`()
BEGIN
                SELECT khev_MemberFee.*,khev_Member.*
                FROM khev_MemberFee   LEFT JOIN khev_Member ON  khev_MemberFee.memberId = khev_Member.memberId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllMembers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllMembers`()
BEGIN
                SELECT khev_Member.*
                FROM khev_Member     ORDER BY khev_Member.name  ASC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllOfficeMembers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllOfficeMembers`()
BEGIN
                SELECT khev_OfficeMember.*,khev_Member.*
                FROM khev_OfficeMember   LEFT JOIN khev_Member ON  khev_OfficeMember.memberId = khev_Member.memberId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllOldExams`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllOldExams`()
BEGIN
                SELECT khev_OldExam.*,khev_User.*
                FROM khev_OldExam   LEFT JOIN khev_User ON  khev_OldExam.userId = khev_User.userId  
   ORDER BY khev_OldExam.title  ASC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllPhotosByEvent`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllPhotosByEvent`(IN `_eventId` INT(11))
BEGIN
    SELECT khev_EventPhoto.*, khev_Event.title AS eventTitle
    FROM khev_EventPhoto 
    LEFT JOIN  khev_Event 
    ON  khev_Event.eventId =  khev_EventPhoto.eventId
    WHERE khev_EventPhoto.eventId = _eventId
    ORDER BY khev_Event.date  DESC;
	
END$$

DROP PROCEDURE IF EXISTS `selectAllProjects`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllProjects`()
BEGIN
                SELECT khev_Project.*,khev_User.*
                FROM khev_Project   LEFT JOIN khev_User ON  khev_Project.userId = khev_User.userId  
   ORDER BY khev_Project.title  ASC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllPublications`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllPublications`()
BEGIN
                SELECT khev_Publication.*,khev_User.*
                FROM khev_Publication   LEFT JOIN khev_User ON  khev_Publication.userId = khev_User.userId  
   ORDER BY khev_Publication.date DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllRoleAccessRights`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllRoleAccessRights`()
BEGIN
                SELECT khev_RoleAccessRight.*,khev_Role.*
                FROM khev_RoleAccessRight   LEFT JOIN khev_Role ON  khev_RoleAccessRight.roleId = khev_Role.roleId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllRoles`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllRoles`()
BEGIN
                SELECT khev_Role.*
                FROM khev_Role    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllTutorials`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllTutorials`()
BEGIN
                SELECT khev_Tutorial.*
                FROM khev_Tutorial    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllUserProfiles`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllUserProfiles`()
BEGIN
                SELECT khev_UserProfile.*,khev_User.*
                FROM khev_UserProfile   LEFT JOIN khev_User ON  khev_UserProfile.userId = khev_User.userId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllUsers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllUsers`()
BEGIN
                SELECT khev_User.*
                FROM khev_User     ORDER BY khev_User.name  ASC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllVeterans`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectAllVeterans`()
BEGIN
                SELECT khev_Veteran.*
                FROM khev_Veteran    ;
            END$$

DROP PROCEDURE IF EXISTS `selectConferenceDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectConferenceDetails`(_conferenceId  int(11)  
)
BEGIN
                SELECT * FROM khev_Conference
                
                WHERE
                        conferenceId = _conferenceId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventBillSummaryDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEventBillSummaryDetails`(_billSummaryId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventBillSummary
                
                WHERE
                        billSummaryId = _billSummaryId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEventDetails`(_eventId  int(11)  
)
BEGIN
                SELECT * FROM khev_Event
                
                WHERE
                        eventId = _eventId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventPhotoCommentDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEventPhotoCommentDetails`(_photoCommentId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventPhotoComment
                 LEFT JOIN khev_PhotoVideo ON  khev_EventPhotoComment.photoId = khev_PhotoVideo.photoId  
 LEFT JOIN khev_User ON  khev_EventPhotoComment.userId = khev_User.userId  

                WHERE
                        photoCommentId = _photoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventPhotoDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEventPhotoDetails`(_photoId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventPhoto
                 LEFT JOIN khev_Event ON  khev_EventPhoto.eventId = khev_Event.eventId  

                WHERE
                        photoId = _photoId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventVideoCommentDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEventVideoCommentDetails`(_videoCommentId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventVideoComment
                 LEFT JOIN khev_EventVideo ON  khev_EventVideoComment.videoId = khev_EventVideo.videoId  
 LEFT JOIN khev_User ON  khev_EventVideoComment.userId = khev_User.userId  

                WHERE
                        videoCommentId = _videoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventVideoDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEventVideoDetails`(_videoId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventVideo
                 LEFT JOIN khev_Event ON  khev_EventVideo.eventId = khev_Event.eventId  

                WHERE
                        videoId = _videoId;
            END$$

DROP PROCEDURE IF EXISTS `selectExpenseDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectExpenseDetails`(_expenseId  int(11)  
)
BEGIN
                SELECT * FROM khev_Expense
                
                WHERE
                        expenseId = _expenseId;
            END$$

DROP PROCEDURE IF EXISTS `selectIncomeDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectIncomeDetails`(_incomeId  int(11)  
)
BEGIN
                SELECT * FROM khev_Income
                
                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `selectLogActivityDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectLogActivityDetails`(_activityId  int(11)  
)
BEGIN
                SELECT * FROM khev_LogActivity
                 LEFT JOIN khev_User ON  khev_LogActivity.userId = khev_User.userId  

                WHERE
                        activityId = _activityId;
            END$$

DROP PROCEDURE IF EXISTS `selectMemberDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectMemberDetails`(_memberId  int(11)  
)
BEGIN
                SELECT * FROM khev_Member
                
                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `selectMemberFeeDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectMemberFeeDetails`(_memberFeeId  int(11)  
)
BEGIN
                SELECT * FROM khev_MemberFee
                 LEFT JOIN khev_Member ON  khev_MemberFee.memberId = khev_Member.memberId  

                WHERE
                        memberFeeId = _memberFeeId;
            END$$

DROP PROCEDURE IF EXISTS `selectOfficeMemberDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectOfficeMemberDetails`(_officeMemberId  int(11)  
)
BEGIN
                SELECT * FROM khev_OfficeMember
                 LEFT JOIN khev_Member ON  khev_OfficeMember.memberId = khev_Member.memberId  

                WHERE
                        officeMemberId = _officeMemberId;
            END$$

DROP PROCEDURE IF EXISTS `selectOldExamDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectOldExamDetails`(_examId  int(11)  
)
BEGIN
                SELECT * FROM khev_OldExam
                 LEFT JOIN khev_User ON  khev_OldExam.userId = khev_User.userId  

                WHERE
                        examId = _examId;
            END$$

DROP PROCEDURE IF EXISTS `selectProjectDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectProjectDetails`(_projectId  int(11)  
)
BEGIN
                SELECT * FROM khev_Project
                 LEFT JOIN khev_User ON  khev_Project.userId = khev_User.userId  

                WHERE
                        projectId = _projectId;
            END$$

DROP PROCEDURE IF EXISTS `selectPublicationDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectPublicationDetails`(_publicationId  int(11)  
)
BEGIN
                SELECT * FROM khev_Publication
                 LEFT JOIN khev_User ON  khev_Publication.userId = khev_User.userId  

                WHERE
                        publicationId = _publicationId;
            END$$

DROP PROCEDURE IF EXISTS `selectRoleAccessRightDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectRoleAccessRightDetails`(_roleAccessId  int(11)  
)
BEGIN
                SELECT * FROM khev_RoleAccessRight
                 LEFT JOIN khev_Role ON  khev_RoleAccessRight.roleId = khev_Role.roleId  

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `selectRoleDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectRoleDetails`(_roleId  int(11)  
)
BEGIN
                SELECT * FROM khev_Role
                
                WHERE
                        roleId = _roleId;
            END$$

DROP PROCEDURE IF EXISTS `selectTutorialDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectTutorialDetails`(_tutorialId  int(11)  
)
BEGIN
                SELECT * FROM khev_Tutorial
                
                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `selectUserDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectUserDetails`(_userId  int(11)  
)
BEGIN
                SELECT * FROM khev_User
                
                WHERE
                        userId = _userId;
            END$$

DROP PROCEDURE IF EXISTS `selectUserProfileDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectUserProfileDetails`(_profileId  int(11)  
)
BEGIN
                SELECT * FROM khev_UserProfile
                 LEFT JOIN khev_User ON  khev_UserProfile.userId = khev_User.userId  

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `selectVeteranDetails`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectVeteranDetails`(_veteranId  int(11)  
)
BEGIN
                SELECT * FROM khev_Veteran
                
                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateConference`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateConference`(
                            _conferenceId  int(11)  
,_date  datetime  
,_title  varchar(50)  
,_location  varchar(50)  
,_summary  text  

                  )
BEGIN
                UPDATE  khev_Conference
                SET     date =  _date 
,title =  _title 
,location =  _location 
,summary =  _summary 

                WHERE
                        conferenceId = _conferenceId;
            END$$

DROP PROCEDURE IF EXISTS `updateConferenceDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateConferenceDate`(
                _conferenceId  int(11)  
,_date  datetime  

            )
BEGIN
                UPDATE  khev_Conference
                SET     date =  _date 

                WHERE
                        conferenceId = _conferenceId;
            END$$

DROP PROCEDURE IF EXISTS `updateConferenceLocation`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateConferenceLocation`(
                _conferenceId  int(11)  
,_location  varchar(50)  

            )
BEGIN
                UPDATE  khev_Conference
                SET     location =  _location 

                WHERE
                        conferenceId = _conferenceId;
            END$$

DROP PROCEDURE IF EXISTS `updateConferenceSummary`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateConferenceSummary`(
                _conferenceId  int(11)  
,_summary  text  

            )
BEGIN
                UPDATE  khev_Conference
                SET     summary =  _summary 

                WHERE
                        conferenceId = _conferenceId;
            END$$

DROP PROCEDURE IF EXISTS `updateConferenceTitle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateConferenceTitle`(
                _conferenceId  int(11)  
,_title  varchar(50)  

            )
BEGIN
                UPDATE  khev_Conference
                SET     title =  _title 

                WHERE
                        conferenceId = _conferenceId;
            END$$

DROP PROCEDURE IF EXISTS `updateEvent`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEvent`(
                            _eventId  int(11)  
,_title  varchar(50)  
,_category  enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Divers','Football','Tournament')  
,_date  datetime  
,_location  varchar(50)  
,_summary  text  

                  )
BEGIN
                UPDATE  khev_Event
                SET     title =  _title 
,category =  _category 
,date =  _date 
,location =  _location 
,summary =  _summary 

                WHERE
                        eventId = _eventId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventBillSummary`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventBillSummary`(
                            _billSummaryId  int(11)  
,_eventId  int(11)  
,_title  varchar(50)  
,_summary  text  
,_summaryFileName  varchar(512)  

                  )
BEGIN
                UPDATE  khev_EventBillSummary
                SET     eventId =  _eventId 
,title =  _title 
,summary =  _summary 
,summaryFileName =  _summaryFileName 

                WHERE
                        billSummaryId = _billSummaryId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventBillSummaryEventId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventBillSummaryEventId`(
                _billSummaryId  int(11)  
,_eventId  int(11)  

            )
BEGIN
                UPDATE  khev_EventBillSummary
                SET     eventId =  _eventId 

                WHERE
                        billSummaryId = _billSummaryId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventBillSummarySummary`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventBillSummarySummary`(
                _billSummaryId  int(11)  
,_summary  text  

            )
BEGIN
                UPDATE  khev_EventBillSummary
                SET     summary =  _summary 

                WHERE
                        billSummaryId = _billSummaryId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventBillSummarySummaryFileName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventBillSummarySummaryFileName`(
                _billSummaryId  int(11)  
,_summaryFileName  varchar(512)  

            )
BEGIN
                UPDATE  khev_EventBillSummary
                SET     summaryFileName =  _summaryFileName 

                WHERE
                        billSummaryId = _billSummaryId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventBillSummaryTitle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventBillSummaryTitle`(
                _billSummaryId  int(11)  
,_title  varchar(50)  

            )
BEGIN
                UPDATE  khev_EventBillSummary
                SET     title =  _title 

                WHERE
                        billSummaryId = _billSummaryId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventCategory`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventCategory`(
                _eventId  int(11)  
,_category  enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Divers','Football','Tournament')  

            )
BEGIN
                UPDATE  khev_Event
                SET     category =  _category 

                WHERE
                        eventId = _eventId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventDate`(
                _eventId  int(11)  
,_date  datetime  

            )
BEGIN
                UPDATE  khev_Event
                SET     date =  _date 

                WHERE
                        eventId = _eventId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventLocation`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventLocation`(
                _eventId  int(11)  
,_location  varchar(50)  

            )
BEGIN
                UPDATE  khev_Event
                SET     location =  _location 

                WHERE
                        eventId = _eventId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventPhoto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventPhoto`(
                            _photoId  int(11)  
,_eventId  int(11)  
,_fileFullName  varchar(512)  
,_title  varchar(50)  

                  )
BEGIN
                UPDATE  khev_EventPhoto
                SET     eventId =  _eventId 
,fileFullName =  _fileFullName 
,title =  _title 

                WHERE
                        photoId = _photoId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventPhotoComment`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventPhotoComment`(
                            _photoCommentId  int(11)  
,_photoId  int(11)  
,_userId  int(11)  
,_commentText  text  
,_date  datetime  

                  )
BEGIN
                UPDATE  khev_EventPhotoComment
                SET     photoId =  _photoId 
,userId =  _userId 
,commentText =  _commentText 
,date =  _date 

                WHERE
                        photoCommentId = _photoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventPhotoCommentCommentText`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventPhotoCommentCommentText`(
                _photoCommentId  int(11)  
,_commentText  text  

            )
BEGIN
                UPDATE  khev_EventPhotoComment
                SET     commentText =  _commentText 

                WHERE
                        photoCommentId = _photoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventPhotoCommentDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventPhotoCommentDate`(
                _photoCommentId  int(11)  
,_date  datetime  

            )
BEGIN
                UPDATE  khev_EventPhotoComment
                SET     date =  _date 

                WHERE
                        photoCommentId = _photoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventPhotoCommentPhotoId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventPhotoCommentPhotoId`(
                _photoCommentId  int(11)  
,_photoId  int(11)  

            )
BEGIN
                UPDATE  khev_EventPhotoComment
                SET     photoId =  _photoId 

                WHERE
                        photoCommentId = _photoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventPhotoCommentUserId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventPhotoCommentUserId`(
                _photoCommentId  int(11)  
,_userId  int(11)  

            )
BEGIN
                UPDATE  khev_EventPhotoComment
                SET     userId =  _userId 

                WHERE
                        photoCommentId = _photoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventPhotoEventId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventPhotoEventId`(
                _photoId  int(11)  
,_eventId  int(11)  

            )
BEGIN
                UPDATE  khev_EventPhoto
                SET     eventId =  _eventId 

                WHERE
                        photoId = _photoId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventPhotoFileFullName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventPhotoFileFullName`(
                _photoId  int(11)  
,_fileFullName  varchar(512)  

            )
BEGIN
                UPDATE  khev_EventPhoto
                SET     fileFullName =  _fileFullName 

                WHERE
                        photoId = _photoId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventPhotoTitle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventPhotoTitle`(
                _photoId  int(11)  
,_title  varchar(50)  

            )
BEGIN
                UPDATE  khev_EventPhoto
                SET     title =  _title 

                WHERE
                        photoId = _photoId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventSummary`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventSummary`(
                _eventId  int(11)  
,_summary  text  

            )
BEGIN
                UPDATE  khev_Event
                SET     summary =  _summary 

                WHERE
                        eventId = _eventId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventTitle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventTitle`(
                _eventId  int(11)  
,_title  varchar(50)  

            )
BEGIN
                UPDATE  khev_Event
                SET     title =  _title 

                WHERE
                        eventId = _eventId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventVideo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventVideo`(
                            _videoId  int(11)  
,_eventId  int(11)  
,_fileFullName  varchar(512)  
,_title  varchar(50)  

                  )
BEGIN
                UPDATE  khev_EventVideo
                SET     eventId =  _eventId 
,fileFullName =  _fileFullName 
,title =  _title 

                WHERE
                        videoId = _videoId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventVideoComment`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventVideoComment`(
                            _videoCommentId  int(11)  
,_videoId  int(11)  
,_userId  int(11)  
,_commentText  text  
,_date  datetime  

                  )
BEGIN
                UPDATE  khev_EventVideoComment
                SET     videoId =  _videoId 
,userId =  _userId 
,commentText =  _commentText 
,date =  _date 

                WHERE
                        videoCommentId = _videoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventVideoCommentCommentText`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventVideoCommentCommentText`(
                _videoCommentId  int(11)  
,_commentText  text  

            )
BEGIN
                UPDATE  khev_EventVideoComment
                SET     commentText =  _commentText 

                WHERE
                        videoCommentId = _videoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventVideoCommentDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventVideoCommentDate`(
                _videoCommentId  int(11)  
,_date  datetime  

            )
BEGIN
                UPDATE  khev_EventVideoComment
                SET     date =  _date 

                WHERE
                        videoCommentId = _videoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventVideoCommentUserId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventVideoCommentUserId`(
                _videoCommentId  int(11)  
,_userId  int(11)  

            )
BEGIN
                UPDATE  khev_EventVideoComment
                SET     userId =  _userId 

                WHERE
                        videoCommentId = _videoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventVideoCommentVideoId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventVideoCommentVideoId`(
                _videoCommentId  int(11)  
,_videoId  int(11)  

            )
BEGIN
                UPDATE  khev_EventVideoComment
                SET     videoId =  _videoId 

                WHERE
                        videoCommentId = _videoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventVideoEventId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventVideoEventId`(
                _videoId  int(11)  
,_eventId  int(11)  

            )
BEGIN
                UPDATE  khev_EventVideo
                SET     eventId =  _eventId 

                WHERE
                        videoId = _videoId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventVideoFileFullName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventVideoFileFullName`(
                _videoId  int(11)  
,_fileFullName  varchar(512)  

            )
BEGIN
                UPDATE  khev_EventVideo
                SET     fileFullName =  _fileFullName 

                WHERE
                        videoId = _videoId;
            END$$

DROP PROCEDURE IF EXISTS `updateEventVideoTitle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEventVideoTitle`(
                _videoId  int(11)  
,_title  varchar(50)  

            )
BEGIN
                UPDATE  khev_EventVideo
                SET     title =  _title 

                WHERE
                        videoId = _videoId;
            END$$

DROP PROCEDURE IF EXISTS `updateExpense`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateExpense`(
                            _expenseId  int(11)  
,_eventId  int(11)  
,_title  varchar(50)  
,_amount  double  
,_category  enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Donation','Sport','Divers')  
,_billFileName  varchar(512)  
,_transactionDate  datetime  

                  )
BEGIN
                UPDATE  khev_Expense
                SET     eventId =  _eventId 
,title =  _title 
,amount =  _amount 
,category =  _category 
,billFileName =  _billFileName 
,transactionDate =  _transactionDate 

                WHERE
                        expenseId = _expenseId;
            END$$

DROP PROCEDURE IF EXISTS `updateExpenseAmount`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateExpenseAmount`(
                _expenseId  int(11)  
,_amount  double  

            )
BEGIN
                UPDATE  khev_Expense
                SET     amount =  _amount 

                WHERE
                        expenseId = _expenseId;
            END$$

DROP PROCEDURE IF EXISTS `updateExpenseBillFileName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateExpenseBillFileName`(
                _expenseId  int(11)  
,_billFileName  varchar(512)  

            )
BEGIN
                UPDATE  khev_Expense
                SET     billFileName =  _billFileName 

                WHERE
                        expenseId = _expenseId;
            END$$

DROP PROCEDURE IF EXISTS `updateExpenseCategory`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateExpenseCategory`(
                _expenseId  int(11)  
,_category  enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Donation','Sport','Divers')  

            )
BEGIN
                UPDATE  khev_Expense
                SET     category =  _category 

                WHERE
                        expenseId = _expenseId;
            END$$

DROP PROCEDURE IF EXISTS `updateExpenseEventId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateExpenseEventId`(
                _expenseId  int(11)  
,_eventId  int(11)  

            )
BEGIN
                UPDATE  khev_Expense
                SET     eventId =  _eventId 

                WHERE
                        expenseId = _expenseId;
            END$$

DROP PROCEDURE IF EXISTS `updateExpenseTitle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateExpenseTitle`(
                _expenseId  int(11)  
,_title  varchar(50)  

            )
BEGIN
                UPDATE  khev_Expense
                SET     title =  _title 

                WHERE
                        expenseId = _expenseId;
            END$$

DROP PROCEDURE IF EXISTS `updateExpenseTransactionDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateExpenseTransactionDate`(
                _expenseId  int(11)  
,_transactionDate  datetime  

            )
BEGIN
                UPDATE  khev_Expense
                SET     transactionDate =  _transactionDate 

                WHERE
                        expenseId = _expenseId;
            END$$

DROP PROCEDURE IF EXISTS `updateIncome`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateIncome`(
                            _incomeId  int(11)  
,_eventId  int(11)  
,_title  varchar(50)  
,_amount  double  
,_category  enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Donation','Sport','Divers')  
,_billFileName  varchar(512)  
,_transactionDate  datetime  

                  )
BEGIN
                UPDATE  khev_Income
                SET     eventId =  _eventId 
,title =  _title 
,amount =  _amount 
,category =  _category 
,billFileName =  _billFileName 
,transactionDate =  _transactionDate 

                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `updateIncomeAmount`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateIncomeAmount`(
                _incomeId  int(11)  
,_amount  double  

            )
BEGIN
                UPDATE  khev_Income
                SET     amount =  _amount 

                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `updateIncomeBillFileName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateIncomeBillFileName`(
                _incomeId  int(11)  
,_billFileName  varchar(512)  

            )
BEGIN
                UPDATE  khev_Income
                SET     billFileName =  _billFileName 

                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `updateIncomeCategory`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateIncomeCategory`(
                _incomeId  int(11)  
,_category  enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Donation','Sport','Divers')  

            )
BEGIN
                UPDATE  khev_Income
                SET     category =  _category 

                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `updateIncomeDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateIncomeDate`(
                _incomeId  int(11)  
,_date  datetime  

            )
BEGIN
                UPDATE  khev_Income
                SET     date =  _date 

                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `updateIncomeEventId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateIncomeEventId`(
                _incomeId  int(11)  
,_eventId  int(11)  

            )
BEGIN
                UPDATE  khev_Income
                SET     eventId =  _eventId 

                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `updateIncomeTitle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateIncomeTitle`(
                _incomeId  int(11)  
,_title  varchar(50)  

            )
BEGIN
                UPDATE  khev_Income
                SET     title =  _title 

                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `updateIncomeTransactionDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateIncomeTransactionDate`(
                _incomeId  int(11)  
,_transactionDate  datetime  

            )
BEGIN
                UPDATE  khev_Income
                SET     transactionDate =  _transactionDate 

                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `updateLogActivity`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateLogActivity`(
                            _activityId  int(11)  
,_userId  int(11)  
,_summary  text  
,_date  datetime  

                  )
BEGIN
                UPDATE  khev_LogActivity
                SET     userId =  _userId 
,summary =  _summary 
,date =  _date 

                WHERE
                        activityId = _activityId;
            END$$

DROP PROCEDURE IF EXISTS `updateLogActivityDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateLogActivityDate`(
                _activityId  int(11)  
,_date  datetime  

            )
BEGIN
                UPDATE  khev_LogActivity
                SET     date =  _date 

                WHERE
                        activityId = _activityId;
            END$$

DROP PROCEDURE IF EXISTS `updateLogActivitySummary`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateLogActivitySummary`(
                _activityId  int(11)  
,_summary  text  

            )
BEGIN
                UPDATE  khev_LogActivity
                SET     summary =  _summary 

                WHERE
                        activityId = _activityId;
            END$$

DROP PROCEDURE IF EXISTS `updateLogActivityUserId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateLogActivityUserId`(
                _activityId  int(11)  
,_userId  int(11)  

            )
BEGIN
                UPDATE  khev_LogActivity
                SET     userId =  _userId 

                WHERE
                        activityId = _activityId;
            END$$

DROP PROCEDURE IF EXISTS `updateMember`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMember`(
                            _memberId  int(11)  
,_gender  enum('Male','Female')  
,_name  varchar(50)  
,_lastName  varchar(50)  
,_email  varchar(100)  
,_phoneNumber  varchar(50)  
,_zipCode  varchar(10)  
,_city  varchar(50)  
,_address  varchar(256)  
,_position  varchar(50)  

                  )
BEGIN
                UPDATE  khev_Member
                SET     gender =  _gender 
,name =  _name 
,lastName =  _lastName 
,email =  _email 
,phoneNumber =  _phoneNumber 
,zipCode =  _zipCode 
,city =  _city 
,address =  _address 
,position =  _position 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberAddress`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberAddress`(
                _memberId  int(11)  
,_address  varchar(256)  

            )
BEGIN
                UPDATE  khev_Member
                SET     address =  _address 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberCity`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberCity`(
                _memberId  int(11)  
,_city  varchar(50)  

            )
BEGIN
                UPDATE  khev_Member
                SET     city =  _city 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberEmail`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberEmail`(
                _memberId  int(11)  
,_email  varchar(100)  

            )
BEGIN
                UPDATE  khev_Member
                SET     email =  _email 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberFee`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberFee`(
                            _memberFeeId  int(11)  
,_memberId  int(11)  
,_amount  double  
,_billFileName  varchar(512)  
,_transactionDate  datetime  

                  )
BEGIN
                UPDATE  khev_MemberFee
                SET     memberId =  _memberId 
,amount =  _amount 
,billFileName =  _billFileName 
,transactionDate =  _transactionDate 

                WHERE
                        memberFeeId = _memberFeeId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberFeeAmount`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberFeeAmount`(
                _memberFeeId  int(11)  
,_amount  double  

            )
BEGIN
                UPDATE  khev_MemberFee
                SET     amount =  _amount 

                WHERE
                        memberFeeId = _memberFeeId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberFeeBillFileName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberFeeBillFileName`(
                _memberFeeId  int(11)  
,_billFileName  varchar(512)  

            )
BEGIN
                UPDATE  khev_MemberFee
                SET     billFileName =  _billFileName 

                WHERE
                        memberFeeId = _memberFeeId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberFeeMemberId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberFeeMemberId`(
                _memberFeeId  int(11)  
,_memberId  int(11)  

            )
BEGIN
                UPDATE  khev_MemberFee
                SET     memberId =  _memberId 

                WHERE
                        memberFeeId = _memberFeeId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberFeeTransactionDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberFeeTransactionDate`(
                _memberFeeId  int(11)  
,_transactionDate  datetime  

            )
BEGIN
                UPDATE  khev_MemberFee
                SET     transactionDate =  _transactionDate 

                WHERE
                        memberFeeId = _memberFeeId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberGender`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberGender`(
                _memberId  int(11)  
,_gender  enum('Male','Female')  

            )
BEGIN
                UPDATE  khev_Member
                SET     gender =  _gender 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberLastName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberLastName`(
                _memberId  int(11)  
,_lastName  varchar(50)  

            )
BEGIN
                UPDATE  khev_Member
                SET     lastName =  _lastName 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberName`(
                _memberId  int(11)  
,_name  varchar(50)  

            )
BEGIN
                UPDATE  khev_Member
                SET     name =  _name 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberPhoneNumber`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberPhoneNumber`(
                _memberId  int(11)  
,_phoneNumber  varchar(50)  

            )
BEGIN
                UPDATE  khev_Member
                SET     phoneNumber =  _phoneNumber 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberPosition`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberPosition`(
                _memberId  int(11)  
,_position  varchar(50)  

            )
BEGIN
                UPDATE  khev_Member
                SET     position =  _position 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateMemberZipCode`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateMemberZipCode`(
                _memberId  int(11)  
,_zipCode  varchar(10)  

            )
BEGIN
                UPDATE  khev_Member
                SET     zipCode =  _zipCode 

                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `updateOfficeMember`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOfficeMember`(
                            _officeMemberId  int(11)  
,_memberId  int(11)  
,_position  enum('President','Secretary','ChiefCulture','ChiefSport','Treasurer')  

                  )
BEGIN
                UPDATE  khev_OfficeMember
                SET     memberId =  _memberId 
,position =  _position 

                WHERE
                        officeMemberId = _officeMemberId;
            END$$

DROP PROCEDURE IF EXISTS `updateOfficeMemberMemberId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOfficeMemberMemberId`(
                _officeMemberId  int(11)  
,_memberId  int(11)  

            )
BEGIN
                UPDATE  khev_OfficeMember
                SET     memberId =  _memberId 

                WHERE
                        officeMemberId = _officeMemberId;
            END$$

DROP PROCEDURE IF EXISTS `updateOfficeMemberPosition`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOfficeMemberPosition`(
                _officeMemberId  int(11)  
,_position  enum('President','Secretary','ChiefCulture','ChiefSport','Treasurer')  

            )
BEGIN
                UPDATE  khev_OfficeMember
                SET     position =  _position 

                WHERE
                        officeMemberId = _officeMemberId;
            END$$

DROP PROCEDURE IF EXISTS `updateOldExam`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOldExam`(
                            _examId  int(11)  
,_userId  int(11)  
,_subject  varchar(50)  
,_title  varchar(120)  
,_semester  varchar(10)  
,_date  datetime  

                  )
BEGIN
                UPDATE  khev_OldExam
                SET     userId =  _userId 
,subject =  _subject 
,title =  _title 
,semester =  _semester 
,date =  _date 

                WHERE
                        examId = _examId;
            END$$

DROP PROCEDURE IF EXISTS `updateOldExamDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOldExamDate`(
                _examId  int(11)  
,_date  datetime  

            )
BEGIN
                UPDATE  khev_OldExam
                SET     date =  _date 

                WHERE
                        examId = _examId;
            END$$

DROP PROCEDURE IF EXISTS `updateOldExamSemester`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOldExamSemester`(
                _examId  int(11)  
,_semester  varchar(10)  

            )
BEGIN
                UPDATE  khev_OldExam
                SET     semester =  _semester 

                WHERE
                        examId = _examId;
            END$$

DROP PROCEDURE IF EXISTS `updateOldExamSubject`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOldExamSubject`(
                _examId  int(11)  
,_subject  varchar(50)  

            )
BEGIN
                UPDATE  khev_OldExam
                SET     subject =  _subject 

                WHERE
                        examId = _examId;
            END$$

DROP PROCEDURE IF EXISTS `updateOldExamTitle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOldExamTitle`(
                _examId  int(11)  
,_title  varchar(120)  

            )
BEGIN
                UPDATE  khev_OldExam
                SET     title =  _title 

                WHERE
                        examId = _examId;
            END$$

DROP PROCEDURE IF EXISTS `updateOldExamUserId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOldExamUserId`(
                _examId  int(11)  
,_userId  int(11)  

            )
BEGIN
                UPDATE  khev_OldExam
                SET     userId =  _userId 

                WHERE
                        examId = _examId;
            END$$

DROP PROCEDURE IF EXISTS `updateProject`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateProject`(
                            _projectId  int(11)  
,_userId  int(11)  
,_title  varchar(50)  
,_summary  text  

                  )
BEGIN
                UPDATE  khev_Project
                SET     userId =  _userId 
,title =  _title 
,summary =  _summary 

                WHERE
                        projectId = _projectId;
            END$$

DROP PROCEDURE IF EXISTS `updateProjectSummary`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateProjectSummary`(
                _projectId  int(11)  
,_summary  text  

            )
BEGIN
                UPDATE  khev_Project
                SET     summary =  _summary 

                WHERE
                        projectId = _projectId;
            END$$

DROP PROCEDURE IF EXISTS `updateProjectTitle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateProjectTitle`(
                _projectId  int(11)  
,_title  varchar(50)  

            )
BEGIN
                UPDATE  khev_Project
                SET     title =  _title 

                WHERE
                        projectId = _projectId;
            END$$

DROP PROCEDURE IF EXISTS `updateProjectUserId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateProjectUserId`(
                _projectId  int(11)  
,_userId  int(11)  

            )
BEGIN
                UPDATE  khev_Project
                SET     userId =  _userId 

                WHERE
                        projectId = _projectId;
            END$$

DROP PROCEDURE IF EXISTS `updatePublication`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updatePublication`(
                            _publicationId  int(11)  
,_userId  int(11)  
,_category  enum('Info','Concert','Hiwi','Mourning')  
,_summary  text  
,_date  datetime  

                  )
BEGIN
                UPDATE  khev_Publication
                SET     userId =  _userId 
,category =  _category 
,summary =  _summary 
,date =  _date 

                WHERE
                        publicationId = _publicationId;
            END$$

DROP PROCEDURE IF EXISTS `updatePublicationCategory`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updatePublicationCategory`(
                _publicationId  int(11)  
,_category  enum('Info','Concert','Hiwi','Mourning')  

            )
BEGIN
                UPDATE  khev_Publication
                SET     category =  _category 

                WHERE
                        publicationId = _publicationId;
            END$$

DROP PROCEDURE IF EXISTS `updatePublicationDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updatePublicationDate`(
                _publicationId  int(11)  
,_date  datetime  

            )
BEGIN
                UPDATE  khev_Publication
                SET     date =  _date 

                WHERE
                        publicationId = _publicationId;
            END$$

DROP PROCEDURE IF EXISTS `updatePublicationSummary`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updatePublicationSummary`(
                _publicationId  int(11)  
,_summary  text  

            )
BEGIN
                UPDATE  khev_Publication
                SET     summary =  _summary 

                WHERE
                        publicationId = _publicationId;
            END$$

DROP PROCEDURE IF EXISTS `updatePublicationUserId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updatePublicationUserId`(
                _publicationId  int(11)  
,_userId  int(11)  

            )
BEGIN
                UPDATE  khev_Publication
                SET     userId =  _userId 

                WHERE
                        publicationId = _publicationId;
            END$$

DROP PROCEDURE IF EXISTS `updateRole`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRole`(
                            _roleId  int(11)  
,_name  varchar(50)  
,_description  varchar(120)  

                  )
BEGIN
                UPDATE  khev_Role
                SET     name =  _name 
,description =  _description 

                WHERE
                        roleId = _roleId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleAccessRight`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleAccessRight`(
                            _roleAccessId  int(11)  
,_roleId  int(11)  
,_entityType  varchar(50)  
,_createRight  bit(1)  
,_readRight  bit(1)  
,_editRight  bit(1)  
,_deleteRight  bit(1)  
,_fullRight  bit(1)  

                  )
BEGIN
                UPDATE  khev_RoleAccessRight
                SET     roleId =  _roleId 
,entityType =  _entityType 
,createRight =  _createRight 
,readRight =  _readRight 
,editRight =  _editRight 
,deleteRight =  _deleteRight 
,fullRight =  _fullRight 

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleAccessRightCreateRight`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleAccessRightCreateRight`(
                _roleAccessId  int(11)  
,_createRight  bit(1)  

            )
BEGIN
                UPDATE  khev_RoleAccessRight
                SET     createRight =  _createRight 

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleAccessRightDeleteRight`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleAccessRightDeleteRight`(
                _roleAccessId  int(11)  
,_deleteRight  bit(1)  

            )
BEGIN
                UPDATE  khev_RoleAccessRight
                SET     deleteRight =  _deleteRight 

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleAccessRightEditRight`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleAccessRightEditRight`(
                _roleAccessId  int(11)  
,_editRight  bit(1)  

            )
BEGIN
                UPDATE  khev_RoleAccessRight
                SET     editRight =  _editRight 

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleAccessRightEntityType`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleAccessRightEntityType`(
                _roleAccessId  int(11)  
,_entityType  varchar(50)  

            )
BEGIN
                UPDATE  khev_RoleAccessRight
                SET     entityType =  _entityType 

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleAccessRightFullRight`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleAccessRightFullRight`(
                _roleAccessId  int(11)  
,_fullRight  bit(1)  

            )
BEGIN
                UPDATE  khev_RoleAccessRight
                SET     fullRight =  _fullRight 

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleAccessRightReadRight`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleAccessRightReadRight`(
                _roleAccessId  int(11)  
,_readRight  bit(1)  

            )
BEGIN
                UPDATE  khev_RoleAccessRight
                SET     readRight =  _readRight 

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleAccessRightRoleId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleAccessRightRoleId`(
                _roleAccessId  int(11)  
,_roleId  int(11)  

            )
BEGIN
                UPDATE  khev_RoleAccessRight
                SET     roleId =  _roleId 

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleDescription`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleDescription`(
                _roleId  int(11)  
,_description  varchar(120)  

            )
BEGIN
                UPDATE  khev_Role
                SET     description =  _description 

                WHERE
                        roleId = _roleId;
            END$$

DROP PROCEDURE IF EXISTS `updateRoleName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRoleName`(
                _roleId  int(11)  
,_name  varchar(50)  

            )
BEGIN
                UPDATE  khev_Role
                SET     name =  _name 

                WHERE
                        roleId = _roleId;
            END$$

DROP PROCEDURE IF EXISTS `updateTutorial`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTutorial`(
                            _tutorialId  int(11)  
,_memberId  int(11)  
,_date  datetime  
,_subject  varchar(50)  
,_level  varchar(50)  
,_location  varchar(50)  
,_shedules  varchar(50)  
,_status  enum('Cancelled','Active')  

                  )
BEGIN
                UPDATE  khev_Tutorial
                SET     memberId =  _memberId 
,date =  _date 
,subject =  _subject 
,level =  _level 
,location =  _location 
,shedules =  _shedules 
,status =  _status 

                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `updateTutorialDate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTutorialDate`(
                _tutorialId  int(11)  
,_date  datetime  

            )
BEGIN
                UPDATE  khev_Tutorial
                SET     date =  _date 

                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `updateTutorialLevel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTutorialLevel`(
                _tutorialId  int(11)  
,_level  varchar(50)  

            )
BEGIN
                UPDATE  khev_Tutorial
                SET     level =  _level 

                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `updateTutorialLocation`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTutorialLocation`(
                _tutorialId  int(11)  
,_location  varchar(50)  

            )
BEGIN
                UPDATE  khev_Tutorial
                SET     location =  _location 

                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `updateTutorialMemberId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTutorialMemberId`(
                _tutorialId  int(11)  
,_memberId  int(11)  

            )
BEGIN
                UPDATE  khev_Tutorial
                SET     memberId =  _memberId 

                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `updateTutorialShedules`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTutorialShedules`(
                _tutorialId  int(11)  
,_shedules  varchar(50)  

            )
BEGIN
                UPDATE  khev_Tutorial
                SET     shedules =  _shedules 

                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `updateTutorialStatus`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTutorialStatus`(
                _tutorialId  int(11)  
,_status  enum('Cancelled','Active')  

            )
BEGIN
                UPDATE  khev_Tutorial
                SET     status =  _status 

                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `updateTutorialSubject`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTutorialSubject`(
                _tutorialId  int(11)  
,_subject  varchar(50)  

            )
BEGIN
                UPDATE  khev_Tutorial
                SET     subject =  _subject 

                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `updateUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUser`(
                            _userId  int(11)  
,_loginName  varchar(50)  
,_hashPassword  varchar(20)  
,_name  varchar(50)  
,_lastName  varchar(50)  
,_phoneNumber  varchar(50)  
,_email  varchar(100)  

                  )
BEGIN
                UPDATE  khev_User
                SET     loginName =  _loginName 
,hashPassword =  _hashPassword 
,name =  _name 
,lastName =  _lastName 
,phoneNumber =  _phoneNumber 
,email =  _email 

                WHERE
                        userId = _userId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserEmail`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserEmail`(
                _userId  int(11)  
,_email  varchar(100)  

            )
BEGIN
                UPDATE  khev_User
                SET     email =  _email 

                WHERE
                        userId = _userId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserHashPassword`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserHashPassword`(
                _userId  int(11)  
,_hashPassword  varchar(20)  

            )
BEGIN
                UPDATE  khev_User
                SET     hashPassword =  _hashPassword 

                WHERE
                        userId = _userId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserLastName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserLastName`(
                _userId  int(11)  
,_lastName  varchar(50)  

            )
BEGIN
                UPDATE  khev_User
                SET     lastName =  _lastName 

                WHERE
                        userId = _userId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserLoginName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserLoginName`(
                _userId  int(11)  
,_loginName  varchar(50)  

            )
BEGIN
                UPDATE  khev_User
                SET     loginName =  _loginName 

                WHERE
                        userId = _userId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserName`(
                _userId  int(11)  
,_name  varchar(50)  

            )
BEGIN
                UPDATE  khev_User
                SET     name =  _name 

                WHERE
                        userId = _userId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserPhoneNumber`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserPhoneNumber`(
                _userId  int(11)  
,_phoneNumber  varchar(50)  

            )
BEGIN
                UPDATE  khev_User
                SET     phoneNumber =  _phoneNumber 

                WHERE
                        userId = _userId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserProfile`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserProfile`(
                            _profileId  int(11)  
,_userId  int(11)  
,_gender  enum('Male','Female')  
,_photoFileName  varchar(256)  
,_street  varchar(50)  
,_zipCode  varchar(10)  
,_city  varchar(50)  
,_address  varchar(256)  
,_defalutLanguage  enum('DE','FR','EN')  

                  )
BEGIN
                UPDATE  khev_UserProfile
                SET     userId =  _userId 
,gender =  _gender 
,photoFileName =  _photoFileName 
,street =  _street 
,zipCode =  _zipCode 
,city =  _city 
,address =  _address 
,defalutLanguage =  _defalutLanguage 

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserProfileAddress`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserProfileAddress`(
                _profileId  int(11)  
,_address  varchar(256)  

            )
BEGIN
                UPDATE  khev_UserProfile
                SET     address =  _address 

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserProfileCity`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserProfileCity`(
                _profileId  int(11)  
,_city  varchar(50)  

            )
BEGIN
                UPDATE  khev_UserProfile
                SET     city =  _city 

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserProfileDefalutLanguage`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserProfileDefalutLanguage`(
                _profileId  int(11)  
,_defalutLanguage  enum('DE','FR','EN')  

            )
BEGIN
                UPDATE  khev_UserProfile
                SET     defalutLanguage =  _defalutLanguage 

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserProfileGender`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserProfileGender`(
                _profileId  int(11)  
,_gender  enum('Male','Female')  

            )
BEGIN
                UPDATE  khev_UserProfile
                SET     gender =  _gender 

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserProfilePhotoFileName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserProfilePhotoFileName`(
                _profileId  int(11)  
,_photoFileName  varchar(256)  

            )
BEGIN
                UPDATE  khev_UserProfile
                SET     photoFileName =  _photoFileName 

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserProfileStreet`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserProfileStreet`(
                _profileId  int(11)  
,_street  varchar(50)  

            )
BEGIN
                UPDATE  khev_UserProfile
                SET     street =  _street 

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserProfileUserId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserProfileUserId`(
                _profileId  int(11)  
,_userId  int(11)  

            )
BEGIN
                UPDATE  khev_UserProfile
                SET     userId =  _userId 

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `updateUserProfileZipCode`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserProfileZipCode`(
                _profileId  int(11)  
,_zipCode  varchar(10)  

            )
BEGIN
                UPDATE  khev_UserProfile
                SET     zipCode =  _zipCode 

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteran`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteran`(
                            _veteranId  int(11)  
,_gender  enum('Male','Female')  
,_name  varchar(50)  
,_lastName  varchar(50)  
,_email  varchar(100)  
,_phoneNumber  varchar(50)  
,_zipCode  varchar(10)  
,_city  varchar(50)  
,_address  varchar(256)  
,_position  varchar(50)  

                  )
BEGIN
                UPDATE  khev_Veteran
                SET     gender =  _gender 
,name =  _name 
,lastName =  _lastName 
,email =  _email 
,phoneNumber =  _phoneNumber 
,zipCode =  _zipCode 
,city =  _city 
,address =  _address 
,position =  _position 

                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteranAddress`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteranAddress`(
                _veteranId  int(11)  
,_address  varchar(256)  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     address =  _address 

                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteranCity`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteranCity`(
                _veteranId  int(11)  
,_city  varchar(50)  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     city =  _city 

                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteranEmail`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteranEmail`(
                _veteranId  int(11)  
,_email  varchar(100)  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     email =  _email 

                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteranGender`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteranGender`(
                _veteranId  int(11)  
,_gender  enum('Male','Female')  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     gender =  _gender 

                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteranLastName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteranLastName`(
                _veteranId  int(11)  
,_lastName  varchar(50)  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     lastName =  _lastName 

                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteranName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteranName`(
                _veteranId  int(11)  
,_name  varchar(50)  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     name =  _name 

                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteranPhoneNumber`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteranPhoneNumber`(
                _veteranId  int(11)  
,_phoneNumber  varchar(50)  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     phoneNumber =  _phoneNumber 

                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteranPosition`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteranPosition`(
                _veteranId  int(11)  
,_position  varchar(50)  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     position =  _position 

                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateVeteranZipCode`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVeteranZipCode`(
                _veteranId  int(11)  
,_zipCode  varchar(10)  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     zipCode =  _zipCode 

                WHERE
                        veteranId = _veteranId;
            END$$



--
-- Procedures
--
DROP 
  PROCEDURE IF EXISTS `selectAllMemberRegistrations` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `selectAllMemberRegistrations`() BEGIN 
SELECT 
  khev_MemberRegistration.* 
FROM 
  khev_MemberRegistration;
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewMemberRegistration` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `insertNewMemberRegistration`(
    _memberId int, 
    _code varchar(125), 
    _sentDate datetime, 
    _confirmationDate datetime
  ) BEGIN INSERT INTO khev_MemberRegistration (
    memberId, code, sentDate, confirmationDate
  ) 
VALUES 
  (
    _memberId, _code, _sentDate, _confirmationDate
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteMemberRegistration` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `deleteMemberRegistration`(_registrationId int) BEGIN 
DELETE FROM 
  khev_MemberRegistration 
WHERE 
  registrationId = _registrationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllMemberRegistrations` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `deleteAllMemberRegistrations`() BEGIN 
DELETE FROM 
  khev_MemberRegistration;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberRegistration` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `updateMemberRegistration`(
    _registrationId int, 
    _memberId int, 
    _code varchar(125), 
    _sentDate datetime, 
    _confirmationDate datetime
  ) BEGIN 
UPDATE 
  khev_MemberRegistration 
SET 
  memberId = _memberId, 
  code = _code, 
  sentDate = _sentDate, 
  confirmationDate = _confirmationDate 
WHERE 
  registrationId = _registrationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberRegistrationMemberId` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `updateMemberRegistrationMemberId`(
    _registrationId int, _memberId int
  ) BEGIN 
UPDATE 
  khev_MemberRegistration 
SET 
  memberId = _memberId 
WHERE 
  registrationId = _registrationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberRegistrationCode` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `updateMemberRegistrationCode`(
    _registrationId int, 
    _code varchar(125)
  ) BEGIN 
UPDATE 
  khev_MemberRegistration 
SET 
  code = _code 
WHERE 
  registrationId = _registrationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberRegistrationSentDate` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `updateMemberRegistrationSentDate`(
    _registrationId int, _sentDate datetime
  ) BEGIN 
UPDATE 
  khev_MemberRegistration 
SET 
  sentDate = _sentDate 
WHERE 
  registrationId = _registrationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberRegistrationConfirmationDate` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `updateMemberRegistrationConfirmationDate`(
    _registrationId int, _confirmationDate datetime
  ) BEGIN 
UPDATE 
  khev_MemberRegistration 
SET 
  confirmationDate = _confirmationDate 
WHERE 
  registrationId = _registrationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectMemberRegistrationDetails` $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `selectMemberRegistrationDetails`(_registrationId int) BEGIN 
SELECT 
  * 
FROM 
  khev_MemberRegistration 
WHERE 
  registrationId = _registrationId;
END$$



DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Conference`
--

DROP TABLE IF EXISTS `khev_Conference`;
CREATE TABLE `khev_Conference` (
  `conferenceId` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `summary` text,
  PRIMARY KEY (`conferenceId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Event`
--

DROP TABLE IF EXISTS `khev_Event`;
CREATE TABLE `khev_Event` (
  `eventId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `category` enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Divers','Football','Tournament') NOT NULL DEFAULT 'Divers',
  `date` datetime NOT NULL,
  `location` varchar(50) NOT NULL,
  `summary` text,
  PRIMARY KEY (`eventId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_EventBillSummary`
--

DROP TABLE IF EXISTS `khev_EventBillSummary`;
CREATE TABLE `khev_EventBillSummary` (
  `billSummaryId` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `summary` text NOT NULL,
  `summaryFileName` varchar(512) NOT NULL,
  PRIMARY KEY (`billSummaryId`),
  KEY `eventId` (`eventId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_EventPhoto`
--

DROP TABLE IF EXISTS `khev_EventPhoto`;
CREATE TABLE `khev_EventPhoto` (
  `photoId` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) NOT NULL,
  `fileFullName` varchar(512) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`photoId`),
  KEY `eventId` (`eventId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_EventPhotoComment`
--

DROP TABLE IF EXISTS `khev_EventPhotoComment`;
CREATE TABLE `khev_EventPhotoComment` (
  `photoCommentId` int(11) NOT NULL AUTO_INCREMENT,
  `photoId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `commentText` text,
  `date` datetime NOT NULL,
  PRIMARY KEY (`photoCommentId`),
  KEY `photoId` (`photoId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_EventVideo`
--

DROP TABLE IF EXISTS `khev_EventVideo`;
CREATE TABLE `khev_EventVideo` (
  `videoId` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) NOT NULL,
  `fileFullName` varchar(512) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`videoId`),
  KEY `eventId` (`eventId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_EventVideoComment`
--

DROP TABLE IF EXISTS `khev_EventVideoComment`;
CREATE TABLE `khev_EventVideoComment` (
  `videoCommentId` int(11) NOT NULL AUTO_INCREMENT,
  `videoId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `commentText` text,
  `date` datetime NOT NULL,
  PRIMARY KEY (`videoCommentId`),
  KEY `videoId` (`videoId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Expense`
--

DROP TABLE IF EXISTS `khev_Expense`;
CREATE TABLE `khev_Expense` (
  `expenseId` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `category` enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Donation','Sport','Divers') NOT NULL DEFAULT 'Divers',
  `billFileName` varchar(512) DEFAULT NULL,
  `transactionDate` datetime NOT NULL,
  PRIMARY KEY (`expenseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Income`
--

DROP TABLE IF EXISTS `khev_Income`;
CREATE TABLE `khev_Income` (
  `incomeId` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `category` enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Donation','Sport','Divers') NOT NULL DEFAULT 'Divers',
  `billFileName` varchar(512) DEFAULT NULL,
  `transactionDate` datetime NOT NULL,
  PRIMARY KEY (`incomeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_LogActivity`
--

DROP TABLE IF EXISTS `khev_LogActivity`;
CREATE TABLE `khev_LogActivity` (
  `activityId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `summary` text,
  `date` datetime NOT NULL,
  PRIMARY KEY (`activityId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Member`
--

DROP TABLE IF EXISTS `khev_Member`;
CREATE TABLE `khev_Member` (
  `memberId` int(11) NOT NULL AUTO_INCREMENT,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) DEFAULT '',
  `email` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `zipCode` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`memberId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_MemberFee`
--

DROP TABLE IF EXISTS `khev_MemberFee`;
CREATE TABLE `khev_MemberFee` (
  `memberFeeId` int(11) NOT NULL AUTO_INCREMENT,
  `memberId` int(11) NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `billFileName` varchar(512) DEFAULT NULL,
  `transactionDate` datetime NOT NULL,
  PRIMARY KEY (`memberFeeId`),
  KEY `memberId` (`memberId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_OfficeMember`
--

DROP TABLE IF EXISTS `khev_OfficeMember`;
CREATE TABLE `khev_OfficeMember` (
  `officeMemberId` int(11) NOT NULL AUTO_INCREMENT,
  `memberId` int(11) NOT NULL,
  `position` enum('President','Secretary','ChiefCulture','ChiefSport','Treasurer') NOT NULL,
  PRIMARY KEY (`officeMemberId`),
  KEY `memberId` (`memberId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_OldExam`
--

DROP TABLE IF EXISTS `khev_OldExam`;
CREATE TABLE `khev_OldExam` (
  `examId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `title` varchar(120) NOT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`examId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Project`
--

DROP TABLE IF EXISTS `khev_Project`;
CREATE TABLE `khev_Project` (
  `projectId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `summary` text,
  PRIMARY KEY (`projectId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Publication`
--

DROP TABLE IF EXISTS `khev_Publication`;
CREATE TABLE `khev_Publication` (
  `publicationId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `category` enum('Info','Concert','Hiwi','Mourning') NOT NULL,
  `summary` text,
  `date` datetime NOT NULL,
  PRIMARY KEY (`publicationId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Role`
--

DROP TABLE IF EXISTS `khev_Role`;
CREATE TABLE `khev_Role` (
  `roleId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`roleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_RoleAccessRight`
--

DROP TABLE IF EXISTS `khev_RoleAccessRight`;
CREATE TABLE `khev_RoleAccessRight` (
  `roleAccessId` int(11) NOT NULL AUTO_INCREMENT,
  `roleId` int(11) NOT NULL,
  `entityType` varchar(50) NOT NULL,
  `createRight` bit(1) NOT NULL DEFAULT b'0',
  `readRight` bit(1) NOT NULL DEFAULT b'0',
  `editRight` bit(1) NOT NULL DEFAULT b'0',
  `deleteRight` bit(1) NOT NULL DEFAULT b'0',
  `fullRight` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`roleAccessId`),
  KEY `roleId` (`roleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Tutorial`
--

DROP TABLE IF EXISTS `khev_Tutorial`;
CREATE TABLE `khev_Tutorial` (
  `tutorialId` int(11) NOT NULL AUTO_INCREMENT,
  `memberId` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `subject` varchar(50) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `shedules` varchar(50) DEFAULT NULL,
  `status` enum('Cancelled','Active') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`tutorialId`),
  KEY `memberId` (`memberId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_User`
--

DROP TABLE IF EXISTS `khev_User`;
CREATE TABLE `khev_User` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `loginName` varchar(50) NOT NULL,
  `hashPassword` varchar(20) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) DEFAULT '',
  `phoneNumber` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `loginName` (`loginName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_UserProfile`
--

DROP TABLE IF EXISTS `khev_UserProfile`;
CREATE TABLE `khev_UserProfile` (
  `profileId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `photoFileName` varchar(256) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `zipCode` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `defalutLanguage` enum('DE','FR','EN') NOT NULL DEFAULT 'FR',
  PRIMARY KEY (`profileId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khev_Veteran`
--

DROP TABLE IF EXISTS `khev_Veteran`;
CREATE TABLE `khev_Veteran` (
  `veteranId` int(11) NOT NULL AUTO_INCREMENT,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) DEFAULT '',
  `email` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `zipCode` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`veteranId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khev_EventBillSummary`
--
ALTER TABLE `khev_EventBillSummary`
  ADD CONSTRAINT `khev_eventbillsummary_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `khev_Event` (`eventId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_EventPhoto`
--
ALTER TABLE `khev_EventPhoto`
  ADD CONSTRAINT `khev_eventphoto_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `khev_Event` (`eventId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_EventPhotoComment`
--
ALTER TABLE `khev_EventPhotoComment`
  ADD CONSTRAINT `khev_eventphotocomment_ibfk_1` FOREIGN KEY (`photoId`) REFERENCES `khev_EventPhoto` (`photoId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `khev_eventphotocomment_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `khev_User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_EventVideo`
--
ALTER TABLE `khev_EventVideo`
  ADD CONSTRAINT `khev_eventvideo_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `khev_Event` (`eventId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_EventVideoComment`
--
ALTER TABLE `khev_EventVideoComment`
  ADD CONSTRAINT `khev_eventvideocomment_ibfk_1` FOREIGN KEY (`videoId`) REFERENCES `khev_EventVideo` (`videoId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `khev_eventvideocomment_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `khev_User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_LogActivity`
--
ALTER TABLE `khev_LogActivity`
  ADD CONSTRAINT `khev_logactivity_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `khev_User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_MemberFee`
--
ALTER TABLE `khev_MemberFee`
  ADD CONSTRAINT `khev_MemberFee_ibfk_1` FOREIGN KEY (`memberId`) REFERENCES `khev_Member` (`memberId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `khev_OfficeMember`
--
ALTER TABLE `khev_OfficeMember`
  ADD CONSTRAINT `khev_officemember_ibfk_1` FOREIGN KEY (`memberId`) REFERENCES `khev_Member` (`memberId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_OldExam`
--
ALTER TABLE `khev_OldExam`
  ADD CONSTRAINT `khev_oldexam_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `khev_User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_Project`
--
ALTER TABLE `khev_Project`
  ADD CONSTRAINT `khev_project_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `khev_User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_Publication`
--
ALTER TABLE `khev_Publication`
  ADD CONSTRAINT `khev_publication_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `khev_User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_RoleAccessRight`
--
ALTER TABLE `khev_RoleAccessRight`
  ADD CONSTRAINT `khev_roleaccessright_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `khev_Role` (`roleId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khev_Tutorial`
--
ALTER TABLE `khev_Tutorial`
  ADD CONSTRAINT `khev_tutorial_ibfk_1` FOREIGN KEY (`memberId`) REFERENCES `khev_Member` (`memberId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `khev_UserProfile`
--
ALTER TABLE `khev_UserProfile`
  ADD CONSTRAINT `khev_userprofile_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `khev_User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
