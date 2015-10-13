<!DOCTYPE html>
<html lang="en" ng-app="malam">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Malam Engineering PLC</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/owlcar/owl-carousel/owl.carousel.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header class="container-fluid">
            <div class="row" id="top-info">
                <div class="col-md-12">
                    <ul class="nav nav-pills navbar-left">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#"><i class="fa fa-sign-in"></i> Login/Register</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i> 0 items - $0.00</a></li>
                        <form action="#" class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                    </ul>
                    <ul class="nav nav-pills navbar-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="dropdown">
                            <a id="language-dropdown" href="#" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i> English <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="language-dropdown">
                                <li class="dropdown-menu-header">&raquo; Change Language</li>
                                <li><a href="#">English</a></li>
                                <li><a href="#">Amharic</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-default" id="top-nav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" style="color: lightsteelblue; line-height: 28px; font-family: Lato, Arial, sans-serif; font-weight: bold; height: 100px; background: url('img/logo-white-2.png') no-repeat 0 15px; padding-left: 60px;">MALAM <br>ENGINEERING</a>
                        <!--<a href="#" class="navbar-brand" style="background: #e7e7e7; border: solid 1px #ccc; font-family: FontAwesome; font-weight: bolder; color: steelblue;">M</a>-->
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Docs</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="slideshow row">
            <div class="owl-carousel owl-theme" id="firstCarousel">
                <div>
                    <div class="slideshow-text pull-left">
                        <h1 class="slideshow-title">Grow Your Business</h1>
                        <p class="slideshow-description">All-in-one Software. <br>Beautiful. Easy-to-use.</p>
                        <button class="btn btn-success">Learn More</button>
                    </div>
                    <div class="slideshow-img">
                        <img src="img/slide1.jpg" alt="First Slide">
                        <div class="image-description">
                            <p>This picture was taken on the conference held between Malam Engineering and the other sister companies on merging these into one big amalgamated franchise.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slideshow-text pull-left">
                        <h1 class="slideshow-title">Grow Your Business</h1>
                        <p class="slideshow-description">All-in-one Software. <br>Beautiful. Easy-to-use.</p>
                        <button class="btn btn-success">Learn More</button>
                    </div>
                    <div class="slideshow-img">
                        <img src="img/slide1.jpg" alt="First Slide">
                    </div>
                </div>
                <div>
                    <div class="slideshow-text pull-left">
                        <h1 class="slideshow-title">Grow Your Business</h1>
                        <p class="slideshow-description">All-in-one Software. <br>Beautiful. Easy-to-use.</p>
                        <button class="btn btn-success">Learn More</button>
                    </div>
                    <div class="slideshow-img">
                        <img src="img/slide1.jpg" alt="First Slide">
                    </div>
                </div>
            </div>
            <div class="slideshow-navigation">
                <span class="slide-prev btn btn-info" id="prev-first" title="Go to the previous slide"><i class="fa fa-arrow-left"></i></span>
                <span class="slide-next btn btn-info" id="next-first" Go to the next slide"><i class="fa fa-arrow-right"></i></span>
            </div>
        </section>
        <section id="testimony">
            <div class="testimony-picture col-md-4">
                <img src="img/testimony.jpg" alt="" class="img-circle pull-right" width="200">
            </div>
            <div class="testimony-text col-md-8">
                <blockquote>
                    <i class="fa fa-quote-left"></i> We were served with the best services when we came to Malam. Before that life was really hard. <i class="fa fa-quote-right"></i>
                </blockquote>
                <small>
                    <strong><span>Meles Zenawi</span></strong><br>
                    Late Prime Minister of Ethiopia
                </small>
            </div>
        </section>
        <section id="services">
            <div class="services-text text-center">
                <h1 class="heading">Grow your sales<br>and boost your productivity.</h1>
                <h4>The integrated solution that grows with you.</h4>
                <a href="#" class="btn btn-success">Start your Free Trial</a>
            </div>
        </section>
        <section id="features" class="row">
            <div class="col-md-12">
                <div class="col-md-offset-2 col-md-6">
                    <h1 class="features-heading">TOP FIVE REASONS TO WORK WITH MALAM</h1>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a href="#collapseOne" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-pencil btn btn-warning"></i> Template Builder
                                        <i class="fa fa-plus pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a href="#collapseTwo" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-mobile-phone btn btn-warning"></i> Mobile and Retina Ready
                                        <i class="fa fa-plus pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a href="#collapseThree" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-th-list btn btn-warning"></i> Product Showcase &amp; Portfolio Features
                                        <i class="fa fa-plus pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="news">
                    <h1 class="features-heading">LATEST NEWS
                        <span class="pull-right">
                            <i class="fa fa-arrow-left slide-prev" id="prev-second"></i>
                            <i class="fa fa-arrow-right slide-next nav-second" id="next-second"></i>
                        </span>
                    </h1>
                    <div class="owl-carousel owl-theme" id="secondCarousel">
                        <div class="slide">
                            <img src="img/news-1.jpg" alt="">
                            <div class="slide-news-description">
                                <h4>Post with Left Sidebar</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus qu...</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="img/news-2.jpg" alt="">
                            <div class="slide-news-description">
                                <h4>Post with Left Sidebar</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus qu...</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="img/news-3.jpg" alt="">
                            <div class="slide-news-description">
                                <h4>Post with Left Sidebar</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus qu...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="counters" class="row">
            <div class="col-md-12">
                <div class="col-md-3 text-center">
                    <button class="btn-circle btn-xl btn-success">25</button>
                    <a href="#" class="center-block">Projects</a>
                </div>
                <div class="col-md-3 text-center">
                    <button class="btn-circle btn-xl btn-danger">45</button>
                    <a href="#" class="center-block">Awards</a>
                </div>
                <div class="col-md-3 text-center">
                    <button class="btn-circle btn-xl btn-primary">1234</button>
                    <a href="#" class="center-block">Followers</a>
                </div>
                <div class="col-md-3 text-center">
                    <button class="btn-circle btn-xl btn-warning">3</button>
                    <a href="#" class="center-block">Clients</a>
                </div>
            </div>
        </section>
        <footer class="container footer">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li role="presentation"><a href="#">Contact Us &raquo;</a></li>
                            <li role="presentation"><a href="#">About Us &raquo;</a></li>
                        </ul>
                    </div>
                    <small class="copyright pull-left">Copyright &#169; <?php echo date('Y'); ?></small>
                </div>
            </nav>
        </footer>

        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script src="bower_components/owlcar/owl-carousel/owl.carousel.min.js"></script>
        <script src="bower_components/angular/angular.min.js"></script>
        <script src="bower_components/angular-route/angular-route.min.js"></script>
        <script>
            $(document).ready(function() {
                var slide1 = $('.owl-carousel#firstCarousel');
                var slide2 = $('.owl-carousel#secondCarousel');
                slide1.owlCarousel({
                    items: 1,
                    loop: true
                });
                slide2.owlCarousel({ items: 1, loop: true });
                $('.slide-prev#prev-first').on('click', function() {
                    slide1.trigger('prev.owl.carousel');
                });
                $('.slide-next#next-first').on('click', function() {
                    slide1.trigger('next.owl.carousel');
                });
                $('.slide-prev#prev-second').on('click', function() {
                    slide2.trigger('prev.owl.carousel');
                });
                $('.slide-next#next-second').on('click', function() {
                    slide2.trigger('next.owl.carousel');
                })
            });

            app = angular.module('malam', ['ngRoute'])
                    .controller('MainController', ['$scope', function($scope) {

                    }])
                    .config(['$routeProvider', function($routeProvider) {
                        $routeProvider
                                .when('/', {
                                    templateUrl: 'views/index.html',
                                    controller: 'MainController'
                                })
                                .when('pricing', {
                                    templateUrl: 'views/pricing.html',
                                    controller: 'PricingController'
                                })
                                .otherwise({
                                    redirectTo: '/'
                                });
                    }])
        </script>
    </body>
</html>