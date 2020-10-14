<?php 
    $title = "While/Do While Loops";
    include "includes/header.php"; 
?>

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $title ?></h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, enim magni. Accusamus et suscipit culpa enim iusto nisi? Excepturi officia fugit amet illum impedit beatae est dolore sint incidunt odio.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>While Loop</h3>
                <p>
                    <img src="images/whileloop.png" alt="" class="img-fluid" alt="Responsive image">
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
                    <img src="images/dowhileloop.png" alt="" class="img-fluid" alt="Responsive image">
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