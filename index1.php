<!Doctype html>
<html lang=en>
 <head>
        <title>A Finder Website</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css" 
        integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
        <!--my own style sheet-->
        <link rel="stylesheet" href="style_formulario.css"/> 
    </head>
    <body background="assets/backgroundworld.jpg">
        <header>
             <div class="container-fluid pl-0 pr-0">
                <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar colormenu">
                    <a class="navbar-brand textcolorwhite" href="#">
                        <img src="assets/images.png" height="30" alt="Wb">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li  class="nav-item active">
                                <a class="nav-link fontuse textcolorwhite fontweightheavy" href="#">
                                    FIND ME!<span class="sr-only">(current)</span>
                                </a>
                            </li>

                            
                        </ul>
                            <div>
                            <a class="nav-link fontuse textcolorblack fontweightmedium"  href="#">The site for your locations
                            </a>
                            </div>
                    </div>
                </nav>
            </div>
        </header>
        <?php
            require_once "Main.php";

            $newC  = new Main();
            $newC  -> showTemplate();
            $newC  -> showMap();

        ?>
        <footer>
            <div class="container-fluid pl-0 pr-0 colormenu">
                <div class="row">
                    <div class="col-md-12 py-3 falseleftform">
                        <div class="mt-2 mb-1 flex-center">
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg textcolorwhite mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a class="tw-ic">
                                <i class="fab fa-twitter fa-lg textcolorwhite mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g fa-lg textcolorwhite mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in fa-lg textcolorwhite mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a class="ins-ic">
                                <i class="fab fa-instagram fa-lgtextcolorwhite mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a class="pin-ic">
                                <i class="fab fa-pinterest fa-lg textcolorwhite fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="js/autocomplete.js"></script>
            
            <script src="js/myjavascript_vanilla.js"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
            type="text/javascript"></script>
            
        </footer>
    </body>
</html>