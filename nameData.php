<?php

session_start();

function getMatchingName($firstName, $lastName)
{
    include 'database.php';
    
    $db = getDBConnection();
    
    $sql = "SELECT * FROM offender_info WHERE 1"; 
         
    if(!empty($firstName))
    {
        $sql.=" AND firstName LIKE '%$firstName%'";
    }
    if(!empty($lastName))
    {
        $sql.=" AND lastName LIKE '%$lastName%'";
    }    
    
    $statement = $db->prepare($sql);
    $statement->execute();
    $offender = $statement->fetchAll();
    
    echo json_encode($offender);
}

getMatchingName($_POST['firstName'], $_POST['lastName']);
?>