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

$d2 = date_create('29-07-2021 15:55:00.000');

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
  <title>Scale Up Entrepreneurs Masterclass</title>
 
  <link rel="stylesheet" href="../css/foundation.css">
  <link rel="stylesheet" href="../css/app.css">

  <link rel="stylesheet" href="../css/TimeCircles.css" />
  <link rel="stylesheet" href="../css/mb-comingsoon-iceberg.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" defer></script>


   <meta property="fb:app_id" content="935674760289019" />

 <meta property="og:url" content="https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/" />
  <meta property="og:image" content="https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/img/share.jpg" />
  <meta property="og:type" content="Website" />
  <meta property="og:title"
    content="Scale Up Entrepreneurs Masterclass" />
  <meta property="og:description"
    content="  3 Steps to Build a Million Dollar Customer Pathway." />

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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-5220882-1', 'auto', { name: 'resultsFoundation' });
  ga('create', 'UA-5220882-34', 'auto', { name: 'geniusU' });
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=280870906261692&autoLogAppEvents=1"></script>


<!-- <div style="background: #15264C">
  <div class="row rowl" data-equalizer>
    <div class="medium-12 columns  text-center" data-equalizer-watch>

        <img  src="../img/gu_logo_white.png" style="width: 100%;max-width: 120px;">
              </div>


</div>
</div> -->
<div class="backnew">
   <div class="row  rowm "  data-equalizer>


      <div class="medium-9 rown   large-5 medium-push-3 large-push-7 rown columns  "  data-equalizer-watch>



          <h4 class=" white"><b>Scale Up Entrepreneurs Masterclass </b></h4>

          <p class="white">3 Steps to Build a </br> Million Dollar Customer Pathway</p>

<p class="white"><span class="grntxt"><b> Webinar on Thursday, July 29, 2021</b></span><br/>
 </p>
            <center>


 <h4 class="grntxt"><b>Access Now</b></h4>
<p  class="white"><b>Please enter the email id you registered with to access the live page</b></p>

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

        <a href="http://geniusu.com/privacy"><font color="white">Privacy Policy</font></a>
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
    $my_file = 'vipmc3_asia_att.txt';
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
 <title>Scale Up Entrepreneurs Masterclass</title>
 
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">

  <link rel="stylesheet" href="css/TimeCircles.css" />
  <link rel="stylesheet" href="css/mb-comingsoon-iceberg.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" defer></script>

<meta property="fb:app_id" content="935674760289019" />
  <link rel="stylesheet" href="css/TimeCircles.css" />
 <meta property="og:url" content="https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/" />
  <meta property="og:image" content="https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/img/share.jpg" />
  <meta property="og:type" content="Website" />
  <meta property="og:title"
    content="Scale Up Entrepreneurs Masterclass" />
  <meta property="og:description"
    content="  3 Steps to Build a Million Dollar Customer Pathway." />


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-5220882-1', 'auto', { name: 'resultsFoundation' });
  ga('create', 'UA-5220882-34', 'auto', { name: 'geniusU' });
  ga('resultsFoundation.send', 'pageview');
  ga('geniusU.send', 'pageview');
</script>

<!-- Hotjar Tracking Code for https://crisis.geniusu.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1782928,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
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


<script type="text/javascript">
    function myFunction(){

$("#ld").show();

    console.log('myFunction Called');

// var newVal = '<fb:comments href="http://example.com/some/' + value + '" num_posts="20" width="500"></fb:comments><div id="fb-root"></div>';

 $('#fbc').removeAttr("data-href");
$('#fbc').attr("data-href","https://solutions.geniusu.com/masterclass/remote/webinar/");

 FB.XFBML.parse();

 $('#fb1').removeAttr("data-order-by");
 $('#fb1').attr("data-order-by", "reverse_time");

 FB.XFBML.parse();

setInterval(function(){ $("#ld").hide(); }, 7000);




 $('#ld').removeAttr("display");

$('#ld').attr("display","none");


}
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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=261045588457329&autoLogAppEvents=1"></script>





<div class="fixed">
    <div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" style="float:right;" data-toggle></button>
      <div class="title-bar-title">&nbsp; <img src="img/gu.png" style="border-radius:0px;max-width: 140px">
      </div>
    </div>

    <div class="top-bar hide-for-large" id="example-animated-menu"
      data-animate="hinge-in-from-top hinge-out-from-top">
      <div class="top-bar-left">
        <ul class="menu vertical">
          <li>
            
           <p class="smlp" style="color: #000"><a href="https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=<?php echo($sfid);?>" style="color: inherit;"><b>Masterclass One </b><br/> Generate an additional $25,000 per month in Remote Sales</a></p> 
          </li>
          <li>
             <p class="smlp" style="color: #000"><a href="https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=<?php echo($sfid);?>" style="color: inherit;"><b>Masterclass Two </b><br/> Decisive Leadership: How to shift you and your team from uncertainty to growth mode.</a></p> 
          </li>
          <li>
            <a disabled>
                <p class="smlp" style="color: #000"><b>Masterclass Three </b><br/> Digital Marketing trends during the crisis and beyond</p></a>
          </li>
          <li><a disabled>
               <p class="smlp" style="color: #000" ><b>Masterclass Four </b><br/> Profit Plan for Success</p> </a>
             
          </li>
         
        </ul>
      </div>
    </div>
  </div>

  <div  class="show-for-large">
  <div style="background: #15264C" >  <!-- class="sticky" id="top_nv" data-sticky data-sticky-on="small" data-margin-top="0"> -->
    <div class="row rowl hide-for-small-only" data-equalizer style="max-width: 70rem;">
      <div class=" medium-3  columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <img src="img/gu.png"  style="border-radius:0px;max-width: 140px;">
        </div>
      </div>
      <div class="  medium-9  columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <center>
            <div class="row medium-up-4">
              <div class="columns">
                 <div class="btn25 max_m">
                <a href="https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=<?php echo($sfid);?>" style="color: inherit;">
               

                   <img src="img/n1.jpg">
                  

                
                <p class="smlp"><b>Masterclass One </b><br/> Generate an additional $25,000 per month in Remote Sales</p> 
              </a></div>
              </div>
              <div class="columns">
                 
                  
                <div class="btn25 max_m">
                  <a href="https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=<?php echo($sfid);?>" style="color: inherit;">
                 <img src="img/n2.jpg">
               <p class="smlp"><b>Masterclass Two </b><br/> Decisive Leadership: How to shift you and your team from uncertainty to growth mode.</p>

            
                </div>
              </a>
                
                 
              </div>
              <div class="columns">
                <div class="btn25 max_m">
                  <img src="img/n3.jpg">

                      
                
                <p class="smlp"><b>Masterclass Three </b><br/> Digital Marketing trends during the crisis and beyond</p>
                </div>
              </div>
              <div class="columns">
                <div class="btn25 max_m">
                                    
                 <img src="img/n4.jpg">
                 <p class="smlp"><b>Masterclass Four </b><br/> Profit Plan for Success</p>
                </div>
               
              </div>
              
            </div>
          </center>
        </div>
      </div>



    </div>
  </div>
  </div>

   <div class="row rown " style="max-width: 70em;" >


      <div class="medium-12 columns"  >

    <center>
  <h3 class="grntxt"><b>Genius Solutions 2021 VIP Masterclass&nbsp;Series</b></h3>

            <p class=""><b>Digital Marketing during the crisis and beyond</b>
