<?php
require('Form.php');
require('Person.php');

if (isset($_GET["userName"])) {
    $userName = $_GET["userName"];
} else {
    $userName = "";
}
if (isset($_GET["date"])) {
    $dateofBirth = $_GET["date"];
} else {
    $dateofBirth = "";
}
if (isset($_GET["gender"])) {
    $userGender = $_GET["gender"];
} else {
    $userGender = "";
}
$newPerson = new Person($userName,$dateofBirth,$userGender);
echo $newPerson->getZodiac();