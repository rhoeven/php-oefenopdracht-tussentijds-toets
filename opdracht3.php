
<?php
$melding = "";

if(isset($_POST['verzenden'])){
    //empty($_POST['name']) || empty($_POST['movie']))
    if($_POST['name']==NULL || $_POST['movie']==NULL){
        $melding = "Vul alle velden in!";
    }else {
        session_start();
        $name = $_POST['name'];
        $_SESSION['name'] = $name;
        $movie = $_POST['movie'];
        switch($movie){
                case "1": $_SESSION['movie'] = "Spider-Man: No Way Home"; break;
                case "2": $_SESSION['movie'] = "Doctor Strange in the Multiverse of Madness "; break;
                case "3": $_SESSION['movie'] = "Avatar"; break;
                case "4": $_SESSION['movie'] = "Don't look up "; break;
                case "5": $_SESSION['movie'] = "Jumanji: The Next Level"; break;
                default: $melding = "Er is niks ingevuld."; break;

        }
        header("Location: movie.php");
    }

}
?>

<h1>Kiezen</h1>
<p>Maak een keuze uit een lijst van films. </p>
<p>Wanneer je op de knop drukt:</p>
<ul>
    <li>Controleert je programma of je je naam en een radio button ingedrukt hebt. Zo niet, geef de melding: Vul alle velden in!</li>
</ul>
</p>      <br>

<p>Wanneer alles ingevuld is:
<ol>
    <li>Zet de naam in een SESSION </li>
    <li>Zet de keuze in een SESSION </li>
    <li>Ga naar een andere pagina </li>
    <li>Laat de naam en de keuze zien door de SESSION's uit te lezen </li>

</ol>
</p>



<h2>FILM:</h2>

<form method='post'>
    <label>Naam: </label>
    <input type='text' name='name'> <br>


    <br>
    <label>Wat is je film keuze: </label> <br>
    <input type='radio' name='movie' value='1'> Spider-Man: No Way Home <br>
    <input type='radio' name='movie' value='2'> Doctor Strange in the Multiverse of Madness <br>
    <input type='radio' name='movie' value='3'> Avatar <br>
    <input type='radio' name='movie' value='4'> Don't look up <br>
    <input type='radio' name='movie' value='5'> Jumanji: The Next Level <br>


    <br>

    <input type='submit' name='verzenden' value='Keuze verzenden'>
</form>



<?php
echo $melding;
?>