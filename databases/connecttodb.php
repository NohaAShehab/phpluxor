<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
    echo "<h1> 
        first you need to make sure that the extension for mysql is enabled
        
        pdo_mysql
    </h1>";


    echo "<h3> !- Set Connection Credentionals </h3>";

    $dbuser="phpluxor";
    $dbpassword="Iti123456789_";
    $dbname="phpluxor";
    $port="3306";

    echo "<h3> 2- Connect to the database  </h3>";

    $dsn="mysql:database={$dbname};host=127.0.0.1;port={$port}";
    var_dump($dsn);

    /***
        we use Method PDO ---> connect to the database --> without details
        $db= new PDO($dsn, $dbuser, $dbpassword);
     */

    $db= new PDO($dsn, $dbuser, $dbpassword);

    var_dump($db);  # connected
    ################################ Prepare data to insert ################################
    var_dump($_POST);
    $firstname= $_POST["firstname"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    ######################### image info
    $imgname = $_FILES["image"]["name"];
    $tmpname = $_FILES["image"]["tmp_name"];
    #### then upload the image
    move_uploaded_file($tmpname,"images/{$imgname}");

    var_dump($_FILES);

    ########################  INSERT INTO TABLE ################################

    # prepared statement
    $insertQuery = "insert into `phpluxor`.`students` (fname, email, img, stdpassword) 
        values(:stdname,:studentemail, :stdimg, :stdpass)";

    $instStmt = $db->prepare($insertQuery);
    $instStmt->bindParam(":stdname", $firstname);
    $instStmt->bindParam(":studentemail", $email);
    $instStmt->bindParam(":stdimg", $imgname);
    $instStmt->bindParam(":stdpass", $password);
    $instStmt->execute();








