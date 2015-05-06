<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="kvety, kvetinarstvo, trencin, rozvoz kvetov, naomi"/>
	<meta name="description" content="Kvetinárstvo Naomi"/>
	<meta name="ROBOTS" content="INDEX, FOLLOW"/>
	<title>Kvetinárstvo Naomi</title>
	
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/site.css" rel="stylesheet" />
    <script src="/js/date.1.js"></script>
	<link rel="stylesheet" href="/css/photoswipe.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<script type="text/javascript">
        	document.addEventListener('DOMContentLoaded', function(){
			Code.photoSwipe('a', '#Gallery');
			}, false);
    </script>
  	<div class="header">
  		<div>
  			<img src="/img/Naomi_logo.png" />
  		</div>
  	</div>
  	
  	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="/index.html">O nás </a></li>
        <li><a href="/nase-sluzby">Naše služby</a></li>
        <li><a href="/rozvoz-kvetov">Rozvoz kvetov</a></li>
        <li class="active"><a href="/galeria">Fotogaléria <span class="sr-only">(current)</span></a></li>
        <li><a href="/kontakt">Kontakt</a></li>
        <li><a style="color: blue;" href="http://www.facebook.com/NaomiSro" target="_blank"> Facebook</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text"><span class="glyphicon glyphicon-phone-alt"></span> &nbsp; +421 915 443 740</p></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  	
    <div class="container main">
    	<div class="row ">
    		<div class="col-md-12 nameday-container">
    			<div class="wrapper"> Dnes má meniny <span id="date_meniny" class="black">Erik</span>, zajtra <span id="date_meniny_zajtra" class="black">Viktor</span> </div>
    		</div>		
    	</div>
    	<div class="row">
    		<div class="col-md-3">
    			<br />
    			<br />
    			<nav class="navbar navbar-default">

    				<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
      					Galérie
        				<span class="sr-only">Toggle navigation</span>
        				<span class="glyphicon glyphicon-chevron-down"></span>  				
      				</button>    				
    				</div>

    				<!-- Collect the nav links, forms, and other content for toggling -->
    				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      				<ul class="nav nav-stacked nav-pills">
      					<li id="Aranzmany"><a  href="?g=Aranzmany">Aranžmány</a></li>
                        <li id="Kytice"><a  href="?g=Kytice">Kytice</a></li>
                        <li id="Gratulacne"><a  href="?g=Gratulacne">Gratulačné</a></li>
                        <li id="Svadobne"><a  href="?g=Svadobne">Svadobné</a></li>
                        <li id="Smutocne"><a  href="?g=Smutocne">Smútočné</a></li>
                        <li id="Letnicky"><a  href="?g=Letnicky">Letničky</a></li>
                        <li id="Halloween"><a  href="?g=Halloween">Halloween</a></li>
                        <li id="Vianoce"><a  href="?g=Vianoce">Vianoce</a></li>
                        <li id="Velkanoc"><a  href="?g=Velkanoc">Veľká noc</a></li>
                        <li id="Zahrada"><a  href="?g=Zahrada">Záhrada</a></li>
                    </ul>
    				</div><!-- /.navbar-collapse -->
				</nav>
    		</div>
    		<div class="col-md-9 center">
    		<div id="Gallery">
					<?php
					function Printfolder($g)
							{$dir="Fotky/$g";
							$c=0;
							if ($handle = opendir($dir)) {    										
    							while (false !== ($entry = readdir($handle))) {
    								if($entry!="." && $entry!=".." && is_dir($entry)==false)
									{
										echo "<div class=\"gallery-item img-thumbnail \"><a href=\"$dir/$entry\"> <div class=\"\"> <img class=\"img-rounded img-responsive thumb\" src=\"$dir/$entry\" /></div></a></div>";
									}
        							$c++;
    						}
							if($c % 2 ==! 0)
							{
								echo "<div class=\"thumb_div\"></div>";
							}
							
    						closedir($handle);
							}}
					
					
						if($_GET["g"])
						{
							$g=$_GET["g"];
							switch ($g) {
								case "Aranzmany":
									echo "<h1>Aranžmány</h1>";
									break;
								case "Kytice":
									echo "<h1>Kytice</h1>";
									break;
								case "Gratulacne":
									echo "<h1>Gratulačné</h1>";
									break;
								case "Svadobne":
									echo "<h1>Svadobné</h1>";
									break;
								case "Smutocne":
									echo "<h1>Smútočné</h1>";
									break;
								case "Letnicky":
									echo "<h1>Letničky</h1>";
									break;
								case "Halloween":
									echo "<h1>Halloween</h1>";
									break;
								case "Vianoce":
									echo "<h1>Vianoce</h1>";
									break;
								case "Velkanoc":
									echo "<h1>Veľká noc</h1>";
									break;
								case "Zahrada":
									echo "<h1>Záhrada</h1>";
									break;	
								
								}
							Printfolder($g);
						}
						else {
							echo "<h1>Vyberte si galériu </h1>";							
							Printfolder("Ine");
						}
																									
					?>
					</div>
    	</div>
    	
    	</div>
    </div>
	<div class="footer ">
      <div class="container main">
      	<div class="row">
      		<div class="col-md-4">
      			<p><a href="#"> <span class="glyphicon glyphicon-chevron-up"></span>Hore</a></p>
      		</div>
      		<div class="col-md-4">
      			<p>Naomi &copy; 2015</p>
      		</div>
      		<div class="col-md-4">
      			<p>Web design <a href="mailto:matoboor@gmail.com">Martin Boor</a> </p>
      			<!-- hidden element. only for funcionality of nameday widget -->
                <span id="kasman"><a href="http://www.kasman.sk/javascript"></a></span>
                <!-- ******************************************************* -->
      		</div>
      	</div>
      	
      </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- photoswipe Javascript file -->
    <script type="text/javascript" src="/js/simple-inheritance.min.js"></script>
	<script type="text/javascript" src="/js/code-photoswipe-1.0.11.min.js"></script>
	<script>
  			$(document).ready(function(){
  				jQuery('#<?php
  							
								echo $g;
  								
  							?>').addClass('active');
  							
  				
			});
	</script>
  </body>
</html>