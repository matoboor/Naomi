<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Naomi - Rozvoz kvetov</title>
        <meta name="description" content="Najväčšie kvetinárstvo v Trenčíne. Veľký výber, dobrá cena. Donáška kvetov.">
        <meta name="keywords" content="naomi, kvety, kvetinarstvo, trencin, rozvoz, dekoracie, vyzdoba, kytice, darcek, sviatok" />
        <meta name="author" content="Martin Boor" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/normalize.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<!-- <script src="js/responsiveslides.min.js"></script> -->
		
		<script src="../js/date.1.js"></script>
		
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class="fb_button"><a href="http://www.facebook.com/Naomi.Kvety" target="_blank"><img src="../img/facebook_vertical.png" /></a></div>
        <div class="header-container">
            <header class="wrapper clearfix">
            	<a href="../">
                	<img src="../img/logo.png" class="logo"/>
                </a>
                <br />
                <div class="header_contact"><img src="../img/phone-icon.png"/>+421-915-443-740</div>
                <nav>
                    <ul>
                    	<!--reverse -->
                                                                                           
                        <li><a href="../kontakt/">Kontakt</a></li>
                        <li><a href="../fotogaleria/">Fotogaléria</a></li>
                        <li><a href="../rozvoz-kvetov/" class="active">Rozvoz kvetov</a></li>
                        <li><a href="../sluzby/" >Služby</a></li>
                        <li><a href="../" >O nás</a></li>
                        
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
        	<div class="nameday-container">
        		<div class="wrapper"> Dnes má meniny <span id="date_meniny" class="black">Erik</span>, zajtra <span id="date_meniny_zajtra" class="black">Viktor</span> </div>
        	</div>
            <div class="main wrapper clearfix">							
									
                <article>
                    <header>
                        <h1>Objednávka bola prijatá</h1>
                    </header>
                    <section>
                        <p>
                        	Vaša objednávka pod označením 
                        	<b>
                        	<?php 
                        	$id = $_GET["id"];
                        	echo "$id";                        	                      	
                        	?></b>.
                        	Kópia objednávky bola odoslaná do Vašej e-mailovej schránky.
                        </p>
                        <p>
                        	Ďakujeme za Váš nákup.
                        	Náš personál Vás bude čo najskôr kontaktovať.
                        </p>
                    </section>    
                </article>

                <aside>
                    <h3>Rýchly kontakt:</h3>
                    <table>
                    	<tr>
                    		<td><img src="../img/phone-icon2.png" /></td>
                    		<td>+421-744-15-20</td>
                    	</tr>
                    	<tr>
                    		<td></td>
                    		<td>+421-915-443-740</td>
                    	</tr>
                    	<tr>
                    		<td><img src="../img/email-icon.png" /></td>
                    		<td><a href="#">info@naomi.sk</a></td>
                    	</tr>
                    	
                    </table>                  
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h4>Copyright © 2014 Kvetinárstvo Naomi. Všetky práva vyhradené</h4>
                <p>WebDesign: <a href="mailto:matoboor@gmail.com">Martin Boor</a></p>
                <!-- hidden element. only for funcionality of nameday widget -->
                <span id="kasman"><a href="http://www.kasman.sk/javascript"></a></span>
                <!-- ******************************************************* -->
            </footer>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
        
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>');</script>
        <script type="text/javascript">
		
    	$('form#objednaj').validarium();
		
		</script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        

    </body>
</html>
