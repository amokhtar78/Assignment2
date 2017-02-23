<?php

require('Form.php');
require('Person.php');

$userName = "";
$dateofBirth = "";
$userGender = "";

$form = new DWA\Form($_GET);
if ($form->isSubmitted()) {
    $userName = $form->get('userName', $default = ''); # String
    $dateofBirth = $form->get('date', $default = ''); # String
    $userGender = $form->get('gender', $default = ''); # String
    $errors = $form->validate(
            [
                'userName' => 'required|max:15',
                'date'=>'required',
            ]
    );
}
$newPerson = new Person($userName, $dateofBirth, $userGender);





