<?php 
    $title = "Arrays and Printouts";
    include "includes/header.php"; 
?>

    <h1><?php echo $title ?></h1>

    <?php 
        //A varible
        $num = 3;

        //An Array - in php you can store more than one data type in an array
        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        //Function
        $size = count($numbers);

        echo "<p>Size of Array = $size</p>";

        //Printing array list
        for($count = 0; $count < $size; $count++){
            echo "<p>Array index $count = $numbers[$count]</p>";
        }

    ?>

<?php require "includes/footer.php"; ?>