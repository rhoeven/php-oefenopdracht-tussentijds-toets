<?php
    session_start();
    if (isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $_SESSION['name'] = $name;
        $_SESSION['movie'] = $_POST['movie'];
        header('location:movie.php');
    }



?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>opdracht 3</title>
    </head>
    <body>
    <form method="post">
        <label for="name">Naam: </label>
        <input type="text" id="name" name="name" value=""/>
        <br>
        <br>
        <label>Wat is je film keuze:</label>
        <br>
        <input type="radio" id="spider" name="movie" value="Spider-Man: No Way home"/>
        <label for="spider">Spider-Man: No Way Home</label>
        <br>
        <input type="radio" id="strange" name="movie" value="Doctor Strange in the Multiverse of Madness"/>
        <label for="strange">Doctor Strange in the Multiverse of Madness</label>
        <br>
        <input type="radio" id="avatar" name="movie" value="Avatar"/>
        <label for="avatar">Avatar</label>
        <br>
        <input type="radio" id="look" name="movie" value="don't look up"/>
        <label for="look">Don't look up</label>
        <br>
        <input type="radio" id="jumanji" name="movie" value="Jumanji: The Next Level"/>
        <label for="jumanji">Jumanji: The Next Level</label>
        <br>
        <br>
        <input type="submit" name="submit" value="Keuze verzenden">
    </form>
    </body>
</html>
