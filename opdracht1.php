<?php
    if (isset($_POST['submit'])) {
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_FLOAT);
        if ($age === false) {
            $melding = "vul een getal in bij 'leeftijd'";
        } else {
            if (!empty($fname) && !empty($lname) && !empty($age) && !empty($_POST['geslacht'])) {
                if ($_POST['geslacht'] === 'anders') {
                    $melding = "Hallo " .$fname . " " .$lname. ", je bent ".$age. " jaar en je bent iets anders dan man of vrouw";
                } else {
                    $melding = "Hallo " .$fname . " " .$lname. ", je bent ".$age. " jaar en je bent een " .$_POST['geslacht'];
                }

            } else {
                $melding = 'vul <strong>alle</strong> velden in';
            }
        }

    } else {
        $melding = "";
    }
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>opdracht 1</title>
    </head>
    <body>
    <form method="post">
        <label for="fname">Voornaam</label>
        <input id="fname" name="fname" type="text" value=""/>
        <br>
        <label for="lname">Achternaam</label>
        <input id="lname" name="lname" type="text" value=""/>
        <br>
        <label for="age">Leeftijd</label>
        <input id="age" name="age" type="text" value=""/>
        <br>
        <br>
        <label>Geslacht:</label>
        <br>
        <input id="Man" type="radio" value="man" name="geslacht"/>
        <label for="Man">Man</label>
        <br>
        <input id="vrouw" type="radio" value="vrouw" name="geslacht"/>
        <label for="vrouw">Vrouw</label>
        <br>
        <input id="anders" type="radio" value="anders" name="geslacht"/>
        <label for="anders">Anders</label>
        <br>
        <input type="submit" name="submit">
    </form>
    </body>
</html>

<?php
    echo $melding;
?>