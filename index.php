/**
 * Created by PhpStorm.
 * User: 1308830
 * Date: 03/10/2016
 * Time: 15:50
 */
<!DOCTYPE html>
<html>
    <head>
    $databaseName = "acsm_e63985346002dbb";
    </head>
<body>
<p>
<?php
// connect to csdm webdev server and select database
$db = new mysqli(
    "hostname",
    "username",
    "password",
    "db_name"
);
// tesyt if connection was established, and print any errors
if($db->connection_errno){
    die('Connect failed['.$db->connect_error.']');
}
// create a SQL query as a string
$sql_query = "SELECT * FROM superheroes WHERE superpower LIKE '% aser %'";
//execute the SQL query
$result = $db->fetch_array()){
    // process the $row
}
while($row = $result->fetch_array()){
    // print out fields from row of daya
    echo"<p>".$row['superheroName']."</p>";
}
$result->dose();
// dose connection to database
$db->dose();
?>
</p>
</body>
</html>