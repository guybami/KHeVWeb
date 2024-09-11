
<?php

include_once 'DaoBase.php';

/** Auto generated Module for DAO INSERT methods
 * Author: Guy Bami
 * Created: 31.03.2017 20:24:58
 * Last update:  31.03.2017 20:24:58
 */
class DaoInsert extends DaoBase {

    //The constructor

    public function __construct($dbHost = "", $dbUser = "", $dbPassword = "", $dbName = "") {
        parent::__construct($dbHost, $dbUser, $dbPassword, $dbName);
    }

    /**
     * ********************************************************
     * Conference Methods
     * *********************************************************
     */

    /**
     * Inserts new Conference  item
     *  @param $date string The entity  date field 
     *  @param $title string The entity  title field 
     *  @param $location string The entity  location field 
     *  @param $summary string The entity  summary field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewConference($date, $title, $location, $summary) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewConference(:date, :title, :location, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * Event Methods
     * *********************************************************
     */

    /**
     * Inserts new Event  item
     *  @param $title string The entity  title field 
     *  @param $category string The entity  category field 
     *  @param $date string The entity  date field 
     *  @param $location string The entity  location field 
     *  @param $summary string The entity  summary field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewEvent($title, $category, $date, $location, $summary) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewEvent(:title, :category, :date, :location, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * EventBillSummary Methods
     * *********************************************************
     */

    /**
     * Inserts new EventBillSummary  item
     *  @param $eventId int The entity  eventId field 
     *  @param $title string The entity  title field 
     *  @param $summary string The entity  summary field 
     *  @param $summaryFileName string The entity  summaryFileName field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewEventBillSummary($eventId, $title, $summary, $summaryFileName) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewEventBillSummary(:eventId, :title, :summary, :summaryFileName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);
                $statement->bindParam(':summaryFileName', $summaryFileName, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * EventPhoto Methods
     * *********************************************************
     */

    /**
     * Inserts new EventPhoto  item
     *  @param $eventId int The entity  eventId field 
     *  @param $fileFullName string The entity  fileFullName field 
     *  @param $title string The entity  title field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewEventPhoto($eventId, $fileFullName, $title) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewEventPhoto(:eventId, :fileFullName, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * EventPhotoComment Methods
     * *********************************************************
     */

    /**
     * Inserts new EventPhotoComment  item
     *  @param $photoId int The entity  photoId field 
     *  @param $userId int The entity  userId field 
     *  @param $commentText string The entity  commentText field 
     *  @param $date string The entity  date field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewEventPhotoComment($photoId, $userId, $commentText, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewEventPhotoComment(:photoId, :userId, :commentText, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_STR);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':commentText', $commentText, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * EventVideo Methods
     * *********************************************************
     */

    /**
     * Inserts new EventVideo  item
     *  @param $eventId int The entity  eventId field 
     *  @param $fileFullName string The entity  fileFullName field 
     *  @param $title string The entity  title field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewEventVideo($eventId, $fileFullName, $title) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewEventVideo(:eventId, :fileFullName, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * EventVideoComment Methods
     * *********************************************************
     */

    /**
     * Inserts new EventVideoComment  item
     *  @param $videoId int The entity  videoId field 
     *  @param $userId int The entity  userId field 
     *  @param $commentText string The entity  commentText field 
     *  @param $date string The entity  date field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewEventVideoComment($videoId, $userId, $commentText, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewEventVideoComment(:videoId, :userId, :commentText, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_STR);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':commentText', $commentText, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * Expense Methods
     * *********************************************************
     */

    /**
     * Inserts new Expense  item
     *  @param $eventId int The entity  eventId field 
     *  @param $title string The entity  title field 
     *  @param $amount double The entity  amount field 
     *  @param $category string The entity  category field 
     *  @param $billFileName string The entity  billFileName field 
     *  @param $transactionDate string The entity  transactionDate field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewExpense($eventId, $title, $amount, $category, $billFileName, $transactionDate) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewExpense(:eventId, :title, :amount, :category, :billFileName, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * Income Methods
     * *********************************************************
     */

    /**
     * Inserts new Income  item
     *  @param $eventId int The entity  eventId field 
     *  @param $title string The entity  title field 
     *  @param $amount double The entity  amount field 
     *  @param $category string The entity  category field 
     *  @param $billFileName string The entity  billFileName field 
     *  @param $transactionDate string The entity  transactionDate field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewIncome($eventId, $title, $amount, $category, $billFileName, $transactionDate) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewIncome(:eventId, :title, :amount, :category, :billFileName, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * LogActivity Methods
     * *********************************************************
     */