</p>
</center>




<div class="row ty_page rowl">
  <div class="large-8 columns">
    <div class="center">

      <!-- <img src="img/placeholder.jpg" style="width: 100%;"> -->

<div class="responsive-embed widescreen" id="m-video">

    <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.8); "><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="https://fast.wistia.net/embed/iframe/dvsgq82gcy.jsonp?seo=false&videoFoam=true&autoplay=true&playbar=false&fullscreenButton=false&volume=1"  title="Wistia video player" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed"  width="100%" height="100%"></iframe></div></div>
  <script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>
</div>


 </div>
  </div>
  <div class="large-4 columns">
    <span class="show-for-small-only"><br/></span>
    <a id="fbcref"><p style="margin-bottom: 0px;font-weight:bold;font-style: italic;color: #385898;"><!-- <span class="fb-comments-count" id="fbc" data-href="https://www.cowin2020.com/"></span> --> Click here to load new comments  &nbsp; <img src="img/arrow.png" style="width:100%;max-width:25px;">&nbsp; &nbsp;<img src="img/loading.gif" id="ld" style="width:30px;"></p></a>
    <div class="sp_fb_wid">

     <div class="fb-comments" id="fb1" data-href="https://solutions.geniusu.com/masterclass/remote/webinar/" data-width="100" data-numposts="5" data-order-by="reverse_time"></div>

    </div>
  </div>
</div>
      </div>
   </div>


   <div class="bg6">
  <div class="row rowl">
    <div class="small-12 center columns">
      <h2 class="white"  style="margin-bottom: 0px;"><b>Your Next Steps </b></h2>
    </div>
  </div>
</div>

  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-9 large-centered columns">
      <center>
      <img src="img/downarrow1.png" style="width: 100%;max-width: 80px;padding-bottom: 0px;">
    </center>
    <div class="row " style="padding-top: 30px;"  data-equalizer>
      <div class="medium-6 columns out-vc" data-equalizer-watch>
        <div class="in-vc"><center>
        <img src="img/slides.jpg" style="width: 100%;max-width: 300px">
        </div>
      </div>
      <div class="medium-6 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
           <span class="show-for-small-only"><br/></span>
           <div class="medium-text-left text-center">
          <h5 class="grntxt" ><b>Step 1</b></h5>
        <h5 class=""><b>Download useful resources</b></h5>
        <div class="rowl">
        <a href="VIP Masterclass - Digital Marketing - Slides.pdf" download class="button orgbutton4">CLICK HERE</a>
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
          <img src="img/gu_logo.png" style="width: 100%;max-width: 190px;">
          </div>
        </div>
      </div>
      <div class="medium-2 large-1 columns  out-vc" style="padding: 0" data-equalizer-watch>
        <div class="in-vc">
          <div class="medium-text-left text-center">
            <span class="show-for-small-only"><br/></span>
            <h5 class="grntxt"><b>Step 2</b></h5>
          
          </div>
        </div>
      </div>
      <div class="medium-6 large-6  columns  out-vc" data-equalizer-watch>
        <div class="in-vc">
          <div class="medium-text-left text-center">
           
           
          <h5 class="white" style="margin-bottom: 0px;"><b>Book your Free Genius <br/> Digital Marketing Assessment & Website Audit</b></h5>
          </div>
        </div>
      </div>
      <div class="show-for-large">
        <div class="medium-4 large-3 columns  out-vc" data-equalizer-watch>
          <div class="in-vc">
            <div class="center">
              <a href="#reg_form" class="orgbutton2 button" style="margin: 0"> Book Today</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="top_bg ">
    <div class="bhu">
      <div class="row rown "  >

        <div class="medium-8 large-6   medium-text-left text-center  columns ">
           <h2 class="grntxt " ><b>10x returns on your marketing spend</b></h2>
           <div class="row">
           <div class="large-11 columns columns">
           <p class="">Book your free Digital Marketing Assessment and during this session receive a bonus free Genius Website Audit, and discover the digital marketing solutions to help you 10x your return on your marketing spend.</p>
           <p> The Digital Marketing Assessment and Website Audit Session is free of charge for the right level of business. </p>
           <p> You will also gain clear insight into how Genius Solutions, Digital Marketing Services and other programs will best support you in achieving your key goals and success.

           </p>
         </div>
         <div class="large-1 show-for-large columns">
          &nbsp;
        </div>
      </div>


           <div class="rowl">
           <a href="#reg_form" class="orgbutton button" style="margin: 0"> Book an Assessment & Audit Today</a>
           </div>
            <p class="">Spaces are limited. Apply today</p>

        </div>
        <div class="medium-4 large-6 hide-for-small-only rowm  columns ">
            &nbsp;

        </div>

      </div>
     
         </div>
  </div>



  <div class="bg1">
    <div class="row rown">
      <div class="small-12 medium-10   medium-centered columns">
        <h2 class="grntxt center rowl"><b>How the Digital Marketing Assessment and Website Audit can help you 10 x your results</b></h2>
        <p class="white center"><b>Guaranteed weekly sales and new clients for your products and services</b></p>
        <div class="large-10 large-centered columns">
        <p >Suraj is the Chief Marketing Officer at GeniusU. He has led the digital marketing and services division of GeniusU and grown it to over 1.4 million members in 200 countries. Through Genius Solutions he has been creating million dollar promotion plans for GeniusU’s partners and clients, using the very latest cutting edge strategies and marketing tools.</p>
        <p> We invite you to apply for one of 25 free Digital Marketing Assessment & Website Audit Session places that we are gifting through this month, as the first step to understand how the Digital Marketing systems and strategies the Genius Group uses, can assist you to 10X your results on your advertising spend and create profitable digital campaigns.</p>
        <p>  This session is usually $1,000. </p>
        <p> Through this process, you will complete a short questionnaire before one of our expert Genius Solutions Genius Igniters, will undertake a website audit, where you we discover the opportunities to improve your website and enhance your digital presence. We will also assess your current situation with you, and identify the best opportunities and recommendations for you. You will leave this session with a clear idea of the best next step for you to achieve your goals. </p>
        <p> If there is a good fit and you see the value of having us help you implement the strategies and agile leadership, sales or digital marketing systems, you can agree on the next step based on outcomes of this session. We do have high demand and limited places for these services. </p>
        <p> This Assessment & Audit Session isn’t for everyone. </p>
        <p> You need to be a startup or established business and be generating at least $10K per month (or you were pre crisis)</p>
        <p>  During this session, if it is relevant, you will also find out more about the Genius Solutions full suite of services. The Genius Solutions team of experts will work directly with you to install the same digital marketing, remote sales, cash growth system and agile leadership structure that has built Genius Group into a $100 million business to ensure you get a 10x return on investment. </p>
        <p> If you would like to qualify for one of the 25 places, please book for an assessment & audit call below.
</p>

        <div class="center rowl">
          <a href="#reg_form" class="orgbutton3 button" style="margin: 0"> Book Here</a>
        </div>

      </div>
      </div>
    </div>
  </div>

