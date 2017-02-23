<?php
require('pZodiac.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Zodiac</title>

        <meta charset='utf-8'>

        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
        <link href='css/styles.css' rel='stylesheet'>
        <?php
        if ($newPerson->displayGender() == "female") {
            echo '<body class="femaleColor">';
        } elseif ($newPerson->displayGender() == "male") {
            echo '<body class="maleColor">';
        } else {
            echo '<body class="stnColor">';
        }
        ?>

    </head>
    <body>
        <h1>Zodiac Sign Finder</h1>
        <p>
        <form action="index.php" method="get">
            <label for='userName'>Enter your name:</label>
            <input type="text" name="userName" required id="userName" value='<?=$form->prefill('Name')?>'>
            
            <label for='date'>Date of Birth</label>
            <input type='date' name='date' required id="date">

            <label for='gender'>Select your gender:</label>
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
                   value="female">Female
            <input type="radio" name="gender" id ="gender"
            <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
                   value="male">Male<br>
            <input type="submit" class='btn btn-primary btn-sm'>
        </form>

        <div class='alert alert-info'>
            <?php echo $newPerson->displayName() ?> who is
            <?php echo $newPerson->displayAge() ?> years old,
            <?php echo $newPerson->displayHisHer() ?> zodiac is : 
            <strong>  <?php echo $newPerson->displayZodiac(); ?></strong>
        </div>
    </p>
</body>
</html>