<?php 
    $title = "Date and Time Manipulation";
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
                    <img src="images/datetimemanip.PNG" alt="" class="img-fluid" alt="Responsive image">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
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
            </div>
        </div>
    </div>

    

<?php require "includes/footer.php"; ?>