<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<html lang="en">

<head>

<!-- Google Web Fonts
================================================== -->

<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,300italic,500,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Mrs+Saint+Delafield' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Basic Page Needs
================================================== -->

<title>Carnival Hills</title>

<meta name = "format-detection" content = "telephone=no" />
<meta charset="utf-8">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!--meta info-->
<meta name="author" content="rapposol">
<meta name="keywords" content="Carnival Hills">
<meta name="description" content="Carnival Hills">

<!-- Favicons
=================Game On================================= -->

<!-- CSS
==================Game On================================ -->
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
<link rel="stylesheet" href="css/fontello.css">
<link rel="stylesheet" href="../../../../../cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">
<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" media="all" href="css/jquery.fancybox.css">
<!-- RS5.0 Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

<!-- HTML5 Shiv
================================================== -->
<script src="plugins/jquery.modernizr.js"></script>

</head>

<body  class="wide_layout">

<!--styleswitcher-->


<div class="loader"></div>

<!-- <div class="loader"></div> -->

<!--[if (lt IE 9) | IE 9]>
<div class="ie_message_block">
<div class="container">
<div class="wrapper">
<div class="clearfix"><i class="fa fa-exclamation-triangle f_left"></i><b>Attention!</b> This page may   not display correctly. You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button button_type_3 button_grey_light f_right" target="_blank">Update Now!</a></div>
</div>
</div>
</div>
<![endif]-->

<!--cookie-->
<!-- <div class="cookie">
<div class="container">
<div class="clearfix">
<span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
<div class="f_right"><a href="#" class="button button_type_3 button_orange">Accept Cookies</a><a href="#" class="button button_type_3 button_grey_light">Read More</a></div>
</div>
</div>
</div>-->

<!-- - - - - - Game On- - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

<div id="wrapper" class="wrapper_container">

<!-- - - - - -Game On - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

<nav id="mobile-advanced" class="mobile-advanced"></nav>

<!-- - - - - - - - - - - - / Mobile Menu - - - - - - - - - - - - - -->

<!-- - - - - -Game On - - - - - - - - Header - - - - - - - - - - - - - - - - -->

<header id="header" class="header-main">

<!-- top-header -->

@include('header')

</header>

<!-- - - - - - -Game On - - - - - - end Header - - - - - - - - - - - - - - - -->







<!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->

<div class="mad_page_title paralax_image_bg1 v_align_center_blocks">

<div class="container">

<div class="row">
<div class="col-sm-12">

<h2>Event</h2>
<div class="mad_breadcrumbs">

<nav>
<a href="index.php">Home</a><a href="#">Latest Events</a>
</nav>

</div>

</div>
</div>

</div>

</div>

<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->


















<!--#################################
- REVOLUTION SLIDER -
#################################-->


<!-- - - - - - - - - - - - - -Game On Content - - - - - - - - - - - - - - - - -->

<div id="content">






<div id="blog">

<div class="mad_section paralax_image_bg1">

<div class="container">





<div class="container">
<div class="row mad_item_offset_2">
<div class="col-sm-4">
<!-- Image post -->
<div class="mad_blog_post">
<figure><img src="images/Aramis+Black+Event+39.jpg" alt="Carnival Hills"></figure>
<div class="mad_post_content clearfix">
<div class="mad_post_info">
<h5><a href="#">Event Tittle</a></h5>
<div class="mad_post_action">
<a href="#" class="date">18 / Jan / 2017</a>
<a href="#" class="days">10 pm</a>
<a href="#"><i style="color:#000; font-size:16px;" class="fa fa-usd" aria-hidden="true"> 250</i></a>

</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore e
t dolore magna .<a href="events-details.php"><button type="button" class="btn btn-outline-secondary">Read More</button></a></p>


</div>
</div>

</div>

</div>








<div class="col-sm-4">
<!-- Slider post -->
<div class="mad_blog_post">
<figure><img src="images/img_women2.jpg" alt="Carnival Hills"></figure>
<div class="mad_post_content clearfix">
<div class="mad_post_info">
<h5><a href="#">Event Tittle</a></h5>
<div class="mad_post_action">
<a href="#" class="date">18 / Jan / 2017</a>
<a href="#" class="days">10 pm</a>
<a href="#"><i style="color:#000; font-size:16px;" class="fa fa-usd" aria-hidden="true"> 250</i></a>

</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore e
t dolore magna .<a href="events-details.php"><button type="button" class="btn btn-outline-secondary">Read More</button></a></p>
</div>
</div>
</div>
</div>




@foreach($events as $event)

<div class="col-sm-4">
<!-- Slider post -->
<div class="mad_blog_post">
<figure><img src="images/679_605_scottsdale-event-showcase-06.jpg" alt="Carnival Hills"></figure>
<div class="mad_post_content clearfix">
<div class="mad_post_info">
<h5><a href="#">{{$event->title}}</a></h5>
<div class="mad_post_action">
<a href="#" class="date">{{date('d-M-Y',$event->event_dttm)}}</a>
<a href="#" class="days">{{date('h:i a',$event->event_dttm)}}</a>
<a href="#"><i style="color:#000; font-size:16px;" class="fa fa-usd" aria-hidden="true"> {{$event->price}}</i></a>

</div>
    <p>{{$event->descr}}. <a href="event-details\{{$event->id}}"><button class="btn btn-outline-secondary">Read More</button></a></p>
</div>
</div>
</div>
</div>

@endforeach

<div class="col-sm-4">
<!-- Slider post -->
<div class="mad_blog_post">
<figure><img src="images/679_605_scottsdale-event-showcase-06.jpg" alt="Carnival Hills"></figure>
<div class="mad_post_content clearfix">
<div class="mad_post_info">
<h5><a href="#">Event Tittle</a></h5>
<div class="mad_post_action">
<a href="#" class="date">18 / Jan / 2017</a>
<a href="#" class="days">10 pm</a>
<a href="#"><i style="color:#000; font-size:16px;" class="fa fa-usd" aria-hidden="true"> 250</i></a>

</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore e
t dolore magna .<a href="events-details.php"><button type="button" class="btn btn-outline-secondary">Read More</button></a></p>
</div>
</div>
</div>
</div>
    
    
<div class="col-sm-4">
<!-- Slider post -->
<div class="mad_blog_post">
<figure><img src="images/679_605_scottsdale-event-showcase-06.jpg" alt="Carnival Hills"></figure>
<div class="mad_post_content clearfix">
<div class="mad_post_info">
<h5><a href="#">Event Tittle</a></h5>
<div class="mad_post_action">
<a href="#" class="date">18 / Jan / 2017</a>
<a href="#" class="days">10 pm</a>
<a href="#"><i style="color:#000; font-size:16px;" class="fa fa-usd" aria-hidden="true"> 250</i></a>

</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore e
t dolore magna .<a href="events-details.php"><button type="button" class="btn btn-outline-secondary">Read More</button></a></p>
</div>
</div>
</div>
</div>













</div>
</div>









</div>

</div>

</div>
























@include('footertop')

















</div>

<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

@include('footer')

<!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

</div>

<!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

<!--scripts include-->
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="plugins/jquery.queryloader2.min.js"></script>
<script src="plugins/styleswither.js"></script>
<script src="plugins/owl.carousel.min.js"></script>
<script src="plugins/retina.js"></script>
<script src="plugins/twitter/jquery.tweet.js"></script>
<script src="plugins/jquery.fancybox.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
<script src="revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
<script src="plugins/instafeed.min.js"></script>
<script src="plugins/twitter/jquery.tweet.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

</body>

</html>
