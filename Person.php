<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author amir
 */
class Person {

    private $pName;
    private $pDate;
    private $pGender;

    public function __construct($pName, $pDate, $pGender) {
        $this->pName = $pName;
        $this->pDate = $pDate;
        $this->pGender = $pGender;
    }

    Private $zodiacArray = array(
        array('sign' => 'Capricorn', 'start' => '01-01', 'end' => '01-20'),
        array('sign' => 'Pisces', 'start' => '02-20', 'end' => '03-20'),
        array('sign' => 'Aquarius', 'start' => '01-21', 'end' => '02-19'),
        array('sign' => 'Aries', 'start' => '03-21', 'end' => '04-20'),
        array('sign' => 'Taurus', 'start' => '04-21', 'end' => '05-21'),
        array('sign' => 'Gemini', 'start' => '05-22', 'end' => '06-21'),
        array('sign' => 'Cancer', 'start' => '06-22', 'end' => '07-22'),
        array('sign' => 'Leo', 'start' => '07-23', 'end' => '08-23'),
        array('sign' => 'Virgo', 'start' => '08-24', 'end' => '09-23'),
        array('sign' => 'Libra', 'start' => '09-24', 'end' => '10-23'),
        array('sign' => 'Scorpio', 'start' => '10-24', 'end' => '11-22'),
        array('sign' => 'Sagittarius', 'start' => '11-23', 'end' => '12-21'),
        array('sign' => 'Capricorn', 'start' => '12-22', 'end' => '12-31')
    );

    public function displayName() {
        return $this->pName;
    }

    public function displayDoB() {
        return $this->pDate;
    }

    public function displayGender() {
        return $this->pGender;
    }

    public function displayAge() {
        $aDate = date("Y", strtotime($this->pDate));
        $aYear = date("Y");
        return $aYear-$aDate;
    }

    public function displayHisHer() {
        if ($this->pGender == "female") {
            return "her";
        } else {
            return "his";
        }
    }

    public function searchZodiac() {
        $zDate = date("m-d", strtotime($this->pDate));
        foreach ($this->zodiacArray as $key => $val) {
            if ($val['end'] >= $zDate && $val['start'] <= $zDate) {
                return $val['sign'];
            }
        }
        return null;
    }

}
