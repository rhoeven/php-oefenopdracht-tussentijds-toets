
<?php
$melding = "";

if(isset($_POST['verzenden'])){
    //empty($_POST['number1']) || empty($_POST['number2']) || empty($_POST['reken']))
    if($_POST['number1']==NULL || $_POST['number2']==NULL || $_POST['reken']==NULL) {
        $melding = "Vul alle velden in!";
    }else {
        $number1 = filter_input(INPUT_POST, 'number1', FILTER_VALIDATE_FLOAT);
        $number2 = filter_input(INPUT_POST, 'number2', FILTER_VALIDATE_FLOAT);

        if(!$number1 || !$number2){
            $melding = "Vul een getal in!";
        }
        else{
            $reken = $_POST['reken'];
            switch($reken){
                case "op": $number = $number1 + $number2;
                    $melding = "$number1 + $number2 = $number"; break;
                case "af": $number = $number1 - $number2;
                    $melding = "$number1 - $number2 = $number"; break;
                case "keer": $number = $number1 * $number2;
                    $melding = "$number1 * $number2 = $number"; break;
                case "delen": $number = $number1 / $number2;
                    $number = number_format($number, 2);
                    $melding = "$number1 / $number2 = $number"; break;
                default: $melding = "Er is niks ingevuld."; break;

            }
        }
    }
}
?>

<h1>Rekenmachine</h1>
<p>Maak een rekenmachine die de uitkomst laat zien. </p>
<p>Wanneer je op de uitreken knop drukt:</p>
<ol>
    <li>Controleert je programma of je alle velden ingevuld hebt. Zo niet, geef de melding: Vul alle velden in!</li>
    <li>Controleert je programma of je in de 2 input velden een getal ingevuld hebt. Zo niet, geef de melding: Vul een getal in! </li>
</ol>
</p>      <br>

<p>Wanneer alles ingevuld is en de invoervelden getallen zijn:
<ul>
    <li>Als de aangeklikte radio button + is, optellen van de getallen </li>
    <li>Als de aangeklikte radio button - is, aftrekken van de getallen </li>
    <li>Als de aangeklikte radio button * is, vermenigvuldigen van de getallen </li>
    <li>Als de aangeklikte radio button / is, delen van de getallen. En laat dan de uitkomst zien met 2 cijfers achter de komma! </li>

</ul>
</p>



<h2>Rekenmachine</h2>

<form method='post'>
    <label>Getal 1: </label>
    <input type='number' name='number1'> <br>

    <label>Getal 2: </label>
    <input type='number' name='number2'> <br>

    <br>
    <label>Wat wil je: </label> <br>
    <input type='radio' name='reken' value='op'> + <br>
    <input type='radio' name='reken' value='af'> - <br>
    <input type='radio' name='reken' value='keer'> * <br>
    <input type='radio' name='reken' value='delen'> / <br>


    <br>

    <input type='submit' name='verzenden' value='Uitrekenen'>
</form>



<?php
echo $melding;
?>