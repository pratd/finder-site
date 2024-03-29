<!Doctype html>
<html lang=en>
    <head>
        <title>A Finder Website</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
        crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        

        <link rel="stylesheet" href="style_formulario.css"/> 
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" 
        crossorigin="anonymous"></script>
        <!--javascript queries-->
        <script src="config.js"></script>
        <script src="myjavascript_vanilla.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar colormenu">
                <a class="navbar-brand textcolorwhite" href="#">
                    <img src="assets/images.png" height="30" alt="Wb">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li  class="nav-item active">
                            <a class="nav-link fontuse textcolorwhite" href="#">
                                Home <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown fontuse textcolorblack" 
                            id="navbarDropdownMenuLink" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false" href="#">More
                            </a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control fontuse mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                </div>
            </nav>
        </div>
        <div class="container-fluid pl-0 pr-0 featurebody falsespacebody">
            <div class="row no-gutter falsespace">
                <div class="col-lg-12 col-md-12 col-sm-12">
                </div>
            </div>
            <div class="row no-gutter">
                <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                    <h3 class="text-center fontuse fontweightheavy textcolorcustom fontsizebig">Enter Country Name</h3>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-12 col-md-12 col-sm-12 py-5 falseleft">
                    <div class="form-row align-items-center active-pink">
                        <input type="text" class="form-control mb-2 fontuse fontsizeextrabig" 
                        style="width:400px" id="country" name="country" placeholder="Search..">
                        <button type="submit" class="btn btn-primary mb-2 
                        dropbtn fontuse fontsizebig" id="submitlocation">Submit</button>
                    </div>
                </div>
            </div>  
        </div>
        <div class="container-fluid">
            <div id="log" class="fontuse fontsizebig textcolorblack">Enter</div>
        </div>
    </body>
</html>