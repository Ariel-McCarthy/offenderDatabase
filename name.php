<!DOCTYPE html>
<html>
    <head>
        <title>Search by Name</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h3>Search by Name</h3>
        <br/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <form method='POST' id="submitName"> <!-- You need the id for binding the js function on submission-->
            <!-- ID for both of these -->
            First name: <input id= "firstName"  type="text" name= "firstName"/><br/><br/>
            Last Name: <input id= "lastName" type= "text" name= "lastName"><br/><br/>
            
            <script src="js/translate.js"></script>
            
            <input type="submit" name="submit" value= "Submit"/><br/><br/>
            <!-- You need this div to output dynamically, leave it blank-->
            <div id = "output">
                
            <!-- You need this to print login success-->
            </div><span id = "success"></span>
            
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </body>
</html>
<?php
// session_start();

// function getMatchingName($db)
// {
//     include 'database.php';
    
//     $db = getDBConnection();
    
//     $sql = "SELECT offender_info.firstName, offender_info.lastName FROM offender_info"; 
           
//     if(!empty($firstName))
//     {
//         $sql.=" AND firstName LIKE '%$firstName%'";
//     }
//     if(!empty($lastName))
//     {
//         $sql.=" AND lastName LIKE '%$lastName%'";
//     } 
        
//     $statement = $db->prepare($sql);
//     $statement->execute();
//     $offender = $statement->fetchAll();
//     // $offender = $stmt->fetch(PDO::FETCH_ASSOC);
    
//     return $offender;
// }
// $getIt = getMatchingName($db);

// //Echo the json back into file so tht ajax can use it.
// echo json_encode($getIt);
?>