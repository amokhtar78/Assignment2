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

$newPerson = new Person($userName, $dateofBirth, $userGender);

$zodiacArray = array(
    array('sign' => 'capricorn', 'start' => '01-01', 'end' => '01-20'),
    array('sign' => 'pisces', 'start' => '02-20', 'end' => '03-20'),
    array('sign' => 'aquarius', 'start' => '01-21', 'end' => '02-19'),
    array('sign' => 'aries', 'start' => '03-21', 'end' => '04-20'),
    array('sign' => 'taurus', 'start' => '04-21', 'end' => '05-21'),
    array('sign' => 'gemini', 'start' => '05-22', 'end' => '06-21'),
    array('sign' => 'cancer', 'start' => '06-22', 'end' => '07-22'),
    array('sign' => 'leo', 'start' => '07-23', 'end' => '08-23'),
    array('sign' => 'virgo', 'start' => '08-24', 'end' => '09-23'),
    array('sign' => 'libra', 'start' => '09-24', 'end' => '10-23'),
    array('sign' => 'scorpio', 'start' => '10-24', 'end' => '11-22'),
    array('sign' => 'sagittarius', 'start' => '11-23', 'end' => '12-21'),
    array('sign' => 'capricorn', 'start' => '12-22', 'end' => '12-31')
);

function searchZodiac($array, $date) {
    $zDate = date("m-d", strtotime($date));
    foreach ($array as $key => $val) {
        if ($val['end'] >= $zDate && $val['start'] <= $zDate) {
            return $val['sign'];
        }
    }
    return null;
}
