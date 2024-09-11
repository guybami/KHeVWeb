
<?php

include_once 'DaoBase.php';

/** Auto generated Module for DAO SELECT methods
 * Author: Guy Bami
 * Created:  31.03.17 20:24:58
 * Last update:  03.31.17 20:24:58
 */
class DaoSelect extends DaoBase {

    //The main constructor

    public function __construct($dbHost = "", $dbUser = "", $dbPassword = "", $dbName = "") {
        parent::__construct($dbHost, $dbUser, $dbPassword, $dbName);
    }

    /**
     * ********************************************************
     * Conference Methods
     * *********************************************************
     */

    /**
     * Select all Conference items
     * @return  mixed associative array object having all Conference items
     *    or NULL if error occured
     */
    public function selectAllConferences() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllConferences()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Conference  item  details
     * @param $conferenceId int The table primary key
     * @return  mixed associative array object having the Conference item
     *   found or NULL if error occured
     */
    public function selectConferenceDetails($conferenceId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectConferenceDetails(:conferenceId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':conferenceId', $conferenceId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * Event Methods
     * *********************************************************
     */

    /**
     * Select all Event items
     * @return  mixed associative array object having all Event items
     *    or NULL if error occured
     */
    public function selectAllEvents() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllEvents()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                     
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Event  item  details
     * @param $eventId int The table primary key
     * @return  mixed associative array object having the Event item
     *   found or NULL if error occured
     */
    public function selectEventDetails($eventId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectEventDetails(:eventId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }
    
    
    /**
     * Selects Event  item  by category
     * @param $eventId int The table primary key
     * @return  mixed associative array object having all Event items
     *   found or NULL if error occured
     */
    public function getAllEventsByCategory($category) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectEventsByCategory(:category);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * EventBillSummary Methods
     * *********************************************************
     */

    /**
     * Select all EventBillSummary items
     * @return  mixed associative array object having all EventBillSummary items
     *    or NULL if error occured
     */
    public function selectAllEventBillSummaries() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllEventBillSummaries()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects EventBillSummary  item  details
     * @param $billSummaryId int The table primary key
     * @return  mixed associative array object having the EventBillSummary item
     *   found or NULL if error occured
     */
    public function selectEventBillSummaryDetails($billSummaryId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectEventBillSummaryDetails(:billSummaryId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':billSummaryId', $billSummaryId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * EventPhoto Methods
     * *********************************************************
     */

    /**
     * Select all EventPhoto items
     * @return  mixed associative array object having all EventPhoto items
     *    or NULL if error occured
     */
    public function selectAllEventPhotos() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllEventPhotos()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects EventPhoto  item  details
     * @param $photoId int The table primary key
     * @return  mixed associative array object having the EventPhoto item
     *   found or NULL if error occured
     */
    public function selectEventPhotoDetails($photoId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectEventPhotoDetails(:photoId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }
    
    
    /**
     * Selects EventPhotos  list for the given eventId
     * @param $eventId int The event key
     * @return  mixed associative array object having the EventPhoto item
     *   found or NULL if error occured
     */
    public function selectAllPhotosByEvent($eventId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllPhotosByEvent(:eventId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * EventPhotoComment Methods
     * *********************************************************
     */

    /**
     * Select all EventPhotoComment items
     * @return  mixed associative array object having all EventPhotoComment items
     *    or NULL if error occured
     */
    public function selectAllEventPhotoComments() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllEventPhotoComments()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects EventPhotoComment  item  details
     * @param $photoCommentId int The table primary key
     * @return  mixed associative array object having the EventPhotoComment item
     *   found or NULL if error occured
     */
    public function selectEventPhotoCommentDetails($photoCommentId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectEventPhotoCommentDetails(:photoCommentId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoCommentId', $photoCommentId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * EventVideo Methods
     * *********************************************************
     */

    /**
     * Select all EventVideo items
     * @return  mixed associative array object having all EventVideo items
     *    or NULL if error occured
     */
    public function selectAllEventVideos() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllEventVideos()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects EventVideo  item  details
     * @param $videoId int The table primary key
     * @return  mixed associative array object having the EventVideo item
     *   found or NULL if error occured
     */
    public function selectEventVideoDetails($videoId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectEventVideoDetails(:videoId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * EventVideoComment Methods
     * *********************************************************
     */

    /**
     * Select all EventVideoComment items
     * @return  mixed associative array object having all EventVideoComment items
     *    or NULL if error occured
     */
    public function selectAllEventVideoComments() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllEventVideoComments()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects EventVideoComment  item  details
     * @param $videoCommentId int The table primary key
     * @return  mixed associative array object having the EventVideoComment item
     *   found or NULL if error occured
     */
    public function selectEventVideoCommentDetails($videoCommentId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectEventVideoCommentDetails(:videoCommentId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoCommentId', $videoCommentId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * Expense Methods
     * *********************************************************
     */

    /**
     * Select all Expense items
     * @return  mixed associative array object having all Expense items
     *    or NULL if error occured
     */
    public function selectAllExpenses() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllExpenses()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Expense  item  details
     * @param $expenseId int The table primary key
     * @return  mixed associative array object having the Expense item
     *   found or NULL if error occured
     */
    public function selectExpenseDetails($expenseId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectExpenseDetails(:expenseId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }
    
    /**
     * Selects Expenses by Year
     * @return mixed Array
     */
    public function selectAllExpensesByYear() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllExpensesByYear();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                    return $result;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * Income Methods
     * *********************************************************
     */

    /**
     * Select all Income items
     * @return  mixed associative array object having all Income items
     *    or NULL if error occured
     */
    public function selectAllIncomes() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllIncomes()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Income  item  details
     * @param $incomeId int The table primary key
     * @return  mixed associative array object having the Income item
     *   found or NULL if error occured
     */
    public function selectIncomeDetails($incomeId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectIncomeDetails(:incomeId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }
    
    /**
     * Selects Incomes by Year
     * @return mixed Array
     */
    public function selectAllIncomesByYear() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllIncomesByYear();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                    return $result;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * LogActivity Methods
     * *********************************************************
     */

    /**
     * Select all LogActivity items
     * @return  mixed associative array object having all LogActivity items
     *    or NULL if error occured
     */
    public function selectAllLogActivities() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllLogActivities()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects LogActivity  item  details
     * @param $activityId int The table primary key
     * @return  mixed associative array object having the LogActivity item
     *   found or NULL if error occured
     */
    public function selectLogActivityDetails($activityId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectLogActivityDetails(:activityId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':activityId', $activityId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * Member Methods
     * *********************************************************
     */

    /**
     * Select all Member items
     * @return  mixed associative array object having all Member items
     *    or NULL if error occured
     */
    public function selectAllMembers() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllMembers()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Member  item  details
     * @param $memberId int The table primary key
     * @return  mixed associative array object having the Member item
     *   found or NULL if error occured
     */
    public function selectMemberDetails($memberId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectMemberDetails(:memberId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * MemberFee Methods
     * *********************************************************
     */

    /**
     * Select all MemberFee items
     * @return  mixed associative array object having all MemberFee items
     *    or NULL if error occured
     */
    public function selectAllMemberFees() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllMemberFees()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects MemberFee  item  details
     * @param $memberFeeId int The table primary key
     * @return  mixed associative array object having the MemberFee item
     *   found or NULL if error occured
     */
    public function selectMemberFeeDetails($memberFeeId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectMemberFeeDetails(:memberFeeId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberFeeId', $memberFeeId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * OfficeMember Methods
     * *********************************************************
     */

    /**
     * Select all OfficeMember items
     * @return  mixed associative array object having all OfficeMember items
     *    or NULL if error occured
     */
    public function selectAllOfficeMembers() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllOfficeMembers()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects OfficeMember  item  details
     * @param $officeMemberId int The table primary key
     * @return  mixed associative array object having the OfficeMember item
     *   found or NULL if error occured
     */
    public function selectOfficeMemberDetails($officeMemberId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectOfficeMemberDetails(:officeMemberId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':officeMemberId', $officeMemberId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * OldExam Methods
     * *********************************************************
     */

    /**
     * Select all OldExam items
     * @return  mixed associative array object having all OldExam items
     *    or NULL if error occured
     */
    public function selectAllOldExams() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllOldExams()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects OldExam  item  details
     * @param $examId int The table primary key
     * @return  mixed associative array object having the OldExam item
     *   found or NULL if error occured
     */
    public function selectOldExamDetails($examId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectOldExamDetails(:examId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * Project Methods
     * *********************************************************
     */

    /**
     * Select all Project items
     * @return  mixed associative array object having all Project items
     *    or NULL if error occured
     */
    public function selectAllProjects() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllProjects()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Project  item  details
     * @param $projectId int The table primary key
     * @return  mixed associative array object having the Project item
     *   found or NULL if error occured
     */
    public function selectProjectDetails($projectId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectProjectDetails(:projectId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':projectId', $projectId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * Publication Methods
     * *********************************************************
     */

    /**
     * Select all Publication items
     * @return  mixed associative array object having all Publication items
     *    or NULL if error occured
     */
    public function selectAllPublications() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllPublications()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Publication  item  details
     * @param $publicationId int The table primary key
     * @return  mixed associative array object having the Publication item
     *   found or NULL if error occured
     */
    public function selectPublicationDetails($publicationId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectPublicationDetails(:publicationId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':publicationId', $publicationId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * Role Methods
     * *********************************************************
     */

    /**
     * Select all Role items
     * @return  mixed associative array object having all Role items
     *    or NULL if error occured
     */
    public function selectAllRoles() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllRoles()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Role  item  details
     * @param $roleId int The table primary key
     * @return  mixed associative array object having the Role item
     *   found or NULL if error occured
     */
    public function selectRoleDetails($roleId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectRoleDetails(:roleId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * RoleAccessRight Methods
     * *********************************************************
     */

    /**
     * Select all RoleAccessRight items
     * @return  mixed associative array object having all RoleAccessRight items
     *    or NULL if error occured
     */
    public function selectAllRoleAccessRights() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllRoleAccessRights()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects RoleAccessRight  item  details
     * @param $roleAccessId int The table primary key
     * @return  mixed associative array object having the RoleAccessRight item
     *   found or NULL if error occured
     */
    public function selectRoleAccessRightDetails($roleAccessId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectRoleAccessRightDetails(:roleAccessId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * Tutorial Methods
     * *********************************************************
     */

    /**
     * Select all Tutorial items
     * @return  mixed associative array object having all Tutorial items
     *    or NULL if error occured
     */
    public function selectAllTutorials() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllTutorials()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Tutorial  item  details
     * @param $tutorialId int The table primary key
     * @return  mixed associative array object having the Tutorial item
     *   found or NULL if error occured
     */
    public function selectTutorialDetails($tutorialId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectTutorialDetails(:tutorialId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * User Methods
     * *********************************************************
     */

    /**
     * Select all User items
     * @return  mixed associative array object having all User items
     *    or NULL if error occured
     */
    public function selectAllUsers() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllUsers()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects User  item  details
     * @param $userId int The table primary key
     * @return  mixed associative array object having the User item
     *   found or NULL if error occured
     */
    public function selectUserDetails($userId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectUserDetails(:userId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * UserProfile Methods
     * *********************************************************
     */

    /**
     * Select all UserProfile items
     * @return  mixed associative array object having all UserProfile items
     *    or NULL if error occured
     */
    public function selectAllUserProfiles() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllUserProfiles()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects UserProfile  item  details
     * @param $profileId int The table primary key
     * @return  mixed associative array object having the UserProfile item
     *   found or NULL if error occured
     */
    public function selectUserProfileDetails($profileId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectUserProfileDetails(:profileId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * ********************************************************
     * Veteran Methods
     * *********************************************************
     */

    /**
     * Select all Veteran items
     * @return  mixed associative array object having all Veteran items
     *    or NULL if error occured
     */
    public function selectAllVeterans() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllVeterans()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Selects Veteran  item  details
     * @param $veteranId int The table primary key
     * @return  mixed associative array object having the Veteran item
     *   found or NULL if error occured
     */
    public function selectVeteranDetails($veteranId) {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectVeteranDetails(:veteranId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_STR);

                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }

    /**
     * Custom added methods
     */

    /**
     * Checkes user login credentials
     * @param string $userLoginName
     * @param string $userPassword
     * @return boolean
     */
    public function checkUserLoginData($userLoginName, $userPassword) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllUsers();";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    $allUsers = $statement->fetchAll();
                    $i = 0;
                    for ($i = 0; $i < count($allUsers); $i++) {
                        if ($allUsers[$i]['loginName'] == $userLoginName && $allUsers[$i]['hashPassword'] == $userPassword) {
                            return true;
                        }
                    }
                    return false;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return FALSE;
    }

    public function selectAllEntitiesRecordsCount() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectAllEntitiesRecordsCount()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }
    
    
    public function selectActualFinancesStatus() {
        $result = NULL;
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL selectActualFinancesStatus()";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                if ($statement->execute()) {
                    // return the associative array
                    $result = $statement->fetchAll();
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
        return $result;
    }


}
