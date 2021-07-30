<?php


date_default_timezone_set('Asia/Singapore');

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}

// $aff = $_REQUEST["a_aid"];


//crisis_asia_att.txt


session_start();


$ip = get_client_ip();


$d1 = $d2 = '';

$d1 = date_create(date('d-m-Y H:i:s.000', time()));

$d2 = date_create('02-07-2020 12:15:00.000');

//
function mdiff($date1, $date2){
    $diff = strtotime($date2->format('d-m-Y H:i:s.u'))-strtotime($date1->format('d-m-Y H:i:s.u'));

//Creates variables for the microseconds of date1 and date2
$micro1 = $date1->format("u");
$micro2 = $date2->format("u");

//Absolute difference between these micro seconds:
$micro = abs($micro1 - $micro2);

//Creates the variable that will hold the seconds (?):
$difference = $diff.".".$micro;

return $difference;
}

$date_diffe = mdiff($d1, $d2);


$sfid='';
if ((isset($_REQUEST['sfid']) && $_REQUEST['sfid']!= '') || isset($_REQUEST['fb_comment_id'])) {

    $sfid = $_REQUEST['sfid'];

   if (strlen($sfid > 7)) {
  # code...
  $_SESSION['id'] = $sfid;
}




if ($_REQUEST['sfid'] === '1') {
  # code...

  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Genius Solutions 2020</title>
  <link rel="stylesheet" href="../css/foundation.css">
  <link rel="stylesheet" href="../css/app.css">
  <link rel="stylesheet" href="../css/iceberg.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

  <link rel="stylesheet" href="css/TimeCircles.css" />


  <meta property="og:url" content="https://solutions.geniusu.com/webinar/asia/live/" />
  <meta property="og:image" content="https://solutions.geniusu.com/webinar/asia/live/img/share.jpg" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="Genius Solutions 2020" />
  <meta property="og:description" content="Learn the 4 critical drivers to lead out of this crisis" />


  <meta property="fb:app_id" content="2616266035313513" />



  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '179193282683816');

    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=179193282683816&ev=PageView&noscript=1" />

  </noscript>
  <!-- End Facebook Pixel Code -->

  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-5220882-1', 'auto', {
      name: 'resultsFoundation'
    });
    ga('create', 'UA-5220882-34', 'auto', {
      name: 'geniusU'
    });
    ga('resultsFoundation.send', 'pageview');
    ga('geniusU.send', 'pageview');
  </script>



  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '179193282683816');

    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=179193282683816&ev=PageView&noscript=1" />

  </noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '552505748204237');

    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=552505748204237&ev=PageView&noscript=1" />

  </noscript>
  <!-- End Facebook Pixel Code -->



  <style type="text/css">
    .ty_page .sp_fb_wid {
      height: 400px !important;
      overflow-y: scroll;
    }
  </style>



</head>

<body id="top">


  <!-- 280870906261692 -->
  <!-- 2616266035313513 -->
  <!-- <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=280870906261692&autoLogAppEvents=1"></script> -->


  <div style="background: #15264C">
    <div class="row rowl" data-equalizer>
      <div class="medium-12 columns  text-center" data-equalizer-watch>

        <img src="../img/gu_logo_white.png" style="width: 100%;max-width: 120px;">
      </div>


    </div>
  </div>
  <!-- <div class="b2g">
    <div class="row  " data-equalizer>


      <div class="medium-9 rown medium-centered  large-6 large-uncentered rown columns  text-center"
        data-equalizer-watch>



        <h1 class=" white"><b>The Great Disruption </h1>

        <h5 class="white">How to join the 10 trillion dollar tidal wave of mentors and micro schools transforming modern
          education.</h5>

        <p class="white"><span class="grntxt"><b> Webinar on Thursday 11 June </b></span><br />
        </p>
        <center>

          <h4 class="grntxt"><b>Access Now</b></h4>
          <p class="white"><b>Please enter the email id you registered with to access the live page</b></p>

          <form name="form1" method="post" action="check.php">
            <input type="text" name="ema" id="ema" required />

            <input type="submit" name="submit" id="submit" value="Access Now" class="button orgbutton">
          </form>

        </center>
      </div>

    </div>
  </div>






  <div style="background: rgb(20, 57, 89);">

    <div class="row rowl">
      <div class="small-12 center columns">

        <a href="http://geniusu.com/privacy">
          <font color="white">Privacy Policy</font>
        </a>
      </div>
    </div>
  </div> -->

  <div class="b2g" style="padding:0px;">
    <div class="row" data-equalizer>


      <div class="medium-9 medium-centered  large-6 large-push-3 rown columns  text-center" data-equalizer-watch>



        <h2 class="white"><b>Genius Solutions 2020</b></h2>
        <h4 class="white"><b>Learn the 4 critical drivers to lead <br class="hide-for-small-only">out of this crisis</b>
        </h4>
        <h6 class="grntxt"><b>Webinar On Thursday 2nd July 2020</b></h6>
        <!-- <h6><b class="white">9am UK / 4pm SGT / 6pm AEST</b></h6> -->
        <center>

          <h4 class="grntxt"><b>Access Now</b></h4>
          <p class="white"><b>Please enter the email id you registered with to access the live page</b></p>

          <form name="form1" method="post" action="check.php">
            <input type="text" name="ema" id="ema" required />

            <input type="submit" name="submit" id="submit" value="Access Now" class="button orgbutton">
          </form>

        </center>


      </div>

    </div>
  </div>





  <div style="background:rgb(20, 57, 89); ">


    <div class="row rowl">
      <div class="small-12 center columns">

        <a href="http://geniusu.com/privacy">
          <font color="white">Privacy Policy</font>
        </a>
      </div>
    </div>
  </div>


  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/vendor/what-input.js"></script>
  <script src="../js/vendor/foundation.js"></script>
  <script src="../js/app.js"></script>
  <script src="../js/timer.js"></script>

</body>

</html>




<?php
}
elseif ($_REQUEST['sfid']!= '')
{

if ($date_diffe < 0) {

  if (isset($_REQUEST['sfid']) && $_REQUEST['sfid']!= '') {
    $my_file = 'genius-solutions.txt';
$handle = fopen($my_file, 'a');

if($handle)
{

$data = "\n". $sfid;
fwrite($handle, $data);
}
}

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Genius Solutions 2020</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">

  <link rel="stylesheet" href="css/TimeCircles.css" />
  <link rel="stylesheet" href="css/mb-comingsoon-iceberg.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" defer></script>


  <meta property="fb:app_id" content="2616266035313513" />

  <meta property="og:url" content="https://solutions.geniusu.com/webinar/asia/" />
  <meta property="og:image" content="https://solutions.geniusu.com/webinar/asia/img/share.jpg" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="Genius Solutions 2020" />
  <meta property="og:description"
    content="Get world class digital marketing, remote sales and cash growth system installed in your business with Genius Group’s top leadership." />
  <meta name="robots" content="index, follow">
  <meta name="keywords"
    content="Roger James Hamilton,Entrepreneur Event,entrepreneur,entrepreneur event, entrepreneur summit">



  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '179193282683816');

    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=179193282683816&ev=PageView&noscript=1" />

  </noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Hotjar Tracking Code for https://crisis.geniusu.com/ -->
  <script>
    (function (h, o, t, j, a, r) {
      h.hj = h.hj || function () {
        (h.hj.q = h.hj.q || []).push(arguments)
      };
      h._hjSettings = {
        hjid: 1782928,
        hjsv: 6
      };
      a = o.getElementsByTagName('head')[0];
      r = o.createElement('script');
      r.async = 1;
      r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
      a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>

  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-5220882-1', 'auto', {
      name: 'resultsFoundation'
    });
    ga('create', 'UA-5220882-34', 'auto', {
      name: 'geniusU'
    });
    ga('resultsFoundation.send', 'pageview');
    ga('geniusU.send', 'pageview');
  </script>



  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '179193282683816');

    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=179193282683816&ev=PageView&noscript=1" />

  </noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '552505748204237');

    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=552505748204237&ev=PageView&noscript=1" />

  </noscript>
  <!-- End Facebook Pixel Code -->


  <script type="text/javascript">
    function myFunction() {

      $("#ld").show();

      console.log('myFunction Called');

      // var newVal = '<fb:comments href="http://example.com/some/' + value + '" num_posts="20" width="500"></fb:comments><div id="fb-root"></div>';

      $('#fbc').removeAttr("data-href");
      $('#fbc').attr("data-href", "https://solutions.geniusu.com/webinar/asia/");

      FB.XFBML.parse();

      $('#fb1').removeAttr("data-order-by");
      $('#fb1').attr("data-order-by", "reverse_time");

      FB.XFBML.parse();

      setInterval(function () {
        $("#ld").hide();
      }, 7000);




      $('#ld').removeAttr("display");

      $('#ld').attr("display", "none");


    }
  </script>


  <script type="text/javascript">
    //   $('document').ready(function() {




    //  var url = window.location.search;

    // var up_url = "https://crisis.geniusu.com/webinar/asia/live3/";

    //  up_url = up_url +url;
    //  window.location.href = up_url;
    //   });
  </script>


  <style type="text/css">
    .ty_page .sp_fb_wid {
      height: 400px !important;
      overflow-y: scroll;
    }
  </style>



