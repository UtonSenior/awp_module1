<?php 
    $page = 'switchstatement';
    $title = "Switch Statement";
    include "includes/header.php"; 
?>

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $title ?></h1>
                <h5>PHP If…Else Vs Switch…Case</h5>
                <p>                
                    The switch-case statement is an alternative to the if-elseif-else statement, which does almost the same thing. The switch-case statement tests a variable against a series of values until it finds a match, and then executes the block of code corresponding to that match.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    <img src="images/switchcase.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <h4>Result below:</h4>
            <?php
                //Switch
                $grade = 'A';

                switch($grade){
                    case 'A': echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
                        break;

                    case 'B': echo '<h2 style="color: blue">YOU DID WELL!</h2>';
                        break;

                    default: echo '<h2 style="color: red">YOU HAVE FAILED....</h2>';
                        break;
                }

            ?>
            </div>
        </div>
    </div>

    
<?php require "includes/footer.php"; ?>