    /**
     * Inserts new LogActivity  item
     *  @param $userId int The entity  userId field 
     *  @param $summary string The entity  summary field 
     *  @param $date string The entity  date field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewLogActivity($userId, $summary, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewLogActivity(:userId, :summary, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * Member Methods
     * *********************************************************
     */

    /**
     * Inserts new Member  item
     *  @param $gender string The entity  gender field 
     *  @param $name string The entity  name field 
     *  @param $lastName string The entity  lastName field 
     *  @param $email string The entity  email field 
     *  @param $phoneNumber string The entity  phoneNumber field 
     *  @param $zipCode string The entity  zipCode field 
     *  @param $city string The entity  city field 
     *  @param $address string The entity  address field 
     *  @param $position string The entity  position field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewMember($gender, $name, $lastName, $email, $phoneNumber, $zipCode, $city, $address, $position) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewMember(:gender, :name, :lastName, :email, :phoneNumber, :zipCode, :city, :address, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);
                $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);
                $statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
                $statement->bindParam(':zipCode', $zipCode, PDO::PARAM_STR);
                $statement->bindParam(':city', $city, PDO::PARAM_STR);
                $statement->bindParam(':address', $address, PDO::PARAM_STR);
                $statement->bindParam(':position', $position, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * MemberFee Methods
     * *********************************************************
     */

    /**
     * Inserts new MemberFee  item
     *  @param $memberId int The entity  memberId field 
     *  @param $amount double The entity  amount field 
     *  @param $billFileName string The entity  billFileName field 
     *  @param $transactionDate string The entity  transactionDate field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewMemberFee($memberId, $amount, $billFileName, $transactionDate) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewMemberFee(:memberId, :amount, :billFileName, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * OfficeMember Methods
     * *********************************************************
     */

    /**
     * Inserts new OfficeMember  item
     *  @param $memberId int The entity  memberId field 
     *  @param $position string The entity  position field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewOfficeMember($memberId, $position) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewOfficeMember(:memberId, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);
                $statement->bindParam(':position', $position, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * OldExam Methods
     * *********************************************************
     */

    /**
     * Inserts new OldExam  item
     *  @param $userId int The entity  userId field 
     *  @param $subject string The entity  subject field 
     *  @param $title string The entity  title field 
     *  @param $semester string The entity  semester field 
     *  @param $date string The entity  date field 
     *  @param $fileFullName string The entity  fileFullName field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewOldExam($userId, $subject, $title, $semester, $date, $fileFullName) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewOldExam(:userId, :subject, :title, :semester, :date, :fileFullName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':semester', $semester, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);
                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * Project Methods
     * *********************************************************
     */

    /**
     * Inserts new Project  item
     *  @param $userId int The entity  userId field 
     *  @param $title string The entity  title field 
     *  @param $summary string The entity  summary field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewProject($userId, $title, $summary) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewProject(:userId, :title, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * Publication Methods
     * *********************************************************
     */

    /**
     * Inserts new Publication  item
     *  @param $userId int The entity  userId field 
     *  @param $category string The entity  category field 
     *  @param $summary string The entity  summary field 
     *  @param $date string The entity  date field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewPublication($userId, $category, $summary, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewPublication(:userId, :category, :summary, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * Role Methods
     * *********************************************************
     */

    /**
     * Inserts new Role  item
     *  @param $name string The entity  name field 
     *  @param $description string The entity  description field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewRole($name, $description) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewRole(:name, :description);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);
                $statement->bindParam(':description', $description, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * RoleAccessRight Methods
     * *********************************************************
     */

    /**
     * Inserts new RoleAccessRight  item
     *  @param $roleId int The entity  roleId field 
     *  @param $entityType string The entity  entityType field 
     *  @param $createRight boolean The entity  createRight field 
     *  @param $readRight boolean The entity  readRight field 
     *  @param $editRight boolean The entity  editRight field 
     *  @param $deleteRight boolean The entity  deleteRight field 
     *  @param $fullRight boolean The entity  fullRight field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewRoleAccessRight($roleId, $entityType, $createRight, $readRight, $editRight, $deleteRight, $fullRight) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewRoleAccessRight(:roleId, :entityType, :createRight, :readRight, :editRight, :deleteRight, :fullRight);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_STR);
                $statement->bindParam(':entityType', $entityType, PDO::PARAM_STR);
                $statement->bindParam(':createRight', $createRight, PDO::PARAM_STR);
                $statement->bindParam(':readRight', $readRight, PDO::PARAM_STR);
                $statement->bindParam(':editRight', $editRight, PDO::PARAM_STR);
                $statement->bindParam(':deleteRight', $deleteRight, PDO::PARAM_STR);
                $statement->bindParam(':fullRight', $fullRight, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * Tutorial Methods
     * *********************************************************
     */

