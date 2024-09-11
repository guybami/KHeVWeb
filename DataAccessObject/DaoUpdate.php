
<?php

include_once 'DaoBase.php';

/** Auto generated Module for DAO UPDATE methods
 * Author: Guy Bami
 * Created: 31.03.2017 20:24:58
 * Last update:  31.03.2017 20:24:58
 */
class DaoUpdate extends DaoBase {

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
     * Updates Conference item
     *  @param $conferenceId int The entity  conferenceId field  
     *  @param $date string The entity  date field  
     *  @param $title string The entity  title field  
     *  @param $location string The entity  location field  
     *  @param $summary string The entity  summary field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateConference($conferenceId, $date, $title, $location, $summary) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateConference(:conferenceId, :date, :title, :location, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':conferenceId', $conferenceId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * Updates Conference item
     *  @param $conferenceId int The entity  conferenceId field  
     *  @param $date string The entity  date field  
     *  @param $title string The entity  title field  
     *  @param $location string The entity  location field  
     *  @param $summary string The entity  summary field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateConferenceDetails($conferenceId, $date, $title, $location, $summary) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateConference(:conferenceId, :date, :title, :location, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':conferenceId', $conferenceId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * Updates Conference item  field
     *  @param $conferenceId int The entity  conferenceId field  
     *  @param $date string The entity  date field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateConferenceDate($conferenceId, $date) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateConferenceDate(:conferenceId, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':conferenceId', $conferenceId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates Conference item  field
     *  @param $conferenceId int The entity  conferenceId field  
     *  @param $title string The entity  title field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateConferenceTitle($conferenceId, $title) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateConferenceTitle(:conferenceId, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':conferenceId', $conferenceId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates Conference item  field
     *  @param $conferenceId int The entity  conferenceId field  
     *  @param $location string The entity  location field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateConferenceLocation($conferenceId, $location) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateConferenceLocation(:conferenceId, :location);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':conferenceId', $conferenceId, PDO::PARAM_INT);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);

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
     * Updates Conference item  field
     *  @param $conferenceId int The entity  conferenceId field  
     *  @param $summary string The entity  summary field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateConferenceSummary($conferenceId, $summary) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateConferenceSummary(:conferenceId, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':conferenceId', $conferenceId, PDO::PARAM_INT);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * ********************************************************
     * Event Methods
     * *********************************************************
     */

    /**
     * Updates Event item
     *  @param $eventId int The entity  eventId field  
     *  @param $title string The entity  title field  
     *  @param $category string The entity  category field  
     *  @param $date string The entity  date field  
     *  @param $location string The entity  location field  
     *  @param $summary string The entity  summary field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEvent($eventId, $title, $category, $date, $location, $summary) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEvent(:eventId, :title, :category, :date, :location, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * Updates Event item
     *  @param $eventId int The entity  eventId field  
     *  @param $title string The entity  title field  
     *  @param $category string The entity  category field  
     *  @param $date string The entity  date field  
     *  @param $location string The entity  location field  
     *  @param $summary string The entity  summary field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventDetails($eventId, $title, $category, $date, $location, $summary) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEvent(:eventId, :title, :category, :date, :location, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * Updates Event item  field
     *  @param $eventId int The entity  eventId field  
     *  @param $title string The entity  title field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventTitle($eventId, $title) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventTitle(:eventId, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates Event item  field
     *  @param $eventId int The entity  eventId field  
     *  @param $category string The entity  category field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventCategory($eventId, $category) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventCategory(:eventId, :category);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_INT);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);

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
     * Updates Event item  field
     *  @param $eventId int The entity  eventId field  
     *  @param $date string The entity  date field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventDate($eventId, $date) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventDate(:eventId, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates Event item  field
     *  @param $eventId int The entity  eventId field  
     *  @param $location string The entity  location field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventLocation($eventId, $location) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventLocation(:eventId, :location);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_INT);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);

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
     * Updates Event item  field
     *  @param $eventId int The entity  eventId field  
     *  @param $summary string The entity  summary field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventSummary($eventId, $summary) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventSummary(:eventId, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_INT);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * ********************************************************
     * EventBillSummary Methods
     * *********************************************************
     */

    /**
     * Updates EventBillSummary item
     *  @param $billSummaryId int The entity  billSummaryId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $title string The entity  title field  
     *  @param $summary string The entity  summary field  
     *  @param $summaryFileName string The entity  summaryFileName field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventBillSummary($billSummaryId, $eventId, $title, $summary, $summaryFileName) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventBillSummary(:billSummaryId, :eventId, :title, :summary, :summaryFileName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':billSummaryId', $billSummaryId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);
                $statement->bindParam(':summaryFileName', $summaryFileName, PDO::PARAM_STR);

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
     * Updates EventBillSummary item
     *  @param $billSummaryId int The entity  billSummaryId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $title string The entity  title field  
     *  @param $summary string The entity  summary field  
     *  @param $summaryFileName string The entity  summaryFileName field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventBillSummaryDetails($billSummaryId, $eventId, $title, $summary, $summaryFileName) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventBillSummary(:billSummaryId, :eventId, :title, :summary, :summaryFileName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':billSummaryId', $billSummaryId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);
                $statement->bindParam(':summaryFileName', $summaryFileName, PDO::PARAM_STR);

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
     * Updates EventBillSummary item  field
     *  @param $billSummaryId int The entity  billSummaryId field  
     *  @param $eventId int The entity  eventId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventBillSummaryEventId($billSummaryId, $eventId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventBillSummaryEventId(:billSummaryId, :eventId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':billSummaryId', $billSummaryId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);

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
     * Updates EventBillSummary item  field
     *  @param $billSummaryId int The entity  billSummaryId field  
     *  @param $title string The entity  title field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventBillSummaryTitle($billSummaryId, $title) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventBillSummaryTitle(:billSummaryId, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':billSummaryId', $billSummaryId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates EventBillSummary item  field
     *  @param $billSummaryId int The entity  billSummaryId field  
     *  @param $summary string The entity  summary field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventBillSummarySummary($billSummaryId, $summary) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventBillSummarySummary(:billSummaryId, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':billSummaryId', $billSummaryId, PDO::PARAM_INT);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * Updates EventBillSummary item  field
     *  @param $billSummaryId int The entity  billSummaryId field  
     *  @param $summaryFileName string The entity  summaryFileName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventBillSummarySummaryFileName($billSummaryId, $summaryFileName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventBillSummarySummaryFileName(:billSummaryId, :summaryFileName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':billSummaryId', $billSummaryId, PDO::PARAM_INT);
                $statement->bindParam(':summaryFileName', $summaryFileName, PDO::PARAM_STR);

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
     * ********************************************************
     * EventPhoto Methods
     * *********************************************************
     */

    /**
     * Updates EventPhoto item
     *  @param $photoId int The entity  photoId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $fileFullName string The entity  fileFullName field  
     *  @param $title string The entity  title field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhoto($photoId, $eventId, $fileFullName, $title) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhoto(:photoId, :eventId, :fileFullName, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates EventPhoto item
     *  @param $photoId int The entity  photoId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $fileFullName string The entity  fileFullName field  
     *  @param $title string The entity  title field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoDetails($photoId, $eventId, $fileFullName, $title) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhoto(:photoId, :eventId, :fileFullName, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates EventPhoto item  field
     *  @param $photoId int The entity  photoId field  
     *  @param $eventId int The entity  eventId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoEventId($photoId, $eventId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhotoEventId(:photoId, :eventId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);

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
     * Updates EventPhoto item  field
     *  @param $photoId int The entity  photoId field  
     *  @param $fileFullName string The entity  fileFullName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoFileFullName($photoId, $fileFullName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhotoFileFullName(:photoId, :fileFullName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_INT);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);

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
     * Updates EventPhoto item  field
     *  @param $photoId int The entity  photoId field  
     *  @param $title string The entity  title field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoTitle($photoId, $title) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhotoTitle(:photoId, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * ********************************************************
     * EventPhotoComment Methods
     * *********************************************************
     */

    /**
     * Updates EventPhotoComment item
     *  @param $photoCommentId int The entity  photoCommentId field  
     *  @param $photoId int The entity  photoId field  
     *  @param $userId int The entity  userId field  
     *  @param $commentText string The entity  commentText field  
     *  @param $date string The entity  date field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoComment($photoCommentId, $photoId, $userId, $commentText, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhotoComment(:photoCommentId, :photoId, :userId, :commentText, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoCommentId', $photoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_STR);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':commentText', $commentText, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates EventPhotoComment item
     *  @param $photoCommentId int The entity  photoCommentId field  
     *  @param $photoId int The entity  photoId field  
     *  @param $userId int The entity  userId field  
     *  @param $commentText string The entity  commentText field  
     *  @param $date string The entity  date field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoCommentDetails($photoCommentId, $photoId, $userId, $commentText, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhotoComment(:photoCommentId, :photoId, :userId, :commentText, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoCommentId', $photoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_STR);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':commentText', $commentText, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates EventPhotoComment item  field
     *  @param $photoCommentId int The entity  photoCommentId field  
     *  @param $photoId int The entity  photoId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoCommentPhotoId($photoCommentId, $photoId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhotoCommentPhotoId(:photoCommentId, :photoId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoCommentId', $photoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':photoId', $photoId, PDO::PARAM_STR);

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
     * Updates EventPhotoComment item  field
     *  @param $photoCommentId int The entity  photoCommentId field  
     *  @param $userId int The entity  userId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoCommentUserId($photoCommentId, $userId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhotoCommentUserId(:photoCommentId, :userId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoCommentId', $photoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);

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
     * Updates EventPhotoComment item  field
     *  @param $photoCommentId int The entity  photoCommentId field  
     *  @param $commentText string The entity  commentText field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoCommentCommentText($photoCommentId, $commentText) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhotoCommentCommentText(:photoCommentId, :commentText);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoCommentId', $photoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':commentText', $commentText, PDO::PARAM_STR);

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
     * Updates EventPhotoComment item  field
     *  @param $photoCommentId int The entity  photoCommentId field  
     *  @param $date string The entity  date field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventPhotoCommentDate($photoCommentId, $date) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventPhotoCommentDate(:photoCommentId, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':photoCommentId', $photoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * ********************************************************
     * EventVideo Methods
     * *********************************************************
     */

    /**
     * Updates EventVideo item
     *  @param $videoId int The entity  videoId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $fileFullName string The entity  fileFullName field  
     *  @param $title string The entity  title field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideo($videoId, $eventId, $fileFullName, $title) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideo(:videoId, :eventId, :fileFullName, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates EventVideo item
     *  @param $videoId int The entity  videoId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $fileFullName string The entity  fileFullName field  
     *  @param $title string The entity  title field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoDetails($videoId, $eventId, $fileFullName, $title) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideo(:videoId, :eventId, :fileFullName, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates EventVideo item  field
     *  @param $videoId int The entity  videoId field  
     *  @param $eventId int The entity  eventId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoEventId($videoId, $eventId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideoEventId(:videoId, :eventId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);

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
     * Updates EventVideo item  field
     *  @param $videoId int The entity  videoId field  
     *  @param $fileFullName string The entity  fileFullName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoFileFullName($videoId, $fileFullName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideoFileFullName(:videoId, :fileFullName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_INT);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);

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
     * Updates EventVideo item  field
     *  @param $videoId int The entity  videoId field  
     *  @param $title string The entity  title field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoTitle($videoId, $title) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideoTitle(:videoId, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * ********************************************************
     * EventVideoComment Methods
     * *********************************************************
     */

    /**
     * Updates EventVideoComment item
     *  @param $videoCommentId int The entity  videoCommentId field  
     *  @param $videoId int The entity  videoId field  
     *  @param $userId int The entity  userId field  
     *  @param $commentText string The entity  commentText field  
     *  @param $date string The entity  date field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoComment($videoCommentId, $videoId, $userId, $commentText, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideoComment(:videoCommentId, :videoId, :userId, :commentText, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoCommentId', $videoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_STR);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':commentText', $commentText, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates EventVideoComment item
     *  @param $videoCommentId int The entity  videoCommentId field  
     *  @param $videoId int The entity  videoId field  
     *  @param $userId int The entity  userId field  
     *  @param $commentText string The entity  commentText field  
     *  @param $date string The entity  date field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoCommentDetails($videoCommentId, $videoId, $userId, $commentText, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideoComment(:videoCommentId, :videoId, :userId, :commentText, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoCommentId', $videoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_STR);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':commentText', $commentText, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates EventVideoComment item  field
     *  @param $videoCommentId int The entity  videoCommentId field  
     *  @param $videoId int The entity  videoId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoCommentVideoId($videoCommentId, $videoId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideoCommentVideoId(:videoCommentId, :videoId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoCommentId', $videoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':videoId', $videoId, PDO::PARAM_STR);

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
     * Updates EventVideoComment item  field
     *  @param $videoCommentId int The entity  videoCommentId field  
     *  @param $userId int The entity  userId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoCommentUserId($videoCommentId, $userId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideoCommentUserId(:videoCommentId, :userId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoCommentId', $videoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);

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
     * Updates EventVideoComment item  field
     *  @param $videoCommentId int The entity  videoCommentId field  
     *  @param $commentText string The entity  commentText field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoCommentCommentText($videoCommentId, $commentText) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideoCommentCommentText(:videoCommentId, :commentText);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoCommentId', $videoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':commentText', $commentText, PDO::PARAM_STR);

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
     * Updates EventVideoComment item  field
     *  @param $videoCommentId int The entity  videoCommentId field  
     *  @param $date string The entity  date field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateEventVideoCommentDate($videoCommentId, $date) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateEventVideoCommentDate(:videoCommentId, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':videoCommentId', $videoCommentId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * ********************************************************
     * Expense Methods
     * *********************************************************
     */

    /**
     * Updates Expense item
     *  @param $expenseId int The entity  expenseId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $title string The entity  title field  
     *  @param $amount double The entity  amount field  
     *  @param $category string The entity  category field  
     *  @param $billFileName string The entity  billFileName field  
     *  @param $transactionDate string The entity  transactionDate field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateExpense($expenseId, $eventId, $title, $amount, $category, $billFileName, $transactionDate) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateExpense(:expenseId, :eventId, :title, :amount, :category, :billFileName, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

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
     * Updates Expense item
     *  @param $expenseId int The entity  expenseId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $title string The entity  title field  
     *  @param $amount double The entity  amount field  
     *  @param $category string The entity  category field  
     *  @param $billFileName string The entity  billFileName field  
     *  @param $transactionDate string The entity  transactionDate field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateExpenseDetails($expenseId, $eventId, $title, $amount, $category, $billFileName, $transactionDate) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateExpense(:expenseId, :eventId, :title, :amount, :category, :billFileName, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

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
     * Updates Expense item  field
     *  @param $expenseId int The entity  expenseId field  
     *  @param $eventId int The entity  eventId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateExpenseEventId($expenseId, $eventId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateExpenseEventId(:expenseId, :eventId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);

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
     * Updates Expense item  field
     *  @param $expenseId int The entity  expenseId field  
     *  @param $title string The entity  title field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateExpenseTitle($expenseId, $title) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateExpenseTitle(:expenseId, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates Expense item  field
     *  @param $expenseId int The entity  expenseId field  
     *  @param $amount double The entity  amount field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateExpenseAmount($expenseId, $amount) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateExpenseAmount(:expenseId, :amount);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);

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
     * Updates Expense item  field
     *  @param $expenseId int The entity  expenseId field  
     *  @param $category string The entity  category field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateExpenseCategory($expenseId, $category) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateExpenseCategory(:expenseId, :category);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);

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
     * Updates Expense item  field
     *  @param $expenseId int The entity  expenseId field  
     *  @param $billFileName string The entity  billFileName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateExpenseBillFileName($expenseId, $billFileName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateExpenseBillFileName(:expenseId, :billFileName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);

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
     * Updates Expense item  field
     *  @param $expenseId int The entity  expenseId field  
     *  @param $transactionDate string The entity  transactionDate field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateExpenseTransactionDate($expenseId, $transactionDate) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateExpenseTransactionDate(:expenseId, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

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
     * ********************************************************
     * Income Methods
     * *********************************************************
     */

    /**
     * Updates Income item
     *  @param $incomeId int The entity  incomeId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $title string The entity  title field  
     *  @param $amount double The entity  amount field  
     *  @param $category string The entity  category field  
     *  @param $billFileName string The entity  billFileName field  
     *  @param $transactionDate string The entity  transactionDate field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateIncome($incomeId, $eventId, $title, $amount, $category, $billFileName, $transactionDate) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateIncome(:incomeId, :eventId, :title, :amount, :category, :billFileName, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

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
     * Updates Income item
     *  @param $incomeId int The entity  incomeId field  
     *  @param $eventId int The entity  eventId field  
     *  @param $title string The entity  title field  
     *  @param $amount double The entity  amount field  
     *  @param $category string The entity  category field  
     *  @param $billFileName string The entity  billFileName field  
     *  @param $transactionDate string The entity  transactionDate field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateIncomeDetails($incomeId, $eventId, $title, $amount, $category, $billFileName, $transactionDate) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateIncome(:incomeId, :eventId, :title, :amount, :category, :billFileName, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

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
     * Updates Income item  field
     *  @param $incomeId int The entity  incomeId field  
     *  @param $eventId int The entity  eventId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateIncomeEventId($incomeId, $eventId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateIncomeEventId(:incomeId, :eventId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_INT);
                $statement->bindParam(':eventId', $eventId, PDO::PARAM_STR);

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
     * Updates Income item  field
     *  @param $incomeId int The entity  incomeId field  
     *  @param $title string The entity  title field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateIncomeTitle($incomeId, $title) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateIncomeTitle(:incomeId, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates Income item  field
     *  @param $incomeId int The entity  incomeId field  
     *  @param $amount double The entity  amount field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateIncomeAmount($incomeId, $amount) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateIncomeAmount(:incomeId, :amount);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_INT);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);

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
     * Updates Income item  field
     *  @param $incomeId int The entity  incomeId field  
     *  @param $category string The entity  category field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateIncomeCategory($incomeId, $category) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateIncomeCategory(:incomeId, :category);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_INT);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);

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
     * Updates Income item  field
     *  @param $incomeId int The entity  incomeId field  
     *  @param $billFileName string The entity  billFileName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateIncomeBillFileName($incomeId, $billFileName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateIncomeBillFileName(:incomeId, :billFileName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_INT);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);

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
     * Updates Income item  field
     *  @param $incomeId int The entity  incomeId field  
     *  @param $transactionDate string The entity  transactionDate field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateIncomeTransactionDate($incomeId, $transactionDate) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateIncomeTransactionDate(:incomeId, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':incomeId', $incomeId, PDO::PARAM_INT);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

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
     * ********************************************************
     * LogActivity Methods
     * *********************************************************
     */

    /**
     * Updates LogActivity item
     *  @param $activityId int The entity  activityId field  
     *  @param $userId int The entity  userId field  
     *  @param $summary string The entity  summary field  
     *  @param $date string The entity  date field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateLogActivity($activityId, $userId, $summary, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateLogActivity(:activityId, :userId, :summary, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':activityId', $activityId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates LogActivity item
     *  @param $activityId int The entity  activityId field  
     *  @param $userId int The entity  userId field  
     *  @param $summary string The entity  summary field  
     *  @param $date string The entity  date field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateLogActivityDetails($activityId, $userId, $summary, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateLogActivity(:activityId, :userId, :summary, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':activityId', $activityId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates LogActivity item  field
     *  @param $activityId int The entity  activityId field  
     *  @param $userId int The entity  userId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateLogActivityUserId($activityId, $userId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateLogActivityUserId(:activityId, :userId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':activityId', $activityId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);

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
     * Updates LogActivity item  field
     *  @param $activityId int The entity  activityId field  
     *  @param $summary string The entity  summary field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateLogActivitySummary($activityId, $summary) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateLogActivitySummary(:activityId, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':activityId', $activityId, PDO::PARAM_INT);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * Updates LogActivity item  field
     *  @param $activityId int The entity  activityId field  
     *  @param $date string The entity  date field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateLogActivityDate($activityId, $date) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateLogActivityDate(:activityId, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':activityId', $activityId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * ********************************************************
     * Member Methods
     * *********************************************************
     */

    /**
     * Updates Member item
     *  @param $memberId int The entity  memberId field  
     *  @param $gender string The entity  gender field  
     *  @param $name string The entity  name field  
     *  @param $lastName string The entity  lastName field  
     *  @param $email string The entity  email field  
     *  @param $phoneNumber string The entity  phoneNumber field  
     *  @param $zipCode string The entity  zipCode field  
     *  @param $city string The entity  city field  
     *  @param $address string The entity  address field  
     *  @param $position string The entity  position field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMember($memberId, $gender, $name, $lastName, $email, $phoneNumber, $zipCode, $city, $address, $position) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMember(:memberId, :gender, :name, :lastName, :email, :phoneNumber, :zipCode, :city, :address, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
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
     * Updates Member item
     *  @param $memberId int The entity  memberId field  
     *  @param $gender string The entity  gender field  
     *  @param $name string The entity  name field  
     *  @param $lastName string The entity  lastName field  
     *  @param $email string The entity  email field  
     *  @param $phoneNumber string The entity  phoneNumber field  
     *  @param $zipCode string The entity  zipCode field  
     *  @param $city string The entity  city field  
     *  @param $address string The entity  address field  
     *  @param $position string The entity  position field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberDetails($memberId, $gender, $name, $lastName, $email, $phoneNumber, $zipCode, $city, $address, $position) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMember(:memberId, :gender, :name, :lastName, :email, :phoneNumber, :zipCode, :city, :address, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
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
     * Updates Member item  field
     *  @param $memberId int The entity  memberId field  
     *  @param $gender string The entity  gender field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberGender($memberId, $gender) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberGender(:memberId, :gender);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                $statement->bindParam(':gender', $gender, PDO::PARAM_STR);

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
     * Updates Member item  field
     *  @param $memberId int The entity  memberId field  
     *  @param $name string The entity  name field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberName($memberId, $name) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberName(:memberId, :name);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);

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
     * Updates Member item  field
     *  @param $memberId int The entity  memberId field  
     *  @param $lastName string The entity  lastName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberLastName($memberId, $lastName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberLastName(:memberId, :lastName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);

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
     * Updates Member item  field
     *  @param $memberId int The entity  memberId field  
     *  @param $email string The entity  email field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberEmail($memberId, $email) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberEmail(:memberId, :email);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);

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
     * Updates Member item  field
     *  @param $memberId int The entity  memberId field  
     *  @param $phoneNumber string The entity  phoneNumber field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberPhoneNumber($memberId, $phoneNumber) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberPhoneNumber(:memberId, :phoneNumber);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                $statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);

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
     * Updates Member item  field
     *  @param $memberId int The entity  memberId field  
     *  @param $zipCode string The entity  zipCode field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberZipCode($memberId, $zipCode) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberZipCode(:memberId, :zipCode);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                $statement->bindParam(':zipCode', $zipCode, PDO::PARAM_STR);

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
     * Updates Member item  field
     *  @param $memberId int The entity  memberId field  
     *  @param $city string The entity  city field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberCity($memberId, $city) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberCity(:memberId, :city);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                $statement->bindParam(':city', $city, PDO::PARAM_STR);

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
     * Updates Member item  field
     *  @param $memberId int The entity  memberId field  
     *  @param $address string The entity  address field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberAddress($memberId, $address) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberAddress(:memberId, :address);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                $statement->bindParam(':address', $address, PDO::PARAM_STR);

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
     * Updates Member item  field
     *  @param $memberId int The entity  memberId field  
     *  @param $position string The entity  position field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberPosition($memberId, $position) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberPosition(:memberId, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_INT);
                $statement->bindParam(':position', $position, PDO::PARAM_STR);

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
     * ********************************************************
     * MemberFee Methods
     * *********************************************************
     */

    /**
     * Updates MemberFee item
     *  @param $memberFeeId int The entity  memberFeeId field  
     *  @param $memberId int The entity  memberId field  
     *  @param $amount double The entity  amount field  
     *  @param $billFileName string The entity  billFileName field  
     *  @param $transactionDate string The entity  transactionDate field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberFee($memberFeeId, $memberId, $amount, $billFileName, $transactionDate) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberFee(:memberFeeId, :memberId, :amount, :billFileName, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberFeeId', $memberFeeId, PDO::PARAM_INT);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

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
     * Updates MemberFee item
     *  @param $memberFeeId int The entity  memberFeeId field  
     *  @param $memberId int The entity  memberId field  
     *  @param $amount double The entity  amount field  
     *  @param $billFileName string The entity  billFileName field  
     *  @param $transactionDate string The entity  transactionDate field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberFeeDetails($memberFeeId, $memberId, $amount, $billFileName, $transactionDate) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberFee(:memberFeeId, :memberId, :amount, :billFileName, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberFeeId', $memberFeeId, PDO::PARAM_INT);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

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
     * Updates MemberFee item  field
     *  @param $memberFeeId int The entity  memberFeeId field  
     *  @param $memberId int The entity  memberId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberFeeMemberId($memberFeeId, $memberId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberFeeMemberId(:memberFeeId, :memberId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberFeeId', $memberFeeId, PDO::PARAM_INT);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);

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
     * Updates MemberFee item  field
     *  @param $memberFeeId int The entity  memberFeeId field  
     *  @param $amount double The entity  amount field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberFeeAmount($memberFeeId, $amount) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberFeeAmount(:memberFeeId, :amount);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberFeeId', $memberFeeId, PDO::PARAM_INT);
                $statement->bindParam(':amount', $amount, PDO::PARAM_STR);

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
     * Updates MemberFee item  field
     *  @param $memberFeeId int The entity  memberFeeId field  
     *  @param $billFileName string The entity  billFileName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberFeeBillFileName($memberFeeId, $billFileName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberFeeBillFileName(:memberFeeId, :billFileName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberFeeId', $memberFeeId, PDO::PARAM_INT);
                $statement->bindParam(':billFileName', $billFileName, PDO::PARAM_STR);

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
     * Updates MemberFee item  field
     *  @param $memberFeeId int The entity  memberFeeId field  
     *  @param $transactionDate string The entity  transactionDate field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateMemberFeeTransactionDate($memberFeeId, $transactionDate) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateMemberFeeTransactionDate(:memberFeeId, :transactionDate);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':memberFeeId', $memberFeeId, PDO::PARAM_INT);
                $statement->bindParam(':transactionDate', $transactionDate, PDO::PARAM_STR);

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
     * ********************************************************
     * OfficeMember Methods
     * *********************************************************
     */

    /**
     * Updates OfficeMember item
     *  @param $officeMemberId int The entity  officeMemberId field  
     *  @param $memberId int The entity  memberId field  
     *  @param $position string The entity  position field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOfficeMember($officeMemberId, $memberId, $position) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOfficeMember(:officeMemberId, :memberId, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':officeMemberId', $officeMemberId, PDO::PARAM_INT);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);
                $statement->bindParam(':position', $position, PDO::PARAM_STR);

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
     * Updates OfficeMember item
     *  @param $officeMemberId int The entity  officeMemberId field  
     *  @param $memberId int The entity  memberId field  
     *  @param $position string The entity  position field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOfficeMemberDetails($officeMemberId, $memberId, $position) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOfficeMember(:officeMemberId, :memberId, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':officeMemberId', $officeMemberId, PDO::PARAM_INT);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);
                $statement->bindParam(':position', $position, PDO::PARAM_STR);

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
     * Updates OfficeMember item  field
     *  @param $officeMemberId int The entity  officeMemberId field  
     *  @param $memberId int The entity  memberId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOfficeMemberMemberId($officeMemberId, $memberId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOfficeMemberMemberId(:officeMemberId, :memberId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':officeMemberId', $officeMemberId, PDO::PARAM_INT);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);

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
     * Updates OfficeMember item  field
     *  @param $officeMemberId int The entity  officeMemberId field  
     *  @param $position string The entity  position field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOfficeMemberPosition($officeMemberId, $position) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOfficeMemberPosition(:officeMemberId, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':officeMemberId', $officeMemberId, PDO::PARAM_INT);
                $statement->bindParam(':position', $position, PDO::PARAM_STR);

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
     * ********************************************************
     * OldExam Methods
     * *********************************************************
     */

    /**
     * Updates OldExam item
     *  @param $examId int The entity  examId field  
     *  @param $userId int The entity  userId field  
     *  @param $subject string The entity  subject field  
     *  @param $title string The entity  title field  
     *  @param $semester string The entity  semester field  
     *  @param $date string The entity  date field 
     *  @param $fileFullName string The entity  fileFullName field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOldExam($examId, $userId, $subject, $title, $semester, $date, $fileFullName) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOldExam(:examId, :userId, :subject, :title, :semester, :date, :fileFullName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':semester', $semester, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);

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
     * Updates OldExam item
     *  @param $examId int The entity  examId field  
     *  @param $userId int The entity  userId field  
     *  @param $subject string The entity  subject field  
     *  @param $title string The entity  title field  
     *  @param $semester string The entity  semester field  
     *  @param $date string The entity  date field  
     *  @param $fileFullName string The entity  fileFullName field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOldExamDetails($examId, $userId, $subject, $title, $semester, $date, $fileFullName) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOldExam(:examId, :userId, :subject, :title, :semester, :date, :fileFullName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':semester', $semester, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);

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
     * Updates OldExam item  field
     *  @param $examId int The entity  examId field  
     *  @param $userId int The entity  userId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOldExamUserId($examId, $userId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOldExamUserId(:examId, :userId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);

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
     * Updates OldExam item  field
     *  @param $examId int The entity  examId field  
     *  @param $subject string The entity  subject field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOldExamSubject($examId, $subject) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOldExamSubject(:examId, :subject);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_INT);
                $statement->bindParam(':subject', $subject, PDO::PARAM_STR);

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
     * Updates OldExam item  field
     *  @param $examId int The entity  examId field  
     *  @param $title string The entity  title field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOldExamTitle($examId, $title) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOldExamTitle(:examId, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates OldExam item  field
     *  @param $examId int The entity  examId field  
     *  @param $semester string The entity  semester field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOldExamSemester($examId, $semester) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOldExamSemester(:examId, :semester);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_INT);
                $statement->bindParam(':semester', $semester, PDO::PARAM_STR);

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
     * Updates OldExam item  field
     *  @param $examId int The entity  examId field  
     *  @param $date string The entity  date field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOldExamDate($examId, $date) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOldExamDate(:examId, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates OldExam item  field
     *  @param $examId int The entity  examId field  
     *  @param $fileFullName string The entity  fileFullName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateOldExamFileFullName($examId, $fileFullName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateOldExamFileFullName(:examId, :fileFullName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':examId', $examId, PDO::PARAM_INT);
                $statement->bindParam(':fileFullName', $fileFullName, PDO::PARAM_STR);

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
     * ********************************************************
     * Project Methods
     * *********************************************************
     */

    /**
     * Updates Project item
     *  @param $projectId int The entity  projectId field  
     *  @param $userId int The entity  userId field  
     *  @param $title string The entity  title field  
     *  @param $summary string The entity  summary field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateProject($projectId, $userId, $title, $summary) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateProject(:projectId, :userId, :title, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':projectId', $projectId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * Updates Project item
     *  @param $projectId int The entity  projectId field  
     *  @param $userId int The entity  userId field  
     *  @param $title string The entity  title field  
     *  @param $summary string The entity  summary field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateProjectDetails($projectId, $userId, $title, $summary) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateProject(:projectId, :userId, :title, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':projectId', $projectId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * Updates Project item  field
     *  @param $projectId int The entity  projectId field  
     *  @param $userId int The entity  userId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateProjectUserId($projectId, $userId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateProjectUserId(:projectId, :userId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':projectId', $projectId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);

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
     * Updates Project item  field
     *  @param $projectId int The entity  projectId field  
     *  @param $title string The entity  title field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateProjectTitle($projectId, $title) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateProjectTitle(:projectId, :title);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':projectId', $projectId, PDO::PARAM_INT);
                $statement->bindParam(':title', $title, PDO::PARAM_STR);

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
     * Updates Project item  field
     *  @param $projectId int The entity  projectId field  
     *  @param $summary string The entity  summary field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateProjectSummary($projectId, $summary) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateProjectSummary(:projectId, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':projectId', $projectId, PDO::PARAM_INT);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * ********************************************************
     * Publication Methods
     * *********************************************************
     */

    /**
     * Updates Publication item
     *  @param $publicationId int The entity  publicationId field  
     *  @param $userId int The entity  userId field  
     *  @param $category string The entity  category field  
     *  @param $summary string The entity  summary field  
     *  @param $date string The entity  date field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updatePublication($publicationId, $userId, $category, $summary, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updatePublication(:publicationId, :userId, :category, :summary, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':publicationId', $publicationId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates Publication item
     *  @param $publicationId int The entity  publicationId field  
     *  @param $userId int The entity  userId field  
     *  @param $category string The entity  category field  
     *  @param $summary string The entity  summary field  
     *  @param $date string The entity  date field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updatePublicationDetails($publicationId, $userId, $category, $summary, $date) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updatePublication(:publicationId, :userId, :category, :summary, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':publicationId', $publicationId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates Publication item  field
     *  @param $publicationId int The entity  publicationId field  
     *  @param $userId int The entity  userId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updatePublicationUserId($publicationId, $userId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updatePublicationUserId(:publicationId, :userId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':publicationId', $publicationId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);

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
     * Updates Publication item  field
     *  @param $publicationId int The entity  publicationId field  
     *  @param $category string The entity  category field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updatePublicationCategory($publicationId, $category) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updatePublicationCategory(:publicationId, :category);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':publicationId', $publicationId, PDO::PARAM_INT);
                $statement->bindParam(':category', $category, PDO::PARAM_STR);

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
     * Updates Publication item  field
     *  @param $publicationId int The entity  publicationId field  
     *  @param $summary string The entity  summary field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updatePublicationSummary($publicationId, $summary) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updatePublicationSummary(:publicationId, :summary);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':publicationId', $publicationId, PDO::PARAM_INT);
                $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

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
     * Updates Publication item  field
     *  @param $publicationId int The entity  publicationId field  
     *  @param $date string The entity  date field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updatePublicationDate($publicationId, $date) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updatePublicationDate(:publicationId, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':publicationId', $publicationId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * ********************************************************
     * Role Methods
     * *********************************************************
     */

    /**
     * Updates Role item
     *  @param $roleId int The entity  roleId field  
     *  @param $name string The entity  name field  
     *  @param $description string The entity  description field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRole($roleId, $name, $description) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRole(:roleId, :name, :description);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_INT);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);
                $statement->bindParam(':description', $description, PDO::PARAM_STR);

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
     * Updates Role item
     *  @param $roleId int The entity  roleId field  
     *  @param $name string The entity  name field  
     *  @param $description string The entity  description field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleDetails($roleId, $name, $description) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRole(:roleId, :name, :description);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_INT);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);
                $statement->bindParam(':description', $description, PDO::PARAM_STR);

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
     * Updates Role item  field
     *  @param $roleId int The entity  roleId field  
     *  @param $name string The entity  name field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleName($roleId, $name) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleName(:roleId, :name);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_INT);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);

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
     * Updates Role item  field
     *  @param $roleId int The entity  roleId field  
     *  @param $description string The entity  description field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleDescription($roleId, $description) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleDescription(:roleId, :description);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_INT);
                $statement->bindParam(':description', $description, PDO::PARAM_STR);

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
     * ********************************************************
     * RoleAccessRight Methods
     * *********************************************************
     */

    /**
     * Updates RoleAccessRight item
     *  @param $roleAccessId int The entity  roleAccessId field  
     *  @param $roleId int The entity  roleId field  
     *  @param $entityType string The entity  entityType field  
     *  @param $createRight boolean The entity  createRight field  
     *  @param $readRight boolean The entity  readRight field  
     *  @param $editRight boolean The entity  editRight field  
     *  @param $deleteRight boolean The entity  deleteRight field  
     *  @param $fullRight boolean The entity  fullRight field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleAccessRight($roleAccessId, $roleId, $entityType, $createRight, $readRight, $editRight, $deleteRight, $fullRight) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleAccessRight(:roleAccessId, :roleId, :entityType, :createRight, :readRight, :editRight, :deleteRight, :fullRight);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_STR);
                $statement->bindParam(':entityType', $entityType, PDO::PARAM_STR);
                $statement->bindParam(':createRight', $createRight, PDO::PARAM_STR);
                $statement->bindParam(':readRight', $readRight, PDO::PARAM_STR);
                $statement->bindParam(':editRight', $editRight, PDO::PARAM_STR);
                $statement->bindParam(':deleteRight', $deleteRight, PDO::PARAM_STR);
                $statement->bindParam(':fullRight', $fullRight, PDO::PARAM_STR);

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
     * Updates RoleAccessRight item
     *  @param $roleAccessId int The entity  roleAccessId field  
     *  @param $roleId int The entity  roleId field  
     *  @param $entityType string The entity  entityType field  
     *  @param $createRight boolean The entity  createRight field  
     *  @param $readRight boolean The entity  readRight field  
     *  @param $editRight boolean The entity  editRight field  
     *  @param $deleteRight boolean The entity  deleteRight field  
     *  @param $fullRight boolean The entity  fullRight field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleAccessRightDetails($roleAccessId, $roleId, $entityType, $createRight, $readRight, $editRight, $deleteRight, $fullRight) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleAccessRight(:roleAccessId, :roleId, :entityType, :createRight, :readRight, :editRight, :deleteRight, :fullRight);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_STR);
                $statement->bindParam(':entityType', $entityType, PDO::PARAM_STR);
                $statement->bindParam(':createRight', $createRight, PDO::PARAM_STR);
                $statement->bindParam(':readRight', $readRight, PDO::PARAM_STR);
                $statement->bindParam(':editRight', $editRight, PDO::PARAM_STR);
                $statement->bindParam(':deleteRight', $deleteRight, PDO::PARAM_STR);
                $statement->bindParam(':fullRight', $fullRight, PDO::PARAM_STR);

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
     * Updates RoleAccessRight item  field
     *  @param $roleAccessId int The entity  roleAccessId field  
     *  @param $roleId int The entity  roleId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleAccessRightRoleId($roleAccessId, $roleId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleAccessRightRoleId(:roleAccessId, :roleId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                $statement->bindParam(':roleId', $roleId, PDO::PARAM_STR);

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
     * Updates RoleAccessRight item  field
     *  @param $roleAccessId int The entity  roleAccessId field  
     *  @param $entityType string The entity  entityType field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleAccessRightEntityType($roleAccessId, $entityType) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleAccessRightEntityType(:roleAccessId, :entityType);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                $statement->bindParam(':entityType', $entityType, PDO::PARAM_STR);

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
     * Updates RoleAccessRight item  field
     *  @param $roleAccessId int The entity  roleAccessId field  
     *  @param $createRight boolean The entity  createRight field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleAccessRightCreateRight($roleAccessId, $createRight) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleAccessRightCreateRight(:roleAccessId, :createRight);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                $statement->bindParam(':createRight', $createRight, PDO::PARAM_STR);

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
     * Updates RoleAccessRight item  field
     *  @param $roleAccessId int The entity  roleAccessId field  
     *  @param $readRight boolean The entity  readRight field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleAccessRightReadRight($roleAccessId, $readRight) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleAccessRightReadRight(:roleAccessId, :readRight);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                $statement->bindParam(':readRight', $readRight, PDO::PARAM_STR);

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
     * Updates RoleAccessRight item  field
     *  @param $roleAccessId int The entity  roleAccessId field  
     *  @param $editRight boolean The entity  editRight field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleAccessRightEditRight($roleAccessId, $editRight) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleAccessRightEditRight(:roleAccessId, :editRight);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                $statement->bindParam(':editRight', $editRight, PDO::PARAM_STR);

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
     * Updates RoleAccessRight item  field
     *  @param $roleAccessId int The entity  roleAccessId field  
     *  @param $deleteRight boolean The entity  deleteRight field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleAccessRightDeleteRight($roleAccessId, $deleteRight) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleAccessRightDeleteRight(:roleAccessId, :deleteRight);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                $statement->bindParam(':deleteRight', $deleteRight, PDO::PARAM_STR);

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
     * Updates RoleAccessRight item  field
     *  @param $roleAccessId int The entity  roleAccessId field  
     *  @param $fullRight boolean The entity  fullRight field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateRoleAccessRightFullRight($roleAccessId, $fullRight) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateRoleAccessRightFullRight(:roleAccessId, :fullRight);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':roleAccessId', $roleAccessId, PDO::PARAM_INT);
                $statement->bindParam(':fullRight', $fullRight, PDO::PARAM_STR);

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
     * ********************************************************
     * Tutorial Methods
     * *********************************************************
     */

    /**
     * Updates Tutorial item
     *  @param $tutorialId int The entity  tutorialId field  
     *  @param $memberId int The entity  memberId field  
     *  @param $date string The entity  date field  
     *  @param $subject string The entity  subject field  
     *  @param $level string The entity  level field  
     *  @param $location string The entity  location field  
     *  @param $shedules string The entity  shedules field  
     *  @param $status string The entity  status field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateTutorial($tutorialId, $memberId, $date, $subject, $level, $location, $shedules, $status) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateTutorial(:tutorialId, :memberId, :date, :subject, :level, :location, :shedules, :status);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
                $statement->bindParam(':level', $level, PDO::PARAM_STR);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);
                $statement->bindParam(':shedules', $shedules, PDO::PARAM_STR);
                $statement->bindParam(':status', $status, PDO::PARAM_STR);

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
     * Updates Tutorial item
     *  @param $tutorialId int The entity  tutorialId field  
     *  @param $memberId int The entity  memberId field  
     *  @param $date string The entity  date field  
     *  @param $subject string The entity  subject field  
     *  @param $level string The entity  level field  
     *  @param $location string The entity  location field  
     *  @param $shedules string The entity  shedules field  
     *  @param $status string The entity  status field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateTutorialDetails($tutorialId, $memberId, $date, $subject, $level, $location, $shedules, $status) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateTutorial(:tutorialId, :memberId, :date, :subject, :level, :location, :shedules, :status);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);
                $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
                $statement->bindParam(':level', $level, PDO::PARAM_STR);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);
                $statement->bindParam(':shedules', $shedules, PDO::PARAM_STR);
                $statement->bindParam(':status', $status, PDO::PARAM_STR);

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
     * Updates Tutorial item  field
     *  @param $tutorialId int The entity  tutorialId field  
     *  @param $memberId int The entity  memberId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateTutorialMemberId($tutorialId, $memberId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateTutorialMemberId(:tutorialId, :memberId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                $statement->bindParam(':memberId', $memberId, PDO::PARAM_STR);

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
     * Updates Tutorial item  field
     *  @param $tutorialId int The entity  tutorialId field  
     *  @param $date string The entity  date field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateTutorialDate($tutorialId, $date) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateTutorialDate(:tutorialId, :date);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                $statement->bindParam(':date', $date, PDO::PARAM_STR);

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
     * Updates Tutorial item  field
     *  @param $tutorialId int The entity  tutorialId field  
     *  @param $subject string The entity  subject field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateTutorialSubject($tutorialId, $subject) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateTutorialSubject(:tutorialId, :subject);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                $statement->bindParam(':subject', $subject, PDO::PARAM_STR);

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
     * Updates Tutorial item  field
     *  @param $tutorialId int The entity  tutorialId field  
     *  @param $level string The entity  level field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateTutorialLevel($tutorialId, $level) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateTutorialLevel(:tutorialId, :level);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                $statement->bindParam(':level', $level, PDO::PARAM_STR);

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
     * Updates Tutorial item  field
     *  @param $tutorialId int The entity  tutorialId field  
     *  @param $location string The entity  location field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateTutorialLocation($tutorialId, $location) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateTutorialLocation(:tutorialId, :location);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                $statement->bindParam(':location', $location, PDO::PARAM_STR);

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
     * Updates Tutorial item  field
     *  @param $tutorialId int The entity  tutorialId field  
     *  @param $shedules string The entity  shedules field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateTutorialShedules($tutorialId, $shedules) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateTutorialShedules(:tutorialId, :shedules);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                $statement->bindParam(':shedules', $shedules, PDO::PARAM_STR);

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
     * Updates Tutorial item  field
     *  @param $tutorialId int The entity  tutorialId field  
     *  @param $status string The entity  status field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateTutorialStatus($tutorialId, $status) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateTutorialStatus(:tutorialId, :status);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':tutorialId', $tutorialId, PDO::PARAM_INT);
                $statement->bindParam(':status', $status, PDO::PARAM_STR);

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
     * ********************************************************
     * User Methods
     * *********************************************************
     */

    /**
     * Updates User item
     *  @param $userId int The entity  userId field  
     *  @param $loginName string The entity  loginName field  
     *  @param $hashPassword string The entity  hashPassword field  
     *  @param $name string The entity  name field  
     *  @param $lastName string The entity  lastName field  
     *  @param $phoneNumber string The entity  phoneNumber field  
     *  @param $email string The entity  email field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUser($userId, $loginName, $hashPassword, $name, $lastName, $phoneNumber, $email) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUser(:userId, :loginName, :hashPassword, :name, :lastName, :phoneNumber, :email);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
                $statement->bindParam(':loginName', $loginName, PDO::PARAM_STR);
                $statement->bindParam(':hashPassword', $hashPassword, PDO::PARAM_STR);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);
                $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);
                $statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);

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
     * Updates User item
     *  @param $userId int The entity  userId field  
     *  @param $loginName string The entity  loginName field  
     *  @param $hashPassword string The entity  hashPassword field  
     *  @param $name string The entity  name field  
     *  @param $lastName string The entity  lastName field  
     *  @param $phoneNumber string The entity  phoneNumber field  
     *  @param $email string The entity  email field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserDetails($userId, $loginName, $hashPassword, $name, $lastName, $phoneNumber, $email) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUser(:userId, :loginName, :hashPassword, :name, :lastName, :phoneNumber, :email);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
                $statement->bindParam(':loginName', $loginName, PDO::PARAM_STR);
                $statement->bindParam(':hashPassword', $hashPassword, PDO::PARAM_STR);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);
                $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);
                $statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);

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
     * Updates User item  field
     *  @param $userId int The entity  userId field  
     *  @param $loginName string The entity  loginName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserLoginName($userId, $loginName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserLoginName(:userId, :loginName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
                $statement->bindParam(':loginName', $loginName, PDO::PARAM_STR);

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
     * Updates User item  field
     *  @param $userId int The entity  userId field  
     *  @param $hashPassword string The entity  hashPassword field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserHashPassword($userId, $hashPassword) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserHashPassword(:userId, :hashPassword);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
                $statement->bindParam(':hashPassword', $hashPassword, PDO::PARAM_STR);

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
     * Updates User item  field
     *  @param $userId int The entity  userId field  
     *  @param $name string The entity  name field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserName($userId, $name) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserName(:userId, :name);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);

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
     * Updates User item  field
     *  @param $userId int The entity  userId field  
     *  @param $lastName string The entity  lastName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserLastName($userId, $lastName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserLastName(:userId, :lastName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
                $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);

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
     * Updates User item  field
     *  @param $userId int The entity  userId field  
     *  @param $phoneNumber string The entity  phoneNumber field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserPhoneNumber($userId, $phoneNumber) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserPhoneNumber(:userId, :phoneNumber);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
                $statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);

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
     * Updates User item  field
     *  @param $userId int The entity  userId field  
     *  @param $email string The entity  email field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserEmail($userId, $email) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserEmail(:userId, :email);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);

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
     * ********************************************************
     * UserProfile Methods
     * *********************************************************
     */

    /**
     * Updates UserProfile item
     *  @param $profileId int The entity  profileId field  
     *  @param $userId int The entity  userId field  
     *  @param $gender string The entity  gender field  
     *  @param $photoFileName string The entity  photoFileName field  
     *  @param $street string The entity  street field  
     *  @param $zipCode string The entity  zipCode field  
     *  @param $city string The entity  city field  
     *  @param $address string The entity  address field  
     *  @param $defalutLanguage string The entity  defalutLanguage field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfile($profileId, $userId, $gender, $photoFileName, $street, $zipCode, $city, $address, $defalutLanguage) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfile(:profileId, :userId, :gender, :photoFileName, :street, :zipCode, :city, :address, :defalutLanguage);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
                $statement->bindParam(':photoFileName', $photoFileName, PDO::PARAM_STR);
                $statement->bindParam(':street', $street, PDO::PARAM_STR);
                $statement->bindParam(':zipCode', $zipCode, PDO::PARAM_STR);
                $statement->bindParam(':city', $city, PDO::PARAM_STR);
                $statement->bindParam(':address', $address, PDO::PARAM_STR);
                $statement->bindParam(':defalutLanguage', $defalutLanguage, PDO::PARAM_STR);

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
     * Updates UserProfile item
     *  @param $profileId int The entity  profileId field  
     *  @param $userId int The entity  userId field  
     *  @param $gender string The entity  gender field  
     *  @param $photoFileName string The entity  photoFileName field  
     *  @param $street string The entity  street field  
     *  @param $zipCode string The entity  zipCode field  
     *  @param $city string The entity  city field  
     *  @param $address string The entity  address field  
     *  @param $defalutLanguage string The entity  defalutLanguage field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfileDetails($profileId, $userId, $gender, $photoFileName, $street, $zipCode, $city, $address, $defalutLanguage) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfile(:profileId, :userId, :gender, :photoFileName, :street, :zipCode, :city, :address, :defalutLanguage);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);
                $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
                $statement->bindParam(':photoFileName', $photoFileName, PDO::PARAM_STR);
                $statement->bindParam(':street', $street, PDO::PARAM_STR);
                $statement->bindParam(':zipCode', $zipCode, PDO::PARAM_STR);
                $statement->bindParam(':city', $city, PDO::PARAM_STR);
                $statement->bindParam(':address', $address, PDO::PARAM_STR);
                $statement->bindParam(':defalutLanguage', $defalutLanguage, PDO::PARAM_STR);

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
     * Updates UserProfile item  field
     *  @param $profileId int The entity  profileId field  
     *  @param $userId int The entity  userId field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfileUserId($profileId, $userId) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfileUserId(:profileId, :userId);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':userId', $userId, PDO::PARAM_STR);

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
     * Updates UserProfile item  field
     *  @param $profileId int The entity  profileId field  
     *  @param $gender string The entity  gender field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfileGender($profileId, $gender) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfileGender(:profileId, :gender);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':gender', $gender, PDO::PARAM_STR);

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
     * Updates UserProfile item  field
     *  @param $profileId int The entity  profileId field  
     *  @param $photoFileName string The entity  photoFileName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfilePhotoFileName($profileId, $photoFileName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfilePhotoFileName(:profileId, :photoFileName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':photoFileName', $photoFileName, PDO::PARAM_STR);

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
     * Updates UserProfile item  field
     *  @param $profileId int The entity  profileId field  
     *  @param $street string The entity  street field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfileStreet($profileId, $street) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfileStreet(:profileId, :street);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':street', $street, PDO::PARAM_STR);

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
     * Updates UserProfile item  field
     *  @param $profileId int The entity  profileId field  
     *  @param $zipCode string The entity  zipCode field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfileZipCode($profileId, $zipCode) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfileZipCode(:profileId, :zipCode);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':zipCode', $zipCode, PDO::PARAM_STR);

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
     * Updates UserProfile item  field
     *  @param $profileId int The entity  profileId field  
     *  @param $city string The entity  city field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfileCity($profileId, $city) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfileCity(:profileId, :city);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':city', $city, PDO::PARAM_STR);

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
     * Updates UserProfile item  field
     *  @param $profileId int The entity  profileId field  
     *  @param $address string The entity  address field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfileAddress($profileId, $address) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfileAddress(:profileId, :address);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':address', $address, PDO::PARAM_STR);

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
     * Updates UserProfile item  field
     *  @param $profileId int The entity  profileId field  
     *  @param $defalutLanguage string The entity  defalutLanguage field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateUserProfileDefalutLanguage($profileId, $defalutLanguage) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateUserProfileDefalutLanguage(:profileId, :defalutLanguage);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':profileId', $profileId, PDO::PARAM_INT);
                $statement->bindParam(':defalutLanguage', $defalutLanguage, PDO::PARAM_STR);

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
     * ********************************************************
     * Veteran Methods
     * *********************************************************
     */

    /**
     * Updates Veteran item
     *  @param $veteranId int The entity  veteranId field  
     *  @param $gender string The entity  gender field  
     *  @param $name string The entity  name field  
     *  @param $lastName string The entity  lastName field  
     *  @param $email string The entity  email field  
     *  @param $phoneNumber string The entity  phoneNumber field  
     *  @param $zipCode string The entity  zipCode field  
     *  @param $city string The entity  city field  
     *  @param $address string The entity  address field  
     *  @param $position string The entity  position field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteran($veteranId, $gender, $name, $lastName, $email, $phoneNumber, $zipCode, $city, $address, $position) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteran(:veteranId, :gender, :name, :lastName, :email, :phoneNumber, :zipCode, :city, :address, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
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
     * Updates Veteran item
     *  @param $veteranId int The entity  veteranId field  
     *  @param $gender string The entity  gender field  
     *  @param $name string The entity  name field  
     *  @param $lastName string The entity  lastName field  
     *  @param $email string The entity  email field  
     *  @param $phoneNumber string The entity  phoneNumber field  
     *  @param $zipCode string The entity  zipCode field  
     *  @param $city string The entity  city field  
     *  @param $address string The entity  address field  
     *  @param $position string The entity  position field 
     * @return mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranDetails($veteranId, $gender, $name, $lastName, $email, $phoneNumber, $zipCode, $city, $address, $position) {
        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteran(:veteranId, :gender, :name, :lastName, :email, :phoneNumber, :zipCode, :city, :address, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
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
     * Updates Veteran item  field
     *  @param $veteranId int The entity  veteranId field  
     *  @param $gender string The entity  gender field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranGender($veteranId, $gender) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteranGender(:veteranId, :gender);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                $statement->bindParam(':gender', $gender, PDO::PARAM_STR);

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
     * Updates Veteran item  field
     *  @param $veteranId int The entity  veteranId field  
     *  @param $name string The entity  name field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranName($veteranId, $name) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteranName(:veteranId, :name);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                $statement->bindParam(':name', $name, PDO::PARAM_STR);

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
     * Updates Veteran item  field
     *  @param $veteranId int The entity  veteranId field  
     *  @param $lastName string The entity  lastName field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranLastName($veteranId, $lastName) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteranLastName(:veteranId, :lastName);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);

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
     * Updates Veteran item  field
     *  @param $veteranId int The entity  veteranId field  
     *  @param $email string The entity  email field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranEmail($veteranId, $email) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteranEmail(:veteranId, :email);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);

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
     * Updates Veteran item  field
     *  @param $veteranId int The entity  veteranId field  
     *  @param $phoneNumber string The entity  phoneNumber field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranPhoneNumber($veteranId, $phoneNumber) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteranPhoneNumber(:veteranId, :phoneNumber);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                $statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);

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
     * Updates Veteran item  field
     *  @param $veteranId int The entity  veteranId field  
     *  @param $zipCode string The entity  zipCode field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranZipCode($veteranId, $zipCode) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteranZipCode(:veteranId, :zipCode);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                $statement->bindParam(':zipCode', $zipCode, PDO::PARAM_STR);

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
     * Updates Veteran item  field
     *  @param $veteranId int The entity  veteranId field  
     *  @param $city string The entity  city field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranCity($veteranId, $city) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteranCity(:veteranId, :city);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                $statement->bindParam(':city', $city, PDO::PARAM_STR);

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
     * Updates Veteran item  field
     *  @param $veteranId int The entity  veteranId field  
     *  @param $address string The entity  address field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranAddress($veteranId, $address) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteranAddress(:veteranId, :address);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                $statement->bindParam(':address', $address, PDO::PARAM_STR);

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
     * Updates Veteran item  field
     *  @param $veteranId int The entity  veteranId field  
     *  @param $position string The entity  position field 
     * @return  mixed TRUE if update occured successfully, otherwise FALSE
     */
    public function updateVeteranPosition($veteranId, $position) {

        try {
            $pdo = $this->getDbConnection();
            $query = "CALL updateVeteranPosition(:veteranId, :position);";
            if (is_object($pdo) && get_class($pdo) == "PDO") {
                $statement = $pdo->prepare($query);
                $statement->bindParam(':veteranId', $veteranId, PDO::PARAM_INT);
                $statement->bindParam(':position', $position, PDO::PARAM_STR);

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

}
