 
<?php
include_once 'DaoBase.php';
/** Auto generated Module for DAO DELETE methods
    * Author: Guy Bami
    * Created: 31.03.2017 20:24:58
    * Last update:  31.03.2017 20:24:58
    */
class DaoDelete extends DaoBase {
    //The constructor
    public function __construct($dbHost = "", $dbUser = "", $dbPassword = "", $dbName = "") {
        parent::__construct($dbHost, $dbUser, $dbPassword, $dbName);
    }
    /**
        *********************************************************
        * Conference Methods
        **********************************************************
        */
    /**
        * Deletes Conference item
        * @param  $conferenceId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteConference($conferenceId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteConference(:conferenceId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':conferenceId', $conferenceId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Conference items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllConferences()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllConferences();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * Event Methods
        **********************************************************
        */
    /**
        * Deletes Event item
        * @param  $eventId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteEvent($eventId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteEvent(:eventId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Event items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllEvents()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllEvents();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * EventBillSummary Methods
        **********************************************************
        */
    /**
        * Deletes EventBillSummary item
        * @param  $billSummaryId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteEventBillSummary($billSummaryId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteEventBillSummary(:billSummaryId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':billSummaryId', $billSummaryId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all EventBillSummary items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllEventBillSummaries()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllEventBillSummaries();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * EventPhoto Methods
        **********************************************************
        */
    /**
        * Deletes EventPhoto item
        * @param  $photoId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteEventPhoto($photoId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteEventPhoto(:photoId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all EventPhoto items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllEventPhotos()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllEventPhotos();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * EventPhotoComment Methods
        **********************************************************
        */
    /**
        * Deletes EventPhotoComment item
        * @param  $photoCommentId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteEventPhotoComment($photoCommentId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteEventPhotoComment(:photoCommentId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoCommentId', $photoCommentId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all EventPhotoComment items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllEventPhotoComments()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllEventPhotoComments();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * EventVideo Methods
        **********************************************************
        */
    /**
        * Deletes EventVideo item
        * @param  $videoId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteEventVideo($videoId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteEventVideo(:videoId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all EventVideo items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllEventVideos()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllEventVideos();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * EventVideoComment Methods
        **********************************************************
        */
    /**
        * Deletes EventVideoComment item
        * @param  $videoCommentId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteEventVideoComment($videoCommentId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteEventVideoComment(:videoCommentId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoCommentId', $videoCommentId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all EventVideoComment items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllEventVideoComments()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllEventVideoComments();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * Expense Methods
        **********************************************************
        */
    /**
        * Deletes Expense item
        * @param  $expenseId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteExpense($expenseId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteExpense(:expenseId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Expense items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllExpenses()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllExpenses();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * Income Methods
        **********************************************************
        */
    /**
        * Deletes Income item
        * @param  $incomeId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteIncome($incomeId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteIncome(:incomeId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Income items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllIncomes()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllIncomes();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * LogActivity Methods
        **********************************************************
        */
    /**
        * Deletes LogActivity item
        * @param  $activityId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteLogActivity($activityId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteLogActivity(:activityId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':activityId', $activityId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all LogActivity items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllLogActivities()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllLogActivities();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * Member Methods
        **********************************************************
        */
    /**
        * Deletes Member item
        * @param  $memberId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteMember($memberId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteMember(:memberId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Member items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllMembers()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllMembers();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * MemberFee Methods
        **********************************************************
        */
    /**
        * Deletes MemberFee item
        * @param  $memberFeeId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteMemberFee($memberFeeId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteMemberFee(:memberFeeId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberFeeId', $memberFeeId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all MemberFee items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllMemberFees()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllMemberFees();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * OfficeMember Methods
        **********************************************************
        */
    /**
        * Deletes OfficeMember item
        * @param  $officeMemberId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteOfficeMember($officeMemberId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteOfficeMember(:officeMemberId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':officeMemberId', $officeMemberId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all OfficeMember items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllOfficeMembers()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllOfficeMembers();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * OldExam Methods
        **********************************************************
        */
    /**
        * Deletes OldExam item
        * @param  $examId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteOldExam($examId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteOldExam(:examId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all OldExam items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllOldExams()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllOldExams();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * Project Methods
        **********************************************************
        */
    /**
        * Deletes Project item
        * @param  $projectId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteProject($projectId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteProject(:projectId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':projectId', $projectId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Project items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllProjects()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllProjects();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * Publication Methods
        **********************************************************
        */
    /**
        * Deletes Publication item
        * @param  $publicationId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deletePublication($publicationId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deletePublication(:publicationId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':publicationId', $publicationId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Publication items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllPublications()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllPublications();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * Role Methods
        **********************************************************
        */
    /**
        * Deletes Role item
        * @param  $roleId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteRole($roleId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteRole(:roleId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Role items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllRoles()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllRoles();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * RoleAccessRight Methods
        **********************************************************
        */
    /**
        * Deletes RoleAccessRight item
        * @param  $roleAccessId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteRoleAccessRight($roleAccessId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteRoleAccessRight(:roleAccessId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all RoleAccessRight items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllRoleAccessRights()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllRoleAccessRights();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * Tutorial Methods
        **********************************************************
        */
    /**
        * Deletes Tutorial item
        * @param  $tutorialId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteTutorial($tutorialId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteTutorial(:tutorialId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Tutorial items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllTutorials()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllTutorials();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * User Methods
        **********************************************************
        */
    /**
        * Deletes User item
        * @param  $userId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteUser($userId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteUser(:userId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all User items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllUsers()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllUsers();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * UserProfile Methods
        **********************************************************
        */
    /**
        * Deletes UserProfile item
        * @param  $profileId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteUserProfile($profileId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteUserProfile(:profileId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all UserProfile items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllUserProfiles()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllUserProfiles();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        *********************************************************
        * Veteran Methods
        **********************************************************
        */
    /**
        * Deletes Veteran item
        * @param  $veteranId mixed The entity primary key field. See corresponding entity class.
        * @return mixed TRUE if delete occured successfully, otherwise object
        */
    public function deleteVeteran($veteranId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteVeteran(:veteranId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }
    /**
        * Deletes all Veteran items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllVeterans()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllVeterans();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return TRUE;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }

    //region MemberRegistration Methods
            
    /**
    *********************************************************
    * MemberRegistration Methods
    **********************************************************
    */
    /**
    * Deletes MemberRegistration item
    * @param  $registrationId mixed The entity primary key field. See corresponding entity class.
    * @return mixed TRUE if delete occured successfully, otherwise object
    */
    public function deleteMemberRegistration($registrationId)
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteMemberRegistration(:registrationId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':registrationId', $registrationId, PDO::PARAM_INT);
                if ($statement->execute()) {
                    return true;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return false;
    }
    /**
        * Deletes all MemberRegistration items
        * @return mixed TRUE if delete occured successfully, otherwise FALSE
        */
    public function deleteAllMemberRegistrations()
    {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL deleteAllMemberRegistrations();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    return true;
                } else {
                    $this->logSqlError($query, $statement);
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return false;
    }
    //endregion
            
}
