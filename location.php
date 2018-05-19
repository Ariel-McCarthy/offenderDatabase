<!DOCTYPE html>
<html>
    <head>
        <title>Search by Location</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <h3>Search by Location</h3>
        <br/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <form method='POST' id="submitLocation">
            <select id="firstChoice" id="country">
                <option >Country</option>
                <option value="Brazil">Brazil</option>
                <option value="UK">UK</option>
                <option value="USA">USA</option>
            </select>

             <select id="secondChoice" id="firstChoice2" id="state">
                <option >City</option>
                <option value="California">California</option>
                <option value="Florida">Florida</option>
                <option value="Indiana">Indiana</option>
                <option value="Nevada">Nevada</option>
                <option value="New York">New York</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Texas">Texas</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Rio De Janeiro">Rio De Janeiro</option>
                <option value="Scotland">Scotland</option>
                
            </select>
            <select id="secondChoice2" id="city">
                <option >City</option>
                <option value="Los Olivos">Los Olivos</option>
                <option value="Melbourne">Melbourne</option>
                <option value="Zionsville">Zionsville</option>
                <option value="Henderson">Henderson</option>
                <option value="Buffalo">Buffalo</option>
                <option value="Peekskill">Peekskill</option>
                <option value="Cheltenham">Cheltenham</option>
                <option value="Chester">Chester</option>
                <option value="El Paso">Wisconsin</option>
                <option value="Rio De Janeiro">Rio De Janeiro</option>
                <option value="Milwaukee">Milwaukee</option>
                <option value="Fraserburgh">Fraserburgh</option>               
            </select>
            <script src="js/translate.js"></script>
            <br/><br/>
            <input type="submit" id="submit" value= "Submit"/>
            
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

// function getMatchingLocation($db)
// {
//     include 'database.php';
    
//     $db = getDBConnection();
    
//     $sql = "SELECT * FROM offender_info WHERE 1"; 
           
//     if(!empty($country))
//     {
//         $sql.=" AND country LIKE '%$country%'";
//     }
//     if(!empty($state))
//     {
//         $sql.=" AND state LIKE '%$state%'";
//     } 
//     if(!empty($city))
//     {
//         $sql.=" AND city LIKE '%$city%'";
//     } 
        
//     $statement = $db->prepare($sql);
//     $statement->execute();
//     $offender = $statement->fetchAll();

    
//     return $offender;
// }
// $getIt = getMatchingLocation($db);

// //Echo the json back into file so tht ajax can use it.
// echo json_encode($getIt);
?>