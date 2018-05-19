<?php

session_start();

function getMatchingOffender($firstName, $lastName, $eyes, $skin_color, $height, $stature, $hair, $country, $state, $city)
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
    if (!empty($eyes)) 
    {
        $sql .= " AND offender_info.eyes = '$eyes'";
    }
    if(!empty($skin_color))
    {
        $sql.=" AND offender_info.skin_color = '$skin_color'";
    }
    if (!empty($height)) 
    {
        $sql .= " AND offender_info.height = '$height'";
    }
    if(!empty($stature))
    {
        $sql.=" AND offender_info.stature = '$stature'";
    }
    if (!empty($hair)) 
    {
        $sql .= " AND offender_info.hair = '$hair'";
    }
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

getMatchingOffender($_POST['firstName'], $_POST['lastName'], $_POST['eyes'], $_POST['skin_color'], $_POST['height'], 
                    $_POST['stature'], $_POST['hair'], $_POST['country'], $_POST['state'], $_POST['city'], $_POST['severity']);
?>