</head>

<body id="top">


  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2616266035313513&autoLogAppEvents=1">
  </script>





  <div style="background: #15264C">
    <div class="row rowl" data-equalizer>
      <div class="medium-12  text-center columns out-vc" data-equalizer-watch>
        <img src="img/gu_logo_white.png" style="width: 100%;max-width: 120px;">
      </div>
    </div>
  </div>

  <div class="row rown " style="max-width: 70em;">


    <div class="medium-12 columns">

      <center>
        <h2 class="bluetxt"><b>Genius Solutions 2020</b></h2>

        <p class="grntxt"><b>Learn the 4 critical drivers to lead out of this crisis</b>
        </p>
      </center>




      <div class="row ty_page">
        <div class="large-8 columns">
          <div class="center">

            <!-- <img src="img/placeholder.jpg" style="width: 100%;"> -->

            <div class="responsive-embed widescreen" id="m-video">

              <div class="wistia_responsive_padding"
                style="padding:56.25% 0 0 0;position:relative;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.8); ">
                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                  <!-- <iframe
                    src="https://fast.wistia.net/embed/iframe/xcdd4c0bk6?seo=false&videoFoam=true&autoplay=true&playbar=false&fullscreenButton=false&volume=1"
                    title="Wistia video player" allowtransparency="true" frameborder="0" scrolling="no"
                    class="wistia_embed" name="wistia_embed" width="100%" height="100%"></iframe> -->

                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZXJZTD8XNz0?modestbranding=1&title=&controls=0&fs=0&showsearch=0&rel=0&autoplay=1&showinfo=0" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                </div>
              </div>
              <script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>



            </div>


          </div>
        </div>
        <div class="large-4 columns">
          <span class="show-for-small-only"><br /></span>
          <a id="fbcref">
            <p style="margin-bottom: 0px;font-weight:bold;font-style: italic;color: #385898;">
              <!-- <span class="fb-comments-count" id="fbc" data-href="https://www.cowin2020.com/"></span> --> Click
              here to load new comments &nbsp; <img src="img/arrow.png" style="width:100%;max-width:25px;">&nbsp;
              &nbsp;<img src="img/loading.gif" id="ld" style="width:30px;"></p>
          </a>
          <div class="sp_fb_wid">

            <div class="fb-comments" id="fb1" data-href="https://solutions.geniusu.com/webinar/asia/" data-width="100"
              data-numposts="5" data-order-by="reverse_time"></div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="bg6">
    <div class="row rowl">
      <div class="small-12 center columns">
        <h2 class="white" style="margin-bottom: 0px;"><b><span class="grntxt">Step 1:</span> Meet the Speakers</b></h2>
      </div>
    </div>
  </div>

  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-10 large-centered columns">
      <center>
        <img src="img/arrow_blue.png" style="width: 100%;max-width: 80px;padding-bottom: 20px;">
      </center>
      <div class="row " style="padding-top: 30px;" data-equalizer>
        <!-- <div class="medium-6 columns out-vc" data-equalizer-watch>
          <div class="in-vc">
            <img src="img/slides.png" style="width: 100%;">
          </div>
        </div>
        <div class="medium-6 columns out-vc" data-equalizer-watch>
          <div class="in-vc">
            <span class="show-for-small-only"><br /></span>
            <div class="medium-text-left text-center">
              <h4 class="grntxt" style="margin-bottom: 0px"><b>Step 2.</b></h4>
              <h2 class=""><b>Download the Webinar&nbsp;Slides</b></h2>
              <div class="rowl">
                <a href="download.php?id=1" class="button orgbutton4">Download Slides</a>
              </div>
            </div>
          </div>
        </div> -->









        <div class="columns large-2 medium-3 small-12 text-center">
          <img src="img/roger.png" alt="" style="max-width:100px;">

          <div class="show-hide-for-small-only" style="height:15px;"></div>
        </div>
        <div class="columns large-10 medium-9 small-12 text-left">

          <p><b><span class="grntxt">Roger James Hamilton </span></b><br>
            Roger is the Founder and CEO of Genius Group, which has grown into the largest entrepreneur
            education group in the world with over 1.4 million members, 7,000 partners and 300 staff. He and the team
            have
            used Genius Solutions to rapidly pivot its products during the crisis and the company is on track for a
            $120
            million IPO on the NYSE American in the coming year. </p>
        </div>

      </div>

      <div class="row" style="padding-top: 30px;">
        <div class="columns large-2 medium-3 small-12 text-center">
          <img src="img/donna.png" alt="" style="max-width:100px;">
          <div class="show-hide-for-small-only" style="height:15px;"></div>
        </div>
        <div class="columns large-10 medium-9 small-12 text-left">

          <p><b><span class="grntxt">Donna Izobella</span></b><br>
            Donna is the Head Coach for Roger’s VIP
            Crystal Circle mentoring program. A business consultant and former accountant for over 20 years, she has
            been in
            the trenches of over a thousand businesses from a diverse range of industries, supporting founders and
            their
            teams with consultancy and training in both operational and strategic leadership.</p>
        </div>
      </div>





      <div class="row" style="padding-top: 30px;">
        <div class="columns large-2 medium-3 small-12 text-center">
          <img src="img/sandra.png" alt="" style="max-width:100px;">

          <div class="show-hide-for-small-only" style="height:15px;"></div>
        </div>
        <div class="columns large-10 medium-9 small-12 text-left">


          <p><b><span class="grntxt">Sandra Morrell</span></b><br>
            Sandra is the
            Chief Operations Officer at Entrepreneur Resorts, which she has grown from launch to a $30 million public
            listed
            company. She has had senior management positions in banking and finance, as well as built multiple
            businesses.
            She is a professional presenter, educator, and has mentored thousands of entrepreneurs globally. </p>
        </div>
      </div>

      <div class="row" style="padding-top: 30px;">
        <div class="columns large-2 medium-3 small-12 text-center">
          <img src="img/suraj.png" alt="" style="max-width:100px;">

          <div class="show-hide-for-small-only" style="height:15px;"></div>
        </div>
        <div class="columns large-10 medium-9 small-12 text-left">


          <p><b><span class="grntxt">Suraj Naik</span></b><br>
            Suraj is the Chief Marketing Officer at GeniusU. He has led the digital marketing and services division of
            GeniusU and grown it to over 1.4 million members in 200 countries. Through Genius Solutions he is now
            creating
            million dollar promotion plans for GeniusU’s partners and clients, using the very latest cutting edge
            strategies
            and marketing tools.</p>
        </div>
      </div>

      <div class="row" style="padding-top: 30px;">
        <div class="columns large-2 medium-3 small-12 text-center">
          <img src="img/michelle.png" alt="" style="max-width:100px;">

          <div class="show-hide-for-small-only" style="height:15px;"></div>
        </div>
        <div class="columns large-10 medium-9 small-12 text-left">


          <p><b><span class="grntxt">Michelle Clarke</span></b><br>

            Michelle is the Chief Partnerships Officer for GeniusU and manages the
            remote sales and partnership teams across the group. Former head of Leadership Development for Marks &
            Spencer,
            Michelle has been working with Roger and the Genius Group team for 13 years. In 2009 she set up Talent
            Dynamics,
            which was integrated with Genius Group in 2015.</p>
        </div>
      </div>

    </div>
  </div>


  <div class="bg6">
    <div class="row rowl">
      <div class="small-12 center columns">
        <h2 class="white" style="margin-bottom: 0px;"><b> Useful Resources </b></h2>
      </div>
    </div>
  </div>

  <div class="row rown" style="padding-top: 0px;" id="slides">
    <div class="small-12 large-10 large-centered columns">
      <center>
        <img src="img/arrow_blue.png" style="width: 100%;max-width: 80px;padding-bottom: 20px;">
      </center>
      <div class="row " style="padding-top: 30px;" data-equalizer>
        <div class="medium-6 columns out-vc" data-equalizer-watch>
          <div class="in-vc">
            <img src="img/slides.png" style="width: 100%;">
          </div>
        </div>
        <div class="medium-6 columns out-vc" data-equalizer-watch>
          <div class="in-vc">
            <span class="show-for-small-only"><br /></span>
            <div class="medium-text-left text-center">
              <h4 class="grntxt" style="margin-bottom: 0px"><b>Step 2.</b></h4>
              <h2 class=""><b>Download the Webinar&nbsp;Slides</b></h2>
              <div class="rowl">
                <a href="download.php?id=1" class="button orgbutton4">Download Slides</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div style="background: #002B43">
    <div class="row rowl" data-equalizer>
      <div class="medium-3 large-2  columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <div class="medium-text-left text-center">
            <img src="img/logo.svg" style="width: 100%;max-width: 190px;">
          </div>
        </div>
      </div>
      <div class="medium-5 large-7  columns  out-vc" data-equalizer-watch>
        <div class="in-vc">
          <div class="text-center " style="display:flex;justify-content: center;
    align-items: center;">
            <h3 class="grntxt"><b>Step 3&nbsp;&nbsp;&nbsp;</b></h3>
            <h5 class="white" style="margin-bottom: 0px;"><b>Book your Genius Solutions Assessment</b></h5>
          </div>
        </div>
      </div>
      <div class="hide-for-small-only">
        <div class="medium-4 large-3 columns  out-vc" data-equalizer-watch>
          <div class="in-vc">
            <div class="center">
              <a href="#reg_form" class="orgbutton3 button" style="margin: 0"> Apply Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="top_bg ">
    <div class="bhu">
      <div class="row rown " style="padding-bottom: 0px;">

        <div class="medium-8 large-6 rowm medium-text-left text-center  columns ">
          <h3 class=" white" style="font-weight:bold;">Are you ready to see your business take off?
          </h3>

          <p class="white"><b>Book your Genius Solutions Assessment call to see how you can transform your business
              results rapidly. In 30 minutes, discover your entrepreneur level and enterprise level.

            </b>
          </p>

          <p class="white"><b>Gain an insight into which Genius Solutions programs and services will work best for you.

            </b>
          </p>

          <p class="white"><b>Book one of the 20 places available by applying now. We look forward to speaking to you!

            </b>
          </p>


          <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
          <p class="white " style="padding-top: 10px;"> Spaces are limited. Apply today.</p>


        </div>
        <div class="medium-4 large-6 hide-for-small-only rowm  columns ">
          &nbsp;

        </div>

      </div>
      <center>
        <img src="img/arrow_1.png" style="width: 100%;max-width: 30px;padding-bottom: 20px;">
      </center>
    </div>
  </div>



  <div style="background-color:#002B43;">
    <div class="row rown">
      <div class="large-8 small-12 medium-10  medium-centered columns text-center rown">
        <h3 class="grntxt" style="font-weight:bold;"><i> You can’t stop the waves but you can learn to surf.”
          </i>
        </h3>
        <p class="white" style="margin:0px;"><b><i>Jon Kabat-Zinn</i></b></p>
      </div>
    </div>
  </div>

  <div style="">
    <div class="row rown">
      <div class="small-12 medium-10  medium-centered columns">
        <h2 class="grntxt center rowl"><b>Your Genius Solutions Assessment</b></h2>
        <div class="large-9 large-centered columns">

          <ol>

            <li style="color:#8FBB23">
              <span style="color:#8FBB23"><b>Should you apply?</b></span><br>
              <p style="color:#000">On the call you will meet one of our
                Genius Igniter team, who will learn what entrepreneur level and enterprise level you are currently at
                based on
                our Entrepreneur Dynamics Impact Test. They will focus on the one biggest driver out of the four drivers
                that
                would create the biggest transformation in your business. If there is a fit and you see the value of
                having us
                help you with our expertise, you can agree on the next step based on the call.</p>
            </li>

            <li style="color:#8FBB23">
              <span style="color:#8FBB23"><b>What will you get?</b></span><br>
              <p style="color:#000">If you have a business that was generating either $50,000+, $500,000+ or $2.5
                million+ in
                revenues before the crisis, and you’re looking for the smartest ways to apply genius solutions to your
                company, then you should apply for a call with our team. As soon as you apply, you will be given the
                option of
                call times to choose from, based on availability.</p>
            </li>

            <li style="color:#8FBB23">
              <span style="color:#8FBB23"><b>What will it cost?</b></span><br>
              <p style="color:#000">There is no cost to the call. This is the first step on the genius solutions pathway
                and
                based on which
                path
                you take, the
                cost at that point will come with a return on investment linked to your objectives. We are consistently
                achieving 10x return on investment with our Genius Solutions clients and want to have an opportunity to
                achieve the same for you.</p>
            </li>
          </ol>

          <p class="text-center"><b>To book one of the 20 call spots available this week, apply now.</b></p>
          <div class="center rowl">
            <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="bg1">
    <div class="row rown">
      <div class="small-12 medium-10  medium-centered columns">
        <h2 class="grntxt center rowl"><b>Accelerate your company out of the crisis with our expertise.</b></h2>
        <div class="large-9 large-centered columns">


          <p class="white ">
            You asked, and we have delivered. Our top clients have been asking for direct support from our top
            leadership
            to install the same digital marketing, remote sales, cash growth system and agile leadership structure that
            has built Genius Group into a $100 million business.
          </p>
          <p class="white ">
            If you are generating $500K - $5M per year in revenues
            then, like our top clients, your biggest challenge is likely to be that you know you need a major upgrade in
            your digital strategies but you don’t have the team to deliver them at the expertise and speed that you
            need.
          </p>
          <p class="white "> Genius Solutions now delivers to you a full suite of services where our top leaders and our
            team of experts
            will work directly with you to implement our systems directly in your company and train your team to ensure
            you get a 10x return on investment.
          </p>

          <!-- <p class="white "> We are limiting our first intake to 5 companies, and we invite you to
            apply. You will be working directly with our top leadership, who will deliver a Genius Solution based on
            your
            greatest need. Each Genius Solution is delivered over a 6 month period directly into your company with
            specific, measurable outcomes in marketing, sales, cash growth and a full agile leadership system.
          </p> -->

          <!-- <div class="center rowl">
            <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
          </div> -->

        </div>
      </div>
    </div>
  </div>

  <div style="">
    <div class="row rown">
      <div class="small-12 medium-10  medium-centered columns  text-center">
        <h2 class="grntxt center rowl"><b>Your Genius Solutions Pathway</b></h2>
        <div class="row">
          <div class="columns large-9 medium-10 small-12 small-centered">
            <p><b>Your Assessment Call is the first step in the Genius Solutions pathway</b></p>
            <p>The Genius Solutions pathway gives a personalized path to ensure each client is at the right level to
              make the most of the Genius Solutions services.</p>
            <img src="img/pathway.png" alt="" style="padding-bottom:16px;">
            <p><b>For more details on all Genius Solutions services,<br>
                <a href="#slides" style="color:#8FBB23"><i>download the Webinar Slides above</i></a></b></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="bg_b">
    <div class="row rown">
      <div class="small-12 large-10 large-centered columns">
        <h2 class="center grntxt"><b>Five reasons to join <br class="hide-for-small-only">Genius Solutions today</b>
        </h2>


        <div class="row rowl">
          <div class="small-3 center columns">
            <img src="img/1.png" style="width:100%;max-width:85px;float: right;">
          </div>
          <div class="small-9 large-7 columns">
            <p class="white"> You will generate a 10 X return on your investment within 3-6 months, of between $75,000
              and $300,000
            </p>
          </div>
          <div class="show-for-large large-2 columns">
            &nbsp;
          </div>
        </div>

        <div class="row ">
          <div class="small-3 center columns">
            <img src="img/2.png" style="width:100%;max-width:85px;float: right;">
          </div>
          <div class="small-9 large-7 columns">
            <p class="white"> You will be
              given a clear schedule and rhythm, from promotion plan through to full execution where you can monitor and
              see the
              actions being taken each week that are leading to your agreed weekly targets, of revenues and savings</p>
          </div>
          <div class="show-for-large large-2 columns">
            &nbsp;
          </div>
        </div>
        <div class="row rowl">
          <div class="small-3 center columns">
            <img src="img/3.png" style="width:100%;max-width:85px;float: right;">
          </div>
          <div class="small-9 large-7 columns">
            <p class="white"> You can focus on
              the other key areas of your business during this crisis knowing you have a full plan and expert in place
            </p>
          </div>
          <div class="show-for-large large-2 columns">
            &nbsp;
          </div>
        </div>
        <div class="row ">
          <div class="small-3 center columns">
            <img src="img/4.png" style="width:100%;max-width:85px;float: right;">
          </div>
          <div class="small-9 large-7 columns">
            <p class="white"> Everything we
              learn during this crisis that enables us to generate revenues and cost savings effectively will be
              instantly
              implemented into your business
            </p>
          </div>
          <div class="show-for-large large-2 columns">
            &nbsp;
          </div>
        </div>
        <div class="row rowl">
          <div class="small-3 center columns">
            <img src="img/5.png" style="width:100%;max-width:85px;float: right;">
          </div>
          <div class="small-9 large-7 columns">
            <p class="white"> You get your business and team to be led by a team of crisis leadership experts who are
              not just experts in their field but who are also practitioners, implementing these technologies and
              principles every
              day into our business</p>
          </div>
          <div class="show-for-large large-2 columns">
            &nbsp;
          </div>
        </div>

        <p class="white text-center">Apply now for a free Genius Solutions Assessment</p>

        <div class="center " style="padding-bottom: 20px;">
          <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
        </div>



      </div>
    </div>
  </div>

  <!-- <div style="background:#F1F1F1;">
    <div class="row">
      <div class="small-10 medium-12  small-centered center columns rown">

        <h2 class="bluetxt"><b>Meet your Genius Solutions Panelists</b></h2>

        <p class="large-10 large-centered">Our team of experts have been accountable for delivering millions of dollars
          of
          revenues and cost savings across our group and with several of our key partners too. Between them, they have
          over 70 years of experience, in achieving high performance results.</p>

        <div class="row small-up-2 medium-up-3 large-up-4 flex__row--center-flex-start facu">
          <div class="columns">
            <a data-open="fac4">
              <img src="img/suraj.png" style="">
              <p class="hd1"><b>SURAJ NAIK</b> <br> Digital Marketing Expert<br> Singapore</p>
            </a>
          </div>
          <div class="columns">
            <a data-open="fac2">
              <img src="img/sandra.png" style="">
              <p class="hd1"><b>SANDRA MORRELL</b> <br> Finance Expert<br> Australia</p>
            </a>
          </div>
          <div class="columns">
            <a data-open="fac3">
              <img src="img/michelle.png" style="">
              <p class="hd1"><b>MICHELLE CLARKE</b> <br> Sales &amp; Partnerships Expert<br> United Kingdom</p>
            </a>
          </div>

          <div class="columns">
            <a data-open="fac5">
              <img src="img/donna.png" style="">
              <p class="hd1"><b>DONNA IZOBELLA</b> <br> Entrepreneur Mindset Expert<br> Australia</p>
            </a>
          </div>


        </div>

        <div class="row rowl small-up-2 medium-up-3 large-up-4 bg6y center">
          <div class="columns rowl">
            <img src="img/digital.jpg" style="width: 100%;">
            <div class="">
              <h5 style="padding-top:15px;"><b>Digital <br class="show-for-small-only">Marketing</b></h5>
              <div class="center rowl" style="padding-top:0px;">
                <a href="#reg_form" class="orgbutton button" style="margin: 0">SELECT</a>
              </div>
            </div>
          </div>
          <div class="columns rowl">
            <img src="img/remote.jpg" style="width: 100%;">
            <div class="">
              <h5 style="padding-top:15px;"><b>Remote <br class="show-for-small-only">Sales</b></h5>
              <div class="center rowl" style="padding-top:0px;">
                <a href="#reg_form" class="orgbutton button" style="margin: 0">SELECT</a>
              </div>
            </div>
          </div>
          <div class="columns rowl">
            <img src="img/finance.jpg" style="width: 100%;">
            <div class="">
              <h5 style="padding-top:15px;"><b>Cash <br class="show-for-small-only">Growth</b></h5>
              <div class="center rowl" style="padding-top:0px;">
                <a href="#reg_form" class="orgbutton button" style="margin: 0">SELECT</a>
              </div>
            </div>
          </div>

          <div class="columns rowl">
            <img src="img/cc.jpg" style="width: 100%;">
            <div class="">
              <h5 style="padding-top:15px;"><b>Crystal <br class="show-for-small-only">Circle</b></h5>
              <div class="center rowl" style="padding-top:0px;">
                <a href="#reg_form" class="orgbutton button" style="margin: 0">SELECT</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div> -->

  <a name="reg_form" id="reg_form"> </a>
  <div class="subform">

    <div style="background: #ECECEC;">
      <div class="row rown">
        <div class="small-12 medium-10 large-9 medium-centered  columns">
          <h3 class="grntxt center rowl"><b>Apply here to book your Genius <br class="hide-for-small-only">
              Solutions Assessment Call
            </b></h3>

          <div class="large-10 large-centered rowm columns">
            <form method="post" id="form_data">
              <!--
              <input type="hidden" id="returl" name="returl"
                value="https://crisis.geniusu.com/webinar/asia/live/thankyou.php"
                > -->
              <div class="row ">
                <div class="small-6 columns">
                  <!-- <label>First Name*</label> -->
                  <input type="text" name="firstname" id="firstname" placeholder="First Name*" required
                    class="required">

                </div>
                <div class="small-6 columns">
                  <!-- <label>Last Name*</label> -->
                  <input type="text" name="lastname" id="lastname" placeholder="Last Name*" required class="required">

                </div>
              </div>

              <!--
                    <label><span class="show-for-large">&nbsp;&nbsp;&nbsp;&nbsp;</span>Email*</label> -->
              <input type="email" name="email" id="email" placeholder="Email*" required class="required">

              <div class="row rowk">
                <div class="small-4 medium-5 columns ">
                  <select id="payment_mobile_country_code" name="payment_mobile_country_code" required>
                    <!--  <option value=""> Code </option> -->
                    <option value="93">Afghanistan (+93)</option>
                    <option value="355">Albania (+355)</option>
                    <option value="213">Algeria (+213)</option>
                    <option value="376">Andorra (+376)</option>
                    <option value="244">Angola (+244)</option>
                    <option value="264">Anguilla (+264)</option>
                    <option value="672">Antarctica (the territory South of 60 deg S) (+672)</option>
                    <option value="1268">Antigua and Barbuda (+1268)</option>
                    <option value="54">Argentina (+54)</option>
                    <option value="374">Armenia (+374)</option>
                    <option value="297">Aruba (+297)</option>
                    <option value="61">Australia (+61)</option>
                    <option value="43">Austria (+43)</option>
                    <option value="994">Azerbaijan (+994)</option>
                    <option value="1242">Bahamas (+1242)</option>
                    <option value="973">Bahrain (+973)</option>
                    <option value="880">Bangladesh (+880)</option>
                    <option value="1246">Barbados (+1246)</option>
                    <option value="375">Belarus (+375)</option>
                    <option value="32">Belgium (+32)</option>
                    <option value="501">Belize (+501)</option>
                    <option value="229">Benin (was Dahomey), People's Republic of (+229)</option>
                    <option value="1441">Bermuda (+1441)</option>
                    <option value="975">Bhutan (+975)</option>
                    <option value="591">Bolivia (+591)</option>
                    <option value="387">Bosnia and Herzegovina (+387)</option>
                    <option value="267">Botswana (+267)</option>
                    <option value="55">Brazil (+55)</option>
                    <option value="1284">British Virgin Islands (+1284)</option>
                    <option value="673">Brunei Darussalam (+673)</option>
                    <option value="359">Bulgaria (+359)</option>
                    <option value="226">Burkina Faso (was Upper Volta) (+226)</option>
                    <option value="257">Burundi (+257)</option>
                    <option value="855">Cambodia (+855)</option>
                    <option value="237">Cameroon (+237)</option>
                    <option value="1">Canada (+1)</option>
                    <option value="238">Cape Verde (+238)</option>
                    <option value="345">Cayman Islands (+345)</option>
                    <option value="236">Central African Republic (+236)</option>
                    <option value="235">Chad (+235)</option>
                    <option value="56">Chile, Republic of (+56)</option>
                    <option value="86">China (+86)</option>
                    <option value="57">Colombia, Republic of (+57)</option>
                    <option value="269">Comoros (+269)</option>
                    <option value="242">Congo (+242)</option>
                    <option value="243">Congo, (was Zaire) (+243)</option>
                    <option value="682">Cook Islands (+682)</option>
                    <option value="506">Costa Rica (+506)</option>
                    <option value="225">Cote D'Ivoire (+225)</option>
                    <option value="385">Croatia (+385)</option>
                    <option value="53">Cuba (+53)</option>
                    <option value="357">Cyprus (+357)</option>
                    <option value="420">Czech Republic (+420)</option>
                    <option value="850">Democratic People's Republic of Korea (+850)</option>
                    <option value="45">Denmark (+45)</option>
                    <option value="253">Djibouti (+253)</option>
                    <option value="1767">Dominica (+1767)</option>
                    <option value="1849">Dominican Republic (+1849)</option>
                    <option value="593">Ecuador (+593)</option>
                    <option value="20">Egypt (+20)</option>
                    <option value="503">El Salvador (+503)</option>
                    <option value="240">Equatorial Guinea (+240)</option>
                    <option value="291">Eritrea (+291)</option>
                    <option value="372">Estonia (+372)</option>
                    <option value="251">Ethiopia (+251)</option>
                    <option value="298">Faeroe Islands (+298)</option>
                    <option value="679">Fiji (+679)</option>
                    <option value="358">Finland (+358)</option>
                    <option value="33">France (+33)</option>
                    <option value="241">Gabon (+241)</option>
                    <option value="220">Gambia (+220)</option>
                    <option value="995">Georgia (+995)</option>
                    <option value="49">Germany (+49)</option>
                    <option value="233">Ghana (+233)</option>
                    <option value="350">Gibraltar (+350)</option>
                    <option value="30">Greece (+30)</option>
                    <option value="299">Greenland (+299)</option>
                    <option value="1473">Grenada (+1473)</option>
                    <option value="502">Guatemala (+502)</option>
                    <option value="224">Guinea (+224)</option>
                    <option value="245">Guinea-Bissau (+245)</option>
                    <option value="592">Guyana (+592)</option>
                    <option value="509">Haiti (+509)</option>
                    <option value="504">Honduras (+504)</option>
                    <option value="852">Hong Kong (+852)</option>
                    <option value="36">Hungary (+36)</option>
                    <option value="354">Iceland (+354)</option>
                    <option value="91">India (+91)</option>
                    <option value="62">Indonesia (+62)</option>
                    <option value="98">Iran (+98)</option>
                    <option value="964">Iraq (+964)</option>
                    <option value="353">Ireland (+353)</option>
                    <option value="972">Israel (+972)</option>
                    <option value="39">Italy (+39)</option>
                    <option value="1876">Jamaica (+1876)</option>
                    <option value="81">Japan (+81)</option>
                    <option value="962">Jordan (+962)</option>
                    <option value="7">Kazakhstan (+7)</option>
                    <option value="254">Kenya (+254)</option>
                    <option value="686">Kiribati (+686)</option>
                    <option value="383">Kosovo (+383)</option>
                    <option value="965">Kuwait (+965)</option>
                    <option value="996">Kyrgyz Republic (+996)</option>
                    <option value="856">Laos, People's Democratic Republic of (+856)</option>
                    <option value="371">Latvia (+371)</option>
                    <option value="961">Lebanon (+961)</option>
                    <option value="266">Lesotho (+266)</option>
                    <option value="231">Liberia (+231)</option>
                    <option value="218">Libya (+218)</option>
                    <option value="423">Liechtenstein (+423)</option>
                    <option value="370">Lithuania (+370)</option>
                    <option value="352">Luxembourg (+352)</option>
                    <option value="853">Macao (+853)</option>
                    <option value="389">Macedonia (+389)</option>
                    <option value="261">Madagascar (+261)</option>
                    <option value="265">Malawi (+265)</option>
                    <option value="60">Malaysia (+60)</option>
                    <option value="960">Maldives (+960)</option>
                    <option value="223">Mali (+223)</option>
                    <option value="356">Malta (+356)</option>
                    <option value="692">Marshall Islands (+692)</option>
                    <option value="596">Martinique (+596)</option>
                    <option value="222">Mauritania (+222)</option>
                    <option value="230">Mauritius (+230)</option>
                    <option value="269">Mayotte (+269)</option>
                    <option value="52">Mexico (+52)</option>
                    <option value="691">Micronesia (+691)</option>
                    <option value="373">Moldova, Republic of (+373)</option>
                    <option value="377">Monaco (+377)</option>
                    <option value="976">Mongolia (+976)</option>
                    <option value="382">Montenegro (+382)</option>
                    <option value="1664">Montserrat (+1664)</option>
                    <option value="212">Morocco (+212)</option>
                    <option value="258">Mozambique (+258)</option>
                    <option value="95">Myanmar (was Burma) (+95)</option>
                    <option value="264">Namibia (+264)</option>
                    <option value="674">Nauru (+674)</option>
                    <option value="977">Nepal (+977)</option>
                    <option value="31">Netherlands (+31)</option>
                    <option value="64">New Zealand (+64)</option>
                    <option value="505">Nicaragua (+505)</option>
                    <option value="227">Niger (+227)</option>
                    <option value="234">Nigeria (+234)</option>
                    <option value="683">Niue (+683)</option>
                    <option value="1670">Northern Mariana Islands (+1670)</option>
                    <option value="47">Norway (+47)</option>
                    <option value="968">Oman (+968)</option>
                    <option value="92">Pakistan (+92)</option>
                    <option value="680">Palau (+680)</option>
                    <option value="970">Palestinian Territory, Occupied (+970)</option>
                    <option value="507">Panama (+507)</option>
                    <option value="675">Papua New Guinea (+675)</option>
                    <option value="595">Paraguay (+595)</option>
                    <option value="51">Peru (+51)</option>
                    <option value="63">Philippines (+63)</option>
                    <option value="48">Poland (+48)</option>
                    <option value="351">Portugal (+351)</option>
                    <option value="1787">Puerto Rico (+1787)</option>
                    <option value="974">Qatar (+974)</option>
                    <option value="82">Republic of Korea (+82)</option>
                    <option value="40">Romania (+40)</option>
                    <option value="7">Russia (+7)</option>
                    <option value="250">Rwanda (+250)</option>
                    <option value="685">Samoa (+685)</option>
                    <option value="378">San Marino (+378)</option>
                    <option value="239">Sao Tome and Principe (+239)</option>
                    <option value="966">Saudi Arabia (+966)</option>
                    <option value="221">Senegal (+221)</option>
                    <option value="381">Serbia (+381)</option>
                    <option value="248">Seychelles (+248)</option>
                    <option value="232">Sierra Leone, Republic of (+232)</option>
                    <option value="65">Singapore (+65)</option>
                    <option value="421">Slovakia (+421)</option>
                    <option value="386">Slovenia (+386)</option>
                    <option value="677">Solomon Islands (+677)</option>
                    <option value="252">Somalia (+252)</option>
                    <option value="27">South Africa (+27)</option>
                    <option value="34">Spain (+34)</option>
                    <option value="94">Sri Lanka, Democratic Socialist Republic of (was Ceylon) (+94)</option>
                    <option value="1869">St. Kitts and Nevis (+1869)</option>
                    <option value="1758">St. Lucia (+1758)</option>
                    <option value="1784">St. Vincent and the Grenadines (+1784)</option>
                    <option value="249">Sudan (+249)</option>
                    <option value="597">Suriname, Republic of (+597)</option>
                    <option value="268">Swaziland, Kingdom of (+268)</option>
                    <option value="46">Sweden (+46)</option>
                    <option value="41">Switzerland (+41)</option>
                    <option value="963">Syrian (+963)</option>
                    <option value="886">Taiwan (+886)</option>
                    <option value="992">Tajikistan (+992)</option>
                    <option value="255">Tanzania (+255)</option>
                    <option value="66">Thailand (+66)</option>
                    <option value="670">Timor-Leste, Democratic Republic of (+670)</option>
                    <option value="228">Togo (+228)</option>
                    <option value="676">Tonga (+676)</option>
                    <option value="1868">Trinidad and Tobago (+1868)</option>
                    <option value="216">Tunisia (+216)</option>
                    <option value="90">Turkey (+90)</option>
                    <option value="993">Turkmenistan (+993)</option>
                    <option value="1649">Turks and Caicos Islands (+1649)</option>
                    <option value="688">Tuvalu (was part of Gilbert and Ellice Islands) (+688)</option>
                    <option value="1304">US Virgin Islands (+1304)</option>
                    <option value="256">Uganda (+256)</option>
                    <option value="380">Ukraine (+380)</option>
                    <option value="1">Undefined (Stateless/Refugee) (+-1)</option>
                    <option value="971">United Arab Emirates (+971)</option>
                    <option value="44">United Kingdom (+44)</option>
                    <option value="699">United States Minor Outlying Islands (+699)</option>
                    <option value="1">United States of America (+1)</option>
                    <option value="598">Uruguay (+598)</option>
                    <option value="998">Uzbekistan (+998)</option>
                    <option value="678">Vanuatu (was New Hebrides) (+678)</option>
                    <option value="58">Venezuela, Bolivarian Republic of (+58)</option>
                    <option value="84">Vietnam (+84)</option>
                    <option value="967">Yemen (+967)</option>
                    <option value="260">Zambia (+260)</option>
                    <option value="263">Zimbabwe (+263)</option>
                  </select>
                </div>
                <div class="small-8 medium-7 columns " style="padding-left:0px;">
                  <input id="phonec" name="phonec" type="text" placeholder="Mobile Number" required>
                  <!-- <input id="mobile_no" name="mobile_no" type="hidden"> -->
                </div>
              </div>


              <div class="row rowk">
                <div class="small-4 medium-5 columns ">
                  <a href="#company_revenue" id="company_revenue_link"></a>
                  <select id="company_revenue" name="company_revenue" required>
                    <option selected disabled hidden>Company Revenues</option>
                    <option value="$0 - $10,000">$0 - $10,000</option>
                    <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                    <option value="$25,000 - $50,000">$25,000 - $50,000</option>
                    <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                    <option value="$100,000 - $250,000">$100,000 - $250,000</option>
                    <option value="$250,000 - $500,000">$250,000 - $500,000</option>
                    <option value="$500,000 - $1,000,000">$500,000 - $1,000,000</option>
                    <option value="More than $1,000,000">More than $1,000,000</option>
                  </select>
                </div>
                <div class="small-8 medium-7 columns " style="padding-left:0px;">
                  <input id="company_website" name="company_website" type="text" placeholder="Company website" required>
                </div>
              </div>


              <!--  <label></label> -->
              <textarea name="whyjoin" id="whyjoin" placeholder="Why I would like to join (not mandatory)" rows="5"
                maxlength="2000"></textarea>
              <center>
                <input type="submit" name="submit" id="submit" value="Apply Now" class="orgbutton2 button" style="" />
              </center>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="typage">
    <div class="row rown">
      <div class="small-11 medium-12 small-centered  columns  ">

        <h5 style="font-weight: bold;" class="grntxt center rowl">Thank you for applying
        </h5>





        <div class="row">
          <div class="small-12 columns">
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget"
              data-url="https://calendly.com/geniusu-global/genius-solutions-navigation-call-web"
              style="min-width:320px;height:1000px;"></div>

            <!--  <div class="calendly-inline-widget" data-url="https://calendly.com/geniusu-global/crisis-leadership-academy-navigation-web" style="min-width:320px;height:1000px;"></div>
 -->
            <script type="text/javascript" src="https://calendly.com/assets/external/widget.js"></script>
            <!-- Calendly inline widget end -->
          </div>
        </div>


      </div>
    </div>

  </div>



  <!-- <div class="row rown">
    <div class="small-12 medium-7  medium-centered columns">
      <h2 class="grntxt center rowm"><b>FAQ</b></h2>

      <div class="accordion" data-accordion data-allow-all-closed="true">

        <div class="accordion-item " data-accordion-item>
          <a href="#" class="accordion-title">
            <p> + What are the dates of the Crisis Leadership Academy?</p>
          </a>
          <div class="accordion-content" data-tab-content>
            <p> The program launches on Monday 18th May, 2020 with a live session from Roger James Hamilton 9am UK time
              or 9am Pacific time, depending on what time zone you are in and concludes on Friday 12th June, 2020.</p>
          </div>
        </div>
        <div class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">
            <p> + How is the program delivered?</p>
          </a>
          <div class="accordion-content" data-tab-content>
            <p>The course is delivered over four weeks with three live mentor sessions, two implementation days and a
              Q&A forum each week.
            </p>
          </div>
        </div>

        <div class="accordion-item " data-accordion-item>
          <a href="#" class="accordion-title">
            <p> + How much time does it take to attend the Academy?</p>
          </a>
          <div class="accordion-content" data-tab-content>

            <p>The time investment between the mentoring and coursework is between 1 to 2 hours each day.</p>
          </div>
        </div>

        <div class="accordion-item " data-accordion-item>
          <a href="#" class="accordion-title">
            <p> + What is the cost of the Crisis Leadership Academy?</p>
          </a>
          <div class="accordion-content" data-tab-content>
            <p>The microschool cost is $1,495 and provides full guidance from our expert faculty. There is also a
              microcourse option at $295 which gives access to the content.</p>
          </div>
        </div>

        <div class="accordion-item " data-accordion-item>
          <a href="#" class="accordion-title">
            <p> + Who is the Crisis Leadership Academy for?</p>
          </a>
          <div class="accordion-content" data-tab-content>
            <p>The programme is split into three streams depending on the outcome you are looking to achieve. You can be
              earning between $10 and $100k per month by re pivoting your focus and model during the 4 weeks. The 3
              streams are freelancer, startup and scale up entrepreneurs.</p>
          </div>
        </div>



        <div class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">
            <p> + Will we be assigned a mentor for the duration of the program?</p>
          </a>
          <div class="accordion-content" data-tab-content>
            <p> Yes, your CLA mentor will conduct a 1:1 strategy call before CLA starts on 18 May and will be available
              for Q&A at allocated times during the four week Academy. Plus, experts and Genius Institute Faculty will
              be available at key times during the Academy for Q&A within our GeniusU Circle. You will also be amongst a
              powerful and robust network of entrepreneurs for ongoing business development, opportunities and support.
            </p>
          </div>
        </div>

        <div class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">
            <p> + Do I have to have an existing business? </p>
          </a>
          <div class="accordion-content" data-tab-content>
            <p> No, the three streams, Digital Freelance, Digital Startup and Digital Enterprise cater from all levels
              of business or even those looking to start a business for the first time. The information, structure,
              mentoring and other entrepreneurs will support you in moving your idea or enterprise forward no matter
              what stage it is. </p>
          </div>
        </div>

      </div>

    </div>
  </div> -->

  <div class="row--footer">
    <div class="row rown" style="max-width: 73em;">
      <div class="large-10 large-centered columns">
        <div class="row ">
          <div class="small-6 columns">
            <img src="img/logo.svg" style="width: 100%;max-width: 150px;">
          </div>
          <div class="small-6 columns text-right">
            <a href="https://www.facebook.com/geniusuofficial/"><img src="img/social-icon-facebook.svg"
                class="foimg"></a>
            <a href="https://twitter.com/geniususocial"><img src="img/social-icon-twitter.svg" class="foimg"></a>
            <a href="https://www.instagram.com/geniususocial/"><img src="img/social-icon-instagram.svg"
                class="foimg"></a>
            <a href="https://www.youtube.com/channel/UC3X23SkhyCQlv7H3dx16WEA/featured"><img
                src="img/social-icon-youtube.svg" class="foimg"></a>
          </div>
        </div>
        <hr>

        <div class="row ">
          <div class="small-6 medium-4 large-3 columns">
            <p class="white"><b>Company</b></p>
            <a href="https://entrepreneursinstitute.com/" target="blank">
              <p class="pll">Entrepreneurs
                Institute</p>
            </a>
            <a href="http://geniusu.com/" target="blank">
              <p class="pll">GeniusU</p>
            </a>
            <a href="http://entrepreneurresorts.com/" target="blank">
              <p class="pll">Entrepreneur
                Resorts</p>
            </a>
            <a href="https://wealthdynamics.geniusu.com/" target="blank">
              <p class="pll">Wealth Dynamics</p>
            </a>
            <a href="https://www.un.org/sustainabledevelopment/sustainable-development-goals/" target="blank">
              <p class="pll">United Nations Goals</p>
            </a>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <p class="white"><b>Our Events</b></p>
            <a href="https://entrepreneurdynamics.geniusu.com/" target="blank">
              <p class="pll">Entrepreneur
                Dynamics</p>
            </a>
            <a href="https://globalentrepreneursummit.geniusu.com/" target="blank">
              <p class="pll">Global Entrepreneur
                Summit</p>
            </a>
            <a href="https://exponentialentrepreneur.geniusu.com/" target="blank">
              <p class="pll">Exponential
                Entrepreneur</p>
            </a>
            <a href="https://wdm.geniusu.com/" target="blank">
              <p class="pll">Wealth Dynamics
                Masters</p>
            </a>
            <a href="http://ilabforentrepreneurs.com/" target="blank">
              <p class="pll">iLab</p>
            </a>
          </div>
          <div class="small-4 medium-4 large-2 columns">
            <span class="show-for-small-only"><br /></span>
            <p class="white"><b>Partner</b></p>
            <a href="mailto:eventsupport@entrepreneursinstitute.com" target="blank">
              <p class="pll">Partner With
                Us</p>
            </a>
            <a disabled>
              <p class="pll">Meet
                Our Partners</p>
            </a>
            <a href="mailto: eventsupport@entrepreneursinstitute.com" target="blank">
              <p class="pll">Exhibit and Sponsor</p>
            </a>

          </div>

          <div class="small-8 medium-12  large-4 columns">
            <span class="hide-for-large"><br /></span>
            <p class="white"><b>Your Support</b></p>
            <p class="white pll"> We’re here to help! Whether you’re new to Genius Institute or already a student with
              us, your dedicated Support Team (a.k.a. WOW Team) is here to answer you. Monday to Friday 9:00AM to 5:00PM
              :<a href="mailto:support@geniusu.com" style="color: inherit;" target="blank">support@geniusu.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=" row--copyright">
    <div class=" row container">
      <div class="medium-12  columns columns--nopadding">
        <p class="copyright__text">Copyright &copy; GeniusU | <a class="copyright__text__link"
            href="https://www.geniusu.com/privacy" target="blank">Privacy Policy</a> | <a class="copyright__text__link"
            href="https://www.geniusu.com/terms" target="blank">Terms</a> </p>
      </div>

    </div>
  </div>


  <!-- <div class="reveal" id="fac1" data-reveal>
  <div class="row rowl">
    <div class="small-12 columns">
      <h4 class="center" style="margin-bottom: 0px;"><b>Roger James Hamilton</b></h4>
      <h5 class="center">Digital Business Mentor</h5>
    </div>
  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 -->

  <!-- <script src="js/vendor/jquery.js" defer></script>
  <script src="js/vendor/what-input.js" defer></script>
  <script src="js/vendor/foundation.js" defer></script>
  <script src="js/app.js" defer></script>
  <script src="js/jquery.mb-comingsoon.min.js" defer></script> -->


  <script type="text/javascript">
    <!--
    document.write(unescape("%3Cscript id='pap_x2s6df8d' src='" + (("https:" == document.location.protocol) ?
        "https://" : "http://") +
      "affiliate.wd-central.com/scripts/trackjs.js' type='text/javascript'%3E%3C/script%3E")); //
    -->
  </script>
  <script type="text/javascript">
    <!--
    PostAffTracker.setAccountId('default1');
    try {
      PostAffTracker.track();
    } catch (err) {}
    //
    -->
  </script>


  <script type="text/javascript">
    window.addEventListener('load', function () {
      $(document).ready(function () {

        console.log('hjello');
        //         var limit = 3;
        // $('input.single-checkbox').on('change', function(evt) {
        //   var bl = $('.single-checkbox').siblings(':checked').length;
        //   console.log('lebght:'+ bl);
        //    if($('.single-checkbox:checked').length > limit) {
        //       console.log('hjellwo');
        //        this.checked = false;

        //    }


        // });

        $(document).on('click touchend', '#fbcref', function (event) {
          event.preventDefault();
          myFunction();
          // Some code to be executed after #anyHTMLelement is Touched or clicked
        });

        $("#form_data").submit(function (e) {
          event.preventDefault();

          console.log('form submitted');
          console.log($('form').serialize());

          var forward = 0;
          var data = '';
          // console.log(document.getElementById('firstname').value );
          if (document.getElementById('firstname').value != '') {
            forward += 1;

          }
          if (document.getElementById('lastname').value != '') {
            forward += 1;
          }
          if (document.getElementById('email').value != '') {
            forward += 1;
          }
          if (document.getElementById('payment_mobile_country_code').value != '') {
            forward += 1;
          }
          if (document.getElementById('phonec').value != '') {
            forward += 1;
          }
          if (document.getElementById('company_revenue').value != '' && document.getElementById(
              'company_revenue').value != 'Company Revenues') {
            console.log(document.getElementById('company_revenue').value);
            document.getElementById('company_revenue').style.border = "0px solid red";
            forward += 1;
          } else {
            document.getElementById('company_revenue_link').click();
            document.getElementById('company_revenue').style.border = "1px solid red";
          }
          if (document.getElementById('company_website').value != '') {
            forward += 1;
          }
          // if(document.getElementById('whyjoin').value != ''){
          //   forward += 1;
          // }

          console.log(forward);
          if (forward === 7) {

            // $.ajax({
            //         type: 'post',
            //         url: 'https://www.cowin2020.com/health/asia/live/sf/sfsubscribe-edattended.php',
            //         data: "id="+data1,
            //         // async: true,
            //        success: function (data) {
            //     console.log(data);
            // },
            //       });

            // $('#form_sub').attr('disabled');
            $.ajax({
              type: 'post',

              url: 'https://solutions.geniusu.com/webinar/asia/live/form_data.php',
              data: $('form').serialize(),

            });



            $.ajax({
              type: 'post',
              url: 'https://solutions.geniusu.com/webinar/asia/live/sf/sfsubscribe-live-form.php',
              data: $('form').serialize(),
              // async: true,
              success: function (data) {
                console.log(data);
              },
            });

            //window.location.href = "https://crisis.geniusu.com/webinar/asia/live/thankyou.php";
            $('.subform').hide();
            $('.typage').show();


          }





          // Some code to be executed after #anyHTMLelement is Touched or clicked
        });


      });
    });
  </script>



  <style>
    .cook_pol {
      background: rgba(0, 56, 168, 0.7);
      display: none;
    }

    .cook_pol p {
      color: #fff;
      margin-bottom: 0px;
      font-size: 16px;

    }

    #close-cook {
      padding: 5px 10px;
      border: 1px solid #fff;
      font-weight: bold;
      border-radius: 20px;
      background: rgba(255, 255, 255, 1);
      color: #333333;
    }
  </style>
  <script>
    function getCookie(c_name) {
      var i, x, y, ARRcookies = document.cookie.split(";");
      for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
          console.log(unescape(y));
          return unescape(y);
        }
      }
    }

    function setCookie(c_name, value, exdays) {
      var exdate = new Date();
      exdate.setDate(exdate.getDate() + exdays);
      var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
      document.cookie = c_name + "=" + c_value;
      // console.log(document.cookie);
    }

    window.addEventListener('load', function () {



      $(document).ready(function () {

        if (!getCookie('visited')) {
          document.getElementById('gdpr_banner').style.display = "block";
        }

        $("#close-cook").click(function () {
          setCookie('visited', 1, 365);
          document.getElementById('gdpr_banner').style.display = "none";
        });




      });
    });
  </script>


  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>

  <script type="text/javascript" src="js/TimeCircles.js"></script>



  <?php
  $ipadd = '';
  function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        global $ipadd;
        $ipadd = $ip;
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }

    return $output;
}

