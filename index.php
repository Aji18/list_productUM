<!DOCTYPE html>
<html>
<head>
    <title>Procduct UM</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <link type="text/css" rel="stylesheet" href="css/other.css.css">
    <link type="text/css" rel="stylesheet" href="css/flex.css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
    <nav class="blue lighten-3">
        <div class="container nav-wrapper">
            <a href="#logo">
                <img class="brand-logo responsive-img" src="img/logo.png" width="150px" height="100px">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <a class="black-text" href="#">HOME</a>
                </li>
                <li>
                    <a class="black-text" href="#">PRODUCT</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="img/1.jpg">
            </li>
            <li>
                <img src="img/2.jpg">
            </li>
            <li>
                <img src="img/3.jpg">
            </li>
            <li>
                <img src="img/4.jpg">
            </li>
        </ul>
            
    </div>

    <div class="blue lighten-5">
        <?php
        $pages_dir = 'pages';
        if(!empty($_GET['p'])) {
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);

            $p = $_GET['p'];
            if(in_array($p.'.php', $pages)){
                include($pages_dir.'/'.$p.'.php');
            } else {
                echo 'Halaman tidak ditemukan! T_T';
            }
        } else {
            include($pages_dir.'/product.php');
        }
        ?>
    </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
    $('.carousel.carousel-slider').carousel({full_width: true});

    $(document).ready(function(){
        $('.slider').slider({full_width: true});
    });
</script>