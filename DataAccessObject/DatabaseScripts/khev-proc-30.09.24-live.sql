-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2017 at 04:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12
SET 
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET 
  time_zone = "+00:00";
--
-- Database: `khev`
--
DELIMITER $$  
-- Procedures
--
DROP 
  PROCEDURE IF EXISTS `deleteAllConferences` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllConferences`() BEGIN 
DELETE FROM 
  khev_Conference;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllEventBillSummaries` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllEventBillSummaries`() BEGIN 
DELETE FROM 
  khev_EventBillSummary;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllEventPhotoComments` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllEventPhotoComments`() BEGIN 
DELETE FROM 
  khev_EventPhotoComment;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllEventPhotos` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllEventPhotos`() BEGIN 
DELETE FROM 
  khev_EventPhoto;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllEvents` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllEvents`() BEGIN 
DELETE FROM 
  khev_Event;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllEventVideoComments` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllEventVideoComments`() BEGIN 
DELETE FROM 
  khev_EventVideoComment;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllEventVideos` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllEventVideos`() BEGIN 
DELETE FROM 
  khev_EventVideo;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllExpenses` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllExpenses`() BEGIN 
DELETE FROM 
  khev_Expense;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllLogActivities` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllLogActivities`() BEGIN 
DELETE FROM 
  khev_LogActivity;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllMemberFees` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllMemberFees`() BEGIN 
DELETE FROM 
  khev_MemberFee;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllMembers` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllMembers`() BEGIN 
DELETE FROM 
  khev_Member;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllOfficeMembers` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllOfficeMembers`() BEGIN 
DELETE FROM 
  khev_OfficeMember;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllOldExams` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllOldExams`() BEGIN 
DELETE FROM 
  khev_OldExam;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllProjects` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllProjects`() BEGIN 
DELETE FROM 
  khev_Project;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllPublications` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllPublications`() BEGIN 
DELETE FROM 
  khev_Publication;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllRoleAccessRights` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllRoleAccessRights`() BEGIN 
DELETE FROM 
  khev_RoleAccessRight;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllRoles` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllRoles`() BEGIN 
DELETE FROM 
  khev_Role;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllTutorials` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllTutorials`() BEGIN 
DELETE FROM 
  khev_Tutorial;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllUserProfiles` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllUserProfiles`() BEGIN 
DELETE FROM 
  khev_UserProfile;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllUsers` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllUsers`() BEGIN 
DELETE FROM 
  khev_User;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllVeterans` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllVeterans`() BEGIN 
DELETE FROM 
  khev_Veteran;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteConference` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteConference`(
    _conferenceId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Conference 
WHERE 
  conferenceId = _conferenceId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteEvent` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteEvent`(
    _eventId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Event 
WHERE 
  eventId = _eventId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteEventBillSummary` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteEventBillSummary`(
    _billSummaryId int(11)
  ) BEGIN 
DELETE FROM 
  khev_EventBillSummary 
WHERE 
  billSummaryId = _billSummaryId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteEventPhoto` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteEventPhoto`(
    _photoId int(11)
  ) BEGIN 
DELETE FROM 
  khev_EventPhoto 
WHERE 
  photoId = _photoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteEventPhotoComment` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteEventPhotoComment`(
    _photoCommentId int(11)
  ) BEGIN 
DELETE FROM 
  khev_EventPhotoComment 
WHERE 
  photoCommentId = _photoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteEventVideo` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteEventVideo`(
    _videoId int(11)
  ) BEGIN 
DELETE FROM 
  khev_EventVideo 
WHERE 
  videoId = _videoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteEventVideoComment` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteEventVideoComment`(
    _videoCommentId int(11)
  ) BEGIN 
DELETE FROM 
  khev_EventVideoComment 
WHERE 
  videoCommentId = _videoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteExpense` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteExpense`(
    _expenseId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Expense 
WHERE 
  expenseId = _expenseId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteIncome` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteIncome`(
    _incomeId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Income 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteLogActivity` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteLogActivity`(
    _activityId int(11)
  ) BEGIN 
DELETE FROM 
  khev_LogActivity 
WHERE 
  activityId = _activityId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteMember` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteMember`(
    _memberId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Member 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteMemberFee` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteMemberFee`(
    _memberFeeId int(11)
  ) BEGIN 
DELETE FROM 
  khev_MemberFee 
WHERE 
  memberFeeId = _memberFeeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteOfficeMember` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteOfficeMember`(
    IN `_officeMemberId` INT(11)
  ) BEGIN 
DELETE FROM 
  khev_OfficeMember 
WHERE 
  officeMemberId = _officeMemberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteOldExam` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteOldExam`(
    _examId int(11)
  ) BEGIN 
DELETE FROM 
  khev_OldExam 
WHERE 
  examId = _examId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteProject` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteProject`(
    _projectId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Project 
WHERE 
  projectId = _projectId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deletePublication` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deletePublication`(
    _publicationId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Publication 
WHERE 
  publicationId = _publicationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteRole` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteRole`(
    _roleId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Role 
WHERE 
  roleId = _roleId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteRoleAccessRight` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteRoleAccessRight`(
    _roleAccessId int(11)
  ) BEGIN 
DELETE FROM 
  khev_RoleAccessRight 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteTutorial` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteTutorial`(
    _tutorialId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Tutorial 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteUser` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteUser`(
    _userId int(11)
  ) BEGIN 
DELETE FROM 
  khev_User 
WHERE 
  userId = _userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteUserProfile` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteUserProfile`(
    _profileId int(11)
  ) BEGIN 
DELETE FROM 
  khev_UserProfile 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteVeteran` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteVeteran`(
    _veteranId int(11)
  ) BEGIN 
DELETE FROM 
  khev_Veteran 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewConference` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewConference`(
    _date datetime, 
    _title varchar(50), 
    _location varchar(50), 
    _summary text
  ) BEGIN INSERT INTO khev_Conference (date, title, location, summary) 
VALUES 
  (
    _date, _title, _location, _summary
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewEvent` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewEvent`(
    _title varchar(50), 
    _category enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Divers', 
      'Football', 'Tournament'
    ), 
    _date datetime, 
    _location varchar(50), 
    _summary text
  ) BEGIN INSERT INTO khev_Event (
    title, category, date, location, summary
  ) 
VALUES 
  (
    _title, _category, _date, _location, 
    _summary
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewEventBillSummary` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewEventBillSummary`(
    _eventId int(11), 
    _title varchar(50), 
    _summary text, 
    _summaryFileName varchar(512)
  ) BEGIN INSERT INTO khev_EventBillSummary (
    eventId, title, summary, summaryFileName
  ) 
VALUES 
  (
    _eventId, _title, _summary, _summaryFileName
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewEventPhoto` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewEventPhoto`(
    _eventId int(11), 
    _fileFullName varchar(512), 
    _title varchar(50)
  ) BEGIN INSERT INTO khev_EventPhoto (eventId, fileFullName, title) 
VALUES 
  (_eventId, _fileFullName, _title);
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewEventPhotoComment` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewEventPhotoComment`(
    IN `_photoId` INT(11), 
    IN `_userId` INT(11), 
    IN `_commentText` TEXT, 
    IN `_date` DATETIME
  ) BEGIN INSERT INTO khev_EventPhotoComment (
    photoId, userId, commentText, date
  ) 
VALUES 
  (
    _photoId, _userId, _commentText, _date
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewEventVideo` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewEventVideo`(
    _eventId int(11), 
    _fileFullName varchar(512), 
    _title varchar(50)
  ) BEGIN INSERT INTO khev_EventVideo (eventId, fileFullName, title) 
VALUES 
  (_eventId, _fileFullName, _title);
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewEventVideoComment` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewEventVideoComment`(
    _videoId int(11), 
    _userId int(11), 
    _commentText text, 
    _date datetime
  ) BEGIN INSERT INTO khev_EventVideoComment (
    videoId, userId, commentText, date
  ) 
VALUES 
  (
    _videoId, _userId, _commentText, _date
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewExpense` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewExpense`(
    _eventId int(11), 
    _title varchar(50), 
    _amount double, 
    _category enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Donation', 
      'Sport', 'Divers'
    ), 
    _billFileName varchar(512), 
    _transactionDate datetime
  ) BEGIN INSERT INTO khev_Expense (
    eventId, title, amount, category, billFileName, 
    transactionDate
  ) 
VALUES 
  (
    _eventId, _title, _amount, _category, 
    _billFileName, _transactionDate
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewIncome` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewIncome`(
    _eventId int(11), 
    _title varchar(50), 
    _amount double, 
    _category enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Donation', 
      'Sport', 'Divers'
    ), 
    _billFileName varchar(512), 
    _transactionDate datetime
  ) BEGIN INSERT INTO khev_Income (
    eventId, title, amount, category, billFileName, 
    transactionDate
  ) 
VALUES 
  (
    _eventId, _title, _amount, _category, 
    _billFileName, _transactionDate
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewLogActivity` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewLogActivity`(
    _userId int(11), 
    _summary text, 
    _date datetime
  ) BEGIN INSERT INTO khev_LogActivity (userId, summary, date) 
VALUES 
  (_userId, _summary, _date);
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewMember` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewMember`(
    _gender enum('Male', 'Female'), 
    _name varchar(50), 
    _lastName varchar(50), 
    _email varchar(100), 
    _phoneNumber varchar(50), 
    _zipCode varchar(10), 
    _city varchar(50), 
    _address varchar(256), 
    _position varchar(50)
  ) BEGIN INSERT INTO khev_Member (
    gender, name, lastName, email, phoneNumber, 
    zipCode, city, address, position
  ) 
VALUES 
  (
    _gender, _name, _lastName, _email, 
    _phoneNumber, _zipCode, _city, _address, 
    _position
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewMemberFee` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewMemberFee`(
    _memberId int(11), 
    _amount double, 
    _billFileName varchar(512), 
    _transactionDate datetime
  ) BEGIN INSERT INTO khev_MemberFee (
    memberId, amount, billFileName, transactionDate
  ) 
VALUES 
  (
    _memberId, _amount, _billFileName, 
    _transactionDate
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewOfficeMember` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewOfficeMember`(
    _memberId int(11), 
    _position enum(
      'President', 'Secretary', 'ChiefCulture', 
      'ChiefSport', 'Treasurer'
    )
  ) BEGIN INSERT INTO khev_OfficeMember (memberId, position) 
VALUES 
  (_memberId, _position);
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewOldExam` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewOldExam`(
    _userId int(11), 
    _subject varchar(50), 
    _title varchar(120), 
    _semester varchar(10), 
    _date datetime, 
    _fileFullName varchar(512)
  ) BEGIN INSERT INTO khev_OldExam (
    userId, subject, title, semester, date, 
    fileFullName
  ) 
VALUES 
  (
    _userId, _subject, _title, _semester, 
    _date, _fileFullName
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewProject` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewProject`(
    _userId int(11), 
    _title varchar(50), 
    _summary text
  ) BEGIN INSERT INTO khev_Project (userId, title, summary) 
VALUES 
  (_userId, _title, _summary);
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewPublication` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewPublication`(
    _userId int(11), 
    _category enum(
      'Info', 'Concert', 'Hiwi', 'Mourning'
    ), 
    _summary text, 
    _date datetime
  ) BEGIN INSERT INTO khev_Publication (userId, category, summary, date) 
VALUES 
  (
    _userId, _category, _summary, _date
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewRole` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewRole`(
    _name varchar(50), 
    _description varchar(120)
  ) BEGIN INSERT INTO khev_Role (name, description) 
VALUES 
  (_name, _description);
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewRoleAccessRight` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewRoleAccessRight`(
    _roleId int(11), 
    _entityType varchar(50), 
    _createRight bit(1), 
    _readRight bit(1), 
    _editRight bit(1), 
    _deleteRight bit(1), 
    _fullRight bit(1)
  ) BEGIN INSERT INTO khev_RoleAccessRight (
    roleId, entityType, createRight, readRight, 
    editRight, deleteRight, fullRight
  ) 
VALUES 
  (
    _roleId, _entityType, _createRight, 
    _readRight, _editRight, _deleteRight, 
    _fullRight
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewTutorial` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewTutorial`(
    _memberId int(11), 
    _date datetime, 
    _subject varchar(50), 
    _level varchar(50), 
    _location varchar(50), 
    _shedules varchar(50), 
    _status enum('Cancelled', 'Active')
  ) BEGIN INSERT INTO khev_Tutorial (
    memberId, date, subject, level, location, 
    shedules, status
  ) 
VALUES 
  (
    _memberId, _date, _subject, _level, 
    _location, _shedules, _status
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewUser` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewUser`(
    _loginName varchar(50), 
    _hashPassword varchar(20), 
    _name varchar(50), 
    _lastName varchar(50), 
    _phoneNumber varchar(50), 
    _email varchar(100)
  ) BEGIN INSERT INTO khev_User (
    loginName, hashPassword, name, lastName, 
    phoneNumber, email
  ) 
VALUES 
  (
    _loginName, _hashPassword, _name, 
    _lastName, _phoneNumber, _email
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewUserProfile` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewUserProfile`(
    _userId int(11), 
    _gender enum('Male', 'Female'), 
    _photoFileName varchar(256), 
    _street varchar(50), 
    _zipCode varchar(10), 
    _city varchar(50), 
    _address varchar(256), 
    _defalutLanguage enum('DE', 'FR', 'EN')
  ) BEGIN INSERT INTO khev_UserProfile (
    userId, gender, photoFileName, street, 
    zipCode, city, address, defalutLanguage
  ) 
VALUES 
  (
    _userId, _gender, _photoFileName, 
    _street, _zipCode, _city, _address, 
    _defalutLanguage
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewVeteran` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewVeteran`(
    _gender enum('Male', 'Female'), 
    _name varchar(50), 
    _lastName varchar(50), 
    _email varchar(100), 
    _phoneNumber varchar(50), 
    _zipCode varchar(10), 
    _city varchar(50), 
    _address varchar(256), 
    _position varchar(50)
  ) BEGIN INSERT INTO khev_Veteran (
    gender, name, lastName, email, phoneNumber, 
    zipCode, city, address, position
  ) 
VALUES 
  (
    _gender, _name, _lastName, _email, 
    _phoneNumber, _zipCode, _city, _address, 
    _position
  );
SELECT 
  LAST_INSERT_ID();
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectActualFinancesStatus` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectActualFinancesStatus`() BEGIN 
SELECT 
  (
    SELECT 
      SUM(amount) 
    FROM 
      khev_Income
  ) As sumIncomes, 
  (
    SELECT 
      SUM(amount) 
    FROM 
      khev_Expense
  ) As sumExpenses, 
  (
    SELECT 
      SUM(amount) 
    FROM 
      khev_Income
  ) - (
    SELECT 
      SUM(amount) 
    FROM 
      khev_Expense
  ) AS actualAmount;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllConferences` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllConferences`() BEGIN 
SELECT 
  khev_Conference.* 
FROM 
  khev_Conference;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllEntitiesRecordsCount` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllEntitiesRecordsCount`() BEGIN 
SELECT 
  table_name AS tableName, 
  table_rows tableRows 
FROM 
  information_schema.tables 
WHERE 
  table_schema = 'khev';
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllEventBillSummaries` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllEventBillSummaries`() BEGIN 
SELECT 
  khev_EventBillSummary.* 
FROM 
  khev_EventBillSummary;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllEventPhotoComments` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllEventPhotoComments`() BEGIN 
SELECT 
  khev_EventPhotoComment.*, 
  khev_PhotoVideo.*, 
  khev_User.* 
FROM 
  khev_EventPhotoComment 
  LEFT JOIN khev_PhotoVideo ON khev_EventPhotoComment.photoId = khev_PhotoVideo.photoId 
  LEFT JOIN khev_User ON khev_EventPhotoComment.userId = khev_User.userId 
ORDER BY 
  khev_EventPhotoComment.date DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllEventPhotos` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllEventPhotos`() BEGIN 
SELECT 
  khev_EventPhoto.*, 
  khev_Event.title AS eventTitle 
FROM 
  khev_EventPhoto 
  LEFT JOIN khev_Event ON khev_Event.eventId = khev_EventPhoto.eventId 
ORDER BY 
  khev_Event.date DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllEvents` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllEvents`() BEGIN 
SELECT 
  khev_Event.*, 
  COUNT(khev_EventPhoto.photoId) AS numPhotos 
FROM 
  khev_Event 
  LEFT JOIN khev_EventPhoto ON khev_EventPhoto.eventId = khev_Event.eventId 
GROUP BY 
  khev_Event.eventId 
ORDER BY 
  khev_Event.date DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllEventVideoComments` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllEventVideoComments`() BEGIN 
SELECT 
  khev_EventVideoComment.*, 
  khev_EventVideo.*, 
  khev_User.* 
FROM 
  khev_EventVideoComment 
  LEFT JOIN khev_EventVideo ON khev_EventVideoComment.videoId = khev_EventVideo.videoId 
  LEFT JOIN khev_User ON khev_EventVideoComment.userId = khev_User.userId 
ORDER BY 
  khev_EventVideoComment.date DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllEventVideos` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllEventVideos`() BEGIN 
SELECT 
  khev_EventVideo.*, 
  khev_Event.* 
FROM 
  khev_EventVideo 
  LEFT JOIN khev_Event ON khev_EventVideo.eventId = khev_Event.eventId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllExpenses` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllExpenses`() BEGIN 
SELECT 
  khev_Expense.*, 
  khev_Event.title AS eventTitle 
FROM 
  khev_Expense 
  LEFT JOIN khev_Event ON khev_Event.eventId = khev_Expense.eventId 
ORDER BY 
  khev_Expense.transactionDate DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllExpensesByYear` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllExpensesByYear`() BEGIN 
SELECT 
  SUM(amount) AS sumExpenses, 
  MONTH(transactionDate) AS currentMonth, 
  YEAR(transactionDate) AS currentYear 
FROM 
  khev_Expense 
GROUP BY 
  MONTH(transactionDate), 
  YEAR(transactionDate) 
ORDER BY 
  YEAR(transactionDate), 
  MONTH(transactionDate);
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllIncomes` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllIncomes`() BEGIN 
SELECT 
  khev_Income.*, 
  khev_Event.title AS eventTitle 
FROM 
  khev_Income 
  LEFT JOIN khev_Event ON khev_Event.eventId = khev_Income.eventId 
ORDER BY 
  khev_Income.transactionDate DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllIncomesByYear` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllIncomesByYear`() BEGIN 
SELECT 
  SUM(amount) AS sumIncomes, 
  MONTH(transactionDate) AS currentMonth, 
  YEAR(transactionDate) AS currentYear 
FROM 
  khev_Income 
GROUP BY 
  MONTH(transactionDate), 
  YEAR(transactionDate) 
ORDER BY 
  YEAR(transactionDate), 
  MONTH(transactionDate);
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllLogActivities` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllLogActivities`() BEGIN 
SELECT 
  khev_LogActivity.*, 
  khev_User.* 
FROM 
  khev_LogActivity 
  LEFT JOIN khev_User ON khev_LogActivity.userId = khev_User.userId 
ORDER BY 
  khev_LogActivity.date DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllMemberFees` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllMemberFees`() BEGIN 
SELECT 
  khev_MemberFee.*, 
  khev_Member.* 
FROM 
  khev_MemberFee 
  LEFT JOIN khev_Member ON khev_MemberFee.memberId = khev_Member.memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllMembers` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllMembers`() BEGIN 
SELECT 
  khev_Member.* 
FROM 
  khev_Member 
ORDER BY 
  khev_Member.name ASC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllOfficeMembers` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllOfficeMembers`() BEGIN 
SELECT 
  khev_OfficeMember.*, 
  khev_Member.* 
FROM 
  khev_OfficeMember 
  LEFT JOIN khev_Member ON khev_OfficeMember.memberId = khev_Member.memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllOldExams` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllOldExams`() BEGIN 
SELECT 
  khev_OldExam.*, 
  khev_User.* 
FROM 
  khev_OldExam 
  LEFT JOIN khev_User ON khev_OldExam.userId = khev_User.userId 
ORDER BY 
  khev_OldExam.title ASC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllPhotosByEvent` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllPhotosByEvent`(
    IN `_eventId` INT(11)
  ) BEGIN 
SELECT 
  khev_EventPhoto.*, 
  khev_Event.title AS eventTitle 
FROM 
  khev_EventPhoto 
  LEFT JOIN khev_Event ON khev_Event.eventId = khev_EventPhoto.eventId 
WHERE 
  khev_EventPhoto.eventId = _eventId 
ORDER BY 
  khev_Event.date DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllProjects` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllProjects`() BEGIN 
SELECT 
  khev_Project.*, 
  khev_User.* 
FROM 
  khev_Project 
  LEFT JOIN khev_User ON khev_Project.userId = khev_User.userId 
ORDER BY 
  khev_Project.title ASC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllPublications` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllPublications`() BEGIN 
SELECT 
  khev_Publication.*, 
  khev_User.* 
FROM 
  khev_Publication 
  LEFT JOIN khev_User ON khev_Publication.userId = khev_User.userId 
ORDER BY 
  khev_Publication.date DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllRoleAccessRights` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllRoleAccessRights`() BEGIN 
SELECT 
  khev_RoleAccessRight.*, 
  khev_Role.* 
FROM 
  khev_RoleAccessRight 
  LEFT JOIN khev_Role ON khev_RoleAccessRight.roleId = khev_Role.roleId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllRoles` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllRoles`() BEGIN 
SELECT 
  khev_Role.* 
FROM 
  khev_Role;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllTutorials` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllTutorials`() BEGIN 
SELECT 
  khev_Tutorial.* 
FROM 
  khev_Tutorial;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllUserProfiles` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllUserProfiles`() BEGIN 
SELECT 
  khev_UserProfile.*, 
  khev_User.* 
FROM 
  khev_UserProfile 
  LEFT JOIN khev_User ON khev_UserProfile.userId = khev_User.userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllUsers` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllUsers`() BEGIN 
SELECT 
  khev_User.* 
FROM 
  khev_User 
ORDER BY 
  khev_User.name ASC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectAllVeterans` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllVeterans`() BEGIN 
SELECT 
  khev_Veteran.* 
FROM 
  khev_Veteran;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectConferenceDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectConferenceDetails`(
    _conferenceId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Conference 
WHERE 
  conferenceId = _conferenceId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectEventBillSummaryDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectEventBillSummaryDetails`(
    _billSummaryId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_EventBillSummary 
WHERE 
  billSummaryId = _billSummaryId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectEventDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectEventDetails`(
    _eventId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Event 
WHERE 
  eventId = _eventId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectEventPhotoCommentDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectEventPhotoCommentDetails`(
    _photoCommentId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_EventPhotoComment 
  LEFT JOIN khev_PhotoVideo ON khev_EventPhotoComment.photoId = khev_PhotoVideo.photoId 
  LEFT JOIN khev_User ON khev_EventPhotoComment.userId = khev_User.userId 
WHERE 
  photoCommentId = _photoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectEventPhotoDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectEventPhotoDetails`(
    _photoId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_EventPhoto 
  LEFT JOIN khev_Event ON khev_EventPhoto.eventId = khev_Event.eventId 
WHERE 
  photoId = _photoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectEventsByCategory` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectEventsByCategory`(
    IN `_category` enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Divers', 
      'Football', 'Tournament'
    )
  ) BEGIN 
SELECT 
  khev_Event.*, 
  COUNT(khev_EventPhoto.photoId) AS numPhotos 
FROM 
  khev_Event 
  LEFT JOIN khev_EventPhoto ON khev_EventPhoto.eventId = khev_Event.eventId 
WHERE 
  khev_Event.category = _category 
GROUP BY 
  khev_Event.eventId 
ORDER BY 
  khev_Event.date DESC;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectEventVideoCommentDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectEventVideoCommentDetails`(
    _videoCommentId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_EventVideoComment 
  LEFT JOIN khev_EventVideo ON khev_EventVideoComment.videoId = khev_EventVideo.videoId 
  LEFT JOIN khev_User ON khev_EventVideoComment.userId = khev_User.userId 
WHERE 
  videoCommentId = _videoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectEventVideoDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectEventVideoDetails`(
    _videoId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_EventVideo 
  LEFT JOIN khev_Event ON khev_EventVideo.eventId = khev_Event.eventId 
WHERE 
  videoId = _videoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectExpenseDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectExpenseDetails`(
    _expenseId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Expense 
WHERE 
  expenseId = _expenseId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectIncomeDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectIncomeDetails`(
    _incomeId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Income 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectLogActivityDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectLogActivityDetails`(
    _activityId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_LogActivity 
  LEFT JOIN khev_User ON khev_LogActivity.userId = khev_User.userId 
WHERE 
  activityId = _activityId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectMemberDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectMemberDetails`(
    _memberId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Member 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectMemberFeeDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectMemberFeeDetails`(
    _memberFeeId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_MemberFee 
  LEFT JOIN khev_Member ON khev_MemberFee.memberId = khev_Member.memberId 
WHERE 
  memberFeeId = _memberFeeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectOfficeMemberDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectOfficeMemberDetails`(
    _officeMemberId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_OfficeMember 
  LEFT JOIN khev_Member ON khev_OfficeMember.memberId = khev_Member.memberId 
WHERE 
  officeMemberId = _officeMemberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectOldExamDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectOldExamDetails`(
    _examId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_OldExam 
  LEFT JOIN khev_User ON khev_OldExam.userId = khev_User.userId 
WHERE 
  examId = _examId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectProjectDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectProjectDetails`(
    _projectId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Project 
  LEFT JOIN khev_User ON khev_Project.userId = khev_User.userId 
WHERE 
  projectId = _projectId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectPublicationDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectPublicationDetails`(
    _publicationId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Publication 
  LEFT JOIN khev_User ON khev_Publication.userId = khev_User.userId 
WHERE 
  publicationId = _publicationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectRoleAccessRightDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectRoleAccessRightDetails`(
    _roleAccessId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_RoleAccessRight 
  LEFT JOIN khev_Role ON khev_RoleAccessRight.roleId = khev_Role.roleId 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectRoleDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectRoleDetails`(
    _roleId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Role 
WHERE 
  roleId = _roleId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectTutorialDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectTutorialDetails`(
    _tutorialId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Tutorial 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectUserDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectUserDetails`(
    _userId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_User 
WHERE 
  userId = _userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectUserProfileDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectUserProfileDetails`(
    _profileId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_UserProfile 
  LEFT JOIN khev_User ON khev_UserProfile.userId = khev_User.userId 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `selectVeteranDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectVeteranDetails`(
    _veteranId int(11)
  ) BEGIN 
SELECT 
  * 
FROM 
  khev_Veteran 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateConference` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateConference`(
    _conferenceId int(11), 
    _date datetime, 
    _title varchar(50), 
    _location varchar(50), 
    _summary text
  ) BEGIN 
UPDATE 
  khev_Conference 
SET 
  date = _date, 
  title = _title, 
  location = _location, 
  summary = _summary 
WHERE 
  conferenceId = _conferenceId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateConferenceDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateConferenceDate`(
    _conferenceId int(11), 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_Conference 
SET 
  date = _date 
WHERE 
  conferenceId = _conferenceId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateConferenceLocation` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateConferenceLocation`(
    _conferenceId int(11), 
    _location varchar(50)
  ) BEGIN 
UPDATE 
  khev_Conference 
SET 
  location = _location 
WHERE 
  conferenceId = _conferenceId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateConferenceSummary` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateConferenceSummary`(
    _conferenceId int(11), 
    _summary text
  ) BEGIN 
UPDATE 
  khev_Conference 
SET 
  summary = _summary 
WHERE 
  conferenceId = _conferenceId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateConferenceTitle` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateConferenceTitle`(
    _conferenceId int(11), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_Conference 
SET 
  title = _title 
WHERE 
  conferenceId = _conferenceId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEvent` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEvent`(
    _eventId int(11), 
    _title varchar(50), 
    _category enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Divers', 
      'Football', 'Tournament'
    ), 
    _date datetime, 
    _location varchar(50), 
    _summary text
  ) BEGIN 
UPDATE 
  khev_Event 
SET 
  title = _title, 
  category = _category, 
  date = _date, 
  location = _location, 
  summary = _summary 
WHERE 
  eventId = _eventId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventBillSummary` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventBillSummary`(
    _billSummaryId int(11), 
    _eventId int(11), 
    _title varchar(50), 
    _summary text, 
    _summaryFileName varchar(512)
  ) BEGIN 
UPDATE 
  khev_EventBillSummary 
SET 
  eventId = _eventId, 
  title = _title, 
  summary = _summary, 
  summaryFileName = _summaryFileName 
WHERE 
  billSummaryId = _billSummaryId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventBillSummaryEventId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventBillSummaryEventId`(
    _billSummaryId int(11), 
    _eventId int(11)
  ) BEGIN 
UPDATE 
  khev_EventBillSummary 
SET 
  eventId = _eventId 
WHERE 
  billSummaryId = _billSummaryId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventBillSummarySummary` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventBillSummarySummary`(
    _billSummaryId int(11), 
    _summary text
  ) BEGIN 
UPDATE 
  khev_EventBillSummary 
SET 
  summary = _summary 
WHERE 
  billSummaryId = _billSummaryId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventBillSummarySummaryFileName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventBillSummarySummaryFileName`(
    _billSummaryId int(11), 
    _summaryFileName varchar(512)
  ) BEGIN 
UPDATE 
  khev_EventBillSummary 
SET 
  summaryFileName = _summaryFileName 
WHERE 
  billSummaryId = _billSummaryId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventBillSummaryTitle` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventBillSummaryTitle`(
    _billSummaryId int(11), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_EventBillSummary 
SET 
  title = _title 
WHERE 
  billSummaryId = _billSummaryId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventCategory` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventCategory`(
    _eventId int(11), 
    _category enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Divers', 
      'Football', 'Tournament'
    )
  ) BEGIN 
UPDATE 
  khev_Event 
SET 
  category = _category 
WHERE 
  eventId = _eventId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventDate`(
    _eventId int(11), 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_Event 
SET 
  date = _date 
WHERE 
  eventId = _eventId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventLocation` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventLocation`(
    _eventId int(11), 
    _location varchar(50)
  ) BEGIN 
UPDATE 
  khev_Event 
SET 
  location = _location 
WHERE 
  eventId = _eventId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventPhoto` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventPhoto`(
    _photoId int(11), 
    _eventId int(11), 
    _fileFullName varchar(512), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_EventPhoto 
SET 
  eventId = _eventId, 
  fileFullName = _fileFullName, 
  title = _title 
WHERE 
  photoId = _photoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventPhotoComment` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventPhotoComment`(
    _photoCommentId int(11), 
    _photoId int(11), 
    _userId int(11), 
    _commentText text, 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_EventPhotoComment 
SET 
  photoId = _photoId, 
  userId = _userId, 
  commentText = _commentText, 
  date = _date 
WHERE 
  photoCommentId = _photoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventPhotoCommentCommentText` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventPhotoCommentCommentText`(
    _photoCommentId int(11), 
    _commentText text
  ) BEGIN 
UPDATE 
  khev_EventPhotoComment 
SET 
  commentText = _commentText 
WHERE 
  photoCommentId = _photoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventPhotoCommentDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventPhotoCommentDate`(
    _photoCommentId int(11), 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_EventPhotoComment 
SET 
  date = _date 
WHERE 
  photoCommentId = _photoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventPhotoCommentPhotoId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventPhotoCommentPhotoId`(
    _photoCommentId int(11), 
    _photoId int(11)
  ) BEGIN 
UPDATE 
  khev_EventPhotoComment 
SET 
  photoId = _photoId 
WHERE 
  photoCommentId = _photoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventPhotoCommentUserId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventPhotoCommentUserId`(
    _photoCommentId int(11), 
    _userId int(11)
  ) BEGIN 
UPDATE 
  khev_EventPhotoComment 
SET 
  userId = _userId 
WHERE 
  photoCommentId = _photoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventPhotoEventId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventPhotoEventId`(
    _photoId int(11), 
    _eventId int(11)
  ) BEGIN 
UPDATE 
  khev_EventPhoto 
SET 
  eventId = _eventId 
WHERE 
  photoId = _photoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventPhotoFileFullName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventPhotoFileFullName`(
    _photoId int(11), 
    _fileFullName varchar(512)
  ) BEGIN 
UPDATE 
  khev_EventPhoto 
SET 
  fileFullName = _fileFullName 
WHERE 
  photoId = _photoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventPhotoTitle` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventPhotoTitle`(
    _photoId int(11), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_EventPhoto 
SET 
  title = _title 
WHERE 
  photoId = _photoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventSummary` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventSummary`(
    _eventId int(11), 
    _summary text
  ) BEGIN 
UPDATE 
  khev_Event 
SET 
  summary = _summary 
WHERE 
  eventId = _eventId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventTitle` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventTitle`(
    _eventId int(11), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_Event 
SET 
  title = _title 
WHERE 
  eventId = _eventId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventVideo` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventVideo`(
    _videoId int(11), 
    _eventId int(11), 
    _fileFullName varchar(512), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_EventVideo 
SET 
  eventId = _eventId, 
  fileFullName = _fileFullName, 
  title = _title 
WHERE 
  videoId = _videoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventVideoComment` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventVideoComment`(
    _videoCommentId int(11), 
    _videoId int(11), 
    _userId int(11), 
    _commentText text, 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_EventVideoComment 
SET 
  videoId = _videoId, 
  userId = _userId, 
  commentText = _commentText, 
  date = _date 
WHERE 
  videoCommentId = _videoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventVideoCommentCommentText` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventVideoCommentCommentText`(
    _videoCommentId int(11), 
    _commentText text
  ) BEGIN 
UPDATE 
  khev_EventVideoComment 
SET 
  commentText = _commentText 
WHERE 
  videoCommentId = _videoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventVideoCommentDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventVideoCommentDate`(
    _videoCommentId int(11), 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_EventVideoComment 
SET 
  date = _date 
WHERE 
  videoCommentId = _videoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventVideoCommentUserId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventVideoCommentUserId`(
    _videoCommentId int(11), 
    _userId int(11)
  ) BEGIN 
UPDATE 
  khev_EventVideoComment 
SET 
  userId = _userId 
WHERE 
  videoCommentId = _videoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventVideoCommentVideoId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventVideoCommentVideoId`(
    _videoCommentId int(11), 
    _videoId int(11)
  ) BEGIN 
UPDATE 
  khev_EventVideoComment 
SET 
  videoId = _videoId 
WHERE 
  videoCommentId = _videoCommentId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventVideoEventId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventVideoEventId`(
    _videoId int(11), 
    _eventId int(11)
  ) BEGIN 
UPDATE 
  khev_EventVideo 
SET 
  eventId = _eventId 
WHERE 
  videoId = _videoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventVideoFileFullName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventVideoFileFullName`(
    _videoId int(11), 
    _fileFullName varchar(512)
  ) BEGIN 
UPDATE 
  khev_EventVideo 
SET 
  fileFullName = _fileFullName 
WHERE 
  videoId = _videoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateEventVideoTitle` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateEventVideoTitle`(
    _videoId int(11), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_EventVideo 
SET 
  title = _title 
WHERE 
  videoId = _videoId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateExpense` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateExpense`(
    _expenseId int(11), 
    _eventId int(11), 
    _title varchar(50), 
    _amount double, 
    _category enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Donation', 
      'Sport', 'Divers'
    ), 
    _billFileName varchar(512), 
    _transactionDate datetime
  ) BEGIN 
UPDATE 
  khev_Expense 
SET 
  eventId = _eventId, 
  title = _title, 
  amount = _amount, 
  category = _category, 
  billFileName = _billFileName, 
  transactionDate = _transactionDate 
WHERE 
  expenseId = _expenseId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateExpenseAmount` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateExpenseAmount`(
    _expenseId int(11), 
    _amount double
  ) BEGIN 
UPDATE 
  khev_Expense 
SET 
  amount = _amount 
WHERE 
  expenseId = _expenseId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateExpenseBillFileName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateExpenseBillFileName`(
    _expenseId int(11), 
    _billFileName varchar(512)
  ) BEGIN 
UPDATE 
  khev_Expense 
SET 
  billFileName = _billFileName 
WHERE 
  expenseId = _expenseId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateExpenseCategory` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateExpenseCategory`(
    _expenseId int(11), 
    _category enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Donation', 
      'Sport', 'Divers'
    )
  ) BEGIN 
UPDATE 
  khev_Expense 
SET 
  category = _category 
WHERE 
  expenseId = _expenseId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateExpenseEventId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateExpenseEventId`(
    _expenseId int(11), 
    _eventId int(11)
  ) BEGIN 
UPDATE 
  khev_Expense 
SET 
  eventId = _eventId 
WHERE 
  expenseId = _expenseId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateExpenseTitle` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateExpenseTitle`(
    _expenseId int(11), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_Expense 
SET 
  title = _title 
WHERE 
  expenseId = _expenseId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateExpenseTransactionDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateExpenseTransactionDate`(
    _expenseId int(11), 
    _transactionDate datetime
  ) BEGIN 
UPDATE 
  khev_Expense 
SET 
  transactionDate = _transactionDate 
WHERE 
  expenseId = _expenseId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateIncome` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateIncome`(
    _incomeId int(11), 
    _eventId int(11), 
    _title varchar(50), 
    _amount double, 
    _category enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Donation', 
      'Sport', 'Divers'
    ), 
    _billFileName varchar(512), 
    _transactionDate datetime
  ) BEGIN 
UPDATE 
  khev_Income 
SET 
  eventId = _eventId, 
  title = _title, 
  amount = _amount, 
  category = _category, 
  billFileName = _billFileName, 
  transactionDate = _transactionDate 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateIncomeAmount` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateIncomeAmount`(
    _incomeId int(11), 
    _amount double
  ) BEGIN 
UPDATE 
  khev_Income 
SET 
  amount = _amount 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateIncomeBillFileName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateIncomeBillFileName`(
    _incomeId int(11), 
    _billFileName varchar(512)
  ) BEGIN 
UPDATE 
  khev_Income 
SET 
  billFileName = _billFileName 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateIncomeCategory` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateIncomeCategory`(
    _incomeId int(11), 
    _category enum(
      'CultureWeek', 'FirstSemesterParty', 
      'GalaNight', 'Gaduation', 'GrillParty', 
      'Challenge', 'Mourning', 'Donation', 
      'Sport', 'Divers'
    )
  ) BEGIN 
UPDATE 
  khev_Income 
SET 
  category = _category 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateIncomeDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateIncomeDate`(
    _incomeId int(11), 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_Income 
SET 
  date = _date 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateIncomeEventId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateIncomeEventId`(
    _incomeId int(11), 
    _eventId int(11)
  ) BEGIN 
UPDATE 
  khev_Income 
SET 
  eventId = _eventId 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateIncomeTitle` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateIncomeTitle`(
    _incomeId int(11), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_Income 
SET 
  title = _title 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateIncomeTransactionDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateIncomeTransactionDate`(
    _incomeId int(11), 
    _transactionDate datetime
  ) BEGIN 
UPDATE 
  khev_Income 
SET 
  transactionDate = _transactionDate 
WHERE 
  incomeId = _incomeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateLogActivity` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateLogActivity`(
    _activityId int(11), 
    _userId int(11), 
    _summary text, 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_LogActivity 
SET 
  userId = _userId, 
  summary = _summary, 
  date = _date 
WHERE 
  activityId = _activityId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateLogActivityDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateLogActivityDate`(
    _activityId int(11), 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_LogActivity 
SET 
  date = _date 
WHERE 
  activityId = _activityId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateLogActivitySummary` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateLogActivitySummary`(
    _activityId int(11), 
    _summary text
  ) BEGIN 
UPDATE 
  khev_LogActivity 
SET 
  summary = _summary 
WHERE 
  activityId = _activityId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateLogActivityUserId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateLogActivityUserId`(
    _activityId int(11), 
    _userId int(11)
  ) BEGIN 
UPDATE 
  khev_LogActivity 
SET 
  userId = _userId 
WHERE 
  activityId = _activityId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMember` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMember`(
    _memberId int(11), 
    _gender enum('Male', 'Female'), 
    _name varchar(50), 
    _lastName varchar(50), 
    _email varchar(100), 
    _phoneNumber varchar(50), 
    _zipCode varchar(10), 
    _city varchar(50), 
    _address varchar(256), 
    _position varchar(50)
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  gender = _gender, 
  name = _name, 
  lastName = _lastName, 
  email = _email, 
  phoneNumber = _phoneNumber, 
  zipCode = _zipCode, 
  city = _city, 
  address = _address, 
  position = _position 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberAddress` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberAddress`(
    _memberId int(11), 
    _address varchar(256)
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  address = _address 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberCity` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberCity`(
    _memberId int(11), 
    _city varchar(50)
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  city = _city 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberEmail` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberEmail`(
    _memberId int(11), 
    _email varchar(100)
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  email = _email 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberFee` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberFee`(
    _memberFeeId int(11), 
    _memberId int(11), 
    _amount double, 
    _billFileName varchar(512), 
    _transactionDate datetime
  ) BEGIN 
UPDATE 
  khev_MemberFee 
SET 
  memberId = _memberId, 
  amount = _amount, 
  billFileName = _billFileName, 
  transactionDate = _transactionDate 
WHERE 
  memberFeeId = _memberFeeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberFeeAmount` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberFeeAmount`(
    _memberFeeId int(11), 
    _amount double
  ) BEGIN 
UPDATE 
  khev_MemberFee 
SET 
  amount = _amount 
WHERE 
  memberFeeId = _memberFeeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberFeeBillFileName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberFeeBillFileName`(
    _memberFeeId int(11), 
    _billFileName varchar(512)
  ) BEGIN 
UPDATE 
  khev_MemberFee 
SET 
  billFileName = _billFileName 
WHERE 
  memberFeeId = _memberFeeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberFeeMemberId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberFeeMemberId`(
    _memberFeeId int(11), 
    _memberId int(11)
  ) BEGIN 
UPDATE 
  khev_MemberFee 
SET 
  memberId = _memberId 
WHERE 
  memberFeeId = _memberFeeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberFeeTransactionDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberFeeTransactionDate`(
    _memberFeeId int(11), 
    _transactionDate datetime
  ) BEGIN 
UPDATE 
  khev_MemberFee 
SET 
  transactionDate = _transactionDate 
WHERE 
  memberFeeId = _memberFeeId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberGender` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberGender`(
    _memberId int(11), 
    _gender enum('Male', 'Female')
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  gender = _gender 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberLastName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberLastName`(
    _memberId int(11), 
    _lastName varchar(50)
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  lastName = _lastName 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberName`(
    _memberId int(11), 
    _name varchar(50)
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  name = _name 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberPhoneNumber` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberPhoneNumber`(
    _memberId int(11), 
    _phoneNumber varchar(50)
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  phoneNumber = _phoneNumber 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberPosition` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberPosition`(
    _memberId int(11), 
    _position varchar(50)
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  position = _position 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberZipCode` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberZipCode`(
    _memberId int(11), 
    _zipCode varchar(10)
  ) BEGIN 
UPDATE 
  khev_Member 
SET 
  zipCode = _zipCode 
WHERE 
  memberId = _memberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOfficeMember` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOfficeMember`(
    _officeMemberId int(11), 
    _memberId int(11), 
    _position enum(
      'President', 'Secretary', 'ChiefCulture', 
      'ChiefSport', 'Treasurer'
    )
  ) BEGIN 
UPDATE 
  khev_OfficeMember 
SET 
  memberId = _memberId, 
  position = _position 
WHERE 
  officeMemberId = _officeMemberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOfficeMemberMemberId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOfficeMemberMemberId`(
    _officeMemberId int(11), 
    _memberId int(11)
  ) BEGIN 
UPDATE 
  khev_OfficeMember 
SET 
  memberId = _memberId 
WHERE 
  officeMemberId = _officeMemberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOfficeMemberPosition` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOfficeMemberPosition`(
    _officeMemberId int(11), 
    _position enum(
      'President', 'Secretary', 'ChiefCulture', 
      'ChiefSport', 'Treasurer'
    )
  ) BEGIN 
UPDATE 
  khev_OfficeMember 
SET 
  position = _position 
WHERE 
  officeMemberId = _officeMemberId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOldExam` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOldExam`(
    _examId int(11), 
    _userId int(11), 
    _subject varchar(50), 
    _title varchar(120), 
    _semester varchar(10), 
    _date datetime, 
    _fileFullName varchar(512)
  ) BEGIN 
UPDATE 
  khev_OldExam 
SET 
  userId = _userId, 
  subject = _subject, 
  title = _title, 
  semester = _semester, 
  date = _date, 
  fileFullName = _fileFullName 
WHERE 
  examId = _examId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOldExamDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOldExamDate`(
    _examId int(11), 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_OldExam 
SET 
  date = _date 
WHERE 
  examId = _examId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOldExamFileFullName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOldExamFileFullName`(
    _examId int(11), 
    _fileFullName varchar(512)
  ) BEGIN 
UPDATE 
  khev_OldExam 
SET 
  fileFullName = _fileFullName 
WHERE 
  examId = _examId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOldExamSemester` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOldExamSemester`(
    _examId int(11), 
    _semester varchar(10)
  ) BEGIN 
UPDATE 
  khev_OldExam 
SET 
  semester = _semester 
WHERE 
  examId = _examId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOldExamSubject` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOldExamSubject`(
    _examId int(11), 
    _subject varchar(50)
  ) BEGIN 
UPDATE 
  khev_OldExam 
SET 
  subject = _subject 
WHERE 
  examId = _examId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOldExamTitle` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOldExamTitle`(
    _examId int(11), 
    _title varchar(120)
  ) BEGIN 
UPDATE 
  khev_OldExam 
SET 
  title = _title 
WHERE 
  examId = _examId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateOldExamUserId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateOldExamUserId`(
    _examId int(11), 
    _userId int(11)
  ) BEGIN 
UPDATE 
  khev_OldExam 
SET 
  userId = _userId 
WHERE 
  examId = _examId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateProject` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateProject`(
    _projectId int(11), 
    _userId int(11), 
    _title varchar(50), 
    _summary text
  ) BEGIN 
UPDATE 
  khev_Project 
SET 
  userId = _userId, 
  title = _title, 
  summary = _summary 
WHERE 
  projectId = _projectId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateProjectSummary` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateProjectSummary`(
    _projectId int(11), 
    _summary text
  ) BEGIN 
UPDATE 
  khev_Project 
SET 
  summary = _summary 
WHERE 
  projectId = _projectId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateProjectTitle` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateProjectTitle`(
    _projectId int(11), 
    _title varchar(50)
  ) BEGIN 
UPDATE 
  khev_Project 
SET 
  title = _title 
WHERE 
  projectId = _projectId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateProjectUserId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateProjectUserId`(
    _projectId int(11), 
    _userId int(11)
  ) BEGIN 
UPDATE 
  khev_Project 
SET 
  userId = _userId 
WHERE 
  projectId = _projectId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updatePublication` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updatePublication`(
    _publicationId int(11), 
    _userId int(11), 
    _category enum(
      'Info', 'Concert', 'Hiwi', 'Mourning'
    ), 
    _summary text, 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_Publication 
SET 
  userId = _userId, 
  category = _category, 
  summary = _summary, 
  date = _date 
WHERE 
  publicationId = _publicationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updatePublicationCategory` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updatePublicationCategory`(
    _publicationId int(11), 
    _category enum(
      'Info', 'Concert', 'Hiwi', 'Mourning'
    )
  ) BEGIN 
UPDATE 
  khev_Publication 
SET 
  category = _category 
WHERE 
  publicationId = _publicationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updatePublicationDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updatePublicationDate`(
    _publicationId int(11), 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_Publication 
SET 
  date = _date 
WHERE 
  publicationId = _publicationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updatePublicationSummary` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updatePublicationSummary`(
    _publicationId int(11), 
    _summary text
  ) BEGIN 
UPDATE 
  khev_Publication 
SET 
  summary = _summary 
WHERE 
  publicationId = _publicationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updatePublicationUserId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updatePublicationUserId`(
    _publicationId int(11), 
    _userId int(11)
  ) BEGIN 
UPDATE 
  khev_Publication 
SET 
  userId = _userId 
WHERE 
  publicationId = _publicationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRole` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRole`(
    _roleId int(11), 
    _name varchar(50), 
    _description varchar(120)
  ) BEGIN 
UPDATE 
  khev_Role 
SET 
  name = _name, 
  description = _description 
WHERE 
  roleId = _roleId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleAccessRight` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleAccessRight`(
    _roleAccessId int(11), 
    _roleId int(11), 
    _entityType varchar(50), 
    _createRight bit(1), 
    _readRight bit(1), 
    _editRight bit(1), 
    _deleteRight bit(1), 
    _fullRight bit(1)
  ) BEGIN 
UPDATE 
  khev_RoleAccessRight 
SET 
  roleId = _roleId, 
  entityType = _entityType, 
  createRight = _createRight, 
  readRight = _readRight, 
  editRight = _editRight, 
  deleteRight = _deleteRight, 
  fullRight = _fullRight 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleAccessRightCreateRight` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleAccessRightCreateRight`(
    _roleAccessId int(11), 
    _createRight bit(1)
  ) BEGIN 
UPDATE 
  khev_RoleAccessRight 
SET 
  createRight = _createRight 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleAccessRightDeleteRight` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleAccessRightDeleteRight`(
    _roleAccessId int(11), 
    _deleteRight bit(1)
  ) BEGIN 
UPDATE 
  khev_RoleAccessRight 
SET 
  deleteRight = _deleteRight 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleAccessRightEditRight` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleAccessRightEditRight`(
    _roleAccessId int(11), 
    _editRight bit(1)
  ) BEGIN 
UPDATE 
  khev_RoleAccessRight 
SET 
  editRight = _editRight 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleAccessRightEntityType` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleAccessRightEntityType`(
    _roleAccessId int(11), 
    _entityType varchar(50)
  ) BEGIN 
UPDATE 
  khev_RoleAccessRight 
SET 
  entityType = _entityType 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleAccessRightFullRight` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleAccessRightFullRight`(
    _roleAccessId int(11), 
    _fullRight bit(1)
  ) BEGIN 
UPDATE 
  khev_RoleAccessRight 
SET 
  fullRight = _fullRight 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleAccessRightReadRight` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleAccessRightReadRight`(
    _roleAccessId int(11), 
    _readRight bit(1)
  ) BEGIN 
UPDATE 
  khev_RoleAccessRight 
SET 
  readRight = _readRight 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleAccessRightRoleId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleAccessRightRoleId`(
    _roleAccessId int(11), 
    _roleId int(11)
  ) BEGIN 
UPDATE 
  khev_RoleAccessRight 
SET 
  roleId = _roleId 
WHERE 
  roleAccessId = _roleAccessId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleDescription` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleDescription`(
    _roleId int(11), 
    _description varchar(120)
  ) BEGIN 
UPDATE 
  khev_Role 
SET 
  description = _description 
WHERE 
  roleId = _roleId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateRoleName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateRoleName`(
    _roleId int(11), 
    _name varchar(50)
  ) BEGIN 
UPDATE 
  khev_Role 
SET 
  name = _name 
WHERE 
  roleId = _roleId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateTutorial` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateTutorial`(
    _tutorialId int(11), 
    _memberId int(11), 
    _date datetime, 
    _subject varchar(50), 
    _level varchar(50), 
    _location varchar(50), 
    _shedules varchar(50), 
    _status enum('Cancelled', 'Active')
  ) BEGIN 
UPDATE 
  khev_Tutorial 
SET 
  memberId = _memberId, 
  date = _date, 
  subject = _subject, 
  level = _level, 
  location = _location, 
  shedules = _shedules, 
  status = _status 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateTutorialDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateTutorialDate`(
    _tutorialId int(11), 
    _date datetime
  ) BEGIN 
UPDATE 
  khev_Tutorial 
SET 
  date = _date 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateTutorialLevel` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateTutorialLevel`(
    _tutorialId int(11), 
    _level varchar(50)
  ) BEGIN 
UPDATE 
  khev_Tutorial 
SET 
  level = _level 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateTutorialLocation` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateTutorialLocation`(
    _tutorialId int(11), 
    _location varchar(50)
  ) BEGIN 
UPDATE 
  khev_Tutorial 
SET 
  location = _location 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateTutorialMemberId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateTutorialMemberId`(
    _tutorialId int(11), 
    _memberId int(11)
  ) BEGIN 
UPDATE 
  khev_Tutorial 
SET 
  memberId = _memberId 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateTutorialShedules` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateTutorialShedules`(
    _tutorialId int(11), 
    _shedules varchar(50)
  ) BEGIN 
UPDATE 
  khev_Tutorial 
SET 
  shedules = _shedules 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateTutorialStatus` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateTutorialStatus`(
    _tutorialId int(11), 
    _status enum('Cancelled', 'Active')
  ) BEGIN 
UPDATE 
  khev_Tutorial 
SET 
  status = _status 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateTutorialSubject` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateTutorialSubject`(
    _tutorialId int(11), 
    _subject varchar(50)
  ) BEGIN 
UPDATE 
  khev_Tutorial 
SET 
  subject = _subject 
WHERE 
  tutorialId = _tutorialId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUser` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUser`(
    _userId int(11), 
    _loginName varchar(50), 
    _hashPassword varchar(20), 
    _name varchar(50), 
    _lastName varchar(50), 
    _phoneNumber varchar(50), 
    _email varchar(100)
  ) BEGIN 
UPDATE 
  khev_User 
SET 
  loginName = _loginName, 
  hashPassword = _hashPassword, 
  name = _name, 
  lastName = _lastName, 
  phoneNumber = _phoneNumber, 
  email = _email 
WHERE 
  userId = _userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserEmail` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserEmail`(
    _userId int(11), 
    _email varchar(100)
  ) BEGIN 
UPDATE 
  khev_User 
SET 
  email = _email 
WHERE 
  userId = _userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserHashPassword` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserHashPassword`(
    _userId int(11), 
    _hashPassword varchar(20)
  ) BEGIN 
UPDATE 
  khev_User 
SET 
  hashPassword = _hashPassword 
WHERE 
  userId = _userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserLastName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserLastName`(
    _userId int(11), 
    _lastName varchar(50)
  ) BEGIN 
UPDATE 
  khev_User 
SET 
  lastName = _lastName 
WHERE 
  userId = _userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserLoginName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserLoginName`(
    _userId int(11), 
    _loginName varchar(50)
  ) BEGIN 
UPDATE 
  khev_User 
SET 
  loginName = _loginName 
WHERE 
  userId = _userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserName`(
    _userId int(11), 
    _name varchar(50)
  ) BEGIN 
UPDATE 
  khev_User 
SET 
  name = _name 
WHERE 
  userId = _userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserPhoneNumber` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserPhoneNumber`(
    _userId int(11), 
    _phoneNumber varchar(50)
  ) BEGIN 
UPDATE 
  khev_User 
SET 
  phoneNumber = _phoneNumber 
WHERE 
  userId = _userId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserProfile` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserProfile`(
    _profileId int(11), 
    _userId int(11), 
    _gender enum('Male', 'Female'), 
    _photoFileName varchar(256), 
    _street varchar(50), 
    _zipCode varchar(10), 
    _city varchar(50), 
    _address varchar(256), 
    _defalutLanguage enum('DE', 'FR', 'EN')
  ) BEGIN 
UPDATE 
  khev_UserProfile 
SET 
  userId = _userId, 
  gender = _gender, 
  photoFileName = _photoFileName, 
  street = _street, 
  zipCode = _zipCode, 
  city = _city, 
  address = _address, 
  defalutLanguage = _defalutLanguage 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserProfileAddress` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserProfileAddress`(
    _profileId int(11), 
    _address varchar(256)
  ) BEGIN 
UPDATE 
  khev_UserProfile 
SET 
  address = _address 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserProfileCity` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserProfileCity`(
    _profileId int(11), 
    _city varchar(50)
  ) BEGIN 
UPDATE 
  khev_UserProfile 
SET 
  city = _city 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserProfileDefalutLanguage` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserProfileDefalutLanguage`(
    _profileId int(11), 
    _defalutLanguage enum('DE', 'FR', 'EN')
  ) BEGIN 
UPDATE 
  khev_UserProfile 
SET 
  defalutLanguage = _defalutLanguage 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserProfileGender` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserProfileGender`(
    _profileId int(11), 
    _gender enum('Male', 'Female')
  ) BEGIN 
UPDATE 
  khev_UserProfile 
SET 
  gender = _gender 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserProfilePhotoFileName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserProfilePhotoFileName`(
    _profileId int(11), 
    _photoFileName varchar(256)
  ) BEGIN 
UPDATE 
  khev_UserProfile 
SET 
  photoFileName = _photoFileName 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserProfileStreet` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserProfileStreet`(
    _profileId int(11), 
    _street varchar(50)
  ) BEGIN 
UPDATE 
  khev_UserProfile 
SET 
  street = _street 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserProfileUserId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserProfileUserId`(
    _profileId int(11), 
    _userId int(11)
  ) BEGIN 
UPDATE 
  khev_UserProfile 
SET 
  userId = _userId 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateUserProfileZipCode` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateUserProfileZipCode`(
    _profileId int(11), 
    _zipCode varchar(10)
  ) BEGIN 
UPDATE 
  khev_UserProfile 
SET 
  zipCode = _zipCode 
WHERE 
  profileId = _profileId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteran` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteran`(
    _veteranId int(11), 
    _gender enum('Male', 'Female'), 
    _name varchar(50), 
    _lastName varchar(50), 
    _email varchar(100), 
    _phoneNumber varchar(50), 
    _zipCode varchar(10), 
    _city varchar(50), 
    _address varchar(256), 
    _position varchar(50)
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  gender = _gender, 
  name = _name, 
  lastName = _lastName, 
  email = _email, 
  phoneNumber = _phoneNumber, 
  zipCode = _zipCode, 
  city = _city, 
  address = _address, 
  position = _position 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteranAddress` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteranAddress`(
    _veteranId int(11), 
    _address varchar(256)
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  address = _address 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteranCity` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteranCity`(
    _veteranId int(11), 
    _city varchar(50)
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  city = _city 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteranEmail` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteranEmail`(
    _veteranId int(11), 
    _email varchar(100)
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  email = _email 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteranGender` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteranGender`(
    _veteranId int(11), 
    _gender enum('Male', 'Female')
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  gender = _gender 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteranLastName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteranLastName`(
    _veteranId int(11), 
    _lastName varchar(50)
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  lastName = _lastName 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteranName` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteranName`(
    _veteranId int(11), 
    _name varchar(50)
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  name = _name 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteranPhoneNumber` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteranPhoneNumber`(
    _veteranId int(11), 
    _phoneNumber varchar(50)
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  phoneNumber = _phoneNumber 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteranPosition` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteranPosition`(
    _veteranId int(11), 
    _position varchar(50)
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  position = _position 
WHERE 
  veteranId = _veteranId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateVeteranZipCode` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateVeteranZipCode`(
    _veteranId int(11), 
    _zipCode varchar(10)
  ) BEGIN 
UPDATE 
  khev_Veteran 
SET 
  zipCode = _zipCode 
WHERE 
  veteranId = _veteranId;
END$$ -- Table khev_MemberRegistration
--
-- Procedures
--
DROP 
  PROCEDURE IF EXISTS `selectAllMemberRegistrations` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectAllMemberRegistrations`() BEGIN 
SELECT 
  khev_MemberRegistration.* 
FROM 
  khev_MemberRegistration;
END$$ 
DROP 
  PROCEDURE IF EXISTS `insertNewMemberRegistration` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `insertNewMemberRegistration`(
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
  PROCEDURE IF EXISTS `deleteMemberRegistration` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteMemberRegistration`(_registrationId int) BEGIN 
DELETE FROM 
  khev_MemberRegistration 
WHERE 
  registrationId = _registrationId;
END$$ 
DROP 
  PROCEDURE IF EXISTS `deleteAllMemberRegistrations` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `deleteAllMemberRegistrations`() BEGIN 
DELETE FROM 
  khev_MemberRegistration;
END$$ 
DROP 
  PROCEDURE IF EXISTS `updateMemberRegistration` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberRegistration`(
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
  PROCEDURE IF EXISTS `updateMemberRegistrationMemberId` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberRegistrationMemberId`(
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
  PROCEDURE IF EXISTS `updateMemberRegistrationCode` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberRegistrationCode`(
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
  PROCEDURE IF EXISTS `updateMemberRegistrationSentDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberRegistrationSentDate`(
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
  PROCEDURE IF EXISTS `updateMemberRegistrationConfirmationDate` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberRegistrationConfirmationDate`(
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
  PROCEDURE IF EXISTS `selectMemberRegistrationDetails` $$ CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `selectMemberRegistrationDetails`(_registrationId int) BEGIN 
SELECT 
  * 
FROM 
  khev_MemberRegistration 
WHERE 
  registrationId = _registrationId;
END$$ 

DROP   PROCEDURE IF EXISTS `updateMemberRegistrationConfirmationDateFromMail` $$ 
CREATE DEFINER = `ccq9128cw_khev` @`%` PROCEDURE `updateMemberRegistrationConfirmationDateFromMail`(
    _registrationId int, 
    _confirmationDate datetime,
    _code varchar(125)
  ) BEGIN 
UPDATE 
  khev_MemberRegistration 
SET 
  confirmationDate = _confirmationDate 
WHERE 
  registrationId = _registrationId AND code = _code;
END$$ 

 
