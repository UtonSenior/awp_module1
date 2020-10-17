<?php 
    $page = 'ifstatement';
    $title = "If-Else Statements";
    include "includes/header.php"; 
?>

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $title ?></h1>
                <p>
                <h5>PHP Conditional Statements</h5>

                    Like most programming languages, PHP also allows you to write code that perform different actions based on the results of a logical or comparative test conditions at run time. This means, you can create test conditions in the form of expressions that evaluates to either true or false and based on these results you can perform certain actions.  
                </p>
                <p>
                    There are several statements in PHP that you can use to make decisions:
                </p>
                <ul>
                    <li>The if statement</li>
                    <li>The if...else statement</li>
                    <li>The if...elseif....else statement</li>
                    <li>The switch...case statement</li>
                </ul>
                <p>
                    We will explore the first 2 statements in the coming sections.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>If Statement</h3>
                <p>
                    <img src="images/ifstatement1.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Result below:</h4>
                <?php
                    //An if statement that will carry out an action based on the value of the variable

                    $grade = 30;

                    if($grade >= 50)
                    {
                        echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
                    }
                    else
                    {
                        echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
                    }        
                ?>
            </div>
        </div>
        <?php echo '<hr>'?>
        <div class="row">
            <div class="col-12">
                <h3>If Else Statement</h3>
                <p>
                    <img src="images/ifstatement2.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Result below:</h4>
                <?php 
                    $grade = 'A';
                    //If-Else 
                    if($grade == 'A'){
                        echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
                    }
                    elseif($grade == 'B'){
                        echo '<h2 style="color: blue">YOU DID WELL!</h2>';
                    }
                    else{
                        echo '<h2 style="color: red">YOU HAVE FAILED....</h2>';
                    }
                ?>
            </div>
        </div>
    </div>

<?php require "includes/footer.php"; ?>