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
        <link rel="stylesheet" href="style.css"/> 
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" 
        crossorigin="anonymous"></script>
        <!--javascript queries-->
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar colormenu">
                <a class="navbar-brand textcolorblack" href="#">
                    <img src="images.png" height="30" alt="Wb logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link fontuse textcolorblack" href="#">
                                Home <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown fontuse" 
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
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="generic">
                            <div class="input-group mb-3 active-pink">
                                <input type="text" class="form-control fontuse fontsizebig" placeholder="Search..." 
                                aria-label="Recipient's username" id="city" name="city">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary dropbtn fontuse fontsizebig" 
                                    id="submitlocation" type="button">Submit</button>
                                </div>
                            </div>
                            
                            <!--<form class="form-inline md-form form-sm active-pink-2 mt-2" style="width:500px">
                                <input class="form-control form-control-sm mr-3 w-75 fontuse fontsizeextrabig" style="width:300px" type="text" placeholder="Search"
                                    aria-label="Search" id="city" name="city">
                                <span class="input-group-addon">
                                    <button type="submit" class="btn btn-default dropbtn" id="submitweather">
                                        <span class="glyphicon glyphicon-search fontuse"> Submit</span>
                                    </button>
                                </span>
                            </form>-->
                        </div>
                        <div class="generic1">
                            <h3 class="text-center fontuse fontweightheavy textcolorwhite 
                            fontisizebig">Enter Country</h3>
                        </div>                      
                    
                </div>
            </div>
        </div>
       
        <div class="container-fluid" style="display:none">
            <div id="log"></div>
        </div>
        <div class="container-fluid" style="display:none">
            <div id="log3">Nothing to show yet</div>
        </div>
    </body>
</html>