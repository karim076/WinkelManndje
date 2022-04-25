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
    if(empty($username))
    {
        $msg = "Vul een titel in";
        header("location: ../task/create.php?msg=$msg");
    }
    else if(empty($name))
    {
        $msg = "Vul een naam in";
        header("location: ../task/create.php?msg=$msg");
    }
    else if(empty($email))
    {
        $msg = "kies een asignee";
        header("location: ../task/create.php?msg=$msg");
    }
    else if(empty($pass))
    {
        $msg = "Vul een beschrijving in";
        header("location: ../task/create.php?msg=$msg");
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
    $msg = "Uw acount is Succesvol aangemaakt log nu in!";
    header("location: $base_url/userItem/login.php?msg=$msg");
    exit;
?>