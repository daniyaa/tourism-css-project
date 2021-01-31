<?php
include('database.inc.php');
$msg="";
if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$rooms=mysqli_real_escape_string($con,$_POST['rooms']);
	mysqli_query($con,"insert into detail(name,email,mobile,rooms) values('$name','$email','$mobile', '$rooms')");
	$msg="Thanks message";
	
}
?>
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
                    <h1 class="text-center">Book
                        <strong>Now</strong>
                    </h1>
                    <hr> 
                    <div id="add_err2"></div>   
                    <form method="post" id="frmContactus">
					<div class="contact-form">
					  <div class="form-group">
						 <label>Name:</label>
						 <div class="col-sm-10">          
							<input type="text" class="form-control" id="name"  name="name" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label>Email:</label>
						 <div class="col-sm-10">
							<input type="email" class="form-control" id="email"  name="email" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label>Mobile:</label>
						 <div class="col-sm-10">
							<input type="text" class="form-control" id="mobile"  name="mobile" required>
						 </div>
					  </div>
					  
					  <div class="form-group">
						 <label>Rooms:</label>
                         <div class="col-sm-10">
                         <input type="text" class="form-control" id="rooms"  name="rooms" required>
                         </div>
					  </div>

					  <div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
							<span style="color:green;"><?php echo $msg ?></span>
						 </div>
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
