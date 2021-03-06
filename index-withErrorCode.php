<?php //use home page for server ERROR pages -- set in .htaccess
if (isset($_REQUEST['e']))
	{
		$errortext=array (
			'400'=> '<h1 style="color:#a00">Error 400 &mdash; Bad Request</h1><p>The request cannot be fulfilled due to bad syntax.</p>',
			'401'=> '<h1 class="is-size-1" style="color:#a00">Error 401 &mdash; Unauthorized</h1>',
			'402'=> '<h1 class="is-size-1" style="color:#a00">Error 402 &mdash; Payment Required</h1>',
			'403'=> '<h1 class="is-size-1" style="color:#a00">Error 403 &mdash; Forbidden</h1>',
			'404'=> '<h1 class="is-size-1" style="color:#a00">Error 404 &mdash; Page Not Found</h1><p>There may be an error in the address.</p>',
			'500'=> '<h1 class="is-size-1" style="color:#a00">Error 500 &mdash; Internal Server Error</h1><p>Try again in a minute.</p>'
			);
		if (isset($errortext[$_REQUEST['e']])){
		$error=$errortext[$_REQUEST['e']];
		}else{
			$error='<h1>Error'.$_REQUEST['e'].'</h1>';

		}
	}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Frank Craven - actor, writer, artist and host of Authority versus Majority.</title>
    <meta name="description" content="What's Ailing/Healing America is a show by Frank Craven on Manhattan's public access MNN, Fridays at 9:30pm." />
    <meta name="author" content="Frank Craven" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Frank Craven - actor, writer, artist and TV host — New York, NY">
    <meta property="og:image" content="http://frankcraven.com/photo.jpg/images/Frank-Craven.jpg" />
    <meta property="og:description" content="What's Ailing/Healing America is a show by Frank Craven on Manhattan's public access MNN, Fridays at 11:30pm." />
    <meta property="og:url" content="http://frankcraven.com/" />
    <meta property="og:type" content="website" />
    <link rel="SHORTCUT ICON" href="/favicon.ico" type="/images/x-icon" />
	<link rel="stylesheet" href="/css/bulma.min.css">
	<link rel="stylesheet" href="/css/utility.css">
    <link rel="stylesheet" href="/css/fc.css?n=3">
<style type="text/css">
	
</style>

</head>
<body>
<?php //use home page for server ERROR pages -- set in .htaccess
if (isset($_REQUEST['e']))
{
echo '
	<div style="padding:2rem;background-color:#336633;">
		<div style="color:#a00;padding:2em;border:10px solid #aa0;background-color:#ff0;">'.$error.'</div>
	</div>
';}
?>
<div class="container" style="padding-top: .75rem;">
	<div id="header" class="margin-bottom">
		<nav class="nav columns">
			<ul class="column">
	            <li class="is-inline-block"><a class="selected" href="/">Home</a></li>
	            <li class="is-inline-block"><a href="actor.html">Actor</a></li>
                <li class="is-inline-block"><a href="john-craven-actor.html">Father</a></li>
	            <li class="is-inline-block"><a href="frank_craven.html">Awards</a></li>
	            <li class="is-inline-block"><a href="poetry_scripts.html">Poetry &amp; Scripts</a></li>
	            <li class="is-inline-block"><a href="videos.html">Movies &amp; Videos </a></li>
	            <li class="is-inline-block"><a href="Gallery.html">Art</a></li>
	            <li class="is-inline-block"><a href="philosophy.html">Philosophy</a></li>
	            <li class="is-inline-block"><a href="music.html">Music Workshop Parade</a> </li>
	            
                <li class="is-inline-block"><a style="background-color:#4267b2;" href="https://www.facebook.com/tiofranky.cravenurbieta" target="_blank">FACEBOOK</a></li>
                <li class="is-inline-block"><a style="background-color:red;" href="https://www.youtube.com/channel/UC1J3NZZevJ2MIG9uCBezOHg" target="_blank">YOUTUBE</a></li>
			</ul>
		</nav>
	</div>

	<div class="columns">
		<div class="column is-half is-paddingless" style="background-color: #660033">
			<div style="position: relative;">
				<img style="min-width:100%;" class="image" src="images/Frank-Craven.jpg" alt="Frank Craven photo by John Riney">
				<p style="font-size:75%;">photo by John Riney</p>
				<div style="position: absolute;top: 0;left: 0;right: 0;padding: 1rem;">
			    	<h1 class="is-size-1"><b>Frank Craven</b></h1>
			    	<h2>Actor, Writer, Artist <br>and host of What's Ailing/Healing America</h2>
			  		<h2>AUTHORITY VS. MAJORITY PRODUCTION COMPANY</h2>
        		    <div style="text-align:center;">
        		    	<a href="mailto:frankcraven2018@gmail.com"><img src="/images/mailcloud.gif" width="65" height="26" alt="email" ></a>
				        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
				          <p title="What's Ailing/Healing America?">Support WA/HA?</p>
				          <input type="hidden" name="cmd" value="_s-xclick">
				          <input type="hidden" name="hosted_button_id" value="R8GSV8DCJM5YA">
				          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" 
				          name="submit" alt="PayPal - The safer, easier way to pay online!">
				          <img alt="."  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				        </form>
				    </div>

				</div>
				<!--< div style="position: absolute;bottom: 0;right: 0;padding: 1rem;">
					<h3 class="is-size-3" style="color: white;">Frank Craven</h3>
				</div> -->
			</div>
			<div class="padding margin-top">
				      <h2 class="is-size-4">Watch "What's Ailing/Healing USAmerica" on <a href="http://www.mnn.org/live/1-community-channel" target="_blank">MNN</a>
					<br>Tune into WA/HA? at <strong>11:30pm</strong> <span style="font-size:85%;">(not 9:30pm)</span> (EST time)</h2>
      <div class="videoWrapper"><iframe src="https://www.youtube.com/embed/5c752_5FKI8?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen ></iframe></div>

			</div>

			
		</div>
		<div class="column is-paddingless">
			<div id="events" class="padding">
				<div>
					<div class="padding">
						<?php include ('homepage-insert.html');?>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end columns -->
	<div class="columns">
		<div class="column">
			<div class="margin padding buttons is-centered">
				<a class="button is-link button is-large" href="https://www.geoengineeringwatch.org/?ref=frankcraven.com" target="_blank">Geoengineering Watch</a>
				<a class="button is-link button is-large" href="http://911truth.org/?ref=frankcraven.com" target="_blank">911 Truth</a>
				<a class="button is-link button is-large" href="http://www.freeenergyparty.org/?ref=frankcraven.com" target="_blank">Free Energy Party</a>
        	</div>            
        </div>      
    </div>

	<div class="columns">
        <div class="column" style="padding:1rem;background-color: #900;">
              <h3>GDELT World Map of Protests and Violence Against Civilians</h3>
              <div>
				<a href="https://blog.gdeltproject.org/gdelt-now-in-a-museum-near-you-via-noaas-science-on-a-sphere/" target="_blank">
				  <img style="width:100%;" src="http://data.gdeltproject.org/dailymaps_noaasos/GDELT-ProtestsViolence-TODAY.png" alt="https://blog.gdeltproject.org/gdelt-now-in-a-museum-near-you-via-noaas-science-on-a-sphere/">
				</a>
			</div>
            <div class="videoWrapper">
              <iframe src="https://ds.iris.edu/seismon/bigmap/index.phtml"></iframe>
            </div>
    	</div>
	</div>


	</div>

</div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58570a4cc3dc2865"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-89167661-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-89167661-1');
</script>


</body>
</html>