<?php

    var_dump($_POST);


    echo "<h1> You can find the file information at $_FILES </h1>";


    var_dump($_FILES);

    $imgname = $_FILES["image"]["name"];
    $imgtmpname = $_FILES["image"]["tmp_name"];
    $imgsize = $_FILES["image"]["size"];


    echo "<h1> To see the image on the server you must use move_uploaded_file </h1>";


    move_uploaded_file($imgtmpname, "images/{$imgname}");

    echo "<img width='200' height='200' src='images/{$imgname}'>";




