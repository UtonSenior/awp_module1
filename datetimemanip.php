<?php 
    $page = 'datetimemanip';
    $title = "Date and Time Manipulation";
    include "includes/header.php"; 
?>

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $title ?></h1>
                <p>
                    PHP DateTime represents the date and time, below we will reveal the ways you can add and format date and time using PHP.
                </p>
                <p>
                    The functions for date manipulation are most widely used when designing websites or executing certain SQL queries. PHP current date might be displayed at the top of the page. Every entry can be dated and every comment marked with the exact time. In PHP time and date are easy to set, as there are inbuilt functions for that.
                </p>
                <p>
                    When working with the functions to receive PHP DateTime, remember to pay attention to the usual time inconsistencies that affect your local server. Don't forget about different timezones, daylight savings, or leap years.
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