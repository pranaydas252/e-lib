<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <title>Welcome to E-Lib: Your Virtual Library</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- font awesome css -->
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all" />
    <!-- bootstrap css -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all" />
    <!-- custom css -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all" />
</head>
    
</head>

<body>
    <!-- banner -->
    <div class="banner" id="container">
        <div class="main text-center">
            <h1>Welcome to <img src="images/logo.png"> E-Lib</h1>
            <h5 class="sub">&bullet;&nbsp;Your Virtual Library&nbsp;&bullet;</h5>
        </div>
            
            
        <form class="text-center container form" id="myForm">
            <input class="form-control" type="search" id="search" placeholder="Search the Library">
            <button class="btn" type="button" id="button"><span class="fa fa-search">&nbsp;&nbsp;&nbsp;SEARCH</span></button>
        </form>

        <div class="filter text-center">
            <div id="results">
                
            </div>
        </div>
        
        <!-- Footer -->
        <footer id="footer">
            <div class="container py-5">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h4>Made with <span class="fa fa-heart"></span> by Pranay.</h4>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12 social">
                        <h2><a href="https://www.instagram.com/pranaydas252" target="_blank"><span class="fa fa-instagram"></span></a><a href="https://github.com/pranaydas252" target="_blank"><span class="fa fa-github"></span></a></h2>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.footer -->
    </div>
    <!-- /banner -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>