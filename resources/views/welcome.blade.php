@extends('layouts.home-layout')

@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                {{--<h5 class="header center text-lighten-2" >AluzaFlexTransport Trading as <br/> Horizon Transport Services</h5>--}}
                <div class="row center">
                    <h5 class="header col s12" style="color:white;font-weight: bolder;">Affordable, Reliable and
                        Professional Staff</h5>
                    <h5 class="header col s12" style="color:white;font-weight: bolder;">We Offer National Transport
                        Solutions</h5>
                    <h5 class="header col s12" style="color:white;font-weight: bolder;">Variety of Vehicles to suit
                        varying logistical requirements</h5>

                </div>
                <div class="row center">
                    <a id="hirenow-button" class="btn-large waves-effect waves-light teal lighten-1 modal-trigger" href="#modal1">Hire
                        Now</a>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="/images/truck_one.jpg" alt="Horizon Truck 1"></div>
    </div>

    <div class="container">
        <div class="row">
            <h5 style="font-weight: bolder;text-align: center;">Our Services</h5>
            <div class="col s12 m6">
                <div class="card hoverable">
                    <div class="card-content">
                        <h6 class="card-title;" style="font-weight: bolder;">Furniture Removals</h6>
                        <ul style="list-style-type: square;">
                            <li>House Hold Furniture - Nationwide</li>
                            <li>Industrial Furniture</li>
                            <li>Professional Staff to assist with packing</li>
                        </ul>

                    </div>
                    <div class="card-action">
                        <a href="#modal1" class="btn modal-trigger">Hire Now</a>

                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card hoverable">
                    <div class="card-content">
                        <h6 class="card-title;" style="font-weight: bolder;">Construction</h6>
                        <ul style="list-style-type: square;">
                            <li>Rubble Removals - Plot Clearing..etc</li>
                            <li>Construction Equipment Transportation</li>
                            <li>Rubbish and Garden Refuse Removal</li>
                        </ul>

                    </div>
                    <div class="card-action">
                        <a href="#modal1" class="btn modal-trigger">Hire Now</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="our-fleet">
            <h5 style="font-weight: bolder;text-align: center;">Our Fleet</h5>
            <p style="text-align: center;">We have a variety of trucks to suit your logistical requirements, with a
                national footprint. Below are some of our trucks:</p>
            <div class="carousel">
                <a class="carousel-item" href="#one!"><img class="carousel-image" src="/images/truck_one.jpg"
                    ></a>
                <a class="carousel-item" href="#two!"><img class="carousel-image" src="/images/truck_two.jpg"
                    ></a>
                <a class="carousel-item" href="#three!"><img class="carousel-image" src="/images/truck_three.jpg"
                    ></a>
                <a class="carousel-item" href="#four!"><img class="carousel-image" src="/images/truck_four.jpg"
                    ></a>
                <a class="carousel-item" href="#five!"><img class="carousel-image" src="/images/truck_five.jpg"
                    ></a>
            </div>
        </div>

        <div class="section">
            <div class="row">
                <div class="col s12 center" id="contact-us">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h5 style="font-weight: bolder;">Contact Us</h5>
                    <div class="row">
                        <form id="general-contact-form" class="col s12">
                            <div class="row">
                                <div class="input-field col m6 col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input required placeholder="First Name" id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col m6 col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input required id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m6 col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input required id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field col m6 col s12">
                                    <i class="material-icons prefix">phone</i>
                                    <input required id="contact_number" required type="tel" class="validate">
                                    <label for="contact_number">Contact Number</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea data-length="180" required id="message" class="materialize-textarea"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light" style="margin-left:2em;" id="send-message" name="action">Send Message
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Horizon Transport Hiring</h4>
            <form id="submit-request-form" class="col s12">
                @csrf
                <div class="row">
                    <div class="input-field col m6">
                        <input id="name" required type="text" class="validate">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="input-field col m6">
                        <input id="phone_number" required type="tel" class="validate">
                        <label for="phone_number">Contact Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <input id="email_address" required type="email" class="validate">
                        <label for="email_address">Email</label>
                    </div>
                    <div class="input-field col m6">
                        <textarea id="address" required class="materialize-textarea"></textarea>
                        <label for="address">Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <textarea required id="details" class="materialize-textarea"></textarea>
                        <label for="details">Hire Details</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col offset-m4">
                        <a href="#!" class="modal-close waves-effect waves-green btn">Cancel<i class="material-icons right">close</i> </a>
                        <button class="btn waves-effect waves-light" style="margin-left:2em;" id="save-hire" name="action">Send
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <style>
        @media only screen and (min-width: 620px) {
            .carousel-image {
                width: 400px !important;
                height: 400px;
            }
        }

        @media only screen and (max-width: 619px) {
            .carousel-image {
                width: 250px !important;;
                height: 250px;
            }
        }

    </style>
<script>
    $(document).ready(function(){
        $('.modal').modal();
        $('#submit-request-form').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData();
            formData.append('name', $('#name').val());
            formData.append('phone_number', $('#phone_number').val());
            formData.append('email', $('#email_address').val());
            formData.append('address', $('#address').val());
            formData.append('details', $('#details').val());

            console.log("user ", formData);
            $.ajax({
                url: "/submit-hire",
                processData: false,
                contentType: false,
                data: formData,
                type: 'post',

                success: function (response, a, b) {
                    console.log("success",response);
                    alert(response.message);
                    window.location.reload();
                },
                error: function (response) {
                    console.log("error",response);
                    let message = response.responseJSON.message;
                    console.log("error",message);
                    let errors = response.responseJSON.errors;

                    for (var error in   errors) {
                        console.log("error",error)
                        if( errors.hasOwnProperty(error) ) {
                            message += errors[error] + "\n";
                        }
                    }
                    alert(message);
                    window.location.reload();
                }
            });
        });

        $('#general-contact-form').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData();
            formData.append('first_name', $('#first_name').val());
            formData.append('last_name', $('#last_name').val());
            formData.append('contact_number', $('#contact_number').val());

            formData.append('message', $('#message').val());

            console.log("user ", formData);
            $.ajax({
                url: "/general-contact",
                processData: false,
                contentType: false,
                data: formData,
                type: 'post',

                success: function (response, a, b) {
                    console.log("success",response);
                    alert(response.message);
                    window.location.reload();
                },
                error: function (response) {
                    console.log("error",response);
                    let message = response.responseJSON.message;
                    console.log("error",message);
                    let errors = response.responseJSON.errors;

                    for (var error in   errors) {
                        console.log("error",error)
                        if( errors.hasOwnProperty(error) ) {
                            message += errors[error] + "\n";
                        }
                    }
                    alert(message);
                    window.location.reload();
                }
            });
        });
    });
</script>
@endsection