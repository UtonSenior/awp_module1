<?php 
    $title = "Functions";
    include "includes/header.php"; 
?>

    <h1><?php echo $title ?></h1>

    <?php 
    
        //Defining a function

        function writeMsg(){
            //echo "Understanding how to use functions in PHP. <br/>";
        }

        //Calling functions
        writeMsg();

        echo '<hr/>';

        writeMsg();

        //Function with parameters

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is $sum <br/>";
        }

        //Passing value by reference - use ampersand in parameter
        function chnageNum(&$num){
            $num = $num + 50;
            //Another way to write this
            //$num += 50;
        }

        //Return function
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 100;

        addFunction(20, 43);
        addFunction(20, $num);
        addFunction(12, 8);

        chnageNum($num);
        echo $num . '<br/>';

        //Storing return value in a variable
        $returnValue = returnProduct(3, 9);

        echo $returnValue . '<br/>';
    
    ?>

<?php require "includes/footer.php"; ?>