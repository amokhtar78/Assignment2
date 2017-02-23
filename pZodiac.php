<?php
/*
Amir Mokhatr Ali
logic file for Zodiac sign searcher
Form class by Susan Buck
https://github.com/susanBuck
*/
require('Form.php');
require('Person.php');
// variables are initilized her because of if statement scope
$userName = "";
$dateofBirth = "";
$userGender = "";
$errors ="";

//create new form
$form = new DWA\Form($_GET);

//check if user submits data
if ($form->isSubmitted()) {
    $userName = $form->get('userName', $default = ''); # String
    $dateofBirth = $form->get('date', $default = ''); # String
    $userGender = $form->get('gender', $default = ''); # String
    //check for errors
    $errors = $form->validate(
            [
                'userName' => 'required|max:15',
                'date'=>'required',
            ]
    );
}
//create new person
$newPerson = new Person($userName, $dateofBirth, $userGender);





