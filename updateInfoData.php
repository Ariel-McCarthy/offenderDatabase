<?php
session_start();
        
echo $offender;

function updateOffender($db)
{
    include 'database.php';
    
    $db = getDBConnection();
    
    $sql = "UPDATE * FROM offender_info SET"; 
    
    if(!empty($firstName))
    {
        $sql.=" firstName = '$firstName'";
    }
    if(!empty($lastName))
    {
        $sql.=" lastName = '$lastName'";
    }       
    if(!empty($eyes))
    {
        $sql.=" eyes = '$eyes'";
    }
    if(!empty($skin_color))
    {
        $sql.=" skin_color = '$skin_color'";
    } 
    if(!empty($height))
    {
        $sql.=" height = '$height'";
    }
    if(!empty($stature))
    {
        $sql.=" stature = '$stature'";
    } 
    if(!empty($hair))
    {
        $sql.=" hair = '$hair'";
    }
        if(!empty($country))
    {
        $sql.=" country = '$country'";
    }
    if(!empty($state))
    {
        $sql.=" state = '$state'";
    } 
    if(!empty($city))
    {
        $sql.=" city = '$city'";
    }
        if(!empty($city))
    {
        $sql.=" city = '$city'";
    }
        
    $statement = $db->prepare($sql);
    $statement->execute();
    $offender = $statement->fetchAll();
    // $offender = $statement->fetch(PDO::FETCH_ASSOC);
    
    return $offender;
}
$changeIt = updateOffender($db);

//Echo the json back into file so tht ajax can use it.
echo json_encode($changeIt);
?>