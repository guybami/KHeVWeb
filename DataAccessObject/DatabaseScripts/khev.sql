-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2017 at 12:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

 
--
-- Database: `khev`
--
-- `kameruner_heilbronn_de`@`%` --> `root`@`localhost`


DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `deleteAllConferences`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllConferences`()
BEGIN
                DELETE FROM khev_Conference;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventBillSummaries`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllEventBillSummaries`()
BEGIN
                DELETE FROM khev_EventBillSummary;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventPhotoComments`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllEventPhotoComments`()
BEGIN
                DELETE FROM khev_EventPhotoComment;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventPhotos`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllEventPhotos`()
BEGIN
                DELETE FROM khev_EventPhoto;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEvents`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllEvents`()
BEGIN
                DELETE FROM khev_Event;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventVideoComments`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllEventVideoComments`()
BEGIN
                DELETE FROM khev_EventVideoComment;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllEventVideos`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllEventVideos`()
BEGIN
                DELETE FROM khev_EventVideo;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllExpenses`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllExpenses`()
BEGIN
                DELETE FROM khev_Expense;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllLogActivities`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllLogActivities`()
BEGIN
                DELETE FROM khev_LogActivity;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllMemberFees`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllMemberFees`()
BEGIN
                DELETE FROM khev_MemberFee;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllMembers`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllMembers`()
BEGIN
                DELETE FROM khev_Member;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllOfficeMembers`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllOfficeMembers`()
BEGIN
                DELETE FROM khev_OfficeMember;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllOldExams`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllOldExams`()
BEGIN
                DELETE FROM khev_OldExam;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllProjects`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllProjects`()
BEGIN
                DELETE FROM khev_Project;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllPublications`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllPublications`()
BEGIN
                DELETE FROM khev_Publication;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllRoleAccessRights`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllRoleAccessRights`()
BEGIN
                DELETE FROM khev_RoleAccessRight;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllRoles`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllRoles`()
BEGIN
                DELETE FROM khev_Role;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllTutorials`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllTutorials`()
BEGIN
                DELETE FROM khev_Tutorial;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllUserProfiles`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllUserProfiles`()
BEGIN
                DELETE FROM khev_UserProfile;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllUsers`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllUsers`()
BEGIN
                DELETE FROM khev_User;

            END$$

DROP PROCEDURE IF EXISTS `deleteAllVeterans`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteAllVeterans`()
BEGIN
                DELETE FROM khev_Veteran;

            END$$

DROP PROCEDURE IF EXISTS `deleteConference`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteConference`(_conferenceId  int(11)  
)
BEGIN

                DELETE FROM khev_Conference
                WHERE  conferenceId = _conferenceId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEvent`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteEvent`(_eventId  int(11)  
)
BEGIN

                DELETE FROM khev_Event
                WHERE  eventId = _eventId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventBillSummary`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteEventBillSummary`(_billSummaryId  int(11)  
)
BEGIN

                DELETE FROM khev_EventBillSummary
                WHERE  billSummaryId = _billSummaryId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventPhoto`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteEventPhoto`(_photoId  int(11)  
)
BEGIN

                DELETE FROM khev_EventPhoto
                WHERE  photoId = _photoId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventPhotoComment`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteEventPhotoComment`(_photoCommentId  int(11)  
)
BEGIN

                DELETE FROM khev_EventPhotoComment
                WHERE  photoCommentId = _photoCommentId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventVideo`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteEventVideo`(_videoId  int(11)  
)
BEGIN

                DELETE FROM khev_EventVideo
                WHERE  videoId = _videoId;

            END$$

DROP PROCEDURE IF EXISTS `deleteEventVideoComment`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteEventVideoComment`(_videoCommentId  int(11)  
)
BEGIN

                DELETE FROM khev_EventVideoComment
                WHERE  videoCommentId = _videoCommentId;

            END$$

DROP PROCEDURE IF EXISTS `deleteExpense`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteExpense`(_expenseId  int(11)  
)
BEGIN

                DELETE FROM khev_Expense
                WHERE  expenseId = _expenseId;

            END$$

DROP PROCEDURE IF EXISTS `deleteIncome`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteIncome`(_incomeId  int(11)  
)
BEGIN

                DELETE FROM khev_Income
                WHERE  incomeId = _incomeId;

            END$$

