<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Anga Group</title>
    <link rel="stylesheet" href="{{theme('css/frontend.css')}}"/>
    <script src="{{theme('js/all.js')}}"></script>
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    {{--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9] -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <style>
        #map {
            width: 100%;
            height: 235px;
            border-radius: 5px;
        }

        .car-title {
            font-size: 22px;
            font-weight: bold;
        }

        .nopadding {
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(42.7000, 23.3333),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>

<body id="home" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Anga Group ltd <br/>
                <span class="hidden-md" style="font-size: 16px !important;">Business to business sale of Ex-lease and New Vehicles from Central and Eastern Europe</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>

                @include('partials.navigation')

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">

        <div class="col-md-8 col-lg-8">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Anga Group!</div>
                <div class="intro-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, beatae
                    consequatur ipsa mollitia placeat quibusdam voluptatem. Consequatur corporis dolore eaque eum iure
                    nisi ullam. Amet iste iusto magni nisi quas quos sed tempore voluptatum! Ad amet animi architecto
                    blanditiis commodi cumque deserunt dignissimos doloribus eos ex excepturi iure magnam maiores nemo
                    nesciunt nostrum perferendis perspiciatis quaerat quibusdam, ratione repellendus repudiandae
                    sapiente sed sint unde! Accusamus alias amet aspernatur at corporis deserunt dicta eius error eum
                    ipsam iusto maxime natus non nostrum nulla placeat quam qui quis quo quos reiciendis rem repudiandae
                    rerum suscipit unde vel, voluptas voluptatem? Illum magni, similique.
                </div>
                <a href="#services" class="page-scroll btn btn-lg">Offers</a>
            </div>
        </div>

        <div class="col-lg-4">
            <div id="myScrollspy" class="hidden-sm">
                <div class="intro-arrivals">New Arrivals</div>
                <ul class="list-group">
                    <li class="list-group-item">Renalt Clio 2016-01-17 clio/center 100 cars</li>
                    <li class="list-group-item">Renalt Clio 2016-01-17 clio/center 100 cars</li>
                    <li class="list-group-item">Renalt Clio 2016-01-17 clio/center 100 cars</li>
                    <li class="list-group-item">Renalt Clio 2016-01-17 clio/center 100 cars</li>
                    <li class="list-group-item">Renalt Clio 2016-01-17 clio/center 100 cars</li>

                </ul>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center">
                <h2 class="section-heading">About</h2>

                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet
                    consequuntur cum dolore dolorem eligendi exercitationem, laboriosam magnam omnis quaerat quia
                    ratione repellat, repudiandae suscipit temporibus. Assumenda commodi consequatur corporis ipsa,
                    suscipit ullam voluptatem voluptates. Adipisci aliquid asperiores, assumenda blanditiis dignissimos
                    esse excepturi fugit illo inventore iste officia possimus quae quia ratione reiciendis repellat
                    rerum ullam veritatis! Aperiam aspernatur debitis magni, maiores soluta suscipit vel vitae. Animi
                    eaque esse eveniet fugiat illo libero quidem sed totam voluptatem. Libero repellat, totam!
                    Accusantium ad assumenda, culpa eveniet fugiat incidunt ipsa nam nemo neque obcaecati, omnis porro,
                    quas quos similique soluta! Animi at doloremque eius est eum minima quaerat rem repellat? A aliquid
                    at earum eius, eum exercitationem expedita fuga ipsam modi molestiae mollitia necessitatibus, neque
                    obcaecati officia omnis quos recusandae suscipit tempora, vitae voluptatum. Asperiores beatae
                    consectetur consequatur, facere fuga in inventore ipsam laborum obcaecati qui quibusdam rem,
                    repellendus sunt ut, voluptates.</p>
            </div>
        </div>

    </div>
</section>


<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>

                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Fugiat, voluptatem!</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div id="map"></div>
                <div>
                    <h3 class="text-danger">Sofia, Mladost 4</h3>
                    <h4 class="text-danger">sales@anga.bg</h4>
                    <h4 class="text-danger">0888 888 888</h4>
                </div>
                <div class="row " style="margin: 50px 0px 0px 0px;">
                    <div class="col-md-12 nopadding"><h5 class=" text-danger">You can subscribe to our mailing list in
                            order to
                            recieve
                            our latest offers by pressing the button bellow or by connecting with your social network
                            profile.</h5></div>
                    <div class="col-sm-6 nopadding">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email *" id="email"
                                   required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <button type="submit" class="btn btn-lg">subscribe</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-6 nopadding">
                        <div class="text-danger">Subscribe with social network</div>
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 30px;">

                        <button type="submit" class="btn btn-lg">Facebook</button>
                        <!-- Button trigger modal -->


                    </div>
                    <div class="clearfix"></div>


                </div>

            </div>
            <div class="col-md-6">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required
                                       data-validation-required-message="Please enter your name.">

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required
                                       data-validation-required-message="Please enter your email address.">

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required
                                       data-validation-required-message="Please enter your phone number.">

                                <p class="help-block text-danger"></p>
                            </div>
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required
                                          data-validation-required-message="Please enter a message."></textarea>

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6"></div>
                        <div class="col-md-12">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-lg">Send Message</button>


                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<section id="offers" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center"><h2 class="section-heading">OFFERS</h2></div>
            <div class="col-sm-12">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="car-title">Renalt 2016-17-01</div>
                        <div style="min-height: 30px;">
                            <div class="pull-left">Clio | Megan | Laguna | etc 100 cars</div>
                            <button class="btn btn-xl pull-right">Download</button>
                        </div>
                    </li><li class="list-group-item">
                        <div class="car-title">Renalt 2016-17-01</div>
                        <div style="min-height: 30px;">
                            <div class="pull-left">Clio | Megan | Laguna | etc 100 cars</div>
                            <button class="btn btn-xl pull-right">Download</button>
                        </div>
                    </li><li class="list-group-item">
                        <div class="car-title">Renalt 2016-17-01</div>
                        <div style="min-height: 30px;">
                            <div class="pull-left">Clio | Megan | Laguna | etc 100 cars</div>
                            <button class="btn btn-xl pull-right">Download</button>
                        </div>
                    </li><li class="list-group-item">
                        <div class="car-title">Renalt 2016-17-01</div>
                        <div style="min-height: 30px;">
                            <div class="pull-left">Clio | Megan | Laguna | etc 100 cars</div>
                            <button class="btn btn-xl pull-right">Download</button>
                        </div>
                    </li><li class="list-group-item">
                        <div class="car-title">Renalt 2016-17-01</div>
                        <div style="min-height: 30px;">
                            <div class="pull-left">Clio | Megan | Laguna | etc 100 cars</div>
                            <button class="btn btn-xl pull-right">Download</button>
                        </div>
                    </li><li class="list-group-item">
                        <div class="car-title">Renalt 2016-17-01</div>
                        <div style="min-height: 30px;">
                            <div class="pull-left">Clio | Megan | Laguna | etc 100 cars</div>
                            <button class="btn btn-xl pull-right">Download</button>
                        </div>
                    </li><li class="list-group-item">
                        <div class="car-title">Renalt 2016-17-01</div>
                        <div style="min-height: 30px;">
                            <div class="pull-left">Clio | Megan | Laguna | etc 100 cars</div>
                            <button class="btn btn-xl pull-right">Download</button>
                        </div>
                    </li><li class="list-group-item">
                        <div class="car-title">Renalt 2016-17-01</div>
                        <div style="min-height: 30px;">
                            <div class="pull-left">Clio | Megan | Laguna | etc 100 cars</div>
                            <button class="btn btn-xl pull-right">Download</button>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <aside class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </aside>

        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Anga Group 2016</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#" data-toggle="modal" data-target="#myModal">General Terms</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">General Terms</h4>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus delectus dolor ea esse eveniet harum
                inventore modi molestias natus necessitatibus nihil nobis non perferendis reprehenderit repudiandae
                sequi, tempora voluptates. Cupiditate exercitationem facere illo ipsam iure molestias nemo nihil quis
                repellendus voluptates! Ab alias architecto aspernatur beatae deserunt dicta eligendi enim
                exercitationem in incidunt, ipsum laboriosam maxime, natus placeat provident quo quod sed vitae
                voluptatem voluptatibus! Accusamus cumque laboriosam odit sint tempore velit voluptatum. Accusamus ad
                aliquam at consequatur cupiditate distinctio, dolor dolorum eos excepturi explicabo fugiat iste mollitia
                necessitatibus nesciunt non quia quibusdam quisquam, quo repellendus, sed sint sit voluptatum.
            </div>

        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

</body>
<script>
    $(function () {

        $(window).on('scroll', function () {
            console.log($(window).width());
            if ($('#contact').offset().top >= $(window).scrollTop() + 200 && $(window).width() >= 768) {
                $('#myScrollspy').fadeIn(300);
            } else {
                $('#myScrollspy').fadeOut(300);
            }
        });
    });
    $('#myModal').on('shown.bs.modal', function (e) {
        e.preventDefault();
        $('#myInput').focus()
    })
</script>
</html>
