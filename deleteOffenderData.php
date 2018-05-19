<?php

echo $offender;

function deleteOffenderFromDB($firstName, $lastName, $eyes, $skin_color, $height, $stature, $hair, $country, $state, $city)
{
    include 'database.php';
    
    $db = getDBConnection();
    
    // $sql = "DELETE FROM offender_info WHERE"; 
    
    $sql = "DELETE FROM offender_info WHERE firstName=".$_POST['firstName'];
        
    $statement = $db->prepare($sql);
    $statement->execute();
    //$offender = $statement->fetchAll();
    
    //return $offender;
}
$deleteIt = deleteOffenderFromDB($_POST['firstName'], $_POST['lastName'], $_POST['eyes'], $_POST['skin_color'], $_POST['height'], 
                    $_POST['stature'], $_POST['hair'], $_POST['country'], $_POST['state'], $_POST['city'], $_POST['severity']);

//Echo the json back into file so tht ajax can use it.
echo json_encode($deleteIt);


//echo json_encode(5);
?>