DROP PROCEDURE IF EXISTS `deleteLogActivity`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteLogActivity`(_activityId  int(11)  
)
BEGIN

                DELETE FROM khev_LogActivity
                WHERE  activityId = _activityId;

            END$$

DROP PROCEDURE IF EXISTS `deleteMember`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteMember`(_memberId  int(11)  
)
BEGIN

                DELETE FROM khev_Member
                WHERE  memberId = _memberId;

            END$$

DROP PROCEDURE IF EXISTS `deleteMemberFee`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteMemberFee`(_memberFeeId  int(11)  
)
BEGIN

                DELETE FROM khev_MemberFee
                WHERE  memberFeeId = _memberFeeId;

            END$$

DROP PROCEDURE IF EXISTS `deleteOfficeMember`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteOfficeMember`(IN `_officeMemberId` INT(11))
BEGIN

                DELETE FROM khev_OfficeMember
                WHERE  officeMemberId = _officeMemberId;

            END$$

DROP PROCEDURE IF EXISTS `deleteOldExam`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteOldExam`(_examId  int(11)  
)
BEGIN

                DELETE FROM khev_OldExam
                WHERE  examId = _examId;

            END$$

DROP PROCEDURE IF EXISTS `deleteProject`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteProject`(_projectId  int(11)  
)
BEGIN

                DELETE FROM khev_Project
                WHERE  projectId = _projectId;

            END$$

DROP PROCEDURE IF EXISTS `deletePublication`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deletePublication`(_publicationId  int(11)  
)
BEGIN

                DELETE FROM khev_Publication
                WHERE  publicationId = _publicationId;

            END$$

DROP PROCEDURE IF EXISTS `deleteRole`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteRole`(_roleId  int(11)  
)
BEGIN

                DELETE FROM khev_Role
                WHERE  roleId = _roleId;

            END$$

DROP PROCEDURE IF EXISTS `deleteRoleAccessRight`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteRoleAccessRight`(_roleAccessId  int(11)  
)
BEGIN

                DELETE FROM khev_RoleAccessRight
                WHERE  roleAccessId = _roleAccessId;

            END$$

DROP PROCEDURE IF EXISTS `deleteTutorial`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteTutorial`(_tutorialId  int(11)  
)
BEGIN

                DELETE FROM khev_Tutorial
                WHERE  tutorialId = _tutorialId;

            END$$

DROP PROCEDURE IF EXISTS `deleteUser`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteUser`(_userId  int(11)  
)
BEGIN

                DELETE FROM khev_User
                WHERE  userId = _userId;

            END$$

DROP PROCEDURE IF EXISTS `deleteUserProfile`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteUserProfile`(_profileId  int(11)  
)
BEGIN

                DELETE FROM khev_UserProfile
                WHERE  profileId = _profileId;

            END$$

DROP PROCEDURE IF EXISTS `deleteVeteran`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `deleteVeteran`(_veteranId  int(11)  
)
BEGIN

                DELETE FROM khev_Veteran
                WHERE  veteranId = _veteranId;

            END$$

