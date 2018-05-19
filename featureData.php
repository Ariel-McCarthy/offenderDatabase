<?php

session_start();

function getFeature($eyes, $skin_color, $height, $stature, $hair)
{
    include 'database.php';
    
    $db = getDBConnection();
    
    $sql = "SELECT * FROM offender_info WHERE 1"; 
         
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
    
    $statement = $db->prepare($sql);
    $statement->execute();
    $offender = $statement->fetchAll();
    
    echo json_encode($offender);
}

getFeature($_POST['eyes'], $_POST['skin_color'], $_POST['height'], $_POST['stature'], $_POST['hair']);
?>