<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vici | Conquer your World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/frontPage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="JS/frontPage.js"></script>
    <style>
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About Us</a>
                    </li>
                    <li>
                        <a href="#projects">Projects</a>
                    </li>
                    <li>
                        <a href="#contacts">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.container-fluid -->
    </nav>
    <!-- navbar -->

    <!-- Main Jumbotron -->
    <div id="home" class="jumbotron text-center">
        <h1>Vici</h1>
        <p>Don't let your projects take over.
            <strong>Conquer your world.</strong>
        </p>
        <a style="color: white" href="#" data-toggle="modal" data-target="#login-modal">
            <span class="glyphicon glyphicon-ok-circle fa-5x" aria-hidden="true"></span>
        </a>
        <p style="font-size: 17px" class="text-center">
            Log in or Create an Account
        </p>
        </form>
    </div>
    <!-- Jumbotron -->

    <!-- Modal Login -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #7ABED3; color: #fff">
                    <strong>Enter Website</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                    <!-- Begin # Login Form -->
                    <form id="login-form">
                        <div class="modal-body">
                            <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Login to your account</span>
                            </div>
                            <input id="login_email" class="form-control" type="email" placeholder="Email">
                            <input id="login_password" class="form-control" type="password" placeholder="Password">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-info btn-lg btn-block">Login</button>
                            </div>
                            <div>
                                <a href="user.html">
                                    <p>Don't have an account?
                                    </p>
                                </a>
                                <p>
                                    <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                                </p>
                            </div>
                        </div>
                    </form>
                    <!-- End # Login Form -->

                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
                        <div class="modal-body">
                            <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register an account</span>
                            </div>
                            <input id="register_username" class="form-control" type="text" placeholder="Username" required>
                            <input id="register_email" class="form-control" type="email" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-info btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                            </div>
                        </div>
                    </form>
                    <!-- End | Register Form -->

                </div>
                <!-- End # DIV Form -->

            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->

    <!-- About Container -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>About Us</h2>
                <p>In today’s world, an online organizing system is essential for companies to manage their projects. Our application
                    strives to group all the advantages of different systems, having an
                    <strong>intuitive interface, easy to use, and to add and consult project information,</strong>
                    all
                    <strong>free</strong> of charge. It would be
                    <strong>fit for all kinds of companies and associations,</strong> from marketing to web development and architecture.</p>
            </div>
            <div class="col-sm-4">
                <h4 allign="center">What We Offer</h4>
                <div class="col-sm-6">
                    <p>
                        <span class="glyphicon glyphicon-ok"></span>
                        Intuitive Interface
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-ok"></span>
                        Easy to Use
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>
                        <span class="glyphicon glyphicon-ok"></span>
                        Discover New Projects
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-ok"></span>
                        Free of Charge
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Container -->
    <div id="projects" class="container-fluid text-center bg-grey">
        <h2>Projects</h2>
        <h4>Check what other people have achieved with the Vici app</h4>
        <div class="row text-center">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-content" align="center">
                        <div class="card-header">
                            <h4>
                                <strong>Hive</strong>
                            </h4>
                        </div>
                        <div class="card-body">
                            <img src="https://thumbs.dreamstime.com/b/best-bee-hive-logo-design-84149860.jpg" alt="User Picture" style="height:125px;">
                            <hr />
                            <h4>
                                <strong>Description</strong>
                            </h4>
                            <p>
                                Teresa Valério uses Vici to manage her honey factory.
                            </p>
                            <p>
                                When she started using our app, she truly became the Queen of the Hive!
                            </p>
                            <hr />
                            <a href="project.html">
                                <p>See more</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-content" align="center">
                        <div class="card-header">
                            <h4>
                                <strong>ACORN</strong>
                            </h4>
                        </div>
                        <div class="card-body">
                            <img src="https://i.pinimg.com/originals/61/08/5b/61085bf8f325fe5e0a99b4259564e44a.jpg" alt="User Picture" style="height:142px;">
                            <hr />
                            <h4>
                                <strong>Description</strong>
                            </h4>
                            <p>
                                Preparing for winter can be hard, with limited budget and many frenetic workers.
                            </p>
                            <p>
                                With Vici, Sara can manage her stock without goint nuts!
                            </p>
                            <hr />
                            <a href="project.html">
                                <p>See more</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Container -->
    <div id="contacts" class="container-fluid bg-darkgrey">
        <h2>CONTACT</h2>
        <p>
            <span class="glyphicon glyphicon-map-marker"></span> Porto, Portugal</p>
        <p>
            <span class="glyphicon glyphicon-phone"></span> +351 220 987 567</p>
        <p>
            <span class="glyphicon glyphicon-envelope"></span> geral@vici.pt</p>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>
</body>

</html>