<div style="background: #F1F1F1">
  <div class="row rown" style="padding-top: 0px;">
  <div class="small-12  columns">
    <center>
      <img src="img/downarrow.png" style="width: 100%;max-width: 80px;padding-bottom: 20px;">
   </center>

   <h2 class="grntxt center rowl"><b>The Digital Marketing Services <span class="show-for-large"><br/></span> Package in a nutshell</b></h2>
   <div class="large-8 large-centered columns">
   <p>When you join the Digital Marketing solutions programme, you are joining the top level of the Genius Group community, and with our top talents support.</p>
   <p> Entry into this group is in high demand and by invitation only. </p>
   <p>This is our top program, and ensures you and your team have the systems and skills to lead into the future - delivering the guidance, tools and resources to 10x your results in a 12 month exclusive program - from startup to high-growth enterprises and impact investors.</p>
   <p> Following a successful application you will receive a personal planning session, a full suite of agile leadership tools and a system to follow. We set a personalised plan to 10x your results, with the tools to achieve it, including monthly meets, quarterly reviews, an annual review, to give you guidance and direction, ensuring that you stay on track as your annual plan evolves.</p>
   <p> You will be part of a dynamic high level entrepreneur community from over 30 countries, all growing their enterprises and investments with the support of the Crystal Circle community. This gives you access to new markets and world class opportunities. And the collective wisdom of the group to accelerate your own learning and progress.</p>
   <p> If you are keen to be one of the small number of people we invite to join the programme please apply here to book your free Digital Marketing Assessment and Website Audit.</p>
   <div class="center rowl">
          <a href="#reg_form" class="orgbutton3 button" style="margin: 0"> Apply Here</a>
        </div>

 </div>
  </div>
</div>
</div>

<div class="row expanded">
  <div class="small-12 columns"  style="padding: 0px;">
    <img src="img/collage_1.jpg" style="width: 100%;max-width: 100%;">

  </div>
</div>
  <div class="bg4">
    <div class="row rown" >
    <div class="small-12 large-11 large-centered columns">
      <h2 class="center grntxt rowl"><b>5 reasons to join the Genius Solutions Digital Marketing  </b></h2>


           <div class="row rowl">
            <div class="small-3 center columns">
              <img src="img/ico1.png" style="width:100%;max-width:85px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class="white">You will generate a 10 X return on your investment within 6-9 months, of between $150,000 and $300,000+  </p>
            </div>
            <div class="show-for-large large-2 columns">
              &nbsp;
            </div>
          </div>

           <div class="row ">
            <div class="small-3 center columns">
              <img src="img/ico2.png" style="width:100%;max-width:85px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class="white">You will be given a clear schedule and rhythm, from promotion plan through to full digital marketing execution where you can monitor and see the actions being taken each week that are leading to your agreed weekly targets, of followers, community, new warm leads to sales.     </p>
            </div>
            <div class="show-for-large large-2 columns">
              &nbsp;
            </div>
          </div>
          <div class="row rowl">
            <div class="small-3 center columns">
              <img src="img/ico3.png" style="width:100%;max-width:85px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class="white">  You can focus on the other key areas of your business during this crisis knowing you have a full plan and expert in place on the digital marketing. </p>
            </div>
            <div class="show-for-large large-2 columns">
              &nbsp;
            </div>
          </div>
          <div class="row ">
            <div class="small-3 center columns">
              <img src="img/ico4.png" style="width:100%;max-width:85px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class="white">  Everything we learn during this crisis that enables us to generate new ways to grow our leads and revenues effectively will be instantly implemented into your business.   </p>
            </div>
            <div class="show-for-large large-2 columns">
              &nbsp;
            </div>
          </div>
          <div class="row rowl">
            <div class="small-3 center columns">
              <img src="img/ico5.png" style="width:100%;max-width:85px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class="white"> You get your business and team to be led by a team of crisis leadership experts who are not just experts in their field but who are also practitioners, implementing these technologies and principles every day into our business.   </p>
            </div>
            <div class="show-for-large large-2 columns">
              &nbsp;
            </div>
          </div>

          

    </div>
    <p class="white center large-9 large-centered"><b>To be considered for one of the 3 Digital Marketing Services clients this <span class="show-for-large"><br/></span> month, first apply here for a free Digital Marketing Assessment & Website Audit</b></p>
            <div class="center rowl">
          <a href="#reg_form" class="orgbutton3 button" style="margin: 0"> Apply Here</a>
        </div>
  </div>
</div>

<div style="background: #8FBB23">
  <div class="row rowl">
    <div class="small-12 medium-10 large-8 medium-centered center columns">
      <p class="white" style="margin-bottom: 0px;"><i>With a proven approach, digital experts, and innovative insights Genius Solutions will fast track your path to results.</i></p>
    </div>
  </div>
</div>

<div style="background: #F1F1F1">
   <div class="row rown">
    <div class="small-12 large-12 large-centered columns">
      <h2 class="bluetxt center"><b>The Genius Solutions Marketing Experts</b></h2>
      <p class="center large-9 rowl large-centered">Our team of experts have been accountable for delivering millions of dollars of revenues and cost savings across our group and with several of our key partners too. Between them, they have over 70 years of experience, in achieving high performance results.</p>
      <div class="row ">
      <div class="medium-4 center columns">
        <img src="img/surak.png" class="rowl" style="width: 100%;max-width: 120px;">
      
        <p class=""><b>SURAJ NAIK<br/>Digital Marketing Expert</b></p>
       
      </div>
     
      <div class="medium-4 center columns">
        <img src="img/michelle.png" class="rowl" style="width: 100%;max-width: 120px;">
      
        <p class=" "><b>MICHELLE CLARKE <br/>Promotions Management Expert</b></p>
        
      </div>
      <div class="medium-4 center columns">
        <img src="img/paulina.png" class="rowl" style="width: 100%;max-width: 120px;">
      
        <p class=" "><b>PAULINA ROACH <br/>Project Manager </p>
         
      </div>
    </div>
  </div>
</div>
</div>

    <div class="row rown" >
    <div class="large-12 large-centered  rowm columns">
    <div class="medium-3  columns text-center" style="padding: 0px;">
      <img src="img/roger_hamilton_about.png" class="rowl" style="width:100%;max-width:240px;">


    </div>

    <div class="medium-9    columns" style="padding-left:1vw;padding-right:1vw;" style="text-align: justify;
    text-justify: inter-word;">
     <h2 class="bluetxt rowl"><b>Letter from Roger</b></h2>
      <p>Dear Entrepreneur,</p>
      <p> We are living in unprecedented times. We are currently living through the immediate impact of the coronavirus crisis, and we are heading into what experts are predicting to be the greatest financial crash in history. </p>
      <p>If you are like most of the entrepreneurs in our global community, you will be feeling the financial effects of the coronavirus . If you do not have a digital business generating remote sales and cash flow, you will be facing an uncertain future.</p>
      <p> Even worse, you realise you need to fix the short term business challenge while keeping an eye on the upcoming opportunities. Because it is always in the times of greatest crisis that lie the opportunities of a lifetime.</p>
      <p> This is why we have launched Genius Solutions. </p>
      <p>Our top clients have been asking for direct support from our top leadership to install the same digital marketing, remote sales, cash growth system and agile leadership structure that has built Genius Group into a $100 million business.</p>
      <p> If you are generating $250K - $5M per year in revenues then, like our top clients, your biggest challenge is likely to be that you know you need a major upgrade in your digital strategies but you don’t have the team to deliver them at the expertise and speed that you need. </p>
      <p>Genius Solutions now delivers to you a full suite of services where our top leaders and our team of experts will work directly with you to implement our systems directly in your company and train your team to ensure you get a 10x return on investment.</p>
      <p> We do have very limited places for these high demand services, as they are currently delivered by our own leadership team. So apply today and secure one of the limited places.</p>
      <p> I wish you all the best in your application and I look forward to working with you!</p>

      <img src="img/RH-logo-big.png" class="rowl" style="width:100%;max-width:200px;">
  </div>

  
    </div>

  </div>



