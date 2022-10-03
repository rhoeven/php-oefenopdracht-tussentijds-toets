
<?php
$melding = "";

if(isset($_POST['verzenden'])){
    //empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['age']) || empty($_POST['geslacht'])
    if($_POST['fname']==NULL || $_POST['lname']==NULL || $_POST['age']==NULL || $_POST['geslacht']==NULL) {
        $melding = "Vul iets in.";
    }else {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $geslacht = $_POST['geslacht'];
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

        if(!$age){
            $melding = "Vul een getal in.";
        }
        else{
            $melding =  "Hallo $fname $lname. Je leeftijd is $age. Je geslaccht is $geslacht.";

        }
    }
}
?>

<h1>De opdracht</h1>
<p>Maak een formulier waarbij je je voornaam, achternaam en geslacht invult.<br>
    Deze laat je uiteindelijk zien, wanneer je op de knop drukt.</p>
<p>Controleer het formulier op:
<ol>
    <li>Wanneer er bij een input niks ingevuld is, komt er een feedback bericht: "Vul iets in."</li>
    <li>Wanneer er geen getal bij de leeftijd ingevuld is, komt er een feedback bericht: "Vul een getal in."</li>
</ol>
</p>


<h2>Het formulier</h2>

<form method='post'>
    <label>Voornaam: </label>
    <input type='text' name='fname'> <br>

    <label>Achternaam: </label>
    <input type='text' name='lname'> <br>

    <label>Leeftijd: </label>
    <input type='text' name='age'> <br>
    <br>
    <label>Geslacht: </label> <br>
    <input type='radio' name='geslacht' value='m'>Man <br>
    <input type='radio' name='geslacht' value='v'>Vrouw <br>
    <input type='radio' name='geslacht' value='a'>Anders <br>


    <input type='submit' name='verzenden' value='Verzenden'>
</form>



<?php
    echo $melding;
?>