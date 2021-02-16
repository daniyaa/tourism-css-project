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

            $("#register").click(function() {

                fname = $("#fname").val();
                lname = $("#lname").val();
                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
                    success: function(html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                            window.location.href = "book.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');

                        } else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
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
                            <h1 class="text-center">Register
                                <strong>Now</strong>
                            </h1>
                            <hr>
                            <div id="add_err2"></div>
                            <form role="form">
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label>First Name</label>
                                        <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Last Name</label>
                                        <input type="text" id="lname" name="lname" maxlength="25" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Email Address</label>
                                        <input type="email" id="email" name="email" maxlength="25" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-12">
                                        <label>Password</label>
                                        <input type="password" id="password" name="password" maxlength="10" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <button type="submit" id="register" class="btn btn-warning">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
</body>

</html>