<div class="bg2">
<div class="row rown">
  <div class="small-12 large-10 large-centered columns">
    <h2 class="white center"><b>Here are case studies of some clients we have worked with recently</b></h2>


</div>
</div>
</div>

<div class="row rowl" style="max-width: 70em">
<div class="medium-9 medium-centered columns large-12">
<div class="row rown" data-equalizer>
  <div class="large-6 columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      
      <h3 class="grntxt"><b>Success Story: <Br/>Clearlight Infrared Saunas</b></h3>
      <p><b>Clearlight cracks the code to reach its target market by collaborating with GeniusU Solutions</b> </p>

        <center> <img src="img/t1.jpg" style="width: 100%;" class="hide-for-large rowl"> 
      </center>


      <p><b>Growing pains </b> <Br/>Clearlight Infrared Saunas have been a household name in Infrared Saunas for 19+ years. Being a offline product brand they had a bold vision of digital contributing most to their revenue. Clearlight was looking for a digital launch formula that could bring flow of leads not just during launch but on ongoing basis too.</p>
      <p><b> Exponential growth </b> <Br/>GeniusU Solutions launched Clearlight Awards, where marketing efforts were put in to get target market to opt in to win a free personal Sauna worth $7k. With an incredible strategy that included a mix of Facebook ads and partner community launch, Clearlight generated 6000 leads in 2 weeks and revenue of over half a million dollars.</p>
      <p  style="margin-bottom: 5px;"><b>Results: </b></p>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;">Target: 400 leads, 100 calls | Result: 6000+ leads, 389 calls</p>
          </div>
        </div>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;">Target: $50k | Result: $840K+ (ongoing) </p>
          </div>
        </div>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;"> 
       Community Engagement kickstart with weekly podcast</p>
          </div>
        </div>
        
    </div>
  </div>
  <div class="large-6 show-for-large columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      <img src="img/t1.jpg" style="width: 100%;">
    </div>
  </div>
</div>


</div>
</div>

<div style="background: #f1f1f1">

  <div class="row rowl" style="max-width: 70em">
<div class="medium-9 medium-centered columns large-12">
<div class="row rown" data-equalizer>
  <div class="large-6 columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      
      <h3 class="grntxt"><b>Success Story: <Br/> Health Dynamics</b></h3>
      <p><b>Health Dynamics transforms its business by going digital and global with GeniusU</b></p>

        <center> <img src="img/t2.jpg" style="width: 100%;" class="hide-for-large rowl"> 
      </center>


      <p><b>Growing pains </b> <Br/> Health Dynamics was started by Jo Formosa in Brisbane. One of the challenges for Jo was to productise the concept and have a platform which allows it to grow exponentially and play on the global stage.</p>
      </b>
      <p><b> Unlimited growth  </b> <Br/> Now, with everything running in GeniusU, customer numbers are going through the roof. In the past year 3000+ people have gone through the online assessments, micro degrees and events. Health Dynamics continues to grow.</p>
      <p  style="margin-bottom: 5px;"><b>Results: </b></p>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;">Over 2,400+ have taken the Health Dynamics and the Health Spectrum test in last 1 year</p>
          </div>
        </div>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;"> Generated over US$100,000 in sales through GeniusU</p>
          </div>
        </div>
         
    </div>
  </div>
  <div class="large-6 show-for-large columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      <img src="img/t2.jpg" style="width: 100%;max-width: 450px;">
    </div>
  </div>
</div>


</div>
</div>
</div>


<div class="row rowl" style="max-width: 70em">
<div class="medium-9 medium-centered columns large-12">
<div class="row rown" data-equalizer>
  <div class="large-6 columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      
      <h3 class="grntxt"><b>Success Story: <Br/>   Global Entrepreneur Summit</b></h3>
      <p><b>See how Global Entrepreneur Summit ran sell out events across the globe </b></p>

        <center> <img src="img/t3.jpg" style="width: 100%;" class="hide-for-large rowl"> 
      </center>


      <p>Entrepreneurs Institute launched the Global Entrepreneur Summit (GES) series of events in New Zealand, Australia, Thailand, United Kingdom, United States, Japan, Taiwan, Lithaunia, Czech Republic using the services from GeniusU. GES used GeniusU to manage marketing, managing the community, managing the partners and paying out daily commissions using the systems.</p>
      <p> With the help of GeniusU marketing solutions, Global Entrepreneur Summit has sold tickets to over 50,000+ attendees across the world. In addition to supporting GES in filling the events, GES uses GeniusU for managing onground registration, ticketing and one click payments.</p>
      <p  style="margin-bottom: 5px;"><b>Results: </b></p>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;">15,129 tickets sold via GeniusU platform since 2016. </p>
          </div>
        </div>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;">1,735 members accessed the livestream video on GES Circle</p>
          </div>
        </div>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;"> Over $3.7 million generated/processed via the platform in 2017  </p>
          </div>
        </div>
       
    </div>
  </div>
  <div class="large-6 show-for-large columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      <img src="img/t3.jpg" style="width: 100%;max-width: 450px;">
    </div>
  </div>
</div>


</div>
</div>

<div style="background: #f1f1f1">

  <div class="row rowl" style="max-width: 70em">
<div class="medium-9 medium-centered columns large-12">
<div class="row rown" data-equalizer>
  <div class="large-6 columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      
      <h3 class="grntxt"><b>Success Story: <Br/> B1G1</b></h3>
      <p><b>How B1G1 used GeniusU Solutions to support its vision of transforming lives around the world.</b></p>

        <center> <img src="img/t4.jpg" style="width: 100%;" class="hide-for-large rowl"> 
      </center>


      <p>B1G1 is fully integrating into GeniusU as part of The World Game.</p>
      <p> B1G1 is the number 1 social enterprise for helping Entrepreneurs to achieve more, by embedding giving activities into everyday business operations and creating unique giving stories. Every business transaction (and as a result, the business’ day-to-day activity) can impact lives for as little as just one cent.</p>
      <p> B1G1 uses GeniusU for Marketing solutions. In a short period of 6 months, B1G1 has made over 500,000 impacts around the world thru GeniusU platform. GeniusU continues to be one of the biggest contributor of impacts on B1G1 platform.</p>
      <p  style="margin-bottom: 5px;"><b>Results: </b></p>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;">604,000+ giving impacts processed via GeniusU in last 3 months </p>
          </div>
        </div>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;"> $5000-$7000+ monthly payouts to B1G1 for giving impacts.</p>
          </div>
        </div>
         
        
    </div>
  </div>
  <div class="large-6 show-for-large columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      <img src="img/t4.jpg" style="width: 100%;max-width: 450px;">
    </div>
  </div>
