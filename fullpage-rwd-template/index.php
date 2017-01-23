<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>fullPage.js One Page Scroll Sites</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="fullPage plugin by Alvaro Trigo. Create fullscreen pages fast and simple. One page scroll like iPhone website." />
    <meta name="keywords"  content="fullpage,jquery,alvaro,trigo,plugin,fullscren,screen,full,iphone5,apple" />
    <meta name="Resource-type" content="Document" />
    <link rel="stylesheet" type="text/css" href="bower_components/jquery-ui/themes/smoothness/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/fullpage.js/dist/jquery.fullpage.min.css" />
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
                <a class="navbar-brand" href="#">Brand</a>
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
    <div class="section " id="section0">
        <div class="section-container">
            <img class="logo" src="img/logo.png">
            <h1>Far far away, behind the word mountains, far from the countries </h1>
            <h4>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies it with the necessary regelialia.
                It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</h4>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="section-container">
            <div class="team">
                <div class="team-mate">
                    <h3>Lorem</h3>
                    <img src="img/p1.png">
                    <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                        her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the
                        Line Lane. Pityful a rethoric question ran over her cheek, then </p>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="section active" id="section1">-->
<!--        <div class="slide">-->
<!--            <div class="intro">-->
<!--                <h1>Create Sliders</h1>-->
<!--                <p>Not only vertical scrolling but also horizontal scrolling. With fullPage.js you will be able to add horizontal sliders in the most simple way ever.</p>-->
<!--                <img src="imgs/slider.png" alt="slider" />-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="slide">-->
<!--            <div class="intro">-->
<!--                <img src="imgs/1.png" alt="simple" />-->
<!--                <h1>Simple</h1>-->
<!--                <p>Easy to use. Configurable and customizable.</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="slide">-->
<!--            <div class="intro">-->
<!--                <img src="imgs/2.png" alt="Cool" />-->
<!--                <h1>Cool</h1>-->
<!--                <p>It just looks cool. Impress everybody with a simple and modern web design!</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="slide">-->
<!--            <div class="intro">-->
<!--                <img src="imgs/3.png" alt="Compatible" />-->
<!--                <h1>Compatible</h1>-->
<!--                <p>Working in modern and old browsers too! IE 8 users don't have the fault of using that horrible browser! Lets give them a chance to see your site in a proper way!</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="section" id="section2">-->
<!--        <div class="intro">-->
<!--            <h1>Example</h1>-->
<!--            <p>HTML markup example to define 4 sections.</p>-->
<!--            <img src="imgs/example2.png" alt="example" />-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="section" id="section3">-->
<!--        <div class="intro">-->
<!--            <h1>Working On Tablets</h1>-->
<!--            <p>-->
<!--                Designed to fit to different screen sizes as well as tablet and mobile devices.-->
<!--                <br /><br /><br /><br /><br /><br />-->
<!--            </p>-->
<!--        </div>-->
<!--        <img src="imgs/tablets.png" alt="tablets" />-->
<!--    </div>-->
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bower_components/fullpage.js/dist/jquery.fullpage.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['#1bbc9b', '', '#7BAABE', 'whitesmoke', '#ccddff'],
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
            menu: '#menu',
            scrollingSpeed: 1000
        });
    });
</script>

</body>
</html>