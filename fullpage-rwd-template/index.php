<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>fullPage.js One Page Scroll Sites</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="fullPage plugin by Alvaro Trigo. Create fullscreen pages fast and simple. One page scroll like iPhone website." />
    <meta name="keywords"  content="fullpage,jquery,alvaro,trigo,plugin,fullscren,screen,full,iphone5,apple" />
    <meta name="Resource-type" content="Document" />
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <link rel="stylesheet" type="text/css" href="bower_components/jquery-ui/themes/smoothness/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/fullpage.js/dist/jquery.fullpage.min.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/swiper/dist/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="css/dwr-style.css" />
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
                    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
                    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
                    <li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div id="fullpage">
    <div class="section mac-laptop-background full-background" id="section0">
        <div class="section-container">
<!--            <vimeo movie >https://vimeo.com/79142264-->
            <img class="logo" src="img/logo.png">
            <h1>Far far away, behind the word mountains, far from the countries </h1>
            <h3>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies it with the necessary regelialia.
                It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</h3>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="section-container">
            <div class="grid">
                <div class="cell-25 mobile-background full-background">
                    <h1>Lorem ipsum</h1>
                </div>
                <div class="cell-25 code-background full-background">
                    <h1>dolor sit amet</h1>
                </div>
                <div class="cell-25 social-icons-background full-background">
                    <h1>Consectetur adipiscing elit</h1>
                </div>
                <div class="cell-25 keyboard-background full-background">
                    <h1>Nulla nec lectus leo</h1>
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
    </div>
    <div class="section gradient-blue-light" id="section2">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <p class="swiper-slide-header">
                        <span class="glyphicon glyphicon-headphones swiper-icon" aria-hidden="true"></span>
                    </p>
                    <p class="swiper-slide-header">
                        <span>Hello World!</span>
                    </p>
                    <p class="swiper-slide-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu ipsum enim.
                        Nulla lobortis diam sed tellus pretium, et pretium dolor dapibus.
                </div>
                <div class="swiper-slide">
                    <p class="swiper-slide-header">
                        <span class="glyphicon glyphicon-camera swiper-icon" aria-hidden="true"></span>
                    </p>
                    <p class="swiper-slide-header">
                        <span>Lorem ipsum dolor sit amet</span>
                    </p>
                    <p class="swiper-slide-description">
                        Mauris posuere urna quis auctor consequat.
                    </p>
                </div>
                <div class="swiper-slide">
                    <p class="swiper-slide-header">
                        <span class="glyphicon glyphicon-phone swiper-icon" aria-hidden="true"></span>
                    </p>
                    <p class="swiper-slide-header">
                        <span>At solmen va esser necessi far uniform</span>
                    </p>
                    <p class="swiper-slide-description">
                        Mauris posuere urna quis auctor consequat.
                    </p>
                </div>
                <div class="swiper-slide">
                    <p class="swiper-slide-header">
                        <span class="glyphicon glyphicon-thumbs-up swiper-icon" aria-hidden="true"></span>
                    </p>
                    <p class="swiper-slide-header">
                        <span>Serenity has taken possession ...</span>
                    </p>
                    <p class="swiper-slide-description">
                        Mauris posuere urna quis auctor consequat.
                    </p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="section fp-auto-height" id="section3">
        <div class="footer gradient-blue">
            <div class="footer-container">
                <img class="logo" src="img/logo.png">
                <div class="social-icons-container">
                    <img class='social-icon' src="img/facebook_circle.png" alt="facebook">
                    <img class='social-icon' src="img/linkedin_circle.png" alt="linkedin">
                    <img class='social-icon' src="img/twitter_circle.png" alt="twitter">
                    <img class='social-icon' src="img/github_circle.png" alt="github">
                    <img class='social-icon' src="img/rss_circle.png" alt="rss">
                </div>
                <p class="copyrights">Copyrights: <strong>Lorem Ipsum</strong></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bower_components/fullpage.js/vendors/scrolloverflow.min.js"></script>
<script type="text/javascript" src="bower_components/fullpage.js/vendors/jquery.easings.min.js"></script>
<script type="text/javascript" src="bower_components/fullpage.js/dist/jquery.fullpage.min.js"></script>
<script type="text/javascript" src="bower_components/swiper/dist/js/swiper.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
            menu: '.navbar',
            scrollingSpeed: 1000,
            responsive: 961 //switch on fullpage.js
            });
        var mySwiper = new Swiper ('.swiper-container', {
            direction: 'horizontal',
            loop: true,

            /* Pagination */
            pagination: '.swiper-pagination',
            paginationType: 'bullets',
            paginationHide: false,
            paginationClickable: true,
            paginationElement: 'span',

            /* Next/Prev buttons */
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        })
    });
</script>
</body>
</html>