    /**
     * Inserts new Tutorial  item
     *  @param $memberId int The entity  memberId field 
     *  @param $date string The entity  date field 
     *  @param $subject string The entity  subject field 
     *  @param $level string The entity  level field 
     *  @param $location string The entity  location field 
     *  @param $shedules string The entity  shedules field 
     *  @param $status string The entity  status field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewTutorial($memberId, $date, $subject, $level, $location, $shedules, $status) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewTutorial(:memberId, :date, :subject, :level, :location, :shedules, :status);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
                $statement->bindParam(':level', $level, PDO::PARAM_STR);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);
                $statement->bindParam(':shedules', $shedules, PDO::PARAM_STR);
                $statement->bindParam(':status', $status, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * User Methods
     * *********************************************************
     */

    /**
     * Inserts new User  item
     *  @param $loginName string The entity  loginName field 
     *  @param $hashPassword string The entity  hashPassword field 
     *  @param $name string The entity  name field 
     *  @param $lastName string The entity  lastName field 
     *  @param $phoneNumber string The entity  phoneNumber field 
     *  @param $email string The entity  email field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewUser($loginName, $hashPassword, $name, $lastName, $phoneNumber, $email) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewUser(:loginName, :hashPassword, :name, :lastName, :phoneNumber, :email);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':loginName', $loginName, PDO::PARAM_STR);
                $statement->bindParam(':hashPassword', $hashPassword, PDO::PARAM_STR);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);
                $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);
                $statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * UserProfile Methods
     * *********************************************************
     */

    /**
     * Inserts new UserProfile  item
     *  @param $userId int The entity  userId field 
     *  @param $gender string The entity  gender field 
     *  @param $photoFileName string The entity  photoFileName field 
     *  @param $street string The entity  street field 
     *  @param $zipCode string The entity  zipCode field 
     *  @param $city string The entity  city field 
     *  @param $address string The entity  address field 
     *  @param $defalutLanguage string The entity  defalutLanguage field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewUserProfile($userId, $gender, $photoFileName, $street, $zipCode, $city, $address, $defalutLanguage) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewUserProfile(:userId, :gender, :photoFileName, :street, :zipCode, :city, :address, :defalutLanguage);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
                $statement->bindParam(':photoFileName', $photoFileName, PDO::PARAM_STR);
                $statement->bindParam(':street', $street, PDO::PARAM_STR);
                $statement->bindParam(':zipCode', $zipCode, PDO::PARAM_STR);
                $statement->bindParam(':city', $city, PDO::PARAM_STR);
                $statement->bindParam(':address', $address, PDO::PARAM_STR);
                $statement->bindParam(':defalutLanguage', $defalutLanguage, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

    /**
     * ********************************************************
     * Veteran Methods
     * *********************************************************
     */

    /**
     * Inserts new Veteran  item
     *  @param $gender string The entity  gender field 
     *  @param $name string The entity  name field 
     *  @param $lastName string The entity  lastName field 
     *  @param $email string The entity  email field 
     *  @param $phoneNumber string The entity  phoneNumber field 
     *  @param $zipCode string The entity  zipCode field 
     *  @param $city string The entity  city field 
     *  @param $address string The entity  address field 
     *  @param $position string The entity  position field 
     * @return int|mixed The last inserted record ID if successfull, otherwise FALSE
     */
    public function insertNewVeteran($gender, $name, $lastName, $email, $phoneNumber, $zipCode, $city, $address, $position) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL insertNewVeteran(:gender, :name, :lastName, :email, :phoneNumber, :zipCode, :city, :address, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);
                $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);
                $statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
                $statement->bindParam(':zipCode', $zipCode, PDO::PARAM_STR);
                $statement->bindParam(':city', $city, PDO::PARAM_STR);
                $statement->bindParam(':address', $address, PDO::PARAM_STR);
                $statement->bindParam(':position', $position, PDO::PARAM_STR);

                if ($statement->execute()) {
                    $result = $statement->fetchAll();
                    if (is_array($result[0])) {
                        return intval($result[0]["LAST_INSERT_ID()"]);
                    } else {
                        return FALSE;
                    }
                } else {
                    $this->logSqlError($query, $statement);
                    return FALSE;
                }
            } else {
                return $pdo;
            }
        } catch (PDOException $e) {
            return $this->logSqlException($e);
        }
    }

}
