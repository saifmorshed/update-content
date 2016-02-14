<?php

include_once 'connect.php';

$id = $_POST['update_id'];
$name = $_POST['Name'];
$ledership= $_POST['Leadership'];
$des = $_POST['Description'];
$Headline = $_POST['Headline1'];
$Hcontent = $_POST['H1content'];
$Hcontent = mysql_real_escape_string($Hcontent); 
$Hhadline = $_POST['Headline2'];
$Hhcontent =  $_POST['H2content'];
$Hhcontent = mysql_real_escape_string($Hhcontent); 





$update = "UPDATE  `groups` SET  `Name` =  '$name', `Leadership` = '$ledership', `Description` = '$des', `Headline1` = '$Headline', `H1content` = '$Hcontent', `Headline2` = '$Hhadline', `H2content` = '$Hhcontent' WHERE id =$id";
echo $sql;

mysql_query($update);

if (mysql_query($update)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysql_error();
}

    
    
?>
