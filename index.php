<!DOCTYPE html>
<html>
    <head>
        <title>Main Menu</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    </head>
    <body>
        <h3>Sex Offender Finder</h3>
        <?php
            session_start();
            
            echo "<a href='login.php' >Click here to login as an admin...</a>";
            echo "<br/><br/>Click below to search for offender";
        ?>
        <div class="content-wrapper">
            <div id="creep">
                <img src="img/creep.jpg" width="300" />
            </div>
            <div class="content-wrapper"></div>
            <div id="menu_page"></div>
        </div>
        <h3>Main Menu</h3>
        <form action="name.php" method="get">
            Search by:
            <br/>
            <button name="subject" type="submit" value="name.php">Name</button>
        </form> 
        <form action="feature.php" method="get">
            <button name="subject" type="submit" value="feature.php">Feature</button>
        </form>
        <form action="location.php" method="get">
            <button name="subject" type="submit" value="location.php">Location</button>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!--<script src="js/translate.js"></script>-->
    </body>
</html>