<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <link rel="shortcut icon" type="image/png" href="logo/favicon.png"/>
        <title>PHP Primer - <?php echo $title ?></title>
    </head>
    <body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand mylogo" href="index.php">
                <img src="logo/mylogo.png" alt="Home" style="width:40px;">PHP-Basic
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item <?php if($page == 'array'){ echo 'active'; }?>">
                    <a class="nav-link" href="array.php">Simple Arrays and Printouts</a>
                    </li>

                    <li class="nav-item <?php if($page == 'function'){ echo 'active'; }?>">
                    <a class="nav-link" href="function.php">Simple Functions</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown <?php if($page == 'forloop' || $page == 'whiledowhileloop'){ echo 'active'; }?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Loops <i class="fa fa-circle-notch"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="forloop.php">Simple For Loop</a>
                            <a class="dropdown-item" href="whiledowhileloop.php">Simple While/Do While Loop</a>
                        </div>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown <?php if($page == 'ifstatement' || $page == 'switchstatement'){ echo 'active'; }?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Statements
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ifstatement.php">Simple If Statement</a></a>
                            <a class="dropdown-item" href="switchstatement.php">Simple Switch Statement</a></a>
                        </div>
                    </li>
                     <!-- Dropdown -->
                     <li class="nav-item dropdown <?php if($page == 'stringmanip' || $page == 'datetimemanip'){ echo 'active'; }?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Manipulations
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="stringmanip.php">Simple String Manipulation</a></a>
                            <a class="dropdown-item" href="datetimemanip.php">Simple Date/Time Manipulation</a></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>        
        
        <div class="container top">

        <h6 id="follow" style="color:red; font-size:15px;">Follow each link to the example page.</h6>

        <?php 
    
            $name = "Uton Senior";
    
        ?>

        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 d-none d-md-block">
                <div class="card">
                    <img class="card-img-top" src="images/profile.png" alt="profile" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align:center"><?php echo $name; ?></h4>
                        <p class="card-text" style="text-align:center"></p>
                        <div class="text-center">
                            <a href="#" class="btn btn-info stretched-link">See Profile <i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>