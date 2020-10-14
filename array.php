<?php 
    $title = "Arrays and Printouts";
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
                    <img src="images/array.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Result below:</h4>
                <?php 
                    //Varible
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
            </div>
        </div>
    </div>    

<?php require "includes/footer.php"; ?>