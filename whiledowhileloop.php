<?php 
    $page = "whiledowhileloop";
    $title = "While/Do While Loops";
    include "includes/header.php"; 
?>

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $title ?></h1>
                <p>
                    Loops are used to execute the same block of code again and again, as long as a certain condition is met. The basic idea behind a loop is to automate the repetitive tasks within a program to save the time and effort. PHP supports four different types of loops.
                </p>
                <p>
                    <strong>while</strong> — loops through a block of code as long as the condition specified evaluates to true.
                </p>
                <p>
                    <strong>do…while</strong> — the block of code executed once and then condition is evaluated. If the condition is true the statement is repeated as long as the specified condition is true.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>While Loop</h3>
                <p>
                    <img src="images/whileloop.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Result below:</h4>
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
                <?php echo '<hr/>' ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Do While Loop</h3>
                <p>
                    <img src="images/dowhileloop.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Result below:</h4>
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
            </div>
        </div>
    </div>    

<?php require "includes/footer.php"; ?>