<?php
session_start();

    include 'database.php';
    $db = getDBConnection(); 
    
        $sql = " INSERT INTO offender_info (offender_id, firstName, lastName, eyes, skin_color, height, stature, hair, country, state, city, severity) VALUES (NULL, '"
        .$_POST['firstName']."','" .$_POST['lastName']."','" .$_POST['eyes']."','" .$_POST['skin_color']."','".$_POST['height']."','".$_POST['stature']."','" .$_POST['hair']."','" .$_POST['country']."','" 
        .$_POST['state']."','" .$_POST['city']."','" .$_POST['severity']."')";

        $statement = $db->prepare($sql); 
        
            $statement->execute();
            echo json_encode(4);
?>