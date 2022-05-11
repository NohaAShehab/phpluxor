<?php
$firstname ="Ahemd";

$insertQuery = "insert into `phpluxor`.`students` (fname, email, img, stdpassword) 
        values('{$firstname}','{$firstname}', '{$firstname}', '{$firstname}' )";

var_dump($insertQuery);