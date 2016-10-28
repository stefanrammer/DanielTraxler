<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daniel Traxler - Home</title>
	<meta name="description" content="Informationen und aktuelle News zum Ski-Cross Athleten Daniel Traxler">
    <meta name="page-topic" content="Sport"/>
	<meta name="page-topic" content="Private Homepage"/>
	<meta name="audience" content="Alle"/>
	<meta name="Robots" content="INDEX,FOLLOW"/>
	<meta name="Language" content="Deutsch"/>
    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="style.css" rel="stylesheet"/>
    <link href="lib/wow/animate.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Social-feed css -->
	<link href="bower_components/social-feed/css/jquery.socialfeed.css" rel="stylesheet" type="text/css">
	<!-- font-awesome for social network icons -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="css/hamburgers.min.css" rel="stylesheet">
</head>
<body>
	<div class="header">
    	<div class="logo-wrapper">
        	<div class="logo">
            </div>
        </div>
        <div class="logos-wrapper">
        	<a class="logo-link" href="http://www.bernegger.at/" target="_blank" title="Bernegger">
            	<img src="images/logos/bernegger.png" class="img-responsive" alt="Bernegger Tischlerei"/>
            </a>
            <a class="logo-link" href="https://www.atomic.com/de-at" target="_blank" title="Atomic">
            	<img src="images/logos/atomic.png" class="img-responsive" alt="Atomic Racing"/>
            </a>
            <a class="logo-link" href="http://komperdell.com/" target="_blank" title="Komperdell">
            	<img src="images/logos/komperdell.png" class="img-responsive" alt="Komperdell"/>
            </a>
            <a class="logo-link" href="http://www.carreraworld.com/at" target="_blank" title="Carrera">
            	<img src="images/logos/carrera.png" class="img-responsive" alt="Carrera"/>
            </a>
        </div>
    </div>
	<?php include('navigation.php'); ?>
    <div class="content">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-8">
                	<h1>Daniel Traxler</h1>
                    <h2>Willkommen auf meiner offiziellen Website</h2>
                    <p>Freut mich, dass du vorbei schaust! Hier findest du Informationen zu meiner Karriere sowie auch aktuelle News.</p>
       			</div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
    </div>
    <div class="split-wrapper">
    	<div class="split-left wow slideInLeft" data-wow-offset="100">
        	<div class="split-inside">
            	<a href="ueber">
            	<img src="images/start/ueber.jpg" class="img-responsive full-width-image" alt="Über" />
                <div class="split-bottom-wrapper"></div>
                <div class="split-bottom">
                	<h3>Über mich</h3>
                </div>
                </a>
            </div>
        </div>
        <div class="split-right wow slideInRight" data-wow-offset="100">
        	<div class="split-inside">
            	<a href="erfolge">
            	<img src="images/start/erfolge.jpg" class="img-responsive full-width-image" alt="Erfolge"/>
                <div class="split-bottom-wrapper"></div>
                <div class="split-bottom">
                	<h3>Erfolge</h3>
                </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="facebook-wrapper">
    	<div class="container">
        	<h2>News:</h2>
        	<div class="social-feed-container grid row">
            	<div class="grid-sizer"></div>
            </div>
        </div>
    </div>

    <div class="container">
    	<div class="row">
        	<div class="col-sm-3"></div>
        	<div class="col-sm-6">
                <div class="facebook-wrapper">

                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <?php
		include('footer.php');
	?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/effects.js"></script>
    <script src="js/hover.js"></script>
    <script src="lib/wow/wow.js"></script>
    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
    <script>
    	new WOW().init();
    </script>
    <!-- Codebird.js - required for TWITTER -->
    <script src="bower_components/codebird-js/codebird.js"></script>
    <!-- doT.js for rendering templates -->
    <script src="bower_components/doT/doT.min.js"></script>
    <!-- Moment.js for showing "time ago" and/or "date"-->
    <script src="bower_components/moment/min/moment.min.js"></script>
    <!-- Moment Locale to format the date to your language (eg. italian lang)-->
    <script src="bower_components/moment/locale/de-at.js"></script>
    <!-- Social-feed js -->
    <script src="bower_components/social-feed/js/jquery.socialfeed.js"></script>
    <!-- jQuery -->
    <script>
    jQuery(document).ready(function(){
			jQuery('.social-feed-container').socialfeed({
				facebook:{
        			accounts: ['!danieltraxlerskicross46'],  //Array: Specify a list of accounts from which to pull wall posts
        			limit: 7,                                   //Integer: max number of posts to load
        			access_token: '1001335816569108|ytBNNPI-tt9xFGlzR8TrtsLStRg'  //String: "APP_ID|APP_SECRET"
    			},

				// GENERAL SETTINGS
				length:400,
				show_media:true,
				moderation: function(content) {                 //Function: if returns false, template will have class hidden
        	return  (content.author_name) ? content.author_name.indexOf('Traxler') != -1 : true;
    		},
				callback: function() {
					var $grid = $('.social-feed-container').imagesLoaded( function() {
						$grid.masonry({
						// options
							itemSelector: '.social-feed-element',
							columnWidth: '.grid-sizer',
							percentPosition: true
						});
					});
					console.log('loaded');
				}//Integer: For posts with text longer than this length, show an ellipsis.
			});
		});
	</script>
    <!--<script src="js/isotope.pkgd.min.js"></script>-->
    <script>

		/*var $grid = jQuery('.grid').masonry({
  			itemSelector: '.social-feed-element',
  			// use element for option
  			columnWidth: '.grid-sizer',
  			percentPosition: true
		});
		// layout Masonry after each image loads
		$grid.imagesLoaded().progress( function() {
  			$grid.masonry('layout');
		});*/
	</script>

</body>
</html>
