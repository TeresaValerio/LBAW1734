<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vici | Conquer your World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/CSS/user.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src="JS/frontPage.js"></script>-->
    <style>
    </style>
</head>

<body>
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="/img/navbarLogo.png" height="30" alt="Vici">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="user.html">Inês Gonçalves</a>
                    </li>
                    <li>
                        <a href="explore.html">Explore</a>
                    </li>
                    <li>
                        <a href="#">
                            Notifications
                            <span class="badge badge-light">2</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="settings.html">Account Settings</a>
                            </li>
                            <li>
                                <a href="index.html">Log Out</a>
                            </li>
                            <li>
                                <a href="administration.html">Administration</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.container-fluid -->
    </nav>
    <!-- navbar -->

    @yield('content')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>

</html>