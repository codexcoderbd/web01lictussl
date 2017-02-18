<!DOCTYPE html>
<html>
<head>
    <title>Form GET POST</title>
</head>

<?php

if (isset($_POST["submit"]))
{
    $fname = $_POST['firstname'];

    $lname = $_POST['lastname'];

    echo $fname."<br/>";
    echo $lname."<br/>";
}

?>

<body>

<form id="" action="" method="POST"> <!--If undefined method... works GET-->
    <fieldset>
        <legend>Personal information:</legend>
        First Name : <br/>
        <input type="text" name="firstname" value="">
        <br />
        Last Name : <br/>
        <input type="text" name="lastname" value="">
        <br /> <br />
        <input type="submit" name="submit" value="Submit">

    </fieldset>
</form>

</body>
</html>