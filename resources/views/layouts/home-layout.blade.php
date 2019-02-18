<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="We are a growing transport and logistics specialist company based in Port Elizabeth.
    We offer our customers national transport solutions as we have a variety of vehicles specifications from any point in
     Eastern Cape to anywhere in South Africa on short notice. Our rates are competitive with hardworking, honesty and
     very professional staff. Call us and get a life time experience with our service. It might be a whole new experience in transport services.">

    <meta name="keywords" content="Transport in PE, Transport Around Port Elizabeth, Rubble Removal,
    Transportation services PE, Lorry for Hire in PE, Lorries for Hire Port Elizabeth, Furniture removals in PE, Furniture removals Port Elizabeth,
    Construction vehicle hire
    "/>

    <title>Horizon Transport Services</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</head>
<body>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">Horizon</a>
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">
                <li><a href="/"><i class="material-icons left">home</i>Home</a></li>
                <li><a href="#modal1" class="modal-trigger"><i class="material-icons left">event</i>Hire Now</a></li>
                <li><a href="#about-us"><i class="material-icons left">info_outline</i>About Us</a></li>
                <li><a href="#our-fleet"><i class="material-icons left">drive_eta</i>Our Fleet</a></li>
                <li><a href="#contact-us"><i class="material-icons left">email</i>Contact Us</a></li>
            </ul>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile">
    <li><a href="/"><i class="material-icons left">home</i>Home</a></li>
    <li><a href="/"><i class="material-icons left">event</i>Hire Now</a></li>
    <li><a href="#about-us"><i class="material-icons left">info_outline</i>About Us</a></li>
    <li><a href="#our-fleet"><i class="material-icons left">drive_eta</i>Our Fleet</a></li>
    <li><a href="#contact-us"><i class="material-icons left">email</i>Contact Us</a></li>
</ul>
<div class="container-fluid">
    @yield('content')
</div>

<footer class="page-footer" style="margin-top:2em;">
    <div class="container-fluid">
        <div class="row">
            <div id="about-us" class="col l4 s12">
                <h5 class="white-text">About US</h5>
                <p>
                    We are a growing transport and logistics specialist company based in Port Elizabeth. We offer our customers national transport solutions as we have a variety of vehicles specifications from any point in Eastern Cape to anywhere in South Africa on short notice.
                    Our rates are competitive with hardworking, honesty and very professional staff.
                    Call us and get a life time experience with our service. It might be a whole new experience in transport services.

                </p>
            </div>
            <div class="col l4 s12">
                <h5 class="white-text">Contacts</h5>
                <p class="grey-text text-lighten-4">For general information,
                    please contact us at:</p>
                <ul>
                    <li>
                        <a style="color:white!important;" href="mailto:anita@propellaincubator.co.za"><i
                                    class="material-icons">contact_mail</i> horizontransport@aluzaflextransport.co.za</a></li>
                    <li><a style="color:white!important;" href="#"><i class="material-icons">contact_phone</i> +27
                            41 582 2559</a></li>
                    <li><a style="color:white!important;" href="#"><i class="material-icons">phone_android</i> 074 654 0807</a>
                    </li>
                    <li><a style="color:white!important;" href="#"><i class="material-icons">business</i>12 Rink Street, Central, Port Elizabeth, 6001</a></li>
                    <li><a style="color:white!important;" href="#"><i class="material-icons">local_post_office</i>P.O Box 71650, Central Hill, Port Elizabeth, 6001</a></li>

                </ul>
            </div>
            <div class="col l4 s12">
                <h5 class="white-text">Contacts</h5>
                <p class="grey-text text-lighten-4">You can follow us on Social Media via: </p>
                <a class="white-text" href="https://www.facebook.com/Propella-Business-Incubator-1531773490473015/?fref=ts"><i class="fab fa-facebook fa-2x"></i></a></li>

            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2019 Copyright AluzaFlex
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>
<style>
    nav{
        /*background-color: white!important;*/
    }
    nav ul a{
        /*color:black!important;*/
        font-weight: bolder;
    }
    .brand-logo{
        /*color:black!important;*/
        font-weight: bolder;
    }
</style>
<script>
    M.AutoInit();
    var instance = M.Carousel.init({
        fullWidth: true,
        indicators: true
    });
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
</body>
</html>