</div>


</div>
</div>
</div>
<div class="row rowl" style="max-width: 70em">
<div class="medium-9 medium-centered columns large-12">
<div class="row rown" data-equalizer>
  <div class="large-6 columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      
     <h3 class="grntxt"><b>Success Story: <Br/>  Wealth Migrate Platform</b></h3>
      <p><b>Property Network Group Wealth Migrate goes Digital with a million dollar platform launch</b> </p>

        <center> <img src="img/t5.jpg" style="width: 100%;" class="hide-for-large rowl"> 
      </center>


      <p>Leading property network group Wealth Migrate did a restructuring in 2019 by having the online platform as a separate company. Now with the platform company having its own P&L had to launch BIG. The group had big goals of generating 1 million in 3 months.</p>
      <p> With the help of GeniusU marketing solutions, Wealth Migrate launched a 3 month campaign to go completely digital by launching different phases of the campaign, series of lead magnets, community landing pages to capture interest for its launch through pre-launch phase, launching educational products. The strategy was to get maximum commitments before the crowdfunding exercise launches. The results were phenomenal which you can see on the image here.</p>
      <p  style="margin-bottom: 5px;"><b>Results: </b> </p>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;">Target: 500 investors investing $2000 each to generate $1m (GBP750K) </p>
          </div>
        </div>
        <div class="row">
          <div class="small-1 columns" style="padding: 0px;">
            <img src="img/t2.png" style="width: 100%;max-width: 15px;float: right;padding-top: 5px;">
          </div>
          <div class="small-11 columns">
            <p style="margin-bottom: 5px;">Results: Oversubscribed with 678 investors and generated $2.5million dollars (GBP1.99M) </p>
          </div>
        </div>
    </div>
  </div>
  <div class="large-6 show-for-large columns out-vc" data-equalizer-watch>
    <div class="in-vc">
      <img src="img/t5.jpg" style="width: 100%;max-width: 450px;">
    </div>
  </div>
</div>


</div>
</div>

<div style="background: #8FBB23">
    <div class="row rown">
      <div class="small-12 columns  large-centered">
        
        <h2 class="bluetxt center"><b>What you get when you join the Genius Solutions Digital Marketing Services Package</b></h2>
        <div class="row ">
      <div class="medium-6 columns">
        <img src="img/startup.png" style="width: 100%;max-width: 500px;">
      </div>
      <div class="medium-6  columns">
        <p class="rowm" >There are 2 levels of packages to choose from. We advise most businesses to start on the starter package and once they are ready to double their results, they can step up to the enterprise package.</p>
        <p style="margin-bottom: 0px;">  In the Enterprise Package you receive 400 hours of the team's time over 6 months. We can help you decide the best way to utilise your hours when we set up your plan at the very start. Here are some of the things you can utilise your hours on</p>
      </div>
      
    </div>


      </div>
    </div>
  </div>


  <div class="row rown" id="whtg">
  <div class="small-12 large-8 large-centered columns">
    <h3 class="center"><b>Here are some of the things you can utilise your hours on.</b></h3>

   
    <div class="row rown " style="padding-bottom: 0px;">
      <div class="small-2 center columns " style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">1</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt">Your own personalised proposal outlining what you and Suraj have agreed for the key outcomes and targets to be</b></p>
         <img src="img/dm_1.png"  style="width: 100%;max-width: 250px;padding-bottom: 20px;padding-top: 5px;">
      </div>
    </div>
       
    




     <hr class="hr1">

      <div class="row rowm ">
      <div class="small-2 center columns" style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">2</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt">Your weekly dashboard tracking your progress, growth and results week on week</b></p>
          <img src="img/dm_2.png" style="width: 100%;max-width: 250px;padding-bottom: 20px;padding-top: 5px;">
      </div>
    </div>

     <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns" style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">3</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt">Detailed reports showing the growth of your followers, community, prosepects and new clients</b></p>
          <img src="img/dm_3.png" style="width: 100%;max-width: 250px;padding-bottom: 20px;padding-top: 5px;">
      </div>

    </div>

    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns" style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">4</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt">  A weekly project call with your project manager</b> <Br/>where we will explain the analysis of the data and the key actions we will be taking this week to hit targets </p>
          <img src="img/dm_4.png" style="width: 100%;max-width: 300px;padding-bottom: 20px;padding-top: 5px;">
      </div>

    </div>
    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns" style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">5</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt">High quality graphic and web design solutions</b>  <Br/> for your landing pages and webinar pages</p>
          <img src="img/dm_5.png" style="width: 100%;max-width: 250px;padding-bottom: 20px;padding-top: 5px;">
      </div>

    </div>
    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns" style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">6</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt">Fully functioning and tracking websites</b><br/> with e-commerce sales and tracking</p>
          <img src="img/dm_6.png" style="width: 100%;max-width: 250px;padding-bottom: 20px;padding-top: 5px;">
      </div>

    </div>

    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns" style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">7</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt">Facebook adverts with images, customised audiences and tracking</b></p>
          <img src="img/dm_7.png" style="width: 100%;max-width: 250px;padding-bottom: 20px;padding-top: 5px;">
      </div>
      
    </div>

    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns" style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">8</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt"> Google ad words adverts with images, customised audiences and tracking </b> </p>
          <img src="img/dm_8.png" style="width: 100%;max-width: 250px;padding-bottom: 20px;padding-top: 5px;">
      </div>

    </div>
    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns" style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">9</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt">LinkedIn adverts with images, customised audiences and tracking</b></p>
          <img src="img/dm_9.png" style="width: 100%;max-width: 250px;padding-bottom: 20px;padding-top: 5px;">
      </div>

    </div>
    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns" style="padding-top:5px;">
        <span class="badge size-30" style="float: right;">10</span>
      </div>
      <div class="small-10  columns">
        <p><b class="bluetxt">Full social media and content engagement with growth techniques</b></p>
          <img src="img/dm_10.png" style="width: 100%;max-width: 250px;padding-bottom: 20px;padding-top: 5px;">
      </div>

    </div>



</div>
</div>
</div>
</div>

<div class="bg3">
  <div class="row rown">
    <div class="small-12  large-7 large-centered center columns">
      <h3 class="white "><b>Spaces are limited. </b></h3>
       <h4 class="grntxt "><b>Apply now to book your free Digital Marketing Assessment and Website Audit</b></h4>
       <h4 class="rowm white"   style="text-transform: uppercase; "><b>Apply Now: $0.00 </b></h3>
       <h5 class="white" style="text-transform: uppercase; "><b><strike>Normal Rate: $1,000</strike></b></h5>
      <div class="center rowm">
          <a href="#reg_form" class="orgbutton3 button" style="margin: 0"> Apply Now</a>
        </div>
    </div>
  </div>
