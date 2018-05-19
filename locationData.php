<?php

session_start();

function getMatchingOffender($country, $state, $city)
{
    include 'database.php';
    
    $db = getDBConnection();
    
    $sql = "SELECT * FROM offender_info WHERE 1"; 
         
    if (!empty($country)) 
    {
        $sql .= " AND offender_info.country = '$country'";
    }
    if(!empty($state))
    {
        $sql.=" AND offender_info.state = '$state'";
    }
    if (!empty($city)) 
    {
        $sql .= " AND offender_info.city = '$city'";
    }
    
    $statement = $db->prepare($sql);
    $statement->execute();
    $offender = $statement->fetchAll();
    
    echo json_encode($offender);
}

getMatchingOffender($_POST['country'], $_POST['state'], $_POST['city'], $_POST['severity']);
?>