?>

  <script>
    var ip = '<?php echo ip_info("Visitor", "Country"); ?>';


    window.onload = function () {
      console.log(ip);
      // document.getElementById('userip').value = '<?php echo $ipadd; ?>';
      a = document.getElementById("payment_mobile_country_code").childElementCount;
      for (i = 0; i < a; i++) {
        // console.log(document.getElementById("payment_mobile_country_code").options[i].innerText,document.getElementById("payment_mobile_country_code").options[i].innerText.includes(ip));
        if (document.getElementById("payment_mobile_country_code").options[i].innerText.includes(ip)) {
          document.getElementById("payment_mobile_country_code").options[i].selected = 'selected';
        }
      }
    };
  </script>
  <style>
    /* .avia-slideshow-inner {
            position: relative !important;
            padding-bottom: 56.25% !important;
            height: 0 !important;
        } */
    @media screen and (max-width: 63.9736em) {
      .medium-font-size {
        font-size: 16px !important;
      }

      .medium-font-size b {
        position: relative;
        top: -22px;
      }
    }

    .flex__row--center-flex-start {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      -ms-flex-line-pack: center;
      align-content: center;
    }

    .border__radius--10 {
      border-radius: 10px;
    }

    .absolute__position--width {
      width: 94%;
      top: 0%;
      height: 100%;
      padding: 15px 30px;
      margin: auto;
      border: 1px solid rgba(10, 10, 10, 0.2);
    }

    .soldout--position {
      transform: rotate(-45deg) translate(-32%, -254%);
    }

    @media screen and (min-width: 70em) {
      .whlico p {
        color: ;
        font-weight: light;
        padding: 0px 2vw;
      }
    }

    @media screen and (max-width: 63.936em) and (min-width: 39.936em) {
      .absolute__position--width {
        width: 92%;
        height: 100%;
      }

      .soldout--position {
        transform: rotate(-45deg) translate(-32%, -174%);
      }

    }

    @media screen and (max-width: 40em) {

      .absolute__position--width {
        width: 92.5%;
      }

      .soldout--position {
        transform: rotate(-45deg) translate(-32%, -174%);
      }
    }
  </style>

  <script>
    jQuery(document).ready(function ($) {
      $(".DateCountdown").TimeCircles({
        direction: "Counter-clockwise",
      });
      //$(".navbar").addClass("navbar-default--with-white-bg");

      var data1 = '<?php echo $_REQUEST['sfid']; ?>';

      console.log('asds:' + data1);
      $.ajax({
        type: 'post',
        url: 'https://solutions.geniusu.com/webinar/asia/live/sf/sfsubscribe-webinar-attended.php',
        data: "id=" + data1,
        // async: true,
        success: function (data) {
          console.log(data);
        },
      });

    });
  </script>