</div>



  <div class="row rown" >
    <div class="small-12   large-9 large-centered columns">
<div class=" large-10 large-centered columns">
 <h2 class="grntxt center rowl"><b>Genius solutions pathway</b></h2>
 <p class="center"><b>Genius solutions delivers three Mentor Pathways and three <span class="show-for-large"><Br/></span> Full Service Solutions to choose from</b></p>
 <p>Genius Group will guide you on it’s proven agile leadership and digital business model, with three pathways based on your level of enterprise and three full services solutions based on your greatest need.</p>
</div>
<img src="img/sol.jpg" style="width: 100%;max-width: 100%;">

  </div>
</div>

<div class="bg6">

  <div class="row rown" >
    <div class="small-12  center   columns">

 <h2 class="grntxt center rowl"><b>Your Complimentary Digital Marketing Assessment & Website Audit is the first step</b></h2>
 <p class=" white center large-7 large-centered"><b>The Genius Solutions pathway gives a personalized path to ensure each client is at the right level to make the most of the Genius Solutions Agile Leadership and other services.</b></p>

<img src="img/frame.jpg" class="rowl" style="width: 100%;max-width: 800px;">

 <p class="center white large-7 large-centered rowm"> <b>For more details on the Genius solutions Digital Marketing Services, Download the Masterclass Slides <a href="VIP Masterclass - Digital Marketing - Slides.pdf" download class="org" target="_blank">Here</a></b></p>

  </div>
</div>
</div>

  <div class="bg7">
  <div class="row rown">
    <div class="small-12 center columns">
      <h2 class="white"><b>The steps on applying, through to <span class="show-for-large"><br/></span>revenue generation</b></h2>
      <h3 class="grntxt rowm" style="margin-bottom: 0px;text-transform: uppercase;"><b>STEP ONE: <span class="white">  Your Digital Marketing Assessment <span class="show-for-large"><br/></span>and Website audit is the First Step</span></b></h3>
    </div>
  </div>
</div>

  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-12    large-centered columns">
      <center>
      <img src="img/downarrow.png" style="width: 100%;max-width: 80px;">
    </center>

     <div class="row rown"  style="padding-bottom: 0px;" data-equalizer>

      <div class="medium-7 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <div class="show-for-small-only center">
          <img src="img/step_1.jpg" style="width: 100%;max-width: 300px;padding-bottom: 20px;">
          </div>

          <p>On receiving your application, you will be invited to a call with one of our specially trained Genius Igniters, who will take you through a process to audit your website and digital presence, and to assess if your business and product is at the right level to benefit from Genius Solutions Digital Marketing right now.</p>
          <p> You will then be invited to a digital marketing planning call with Suraj Naik, where he will identify with you the key areas where there is an opportunity to drive revenues in your business and show you how this can be achieved with real examples of clients and promotions, he has worked on.</p>
          <p>  You will receive a full proposal from Suraj, outline the plan and results to be achieved with the start date and how we will support you and your team through the 6 months implementation at which point we can begin working with you.</p>
        </div>
      </div>
      <div class="hide-for-small-only">
      <div class="medium-5 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <center>
          <img src="img/step_1.jpg" style="width: 100%;max-width: 380px;">
          </center>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>


<div class="bg7">
  <div class="row rown">
    <div class="small-12 center columns">
      <h3 class="grntxt" style="margin-bottom: 0px;"><b>STEP TWO: <span class="white">SET UP FOR SUCCESS</span></b></h3>
    </div>
  </div>
</div>

  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-11    large-centered columns">
      <center>
      <img src="img/downarrow.png" style="width: 100%;max-width: 80px;">
    </center>

     <div class="row rown"  style="padding-bottom: 0px;" data-equalizer>

      <div class="medium-7 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <div class="show-for-small-only center">
          <img src="img/step_2.jpg" style="width: 100%;max-width: 350px;padding-bottom: 20px;">
          </div>

          <p>You will have a Strategy session with Suraj and your Project Manager where you will discuss and agree your promotion plan and schedule for the next 3 months, which will help you to ensure sales are also generated using other sources and will help to provide details of your first campaign and launch.</p>
          <p>  We will agree and create a rhythm with you where you are able to check in with your project manager for an update each week.</p>
          <p>  We will add your team to their own slack channel where we can easily and quickly communicate, share and react to changes in the promotion.</p>
          <p>  You will be set up with your own company dashboard and tracking resources where you can see the targets and actuals for each week at a glance.</p>
        </div>
      </div>
      <div class="hide-for-small-only">
      <div class="medium-5 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <center>
          <img src="img/step_2.jpg" style="width: 100%;max-width: 400px;">
          </center>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>


<div class="bg7">
  <div class="row rown">
    <div class="small-12 center columns">
      <h3 class="grntxt" style="margin-bottom: 0px;"><b>STEP THREE: <span class="white"> GENERATE GUARANTEED LEADS AND SALES</span></b></h3>
    </div>
  </div>
</div>

  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-11    large-centered columns">
      <center>
      <img src="img/arrow_blue.png" style="width: 100%;max-width: 80px;">
    </center>

     <div class="row rown"  style="padding-bottom: 0px;" data-equalizer>

      <div class="medium-6 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <div class="show-for-small-only center">
          <img src="img/step_3.jpg" style="width: 100%;max-width: 300px;padding-bottom: 20px;">
          </div>

          <p>Each week you will see your actual new followers, community and prospects turning into real sales for the promotion.</p>
          <p> We will then work with you each week to track, measure and where necessary tweak the promotional activity to get the best results</p>
        </div>
      </div>
      <div class="hide-for-small-only">
      <div class="medium-6 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <center>
          <img src="img/step_3.jpg" style="width: 100%;max-width: 300px;"> <span class="show-for-large"><Br/><Br/></span><Br/>
          </center>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>




<div class="bg3">
  <div class="row rown">
    <div class="small-12  large-7 large-centered center columns">
      <h3 class="white "><b>Spaces are limited. Apply today.</b></h3>
     
      <div class="center rowm">
          <a href="#reg_form" class="orgbutton3 button" style="margin: 0"> Apply Now</a>
        </div>
    </div>
  </div>
</div>

