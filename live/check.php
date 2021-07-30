<?php
header("Access-Control-Allow-Origin: *");
// error_reporting(E_ALL);
// ini_set("display_errors", 1);

date_default_timezone_set("Asia/Singapore");


session_start();


 //include('config.php'); 

    if(isset($_POST['submit'])) 
{ 
    $em1 = $_REQUEST['ema'];
     $leademail 		= urldecode($em1);
   
    // $sql = "SELECT id, email FROM webinar_reg WHERE email ='".$em1."' ";
    // $result = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo "id: " . $row["id"]. " - Email: " . $row["email"]. "<br>";
    //     }
    // } else {
       
    //    $leademail 		= urldecode($em1);


    // }

    require('sfapi/salesforce_integration.class.php');
	$Int = new salesforce_integration();

	$guId =  false;

	$PersonAccountQuery = "SELECT PersonContactId, Id FROM Account WHERE IsPersonAccount=true AND PersonEmail='".$leademail."' LIMIT 1 ";

	//echo "<hr />Person Account Query:".$PersonAccountQuery;
	$Result = $Int->connection->query($PersonAccountQuery);
	if(count($Result->records)	>0){
		$salesforceId = $Result->records[0]->PersonContactId;

		$AccId = $Result->records[0]->Id;

		// echo "accid:".$AccId ;

		// echo "here";
			$iLabQuery = "SELECT Id FROM GU_Service__c WHERE NAME LIKE 'VIP Masterclass Series 3%' AND Account__c = '".$AccId."'  LIMIT 1 ";

			// echo "ilabqueyr:".$iLabQuery;
			$Result2 = $Int->connection->query($iLabQuery);
			//var_dump($Result2) ;
				if(count($Result2->records)	>0){
					$guId = $Result2->records[0]->Id;

						// echo "guid3:".$guId;

						// echo "guid4:".$Result2->records[0]->Id;
						}
							else
							{
								$guId =  false;
						}

						// echo "guid1:".$guId;

	}else{
		$salesforceId = false;
	}

	if(!$salesforceId){ //still not found them

		$CorporateContactQuery = "SELECT Id, IsPersonAccount FROM Contact WHERE Email='".$leademail."' LIMIT 1 ";
		//echo "<hr />Corporate Contact Query:".$CorporateContactQuery;
		$Result = $Int->connection->query($CorporateContactQuery);
		if(count($Result->records)	>0){
			//var_dump($Result);
			$salesforceId = $Result->records[0]->Id;
		// echo "here2";
			$iLabQuery = "SELECT Id FROM GU_Service__c WHERE NAME LIKE 'VIP Masterclass Series 3%' AND Account__c = '".$salesforceId."'  LIMIT 1 ";
			$Result2 = $Int->connection->query($iLabQuery);
				if(count($Result2->records)	>0){
					$guId = $Result2->records[0]->Id;

						}
							else
							{
								$guId =  false;
						}

						// echo "guid2:".$guId;

		}else{
			$salesforceId = false;
		}

}

if (!$guId) {
			# code...
			// echo "not found";
			// header('Location:  https://invest.geniusu.com/webinar/asia/');
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
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

  <link rel="stylesheet" href="css/TimeCircles.css" />


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



  </head>
  <body>





<!-- <div style="background: #15264C">
  <div class="row rowl" data-equalizer>
    <div class="medium-6 columns medium-text-left text-center" data-equalizer-watch>
      
        <img  src="img/gu_logo_white.png" style="width: 100%;max-width: 120px;">
              </div>
    
    
</div>
</div> -->

<div class="b2g">
   <div class="row  "  data-equalizer>
       

      <div class="medium-9 rown  large-6 rown medium-push-3 large-push-6 columns  text-center"  data-equalizer-watch>
    
       <center>
          <h4><b class="white">Scale Up Entrepreneurs Masterclass</b></h4>
        <h6 class="white"><b>3 Steps to Build a </br> Million Dollar Customer Pathway</b>
        </h6>
           
<h4 class="grntxt"><b>Access Now</b></h4>


<h4 style="color: red" ><b>Email Address not found.</b></h4>
<p  class="white rowl"><b>Please click below to register</b></p>

<a href="https://solutions.geniusu.com/scaleup/digital/webinar/asia/" class="button orgbutton">Register Now </a>
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


   <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  <script src="js/timer.js"></script>


  <script type="text/javascript" src="../js/TimeCircles.js"></script>




      

		<?php
		}
		else
		{
			$url = 'Location:https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid='.$guId;
			header($url);
		}

	}

?>