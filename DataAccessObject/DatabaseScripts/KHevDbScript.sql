
-- Script to create database tables
-- Last changed: 04.03.2017 
-- Author: Guy Bami 
-- comment: khev means Kameruner Heilbronner eV
-- update table OldExam 
    -- add field fileFullName VARCHAR(512)  NOT NULL,

-- DROP DATABASE IF EXISTS khev;

CREATE DATABASE IF NOT EXISTS khev;

USE khev;


--
-- Table structure for table khev_Member
--

CREATE TABLE IF NOT EXISTS khev_Member (
	memberId INT NOT NULL AUTO_INCREMENT,
	gender ENUM('Male', 'Female') NOT NULL DEFAULT 'Male',
    name VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NULL DEFAULT '',
	email VARCHAR(100)  NULL,
    phoneNumber VARCHAR(50) NOT NULL,
    zipCode VARCHAR(10) NULL,
    city VARCHAR(50)  NULL,
    address VARCHAR(256)  NULL,
	position VARCHAR(50)  NULL,
    PRIMARY KEY (memberId)
) ENGINE=InnoDB;


--
-- Table structure for table khev_OfficeMember
--

CREATE TABLE IF NOT EXISTS khev_OfficeMember (
  officeMemberId INT NOT NULL AUTO_INCREMENT,
  memberId INT NOT NULL,
  position ENUM('President', 'Secretary', 'ChiefCulture', 'ChiefSport', 'Treasurer') NOT NULL,
  PRIMARY KEY (officeMemberId),
  FOREIGN KEY (memberId) REFERENCES khev_Member(memberId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;

--
-- Table structure for table khev_User
--

CREATE TABLE IF NOT EXISTS khev_User (
    userId INT NOT NULL AUTO_INCREMENT,
    loginName VARCHAR(50) NOT NULL,
	hashPassword VARCHAR(20) NULL,
    name VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NULL DEFAULT '',
    phoneNumber VARCHAR(50) NULL,
	email VARCHAR(100)  NOT NULL,
    PRIMARY KEY (userId),
    UNIQUE(loginName)
) ENGINE=InnoDB;


--
-- Table structure for table khev_UserProfile
--

CREATE TABLE IF NOT EXISTS khev_UserProfile (
    profileId INT NOT NULL AUTO_INCREMENT,
	userId INT NOT NULL,
	gender ENUM('Male', 'Female') NOT NULL DEFAULT 'Male',
	photoFileName VARCHAR(256) NULL,
	street VARCHAR(50)  NULL,
	zipCode VARCHAR(10) NULL,
    city VARCHAR(50)  NULL,
    address VARCHAR(256)  NULL,
    defalutLanguage ENUM('DE', 'FR', 'EN') NOT NULL DEFAULT 'FR',
    PRIMARY KEY (profileId),
	FOREIGN KEY (userId) REFERENCES khev_User(userId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;

--
-- Table structure for table khev_OldExams
--

CREATE TABLE IF NOT EXISTS khev_OldExam (
  examId INT NOT NULL AUTO_INCREMENT,
  userId INT NOT NULL,
  subject VARCHAR(50)  NULL,
  title VARCHAR(120)  NOT NULL,
  semester VARCHAR(10)  NULL,
  date DATETIME  NULL,
  fileFullName VARCHAR(512)  NOT NULL,
  PRIMARY KEY (examId),
  FOREIGN KEY (userId) REFERENCES khev_User(userId) ON UPDATE CASCADE ON DELETE NO ACTION
) ENGINE=InnoDB;


--
-- Table structure for table khev_Event  
--

CREATE TABLE IF NOT EXISTS khev_Event (
  eventId INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(50)  NOT NULL,
  category ENUM('CultureWeek', 'FirstSemesterParty', 'GalaNight', 'Football', 'Tournament',
	'Gaduation', 'GrillParty', 'Challenge', 'Mourning', 'Divers') NOT NULL DEFAULT 'Divers',
  date datetime  NOT NULL,
  location VARCHAR(50)  NOT NULL,
  summary TEXT  NOT NULL,
  PRIMARY KEY (eventId)
) ENGINE=InnoDB;


--
-- Table structure for table khev_EventBillSummary  
--

CREATE TABLE IF NOT EXISTS khev_EventBillSummary (
  billSummaryId INT NOT NULL AUTO_INCREMENT,
  eventId INT NOT NULL,
  title VARCHAR(50)  NOT NULL,
  summary TEXT  NOT NULL,
  summaryFileName VARCHAR(512)  NOT NULL,
  PRIMARY KEY (billSummaryId),
  FOREIGN KEY (eventId) REFERENCES khev_Event(eventId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;


--
-- Table structure for table khev_EventPhoto  - 
--

CREATE TABLE IF NOT EXISTS khev_EventPhoto (
  photoId INT NOT NULL AUTO_INCREMENT,
  eventId INT NOT NULL,
  fileFullName VARCHAR(512)  NOT NULL,
  title VARCHAR(50)  NULL,
  PRIMARY KEY (photoId),
  FOREIGN KEY (eventId) REFERENCES khev_Event(eventId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;


--
-- Table structure for table khev_EventPhotoComment  - 
--

CREATE TABLE IF NOT EXISTS khev_EventPhotoComment (
  photoCommentId INT NOT NULL AUTO_INCREMENT,
  photoId INT NOT NULL,
  userId INT NOT NULL,
  commentText TEXT  NULL,
  date DATETIME NOT  NULL,
  PRIMARY KEY (photoCommentId),
  FOREIGN KEY (photoId) REFERENCES khev_EventPhoto(photoId) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (userId) REFERENCES khev_User(userId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;


--
-- Table structure for table khev_EventPhoto  - 
--

CREATE TABLE IF NOT EXISTS khev_EventVideo (
  videoId INT NOT NULL AUTO_INCREMENT,
  eventId INT NOT NULL,
  fileFullName VARCHAR(512)  NOT NULL,
  title VARCHAR(50)  NULL,
  PRIMARY KEY (videoId),
  FOREIGN KEY (eventId) REFERENCES khev_Event(eventId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;


--
-- Table structure for table khev_EventPhotoComment  - 
--

CREATE TABLE IF NOT EXISTS khev_EventVideoComment (
  videoCommentId INT NOT NULL AUTO_INCREMENT,
  videoId INT NOT NULL,
  userId INT NOT NULL,
  commentText TEXT  NULL,
  date DATETIME NOT  NULL,
  PRIMARY KEY (videoCommentId),
  FOREIGN KEY (videoId) REFERENCES khev_EventVideo(videoId) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (userId) REFERENCES khev_User(userId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;


--
-- Table structure for table khev_Publication
--

CREATE TABLE IF NOT EXISTS khev_Publication (
  publicationId INT NOT NULL AUTO_INCREMENT,
  userId INT NOT NULL,
  category ENUM('Info', 'Concert', 'Hiwi', 'Mourning') NOT NULL,
  summary  TEXT  NULL,
  date  DATETIME  NOT NULL,
  PRIMARY KEY (publicationId),
  FOREIGN KEY (userId) REFERENCES khev_User(userId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;


--
-- Table structure for table khev_Veteran
--

CREATE TABLE IF NOT EXISTS khev_Veteran (
	veteranId INT NOT NULL AUTO_INCREMENT,
	gender ENUM('Male', 'Female') NOT NULL DEFAULT 'Male',
    name VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NULL DEFAULT '',
	email VARCHAR(100)  NULL,
    phoneNumber VARCHAR(50) NOT NULL,
    zipCode VARCHAR(10) NULL,
    city VARCHAR(50)  NULL,
    address VARCHAR(256)  NULL,
	position VARCHAR(50)  NULL,
    PRIMARY KEY (veteranId)
) ENGINE=InnoDB;

 
--
-- Table structure for table khev_Project
--

CREATE TABLE IF NOT EXISTS khev_Project (
	projectId INT NOT NULL AUTO_INCREMENT,
	userId INT NOT NULL,
	title VARCHAR(50)  NULL,
	summary TEXT  NULL,
	PRIMARY KEY (projectId),
	FOREIGN KEY (userId) REFERENCES khev_User(userId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;



--
-- Table structure for table khev_Conference
--

CREATE TABLE IF NOT EXISTS khev_Conference (
	conferenceId INT NOT NULL AUTO_INCREMENT,
	date DATETIME  NULL,
	title VARCHAR(50)  NULL,
	location VARCHAR(50)  NULL,
	summary TEXT  NULL,
	PRIMARY KEY (conferenceId)
) ENGINE=InnoDB;

 


-- Ajouter pour les Logs
--
-- Table structure for table khev_LogActivity (Logger utiliser avec les triggers)
--

CREATE TABLE IF NOT EXISTS khev_LogActivity (
  activityId INT NOT NULL AUTO_INCREMENT,
  userId INT NOT NULL,
  summary TEXT NULL,
  date  DATETIME NOT NULL,
  PRIMARY KEY (activityId),
  FOREIGN KEY (userId) REFERENCES khev_User(userId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;


 
--
-- Table structure for table khev_Role (for user role managment)
-- 

CREATE TABLE IF NOT EXISTS khev_Role(
  roleId INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(50)  NOT NULL,
  description VARCHAR(120) NULL,
  PRIMARY KEY (roleId)
) ENGINE=InnoDB;


--  
--
-- Table structure for table khev_RoleAccessRight  
--

CREATE TABLE IF NOT EXISTS khev_RoleAccessRight (
  roleAccessId INT NOT NULL AUTO_INCREMENT,
  roleId INT NOT NULL,
  entityType VARCHAR(50)  NOT NULL,
  createRight  BIT(1) NOT NULL DEFAULT 0,
  readRight  BIT(1) NOT NULL DEFAULT 0,
  editRight  BIT(1) NOT NULL DEFAULT 0,
  deleteRight  BIT(1) NOT NULL DEFAULT 0,
  fullRight  BIT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (roleAccessId),
  FOREIGN KEY (roleId) REFERENCES khev_Role(roleId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;

 
--
-- Table structure for table khev_MemberFee 
--

CREATE TABLE IF NOT EXISTS khev_MemberFee (
  memberFeeId INT NOT NULL AUTO_INCREMENT,
  memberId INT NOT NULL,
  amount DOUBLE  NOT NULL DEFAULT 0.0,
  billFileName VARCHAR(512)  NULL,
  transactionDate  DATETIME NOT NULL,
  PRIMARY KEY (memberFeeId),
  FOREIGN KEY (memberId) REFERENCES khev_Member(memberId) ON UPDATE CASCADE ON DELETE NO ACTION
) ENGINE=InnoDB;
 
 

--
-- Table structure for table khev_Expense
--

CREATE TABLE IF NOT EXISTS khev_Expense (
  expenseId INT NOT NULL AUTO_INCREMENT,
  eventId INT NULL,
  title VARCHAR(50)  NOT NULL,
  amount DOUBLE  NOT NULL DEFAULT 0.0,
  category ENUM('CultureWeek', 'FirstSemesterParty', 'GalaNight', 
	'Gaduation', 'GrillParty', 'Challenge', 'Mourning', 'Donation', 'Sport', 'Divers') NOT NULL DEFAULT 'Divers',
  billFileName VARCHAR(512)  NULL,
  transactionDate  DATETIME NOT NULL,
  PRIMARY KEY (expenseId)
) ENGINE=InnoDB;
 
 

--
-- Table structure for table khev_Income
--

CREATE TABLE IF NOT EXISTS khev_Income (
  incomeId INT NOT NULL AUTO_INCREMENT,
  eventId INT NULL,
  title VARCHAR(50)  NOT NULL,
  amount DOUBLE  NOT NULL DEFAULT 0.0,
  category ENUM('CultureWeek', 'FirstSemesterParty', 'GalaNight', 
	'Gaduation', 'GrillParty', 'Challenge', 'Mourning', 'Donation', 'Sport', 'Divers') NOT NULL DEFAULT 'Divers',
  billFileName VARCHAR(512)  NULL,
  transactionDate  DATETIME NOT NULL,
  PRIMARY KEY (incomeId)
) ENGINE=InnoDB;




--
-- Table structure for table khev_Tutorials
--

CREATE TABLE IF NOT EXISTS khev_Tutorial (
  tutorialId INT NOT NULL AUTO_INCREMENT,
  memberId INT NOT NULL,
  date  DATETIME NOT NULL,
  subject VARCHAR(50)  NOT NULL,
  level VARCHAR(50)  NULL,
  location VARCHAR(50)  NULL,
  shedules VARCHAR(50)  NULL,
  status ENUM('Cancelled', 'Active') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (tutorialId),
  FOREIGN KEY (memberId) REFERENCES khev_Member(memberId) ON UPDATE CASCADE ON DELETE NO ACTION
) ENGINE=InnoDB;

--
-- Table structure for table khev_MemberRegistration used to handle Memeber registration
--

CREATE TABLE IF NOT EXISTS khev_MemberRegistration (
  registrationId INT NOT NULL AUTO_INCREMENT,
  memberId INT NOT NULL,
  code VARCHAR(125)  NULL,
  sentDate DATETIME NOT NULL,
  confirmationDate DATETIME NULL,
  PRIMARY KEY (registrationId),
  FOREIGN KEY (memberId) REFERENCES khev_Member(memberId) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;
























