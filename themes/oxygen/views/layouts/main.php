<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="CubaOutings is a tours company based in Cuba that mainly develops personalized sightseeing tours, round trips and excursions from Varadero to Havana and the rest of the Cuban historical or natural sites. It also provides services such as Tranfers Lodgings">
    <meta name="language" content="en"/>
    <meta name="author" content="">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/lightbox.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" rel="stylesheet">
    <link id="css-preset" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/presets/preset1.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ajustes.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/themes/oxygen/assets/e6fb1a0c/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">var layout = 1;</script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<!--/head-->

<body>

<!--.preloader-->
<div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->

<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active"  style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/slider/Capitolio-Nacional-Car-Street-Havana-Cuba.jpg)">
                <div id="front-first-En" class="caption visible">
                    <h1 class="animated fadeInLeftBig">Welcome to <span class="caption_slider">Cubaoutings</span></h1>

                    <p class="animated fadeInRightBig"><?php echo Yii::t('app', 'The best way to explore Cuba'); ?></p>
					<p class="animated fadeInLeftBig" style=" text-transform: none;font-size: 15px;">Share this site with your friends</p>
                   
				   <div>
				   <ul class="way2blogging-social way2blogging-cssanime way2blogging-size32 animated fadeInRightBig">
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/facebook.png);"><a rel="nofollow" target="_blank" title="Share this on Facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;t=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Facebook</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/twitter.png);"><a rel="nofollow" target="_blank" title="Tweet This!" href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Twitter</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/google-plus.png);"><a rel="nofollow" target="_blank" title="Share this on Google+" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex"><strong>Google+</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/linkedin.png);"><a rel="nofollow" target="_blank" title="Share this on LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;title=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>LinkedIn</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/tripadvisor.png);"><a rel="nofollow" target="_blank" title="Find us on Tripadvisor" href="http://www.tripadvisor.es/Attraction_Review-d7297007"><strong>Tripadvisor</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/instagram.png);"><a rel="nofollow" target="_blank" title="Find us on Instagram" href="https://instagram.com/cubaoutings/"><strong>Instagram</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/pinterest.png);"><a rel="nofollow" target="_blank" title="Find us on Pinterest" href="https://www.pinterest.com/cubaoutings/"><strong>Pinterest</strong></a></li>
                    </ul>
				</div>                 


                    <a data-scroll class="btn btn-start animated fadeInUpBig" style="margin-top: 15px" href="#about-us">Start now</a>
                </div>
				
				 <div  id="front-first-Es" class="caption collapse">
                    <h1 class="animated fadeInLeftBig">Bienvenido a <span class="caption_slider">Cubaoutings</span></h1>

                    <p class="animated fadeInRightBig"><?php echo Yii::t('app', 'La mejor forma de explorar Cuba'); ?></p>
					<p class="animated fadeInLeftBig" style=" text-transform: none;font-size: 15px;">Comparta esto con sus Amigos</p>
                   
				   <div>
				   <ul class="way2blogging-social way2blogging-cssanime way2blogging-size32 animated fadeInRightBig">
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/facebook.png);"><a rel="nofollow" target="_blank" title="Share this on Facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;t=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Facebook</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/twitter.png);"><a rel="nofollow" target="_blank" title="Tweet This!" href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Twitter</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/google-plus.png);"><a rel="nofollow" target="_blank" title="Share this on Google+" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex"><strong>Google+</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/linkedin.png);"><a rel="nofollow" target="_blank" title="Share this on LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;title=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>LinkedIn</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/tripadvisor.png);"><a rel="nofollow" target="_blank" title="Find us on Tripadvisor" href="http://www.tripadvisor.es/Attraction_Review-d7297007"><strong>Tripadvisor</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/instagram.png);"><a rel="nofollow" target="_blank" title="Find us on Instagram" href="https://instagram.com/cubaoutings/"><strong>Instagram</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/pinterest.png);"><a rel="nofollow" target="_blank" title="Find us on Pinterest" href="https://www.pinterest.com/cubaoutings/"><strong>Pinterest</strong></a></li>
                    </ul>
				</div>                 


                    <a data-scroll class="btn btn-start animated fadeInUpBig" style="margin-top: 15px" href="#about-us">Comenzar</a>
                </div>
				
            </div>
            <div class="item" style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/slider/back4.jpg)">
                <div id="front-second-En" class="caption visible">
                    <h1 class="animated fadeInLeftBig">Say Hello to <span class="caption_slider2">Cubaoutings</span></h1>

                    <p class="animated fadeInRightBig"><?php echo Yii::t('app', 'Cuban tourism professionals'); ?></p>
					<p class="animated fadeInLeftBig" style=" text-transform: none;font-size: 15px;">Share this site with your friends</p>
                    <div>
					<ul class="way2blogging-social way2blogging-cssanime way2blogging-size32 animated fadeInRightBig">
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/facebook.png);"><a rel="nofollow" target="_blank" title="Share this on Facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;t=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Facebook</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/twitter.png);"><a rel="nofollow" target="_blank" title="Tweet This!" href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Twitter</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/google-plus.png);"><a rel="nofollow" target="_blank" title="Share this on Google+" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex"><strong>Google+</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/linkedin.png);"><a rel="nofollow" target="_blank" title="Share this on LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;title=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>LinkedIn</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/tripadvisor.png);"><a rel="nofollow" target="_blank" title="Find us on Tripadvisor" href="http://www.tripadvisor.es/Attraction_Review-d7297007"><strong>Tripadvisor</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/instagram.png);"><a rel="nofollow" target="_blank" title="Find us on Instagram" href="https://instagram.com/cubaoutings/"><strong>Instagram</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/pinterest.png);"><a rel="nofollow" target="_blank" title="Find us on Pinterest" href="https://www.pinterest.com/cubaoutings/"><strong>Pinterest</strong></a></li>
                    </ul>
					</div>
                   
                    <a data-scroll class="btn btn-start animated fadeInUpBig" style="margin-top: 15px" href="#about-us">Start now</a>
                </div>
				 <div id="front-second-Es" class="caption collapse">
                    <h1 class="animated fadeInLeftBig">Diga Hola <span class="caption_slider2">Cubaoutings</span></h1>

                    <p class="animated fadeInRightBig"><?php echo Yii::t('app', 'Profesionales del Turismo cubano'); ?></p>
					<p class="animated fadeInLeftBig" style=" text-transform: none;font-size: 15px;">Comparta esto con sus Amigos</p>
                    <div>
					<ul class="way2blogging-social way2blogging-cssanime way2blogging-size32 animated fadeInRightBig">
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/facebook.png);"><a rel="nofollow" target="_blank" title="Share this on Facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;t=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Facebook</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/twitter.png);"><a rel="nofollow" target="_blank" title="Tweet This!" href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Twitter</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/google-plus.png);"><a rel="nofollow" target="_blank" title="Share this on Google+" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex"><strong>Google+</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/linkedin.png);"><a rel="nofollow" target="_blank" title="Share this on LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;title=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>LinkedIn</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/tripadvisor.png);"><a rel="nofollow" target="_blank" title="Find us on Tripadvisor" href="http://www.tripadvisor.es/Attraction_Review-d7297007"><strong>Tripadvisor</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/instagram.png);"><a rel="nofollow" target="_blank" title="Find us on Instagram" href="https://instagram.com/cubaoutings/"><strong>Instagram</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/pinterest.png);"><a rel="nofollow" target="_blank" title="Find us on Pinterest" href="https://www.pinterest.com/cubaoutings/"><strong>Pinterest</strong></a></li>
                    </ul>
					</div>
                   
                    <a data-scroll class="btn btn-start animated fadeInUpBig" style="margin-top: 15px" href="#about-us">Comenzar</a>
                </div>
            </div>
            <div class="item" style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/slider/1.jpg)">
                <div id="front-third-En" class="caption visible">
                    <h1 class="animated fadeInLeftBig">We are <span>Cubaoutings</span></h1>

                    <p class="animated fadeInRightBig"><?php echo Yii::t('app', 'Professionals and fun'); ?></p>
					<p class="animated fadeInLeftBig" style=" text-transform: none;font-size: 15px;">Share this site with your friends</p>
					<div>
                    <ul class="way2blogging-social way2blogging-cssanime way2blogging-size32 animated fadeInRightBig">
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/facebook.png);"><a rel="nofollow" target="_blank" title="Share this on Facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;t=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Facebook</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/twitter.png);"><a rel="nofollow" target="_blank" title="Tweet This!" href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Twitter</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/google-plus.png);"><a rel="nofollow" target="_blank" title="Share this on Google+" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex"><strong>Google+</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/linkedin.png);"><a rel="nofollow" target="_blank" title="Share this on LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;title=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>LinkedIn</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/tripadvisor.png);"><a rel="nofollow" target="_blank" title="Find us on Tripadvisor" href="http://www.tripadvisor.es/Attraction_Review-d7297007"><strong>Tripadvisor</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/instagram.png);"><a rel="nofollow" target="_blank" title="Find us on Instagram" href="https://instagram.com/cubaoutings/"><strong>Instagram</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/pinterest.png);"><a rel="nofollow" target="_blank" title="Find us on Pinterest" href="https://www.pinterest.com/cubaoutings/"><strong>Pinterest</strong></a></li>
                    </ul>
					</div>
                    

                    <a data-scroll class="btn btn-start animated fadeInUpBig" style="margin-top: 15px"  href="#about-us">Start now</a>
                </div>
				<div id="front-third-Es" class="caption collapse">
                    <h1 class="animated fadeInLeftBig">Nosotros Somos <span>Cubaoutings</span></h1>

                    <p class="animated fadeInRightBig"><?php echo Yii::t('app', 'Profesionales y Divertidos'); ?></p>
					<p class="animated fadeInLeftBig" style=" text-transform: none;font-size: 15px;">Comparta esto con sus Amigos</p>
					<div>
                    <ul class="way2blogging-social way2blogging-cssanime way2blogging-size32 animated fadeInRightBig">
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/facebook.png);"><a rel="nofollow" target="_blank" title="Share this on Facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;t=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Facebook</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/twitter.png);"><a rel="nofollow" target="_blank" title="Tweet This!" href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>Twitter</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/google-plus.png);"><a rel="nofollow" target="_blank" title="Share this on Google+" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex"><strong>Google+</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/linkedin.png);"><a rel="nofollow" target="_blank" title="Share this on LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;title=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><strong>LinkedIn</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/tripadvisor.png);"><a rel="nofollow" target="_blank" title="Find us on Tripadvisor" href="http://www.tripadvisor.es/Attraction_Review-d7297007"><strong>Tripadvisor</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/instagram.png);"><a rel="nofollow" target="_blank" title="Find us on Instagram" href="https://instagram.com/cubaoutings/"><strong>Instagram</strong></a></li>
                        <li style="background-image:url(<?php echo Yii::app()->theme->baseUrl; ?>/assets/e6fb1a0c/images/32px/pinterest.png);"><a rel="nofollow" target="_blank" title="Find us on Pinterest" href="https://www.pinterest.com/cubaoutings/"><strong>Pinterest</strong></a></li>
                    </ul>
					</div>
                    

                    <a data-scroll class="btn btn-start animated fadeInUpBig" style="margin-top: 15px"  href="#about-us">Comenzar</a>
                </div>
            </div>


        </div>
        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

        <a id="tohash" href="#about-us"><i class="fa fa-angle-down"></i></a>

    </div>
    <!--/#home-slider-->
    <div class="main-nav">
        <!-- Fixed navbar -->
        <div class="row navbar-inverse ">
                 <div class="col-sm-1"></div>
            <div class="col-sm-11 container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"  href="<?php echo Yii::app()->createUrl('site/index'); ?>" style="padding: 0">
                        <img src=" <?php echo Yii::app()->theme->baseUrl; ?>/../img/logosi.png" style="margin-right: 10px">
                    </a>
                </div>
               <!-- <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bootstrap theme</a>
                </div>-->
                <div class="navbar-collapse collapse" >

                     <ul id="navMenu-En" class="col-sm-10  nav navbar-nav visible">
                         <li><a href="#">Home</a></li>
                         <li><a href="#about-us">About us</a></li>
                         <li><a href="#services">Services</a></li>
                         <li><a href="#portfolio">Tours</a></li>
                         <li><a href="#lodgings">Lodgings</a></li>
                         <li><a href="#twitter">Bookings</a></li>
                         <li><a href="#about">Photos</a></li>
						 <li><a href="#team">Team</a></li>
                         <li><a href="#blog">Comments</a></li>
                         <li><a href="#contact">Contact</a></li>
                     </ul>
                    <ul id="navMenu-Es"  class="col-sm-10  nav navbar-nav collapse" >
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#about-us">Conócenos</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#portfolio">Excursiones</a></li>
                        <li><a href="#lodgings">Alojamiento</a></li>
                        <li><a href="#about">Reservaciones</a></li>
                        <li><a href="#about">Fotos</a></li>
						<li><a href="#team">Equipo</a></li>
                        <li><a href="#blog">Comentarios</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                   
                    <script type="text/javascript">
					
					
                        function alertselected(selectobj){
                            /* var x="<?php  Yii::app()->setLanguage($lan);    ?>/css/main.css";
                            alert(x);
							 var crap = setLanguage(selectobj.options[selectobj.selectedIndex].value)*/
							
							/* front page view */
							/* first */
							
							
							 var ms=document.getElementById("front-first-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                             ms=document.getElementById("front-first-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
							/* second */
							 ms=document.getElementById("front-second-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                             ms=document.getElementById("front-second-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
							/* third */
							 ms=document.getElementById("front-third-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                             ms=document.getElementById("front-third-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
                            /* top navbar*/
                             ms=document.getElementById("navMenu-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                             ms=document.getElementById("navMenu-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            /* About Section*/
                             ms=document.getElementById("about-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("about-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            /* Service Section*/
                             ms=document.getElementById("services-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("services-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
					      /* Tours Section*/
                             ms=document.getElementById("tours-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("tours-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
							 /* Lodgings Section*/
                             ms=document.getElementById("lodgings-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("lodgings-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
							 /* Team Section*/
                             ms=document.getElementById("team-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("team-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							

							 /* Blog Section*/
                             ms=document.getElementById("comments-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("comments-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
							 /* Twitter Section*/
							 /* 1 */
							   ms=document.getElementById("tcarousel-first-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("tcarousel-first-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
							 /* 2 */
							   ms=document.getElementById("tcarousel-second-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("tcarousel-second-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
							 /* 3 */
                             ms=document.getElementById("tcarousel-third-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("tcarousel-third-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
							/* Contact us Section*/
                             ms=document.getElementById("contac-us-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("contac-us-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false)
							
							/* all modals*/
							
							
							/*casa bonita
							 ms=document.getElementById("casabonita-link-En")

                            if(selectobj.options[selectobj.selectedIndex].value=='en')
                                visibility(ms,true)
                            else
                                visibility(ms,false)

                            ms=document.getElementById("casabonita-link-Es")

                            if(selectobj.options[selectobj.selectedIndex].value=='es')
                                visibility(ms,true)
                            else
                                visibility(ms,false) */
							
							


                        }

						function visibilityString42(id1,option1,id2,option2) {
							
							
							var selectobj =	document.getElementById(id1)
							
                            if (!option1)
                                selectobj.className = selectobj.className.replace('visible', 'collapse')
                            else
                                selectobj.className = selectobj.className.replace('collapse', 'visible')
							
							selectobj =	document.getElementById(id2)
							
                            if (!option2)
                                selectobj.className = selectobj.className.replace('visible', 'collapse')
                            else
                                selectobj.className = selectobj.className.replace('collapse', 'visible')
							
						
                        }
						
                        function visibilityString(id,option) {
							
							
							var selectobj =	document.getElementById(id)
							
                            if (!option)
                                selectobj.className = selectobj.className.replace('visible', 'collapse')
                            else
                                selectobj.className = selectobj.className.replace('collapse', 'visible')
							
						
                        }


						function visibility(selectobj,option) {

                            if (!option)
                                selectobj.className = selectobj.className.replace('visible', 'collapse')
                            else
                                selectobj.className = selectobj.className.replace('collapse', 'visible')
							
							
                        }

							function EnviarCorreo()
							{
								var x="<?php echo Yii::app()->theme->baseUrl; ?>";
								alert(x+'/sendemail.php')
								/*jQuery.ajax({
									type: "POST",
									url: x+'/sendemail.php'
									data: {functionname: 'enviaCorreo', arguments: [$(".name").val(), $(".email").val(), $(".subject").val()]}, 
									 success:function(data) {
									alert(data); 
									 }
								});*/
							}

                    </script>

                 <ul class="  nav navbar-nav " >
                        <li>
                            <a>
                            <div id="languagePickerContainer"><form  action="/cubaoutings2/" method="post"><select class="selectlanguage" name="languagePicker" id="languagePicker" onchange="alertselected(this)"  style="background: #2C3E50">
                                        <option value="en" selected="true">EN</option>
                                        <option value="es">ES</option>
                                        <!--<option value="fr">FR</option>
                                        <option value="it">IT</option>
                                        <option value="ru">RU</option>-->
                                    </select></form>
                            </div>
                            </a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->

            </div>

           <!-- <script type="text/javascript">

                var selectmenu=document.getElementById("languagePicker")
                selectmenu.onchange=function(){ //run some code when "onchange" event fires
                    var chosenoption=this.options[this.selectedIndex].value //this refers to "selectmenu"

                    Yii::app()->setLanguage('es');

                       ?>
                    alert("Selected Option's index: "+ chosenoption)

                }

            </script>-->

               <!--  <div id="languagePickerContainer"><form  action="#" method="post"><select name="languagePicker" id="languagePicker" >
                      <option value="en" selected="selected">EN</option>
                      <option value="es">ES</option>
                      <option value="fr">FR</option>
                      <option value="it">IT</option>
                      <option value="ru">RU</option>
                  </select></form>
          </div>-->

         </div>
    </div>
<!--/#main-nav-->
</header>
<!--/#contact-->

<section id="about-us"   class="parallax" style="text-align: center; ">

    <div class="container  visible" id="about-En">
        <!--<div style="height: 20px"></div>-->
        <div class="row" >
            <div class="col-sm-6">
                <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>About us</h2>

                    <p><span class="lead">Cubaoutings</span> is a tours company based in Cuba that mainly develops personalized sightseeing tours and excursions from Varadero to Havana and the rest of the Cuban historical or natural sites. Since 2012, We show people from all over the world our beautiful country with its constant changes. With CubaOutings, you have the opportunity to know Cuba as a local, which is the best way to explore Cuba. We give you the chance to create your own program, or just let us show you our country. We have developed a group of tours covering the whole western part of Cuba, but a range of products and services can be offered to tailor to your particular requirements.</p>
                   <!-- <p><span class="lead"  id="missionStatement"  >Mission Statement: </span>We are a team of excellent tourism professionals ready to satisfy your needs regarding personalized tours to interesting places throughout Cuba with a quality service, safety, comfort, while promoting responsible tourism in the respect of environment, as well as cultural and religious differences.</p>-->
                </div>
            </div>
            <div class="about-rating col-sm-6" >
                <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <p class="lead">User Experiences</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                        <p class="lead">Excellency</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="75">75%</div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <p class="lead">Comfort</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="60">60%</div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <p class="lead">Fun</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="97">97%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  collapse" id="about-Es">
        <!--<div style="height: 20px"></div>-->
        <div class="row" >
            <div class="col-sm-6">
                <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>Conócenos</h2>

                    <p><span class="lead">Cubaoutings</span> es una compañia de Turismo radicada en cuba que principalmente desarrolla viajes personalizados, y excursiones desde Varadero a la Habana, asi como al resto de los lugares de relavancia historico-cultural de Cuba. Desde el 2012,  le mostramos a personas de todo el mundo nuestro hermoso pais con sus constantes cambios. Con CubaOutings, usted tiene la oportunidad de conocer Cuba como local, lo cual es la mejor manera de explorar Cuba which is the best way to explore Cuba. Nosotros les damos la opcion de crear su propia agenda, o solo dejarnos a nosotros mostrale nuestro pais. Hemos desarrollado un grupo de excursiones que cubren toda la zona occidental del Cuba, ademas de otros productos y servicios que pudieran ser brindados en orden de satisfacer sus requerimientos particulares.</p>
                    <!--<p><span class="lead"  id="missionStatement"  >Nuestra Misión: </span>Somos un equipo de excelentes profesionales del turismo preparados para satisfacer sus necesidades respecto a excursiones personalizadas a lugares interesantes a lo largo y ancho de Cuba con un servicio de calidad que promueve el turismo responsable en cuanto al cuidado del medio ambiente, y al respeto de las diferencias religiosas y culturales.</p>-->
                </div>
            </div>
            <div class="about-rating col-sm-6" >
                <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <p class="lead">Experiencia de Usuario</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                        <p class="lead">Excelencia</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="75">75%</div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <p class="lead">Comfort</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="60">60%</div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <p class="lead">Diversion</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="97">97%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#about-us-->

<section id="services">

    <div id="services-En" class="container visible">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row" >
                <div class="text-center ">
                    <h2>Our Services</h2>
                   <!-- <p>With more than 10 years in the business, Cubaoutings show it self as an unique choice to enjoy the greatest experiences  of traveling the amazing Cuba island.</p>-->
                    <p>We strive to make your outing in Cuba more than just a "vacation", by making every step of your adventure authentic and life-changing. Our team has achieved a great reputation for the services we provide. Now our clients have the opportunity to experience a personalized travel around Cuba. We can make specialized programs to meet your needs, whether you are independent travelers, couples or groups.
                        We have comfortable and air conditioned cars of different sizes. We also give the possibility to go in classic cars, and feel like being back in the 50s. All these cars are certified by the State Insurance Company to guarantee security and efficiency.</p>

                </div>
            </div>
        </div>
        <div class="text-center our-services"  >
            <div class="row">
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="service-icon">
                        <i class="fa fa-group"></i>
                    </div>
                    <div class="service-info">
                        <h3>Tours</h3>
                        <p>We offer many options when it comes to tours: private tours, exclusive tours, sightseeing tours, historical and heritage tours, natural tours. Letting you decide for your more enjoyable options.</p>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                    <div class="service-icon">
                        <i class="fa fa-road"></i>
                    </div>
                    <div class="service-info">
                        <h3>Round Trips</h3>
                        <p>A bunch of local trips, joined with tourist and recreational activities, such as guided visits, city tours, hiking. Which might be adjusted to suit your personals likes and interest.</p>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                    <div class="service-icon">
                        <i class="fa fa-plane"></i>
                    </div>
                    <div class="service-info">
                        <h3>Transfers</h3>
                        <p>We  offer to our customers transfers from /to any city or airport. Just let us know the amount of people, luggage, place to pick you up, and time. We will be there punctually. </p>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
                    <div class="service-icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="service-info">
                        <h3>Lodgings</h3>
                        <p>We can arrange home stay accommodations in most of the cities. They are by far the best places in Cuba when it comes to providing an authentic interactive experience.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center collapse" style="margin-top: 25px">
            <p> We also assure you all the support needed when traveling. We offer transfers from /to any city or airport. We can arrange home stay accommodations in most of the cities. They are by far the best accommodations in Cuba when it comes to providing an authentic interactive experience. Our accommodations are selected for their cleanliness, comfort, convenient location, safety, local atmosphere, and customer service.
                Lastly, and above all, here are we, ready to give you a hand and organize any interesting and exciting activity that could fill your time in Cuba with pleasure.<a href="#portfolio"> Book it now!!!!</a></p>
        </div>
    </div>
    <div id="services-Es" class="container collapse">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center ">
                    <h2>Nuestros Servicios</h2>
                    <!-- <p>With more than 10 years in the business, Cubaoutings show it self as an unique choice to enjoy the greatest experiences  of traveling the amazing Cuba island.</p>-->
                    <p>Nuestro esfuerzo radica en hacer su visita a Cuba más que unas simples "vacaciones", haciendo cada paso de esta aventura auténtico y revelador. Nuestro equipo se ha ganado una buena reputación por los servicios que brindamos. Ahora nuestros clientes tienes la posibilidad de experimentar un viaje personalizado a través  de Cuba. Podemos ademas realizar agendas personalizadas que se ajusten a sus necesidades, tanto si son viajeros independientes, parejas o gurpos.
                        Contamos con cómodos automóviles de diferentes tamaños con aire acondicionado. Tambien brindamos la posibilidad de rentar automóviles clásicos, que le harán sentir como de vuelta en los 50s. Todos estos carros estan certificados por la Compañía Estatal se Seguros, para garantizar seguridad y eficiencia.</p>

                </div>
            </div>
        </div>
        <div class="text-center our-services"  >
            <div class="row">
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="service-icon">
                        <i class="fa fa-group"></i>
                    </div>
                    <div class="service-info">
                        <h3>Excursiones</h3>
                        <p>Ofrecemos varios paquetes de excursiones: privados, exclusivos, paseos. Que cubren la mayoría de los sitios de relevancia histórico-cultural y natural, de la zona Occidental del pais.</p>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                    <div class="service-icon">
                        <i class="fa fa-road"></i>
                    </div>
                    <div class="service-info">
                        <h3>Viajes Cortos</h3>
                        <p>Serie de viajes locales, acompañados de actividades turístico-recreativas, como visitas guiadas, paseos por la cuidad, excursiones naturales que pueden ser ajustadas a sus gustos y preferencias particulares.</p>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                    <div class="service-icon">
                        <i class="fa fa-plane"></i>
                    </div>
                    <div class="service-info">
                        <h3>Traslado</h3>
                        <p>Brindamos a nuestros clientes, servicios de recogida desde y hacia cualquier aereopuerto y/o ciudad de Cuba.</p>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
                    <div class="service-icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="service-info">
                        <h3>Alojamiento</h3>
                        <p>Podemos resolver hospedaje en la gran mayoría de las cuidades. Nuestro alojamientos son por mucho los mejores en Cuba cuando se trata de brindar una experiencia interactiva auténtica.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center collapse" >
            <p> Nosotros también aseguramos todos los recursos necesarios para los viajes. We offer transfers from /to any city or airport. We can arrange home stay accommodations in most of the cities. They are by far the best accommodations in Cuba when it comes to providing an authentic interactive experience. Our accommodations are selected for their cleanliness, comfort, convenient location, safety, local atmosphere, and customer service.
                Lastly, and above all, here are we, ready to give you a hand and organize any interesting and exciting activity that could fill your time in Cuba with pleasure.<a href="#portfolio"> Book it now!!!!</a></p>
        </div>
    </div>
</section><!--/#services-->

<section id="modal-Tour">
	<!-- Tours -->
				  <!---Havana Tour english.-->
	<div class="modal fade" id="havanaTour-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Havana Tour</h4>
        </div>
        <div class="modal-body-havanatour   ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> Havana, the largest city in the Caribbean, is the Cuba's political, cultural and economic center. This tour includes traveling all around the city, covering the most outstanding sites of Havana like: the Revolution Square, the Capitolio, the Central Park, or just drive through Vedado or Miramar neighbourhood, or just enjoy the excellent view when driving through the promenade that goes 7 km around the Northern part of the city.</p>
						<div id="havana-tour-program-En" class="text-left visible animated fadeInUp">
												<p>
													<strong>Program</strong>:</p>
												<p>
													<strong>08:00am-06:00pm</strong></p>
												<ul>
													<li>
														Pick up in the hotel</li>
													<li>
														Close to two hours driving to Havana along the coast</li>
													<li>
														Walking tour in the old Havana, declared world heritage site by UNESCO in 1982, (arm square, cathedral square, San Francisco de Asis square, Hemingway Hotel and bar)</li>
													<li>
														Free time(we could visit the craft market)</li>
													<li>
														Lunch(prices vary depending on people&rsquo;s choice)</li>
													<li>
														Tour through new Havana </li>
													<li>
														Stop in the Revolution Square</li>
													<li>
														Stop in the Capitol Building</li>
													<li>
														Returned to Varadero</li>
												</ul>
												<br>
						 </div>
				   </div>
		    <div id="bookithavanatour-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="date" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="People amount..." required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Havana Tour (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString42('bookithavanatour-En',false,'havana-tour-program-En',true)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString42('bookithavanatour-En',true,'havana-tour-program-En',false)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Havana Tour español.-->
  <div class="modal fade" id="havanaTour-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Havana Tour</h4>
        </div>       
        
         <div   class="modal-body-havanatour ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> La Habana, la mayor ciudad del Caribe, es la capital económica, política y cultural de Cuba. Esta excursion incluye visitas a la parte vieja de la cuidad, cubriendo los sitios mas relevantes de la ciudad, tales como:la Plaza de la Revoluci&oacute;n, el Capitolio, el Parque Central, o simplemente recorrer los barrios Vedado o Miramar, o sencillamente disfrutar de la magn&iacute;fica vista del paseo en carro sobre 7km alrededor del norte de la ciudad.</span></p>
		<div id="havana-tour-program-Es"  class=" text-left visible animated fadeInUp">
						 <p class="MsoNormal" style="text-align:justify">
							<strong><span lang="ES" style="font-size: 12pt; line-height: 115%; font-family: &quot;Arial&quot;,&quot;sans-serif&quot;;">Programa:</span></strong></p>
						<p class="MsoNormal" style="text-align:justify">
							<span lang="ES" style="font-size: 12pt; line-height: 115%; font-family: &quot;Arial&quot;,&quot;sans-serif&quot;;">08:00am-06:00pm</span></p>
						<p>
							<span lang="ES" style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">- Recogida al Hotel</span></p>
						<p>
							<span lang="ES" style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">-Cerca de dos horas de viaje hasta la Habana bordando el litoral norte.</span></p>
						<p>
							<span lang="ES" style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">-Paseo por la Habana vieja declarada sitio de patrimonio mundial por la UNESCO en 1982, (la Plaza de Arma, la Plaza de la catedral, la Plaza San Francisco de As&iacute;s, el Hotel y Bar Hemingway)</span></p>
						<p>
							<span lang="ES" style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">-Tiempo libre (se puede visitar el mercado de artesan&iacute;a)</span></p>
						<p>
							<span lang="ES" style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">-Almuerzo (los precios var&iacute;an seg&uacute;n el restaurante)</span></p>
						<p>
							<span lang="ES" style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">-Recorrido por la nueva Habana </span></p>
						<p>
							<span lang="ES" style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">-Parada en la Plaza de la Revoluci&oacute;n</span></p>
						<p>
							<span lang="ES" style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">-Parada en el Capitolio</span></p>
						<p>
							-<span lang="ES" style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Parada en el Varadero</span></p>
						<br>
		 </div>
				   </div>
		    <div id="bookithavanatour-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Cantidad de personas" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Havana Tour (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString42('bookithavanatour-Es',false,'havana-tour-program-Es',true)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString42('bookithavanatour-Es',true,'havana-tour-program-Es',false)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

    <!---Matanzas, Cardenas & Varadero english.-->
  <div class="modal fade" id="mcv-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Matanzas, Cardenas & Varadero</h4>
        </div>
        <div class="modal-body-mcv    ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
					 <p> Try to discover the real Cuba visiting the cities around Varadero, explore Cuba under a new vision.</p >
				   </div>
		    <div id="bookitmcv-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="date" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="People amount..." required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Matanzas, Cardenas & Varadero (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitmcv-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitmcv-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Matanzas, Cardenas & Varadero español.-->
  <div class="modal fade" id="mcv-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Matanzas, Cardenas & Varadero</h4>
        </div>       
        
         <div   class="modal-body-mcv  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Descubra la verdadera Cuba mediante una visita a las ciudades aledañas de Varadero.</p >
				   </div>
		    <div id="bookitmcv-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Cantidad de personas" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Matanzas, Cardenas & Varadero (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitmcv-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitmcv-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

     <!---Trinidad & Cienfuegos english.-->
  <div class="modal fade" id="trinidadC-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Trinidad & Cienfuegos</h4>
        </div>
        <div class="modal-body-trinidad    ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
					 <p> Travel around the cuban landscapes, to visit the two most interesting cities of Cuba central region.</p >
				   </div>
		    <div id="bookitttrinidadc-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="date" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="People amount..." required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Trinidad & Cienfuegos (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitttrinidadc-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitttrinidadc-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Trinidad & Cienfuegos español.-->
  <div class="modal fade" id="trinidadC-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Trinidad & Cienfuegos</h4>
        </div>       
        
         <div   class="modal-body-trinidad  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Viaje a través de la campiña cubana para visitar las dos más interesantes ciudades de la región central de Cuba.</p >
				   </div>
		    <div id="bookitttrinidadc-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Cantidad de personas" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Trinidad & Cienfuegos (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitttrinidadc-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitttrinidadc-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

    <!---Havana & Tropicana english.-->
  <div class="modal fade" id="tropicana-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Havana & Tropicana</h4>
        </div>
        <div class="modal-body-tropicana    ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
					 <p> The Tropicana Cabaret was opened on 1939 as the world wide fanciest night-club.</p >
				   </div>
		    <div id="bookittropicana-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="date" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="People amount..." required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Havana & Tropicana (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookittropicana-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookittropicana-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Havana & Tropicana español.-->
  <div class="modal fade" id="tropicana-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Havana & Tropicana</h4>
        </div>       
        
         <div   class="modal-body-tropicana  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> El Cabaret Tropicana se abrió en el 1939 como el club nocturno de mayor brillo a nivel mundial.</p >
				   </div>
		    <div id="bookittropicana-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Cantidad de personas" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Havana & Tropicana (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookittropicana-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookittropicana-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  				  <!---Guamá & la Bahía de Cochinos english.-->
	<div class="modal fade" id="guama-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Guamá & la Bahía de Cochinos</h4>
        </div>
        <div class="modal-body-guama   ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> The southern region of Matanzas provides excellent places to spent the day and enjoy a natural enviroment.</p >
				   </div>
		    <div id="bookitguama-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="date" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="People amount..." required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Havana Tour (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitguama-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitguama-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Guamá & la Bahía de Cochinos español.-->
  <div class="modal fade" id="guama-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Guamá & la Bahía de Cochinos</h4>
        </div>       
        
         <div   class="modal-body-guama ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> La parte sur de la provincia de Matanzas es un excelente lugar para pasar el día y disfrutar del entorno rural.</p >
				   </div>
		    <div id="bookitguama-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Cantidad de personas" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Guamá & la Bahía de Cochinos (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitguama-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitguama-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

    <!--Three Cities english.-->
  <div class="modal fade" id="threeCities-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Three Cities</h4>
        </div>
        <div class="modal-body-threecities    ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
					 <p> Live the fulliest tour covering the whole cuban central region.</p >
				   </div>
		    <div id="bookitthreecities-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="date" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="People amount..." required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Three Cities (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitthreecities-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitthreecities-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Three Cities español.-->
  <div class="modal fade" id="threeCities-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Tres Ciudades</h4>
        </div>       
        
         <div   class="modal-body-threecities  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Tenga Usted la más completa excursión que abarca la región central de Cuba.</p >
				   </div>
		    <div id="bookitthreecities-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Cantidad de personas" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Three Cities (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitthreecities-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitthreecities-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

     <!---Viñales Tour english.-->
  <div class="modal fade" id="vinnales-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Viñales Tour</h4>
        </div>
        <div class="modal-body-vinnales    ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
					 <p> Hiking, sightseeing tours and so much more, in an exclusive meeting with Cuba's most espectacular landscapes.</p >
				   </div>
		    <div id="bookittvinnales-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="date" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="People amount..." required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Viñales Tour(Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookittvinnales-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookittvinnales-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Viñales Tour español.-->
  <div class="modal fade" id="vinnales-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Excursión a Viñales</h4>
        </div>       
        
         <div   class="modal-body-vinnales  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Caminatas, paseos en coche y mucho más, en un exclusivo encuentro con los mas espectaculares paisajes de Cuba.</p >
				   </div>
		    <div id="bookittvinnales-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Cantidad de personas" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Viñales Tour (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookittvinnales-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookittvinnales-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

    <!---Havana Cannon Shot english.-->
  <div class="modal fade" id="cannonShot-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Havana Cannon Shot</h4>
        </div>
        <div class="modal-body-cannonshot    ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
					 <p> Exactly at 9:00 pm, part of the old Havana moves by the sound of a cannon shot from San Carlos de la Cabaña's fortress after a beautiful ceremony.</p >
				   </div>
		    <div id="bookitcannonshot-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="date" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="People amount..." required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Havana Cannon Shot (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcannonshot-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcannonshot-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Havana Cannon Shot español.-->
  <div class="modal fade" id="cannonShot-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Habana con Cañonazo</h4>
        </div>       
        
         <div   class="modal-body-cannonshot  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
					 <p> A las 9:00 pm, parte de la Habana vieja se mueve por el sonido del disparo de un cañón desde la fortaleza de San Carlos de la Cabaña.</p >
				   </div>
		    <div id="bookitcannonshot-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Cantidad de personas" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Havana Cannon Shot (Tour)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcannonshot-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcannonshot-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  
  
 
 </section>

		


<section id="portfolio">
<div id="tours-En" class="visible">
    <div class="container"  >
        <div class="row" >
            <div class=" text-center col-sm-10 col-sm-offset-1 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2>Tours</h2>
                <p>Enjoy the good things of the Greatest of the Antilles through the wide range of excursions provided by Cubaoutings. They are designed for knowing sites of high historical, cultural and natural value at the  different tourist regions of the island from the hand of specialized guides of our company.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="folio-image">
                        <img class="img-responsive"  src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/1_2.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Havana Tour</h3>
                                    <p> Havana, the largest city in the Caribbean, is the Cuba's political, cultural and economic center.</p>
                                </div>
                                <div class="folio-overview">
                                  <span class="folio-link"><a title="Book it!..."   data-single_url="portfolio-single.html" onclick="$('#havanaTour-En').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="More más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/1_2.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
								  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/back1.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Matanzas, Cardenas & Varadero</h3>
                                    <p>Try to discover the real Cuba visiting the cities around Varadero, explore Cuba under a new vision.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a title="Book it!..."   data-single_url="portfolio-single.html" onclick="$('#mcv-En').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="More más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/back1.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class="folio-image">
                        <img class="img-responsive"  src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/trinidad.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                    <div class="folio-info">
                                        <h3>Trinidad & Cienfuegos</h3>
                                        <p>Travel around the cuban landscapes, to visit the two most interesting cities of Cuba central region.</p>
                                    </div>
                                    <div class="folio-overview">
                                         <span class="folio-link"><a title="Book it!..."   data-single_url="portfolio-single.html" onclick="$('#trinidadC-En').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="More más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/trinidad.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/tropicana.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Havana & Tropicana</h3>
                                    <p>The Tropicana Cabaret was opened on 1939 as the world wide fanciest night-club.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a title="Book it!..."   data-single_url="portfolio-single.html" onclick="$('#tropicana-En').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="More más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/tropicana.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/guanma.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Guamá &amp; la Bahía de Cochinos</h3>
                                    <p>The southern region of Matanzas provides excellent places to spent the day and enjoy a natural enviroment.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a title="Book it!..."   data-single_url="portfolio-single.html" onclick="$('#guama-En').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="More más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/themes/oxygen/images/portfolio/guanma.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/13-cienfuegos.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Three Cities</h3>
                                    <p> Live the fulliest tour covering the whole cuban central region.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a title="Book it!..."   data-single_url="portfolio-single.html" onclick="$('#threeCities-En').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="More más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/13-cienfuegos.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/Vinales-ValleyPopular.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Viñales Tour</h3>
                                    <p>Hiking, sightseeing tours and so much more, in an exclusive meeting with Cuba's most espectacular landscapes.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a title="Book it!..."   data-single_url="portfolio-single.html" onclick="$('#vinnales-En').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="More más..."  href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/tours-in-vinales-valley[2].jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/cannonazo.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Havana Cannon Shot</h3>
                                    <p>Exactly at 9:00 pm, part of the old Havana moves by the sound of a cannon shot from San Carlos de la Cabaña's fortress after a beautiful ceremony.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a title="Book it!..."   data-single_url="portfolio-single.html" onclick="$('#cannonShot-En').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="More más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/cannonazo.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio-single-wrap">
        <div id="portfolio-single">
        </div>
    </div><!-- /#portfolio-single-wrap -->
	</div>
	<div id="tours-Es" class="collapse">
    <div class="container"  >
        <div class="row" >
            <div class=" text-center col-sm-10 col-sm-offset-1 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2>Excursiones</h2>
                <p>Disfrute las maravillas de la Mayor de las Antillas a trevés del amplio paquete de excursiones que provee Cubaoutings. Estos están diseñados para conocer sitios de alta relevancia histórica, cultural y natural en las diferentes regiones turisticas de la isla, de la mano de guías especializados de nuestra compañía.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="folio-image">
                        <img class="img-responsive"  src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/1_2.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Havana Tour</h3>
                                    <p> La Habana, la mayor ciudad del Caribe, es la capital económica, política y cultural de Cuba.</p>
                                </div>
                                <div class="folio-overview">
								
                                    <span class="folio-link"><a title="Reservar!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#havanaTour-Es').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="Ver más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/1_2.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/back1.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Matanzas, Cardenas & Varadero</h3>
                                    <p>Descubra la verdadera Cuba mediante una visita a las ciudades aledañas de Varadero.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a title="Reservar!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#mcv-Es').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="Ver más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/back1.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class="folio-image">
                        <img class="img-responsive"  src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/trinidad.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                    <div class="folio-info">
                                        <h3>Trinidad & Cienfuegos</h3>
                                        <p>Viaje a través de la campiña cubana para visitar las dos más interesantes ciudades de la región central de Cuba.</p>
                                    </div>
                                    <div class="folio-overview">
                                       <span class="folio-link"><a title="Reservar!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#trinidadC-Es').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="Ver más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/trinidad.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/tropicana.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Havana & Tropicana</h3>
                                    <p>El Cabaret Tropicana se abrió en el 1939 como el club nocturno de mayor brillo a nivel mundial.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a title="Reservar!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#tropicana-Es').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="Ver más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/tropicana.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/guanma.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Guamá y la Bahía de Cochinos</h3>
                                    <p>La parte sur de la provincia de Matanzas es un excelente lugar para pasar el día y disfrutar del entorno rural.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a title="Reservar!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#guama-Es').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="Ver más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/themes/oxygen/images/portfolio/guanma.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/13-cienfuegos.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Tres Ciudades</h3>
                                    <p>Tenga Usted la más completa excursión que abarca la región central de Cuba.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a title="Reservar!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#threeCities-Es').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="Ver más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/13-cienfuegos.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/Vinales-ValleyPopular.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Excursión a Viñales</h3>
                                    <p>Caminatas, paseos en coche y mucho más, en un exclusivo encuentro con los mas espectaculares paisajes de Cuba.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a title="Reservar!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#vinnales-Es').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="Ver más..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/Vinales-ValleyPopular.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/cannonazo.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Habana con Cañonazo</h3>
                                    <p>A las 9:00 pm, parte de la Habana vieja se mueve por el sonido del disparo de un cañón desde la fortaleza de San Carlos de la Cabaña.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a title="Reservar!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#cannonShot-Es').modal('toggle')"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a  title="Ver más..." ref="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/cannonazo.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio-single-wrap">
        <div id="portfolio-single">
        </div>
    </div><!-- /#portfolio-single-wrap -->
	</div>
</section><!--/#portfolio-->


<section name="modals-Lodgings">
				<!-- Modal -->
				
				
				
				
				<!-- Lodgings -->
				  <!---Casabonita english.-->
  <div class="modal fade" id="casaBonita-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Bonita</h4>
        </div>
        <div id="casabonita-En" class="modal-body  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> Placed in heart of Havana city, in "Los Pocitos", a quiet and magical place of this city. This property has two bedrooms, each one prepared with matrimonial beds, personal bathroom, conditionated air, and minibar feature included.</p >
				   </div>
		    <div id="bookitcasabonita-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="date" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="Days" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Bonita (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasabonita-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasabonita-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Casabonita español.-->
  <div class="modal fade" id="casaBonita-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Bonita</h4>
        </div>       
        
         <div id="casabonita-Es" class="modal-body ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Ubicada en el corazón de La Habana, en "Los Pocitos", un tranquilo y mágico lugar de la cuidad. Este inmueble cuenta con dos cuartos, cada uno preparado con cama matrimonial, baño personal, aire acomdicionado, y un minbar incluido.</p >
				   </div>
		    <div id="bookitcasabonita-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Dias" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Bonita (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasabonita-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasabonita-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  <!---Casa Las Villas english.-->
  <div class="modal fade" id="casaLasVillas-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Las Villas</h4>
        </div>
        <div  class="modal-body ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> Within the popular neighborhood "El Conda'o", a coloring and interesting place of Santa Clara city, this property has two bedrooms, each one prepared with matrimonial beds, personal bathroom, conditionated air, and minibar feature included.</p >
				   </div>
		    <div id="bookitcasalasvillas-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="subject" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="Days" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Las Villas (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasalasvillas-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasalasvillas-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Casa Las Villas español.-->
  <div class="modal fade" id="casaLasVillas-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Las Villas</h4>
        </div>       
        
         <div id="casabonita-Es" class="modal-body ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Ubicada en el corazón de La Habana, en "Los Pocitos", un tranquilo y mágico lugar de la cuidad. Este inmueble cuenta con dos cuartos, cada uno preparado con cama matrimonial, baño personal, aire acomdicionado, y un minbar incluido.</p >
				   </div>
		    <div id="bookitcasalasvillas-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Dias" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Las Villas (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasalasvillas-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasalasvillas-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

   <!---Casa Doraida english.-->
  <div class="modal fade" id="casaDoraida-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Doraida</h4>
        </div>
        <div id="bookitcasadoraida-En" class="modal-body visible ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> In the metropolitan beach zone of Guanabo, this property has two bedrooms, each one prepared with matrimonial beds, personal bathroom, conditionated air, and minibar feature included.</p >
				   </div>
		    <div id="bookitcasabonita-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="subject" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="Days" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Doraida (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasadoraida-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasadoraida-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Casa Doraida español.-->
  <div class="modal fade" id="casaDoraida-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Doraida</h4>
        </div>       
        
         <div id="casabonita-Es" class="modal-body ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> En la capitalina zona de playas de Guanabo, esta cotizada propiedad es una magnífica opción. Este inmueble cuenta con dos cuartos, cada uno preparado con cama matrimonial, baño personal, aire acomdicionado, y un minbar incluido.</p >
				   </div>
		    <div id="bookitcasadoraida-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Dias" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Doraida (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasadoraida-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasadoraida-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  
   <!---Casa Cienfuegos english.-->
  <div class="modal fade" id="casaCienfuegos-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Cienfuegos</h4>
        </div>
        <div  class="modal-body  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> Located in the middle of Cienfuegos city, this property has two bedrooms, each one prepared with matrimonial beds, personal bathroom, conditionated air, and minibar feature included.</p >
				   </div>
		    <div id="bookitcasacienfuegos-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="subject" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="Days" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Cienfuegos (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasacienfuegos-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasacienfuegos-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Casa Cienfuegos español.-->
  <div class="modal fade" id="casaCienfuegos-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Cienfuegos</h4>
        </div>       
        
         <div class="modal-body ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Localizada en el centro de la cuidad de Cienfuegos, esta cotizada propiedad es una magnífica opción. Este inmueble cuenta con dos cuartos, cada uno preparado con cama matrimonial, baño personal, aire acomdicionado, y un minbar incluido.</p >
				   </div>
		    <div id="bookitcasacienfuegos-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Dias" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Cienfuegos (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasacienfuegos-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasacienfuegos-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

   <!---Villa Paraiso english.-->
  <div class="modal fade" id="villaParaiso-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Villa Paraiso</h4>
        </div>
        <div  class="modal-body visible ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> Located in the middle of La Lisa in Havana city, this property has two bedrooms, each one prepared with matrimonial beds, personal bathroom, conditionated air, and minibar feature included.</p >
				   </div>
		    <div id="bookitvillaparaiso-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="subject" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="Days" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Villa Paraiso (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitvillaparaiso-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitvillaparaiso-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Villa Paraiso español.-->
  <div class="modal fade" id="villaParaiso-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Villa Paraiso</h4>
        </div>       
        
         <div class="modal-body ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Localizada en el centro de la Lisa en la cuidad de la Habana, esta cotizada propiedad es una magnífica opción. Este inmueble cuenta con dos cuartos, cada uno preparado con cama matrimonial, baño personal, aire acomdicionado, y un minbar incluido.</p >
				   </div>
		    <div id="bookitvillaparaiso-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Dias" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Villa Paraiso (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitvillaparaiso-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitvillaparaiso-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

    <!---Casa El Encanto english.-->
  <div class="modal fade" id="casaElEncanto-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa El Encanto</h4>
        </div>
        <div class="modal-body visible ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> Located in the middle of Matanzas city, this property has two bedrooms, each one prepared with matrimonial beds, personal bathroom, conditionated air, and minibar feature included.</p >
				   </div>
		    <div id="bookitcasaelencanto-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="subject" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="Days" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa El Encanto (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasaelencanto-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasaelencanto-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Casa El Encanto español.-->
  <div class="modal fade" id="casaElEncanto-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa El Encanto</h4>
        </div>       
        
         <div class="modal-body ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Ubicada en el centro de la cuidad de Matanzas, esta cotizada propiedad es una magnífica opción. Este inmueble cuenta con dos cuartos, cada uno preparado con cama matrimonial, baño personal, aire acomdicionado, y un minbar incluido.</p >
				   </div>
		    <div id="bookitcasaelencanto-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Dias" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa El Encanto (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasaelencanto-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasaelencanto-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  <!---Casa Azul english.-->
  <div class="modal fade" id="casaAzul-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Azul</h4>
        </div>
        <div  class="modal-body  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> Located in the historical village of Trinidad in Sancti Spíritus, this property has two bedrooms, each one prepared with matrimonial beds, personal bathroom, conditionated air, and minibar feature included.</p >
				   </div>
		    <div id="bookitcasaazul-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="subject" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="Days" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Azul (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasaazul-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasaazul-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Casa Azul español.-->
  <div class="modal fade" id="casaAzul-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Azul</h4>
        </div>       
        
         <div class="modal-body ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p> Localizada en la histórica villa de Trinidad en  Sancti Spíritus, esta cotizada propiedad es una magnífica opción. Este inmueble cuenta con dos cuartos, cada uno preparado con cama matrimonial, baño personal, aire acomdicionado, y un minbar incluido.</p >
				   </div>
		    <div id="bookitcasaazul-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Dias" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Azul (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasaazul-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasaazul-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

   <!---Casa Fresa english.-->
  <div class="modal fade" id="casaFresa-En" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Fresa</h4>
        </div>
        <div  class="modal-body  ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div class=" folio-info animated fadeInUp "  data-wow-duration="800ms" data-wow-delay="100ms" >										
								
										 <p> Placed in the cosmopolitan city of Cárdenas, this property has two bedrooms, each one prepared with matrimonial beds, personal bathroom, conditionated air, and minibar feature included.</p >
				   </div>
		    <div id="bookitcasafresa-En" class=" folio-info animated fadeInUp collapse "  data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-En"  name="contact-form-CasaBotina-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input name="subject" class="form-control hasDatepicker" placeholder="Date" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input  name="days" class="form-control" placeholder="Days" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"  placeholder="Anything else..." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Fresa (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasafresa-En',false)" >Cancel</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirm</button>
											</div>
										</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
        
         

        <div id="casabonita-footer-En" class="modal-footer visible">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasafresa-En',true)" >Book it!</button>
        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <!---Casa Fresa español.-->
  <div class="modal fade" id="casaFresa-Es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Casa Fresa</h4>
        </div>       
        
         <div class="modal-body ">
		<div class="modal-cover" >		 
		<div class="overlay-content">
				 <div   class=" folio-info fadeInUp"  >										
								
										 <p>Ubicada en la cosmopolita cuidad de Cárdenas. Este inmueble cuenta con dos cuartos, cada uno preparado con cama matrimonial, baño personal, aire acomdicionado, y un minbar incluido.</p >
				   </div>
		    <div id="bookitcasafresa-Es" class=" fadeInUp collapse " data-wow-duration="1000ms" data-wow-delay="300ms">
			<hr style="height: 1px; margin: 25px 10px"></hr>
					<form id="main-contact-form-CasaBonita-Es"  name="contact-form-CasaBonita-ES" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/sendemail.php">
                            <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                                    </div>
                                </div>
                            </div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Fecha" required="required">
											</div>
										</div>
										<div class="col-sm-6">
										   <div class="form-group">
												<input type="text" name="days" class="form-control" placeholder="Dias" required="required">
											</div>
										</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="col-sm-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" placeholder="Alguna otra cosa.." ></textarea>
												</div>
												<input  name="accommodation" class="collapse" placeholder="Accommodation" value="Casa Fresa (Lodgings)">
											</div>
									</div>
									<div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-3 col-sm-offset-1">
											<div class="form-group">
										   <a class="btn btn-default btn-submit-cancel " onclick="visibilityString('bookitcasafresa-Es',false)" >Cancelar</a>
										
										   </div>
										</div>
										<div class="col-sm-8 ">
										   <div class="form-group">							   
												<button type="submit" class="btn-submit" >Confirmar</button>
											</div>
											</div>
									</div>
                            
                            
                        </form>

			</div>
        </div>
			</div>
	  </div>
      
		<div  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="visibilityString('bookitcasafresa-Es',true)" >Reserve!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  </section>		

<section id="lodgings">
	<div id="lodgings-En"  class="visible"  >
    <div class="container "  >
        <div class="row" >
            <div class=" text-center col-sm-12  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2>Lodgings</h2>	
                <p>Cubaoutings invites you to enjoy the accommodation options we have prepared for our clients. The stay at a Cuban family house is also one of the great attractions of Cubaoutings products. In this way you can know from inside and multiply the opportunities of exchange views and make friends. We put at your disposal a wide range of different and attractive houses featuring fully equipped comfortable rooms where you can choose the boarding modality of your preference during your stay in our country.</p>
            </div>
        </div>
	
   
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="folio-image">					
                        <img class="img-responsive"  src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/CasaLinda.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Bonita</h3>
                                    <p> Located in the popular neighborhood "Los Pocitos", this one offers a safe enviroment to get to know the cuban people, equipped with all the comfort you deserve, to make your stay pleasant.</p>
                                </div>
                                <div class="folio-overview">	
									<!--<span class="folio-link"><a data-toggle="modal" href="#myModal" class="folio-read-more" href="#" data-single_url="portfolio-single.html"><i class="fa fa-link"></i></a>			-->					
                                   <span  class="folio-link visible"><a  title="Book it!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaBonita-En').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
								   
                                    <span class="folio-expand"><a   title="More..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/CasaLinda.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
								
                            </div>
							
                        </div>
						
                    </div>
					
                </div>
	

    <!--<div class="bs-example" style="padding-bottom: 24px;">
      <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>
    </div>-->
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verdeverde.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Las Villas</h3>
                                    <p> In Sanata Clara within the popular neighborhood "El Conda'o", is this house that also provides a safe enviroment to get to know the cuban people.</p>
                                </div>
                                <div class="folio-overview">
								 <!--<a data-toggle="modal" href="#myModal" class="folio-link"><i class="fa fa-link"></i></a>	-->
                                     <span class="folio-link"><a  title="Book it!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaLasVillas-En').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="More..."  href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verdeverde.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			 <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-cienfuegos.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Doraida</h3>
                                    <p>In the metropolitan beach zone of Guanabo, this rated property is a wonderfull option, fully equipped with all the comfort you deserve, to make your stay pleasant.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a  title="Book it!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaDoraida-En').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="More.." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-cienfuegos.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
			
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class="folio-image">
                        <img class="img-responsive"  src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verde2.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Cienfuegos</h3>
                                    <p>Located in the middle of Cienfuegos city, equipped with all the comfort you deserve, to make your stay pleasant.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a  title="Book it!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaCienfuegos-En').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a  title="More..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verde2.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verderoja.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Villa Paraiso</h3>
                                    <p>Located in the middle of La Lisa in Havana city, equipped with all the comfort you deserve, to make your stay pleasant.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a  title="Book it!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#villaParaiso-En').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a  title="More..." href="<?php echo Yii::app()->theme->baseUrl; ?>/themes/oxygen/images/portfolio/verderoja.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-cienfuegos1.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa El Encanto</h3>
                                    <p>Located in the middle of Matanzas city, equipped with all the comfort you deserve, to make your stay pleasant.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a  title="Book it!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaElEncanto-En').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="More..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-cienfuegos1.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-casaAzul.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Azul</h3>
                                    <p>Located in the historical village of Trinidad in Sancti Spíritus, fully equipped with all the comfort you deserve, to make your stay pleasant.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a  title="Book it!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaAzul-En').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="More..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-casaAzul.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/CasaRosada.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Fresa</h3>
                                    <p>Placed in the cosmopolitan city of Cárdenas, fully equipped with all the comfort you deserve, to make your stay pleasant.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a  title="Book it!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaFresa-En').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="More..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/CasaRosada.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio-single-wrap">
        <div id="portfolio-single">
        </div>
    </div><!-- /#lodgings-single-wrap -->
	</div>
	<div id="lodgings-Es"  class="collapse"  >
    <div   class="container "  >
        <div class="row" >
            <div class=" text-center  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2>Alojamiento</h2>
                <p>Cubaoutings los invita a disfrutar de las opciones de hospedaje  que hemos preparado para nuestros clientes. La estadía en una casa familiar cubana es ademas una de las mejores atracciones de Cubaoutings. De esta manera se puede conocer desde dentro y multiplicar las oportunidades de intercambio y hacer nuevas amistades. Ponemos a su disposición una amplia gama de diferentes y atractivas casas de hospedaje completamente equipadas con habitaciones confortables donde usted puede elegir la modalidad de alojamiento de su preferencia durante su estacia en Cuba.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="folio-image">
                        <img class="img-responsive"  src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/CasaLinda.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Bonita</h3>
                                    <p> Ubicada en el popular barrio "Los Pocitos", ofrece la oportunidad para interactuar con la gente en un ambiente seguro, equipada con todo el confort que usted mecere para hacer su estancia placentera.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a  title="Reserve!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaBonita-Es').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="Ver mas..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/CasaLinda.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verdeverde.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Las Villas</h3>
                                    <p>En Satnta Clara en el popular barrio de "El Conda'o", equipada con todo el confort que usted mecere para hacer su estancia placentera.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a  title="Reserve!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaLasVillas-Es').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="Ver mas..."  href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verdeverde.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-cienfuegos.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Doraida</h3>
                                    <p>En la capitalina zona de playas de Guanabo, esta cotizada propiedad es una magnífica opción, equipada con todo el confort que usted mecere para hacer su estancia placentera.</p>
                                </div>
                                <div class="folio-overview">
									<span class="folio-link"><a  title="Reserve!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaDoraida-Es').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="Ver mas..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-cienfuegos.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class="folio-image">
                        <img class="img-responsive"  src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verde2.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Cienfuegos</h3>
                                    <p>Localizada en el centro de la cuidad de Cienfuegos, equipada con todo el confort que usted mecere para hacer su estancia placentera.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a  title="Reserve!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaCienfuegos-Es').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="Ver mas..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verde2.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/verderoja.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Villa Paraiso</h3>
                                    <p>Localizada en el centro de la Lisa en la cuidad de La Habana, equipada con todo el confort que usted mecere para hacer su estancia placentera.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a  title="Reserve!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#villaParaiso-Es').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="Ver mas..." href="<?php echo Yii::app()->theme->baseUrl; ?>/themes/oxygen/images/portfolio/verderoja.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-cienfuegos1.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa El Encanto</h3>
                                    <p>Ubicada en el centro de la cuidad de Matanzas, equipada con todo el confort que usted mecere para hacer su estancia placentera.</p>
                                </div>
                                <div class="folio-overview">
                                     <span class="folio-link"><a  title="Reserve!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaElEncanto-Es').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="Ver mas..."  href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-cienfuegos1.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-casaAzul.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Azul</h3>
                                    <p>Localizada en la histórica villa de Trinidad en  Sancti Spíritus, completamente equipada con todo el confort que usted mecere para hacer su estancia placentera.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a  title="Reserve!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaAzul-Es').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="Ver mas..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/11-casaAzul.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/CasaRosada.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Casa Fresa</h3>
                                    <p>Ubicada en la cosmopolita cuidad de Cárdenas, completamente equipada con todo el comfort que usted merece para hacer su estancia placentera.</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a  title="Reserve!..."  class="folio-read-more" data-single_url="portfolio-single.html" onclick="$('#casaFresa-Es').modal('toggle')" ><i class="fa fa-link"></i></a ></span>
                                    <span class="folio-expand"><a title="Ver mas..." href="<?php echo Yii::app()->theme->baseUrl; ?>/images/portfolio/CasaRosada.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio-single-wrap">
        <div id="portfolio-single">
        </div>
    </div><!-- /#portfolio-single-wrap -->
	</div>
</section><!--/#lodgings-->

<section id="team" >
	<div style="height: 35px"></div>
    <div id="team-En" class="container visible">
        <div class="row">
            <div class="heading text-center col-sm-10 col-sm-offset-1 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                <h2>The Team</h2>
                <p>We are a team of excellent tourism professionals ready to satisfy your needs regarding personalized tours to interesting places with a quality service, safety, comfort, while promoting responsible tourism in the respect of environment, as well as cultural and religious differences.</p>
            </div>
        </div>
        <div class="team-members">
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="member-image">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/team/1.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>Gloria Machado</h3>
                            <h4>Foreing Languages Graduate</h4>
                            <p>CEO &amp; Founder</p>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <div class="member-image">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/team/2.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>Felix Varela</h3>
                            <h4>Tourism Graduate</h4>
                            <p>Activity planning &amp; Supply</p>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                        <div class="member-image">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/team/3.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>Julio C. Torres</h3>
                            <h4> Cuban History Graduate</h4>
                            <p>Customers Services</p>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                        <div class="member-image">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/team/4.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>Cubaoutings Support</h3>
                            <h4>Support Manager</h4>
                            <p>Equipo de Cubaoutings</p>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div id="team-Es" class="container collapse">
        <div class="row">
            <div class="heading text-center col-sm-10 col-sm-offset-1 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                <h2>El Equipo</h2>
                <p>Somos un equipo de excelentes profesionales del turismo preparados para satisfacer sus necesidades respecto a excursiones personalizadas a lugares interesantes a lo largo y ancho de Cuba con un servicio de calidad que promueve el turismo responsable en cuanto al cuidado del medio ambiente, y al respeto de las diferencias religiosas y culturales.</p>
            </div>
        </div>
        <div class="team-members">
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="member-image">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/team/1.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>Gloria Machado</h3>
                            <h4>Licenciada en Lenguas Extranjeras</h4>
                            <p>Ejecutiva &amp; Fundadora</p>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <div class="member-image">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/team/2.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>Felix Varela</h3>
                            <h4>Licenciado en Turismo</h4>
                            <p>Planificación &amp; Suministros</p>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                        <div class="member-image">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/team/3.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>Julio C. Torres</h3>
                            <h4>Licenciado en Historia de Cuba</h4>
                            <p>Servicios a Clientes</p>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                        <div class="member-image">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/team/4.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>Cubaoutings Support</h3>
                            <h4>Support Manager</h4>
                            <p>Equipo de Cubaoutings</p>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </section><!--/#team-->

<!--<section id="features" class="parallax" style=" text-align: center;  background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/features-bg.jpg);">
    <div class="container">
        <div class="row count">
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                <i class="fa fa-user"></i>
                <h3 class="timer">4000</h3>
                <p>Happy Clients</p>
            </div>
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <i class="fa fa-desktop"></i>
                <h3 class="timer">200</h3>
                <p>Modern Websites</p>
            </div>
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
                <i class="fa fa-trophy"></i>
                <h3 class="timer">10</h3>
                <p>WINNING AWARDS</p>
            </div>
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
                <i class="fa fa-comment-o"></i>
                <h3>24/7</h3>
                <p>Fast Support</p>
            </div>
        </div>
    </div>
</section>/#features-->

<!--<section id="pricing">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                <h2>Pricing Table</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
            </div>
        </div>

        <div class="pricing-table">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h3>Tours</h3>
                        <div class="price">
                            $9<span>/Month</span>
                        </div>
                        <ul>
                            <li>Free Setup</li>
                            <li>10GB Storage</li>
                            <li>100GB Bandwith</li>
                            <li>5 Products</li>
                        </ul>
                        <a href="#" class="btn btn-lg btn-primary">Sign up</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <h3>Round Trips</h3>
                        <div class="price">
                            $19<span>/Month</span>
                        </div>
                        <ul>
                            <li>Free Setup</li>
                            <li>10GB Storage</li>
                            <li>100GB Bandwith</li>
                            <li>5 Products</li>
                        </ul>
                        <a href="#" class="btn btn-lg btn-primary">Sign up</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                        <h3>Transfers</h3>
                        <div class="price">
                            $29<span>/Month</span>
                        </div>
                        <ul>
                            <li>Free Setup</li>
                            <li>10GB Storage</li>
                            <li>100GB Bandwith</li>
                            <li>5 Products</li>
                        </ul>
                        <a href="#" class="btn btn-lg btn-primary">Sign up</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                        <h3>Lodgings</h3>
                        <div class="price">
                            $49<span>/Month</span>
                        </div>
                        <ul>
                            <li>Free Setup</li>
                            <li>10GB Storage</li>
                            <li>100GB Bandwith</li>
                            <li>5 Products</li>
                        </ul>
                        <a href="#" class="btn btn-lg btn-primary">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>/#pricing-->

<section id="blog">
    <div class="container">
        <div class="row">
            <div id="comments-En" class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp visible" data-wow-duration="1200ms" data-wow-delay="300ms">
                <h2>Comments</h2>
                <p>Your are welcome to post any of your comment about our service. Feel free to tell us opinions and recommendations,we'll appreciate it.</p>
            </div>
			<div id="comments-Es" class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp collapse" data-wow-duration="1200ms" data-wow-delay="300ms">
                <h2>Comentarios</h2>
                <p>Usted es bienvenido a dejarnos sus comentarios acerca de nuestro servicio. Siéntase libre de comunicarnos sus opiniones y recomendaciones, lo apreciaremos
</p>
            </div>
        </div>
        <div class="blog-posts" style>
            <div class="row">
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="post-thumb">
                        <a href="#"><img class="img-responsive img-fixed" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/blog/Kannonazo.jpg" alt=""></a>
                        <div class="post-meta">
                            <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                            <span><i class="fa fa-heart"></i> 0 Likes</span>
                        </div>
                        <div class="post-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="entry-header">
                        <h3><?php echo CHtml::link(Yii::t('app', 'Havana and the cannon shot'), Yii::app()->createUrl('tours/view', array('id' => 15))); ?></h3>
                        <span class="date">June 26, 2014</span>
                        <span class="cetagory"> : <strong>Miami</strong></span>
                    </div>
                    <div class="entry-content">
                        <div class="message">
                            “Gloria, Just wanted to let you know what a wonderful time we had in our tour to Havana.
                            It was due to you, and your excellent planning, recommendations and knowledge. Thank you for
                            all you did for us. The Cañonazo at 9.00pm was absolutely wonderful. What a beautiful
                            tradition! The weather was great, and we learned a lot about Cuba. I think you have a corner
                            on the market for what you do. I know you worked real hard on this.
                            So give yourself a pat on the back. Thank you. ”
                        </div>
                        <div class="client">
                            <div class="quote green-text">
                                <i class="icon-comments"></i>
                            </div>
                            <div class="client-info">
                                <a href="" class="client-name">Mary & Larry</a>

                                <div class="client-company">
                                    <?php echo CHtml::link(Yii::t('app', 'Havana and the cannon shot'), Yii::app()->createUrl('tours/view', array('id' => 15))); ?>
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/mary.jpg', 'client', array("class" => "img-circle")); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="post-thumb">
					 <a href="#"><img class="img-responsive img-fixed" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/blog/tropicana_70-anos-05.jpg" alt=""></a>
                      <!--  <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#post-carousel" data-slide-to="1"></li>
                                <li data-target="#post-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/blog/Kannonazo.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/blog/3.jpg" alt=""></a>
                                </div>
                            </div>
                            <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>-->
                        <div class="post-meta">
                            <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                            <span><i class="fa fa-heart"></i> 0 Likes</span>
                        </div>
                        <div class="post-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="entry-header">
                        <h3><?php echo CHtml::link(Yii::t('app', 'Havana & Tropicana '), Yii::app()->createUrl('tours/view', array('id' => 14))); ?></h3>
                        <span class="date">June 26, 2014</span>
                        <span class="cetagory"> : <strong>Barcelona</strong></span>
                    </div>
                    <div class="entry-content">
                        <div class="message">
                            “Hi Felix! Well, we’re back home and getting our clocks back adjusted to this side of the world.
                            I wanted to take a minute and THANK YOU FOR EVERYTHING! FOR SHOWING US YOUR BEAUTIFUL COUNTRY.
                            Our Honeymoon was pretty spectacular and I know it would not have been what it was without your
                            help. The service
                            was first class all the way and everything we expected and more.
                            Our Sincere Thanks and we look forward to future business with you! ”
                        </div>
                        <div class="client">
                            <div class="quote blue-text">
                                <i class=" icon-comments"></i>
                            </div>
                            <div class="client-info">
                                <a href="" class="client-name">Ricarda & Leonard</a>

                                <div class="client-company">
                                    <?php echo CHtml::link(Yii::t('app', 'Havana & Tropicana '), Yii::app()->createUrl('tours/view', array('id' => 14))); ?>
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/ricarda.jpg', 'client', array("class" => "img-circle")); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="post-thumb">
                        <a href="#"><img class="img-responsive img-fixed" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/blog/cienfuegos_parque_jose_marti.jpg" alt=""></a>
                        <div class="post-meta">
                            <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                            <span><i class="fa fa-heart"></i> 0 Likes</span>
                        </div>
                        <div class="post-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="entry-header">
                        <h3><?php echo CHtml::link(Yii::t('app', 'Three cities tour'), Yii::app()->createUrl('tours/view', array('id' => 13))); ?></h3>
                        <span class="date">June 26, 2014</span>
                        <span class="cetagory"> : <strong>Miunich</strong></span>
                    </div>
                    <div class="entry-content">
                        <div class="message">
                            “ We enjoyed excellent email communication with Gloria while making plans for
                            our vacation, which resulted in a tour customized for our interests. We were
                            completely impressed by the level of organization and perfectly detailed plans
                            sent to us before departure, and this resulted in our vacation to Cuba being one
                            of the best we've ever had. We would definitely recommend Cubaoutings to anyone wishing to visit
                            Cuba. . ”
                        </div>
                        <div class="client">
                            <div class="quote yellow-text">
                                <i class="icon-comments"></i>
                            </div>
                            <div class="client-info">
                                <a href="" class="client-name">Phyllis Stewart</a>

                                <div class="client-company">
                                    <?php echo CHtml::link(Yii::t('app', 'Three cities tour'), Yii::app()->createUrl('tours/view', array('id' => 13))); ?>
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/phyllis.jpg', 'client', array("class" => "img-circle")); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
            </div>
        </div>
    </div>
</section><!--/#blog-->

<section id="twitter" class="parallax" style=" text-align: center;  background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/twitter-bg.jpg);">
    <div class="space-top-bottom">
        <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="twitter-icon text-center">
                        <i class="fa fa-twitter"></i>
                        <h4>Cubaoutings</h4>
                    </div>
                    <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
                        <div id="twitter-carousel-En"  class="carousel-inner">
                            <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p id="tcarousel-first-En" class="visible">Summer is comming and we are already prepared with new offers... <a href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+is+prepared+for+summer+%21%21"><span style="color: #f7d861">#Summer with Cubaoutings</span> </a></p>
								<p id="tcarousel-first-Es" class="collapse">Ya es verano y  ya estamos listos con nuevas ofertas... <a href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+esta+listo+para+el+verano+%21%21"><span style="color: #f7d861">#Summer with Cubaoutings</span> </a></p>
								
                            </div>
                            <div class="item">
                                <p id="tcarousel-second-En" class="visible">Cubaoutings spreads its tour area to the north keys of Cuba...<a  href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+spreads+its+tours+options+to+Cuban+north+keys+%21%21"><span style="color: #f7d861">#Cubaoutings spreads to the keys</span></a></p>
								 <p id="tcarousel-second-Es" class="collapse">Excursiones Cubaoutings se extienden hacia la cayería Norte... <a  href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+Vinales+tour+now+includes+lodgings+%21%21"><span style="color: #f7d861">#Viñales tour #Lodgings</span> </a></p>
                            </div>
                            <div class="item">
                                <p  id="tcarousel-third-En"class="visible">Viñales tours, now includes lodgings too... <a  href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+Vinales+tour+now+includes+lodgings+%21%21"><span style="color: #f7d861">#Viñales tour #Lodgings</span> </a></p>
                                <p  id="tcarousel-third-Es"class="collapse">La excursion de Viñales, ahora incluye alojamiento también... <a  href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+Excursion+de+Vinales+incluye+alojamiento+%21%21"><span style="color: #f7d861">#Viñales tour #Lodgings</span> </a></p>
							</div>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#twitter-->

			

<section id="contact">


    <div id="google-map" class="wow fadeIn" data-latitude="23.135833299" data-longitude="-81.2840556" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
        <div id="contac-us-En" class="container visible">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>Contact Us</h2>
                    <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>
                </div>
            </div>
            <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-sm-6">
                        <form id="main-contact-form-En" " name="contact-form-En" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/contactsendemail.php">
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-submit" >Send Now</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6"  >
                        <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <p>Cubaoutings is at your service 24/7, you can reach us also using the information below. Feel free to contact us you are always welcome.</p>
                            <ul class="address">
                                <li><i class="fa fa-map-marker"></i> <span> Address:</span> Matanzas South Avenue Port </li>
                                <li><i class="fa fa-phone"></i> <span> Phone:</span> +53 52812117</li>
                                <li><i class="fa fa-phone"></i> <span> Phone:</span> +53 52480858</li>
                                <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:info@cubaoutings.com"> info@cubaoutings.com</a></li>
                                <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:cubaoutings@gmail.com"> cubaoutings@gmail.com</a></li>
                                <li><i class="fa fa-facebook"></i>acebook Contact:<span> Email:</span><a href="mailto:gloria.machadoleon@facebook.com"> gloria.machadoleon@facebook.com</a></li>

                                <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.cubaoutings.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div id="contac-us-Es" class="container collapse">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>Contáctenos</h2>
                    <p>Si usted tiene alguna duda o desea preguntarnos algo, llene por favor el siguiente formulario. Gracias.</p>
                </div>
            </div>
            <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-sm-6">
                        <form id="main-contact-form-Es" " name="contact-form-Es" method="post" action="<?php echo Yii::app()->theme->baseUrl; ?>/contactsendemail.php">
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Dirección de Correo" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Asunto" required="required">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Escriba su Mensaje" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-submit">Enviar Ahora</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6"  >
                        <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <p>Cubaoutings está a su servicio 24/7, usted nos puede contactar además usando las información a continuación. Siéntase libre de contactarnos, será siempre bienvenido.</p>
                            <ul class="address">
                                <li><i class="fa fa-map-marker"></i> <span> Dirección:</span> Matanzas South Avenue Port </li>
                                <li><i class="fa fa-phone"></i> <span> Teléfono:</span> +53 52812117</li>
                                <li><i class="fa fa-phone"></i> <span> Teléfono:</span> +53 52480858</li>
                                <li><i class="fa fa-envelope"></i> <span> Correo:</span><a href="mailto:info@cubaoutings.com"> info@cubaoutings.com</a></li>
                                <li><i class="fa fa-envelope"></i> <span> Correo:</span><a href="mailto:cubaoutings@gmail.com"> cubaoutings@gmail.com</a></li>
                                <li><i class="fa fa-facebook"></i>acebook:<span> Correo:</span><a href="mailto:gloria.machadoleon@facebook.com"> gloria.machadoleon@facebook.com</a></li>

                                <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.cubaoutings.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#contact-->
<footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
            <div class="footer-logo">
                <a href="index.html"><?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/logosi.png', 'cubaoutings', array("class" => "img-responsive")); ?></a>
            </div>
            <div class="social-icons">
                <ul>
                    <li><a class="envelope" href="mailto:cubaoutings@gmail.com"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="twitter" title="Tweet This!" href="http://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;text=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="facebook" title="Share this on Facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;t=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="linkedin" title="Share this on LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%2Fcubaouting%2Fsite%2Findex&amp;title=Cubaoutings+the+best+choice+to+explore+Cuba+%21%21"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2016 WildWest Company.</p>
                </div>
                <div class="col-sm-6">
                    <p class="pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/mousescroll.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.countTo.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/main.js"></script>
   
</body>
</html>