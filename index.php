/**
 * Created by PhpStorm.
 * User: 1308830
 * Date: 03/10/2016
 * Time: 15:50
 */
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
<?php
$myname = "Frodo of bag end";
$myage = 75;
echo "My name is " . $myname . " and I am " . $myage;
// i guess everything before doctype! gets printed as basic text
$name = "Edgar";

if($name == "Simon"){
    print "i know you!";
}
else{
    print "Who are you?";
}
?>
</p>
</body>
</html>