<div class="row rown">
      <div class="small-11 medium-10 small-centered large-10   columns">
           <h2 class="grntxt center" style="padding-top: 10px;"> <b>Who should join? </b></h2>
           <p class="bluetxt center"><b>The Genius Solutions digital marketing is for you if:</b></p>

           <div class="row ">
            <div class="large-10 large-centered columns">

          <div class="row rowl">
            <div class="small-3   center columns">
              
              <img src="img/1.jpg" style="width:100%;max-width:80px;float: right;">
            </div>
            <div class="small-9  columns">
              <p class="">You have a business which is in a high growth phase during the crisis and know that this is the time to capitalise on the growth but you require help to fully digitise your marketing and lead generation. </p>
            </div>
            <div class="large-1 columns show-for-large">
              &nbsp;
            </div>
          </div>

          <div class="row rowl">
            <div class="small-3   center columns">
               
              <img src="img/2.jpg" style="width:100%;max-width:80px;float: right;">
            </div>
            <div class="small-9   columns">
              <p class="">Your business was averaging $20-100k per month, pre crisis but you have seen a significant drop in revenues and you now need to find new digital pathways to generate leads and sales.</p>
            </div>
            <div class="large-1 columns show-for-large">
              &nbsp;
            </div>
          </div>

          <div class="row rowl">
            <div class="small-3   center columns">
              
              <img src="img/3.jpg" style="width:100%;max-width:80px;float: right;">
            </div>
            <div class="small-9   columns">
              <p class=""> You have had a digital marketing plan in place but it has stopped getting the results you need right now and you are not sure why.</p>
            </div>
            <div class="large-1 columns show-for-large">
              &nbsp;
            </div>
          </div>

          <div class="row rowl">
            <div class="small-3   center columns">
               
              <img src="img/4.jpg" style="width:100%;max-width:80px;float: right;">
            </div>
            <div class="small-9  columns">
              <p style="padding-top:1vw">You have never put a fully functioning digital marketing plan in place in your business and actually don't fully know where to begin.  </p>
            </div>
            <div class="large-1 columns show-for-large">
              &nbsp;
            </div>
          </div>

 <div class="row rowl">
            <div class="small-3 center columns">
               
              <img src="img/5.jpg" style="width:100%;max-width:80px;float: right;">
            </div>
            <div class="small-9  columns">
             <p style="padding-top:1vw"> 
          You know if you had a strong digital funnel consistently bringing in new leads you could focus your time on other key areas of the business that need your attention right now. </p>
 </div>
            <div class="large-1 columns show-for-large">
              &nbsp;
            </div>
          </div>

        </div>
      </div>

      </div>
    </div>




<div class="bg3">
  <div class="row rown">
    <div class="small-12  large-7 large-centered center columns">
      <h3 class="white "><b>Spaces are limited. </b></h3>
       <h4 class="grntxt "><b>Apply now to book your free Digital Marketing Assessment and Website Audit</b></h4>
       <h4 class="rowm white"   style="text-transform: uppercase; "><b>Apply Now: $0.00 </b></h3>
       <h5 class="white" style="text-transform: uppercase; "><b><strike>Normal Rate: $1,000</strike></b></h5>
      <div class="center rowm">
          <a href="#reg_form" class="orgbutton3 button" style="margin: 0"> Apply Now</a>
        </div>
    </div>
  </div>
</div>



<a name="reg_form" id="reg_form"> </a>
<div class="subform">

<div style="background: #ECECEC;">
  <div class="row rown">
    <div class="small-12  medium-centered  columns">
      <h2 class="grntxt center rowl"><b>Apply here to book your Genius Solutions Complimentary Digital Marketing Assessment & Audit Session</b></h2>

  <div class="medium-12 large-8 medium-centered rowm columns">
      <form method="post" id="form_data" >

               <!--  <input type="hidden" id="returl" name="returl" value="https://solutions.geniusu.com/masterclass/remote/webinar/asia/live/thankyou.php">
                 -->  <div class="row ">
                    <div class="small-6 columns">
                      <label>First Name*</label>
                      <input type="text" name="firstname" id="firstname" placeholder="" required class="required">

                    </div>
                    <div class="small-6 columns">
                      <label>Last Name*</label>
                       <input type="text" name="lastname" id="lastname" placeholder="" required class="required">

                    </div>
                  </div>

                   <div class="row ">
                    <div class="small-6 columns">
                    <label>Email*</label> 
          <input type="email" name="email" id="email" placeholder="" required class="required"></div>
                    <div class="small-6 columns"><label>Company Website*</label>
                       <input type="text" name="comp_Website" id="comp_Website" placeholder="" required class="required">

                    </div>
                  </div>
  <label>Phone Number*</label> 
          <div class="row rowk">
<div class="small-4 medium-5 columns ">
<select  id="payment_mobile_country_code" name="payment_mobile_country_code" required>
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
<option value="263">Zimbabwe (+263)</option></select>
</div>
<div class="small-8 medium-7 columns " style="padding-left:0px;">
  <input id="phonec"  name="phonec" type="text" placeholder="Mobile Number" required>
  <input id="mobile_no" name="mobile_no" type="hidden">
</div>
</div>
        
        <!-- <label>Business Name*</label>
                      <input type="text" name="business_name" id="business_name" placeholder="" required class="required">


                      <label>Company Website*</label>
                      <input type="text" name="comp_Website" id="comp_Website" placeholder="" required class="required"> -->

                      <div class="row ">
                    <div class="small-6 columns">
                      <label>Size Of Your Team*</label>
                      <input type="text" name="size_team" id="size_team" placeholder="" required class="required">

                    </div>
                    <div class="small-6 columns">
                      <label>Your current revenue</label>
          <select name="annual_turnover" id="annual_turnover" required="">
         <option value="$0 to $100,000 ">$0 to $100,000 </option>
          <option value="$100,000 to $250,000"> $100,000 to $250,000</option>
          <option value="$250,000 to $500,000"> $250,000 to $500,000</option>
          <option value="$500,000 to $1 million">$500,000 to $1 million </option>
          <option value="$1 million to $10 million"> $1 million to $10 million</option>
          <option value="More than $10 million"> More than $10 million</option>
          </select>
        </div>
      </div>

          <!-- <label>Your predicted sales revenue</label>
          <input type="text" name="pred_turnover" id="pred_turnover" placeholder="" required class="required">
 -->
          <label>Your biggest challenge / opportunity</label>
          <textarea name="challenge" id="challenge" required class="required" rows="5" style="resize: none;"></textarea>
         <!--  <label></label> -->
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
    <div class="small-11 medium-12 small-centered  columns  " >

       <h5 style="font-weight: bold;" class="grntxt center rowl">Thank you for applying to be one of the first for a Genius Solutions Complimentary Business Activation Session. Please book a call with one of the Genius Igniters to complete your application.
      </h5>





      <div class="row">
    <div class="small-12 columns">
      <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/geniusu-global/genius-solutions-digital-marketing-call" style="min-width:320px;height:1000px;"></div>
<script type="text/javascript" src="https://calendly.com/assets/external/widget.js"></script>
<!-- Calendly inline widget end -->
    </div>
  </div>


    </div>
  </div>

</div>


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
              <p  class="pll">Entrepreneurs
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
              <p  class="pll">Entrepreneur
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
             <span class="show-for-small-only"><br/></span>
             <p class="white"><b>Partner</b></p>
            <a href="mailto:eventsupport@entrepreneursinstitute.com" target="blank">
              <p  class="pll">Partner With
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
            <span class="hide-for-large"><br/></span>
            <p class="white"><b>Your Support</b></p>
            <p class="white pll"> We’re here to help! Whether you’re new to Genius Institute or already a student with us, your dedicated Support Team (a.k.a. WOW Team) is here to answer you. Monday to Friday 9:00AM to 5:00PM :<a href="mailto:support@geniusu.com" style="color: inherit;" target="blank">support@geniusu.com</a></p>
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

<!--