</body>

</html>


<?php
}
else
{
  ?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Genius Solutions 2020</title>
  <link rel="stylesheet" href="../css/foundation.css">
  <link rel="stylesheet" href="../css/app.css">
  <link rel="stylesheet" href="../css/iceberg.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

  <?php
  header("refresh:$date_diffe;url=https://solutions.geniusu.com/webinar/asia/live/index-check.php?sfid=".$sfid);
?>

  <meta property="fb:app_id" content="2616266035313513" />
  <link rel="stylesheet" href="../css/TimeCircles.css" />

  <meta property="og:url" content="https://solutions.geniusu.com/webinar/asia/" />
  <meta property="og:image" content="https://solutions.geniusu.com/webinar/asia/img/share.jpg" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="Genius Solutions 2020" />
  <meta property="og:description"
    content="Get world class digital marketing, remote sales and cash growth system installed in your business with Genius Group’s top leadership." />
  <meta name="robots" content="index, follow">
  <meta name="keywords"
    content="Roger James Hamilton,Entrepreneur Event,entrepreneur,entrepreneur event, entrepreneur summit">




  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-5220882-1', 'auto', {
      name: 'resultsFoundation'
    });
    ga('create', 'UA-5220882-34', 'auto', {
      name: 'geniusU'
    });
    ga('resultsFoundation.send', 'pageview');
    ga('geniusU.send', 'pageview');
  </script>


  <!-- Hotjar Tracking Code for https://crisis.geniusu.com/ -->
  <script>
    (function (h, o, t, j, a, r) {
      h.hj = h.hj || function () {
        (h.hj.q = h.hj.q || []).push(arguments)
      };
      h._hjSettings = {
        hjid: 1782928,
        hjsv: 6
      };
      a = o.getElementsByTagName('head')[0];
      r = o.createElement('script');
      r.async = 1;
      r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
      a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>

  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '179193282683816');

    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=179193282683816&ev=PageView&noscript=1" />

  </noscript>
  <!-- End Facebook Pixel Code -->


  <!--Start of Zopim Live Chat Script-->
  <script type="text/javascript">
    window.$zopim || (function (d, s) {
      var z = $zopim = function (c) {
          z._.push(c)
        },
        $ = z.s =
        d.createElement(s),
        e = d.getElementsByTagName(s)[0];
      z.set = function (o) {
        z.set.
        _.push(o)
      };
      z._ = [];
      z.set._ = [];
      $.async = !0;
      $.setAttribute("charset", "utf-8");
      $.src = "//v2.zopim.com/?2LJVYNO5gAZCRfRE00ntu3ffkCULclBP";
      z.t = +new Date;
      $.
      type = "text/javascript";
      e.parentNode.insertBefore($, e)
    })(document, "script");
  </script>
  <!--End of Zopim Live Chat Script-->


  <!-- Global site tag (gtag.js) - Google Ads: 981211400 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-981211400"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-981211400');
  </script>


  <style type="text/css">
    .ty_page .sp_fb_wid {
      height: 400px !important;
      overflow-y: scroll;
    }
  </style>



</head>

<body>

  <div class="b2g" style="padding:0px;">
    <div class="row" data-equalizer>


      <div class="medium-9 medium-centered  large-6 large-push-3 rown columns  text-center" data-equalizer-watch>



        <h2 class="white"><b>Genius Solutions 2020</b></h2>
        <h4 class="white"><b>Learn the 4 critical drivers to lead <br class="hide-for-small-only">out of this crisis</b>
        </h4>
        <h6 class="grntxt"><b>Join This FREE Webinar On Thursday 2nd July 2020</b></h6>
        <h6><b class="white">9am UK / 4pm SGT / 6pm AEST</b></h6>

        <center>
          <a href=<?php echo "https://calendar.google.com/calendar/r/eventedit?text=Genius+Solutions+2020&dates=20200702T080000Z/20200702T090000Z&details=For+details,+link+here:+https://solutions.geniusu.com/webinar/asia/live/?sfid=".$sfid."&location=https://solutions.geniusu.com/webinar/asia/live/?sfid=".$sfid; ?>
            target="_blank" class="orgbutton button"
            style="border-radius: 5px;max-width: 200px;padding: 5px 10px;font-size: 16px;width: 100%;"><img
              src="../img/cal.svg">
            Add to Calendar</a>
        </center>

        <div class="DateCountdown" data-date="2020/07/02 09:00:00 GMT+1"></div>

        <center>
          <p class="white" style="">
            <b>If the page doesn't load at 9am LONDON, use the below option to&nbsp;manually&nbsp;reload.</b> </p>
          <a href="index-check.php?sfid=<?php echo($sfid);?>" class="orgbutton button"
            style="    max-width: 251px;    padding: 10px 10px;font-size: 16px;"> Click here to load live page</a>

        </center>


      </div>

    </div>
  </div>





  <div style="background:rgb(20, 57, 89); ">


    <div class="row rowl">
      <div class="small-12 center columns">

        <a href="http://geniusu.com/privacy">
          <font color="white">Privacy Policy</font>
        </a>
      </div>
    </div>
  </div>


  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
  <script src="js/timer.js"></script>


  <script type="text/javascript" src="js/TimeCircles.js"></script>

  <script>
    jQuery(document).ready(function ($) {
      $(".DateCountdown").TimeCircles({
        direction: "Counter-clockwise",
      });
      //$(".navbar").addClass("navbar-default--with-white-bg");

    });
  </script>
</body>

</html>

<?php
}
}
}
else
{
  header('Location: https://solutions.geniusu.com/webinar/asia/');
}
?>
