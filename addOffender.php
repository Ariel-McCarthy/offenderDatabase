<!DOCTYPE html>
<html>
    <header>
        <title>Add Offender to Database</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </header>
    <body>
        <h3>Add Offender</h3>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <form method='POST' id="submitAddOffender">
            First Name<input type="text" id="firstName"/>
            Last Name<input type="text" id="lastName"/>
            <br/><br/><br/>
            Eye Color<select id="eyes">
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="hazel">Hazel</option>
                <option value="brown">Brown</option>
                <option value="black">Black</option>
            </select>
            Skin Color<select id="skin_color">
                <option value="fair">Fair</option>
                <option value="tan">Tan</option>
                <option value="lt. brown">Light Brown</option>
                <option value="brown">Brown</option>
                <option value="dk. brown">Dark Brown</option>
            </select> 
            Height<select id="height">
                <option value="4ft6in">4ft 6in</option>
                <option value="4ft7in">4ft 7in</option>
                <option value="4ft8in">4ft 8in</option>
                <option value="4ft9in">4ft 9in</option>
                <option value="4ft10in">4ft 10in</option>
                <option value="4ft11in">4ft 11in</option>
                <option value="5ft0in">5ft 0in</option>
                <option value="5ft1in">5ft 1in</option>
                <option value="5ft2in">5ft 2in</option>
                <option value="5ft3in">5ft 3in</option>
                <option value="5ft4in">5ft 4in</option>
                <option value="5ft5in">5ft 5in</option>
                <option value="5ft6in">5ft 6in</option>
                <option value="5ft7in">5ft 7in</option>
                <option value="5ft8in">5ft 8in</option>
                <option value="5ft9in">5ft 9in</option>
                <option value="5ft10in">5ft 10in</option>
                <option value="5ft11in">5ft 11in</option>
                <option value="6ft0in">6ft 0in</option>
                <option value="6ft1in">6ft 1in</option>
                <option value="6ft2in">6ft 2in</option>
                <option value="6ft3in">6ft 3in</option>
                <option value="6ft4in">6ft 4in</option>
                <option value="6ft5in">6ft 5in</option>
                <option value="6ft6in">6ft 6in</option>
                <option value="6ft7in">6ft 7in</option>
                <option value="6ft8in">6ft 8in</option>
                <option value="6ft9in">6ft 9in</option>
                <option value="6ft10in">6ft 10in</option>
                <option value="6ft11in">6ft 11in</option>
                <option value="7ft0in">7ft 0in</option>
                <option value="7ft1in">7ft 1in</option>
                <option value="7ft2in">7ft 2in</option>
                <option value="7ft3in">7ft 3in</option>
                <option value="7ft4in">7ft 4in</option>
                <option value="7ft5in">7ft 5in</option>
                <option value="7ft6in">7ft 6in</option>
            </select>
            <br/><br/>
            Stature<select id="stature">
                <option value="thin">Thin</option>
                <option value="toned">Toned</option>
                <option value="average">Average</option>
                <option value="muscular">Muscular</option>
                <option value="slightly o">Slightly Overweight</option>
                <option value="overweight">Overweight</option>
                <option value="obese">Obese</option>
            </select>
            Hair Color<select id="hair">
                <option value="white">White</option>
                <option value="grey">Grey</option>
                <option value="blond(e)">Blond(e)</option>
                <option value="auburn">Auburn</option>
                <option value="brown">Brown</option>
                <option value="dk. brown">Dark Brown</option>
                <option value="black">Black</option>
            </select>
            <br/><br/><br/>
            Country<input type="text" id="country"/>
            State<input type="text" id="state"/>
            City<input type="text" id="city"/>
            
            Severity<select type="text" id="severity" name="severity">
                <option value="high">High</option>
                <option value="medium">Medium</option>
                <option value="low">Low</option>
                </select>
                
            <script src="js/translate.js"></script>
    
            <input type="submit" value="Submit"/>
            <!-- You need this div to output dynamically, leave it blank-->
            <div id = "output">
                
            <!-- You need this to print login success-->
            </div><span id = "success"></span>
        
        </form>
    </body>
</html>
