<?php 
    $page = "function";
    $title = "Functions";
    include "includes/header.php"; 
?>

<div class="col-sm-12 col-md-8 col-lg-9">   
        <div class="row">
            <div class="col-12">
                <h1><?php echo $title ?></h1>
                <p>
                    PHP functions are similar to other programming languages. A function is a piece 
                    of code which takes one more input in the form of parameter and does some processing 
                    and returns a value.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    <img src="images/function1.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    <img src="images/function2.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Result below:</h4> 
                <br>
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
            </div>
        </div>
    </div>

    

<?php require "includes/footer.php"; ?>