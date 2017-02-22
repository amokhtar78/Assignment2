<?php

//Zodiac array is  writtten by Flávio H. Ferreirataken from https://gist.github.com/fhferreira/8339203
$zodiacArray = array(
    array('sign' => 'capricorn',
        'key' => 0, 'start' => '01-01', 'end' => '01-20'),
    array('sign' => 'pisces',
        'key' => 1, 'start' => '02-20', 'end' => '03-20'),
    array('sign' => 'aquarius',
        'key' => 2, 'start' => '01-21', 'end' => '02-19'),
    array('sign' => 'aries',
        'key' => 3, 'start' => '03-21', 'end' => '04-20'),
    array('sign' => 'taurus',
        'key' => 4, 'start' => '04-21', 'end' => '05-21'),
    array('sign' => 'gemini',
        'key' => 5, 'start' => '05-22', 'end' => '06-21'),
    array('sign' => 'cancer',
        'key' => 6, 'start' => '06-22', 'end' => '07-22'),
    array('sign' => 'leo',
        'key' => 7, 'start' => '07-23', 'end' => '08-23'),
    array('name' => 'virgo',
        'key' => 8, 'start' => '08-24', 'end' => '09-23'),
    array('sign' => 'libra',
        'key' => 9, 'start' => '09-24', 'end' => '10-23'),
    array('sign' => 'scorpio',
        'key' => 10, 'start' => '10-24', 'end' => '11-22'),
    array('sign' => 'sagittarius',
        'key' => 11, 'start' => '11-23', 'end' => '12-21'),
    array('sign' => 'capricorn',
        'key' => 12, 'start' => '12-22', 'end' => '12-31')
);

function findZodiac() {
    $zDate = $this->date->format('m-d');
 
    echo "####".$date;
  
   // foreach ($this->zodiacArray as $zodiac) {
   //     if ($date >= strtotime($year . '-' . $zodiac['start']) && $date <= strtotime($year . '-' . $zodiac['end'] . ' 23:59:59')) {
   //         return $zodiac['key'];
    //    }
    }    