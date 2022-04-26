<?php
    session_start();
    if(isset($_SESSION['user_id']))
    {
        die("Kan niet registreren je bent al ingelogd");    
    }
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    # kijkt of het email geldig is
    if(filter_var($email,FILTER_VALIDATE_EMAIL) === false)
    {
        die('Email is ongeldig!');
    }
    # checks
    if(!isset($username))
    {
        $_SESSION['logged'] = "Vul een titel in";
        header("location: ../userItem/register.php");
    }
    else if(empty($name))
    {
        $_SESSION['logged'] = "Vul een naam in";
        header("location: ../userItem/register.php");
    }
    else if(empty($email))
    {
        $_SESSION['logged'] = "kies een email";
        header("location: ../userItem/register.php");
    }
    else if(empty($pass))
    {
        $_SESSION['logged'] = "Vul een wachtwoord in";
        header("location: ../userItem/register.php");
    }

    if(isset($errors))
    {
        var_dump($errors);
        die();
    }
    // hashing
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    //1. Verbinding
    require_once 'conn.php';
    
    //2. Query
    $query = "INSERT INTO users(username,name,email,pass) 
              VALUES(:username,:name,:email,:pass)";
    
    //3. Prepare
    $statement=$conn->prepare($query);
    //4. Execute
    $statement->execute
    ([
        ":name" => $name,
        ":username" => $username,
        ":email" => $email,
        ":pass" => $hash
    ]);
    $_SESSION['logged'] = "<div class='msg'>Account succesvol aangemaakt. </div>";
    $msg = "Uw acount is Succesvol aangemaakt log nu in!";
    header("location: $base_url/userItem/login.php?msg=$msg");
    exit;
?>