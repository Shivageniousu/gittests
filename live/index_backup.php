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
$sfid='';
if (isset($_REQUEST['sfid']) && $_REQUEST['sfid']!= '') {

    $sfid = $_REQUEST['sfid'];
   
   if (strlen($sfid > 7)) {
  # code...
  $_SESSION['id'] = $sfid;
}

$my_file = 'crisis_asia_att.txt';
$handle = fopen($my_file, 'a');

if($handle)
{

$data = "\n". $sfid;
fwrite($handle, $data);
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crisis Leadership Academy Launch</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">

  <link rel="stylesheet" href="css/TimeCircles.css" />
  <link rel="stylesheet" href="css/mb-comingsoon-iceberg.css">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" defer></script>


    <meta property="fb:app_id" content="280870906261692" />
  
  <meta property="og:url" content="https://crisis.geniusu.com/webinar/asia/live/" />
  <meta property="og:image" content="https://crisis.geniusu.com/webinar/asia/live/img/share.jpg" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="Crisis Leadership Academy Launch" />
  <meta property="og:description"
    content="Build a digital business rapidly with revenues to lead you out of the crisis. Apply for a place in the Crisis Leadership Academy, launching May 18th. " />
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
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1782928,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

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


<script type="text/javascript">
    function myFunction(){

$("#ld").show();

    console.log('myFunction Called');
        
// var newVal = '<fb:comments href="http://example.com/some/' + value + '" num_posts="20" width="500"></fb:comments><div id="fb-root"></div>';

 $('#fbc').removeAttr("data-href");
$('#fbc').attr("data-href","https://www.cowin2020.com/");

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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=280870906261692&autoLogAppEvents=1"></script>



  

<div style="background: #15264C">
  <div class="row rowl" data-equalizer>
    <div class="medium-12 columns text-center" data-equalizer-watch>
      
        <img  src="img/gu_logo_white.png" style="width: 100%;max-width: 120px;">
              </div>
    
    
</div>
</div>

   <div class="row rown " style="max-width: 70em;" >
       

      <div class="medium-12 columns"  >
    
    <center> 
  <h2 class="bluetxt"><b>Crisis Leadership 2020</b></h2>
          
            <p class="grntxt"><b>April Webinar with Roger James Hamilton </b>
</p>
</center>




<div class="row ty_page">
  <div class="large-8 columns">
    <div class="center">

     <!--  <img src="img/webinar_holding.jpg" style="width: 100%;"> -->

<div class="responsive-embed widescreen" id="m-video">

  <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.8); "><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="https://fast.wistia.net/embed/iframe/xcdd4c0bk6?seo=false&videoFoam=true&autoplay=true&playbar=false&fullscreenButton=false&volume=1"  title="Wistia video player" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed"  width="100%" height="100%"></iframe></div></div>
<script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>



   </div>


 </div>
  </div>
  <div class="large-4 columns">
    <span class="show-for-small-only"><br/></span>
    <a id="fbcref"><p style="margin-bottom: 0px;font-weight:bold;font-style: italic;color: #385898;"><!-- <span class="fb-comments-count" id="fbc" data-href="https://www.cowin2020.com/"></span> --> Click here to load new comments  &nbsp; <img src="img/arrow.png" style="width:100%;max-width:25px;">&nbsp; &nbsp;<img src="img/loading.gif" id="ld" style="width:30px;"></p></a>
    <div class="sp_fb_wid">

     <div class="fb-comments" id="fb1" data-href="https://crisis.geniusu.com/webinar/" data-width="100" data-numposts="5" data-order-by="reverse_time"></div>

    </div>
  </div>
</div>
      </div>
   </div>


   <div class="bg6">
  <div class="row rowl">
    <div class="small-12 center columns">
      <h2 class="white"  style="margin-bottom: 0px;"><b> Useful Resources </b></h2>
    </div>
  </div>
</div>

  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-10 large-centered columns">
      <center>
      <img src="img/arrow_blue.png" style="width: 100%;max-width: 80px;padding-bottom: 20px;"> 
    </center>
    <div class="row " style="padding-top: 30px;"  data-equalizer> 
      <div class="medium-6 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
        <img src="img/webinar_slides.jpg" style="width: 100%;">
        </div>
      </div>
      <div class="medium-6 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
           <span class="show-for-small-only"><br/></span>
           <div class="medium-text-left text-center">
          <h4 class="grntxt" style="margin-bottom: 0px"><b>Step 1.</b></h4>
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
          <div class="medium-text-left text-center">
            <span class="show-for-small-only"><br/></span>
          <h5 class="white" style="margin-bottom: 0px;"><b>Crisis Leadership Academy Launch</b></h5>
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
      <div class="row rown "  style="padding-bottom: 0px;">
       
        <div class="medium-8 large-6 rowm medium-text-left text-center  columns ">
          <h3 class="grntxt"><b>Step 2.</b></h3>
           <h3 class=" white" style="font-weight:bold;">Are you ready to turn this crisis into the opportunity of the century?
              </h3>

           <p class="white"><b>Apply for a place in the Crisis Leadership Academy, launching May 18th. Build a digital business rapidly with revenues to lead you out of the crisis.
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



  <div class="bg1">
    <div class="row rown">
      <div class="small-12 medium-10  medium-centered columns">
        <h2 class="grntxt center rowl"><b>Join the Crisis Leadership Academy </b></h2>
        <div class="large-9 large-centered columns">
        <p class="white " >On May 18th Genius Group is launching the very first Crisis Leadership Academy, and we’re inviting you to be one of the first 200 to take part. 
        </p>
        <p class="white " >
The Crisis Leadership Academy is a four week online Microschool to train freelancers, startups and large enterprises to pivot their business to digital products and remote revenues. We are bringing our best faculty members and accelerator programs, iLab and Wealth Dynamics Masters, to you for the  first time to lead you out of the crisis. 
</p>
        <p class="white " >Join us today to reset, restructure and relaunch your company as a digital business. It's time to turn this crisis into your greatest opportunity.
</p>
        
        <div class="center rowl">
          <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
        </div>

      </div>
      </div>
    </div>
  </div>

  <div class="row" style="padding-top: 0px;">
    <div class="small-10 medium-12 large-11 small-centered center columns">
      
      <img src="img/arrow_blue.png" style="width: 100%;max-width: 80px;padding-bottom: 30px;"> 

      <h2 class="bluetxt"><b>The Crisis Leadership Academy Faculty</b></h2>

      <p>Over four weeks you will be learning cutting edge strategies in high impact branding, product design & pricing, digital marketing, remote sales and global community tailored to your business from a world class faculty. Each Faculty Member has hand-on experience in running multi-million dollar promotions in their own business.</p>

      <div class="row small-up-2 medium-up-3 large-up-4 flex__row--center-flex-start facu">
        <div class="columns">
          <a data-open="fac1">
          <img src="img/roger.png" style="">
          <p class="hd1"><b>ROGER JAMES HAMILTON</b> <Br/> Digital Business Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac2">
          <img src="img/sandra.png" style="">
          <p class="hd1"><b>SANDRA MORRELL</b> <Br/> Finance & Financing Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac3">
          <img src="img/michelle.png" style="">
          <p class="hd1"><b>MICHELLE CLARKE</b> <Br/> Sales & Partnership Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac4">
          <img src="img/suraj.png" style="">
          <p class="hd1"><b>SURAJ NAIK</b> <Br/> Digital Marketing Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac5">
          <img src="img/donna.png" style="">
          <p class="hd1"><b>DONNA IZOBELLA</b> <Br/> Entrepreneur Mindset Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac6">
          <img src="img/paul.png" style="">
          <p class="hd1"><b>PAUL DUNN</b> <Br/> Purpose & Mission Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac7">
          <img src="img/radhka.png" style="">
          <p class="hd1"><b>RADKA DOHNOLOVA</b> <Br/> Leadership & Team Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac8">
          <img src="img/tamamo.png" style="">
          <p class="hd1"><b>TAMAMI USHIKI</b> <Br/> Digital SYstems Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac9">
          <img src="img/pat.png" style="">
          <p class="hd1"><b>PATCHANAN KHONGWANITKITJAROEN</b> <Br/> Genius Education Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac10">
          <img src="img/laura.png" style="">
          <p class="hd1"><b>LAURA HARTLEY</b> <Br/> Recruitment & Talent Mentor</p>
          </a>
        </div>
        <div class="columns">
          <a data-open="fac11">
          <img src="img/scott.png" style="">
          <p class="hd1"><b>SCOTT PICKEN</b> <Br/> Digital Investing Mentor</p>
          </a>
        </div>

      </div>  

  </div>
</div>

<div class="bg_b">
    <div class="row rown" >
    <div class="small-12 large-10 large-centered columns">
      <h2 class="center grntxt"><b>Five reasons to join the Crisis Leadership Academy today</b></h2>
     

           <div class="row rowl">
            <div class="small-3 center columns">
              <img src="img/1.png" style="width:100%;max-width:85px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class="white">Generate between $10,000 and $100,000 per week by creating both a long term plan for financial stability and a short term strategy for immediate cash generation. </p>
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
              <p class="white">Work with your own dedicated facilitator and expert faculty mentors to set up a business model that ensures you are crisis proof and ready for the opportunity of the century.  </p>
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
              <p class="white"> Get in front of 1.4M entrepreneurs on our GeniusU platform, with your own store and a suite of crisis ready products. </p>
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
              <p class="white"> Get free access to the Crisis Leadership Academy microdegree following the Microschool so you can refer back to the content as you experience cash flow stability and growth in the coming months.  </p>
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
              <p class="white"> Be connected to over 20,000 Crisis Leadership Academy alumni who will have attended the accelerator and are creating opportunities, connections and providing resources for each other as part of our trusted community </p>
            </div>
            <div class="show-for-large large-2 columns">
              &nbsp;
            </div>
          </div>

           <div class="center " style="padding-bottom: 20px;">
          <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
        </div>
         
            

    </div>
  </div>
</div>



  <div class="row rown" >
    <div class="small-10 medium-12 large-11 small-centered columns">
      <h2 class="grntxt center"><b>GeniusU is launching three streams of the Crisis Leadership Accelerator Series, for three levels of entrepreneur:</b></h2>
   
   <div class="row rowl small-up-1 large-up-3 bg6y center">
     <div class="columns rowl">
       <img src="img/df.jpg" style="width: 100%;">
       <div class="redbg">
         <h5 class="white"><b>DIGITAL FREELANCE</b></h5>
       </div>
       <p class="redtxt rowm"><b>4 week microschool</b><Br/>Generate up to $10K / month in new cash flow personally in crisis&nbsp;times</p>
     </div>
     <div class="columns rowl">
       <img src="img/ds.jpg" style="width: 100%;">
       <div class="yelbg">
         <h5 class="white"><b>DIGITAL STARTUP</b></h5>
       </div>
       <p class="yeltxt rowm"><b>4 week microschool</b><Br/>Pivot your startup to $10K+ / month in new remote sales in crisis&nbsp;times</p>
     </div>
     <div class="columns rowl">
       <img src="img/de.jpg" style="width: 100%;">
       <div class="grnbg">
         <h5 class="white"><b>DIGITAL ENTERPRISE</b></h5>
       </div>
       <p class="grntxt rowm"><b>4 week microschool</b><Br/>Pivot your team to $100K+ / month in new business in crisis&nbsp;times</p>
     </div>
   </div>

   <p class="bluetxt center large-11 large-centered"><B>The Crisis Leadership Pathway provides each entrepreneur with a full crisis leadership solution to support them at the level they need throughout the 4 week program and beyond.</B></p>
  <center>
   <img src="img/table_1.jpg" style="width: 100%; ">

   <img src="img/arow_white.png" style="width: 100%;max-width: 80px;" class="rowm rowl">
 </center>
  </div>
</div>



<div class="bg8">
  <div class="row rown">
    <div class="small-12 large-10 large-centered center rowl columns">
      <h3 class="white"><b>Apply to be one of the first 100 members of the Crisis Leadership Academy before May 16th</b></h3>
      <div class="center rowm">
          <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
        </div>
    </div>
  </div>
</div>


<hr style="width: 100%;max-width: 100%;margin:0">

    <div class="row rown" >
    <div class="large-11 large-centered rowl rowm columns">
    <div class="medium-2 columns text-center" style="padding: 0px;">
      <img src="img/roger_hamilton_letter.png" class="rowl" style="width:100%;max-width:135px;">

    </div>

    <div class="medium-10 large-9   columns" style="padding-left:1vw;padding-right:1vw;" style="text-align: justify;
    text-justify: inter-word;">
      <!-- <p><b>Dear Entrepreneur, </b></p> -->
      <p>We are living in unprecedented times.  We are currently living through the immediate impact of the coronavirus crisis, and we are heading into what experts are predicting to be the greatest financial crash in history. 
</p>
      <p>If you are like most of the entrepreneurs in our global community, you will be feeling the financial affects of the coronavirus . If you do not  have a digital business generating remote sales and cashflow, you will be facing an uncertain future.
</p>
      <p>
Even worse, you realise you need to fix the short term business challenge while keeping an eyeon the upcoming opportunities. Because it is always in the times of greatest crisis that lie the opportunities of a lifetime.
</p>
      <p>
This is why we are launching the Crisis Leadership Academy. 
</p>
      <p>
We have had over a decade of experience empowering entrepreneurs of all levels to pivot their business to suit the times. We have now taken our signature programs run at our entrepreneur resorts, iLab and Wealth Dynamics, and we have upgraded them to address the unique  challenges of this crisis. We are now delivering these programs digitally and globally  for the first time in the Crisis Leadership Academy. 
</p>
<p>When you join us, you will experience a tailored approach to create a brand new digital pathway for your business. Whether you are a one-person freelancer, a startup with a small team or an enterprise with hundreds of staff, we have a program that will deliver you the results you want and need to lead you out of the crisis.</p>
<p>For as little as one to two hours each day, you will have the guidance of the mentors as well as the support of your facilitator to implement a full plan from zero to a fully operating digital cash-generating  pathway by the end of the four weeks.</p>
<p>We're bringing on board our first 100 participants now, for our May 18th launch date. So apply today, I wish you all the best in your application and I look forward to working with you!</p>

      <img src="img/RH-logo-big.png" class="rowl" style="width:100%;max-width:200px;">
  </div>

  <div class="large-1 columns show-for-large">
    &nbsp;
  </div>
    </div>

  </div>

  <div class="bg6">
    <div class="row rown">
      <div class="medium-11 large-8 medium-centered center columns"> 
        <img src="img/grace.png" style="width: 100%;max-width: 120px;" class="rowl">
        <h3 class="grntxt"><b><i>“Finding the leaders of the future is a question of recognizing those people who give leadership in a crisis.”</i></b></h3>
        <h5 class="white"><b><i> Grace Lee Boggs </i></b></h5>
      </div>
    </div>
  </div>

    

  <div class="row rown" >
    <div class="small-12 large-11 large-centered  columns">
    <h2 class="grntxt center rowm"><b>What is the Crisis Leadership Academy</b></h2>
    
    <p class="center large-9 large-centered"><b>The Crisis Leadership Academy is a 4 week accelerator program with personal guidance and mentoring to deliver you a digital business to lead you out of the crisis.</b></p>

    <div class="row">
      <div class="large-9 large-centered columns">

    <div class="row rown " style="padding-bottom: 0px;">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">1</span>
      </div>
      <div class="small-10 columns">
        <p><b class="bluetxt">Four weeks of expert guidance </b> <br/> Genius Group is the world’s No.1 entrepreneur education group, and it has packaged it’s top entrepreneur curriculum and faculty online into a high impact, four week academy to deliver the guidance and direction for entrepreneurs to lead through these crisis times.</p>
        
      </div>
    </div>
    <center>
        <img src="img/cl_1.jpg" style="width: 100%;max-width: 400px;padding-bottom: 20px;">
        </center>

      <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">2</span>
      </div>
      <div class="small-10 columns">
        <p><b class="bluetxt">Three streams in one series</b><br/> Within the Crisis Leadership Academy there are three microschool levels to support individuals seeking up to $10k / mth online, startups seeking $10k+ / mth in new digital sales and larger enterprises seeking $100k+ in new monthly sales.</p>
        
      </div>
    </div>

    <center>
        <img src="img/cl_2.jpg" style="width: 100%;max-width: 360px;padding-bottom: 20px;">
        </center>

     <hr class="hr1">

      <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">3</span>
      </div>
      <div class="small-8  columns">
        <p><b class="bluetxt">A powerful, profitable step-by-step course </b><br/>The course is delivered over four weeks with three live mentor sessions, two implementation days and a Q&A forum each week. Each student has their own personal facilitator to guide them to clear deliverables and to secure their results.</p>
      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/cl_3.jpg" style="width: 100%;max-width: 90px;">
      </div>
    </div>

     <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">4</span>
      </div>
      <div class="small-10 columns">
        <p><b class="bluetxt">An affordable, critical investment </b><br/> The time investment between the mentoring and coursework is between 1 to 2 hours each day. The microschool cost is $1,495 and provides full guidance from our expert faculty. There is also a microcourse option at $295 which gives access to the content but not the live interaction and&nbsp;mentoring.</p>
        
      </div>

    </div>

    <center>
        <img src="img/cl_4.jpg" style="width: 100%;max-width: 300px;">
        </center>


        <h5 class="bluetxt  large-10 large-centered center rowl" style="padding-top: 40px;"><b>Apply to join the Crisis Leadership Academy</b></h5>

         <div class="center rowl">
          <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
        </div>
</div>
</div>
</div>
</div>

<div class="bg7">
  <div class="row rown">
    <div class="small-12 center columns">
      <h2 class="white"><b>Steps to take</b></h2>
      <h3 class="grntxt"><b>STEP ONE: <span class="white">APPLY AND JOIN</span></b></h3>
    </div>
  </div>
</div>

  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-10    large-centered columns">
      <center>
      <img src="img/arrow_blue.png" style="width: 100%;max-width: 80px;"> 
    </center>

     <div class="row rown"  style="padding-bottom: 0px;" data-equalizer>
      
      <div class="medium-9 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <div class="show-for-small-only center">
          <img src="img/s_1.jpg" style="width: 100%;max-width: 150px;padding-bottom: 20px;">
          </div>

          <p>On receiving your application, you will be invited to a call with one of our specially trained Genius Igniters, where we will take you through a process to define which of the 3 series you should be joining, based on the results you need to achieve in the next 3 months.
          </p>
          <p> You will then be invited to an orientation call with your own facilitator where you will get focused on the key outcomes you want to achieve during the 4 weeks and where you feel you will need the most support.
          </p>
          <p> Then you will be invited to join our exclusive community of Crisis leadership academy students where you can connect, share opportunities, resources and&nbsp;learning.</p>
        </div>
      </div>
      <div class="hide-for-small-only">
      <div class="medium-3 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <center>
          <img src="img/s_1.jpg" style="width: 100%;max-width: 200px;">
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
      <h3 class="grntxt"><b>STEP TWO: <span class="white">LEARN AND CREATE</span></b></h3>
    </div>
  </div>
</div>

  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-11    large-centered columns">
      <center>
      <img src="img/arrow_blue.png" style="width: 100%;max-width: 80px;"> 
    </center>

     <div class="row rown"  style="padding-bottom: 0px;" data-equalizer>
      
      <div class="medium-8 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <div class="show-for-small-only center">
          <img src="img/s_2.jpg" style="width: 100%;max-width: 270px;padding-bottom: 20px;">
          </div>

          <p>You will get access to full four week Microschool calendar. This includes three live Mentor sessions per week on Monday, Wednesday and Friday, linked by two implementation days where you put into action the key steps covered to build your digital business.</p>
          <p>The course runs from May 18th to June 17th, and with an investment of one to two hours each day you will have a fully operating cash-generating digital pathway built in four weeks.</p>
          <p>We also provide you with all the tools to set up your digital products and services, remote team, community and payment gateway so you get all the tools as well as know-how to succeed.</p>
        </div>
      </div>
      <div class="hide-for-small-only">
      <div class="medium-4 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <center>
          <img src="img/s_2.jpg" style="width: 100%;max-width: 270px;">
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
      <h3 class="grntxt"><b>STEP THREE: <span class="white">GENERATE GUARANTEED REVENUES</span></b></h3>
    </div>
  </div>
</div>

  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-11 large-centered columns">
      <center>
      <img src="img/arrow_blue.png" style="width: 100%;max-width: 80px;"> 
    </center>
   
    
    <div class="row rown"  style="padding-bottom: 0px;" data-equalizer>
      
      <div class="medium-7 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <div class="show-for-small-only center">
          <img src="img/s_3.jpg" style="width: 100%;max-width: 300px;padding-bottom: 20px;">
          </div>

          <p>We will also show you how to put your products online and how to build a deep  trusted community that want to do business with you.</p>
          <p>Whilst completing the accelerator, you will begin making revenues and cash flow during the accelerator programme.</p>
          <p>After the course completes, all program steps, course materials and the global community remaining open and accessible throughout the year.</p>
        </div>
      </div>
      <div class="hide-for-small-only">
      <div class="medium-5 columns out-vc" data-equalizer-watch>
        <div class="in-vc">
          <center>
          <img src="img/s_3.jpg" style="width: 100%;max-width: 300px;">
          </center>
        </div>
      </div>
    </div>

    </div>


    </div>
  </div>


<div class="bg3">
  <div class="row rown">
    <div class="small-12 rowl large-10 large-centered center columns">
      <h3 class="white "><b>Spaces are limited. Apply today.</b></h3>
      <div class="center rowm">
          <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
        </div>
    </div>
  </div>
</div>

    <div class="row rown">
      <div class="small-11 medium-10 small-centered large-10   columns">
           <h2 class="grntxt center" style="padding-top: 10px;"> <b>Who should join? </b></h2>
           <p class="bluetxt center"><b>The Crisis Leadership Academy Faculty is for you if:</b></p>

           <div class="row ">
            <div class="large-9 large-centered columns">

          <div class="row rowl">
            <div class="small-3 large-4 center columns">
              <img src="img/t_1.jpg" style="width:100%;max-width:90px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class=""> You had a successful business prior to the Coronavirus Crisis, that was generating $100K+ per month but now your previous model is no longer working and you have seen a sudden decline in your revenues.  </p>
            </div>
            <div class="large-1 columns show-for-large">
              &nbsp;
            </div>
          </div>

          <div class="row rowl">
            <div class="small-3 large-4 center columns">
              <img src="img/t_2.jpg" style="width:100%;max-width:90px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class=""> You had a start up that was growing and generating $20-100k per month but your products are not creating the attraction they were pre Crisis and you need to pivot your&nbsp;offering.  </p>
            </div>
            <div class="large-1 columns show-for-large">
              &nbsp;
            </div>
          </div>

          <div class="row rowl">
            <div class="small-3 large-4 center columns">
              <img src="img/t_3.jpg" style="width:100%;max-width:90px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class="">You need to create a new way of generating income as you have lost your previous job or method of income and want to take advantage to start a business now allowing you to generate up to $10k per month. </p>
            </div>
            <div class="large-1 columns show-for-large">
              &nbsp;
            </div>
          </div>

          <div class="row rowl">
            <div class="small-3 large-4 center columns">
              <img src="img/t_4.jpg" style="width:100%;max-width:90px;float: right;">
            </div>
            <div class="small-9 large-7 columns">
              <p class=""> You have spotted an opportunity in the market and need help to design the business model and products at speed to get it launched.  </p>
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
    <div class="small-12 rowl large-10 large-centered center columns">
      <h3 class="white "><b>Spaces are limited. Apply today.</b></h3>
      <div class="center rowm">
          <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
        </div>
    </div>
  </div>
</div>


 <div class="row rown" >
    <div class="small-12 large-11 large-centered  columns">
    <h2 class="bluetxt center rowm"><b>What’s included when you join - Over $5,500 worth of products</b></h2>
    
    <p class="center large-6 large-centered"><b>Here’s what you get when you are accepted into the Crisis Leadership Academy</b></p>

    <div class="row">
      <div class="large-9 large-centered columns">

    <div class="row rown " style="padding-bottom: 0px;">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">1</span>
      </div>
      <div class="small-10 columns">
        <p><b class="bluetxt">The 4 week live and interactive Microschool</b><br/> <span class="org"> valued at $2495 </span><br/> The 4 week accelerator based upon your earnings and revenue levels now, what they were at before the crisis started and where you want them to be back at.</p>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>Full access to the live programmes every Monday, Wednesday and Friday with implementation time built in on Tuesdays and&nbsp;Thursdays. </p>
          </div>
        </div>
        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>Access to the Faculty of experts within our closed GeniusU Circle where you can post questions, share ideas and strategies that are&nbsp;working. </p>
          </div>
        </div>
        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>All three levels will connect each Monday with Roger, and then follow a stream of mentors and implementation through the week. </p>
          </div>
        </div>
        
          <center>
        <img src="img/img_99.jpg" style="width: 100%;max-width: 550px;padding-bottom: 20px;">
        </center>

 
      </div>
    </div>
  

      <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">2</span>
      </div>
      <div class="small-10 columns">
        <p><b class="bluetxt">Full GeniusU Mentor Status </b> <span class="org"> - valued at $970</span><br/> Ability to connect with over 1.4 million members looking for help and guidance and to be promoted by “Genie” with your own 5 star ratings and reviews. You can:</p>
        
        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>Set up your community circles to build quality leads and trust. </p>
          </div>
        </div>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>Create your own paid Microcourses and Microschools on GeniusU.</p>
          </div>
        </div>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>Set up, host and run your own events, both virtually and in real&nbsp;time. </p>
          </div>
        </div>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p> Share your opportunities with all of the the other members on&nbsp;GeniusU.</p>
          </div>
        </div>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>Place your products and services for sale on the GeniusU&nbsp;webstore.</p>
          </div>
        </div>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>Earn affiliate commissions and track your earnings on a personalised dashboard</p>
          </div>
        </div>

        <center>
        <img src="img/emc.jpg" style="width: 100%;max-width: 550px;padding-bottom: 20px;">
        </center>


      </div>
    </div>

    <hr class="hr1">

      <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">3</span>
      </div>
      <div class="small-8  columns">
        <p><b class="bluetxt">Genius Entrepreneur Mastermind - </b> <span class="org">Valued at $970</span><br/> A full year on the Genius Entrepreneur Mastermind programme run by Roger James Hamilton.</p>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>A monthly mastermind of 11 calls to learn from some of the top entrepreneurs in our network </p>
          </div>
        </div>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>You can ask Roger direct questions which he answers once a month in a value packed recording! </p>
          </div>
        </div>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>Access the full back catalogue of recordings. </p>
          </div>
        </div>

        <div class="row ">
          <div class="small-1  columns" style="padding: 0px;">
            <img src="img/green_tick.png" style="width: 100%;max-width: 15px;float: right;padding-top: 8px;">
          </div>
          <div class="small-11 columns">
            <p>A community of over 2000 entrepreneurs to support your growth and share opportunities with.</p>
          </div>
        </div>
      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/gem_logo.jpg" style="width: 100%;max-width: 100px;">
      </div>
    </div>

    <hr class="hr1">

      <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">4</span>
      </div>
      <div class="small-8  columns">
        <p><b class="bluetxt">The 4 weeks Crisis Leadership Academy Microcourse </b> <br/><span class="org"> valued at $495</span><br/> The 4 week accelerator content based upon your earnings and revenue levels now, what they were at before the crisis started and where you want them to be back at.</p>
        <p> Full access to the recordings of the Microschool, created as a Microcourse within a GeniusU.</p>

      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/screen.jpg" style="width: 100%;max-width: 130px;">
      </div>
    </div>

    <hr class="hr1">

      <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">5</span>
      </div>
      <div class="small-8  columns">
        <p><b class="bluetxt">The Impact Test -</b> <span class="org"> Valued at $37 </span><br/>We will send you an invite to take the Impact Test for free. You will learn your entrepreneur level, your company's impact level, and the steps to take to 10x your income and impact in 2020.</p>

      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/impact_1.jpg" style="width: 100%;max-width: 90px;">
      </div>
    </div>

    <hr class="hr1">

      <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">6</span>
      </div>
      <div class="small-8 large-7  columns">
        <p><b class="bluetxt">Entrepreneur Dynamics Microdegree with Roger&nbsp;James&nbsp;Hamilton - </b> <span class="org">Valued at $300</span><br/> We will send you a course that will show you the next steps to take based on your entrepreneur and impact level.</p>

      </div>
      <div class="large-1 show-for-large columns">
        &nbsp;
      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/roger_phone.jpg" style="width: 100%;max-width: 80px;">
      </div>
    </div>

    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">7</span>
      </div>
      <div class="small-10 columns">
        <p><b class="bluetxt">Two tokens to take the upgraded 2020 Wealth Dynamics or Talent Dynamics Tests - </b> <span class="org">Valued at $194</span> Take the World's No.1 Entrepreneur Profiling Tool, now fully shareable, integrated, and mobile-friendly on GeniusU and gift a token to a friend or colleague.</p>
        <img src="img/wd_new.jpg" style="width: 100%;max-width: 400px;padding-bottom: 20px;">

      </div>
    </div>
    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">8</span>
      </div>
      <div class="small-8  columns">
        <p><b class="bluetxt">Brand New Entrepreneur Dynamics Special Reports </b> <span class="org">Valued at $100+</span><br/> Receive all of the special reports on agile leadership, teams, sales, recruitment, investing and more to show you your natural path based on your profile, as they come&nbsp;online.</p>

      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/ed_comp.jpg" style="width: 100%;max-width: 130px;">
      </div>
    </div>

  </div>
</div>

<h4 class="center" style="padding-top: 10px;"><b>CRISIS LEADERSHIP ACADEMY</b></h4>
<h3 class="center"><b>Apply Now: $1,495</b></h3>
<h4 class="center">Normal Rate: <strike>$4,995</strike> <Br/>Save $3,500</h3>

   <div class="center rowl">
          <a href="#reg_form" class="orgbutton button" style="margin: 0"> Apply Now</a>
        </div>

</div>
</div>

<div class="bg6">
  <div class="row rown">
    <div class="small-12 center columns">
      <h2 class="grntxt"><b>Crisis Leadership Budget Option</b></h2>
      <p class="white large-7 large-centered " style="margin-bottom: 0px;">For those on a tight budget who need this training to launch a digital business, take the content-only Microcourse for just $295.</p>
    </div>
  </div>
</div>

<div style="background: #F1F1F1">
  <div class="row rown" style="padding-top: 0px;">
    <div class="small-12 large-11 large-centered columns">
      <center>
      <img src="img/arrow_blue.png" style="width: 100%;max-width: 80px;padding-bottom: 30px;"> 
    
      

      <p class="large-11 large-centered">As many entrepreneurs and employees are facing extreme hardship during the crisis, we have also provided a low cost option to benefit from the Crisis Leadership Academy. The content-only Microcourse does not include the same level of guidance and community to ensure you get the results. But it does include access to the course material over the four weeks, together with the following:
    </p>
    </center>

    <div class="row">
      <div class="large-9 large-centered columns">

    
      <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">1</span>
      </div>
      <div class="small-8  columns">
        <p><b class="bluetxt">The 4 weeks Crisis Leadership Academy Microcourse </b> <br/><span class="org"> valued at $495</span><br/> The 4 week accelerator content based upon your earnings and revenue levels now, what they were at before the crisis started and where you want them to be back at.</p>
        <p> Full access to the recordings of the Microschool, created as a Microcourse within a GeniusU.</p>

      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/screen_1.png" style="width: 100%;max-width: 130px;">
      </div>
    </div>

    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">2</span>
      </div>
      <div class="small-10 columns">
        <p><b class="bluetxt">30 Minute Personalised strategy call -</b> <span class="org"> Valued at $290</span><br/>
The course comes with a personalized call where you get clear direction from our team of Genius Igniters on the next step to take right now based on your current situation.</p>
        <img src="img/call.jpg" style="width: 100%;max-width: 400px;padding-bottom: 20px;">

      </div>
    </div>

    <hr class="hr1">

      <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">3</span>
      </div>
      <div class="small-8  columns">
        <p><b class="bluetxt">The Impact Test -</b> <span class="org"> Valued at $37 </span><br/>We will send you an invite to take the Impact Test for free. You will learn your entrepreneur level, your company's impact level, and the steps to take to 10x your income and impact in 2020.</p>

      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/impact_11.png" style="width: 100%;max-width: 90px;">
      </div>
    </div>

    <hr class="hr1">

      <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">4</span>
      </div>
      <div class="small-8 large-7  columns">
        <p><b class="bluetxt">Entrepreneur Dynamics Microdegree with Roger&nbsp;James&nbsp;Hamilton - </b> <span class="org">Valued at $300</span><br/> We will send you a course that will show you the next steps to take based on your entrepreneur and impact level.</p>

      </div>
      <div class="large-1 show-for-large columns">
        &nbsp;
      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/roger_phone_1.png" style="width: 100%;max-width: 80px;">
      </div>
    </div>

    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">5</span>
      </div>
      <div class="small-10 columns">
        <p><b class="bluetxt">Two tokens to take the upgraded 2020 Wealth Dynamics or Talent Dynamics Tests - </b> <span class="org">Valued at $194</span> Take the World's No.1 Entrepreneur Profiling Tool, now fully shareable, integrated, and mobile-friendly on GeniusU and gift a token to a friend or colleague.</p>
        <img src="img/wd_new.jpg" style="width: 100%;max-width: 400px;padding-bottom: 20px;">

      </div>
    </div>
    <hr class="hr1">

    <div class="row rowm ">
      <div class="small-2 center columns">
        <span class="badge size-30" style="float: right;">6</span>
      </div>
      <div class="small-8  columns">
        <p><b class="bluetxt">Brand New Entrepreneur Dynamics Special Reports </b> <span class="org">Valued at $100+</span><br/> Receive all of the special reports on agile leadership, teams, sales, recruitment, investing and more to show you your natural path based on your profile, as they come&nbsp;online.</p>

      </div>
      <div class="small-2 columns" style="padding: 0px;">
        <img src="img/ed_comp_1.png" style="width: 100%;max-width: 130px;">
      </div>
    </div>

  </div>
</div>

<h5 class="center" style="padding-top: 10px;"><b>CRISIS LEADERSHIP ACADEMY MICROCOURSE</b></h5>
<h4 class="center"><b>Apply Now: $295</b></h3>
<h5 class="center">Full value:  <strike>$1,126 </strike> <Br/>Save $831</h5>

   <div class="center " style="margin-bottom: 10px;">
          <a href="https://www.geniusu.com/store/products/298" class="org" style="font-style: italic;text-decoration: underline;" target="_blank"> Apply here for the Microcourse</a>
        </div>

  

    </div>
  </div>
  </div>


   <div class="row rown">

    <div class="small-9 medium-12 large-10 small-centered columns">
      <div class="row">
        <div class="medium-12 large-8 large-push-4 columns">
           <h5 class="grntxt" style=""><b>ABOUT</b></h5>
           <img src="img/gu_logo.png" style="width: 100%;max-width: 200px;">
        </div>
      </div>
      <div class="row " data-equalizer>
        <div class="medium-4 out-vc columns center" style="" data-equalizer-watch>
          <div class="in-vc">
            <div class="rowl center">
             
            <img class="row__section2__iphone " src="img/iphone1.png" style="width: 100%;max-width: 200px;" />
            </div>
          </div>
        </div>
        <div class="medium-8 out-vc columns " style="" data-equalizer-watch>
          <div class="in-vc">
           
            <p>GeniusU is a web and mobile platform which connects over 1,400,000+ entrepreneurs to the right network, knowledge and opportunities based on their personal values, vision, passions, talents, and purpose.</p>
            <p> GeniusU's A.I. Genies give personalized recommendations on who to meet, how to upskill, where to go and what to do based on their stage of business growth, global location and other personalized information.</p>
            <p> GeniusU Is Home To The Global Entrepreneur Movement, With Over 1,000,000 Social Entrepreneurs And Impact Investors Collaborating Together To Grow Their Income And Impact.</p>
            <p> Together we have a mission to accelerate our collective progress to achieve the 17 United Nations Global Goals.
            </p>



          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="row expanded row--section4">
    <div class="medium-6 columns">
      <div class="row__section4__yellow-div">
            <h2 class="row__section4__yellow-div__headline">A Global Community Of purpose driven Entrepreneurs</h2>

          
          </div>
          <img class="row__section4__img1 img-responsive" src="img/community.png" style="width: 100%;" />
    </div>
      <div class="medium-6 columns">
        <div class="row">
          <div class="small-6 columns row__section4r">
            <h2 id="counter1" class="row__section4__headline2">1,410,000</h2>
                <hr class="row__section4__hr" />
                <h4 class="row__section4__subheadline2">Entrepreneurs Learning &amp; Earning On GeniusU</h4>
                <p class="row__section4__text">With over 1 million members and growing by 1,000 a day, GeniusU is the largest online platform for entrepreneurs.</p>
          </div>
          <div class="small-6 columns col__rightcol">
              <img class="col__rightcol__arrow" src="img/arrow1.svg" />
            <img src="img/photo-roger.png" style="width: 100%;">
          </div>
        </div>
    </div>
  </div>

    <div class="row expanded row--section5">
    <div class="medium-6 columns">
      <div class="row">
          <div class="small-6 columns col__leftcol">
              <img class="col__leftcol__arrow" src="img/arrow2.svg" />
            <img src="img/buy1give1.png" style="width: 100%;">
          </div>
          <div class="small-6 columns row__section4r">
            <h2 id="counter1" class="row__section5__headline">1,332,700</h2>
            <hr class="row__section5__hr" />
                
               <h4 class="row__section4__subheadline2">Giving Impacts made to date</h4>
              <p class="row__section4__text">Today, it is the entrepreneurs of the world who have the greatest power to trigger change. In partnership with Buy1Give1 GeniusU members can make giving impacts on GeniusU to support causes aligned with their purpose.</p>
          </div>
          
        </div>
    </div>
      <div class="medium-6 columns">
        <div class="row">
          <div class="small-6 columns col__leftcol">
              <img class="col__leftcol__arrow" src="img/arrow2.svg" />
            <img src="img/city.png" style="width: 100%;">
          </div>
          <div class="small-6 columns row__section4r">
            <h2 id="counter1" class="row__section5__headline2">265</h2>

            <hr class="row__section5__hr2" />
                
               <h4 class="row__section4__subheadline2">Cities With Members &amp; Events On GeniusU</h4>
              <p class="row__section4__text">Cities With Members &amp; Events On GeniusU</p>
          </div>
          
        </div>
    </div>
  </div>



    
    <div class="bg1">
      <div class="row rown" style="max-width: 70em">
        <div class="small-10 small-centered  medium-12 columns" >
         
              <div class="row " style="max-width: 80em">
                <div class="medium-6 columns">
                  
              
              <a href="#reg_form" style="opacity: 0.9">
      <div class="tick_pan pann2">
        <div class="orgb  center">
          <h4 class="white"><b>CRISIS LEADERSHIP <Br/>ACADEMY MICROSCHOOL</b></h4>
          <img src="img/price-box-stars.png" style="width: 100%;max-width: 100px;padding-bottom: 10px;">
          <h2 class="white rown"><b>Full Price <br/>$4,995</b></h2>
          
        </div>
        <div class="pan3">
          <p class="center"><b>for the first 100 to join before May 18th</b></p>
<p class='hr'><span class='hr-text'>Includes</span></p>

                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >4 weeks Crisis Leadership Academy Microschool.
A personal facilitator with live mentoring and Q&A
during the 4 weeks - <span class="org">$2495</span> </p>
                    </div>
                  </div>

                  
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Full Mentor status on GeniusU for 12&nbsp;months - <span class="org">$970 </span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Genius Entrepreneur Mastermind for 12&nbsp;months -<span class="org"> $970</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >The 4 weeks Crisis Leadership Academy
Microcourse&nbsp;-&nbsp;<span class="org">$495</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >The Impact Test -<span class="org"> $37</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Entrepreneur Dynamics Microdegree with
Roger James Hamilton -<span class="org"> $300</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Two tokens to take the upgraded 2020 Wealth
Dynamics or Talent Dynamics Tests -<span class="org"> $194</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Brand New Entrepreneur Dynamics Special
Reports&nbsp;-&nbsp;<span class="org">$100</span></p>
                    </div>
                  </div>

                   <div class="rowm center" >
                  <span style="cursor:pointer;"
                    class="orgbutton2 button"> Apply
                    Now</span>
                  </div>

        </div>
      </div>
    </a>
      </div>
                <div class="medium-6 columns">
                  
                  <span class="show-for-small-only rowl"><br/></span>
              
              <a href="#reg_form" >
      <div class="tick_pan">
        <div class="orgb center">
          <h4 class="white"><b>CRISIS LEADERSHIP <Br/>ACADEMY MICROSCHOOL</b></h4>
          <img src="img/price-box-stars.png" style="width: 100%;max-width: 100px;padding-bottom: 10px;">
          <h2 class="white"><b>Early Application <br/>$1,495</b></h2>
          <h4 class="white">Normal Rate: <strike>$4,995</strike><br/> Save $3,500</h4>
        </div>
        <div class="pan3">
          <p class="center"><b>for the first 100 to join before May 18th</b></p>
<p class='hr'><span class='hr-text'>Includes</span></p>

                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >4 weeks Crisis Leadership Academy Microschool.
A personal facilitator with live mentoring and Q&A
during the 4 weeks - <span class="org">$2495</span> </p>
                    </div>
                  </div>

                  
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Full Mentor status on GeniusU for 12&nbsp;months - <span class="org">$970 </span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Genius Entrepreneur Mastermind for 12&nbsp;months -<span class="org"> $970</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >The 4 weeks Crisis Leadership Academy
Microcourse&nbsp;-&nbsp;<span class="org">$495</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >The Impact Test -<span class="org"> $37</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Entrepreneur Dynamics Microdegree with
Roger James Hamilton -<span class="org"> $300</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Two tokens to take the upgraded 2020 Wealth
Dynamics or Talent Dynamics Tests -<span class="org"> $194</span></p>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="small-1 center columns" style="padding-right:0px;">
                      <img src="img/tick.png" style="width:100%;max-width:18px;padding-top:4px;float: right">
                    </div>
                    <div class="small-11 columns text-left">
                      <p >Brand New Entrepreneur Dynamics Special
Reports&nbsp;-&nbsp;<span class="org">$100</span></p>
                    </div>
                  </div>

                   <div class="rowm center" >
                  <span style="cursor:pointer;"
                    class="orgbutton2 button"> Apply
                    Now</span>
                  </div>

        </div>
      </div>
    </a>
      </div>
              </div>

            </div>



          
      </div>
    </div>


<div class="subform">
<a name="reg_form" id="reg_form"> </a>
<div style="background: #ECECEC;">
  <div class="row rown">
    <div class="small-12 medium-10 large-9 medium-centered  columns">
      <h3 class="grntxt center rowl"><b>Apply here to secure your place on the Crisis Leadership Academy Microschool starting on the 18th May</b></h3>
  
  <div class="large-10 large-centered rowm columns">
      <form method="post" id="form_data" >

                <input type="hidden" id="returl" name="returl" value="https://crisis.geniusu.com/webinar/asia/live/thankyou.php">
                  <div class="row ">
                    <div class="small-6 columns">
                      <!-- <label>First Name*</label> -->
                      <input type="text" name="firstname" id="firstname" placeholder="First Name*" required class="required">

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
          
         
         <!--  <label></label> -->
          <textarea name="whyjoin" id="whyjoin" placeholder="Why I would like to join (not mandatory)" rows="5" maxlength="2000"></textarea>
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

       <h5 style="font-weight: bold;" class="grntxt center rowl">Thank you for applying to be one of the first 200 to join our Crisis leadership Academy Accelerator. Please book a call with one of the Genius Igniters here to see if this is the right programme for you.
      </h5>

     

      
   
      <div class="row">
    <div class="small-12 columns">
      <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/geniusu-global/cla-navigation-call" style="min-width:320px;height:1000px;"></div>
<script type="text/javascript" src="https://calendly.com/assets/external/widget.js"></script>
<!-- Calendly inline widget end -->
    </div>
  </div>


    </div>
  </div>

</div>



<div class="row rown">
  <div class="small-12 medium-7  medium-centered columns">
    <h2 class="grntxt center rowm"><b>FAQ</b></h2>

    <div class="accordion" data-accordion data-allow-all-closed="true">

            <div class="accordion-item " data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + What are the dates of the Crisis Leadership Academy?</p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p> The program launches on Monday 18th May, 2020 with a live session from Roger James Hamilton 9am UK time or 9am Pacific time, depending on what time zone you are in and concludes on Friday 12th June, 2020.</p>
              </div>
            </div>
            <div class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + How is the program delivered?</p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p>The course is delivered over four weeks with three live mentor sessions, two implementation days and a Q&A forum each week.
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
                <p>The microschool cost is $1,495 and provides full guidance from our expert faculty. There is also a microcourse option at $295 which gives access to the content.</p>
              </div>
            </div>

            <div class="accordion-item " data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + Who is the Crisis Leadership Academy for?</p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p>The programme is split into three streams depending on the outcome you are looking to achieve. You can be earning between $10 and $100k per month by re pivoting your focus and model during the 4 weeks. The 3 streams are freelancer, startup and scale up entrepreneurs.</p>
              </div>
            </div>

          

            <div class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + Will we be assigned a mentor for the duration of the program?</p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p> Yes, your CLA mentor will conduct a 1:1 strategy call before CLA starts on 18 May and will be available for Q&A at allocated times during the four week Academy. Plus, experts and Genius Institute Faculty will be available at key times during the Academy for Q&A within our GeniusU Circle. You will also be amongst a powerful and robust network of entrepreneurs for ongoing business development, opportunities and support.</p>
              </div>
            </div>

            <div class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">
                <p> + Do I have to have an existing business? </p>
              </a>
              <div class="accordion-content" data-tab-content>
                <p> No, the three streams, Digital Freelance, Digital Startup and Digital Enterprise cater from all levels of business or even those looking to start a business for the first time. The information, structure, mentoring and other entrepreneurs will support you in moving your idea or enterprise forward no matter what stage it is. </p>
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
    $.ajax({
            type: 'post',
            
            url: 'https://crisis.geniusu.com/webinar/asia/live/form_data.php',
            data: $('form').serialize(),

          });



          $.ajax({
            type: 'post',
            url: 'https://services.geniusu.com/staging/crisis_leadership/sf/sfsubscribe-crisis-launch.php',
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

console.log('asds:'+data1);
$.ajax({
            type: 'post',
            url: 'https://services.geniusu.com/staging/crisis_web/asia/sf/sfsubscribe-clatt-asia.php',
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
  header('Location: https://crisis.geniusu.com/webinar/asia/');
}
?>