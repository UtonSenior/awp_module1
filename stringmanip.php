<?php 
    $title = "String Manipulation";
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
                <h3>Concatenation of String</h3>
                    <p>
                        <img src="images/concat.png" alt="" class="img-fluid" alt="Responsive image">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    
                    <?php 
                        //Concatenation of String
                        $name = "Uton Senior";
                        $person = "john brown";

                        $phrase1 = "My name is $name.";
                        $phrase2 = ' St. Thomas.';

                        echo $phrase1 . " I live in the parish of" .$phrase2;
                        echo '<br/>';
                        echo '<hr/>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>String Transformation</h3>
                    <p>
                        <img src="images/stringtrans.png" alt="" class="img-fluid" alt="Responsive image">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    
                    <?php 
                        //String transformation
                        echo 'UpperCase first letter: ' . ucfirst($person). '<br/>';
                        echo 'UpperCase first letter of each word: ' . ucwords($person). '<br/>';
                        echo 'UpperCase: ' . strtoupper($person) . '<br/>';
                        echo 'LowerCase: ' . strtolower("THIS IS ALL UPPERCASE TEXT") . '<br/>';
                        echo '<hr/>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Repeat String or Nesting Funstions</h3>
                    <p>
                        <img src="images/repeat.png" alt="" class="img-fluid" alt="Responsive image">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">                    
                    <?php 
                        echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>'; 
                        //Nesting Functions
                        echo 'Repeat String: ' . strtoupper(str_repeat('a', 10)) . '<br/>';
                        echo '<hr/>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Get Sub/Position of string</h3>
                    <p>
                        <img src="images/getsubpos.png" alt="" class="img-fluid" alt="Responsive image">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">                    
                    <?php 
                        echo 'Get Substring: ' . substr($person, 3, 7) . '<br/>';

                        echo 'Get position of string: ' . strpos($person, 'n') . '<br/>';
                        echo '<hr/>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Find character or length of a string</h3>
                    <p>
                        <img src="images/findcharlen.png" alt="" class="img-fluid" alt="Responsive image">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">                    
                    <?php 
                        //Find Character
                        echo 'Find Character "U": ' . strchr($name, 'U') . '<br/>';
                        echo 'Find Character "s": ' . strchr($name, 's') . '<br/>';
                        echo 'Find Character "o": ' . strchr($name, 'o') . '<br/>';
                        echo 'Find Character "i": ' . strchr($name, 'i') . '<br/>';   
                        //Length of a string
                        echo 'Find the length of a string: ' . strlen($name) . '<br/>';
                        echo '<hr/>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Trim</h3>
                    <p>
                        <img src="images/trim.png" alt="" class="img-fluid" alt="Responsive image">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">                    
                    <?php 
                        //Trim
                        echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
                        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
                        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
                        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

                        echo 'Replace string with another: ' . str_replace("Uton", "Elton", $phrase1) . '<br/>';
                    ?>
                </div>
            </div>
    </div>

<?php require "includes/footer.php"; ?>