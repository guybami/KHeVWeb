<?php

include_once "../Includes/ReportErrors.php";
include_once "../Includes/Utils.php";
include_once "../DataAccessObject/DaoCommon.php";
include_once "../Models/EntityCommon.php";


/**
 * TestEntity short summary.
 *
 * TestEntity description.
 *
 * @version 1.0
 * @author gbami
 */


$servername = "localhost";
$username = "root";
$password = "root4Web!";
$dbname = "sakila";
$sql = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO actor (first_name, last_name, last_update)
    VALUES ('John', 'Doe', '2006-02-15 04:47:33')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;