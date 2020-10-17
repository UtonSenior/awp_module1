<?php 
    $page = "forloop";
    $title = "For Loops";
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
                    <strong>for</Strong> — loops through a block of code until the counter reaches a specified number.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    <img src="images/forloop.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Result below:</h4>
                <?php
                    //For Loop
                    for($count = 0; $count < 10; $count++){
                        echo '<p>Hello World</p>';
                    }

                    //Printing the value of count
                    for($count = 0; $count < 10; $count++){
                        echo "<p>The count is $count </p>";
                    }
                ?>
            </div>
        </div>
    </div>

    

<?php require "includes/footer.php"; ?>