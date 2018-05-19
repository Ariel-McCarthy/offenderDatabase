<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <h3>Admin Page</h3>
        <img src="img/admin.png" width="300"/>
        <form action="updateInfo.php" method="get">
            Update Offender Information<button name="update" type="submit">Go</button><br/><br/>
        </form>    
        <form action="addOffender.php" method="get">    
            Add New Offender<button name="update" type="submit">Go</button><br/><br/>
        </form>    
        <form action="deleteOffender.php" method="get">    
            Delete Offender<button name="update" type="submit">Go</button><br/>
        </form>
    </body>
</html>