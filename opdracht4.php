<?php
    if (isset($_POST['submit'])) {
        $getal1 = filter_input(INPUT_POST, 'getal1', FILTER_VALIDATE_FLOAT);
        $getal2 = filter_input(INPUT_POST, 'getal2', FILTER_VALIDATE_FLOAT);

        if ($getal1 === false || $getal2 === false) {
            $melding = "vul een getal in";
        } else {
            if (!empty($getal1) && !empty($getal2) && !empty($_POST['rekenfunctie'])) {
                switch ($_POST['rekenfunctie']) {
                    case 'plus': $melding = "$getal1 + $getal2 = ".$getal1 + $getal2; break;
                    case 'min': $melding = "$getal1 - $getal2 = " .$getal1 - $getal2; break;
                    case 'keer': $melding = "$getal1 * $getal2 = " .$getal1 * $getal2; break;
                    case 'deel': $melding = "$getal1 / $getal2 = " .$getal1 / $getal2;
                }
            }  else {
                $melding = "vul alle velden in";
            }
        }
    } else {
        $melding = "";
    }
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>opdracht 4</title>
    </head>
    <body>
        <form method="post">
            <label for="getal1">Getal 1</label>
            <input type="text" id="getal1" name="getal1" value="">
            <br>
            <label for="getal2">Getal 2</label>
            <input type="text" id="getal2" name="getal2" value="">
            <br>
            <br>
            <label>Wat wil je</label>
            <br>
            <input type="radio" id="plus" name="rekenfunctie" value="plus" />
            <label for="plus">+</label>
            <br>
            <input type="radio" id="min" name="rekenfunctie" value="min" />
            <label for="min">-</label>
            <br>
            <input type="radio" id="keer" name="rekenfunctie" value="keer" />
            <label for="keer">*</label>
            <br>
            <input type="radio" id="deel" name="rekenfunctie" value="deel" />
            <label for="deel">/</label>
            <br>
            <br>
            <input type="submit" name="submit" value="Uitrekenen"/>
        </form>
    </body>
</html>
<?php
    echo $melding;
?>