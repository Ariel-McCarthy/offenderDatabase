<!DOCTYPE html>
<html>
    <header>
        <title>Offender(s)</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </header>
    <body>
        <h3>Offender(s)</h3>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <form method='POST' id="matchingOffender">
            
            First Name<input type="text" id="firstName"/>
            Last Name<input type="text" id="lastName"/>
            
            <br/><br/><br/>
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
            
            <br/><br/><br/>
            <select id="firstChoice" name="country">
                <option >Country</option>
                <option value="Brazil">Brazil</option>
                <option value="UK">UK</option>
                <option value="USA">USA</option>
            </select>

             <select id="secondChoice" id="firstChoice2" id="state">
                <option >State</option>
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
            <input type="submit" id="submit" value="Submit" /> 

         <div id = "output">
                
            <!-- You need this to print login success-->
        </div><span id = "success"></span>

        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </body>
</html>