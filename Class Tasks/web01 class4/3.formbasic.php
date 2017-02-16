<!DOCTYPE html>
<html>
<head>
    <title>Form GET POST</title>
</head>


<body>

<h1><center>Basic Form Actionz</center></h1><hr>

<form id="" action="form_action.php" method="POST"> <!--If undefined method... works GET-->
    <fieldset>
        <legend>Personal information:</legend>
        First Name : <br/>
        <input type="text" name="firstname" value="">
        <br />
        Last Name : <br/>
        <input type="text" name="lastname" value="">
        <br /> <br />

        <label>Select Cars :</label><br>

        <select>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select>

        <br>
        <h3>Text Area Example</h3>
        <textarea name="message" rows="10" cols="30"></textarea>

        <br>
        <h3>Input Type Number</h3>

        Quantity(between 1 and 10):
        <input type="number" name="quantity" min="0" max="10">

        <br>
        <h3>The Read Only Attribute</h3>
        First Name:<br/>
        <input type="text" name="firstname" value="Sufian" readonly>

        <br>
        <h3>The Disabled Attribute</h3>
        First Name:<br/>
        <input type="text" name="lastname" value="Ahmed" disabled>

        <br>
        <h3>Button Example</h3>
        <button type="button" onclick="alert('Hello World! From Your Web Browser ;)')">Click Me!</button>


        <br>
        <h3>Radio Button Example</h3>
        <input type="radio" name="gender" value="male" checked>Male<br>
        <input type="radio" name="gender" value="female">Female<br>
        <input type="radio" name="gender" value="other">Other<br>

        <br>
        <h3>Checkbox Example</h3>
        <input type="checkbox" name="vehicle1" value="Bike">I have a Bike!<br>
        <input type="checkbox" name="vehicle2" value="Car">I have a Car!<br>
        <input type="checkbox" name="nothing" value="Nothing">Poor Me, I have Nothing :'(<br>

        <br>
        <h3>The Size Attribute</h3>

        First Name:<br/>
        <input type="text" name="firstname" value="Suafian" size="40"><br/>

        Last Name:<br/>
        <input type="text" name="lastname" value="Ahmed" size="10">

        <br>
        <h3>The MaxLength Attribute</h3>

        First Name:<br/>
        <input type="text" name="firstname" value="Sufian" maxlength="8"><br/>
        <br>
        <h3>The MinLength Attribute</h3>
        Last Name:<br/>
        <input type="text" name="lastname" value="Ahmed" minlength="4"><br/>

        First:<br/>
        <input type="text" name="lastname" autofocus><br/>

        <br>
        <h3>Autofocus Attribute</h3>

        First Name:<br/>
        <input type="text" name="firstname" value="Sufian" maxlength="50"><br/>

        <br>
        <h3>select your favourite color:</h3>
        <input type="color" name="favcolor">



        <input type="submit" value="Submit">
        <input type="reset">

    </fieldset>
</form>

</body>
</html>