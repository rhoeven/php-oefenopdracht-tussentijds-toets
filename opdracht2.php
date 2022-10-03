
<?php
$melding = "";

if(isset($_POST['verzenden'])){
    //empty($_POST['password']) || empty($_POST['username']))
    if($_POST['password']==NULL || $_POST['username']==NULL) {
        $melding = "Vul alle velden in!";
    }else {
        $username = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_EMAIL);

        if(!$username){
            $melding = "Vul een email als gebruikersnaam in!";
        }
        else{
            $password = $_POST['password'];
            if ($username === "test@gmail.com" && $password === "1234"){
                header("Location: admin.php");
            }
            else {
                $melding = "Uw gebruikersnaam en/of wachtwoord is niet bekend bij ons.";
            }
        }
    }
}
?>

<h1>De opdracht</h1>
<p>Wanneer je op de inlog knop drukt:
<ul>
    <li>Controleert je programma of je alle velden ingevuld hebt. Zo niet, geef de melding: Vul alle velden in!</li>
    <li>Controleert je programma of je gebruikersnaam een email is. Zo niet, geef de melding: Vul een email als gebruikersnaam in! </li>
</ul>
</p>      <br>

<p>Wanneer alles ingevuld is en je gebruikersnaam een email is:
<ol>
    <li>Als je gebruikersnaam: test@gmail.com en je wachtwoord: 1234 is => Je gaat naar de admin pagina"</li>
    <li>Als je gebruikersnaam en/ of wachtwoord niet kloppen: Geef de melding: "Uw gebruikersnaam en/of wachtwoord is niet bekend bij ons."</li>
</ol>
</p>


<h2>Inloggen</h2>

<form method='post'>
    <label>Gebruikersnaam: </label>
    <input type='text' name='username'> <br>

    <label>Wachtwoord: </label>
    <input type='password' name='password'> <br>

    <br>
    <br>



    <input type='submit' name='verzenden' value='Verzenden'>
</form>



<?php
echo $melding;
?>