<div class="row rown">
  <div class="small-12 medium-7  medium-centered columns">
    <h2 class="grntxt center rowm"><b>FAQ</b></h2>

    <div class="accordion" data-accordion data-allow-all-closed="true">

            <div class="accordion-item " data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + What are the dates of the Young Entrepreneur Academy?</p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p> The program launches on Monday 6th July with a live session with Roger James Hamilton, Monday 6th July to 31st July US and UK and Tuesday 7th July to  Saturday 1st August Pacific region.</p>
              </div>
            </div>
            <div class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + How is the program delivered?</p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p>The course is delivered over four weeks with three live mentor sessions, two implementation days and a Q & A forum each week.
                </p>
              </div>
            </div>

            <div class="accordion-item " data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + How much time does it take to attend the academy?</p>
              </a>
              <div class="accordion-content" data-tab-content>

                <p>The tine investment between the mentoring and the course work is between 1 to 2 hours each day.</p>
              </div>
            </div>

            <div class="accordion-item " data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + What is the cost of the Young Entrepreneur Academy?</p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p>The Microschool cost is $997 and provides full guidance from our expert faculty.  There is also a microcourse option at $295., which gives access to content.</p>
              </div>
            </div>

            <div class="accordion-item " data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + Who is the Young Entrepreneur Academy for?</p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p>For Teens, Pre Teens and Parents who want to develop their entrepreneurial spirit, accelerate learning and further deepen family connection.  The programme is split into three streams Young Students age, 9 to 13 years, Teens 14 to 18 years and Parents programme.</p>
              </div>
            </div>



            <div class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + Will we be assigned a mentor for the duration of the program?</p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p> Yes, your YEA mentor will conduct a 1:1 call with you before YEA starts and will be available for Q & A at allocated times during the Academy.  Plus, experts and Genius School Faculty will be available at times during the Academy within our Genius U Circle.</p>
              </div>
            </div>



          </div>

  </div>
</div>
  -->

<!--   <div class=" row--copyright">
    <div class=" row container">
      <div class="medium-12  columns columns--nopadding">
        <p class="white" style="margin-bottom: 0px;">Copyright &copy; GeniusU | <a class="white"
            href="https://www.geniusu.com/privacy" target="blank">Privacy Policy</a> | <a class="white"
            href="https://www.geniusu.com/terms" target="blank">Terms</a> </p>
      </div>

    </div>
  </div>
 -->

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




$(document).on('click touchend', '#fbcref', function(event) {
    event.preventDefault();
    myFunction();
    // Some code to be executed after #anyHTMLelement is Touched or clicked
});

$("#form_data").submit(function(e) {
    event.preventDefault();

    console.log('form submitted');
    console.log($('form').serialize());

    var forward = 0;
    var data = '';
        // console.log(document.getElementById('firstname').value );
          if(document.getElementById('firstname').value != ''){
            forward += 1;

          }
          if(document.getElementById('lastname').value != ''){
            forward += 1;
          }
          if(document.getElementById('email').value != ''){
            forward += 1;
          }
          if(document.getElementById('payment_mobile_country_code').value != ''){
            forward += 1;
          }
          if(document.getElementById('phonec').value != ''){
            forward += 1;
          }
          // if(document.getElementById('whyjoin').value != ''){
          //   forward += 1;
          // }

          console.log(forward);
          if(forward === 5){

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
    // $.ajax({
    //         type: 'post',

    //         url: 'https://solutions.geniusu.com/masterclass/remote/webinar/asia/live/form_data.php',
    //         data: $('form').serialize(),

    //       });



          $.ajax({
            type: 'post',
            url: 'https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/sf/sfsubscribe-reg2.php',
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

console.log('asds:'+data1);
$.ajax({
            type: 'post',
            url: 'https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/sf/sfsubscribe-webinar-attended.php',
            data: "id="+data1,
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
    <title>Scale Up Entrepreneurs Masterclass</title>
 
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/iceberg.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>

<?php
  header("refresh:$date_diffe;url=https://solutions.geniusu.com/masterclass/digital/webinar/asia/live/?sfid=".$sfid);
?>
 <meta property="fb:app_id" content="935674760289019" />
  <link rel="stylesheet" href="../css/TimeCircles.css" />
 <meta property="og:url" content="https://solutions.geniusu.com/masterclass/digital/webinar/asia/live/" />
  <meta property="og:image" content="https://solutions.geniusu.com/masterclass/digital/webinar/asia/live/img/share.jpg" />
  <meta property="og:type" content="Website" />
  <meta property="og:title"
    content="Scale Up Entrepreneurs Masterclass" />
  <meta property="og:description"
    content="  3 Steps to Build a Million Dollar Customer Pathway." />

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
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-5220882-34', 'auto');
    ga('send', 'pageview');
  </script>


<!-- Hotjar Tracking Code for https://crisis.geniusu.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1782928,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
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


<!-- ManyChat -->
<script src="//widget.manychat.com/352241224948686.js" async="async"></script>



  </head>
  <body>




<div style="background: #15264C">
  <div class="row rowl" data-equalizer>
    <div class="medium-6 columns medium-text-left text-center" data-equalizer-watch>

        <img  src="../img/gu_logo_white.png" style="width: 100%;max-width: 120px;">
              </div>


</div>
</div>

<div class="backnew">
   <div class="row  "  data-equalizer>

 <div class="medium-9 medium-centered  large-6 large-push-3 rown columns  text-center" data-equalizer-watch>



      <h4><b class="white">Scale Up Entrepreneurs Masterclass</b></h4>
        <h6 class="white"><b>3 Steps to Build a </br> Million Dollar Customer Pathway</b>
        </h6>
        <p class="grntxt"><b>FREE 60 minute “How to” Masterclass <br class="hide-for-small-only">on Thursday, July 29, 2021 </b><br>
          <b class="white"> 9am UK / 4pm SGT / 6pm AEST</b></p>

        <center>
<a href=<?php echo "https://calendar.google.com/calendar/r/eventedit?text=Scale+Up+Entrepreneurs+Masterclass&dates=20210729T080000Z/20210729T093000Z&details=For+details,+link+here:+https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=".$sfid."&location=https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=".$sfid; ?>
                  target="_blank" class="orgbutton button"
                  style="border-radius: 5px;max-width: 200px;padding: 5px 10px;font-size: 16px;width: 100%;"><img
                    src="../img/cal.svg">
                  Add to Calendar</a>
        </center>

         <div class="DateCountdown" data-date="2021/07/29 16:00:00 GMT+8"></div>

        <center>
          <p class="white" style="">
            <b>If the page doesn't load at 4pm SGT, use the below option to&nbsp;manually&nbsp;reload.</b> </p>
          <a href="index.php?sfid=<?php echo($sfid);?>" class="orgbutton button"
            style="    max-width: 251px;    padding: 10px 10px;font-size: 16px;"> Click here to load live page</a>

        </center>





</center>
</div>

      </div>
    </div>


      <div style="background: rgb(20, 57, 89);">

      <div class="row rowl">
        <div class="small-12 center columns">

        <a href="http://geniusu.com/privacy"><font color="white">Privacy Policy</font></a>
      </div>
      </div>
    </div>


   <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
  <script src="../js/timer.js"></script>


  <script type="text/javascript" src="../js/TimeCircles.js"></script>

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
  header('Location: https://solutions.geniusu.com/scaleup/digital/webinar/asia/');
}
?>
