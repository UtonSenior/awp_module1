<?php 
    $title = "Date and Time Manipulation";
    include "includes/header.php"; 
?>

    <h1><?php echo $title ?></h1>

    <?php 
        $dateNow = getdate();
        echo "Today's Date: <br/>";
        echo $dateNow['mday'] . '<br/>';
        echo $dateNow['mon'] . '<br/>';
        echo $dateNow['year'] . '<br/>';
        echo '<br/>';        

        echo "Today's Date: " . $dateNow['mday'] . "/" . $dateNow['mon'] . "/" . $dateNow['year'] . '<br/>';
        
        echo time() . '<br/>';

        print date("m/d/y G.i:s<br/>", time()) . '<br/>';
        print "Today's Date ";
        print date("j of F Y, \a\\t g.i a", time()) . '<br/>';



    ?>

<?php require "includes/footer.php"; ?>