<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>trillo &mdash; Your all-in-one booking app</title>
    <!--jQuery-->
    <script src="js/jquery.js"></script>
    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function() {

            $("#login").click(function() {

                email = $("#email").val();
                password = $("#password").val();
                $.ajax({
                    type: "POST",
                    url: "pcheck.php",
                    data: "email=" + email + "&password=" + password,
                    success: function(html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

                            window.location.href = "book.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');


                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
                        }
                    },
                    beforeSend: function() {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <header class="header">
            <img src="img/logo.png" alt="trillo logo" class="logo">

            <form action="#" class="search">
                <input type="text" class="search__input" placeholder="Search hotels">
                <button class="search__button">
                    <svg class="search__icon">
                        <use xlink:href="img/sprite.svg#icon-magnifying-glass"></use>
                    </svg>
                </button>
            </form>
            <nav class="user-nav">
                <div class="user-nav__icon-box">
                    <svg class="user-nav__icon">
                        <use xlink:href="img/sprite.svg#icon-bookmark"></use>
                    </svg>
                    <span class="user-nav__notification">7</span>
                </div>
                <div class="user-nav__icon-box">
                    <svg class="user-nav__icon">
                        <use xlink:href="img/sprite.svg#icon-chat"></use>
                    </svg>
                    <span class="user-nav__notification">13</span>
                </div>
                <div class="user-nav__user">
                    <img src="img/user.jpg" alt="User photo" class="user-nav__user-photo">
                    <span class="user-nav__user-name">Jonas</span>
                </div>
            </nav>
        </header>
        <div class="content">
            <nav class="sidebar">
                <ul class="side-nav">
                    <li class="side-nav__item side-nav__item--active">
                        <a href="#" class="side-nav__link">
                            <svg class="side-nav__icon">
                                <use xlink:href="img/sprite.svg#icon-home"></use>
                            </svg>
                            <span>Hotel</span>
                        </a>
                    </li>
                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <svg class="side-nav__icon">
                                <use xlink:href="img/sprite.svg#icon-aircraft-take-off"></use>
                            </svg>
                            <span>Flight</span>
                        </a>
                    </li>
                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <svg class="side-nav__icon">
                                <use xlink:href="img/sprite.svg#icon-key"></use>
                            </svg>
                            <span>Car rental</span>
                        </a>
                    </li>
                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <svg class="side-nav__icon">
                                <use xlink:href="img/sprite.svg#icon-map"></use>
                            </svg>
                            <span>Tours</span>
                        </a>
                    </li>
                </ul>
                <div class="legal">
                    &copy; 2017 by trillo. All rights reserved.
                </div>
            </nav>
            <main class="hotel-view">
                <div class="detail">
                    <div class="description">
                        <div class="col-lg-12">
                            <hr>
                            <h1 class="text-center">Login

                            </h1>
                            <hr>
                            <div id="add_err2"></div>
                            <form role="form">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Email Address</label>
                                        <input type="email" id="email" name="email" maxlength="25" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-12">
                                        <label>Password</label>
                                        <input type="password" id="password" name="password" maxlength="10" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <button type="submit" id="login" class="btn btn-warning">Login</button>
                                    </div>
                                </div>
                            </form>

                            <div class="form-group col-lg-12">
                                <a href="register.php"><button type="submit" class="btn btn-warning">Not a Member? Register here</button></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
</body>

</html>