<!DOCTYPE html>
<html>
    <head>
        <title>Search by Feature(s)</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h3>Choose the feature(s) you'd like to search by</h3>
        <br/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <form method='POST' id="submitFeatures">
        <select id="eyes">
                <option >Eye Color</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="hazel">Hazel</option>
                <option value="brown">Brown</option>
                <option value="black">Black</option>
            </select>
            <select id="skin_color">
                <option >Skin Color</option>
                <option value="fair">Fair</option>
                <option value="tan">Tan</option>
                <option value="lt. brown">Light Brown</option>
                <option value="brown">Brown</option>
                <option value="dk. brown">Dark Brown</option>
            </select> 
            <select id="height">
                <option >Height</option>
                <option value="4ft 6in">4ft 6in</option>
                <option value="4ft 7in">4ft 7in</option>
                <option value="4ft 8in">4ft 8in</option>
                <option value="4ft 9in">4ft 9in</option>
                <option value="4ft 10in">4ft 10in</option>
                <option value="4ft 11in">4ft 11in</option>
                <option value="5ft 0in">5ft 0in</option>
                <option value="5ft 1in">5ft 1in</option>
                <option value="5ft 2in">5ft 2in</option>
                <option value="5ft 3in">5ft 3in</option>
                <option value="5ft 4in">5ft 4in</option>
                <option value="5ft 5in">5ft 5in</option>
                <option value="5ft 6in">5ft 6in</option>
                <option value="5ft 7in">5ft 7in</option>
                <option value="5ft 8in">5ft 8in</option>
                <option value="5ft 9in">5ft 9in</option>
                <option value="5ft 10in">5ft 10in</option>
                <option value="5ft 11in">5ft 11in</option>
                <option value="6ft 0in">6ft 0in</option>
                <option value="6ft 1in">6ft 1in</option>
                <option value="6ft 2in">6ft 2in</option>
                <option value="6ft 3in">6ft 3in</option>
                <option value="6ft 4in">6ft 4in</option>
                <option value="6ft 5in">6ft 5in</option>
                <option value="6ft 6in">6ft 6in</option>
                <option value="6ft 7in">6ft 7in</option>
                <option value="6ft 8in">6ft 8in</option>
                <option value="6ft 9in">6ft 9in</option>
                <option value="6ft 10in">6ft 10in</option>
                <option value="6ft 11in">6ft 11in</option>
                <option value="7ft 0in">7ft 0in</option>
                <option value="7ft 1in">7ft 1in</option>
                <option value="7ft 2in">7ft 2in</option>
                <option value="7ft 3in">7ft 3in</option>
                <option value="7ft 4in">7ft 4in</option>
                <option value="7ft 5in">7ft 5in</option>
                <option value="7ft 6in">7ft 6in</option>
            </select>
            <br/><br/>
            <select id="stature">
                <option >Stature</option>
                <option value="thin">Thin</option>
                <option value="toned">Toned</option>
                <option value="average">Average</option>
                <option value="muscular">Muscular</option>
                <option value="slightly o">Slightly Overweight</option>
                <option value="overweight">Overweight</option>
                <option value="obese">Obese</option>
            </select>
            <select id="hair">
                <option >Hair</option>
                <option value="white">White</option>
                <option value="grey">Grey</option>
                <option value="blond(e)">Blond(e)</option>
                <option value="auburn">Auburn</option>
                <option value="brown">Brown</option>
                <option value="dk. brown">Dark Brown</option>
                <option value="black">Black</option>
            </select>
            <script src="js/translate.js"></script>
            </br><br/>
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

// function getMatchingFeatures($db)
// {
//     include 'database.php';
    
//     $db = getDBConnection();
    
//     $sql = "SELECT offender_info.eyes, offender_info.skin_color, offender_info.height, 
//             offender_info.stature, offender_info.hair FROM offender_info"; 
           
//     if(!empty($eyes))
//     {
//         $sql.=" AND eyes LIKE '%$eyes%'";
//     }
//     if(!empty($skin_color))
//     {
//         $sql.=" AND skin_color LIKE '%$skin_color%'";
//     } 
//     if(!empty($height))
//     {
//         $sql.=" AND height LIKE '%$height%'";
//     }
//     if(!empty($stature))
//     {
//         $sql.=" AND stature LIKE '%$stature%'";
//     } 
//     if(!empty($hair))
//     {
//         $sql.=" AND hair LIKE '%$hair%'";
//     }
    
//     // $sql.=" WHERE country = '".$_POST['country']."'";
        
//     $statement = $db->prepare($sql);
//     $statement->execute();
//     $offender = $statement->fetchAll();
//     // $offender = $stmt->fetch(PDO::FETCH_ASSOC);
    
//     return $offender;
// }
// $getIt = getMatchingFeatures($db);

// //Echo the json back into file so tht ajax can use it.
// echo json_encode($getIt);
?>