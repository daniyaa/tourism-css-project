<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
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
                    <div class="gallery">
                        <figure class="gallery__item">
                            <img src="img/hotel-1.jpg" alt="Photo of hotel 1" class="gallery__photo">
                        </figure>
                        <figure class="gallery__item">
                            <img src="img/hotel-2.jpg" alt="Photo of hotel 2" class="gallery__photo">
                        </figure>
                        <figure class="gallery__item">
                            <img src="img/hotel-3.jpg" alt="Photo of hotel 3" class="gallery__photo">
                        </figure>
                    </div>

                    <div class="overview">
                        <h1 class="overview__heading">
                            Hotel Las Palmas
                        </h1>

                        <div class="overview__stars">
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                        </div>

                        <div class="overview__location">
                            <svg class="overview__icon-location">
                                <use xlink:href="img/sprite.svg#icon-location-pin"></use>
                            </svg>
                            <button class="btn-inline">Albufeira, Portugal</button>
                        </div>

                        <div class="overview__rating">
                            <div class="overview__rating-average">8.6</div>
                            <div class="overview__rating-count">429 votes</div>
                        </div>
                    </div>

                    <div class="detail">
                        <div class="description">
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nisi dignissimos debitis ratione sapiente saepe. Accusantium cumque, quas, ut corporis incidunt deserunt quae architecto voluptate.
                            </p>
                            <p class="paragraph">
                                Accusantium cumque, quas, ut corporis incidunt deserunt quae architecto voluptate delectus, inventore iure aliquid aliquam.
                            </p>
                            <ul class="list">
                                <li class="list__item">Close to the beach</li>
                                <li class="list__item">Breakfast included</li>
                                <li class="list__item">Free airport shuttle</li>
                                <li class="list__item">Free wifi in all rooms</li>
                                <li class="list__item">Air conditioning and heating</li>
                                <li class="list__item">Pets allowed</li>
                                <li class="list__item">We speak all languages</li>
                                <li class="list__item">Perfect for families</li>
                            </ul>
                            <div class="recommend">
                                <p class="recommend__count">
                                    Lucy and 3 other friends recommend this hotel.
                                </p>
                                <div class="recommend__friends">
                                    <img src="img/user-3.jpg" alt="Friend 1" class="recommend__photo">
                                    <img src="img/user-4.jpg" alt="Friend 2" class="recommend__photo">
                                    <img src="img/user-5.jpg" alt="Friend 3" class="recommend__photo">
                                    <img src="img/user-6.jpg" alt="Friend 4" class="recommend__photo">
                                </div>
                            </div>
                        </div>

                        <div class="user-reviews">
                            <figure class="review">
                                <blockquote class="review__text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga doloremque architecto dicta animi, totam, itaque officia ex.
                                </blockquote>
                                <figcaption class="review__user">
                                    <img src="img/user-1.jpg" alt="User 1" class="review__photo">
                                    <div class="review__user-box">
                                        <p class="review__user-name">Nick Smith</p>
                                        <p class="review__user-date">Feb 23rd, 2017</p>
                                    </div>
                                    <div class="review__rating">7.8</div>
                                </figcaption>
                            </figure>

                            <figure class="review">
                                <blockquote class="review__text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga doloremque architecto dicta animi.
                                </blockquote>
                                <figcaption class="review__user">
                                    <img src="img/user-2.jpg" alt="User 1" class="review__photo">
                                    <div class="review__user-box">
                                        <p class="review__user-name">Mary Thomas</p>
                                        <p class="review__user-date">Sept 13th, 2017</p>
                                    </div>
                                    <div class="review__rating">9.3</div>
                                </figcaption>
                            </figure>

                            <button class="btn-inline">Show all <span>&rarr;</span></button>
                        </div>

                        <div class="cta">
                            <h2 class="cta__book-now">
                                Good news! We have 4 free rooms for your selected dates!
                            </h2>
                            <a href="book.php">
                                <button class="btn">
                                    <span class="btn__visible">Book now</span>
                                    <span class="btn__invisible">Only 4 rooms left</span>
                                </button>
                            </a>
                        </div>

                    </div>


                </main>
            </div>
        </div>
    </body>
</html>