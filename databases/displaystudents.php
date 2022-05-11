<?php


######################33 connect to the databases ###################
echo "<h3> !- Set Connection Credentionals </h3>";

    $dbuser="phpluxor";
    $dbpassword="Iti123456789_";
    $dbname="phpluxor";
    $port="3306";

echo "<h3> 2- Connect to the database  </h3>";

$dsn="mysql:database={$dbname};host=127.0.0.1;port={$port}";
$db= new PDO($dsn, $dbuser, $dbpassword);

var_dump($db);

##########################33 select #####################

$selectquery = "select * from `phpluxor`.`students` ;";
$stmt = $db->prepare($selectquery);
$res=$stmt->execute();  # result_set
$rows =$stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows);  # array has the all the rows


echo "<table border='3px'> <tr> <th>ID</th>, <th>Firstname</th> <th> email</th>
<th> image</th> <th>password</th></tr>";

foreach ($rows as $row){
//    var_dump($row);
    echo "<tr>";
    foreach ($row as $k=>$f){
        if ($k=="img"){
            echo "<td><img width='50px' height='50px' src='images/{$f}'> </td>";
        }else{
        echo "<td>{$f}</td>";
        }
    }

    echo "</tr>";
}



