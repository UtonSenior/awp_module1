<?php 
    $title = "For Loops";
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