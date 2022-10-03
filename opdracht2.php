<?php
    if (isset($_POST['submit'])) {
        $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        if (!empty($user) && !empty($password)) {
            if ($user == 'test@gmail.com' && $password == '1234') {
                header('location:admin.php');
            } else {
                $melding = 'Uw gebruikersnaam en/of wachtwoord is niet bekend bij ons';
            }
        } else {
            $melding = "vul alle velden in";
        }
    } else {
        $melding = '';
    }
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>opdracht 2</title>
    </head>
    <body>
        <form method="post">
            <label for="user">Gebruikersnaam:</label>
            <input type="text" id="user" name="user" value=""/>
            <br>
            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" value=""/>
            <br>
            <br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    echo $melding;
?>