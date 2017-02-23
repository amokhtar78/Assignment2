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
    Private $zodiacArray = array(
        array('sign' => "Capricorn ♑", 'start' => '12-22', 'end' => '12-31'),
        array('sign' => "Capricorn ♑", 'start' => '01-01', 'end' => '01-19'),
        array('sign' => "Aquarius ♒", 'start' => '01-20', 'end' => '02-18'),
        array('sign' => "Pisces ♓", 'start' => '02-19', 'end' => '03-20'),
        array('sign' => "Aries ♈", 'start' => '03-21', 'end' => '04-19'),
        array('sign' => "Taurus ♉", 'start' => '04-20', 'end' => '05-20'),
        array('sign' => "Gemini ♊", 'start' => '05-21', 'end' => '06-20'),
        array('sign' => "Cancer ♋", 'start' => '06-21', 'end' => '07-22'),
        array('sign' => "Leo ♌", 'start' => '07-23', 'end' => '08-22'),
        array('sign' => "Virgo ♍", 'start' => '08-23', 'end' => '09-22'),
        array('sign' => "Libra ♎", 'start' => '09-23', 'end' => '10-22'),
        array('sign' => "Scorpio ♏", 'start' => '10-23', 'end' => '11-21'),
        array('sign' => "Sagittarius ♐", 'start' => '11-22', 'end' => '12-21')
    );

    public function __construct($pName, $pDate, $pGender) {
        $this->pName = $pName;
        $this->pDate = $pDate;
        $this->pGender = $pGender;
    }

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
        return $aYear - $aDate;
    }

    public function displayHisHer() {
        if ($this->pGender == "female") {
            return "her";
        } else {
            return "his";
        }
    }

    public function displayZodiac() {
        $zDate = date("m-d", strtotime($this->pDate));
        foreach ($this->zodiacArray as $key => $val) {
            if ($val['end'] >= $zDate && $val['start'] <= $zDate) {
                return $val['sign'];
            }
        }
        return null;
    }

}
