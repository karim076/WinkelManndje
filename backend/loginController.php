<?php
    session_start();
    if(isset($_GET['msg']))
    {
        echo "<divclass='msg'>" .$_GET['msg']. "</div>";
    }
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    //1. Haal gegevens van gebruiker op, aan de hand van email/username
    //   Vijfstappenplan:
    //      1. Haal de verbinding erbij
    require_once 'conn.php';
    //      2. Schrijf de query met placeholders (SELECT * FROM users WHERE .......)
    $query = "SELECT * FROM users WHERE username = :username";

    //      3. Zet om naar een prepared-statement
    $statement=$conn->prepare($query);
    //      4. Voer het statement uit
    $statement->execute([
        ":username" => $username
    ]);
    //  
    //      5. Haal de gegevens op (tip: je verwacht één resultaat, niet een lijst)
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    //2. Check of je een resultaat krijgt (anders: account bestaat niet)
    //   If-statement, check of "$statement->rowCount()" kleiner is dan 1
    if ( $statement->rowCount() < 1)
    {
        die("Error:account bestaat niet");
    }
    //3. Check of het ingevulde wachtwoord klopt met die uit de DB
    //   Gebruik hiervoor password_verify(), zie evt. http://php.net/password_verify
    if ( !password_verify($pass,$user['pass']))
    {
        die("Error:wachtwoord niet juist!");
    }

    //4. Alles alles klopt: stop gebruikersgegevens in de session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user["username"];
    $_SESSION['name'] = $user["name"];
    $_SESSION = $user['role'];
    header("location: $base_url/index.php?msg=$naming");
    exit;
?>