<?php 
    $title = "String Manipulation";
    include "includes/header.php"; 
?>

    <h1><?php echo $title ?></h1>

   <?php 
        //Concatenation of String
        $name = "Uton Senior";
        $person = "john brown";

        $phrase1 = "My name is $name.";
        $phrase2 = ' St. Thomas.';

        echo $phrase1 . " I live in the parish of" .$phrase2;
        echo '<br/>';
        echo '<hr/>';

        //String transformation
        echo 'UpperCase first letter: ' . ucfirst($person). '<br/>';
        echo 'UpperCase first letter of each word: ' . ucwords($person). '<br/>';
        echo 'UpperCase: ' . strtoupper($person) . '<br/>';
        echo 'LowerCase: ' . strtolower("THIS IS ALL UPPERCASE TEXT") . '<br/>';
        echo '<hr/>';

        echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>'; 
        //Nesting Functions
        echo 'Repeat String: ' . strtoupper(str_repeat('a', 10)) . '<br/>';

        echo 'Get Substring: ' . substr($person, 3, 7) . '<br/>';

        echo 'Get position of string: ' . strpos($person, 'n') . '<br/>';
    
        //Find Character
        echo 'Find Character "U": ' . strchr($name, 'U') . '<br/>';
        echo 'Find Character "s": ' . strchr($name, 's') . '<br/>';
        echo 'Find Character "o": ' . strchr($name, 'o') . '<br/>';
        echo 'Find Character "i": ' . strchr($name, 'i') . '<br/>';
        echo '<hr/>';

        //Length of a string
        echo 'Find the length of a string: ' . strlen($name) . '<br/>';

        //Trim
        echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo 'Replace string with another: ' . str_replace("Uton", "Elton", $phrase1) . '<br/>';

   ?>

<?php require "includes/footer.php"; ?>