DROP PROCEDURE IF EXISTS `insertNewConference`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewConference`(_date  datetime  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewEvent`(_title  varchar(50)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewEventBillSummary`(_eventId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewEventPhoto`(_eventId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewEventPhotoComment`(IN `_photoId` INT(11), IN `_userId` INT(11), IN `_commentText` TEXT, IN `_date` DATETIME)
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewEventVideo`(_eventId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewEventVideoComment`(_videoId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewExpense`(_eventId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewIncome`(_eventId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewLogActivity`(_userId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewMember`(_gender  enum('Male','Female')  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewMemberFee`(_memberId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewOfficeMember`(_memberId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewOldExam`(_userId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewProject`(_userId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewPublication`(_userId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewRole`(_name  varchar(50)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewRoleAccessRight`(_roleId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewTutorial`(_memberId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewUser`(_loginName  varchar(50)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewUserProfile`(_userId  int(11)  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `insertNewVeteran`(_gender  enum('Male','Female')  
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllConferences`()
BEGIN
                SELECT khev_Conference.*
                FROM khev_Conference    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEntitiesRecordsCount`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllEntitiesRecordsCount`()
BEGIN
    SELECT table_name AS tableName, table_rows tableRows 
	FROM information_schema.tables 
	WHERE  table_schema = 'khev';
	
END$$

DROP PROCEDURE IF EXISTS `selectAllEventBillSummaries`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllEventBillSummaries`()
BEGIN
                SELECT khev_EventBillSummary.*
                FROM khev_EventBillSummary    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEventPhotoComments`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllEventPhotoComments`()
BEGIN
                SELECT khev_EventPhotoComment.*,khev_PhotoVideo.*,khev_User.*
                FROM khev_EventPhotoComment   LEFT JOIN khev_PhotoVideo ON  khev_EventPhotoComment.photoId = khev_PhotoVideo.photoId  
 LEFT JOIN khev_User ON  khev_EventPhotoComment.userId = khev_User.userId  
   ORDER BY khev_EventPhotoComment.date  DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEventPhotos`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllEventPhotos`()
BEGIN
   SELECT khev_EventPhoto.*, khev_Event.title AS eventTitle
    FROM khev_EventPhoto 
	LEFT JOIN  khev_Event 
	ON  khev_Event.eventId =  khev_EventPhoto.eventId
	ORDER BY khev_Event.date  DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEvents`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllEvents`()
BEGIN
                SELECT khev_Event.*
                FROM khev_Event    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEventVideoComments`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllEventVideoComments`()
BEGIN
                SELECT khev_EventVideoComment.*,khev_EventVideo.*,khev_User.*
                FROM khev_EventVideoComment   LEFT JOIN khev_EventVideo ON  khev_EventVideoComment.videoId = khev_EventVideo.videoId  
 LEFT JOIN khev_User ON  khev_EventVideoComment.userId = khev_User.userId  
   ORDER BY khev_EventVideoComment.date  DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllEventVideos`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllEventVideos`()
BEGIN
                SELECT khev_EventVideo.*,khev_Event.*
                FROM khev_EventVideo   LEFT JOIN khev_Event ON  khev_EventVideo.eventId = khev_Event.eventId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllExpenses`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllExpenses`()
BEGIN
    SELECT khev_Expense.*, khev_Event.title AS eventTitle
    FROM khev_Expense 
	LEFT JOIN  khev_Event 
	ON  khev_Event.eventId =  khev_Expense.eventId
	ORDER BY khev_Expense.transactionDate  DESC;         
END$$

DROP PROCEDURE IF EXISTS `selectAllExpensesByYear`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllExpensesByYear`()
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllIncomes`()
BEGIN
    SELECT khev_Income.*, khev_Event.title AS eventTitle
    FROM khev_Income 
	LEFT JOIN  khev_Event 
	ON  khev_Event.eventId =  khev_Income.eventId
	ORDER BY khev_Income.transactionDate  DESC;
	
END$$

DROP PROCEDURE IF EXISTS `selectAllIncomesByYear`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllIncomesByYear`()
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllLogActivities`()
BEGIN
                SELECT khev_LogActivity.*,khev_User.*
                FROM khev_LogActivity   LEFT JOIN khev_User ON  khev_LogActivity.userId = khev_User.userId  
   ORDER BY khev_LogActivity.date  DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllMemberFees`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllMemberFees`()
BEGIN
                SELECT khev_MemberFee.*,khev_Member.*
                FROM khev_MemberFee   LEFT JOIN khev_Member ON  khev_MemberFee.memberId = khev_Member.memberId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllMembers`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllMembers`()
BEGIN
                SELECT khev_Member.*
                FROM khev_Member     ORDER BY khev_Member.name  ASC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllOfficeMembers`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllOfficeMembers`()
BEGIN
                SELECT khev_OfficeMember.*,khev_Member.*
                FROM khev_OfficeMember   LEFT JOIN khev_Member ON  khev_OfficeMember.memberId = khev_Member.memberId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllOldExams`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllOldExams`()
BEGIN
                SELECT khev_OldExam.*,khev_User.*
                FROM khev_OldExam   LEFT JOIN khev_User ON  khev_OldExam.userId = khev_User.userId  
   ORDER BY khev_OldExam.title  ASC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllPhotosByEvent`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllPhotosByEvent`(IN `_eventId` INT(11))
BEGIN
    SELECT khev_EventPhoto.*, khev_Event.title AS eventTitle
    FROM khev_EventPhoto 
    LEFT JOIN  khev_Event 
    ON  khev_Event.eventId =  khev_EventPhoto.eventId
    WHERE khev_EventPhoto.eventId = _eventId
    ORDER BY khev_Event.date  DESC;
	
END$$

DROP PROCEDURE IF EXISTS `selectAllProjects`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllProjects`()
BEGIN
                SELECT khev_Project.*,khev_User.*
                FROM khev_Project   LEFT JOIN khev_User ON  khev_Project.userId = khev_User.userId  
   ORDER BY khev_Project.title  ASC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllPublications`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllPublications`()
BEGIN
                SELECT khev_Publication.*,khev_User.*
                FROM khev_Publication   LEFT JOIN khev_User ON  khev_Publication.userId = khev_User.userId  
   ORDER BY khev_Publication.date DESC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllRoleAccessRights`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllRoleAccessRights`()
BEGIN
                SELECT khev_RoleAccessRight.*,khev_Role.*
                FROM khev_RoleAccessRight   LEFT JOIN khev_Role ON  khev_RoleAccessRight.roleId = khev_Role.roleId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllRoles`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllRoles`()
BEGIN
                SELECT khev_Role.*
                FROM khev_Role    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllTutorials`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllTutorials`()
BEGIN
                SELECT khev_Tutorial.*
                FROM khev_Tutorial    ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllUserProfiles`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllUserProfiles`()
BEGIN
                SELECT khev_UserProfile.*,khev_User.*
                FROM khev_UserProfile   LEFT JOIN khev_User ON  khev_UserProfile.userId = khev_User.userId  
  ;
            END$$

DROP PROCEDURE IF EXISTS `selectAllUsers`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllUsers`()
BEGIN
                SELECT khev_User.*
                FROM khev_User     ORDER BY khev_User.name  ASC;
            END$$

DROP PROCEDURE IF EXISTS `selectAllVeterans`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectAllVeterans`()
BEGIN
                SELECT khev_Veteran.*
                FROM khev_Veteran    ;
            END$$

DROP PROCEDURE IF EXISTS `selectConferenceDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectConferenceDetails`(_conferenceId  int(11)  
)
BEGIN
                SELECT * FROM khev_Conference
                
                WHERE
                        conferenceId = _conferenceId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventBillSummaryDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectEventBillSummaryDetails`(_billSummaryId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventBillSummary
                
                WHERE
                        billSummaryId = _billSummaryId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectEventDetails`(_eventId  int(11)  
)
BEGIN
                SELECT * FROM khev_Event
                
                WHERE
                        eventId = _eventId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventPhotoCommentDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectEventPhotoCommentDetails`(_photoCommentId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventPhotoComment
                 LEFT JOIN khev_PhotoVideo ON  khev_EventPhotoComment.photoId = khev_PhotoVideo.photoId  
 LEFT JOIN khev_User ON  khev_EventPhotoComment.userId = khev_User.userId  

                WHERE
                        photoCommentId = _photoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventPhotoDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectEventPhotoDetails`(_photoId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventPhoto
                 LEFT JOIN khev_Event ON  khev_EventPhoto.eventId = khev_Event.eventId  

                WHERE
                        photoId = _photoId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventVideoCommentDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectEventVideoCommentDetails`(_videoCommentId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventVideoComment
                 LEFT JOIN khev_EventVideo ON  khev_EventVideoComment.videoId = khev_EventVideo.videoId  
 LEFT JOIN khev_User ON  khev_EventVideoComment.userId = khev_User.userId  

                WHERE
                        videoCommentId = _videoCommentId;
            END$$

DROP PROCEDURE IF EXISTS `selectEventVideoDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectEventVideoDetails`(_videoId  int(11)  
)
BEGIN
                SELECT * FROM khev_EventVideo
                 LEFT JOIN khev_Event ON  khev_EventVideo.eventId = khev_Event.eventId  

                WHERE
                        videoId = _videoId;
            END$$

DROP PROCEDURE IF EXISTS `selectExpenseDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectExpenseDetails`(_expenseId  int(11)  
)
BEGIN
                SELECT * FROM khev_Expense
                
                WHERE
                        expenseId = _expenseId;
            END$$

DROP PROCEDURE IF EXISTS `selectIncomeDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectIncomeDetails`(_incomeId  int(11)  
)
BEGIN
                SELECT * FROM khev_Income
                
                WHERE
                        incomeId = _incomeId;
            END$$

DROP PROCEDURE IF EXISTS `selectLogActivityDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectLogActivityDetails`(_activityId  int(11)  
)
BEGIN
                SELECT * FROM khev_LogActivity
                 LEFT JOIN khev_User ON  khev_LogActivity.userId = khev_User.userId  

                WHERE
                        activityId = _activityId;
            END$$

DROP PROCEDURE IF EXISTS `selectMemberDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectMemberDetails`(_memberId  int(11)  
)
BEGIN
                SELECT * FROM khev_Member
                
                WHERE
                        memberId = _memberId;
            END$$

DROP PROCEDURE IF EXISTS `selectMemberFeeDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectMemberFeeDetails`(_memberFeeId  int(11)  
)
BEGIN
                SELECT * FROM khev_MemberFee
                 LEFT JOIN khev_Member ON  khev_MemberFee.memberId = khev_Member.memberId  

                WHERE
                        memberFeeId = _memberFeeId;
            END$$

DROP PROCEDURE IF EXISTS `selectOfficeMemberDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectOfficeMemberDetails`(_officeMemberId  int(11)  
)
BEGIN
                SELECT * FROM khev_OfficeMember
                 LEFT JOIN khev_Member ON  khev_OfficeMember.memberId = khev_Member.memberId  

                WHERE
                        officeMemberId = _officeMemberId;
            END$$

DROP PROCEDURE IF EXISTS `selectOldExamDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectOldExamDetails`(_examId  int(11)  
)
BEGIN
                SELECT * FROM khev_OldExam
                 LEFT JOIN khev_User ON  khev_OldExam.userId = khev_User.userId  

                WHERE
                        examId = _examId;
            END$$

DROP PROCEDURE IF EXISTS `selectProjectDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectProjectDetails`(_projectId  int(11)  
)
BEGIN
                SELECT * FROM khev_Project
                 LEFT JOIN khev_User ON  khev_Project.userId = khev_User.userId  

                WHERE
                        projectId = _projectId;
            END$$

DROP PROCEDURE IF EXISTS `selectPublicationDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectPublicationDetails`(_publicationId  int(11)  
)
BEGIN
                SELECT * FROM khev_Publication
                 LEFT JOIN khev_User ON  khev_Publication.userId = khev_User.userId  

                WHERE
                        publicationId = _publicationId;
            END$$

DROP PROCEDURE IF EXISTS `selectRoleAccessRightDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectRoleAccessRightDetails`(_roleAccessId  int(11)  
)
BEGIN
                SELECT * FROM khev_RoleAccessRight
                 LEFT JOIN khev_Role ON  khev_RoleAccessRight.roleId = khev_Role.roleId  

                WHERE
                        roleAccessId = _roleAccessId;
            END$$

DROP PROCEDURE IF EXISTS `selectRoleDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectRoleDetails`(_roleId  int(11)  
)
BEGIN
                SELECT * FROM khev_Role
                
                WHERE
                        roleId = _roleId;
            END$$

DROP PROCEDURE IF EXISTS `selectTutorialDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectTutorialDetails`(_tutorialId  int(11)  
)
BEGIN
                SELECT * FROM khev_Tutorial
                
                WHERE
                        tutorialId = _tutorialId;
            END$$

DROP PROCEDURE IF EXISTS `selectUserDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectUserDetails`(_userId  int(11)  
)
BEGIN
                SELECT * FROM khev_User
                
                WHERE
                        userId = _userId;
            END$$

DROP PROCEDURE IF EXISTS `selectUserProfileDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectUserProfileDetails`(_profileId  int(11)  
)
BEGIN
                SELECT * FROM khev_UserProfile
                 LEFT JOIN khev_User ON  khev_UserProfile.userId = khev_User.userId  

                WHERE
                        profileId = _profileId;
            END$$

DROP PROCEDURE IF EXISTS `selectVeteranDetails`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectVeteranDetails`(_veteranId  int(11)  
)
BEGIN
                SELECT * FROM khev_Veteran
                
                WHERE
                        veteranId = _veteranId;
            END$$

DROP PROCEDURE IF EXISTS `updateConference`$$
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateConference`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateConferenceDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateConferenceLocation`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateConferenceSummary`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateConferenceTitle`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEvent`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventBillSummary`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventBillSummaryEventId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventBillSummarySummary`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventBillSummarySummaryFileName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventBillSummaryTitle`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventCategory`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventLocation`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventPhoto`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventPhotoComment`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventPhotoCommentCommentText`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventPhotoCommentDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventPhotoCommentPhotoId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventPhotoCommentUserId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventPhotoEventId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventPhotoFileFullName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventPhotoTitle`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventSummary`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventTitle`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventVideo`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventVideoComment`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventVideoCommentCommentText`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventVideoCommentDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventVideoCommentUserId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventVideoCommentVideoId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventVideoEventId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventVideoFileFullName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateEventVideoTitle`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateExpense`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateExpenseAmount`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateExpenseBillFileName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateExpenseCategory`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateExpenseEventId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateExpenseTitle`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateExpenseTransactionDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateIncome`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateIncomeAmount`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateIncomeBillFileName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateIncomeCategory`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateIncomeDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateIncomeEventId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateIncomeTitle`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateIncomeTransactionDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateLogActivity`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateLogActivityDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateLogActivitySummary`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateLogActivityUserId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMember`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberAddress`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberCity`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberEmail`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberFee`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberFeeAmount`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberFeeBillFileName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberFeeMemberId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberFeeTransactionDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberGender`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberLastName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberPhoneNumber`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberPosition`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateMemberZipCode`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateOfficeMember`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateOfficeMemberMemberId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateOfficeMemberPosition`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateOldExam`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateOldExamDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateOldExamSemester`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateOldExamSubject`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateOldExamTitle`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateOldExamUserId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateProject`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateProjectSummary`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateProjectTitle`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateProjectUserId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updatePublication`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updatePublicationCategory`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updatePublicationDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updatePublicationSummary`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updatePublicationUserId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRole`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleAccessRight`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleAccessRightCreateRight`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleAccessRightDeleteRight`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleAccessRightEditRight`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleAccessRightEntityType`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleAccessRightFullRight`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleAccessRightReadRight`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleAccessRightRoleId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleDescription`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateRoleName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateTutorial`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateTutorialDate`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateTutorialLevel`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateTutorialLocation`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateTutorialMemberId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateTutorialShedules`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateTutorialStatus`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateTutorialSubject`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUser`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserEmail`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserHashPassword`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserLastName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserLoginName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserPhoneNumber`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserProfile`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserProfileAddress`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserProfileCity`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserProfileDefalutLanguage`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserProfileGender`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserProfilePhotoFileName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserProfileStreet`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserProfileUserId`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateUserProfileZipCode`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteran`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteranAddress`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteranCity`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteranEmail`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteranGender`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteranLastName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteranName`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteranPhoneNumber`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteranPosition`(
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
CREATE DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `updateVeteranZipCode`(
                _veteranId  int(11)  
,_zipCode  varchar(10)  

            )
BEGIN
                UPDATE  khev_Veteran
                SET     zipCode =  _zipCode 

                WHERE
                        veteranId = _veteranId;
            END$$



DROP PROCEDURE IF EXISTS selectEventsByCategory  $$
 
		
CREATE  DEFINER=`kameruner_heilbronn_de`@`%` PROCEDURE `selectEventsByCategory`(IN `_category` 
     enum('CultureWeek','FirstSemesterParty','GalaNight','Gaduation','GrillParty','Challenge','Mourning','Divers','Football','Tournament')  )
BEGIN
    SELECT khev_Event.*,
    COUNT(khev_EventPhoto.photoId) AS numPhotos
    FROM khev_Event    
    LEFT JOIN khev_EventPhoto
    ON khev_EventPhoto.eventId = khev_Event.eventId
    WHERE khev_Event.category = _category
    GROUP BY khev_Event.eventId
    ORDER BY khev_Event.date DESC;
                
	
END$$
 





DELIMITER ;
 
  
