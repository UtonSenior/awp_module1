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
            <a class="navbar-brand" href="index.php">
                <img src="logo/mylogo.png" alt="Home" style="width:40px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="array.php">Simple Arrays and Printouts</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="function.php">Simple Functions</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Loops <i class="fa fa-circle-notch"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="forloop.php">Simple For Loop</a>
                            <a class="dropdown-item" href="whiledowhileloop.php">Simple While/Do While Loop</a>
                        </div>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Statements
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ifstatement.php">Simple If Statement</a></a>
                            <a class="dropdown-item" href="switchstatement.php">Simple Switch Statement</a></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>        
        
        <div class="container top">

        <h2 id="follow">Follow each link to the example page</h2>