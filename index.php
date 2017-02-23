<!DOCTYPE html>
<?php
require('pZodiac.php');
?>
<!--
Amir Mokhatr Ali
Display file for Zodiac sign searcher
General design from foobook by Susan Buck
https://github.com/susanBuck
-->
<html>
    <head>
        <title>Zodiac</title>

        <meta charset='utf-8'>
        <!--
         load styles
        -->
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
        <link href='css/styles.css' rel='stylesheet'>
    </head>
    <!--
    change background color depending on gender
    -->
    <?php
    if ($newPerson->displayGender() == "female") {
        echo '<body class="femaleColor">';
    } elseif ($newPerson->displayGender() == "male") {
        echo '<body class="maleColor">';
    } else {
        echo '<body class="stnColor">';
    }
    ?>

    <h1>Zodiac Sign Finder</h1>
    <!--
    display input form for user name, DoB, and gender
    -->
    <form action="index.php" method="get">
        <label for='userName'>Enter your name:</label>
        <input type="text" name="userName" id="userName" value='<?= $form->prefill('Name') ?>'>

        <label for='date'>Date of Birth</label>
        <input type='date' name='date' id="date">

        <label for='gender'>Select your gender:</label>
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
               value="female">Female
        <input type="radio" name="gender" id ="gender"
        <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
               value="male">Male<br>
        <!--
        send input to logic file
        -->
        <input type="submit" class='btn btn-primary btn-sm'>
    </form>
    <!--
    check for errors and display proper error msg
    -->
    <?php if ($errors): ?>

        <div class='alert alert-danger'>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    <?php elseif ($form->isSubmitted()): ?>
        <!--
        if no errors display Zodiac
        -->
        <div class='alert alert-info'>
            <?php echo $newPerson->displayName() ?> who is
            <?php echo $newPerson->displayAge() ?> years old,
            <?php echo $newPerson->displayHisHer() ?> zodiac is : 
            <strong>  <?php echo $newPerson->displayZodiac(); ?></strong>
        </div>

    <?php endif; ?>
</body>
</html>