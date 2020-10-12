<?php 
    $title = "While/Do While Loops";
    include "includes/header.php"; 
?>

    <h1><?php echo $title ?></h1>

    <?php

        $grade = 0;
        //Infinite Loop
        //while($grade < 10){
        //    echo '<p>I am less than 10!</p>';
        //}
        //Pre-Condition Loop
        while($grade < 10){
            echo '<p>I am less than 10!</p>';
            $grade ++;
        }

        echo '<< Exit Loop ';
    ?>

    <h1>Do While Loop</h1>

    <?php 

        $grade = 0;
        //Do While Loop
         //Post-Condition Loop
        do{
            echo '<p>I am a Do While Loop</p>';
            $grade++;
        }
        while($grade < 10);

        echo '<< Exit Loop ';

    ?>

<?php require "includes/footer.php"; ?>