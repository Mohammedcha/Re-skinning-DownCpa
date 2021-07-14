<?php

$cpabuild_it = "1643775";
$cpabuild_key = "aee9c";

// ========================== //

error_reporting(0);
function detectBot_sp_down($USER_AGENT) {
	$crawlers_agents = strtolower('Bloglines subscriber|Dumbot|Sosoimagespider|QihooBot|FAST-WebCrawler|Superdownloads Spiderman|LinkWalker|msnbot|ASPSeek|WebAlta Crawler|Lycos|FeedFetcher-Google|Yahoo|YoudaoBot|AdsBot-Google|Googlebot|Scooter|Gigabot|Charlotte|eStyle|AcioRobot|GeonaBot|msnbot-media|Baidu|CocoCrawler|Google|Charlotte t|Yahoo! Slurp China|Sogou web spider|YodaoBot|MSRBOT|AbachoBOT|Sogou head spider|AltaVista|IDBot|Sosospider|Yahoo! Slurp|Java VM|DotBot|LiteFinder|Yeti|Rambler|Scrubby|Baiduspider|accoona');
	$crawlers = explode("|", $crawlers_agents);
	if(is_array($crawlers)) {
		foreach($crawlers as $crawler) {
			if (strpos(strtolower($USER_AGENT), trim($crawler)) !== false) {
				return true;
			}
		}
	}
	return false;
}
$file = htmlentities($_GET['file']);
if (isset($_GET['file'])) {
	$file_under = preg_replace('/[^ a-zA-Z,]/', '', $file);
	$file_underc = str_replace(' ', '_', $file_under);
	$file_undercx = str_replace(',', '', $file_underc);
	$file_undercxd = str_replace('!', '', $file_undercx);
	$rendox = rand(1111,999999);
	if(detectBot_sp_down($_SERVER['HTTP_USER_AGENT'])) {} else {
?>		
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Download <?php echo $file ; ?> For Free</title>
	<meta name="description" content="Visit this webpage to download your file!" />
	<meta property="og:title" content="Download File" />
	<meta property="og:description" content="Visit this webpage to download your file!" />
	<meta name="referrer" content="no-referrer">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/owl.carousel.css">
    <link rel="stylesheet" href="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/slick.css">
    <link rel="stylesheet" href="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/font-awesome-4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Roboto:100,400|Ubuntu:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/bootstrap.min.css">
    <link rel="stylesheet" href="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/animate.css">
    <link rel="stylesheet" href="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/style.css">
    <link rel="stylesheet" href="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/responsive.css">
    <link rel="shortcut icon" type="image/png" href="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/favicon.png">
<script>
document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}
</script>			
</head>
<body class="webhosting chrome" oncontextmenu="return false;">
	<section class="hk_breadcrumb">
		<div class="container">
			<div class="col-md-12">
				<div class="hk_breadcrumb_wrapper">
					<div class="hk_breadcrumb_title">
						<h1>File Download</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="jk_page_not_found hk_section_padding" style="padding-bottom:0 !important;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hk_huge_text"><h3 style="color:#0096ff;"><?php echo $file_undercx ; ?>_<?php echo $rendox; ?>.zip</h3></div>
					<p class="hk_directory_text">
					File Name : <b><?php echo $file_undercx ; ?>_<?php echo $rendox; ?>.zip </b><br>
					Updated  :  <?php echo date("l");?> <?php echo date("d/m/y") ; ?> (TODAY) <br>
					</p>
					<a href="#" class="hk_btn hk_err_btn" onclick="CPABuildLock()" id="downloadButton"> <span class="fa fa-cloud-download"></span>Start Free Download Now</a>
				</div>
			</div>
		</div>
	</section>
	<div class="hk_how_it_works hk_section_padding">
		<div class="container">
			<div class="hk_how_it_works_wrapper">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="hk_single_part">
							<div class="hk_icon">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="icons" x="0px" y="0px" viewBox="0 0 82.3 67" style="enable-background:new 0 0 82.3 67;" xml:space="preserve" class="hk_svg">
									<style type="text/css">
										.st0 {
											fill: #FFFFFF;
										}
									</style>
									<g id="icon_9_">
										<path class="st0" d="M63.1,13.7c-1.6,0-4,1-5.5,1.4C54.8,7.1,47.9,0.5,38.8,0.5c-11.1,0-20.1,8.7-20.7,19.6   c-0.7-0.1-1.4-0.2-2.1-0.2c-8.6,0-15.6,7-15.6,15.6c0,8.6,7,15.6,15.6,15.6c6.4,0,37.2,0,47,0c10.3,0,18.7-8.4,18.7-18.7   C81.8,22.1,73.5,13.7,63.1,13.7z"></path>
										<g>
											<rect x="56.3" y="62.3" class="st0" width="21.5" height="2"></rect>
											<rect x="4.6" y="62.3" class="st0" width="21.5" height="2"></rect>
											<polygon class="st0" points="39.3,54.2 43,54.2 43,60.4 54.6,60.4 54.6,66.5 27.7,66.5 27.7,60.4 39.3,60.4   "></polygon>
										</g>
									</g>
								</svg>
							</div>
							<div class="hk_title">
								<h4>FAST</h4>
							</div>
							<p>Automatically replicated to a server near you. Lightning fast download speeds.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="hk_single_part">
							<div class="hk_icon">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="icons" x="0px" y="0px" viewBox="0 0 40 39.5" style="enable-background:new 0 0 40 39.5;" xml:space="preserve" class="hk_svg">
									<style type="text/css">
										.st0 {
											fill: #0096FF;
										}

										.st1 {
											fill: #FFA912;
										}
									</style>
									<g>
										<path class="st0" d="M5.2,22.9L1,22.5c-0.3,0-0.5-0.3-0.5-0.6v-4.2c0-0.3,0.2-0.6,0.5-0.6l4.2-0.5c0.4-1.9,1.1-3.7,2.2-5.2L4.7,8.1   c-0.2-0.2-0.2-0.6,0-0.8l2.9-2.9c0.2-0.2,0.6-0.2,0.8,0l3.3,2.6c1.6-1,3.3-1.8,5.2-2.2l0.5-4.2c0-0.3,0.3-0.5,0.6-0.5h4.2   c0.3,0,0.6,0.2,0.6,0.5l0.5,4.2c1.9,0.4,3.7,1.1,5.2,2.2l3.3-2.6c0.2-0.2,0.6-0.2,0.8,0l2.9,2.9c0.2,0.2,0.2,0.6,0,0.8l-2.6,3.3   c1,1.6,1.8,3.3,2.2,5.2l4.2,0.5c0.3,0,0.5,0.3,0.5,0.6l0,4.2c0,0.3-0.2,0.6-0.5,0.6l-4.2,0.5c-0.4,1.9-1.1,3.7-2.2,5.2l2.6,3.3   c0.2,0.2,0.2,0.6,0,0.8l-2.9,2.9c-0.2,0.2-0.6,0.2-0.8,0l-3.3-2.6c-1.6,1-3.3,1.8-5.2,2.2L22.9,39c0,0.3-0.3,0.5-0.6,0.5l-4.2,0   c-0.3,0-0.6-0.2-0.6-0.5l-0.5-4.2c-1.2-0.2-2.3-0.6-3.4-1.1l3.4-3.3c1,0.3,2,0.5,3.1,0.5c6.1,0,11.1-5,11.1-11.1   c0-6.1-5-11.1-11.1-11.1c-6.1,0-11.1,5-11.1,11.1c0,1.1,0.2,2.1,0.4,3l-3.4,3.3C5.8,25.1,5.4,24,5.2,22.9z"></path>
									</g>
									<path class="st1" d="M1,38.5c1.3,1.4,3.5,1.4,4.8,0.1l0,0l11.5-11.1c2.8,1,6,0.4,8.4-1.9c2.3-2.2,3.1-5.4,2.2-8.3L25.2,20  c-0.6,0.6-1.6,0.6-2.2,0l-2.6-2.7c-0.6-0.6-0.6-1.6,0-2.2l2.7-2.6c-2.8-1-6-0.3-8.3,1.9c-2.3,2.2-3,5.4-2.2,8.2L1,33.6l0,0  C-0.3,34.9-0.3,37.1,1,38.5z M2.1,36.1c0.4-0.4,1.2-0.4,1.6,0c0.4,0.5,0.4,1.2,0,1.6c-0.4,0.4-1.2,0.4-1.6,0  C1.6,37.3,1.7,36.5,2.1,36.1z"></path>
								</svg>
							</div>
							<div class="hk_title">
								<h4>STABLE</h4>
							</div>
							<p>Stable download platform for all files and services. Download with confidence.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="hk_single_part">
							<div class="hk_icon">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="icons" x="0px" y="0px" viewBox="0 0 36.3 36" style="enable-background:new 0 0 36.3 36;" xml:space="preserve" class="hk_svg">
									<style type="text/css">
										.st0 {
											fill: #FFA912;
										}
										.st1 {
											fill: #0096FF;
										}
									</style>
									<g>
										<rect x="25.6" y="33.9" class="st0" width="10.7" height="1"></rect>
										<rect y="33.9" class="st0" width="10.7" height="1"></rect>
									</g>
									<g>
										<polygon class="st1" points="17.2,29.9 19,29.9 19,33 24.8,33 24.8,36 11.5,36 11.5,33 17.2,33  "></polygon>
										<path class="st1" d="M18.3,0c-8-0.1-14.5,6.3-14.6,14.2C3.7,22.2,10,28.7,18,28.8c7.9,0.1,14.5-6.3,14.6-14.2   C32.6,6.6,26.3,0.1,18.3,0z M16.8,4.6l0.7,0l0-0.8l-0.5,0l-0.1,0l0-2.1l0.9,0l0-1.1l0.1-0.1c0.2,0,0.3,0,0.5,0   c0.7,0,1.4,0.1,2.1,0.2l0,0.7l1,0l0,1.1l0,1.6l-0.8,0l-0.7,0.6l-1.6,1.6l-0.8,0.8l-0.7-0.7L16.8,4.6z M14.1,1l0.3,0.3l-0.5,0.5   l-0.8,0l0,0.8l1.1,0l0.6,0l0,3.6l-1.3,0l0-2.6l-0.9,0l0-1.3l-0.6,0l0,0.7l-0.6,0.5l-1.3,0L9.9,3.1C11.1,2.2,12.6,1.4,14.1,1z    M18.5,21.4l-1.2,0l-0.6,0.9l0,2l-1.8,1.3l0,2.4l-2-1.9l0.1-4.8l-2.1-2l0-2.4l-1.5-1.1l-1.3,0l-0.9-1l0-1.3l-0.6-0.4l-0.2,0.5   l0.3,0.2l0,1.1l-0.8-1l-0.4-1.5L5,12l0-2.7c0.7-1.9,1.8-3.6,3.2-4.9l4.4,0.1l-0.2,0.9l-1.3,0.1L11.3,6l0.3,0.4l-0.4,0.6l-1-0.1   l0.6,0.8l1,0.8l0.3,0.8L12.6,9l0-2.1l1.2,0l0,0.3l1.2,0l0,1.5l-0.5,0l0,0.6l-0.5,0l0,0.4l0.7,0l-0.5,0.5L14.1,10l-0.5,0.5l0,0.4   l-0.4,0.4l-0.5,0.5L12,12.3l-0.4,0.4l0,1.3L11,14l0-0.7l-1.9,0l0,0.8l1.8,1.8l3.7,0l0,0.3l1.3,0l1.4,1.9l1.1,0L18.5,21.4z    M29.7,13.4l0,1.1l-1.9,0l-0.9-0.9l0-0.6l-0.5,0l0,0.9l1.2,1.3l1.4,0l0,1l-1.3,1.3l0,1.9l0,1.7l-1,0l0,1.9l-0.8,0.8l-1.8,0l0-1.7   l-1-1l0-3L22,16.7l-2.5,0l-1-1l0-2.5l0.9-0.8l1.4,0l0.9-0.9l0.5,0l0.6,0l0,0.5l3.4,0l0-0.6l-0.8,0l0.5-0.5l0.5-0.5l0.8,0l-0.5-0.5   l-0.8,0L25,10.6l0,0.6l-0.9-0.9l-0.5,0l0.8,0.8l-0.7,0l-0.5-0.5l0-0.4l-0.8-0.8l-0.6,0.6l-0.5,0.5l0,0.9l-1,0l0-0.4l0-1.4l0.4,0   l0-0.3L21,9.1l-0.4-0.4L20,9.2l-0.5-0.5l0.2-0.2l0-0.4l0-0.9l0.9,0l0,0.5l0.8,0.8l0.6,0l0-0.6l1.7,0l0-0.6l0.7,0l0-0.9l-0.7,0   l0-0.8l-0.4,0l0,1.7L23,7.6l-0.6-0.3l-1-0.3l0.1-1l1.1-0.8l0.6-1L24.3,4l-0.1,0.5l0.7,0.1l0,0.5l0.8-0.1l0.4-0.3l0.1-0.4l1.8,0   c2.6,2.6,4.3,6.2,4.2,10.2c0,0.2,0,0.4,0,0.6l-3-3.1l-0.3,0.3L29.7,13.4z"></path>
									</g>
								</svg>
							</div>
							<div class="hk_title">
								<h4>SECURE</h4>
							</div>
							<p>Secure protocols and top-of-the-line anti virus software. All files are secured for you.</p>
						</div>
					</div>
				</div>
				<div class="hk_arrow">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="hk_arrow_img_wrapper">
								<img src="//s3-us-west-1.amazonaws.com/cpapages/assets/landing_pages/blue_file/wpro.svg"
									 alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/jquery-1.12.3.js"></script>
	<script src="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/bootstrap.min.js"></script>
	<script src="//s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/blue_file/SmoothScroll.chrome.js"></script>
	<script type="text/javascript">
		var CPABUILDSETTINGS={"it":"<?php echo $cpabuild_it; ?>","key":"<?php echo $cpabuild_key; ?>"};
	</script>
	<script src="https://cpabuild.com/public/external/locker.js"></script>
</body>
</html>
<?php 
	}
} ?>
