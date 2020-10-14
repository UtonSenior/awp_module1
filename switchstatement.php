<?php 
    $title = "Switch Statement";
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