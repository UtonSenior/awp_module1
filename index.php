<?php 
    $title = "Index";
    include "includes/header.php"; 
?>
    
    <?php
        //Printing in HTML using echo
        echo 'Hello PHP!';
        //You can echo html tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php 
        //Declare variable
        $name = 'Uton Senior';
        $age = '25';

        //Echo variable
        echo $name;
        echo '<h1>My name is: '.$name. '</h1>';
        echo '<h1>My age is: '.$age. '</h1>';
        //Using double qotes
        echo "<h1>My name is: $name </h1>";
    ?>

<?php require "includes/footer.php"; ?>