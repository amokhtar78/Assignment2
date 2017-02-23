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

    public $pName;
    public $pDate;
    public $zDate;
    public $pGender;
    

    public function __construct($pName, $pDate, $pGender) {
        $this->pName = $pName;
        $this->pDate = $pDate;
        $this->pGender = $pGender;
    }

   

    public function displayPerson() {
        return "this $this->pGender is named $this->pName and was born on $this->pDate";
    }

}
