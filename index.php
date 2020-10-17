<?php 
    $page = "index";
    $title = "Index";
    include "includes/header.php"; 
?>
    
        <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="row">
                <div class="col-12">
                    <h1>Learning PHP is FUN!</h1>
                    <p>PHP is a widely used server-side programming language that’s become increasingly fast and powerful over the years. PHP works well with HTML and databases, making it a great language for anyone interested in building dynamic web applications. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1>Simple PHP Sytax</h1>
                    <img src="images/simple1.PNG" alt="" class="img-fluid" alt="Responsive image">
                    <br>
                    <?php
                        //Printing in HTML using echo
                        echo 'Hello PHP!';
                        //You can echo html tags
                        echo '<br/>';
                        echo 'Second Line';
                        echo '<br/>';
                    ?>   
                </div>                 
            </div> 
            <?php echo '<hr/>'?>
            <div class="row">
                <div class="col-12">
                    <img src="images/simple2.PNG" alt="" class="img-fluid" alt="Responsive image">
                    <br>
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
                </div>
            </div> 
        </div>
    

<?php require "includes/footer.php"; ?>