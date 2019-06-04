<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Title</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
	<!-- Template Basic Images End -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
	<!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
	<script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)};function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n};function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>

	<!-- Load Fonts CSS Start -->
	<script>
		loadCSS( "css/fonts.min.css?ver=1.0.0", false, "all" ); // Loading fonts, if the site is located in a subfolder
		// loadLocalStorageCSS( "webfonts", "css/fonts.min.css?ver=1.0.0" ); // Loading fonts, if the site is at the root
	</script>
	<!-- Load Fonts CSS End -->

	<!-- Load Custom CSS Start -->
	<script>loadCSS("css/main.min.css?ver=1.0.0", false, "all" );</script>
	<!-- Load Custom CSS End -->

	<!-- Load Custom CSS Compiled without JS Start -->
	<noscript>
		<link rel="stylesheet" href="css/fonts.min.css">
		<link rel="stylesheet" href="css/main.min.css">
	</noscript>
	<!-- Load Custom CSS Compiled without JS End -->
</head>

<body>
	<!-- header -->
	<header class="header">
		<nav id="navbar" class="navbar navbar-collapse">
			<a class="navbar__link" href="index.html">Home</a>
			<a class="navbar__link" href="services.html">Portfolio</a>
			<a class="navbar__link" href="about.html">About</a>
			<a class="navbar__link active" href="contact.php">Contact</a>
		</nav>
		<button class="btn btn-hamburger"><span class="icon-menu">&#9776;</span><span class="icon-hamburger">&#x2573;</span></button>
	</header><!-- header END -->
	<div class="main">
		<div class="main__block">
			<div class="contact">
				<p class="contact__text">I am currently available for hire. Please feel free to inquire about freelance work or long term roles. I am looking forward to discussing new projects with you!</p>
				<p class="contact__text">Feel free to reach out in the message box below or via email:
					<a class="link" href="mailto:paigemadelinejones@gmail.com">paigemadelinejones@gmail.com</a>
					<br>
				</p>
				<form class="form-control" action="contact.php" method="POST"> <!-- Send input values as POST requests to contact.php -->
					<label for="firstname" class="label labe-contacts">your name</label>
					<input class="form-control__input" type="text" id="firstname" name="firstname" value="" placeholder="Your name..">
					<!--"name" attribute is the reference name of the variable being sent, "value" attribute is the value the variable filled in by user
					for this example firstname = Bob-->
					<br>
					<label for="lastname" class="label labe-contacts">message</label>
					<input class="form-control__input" type="text" id="lastname" name="message" value="" placeholder="Write your message here.."> <!-- value is filled in by user -->
					<!-- I changed the name of this input to be "message" because it better suits the input value -->
					<input class="btn btn-contact" type="submit" name="submit" value="submit">
					<!-- changed this to input type submit for PHP -->
				</form>
				<!--Inline styles for response messages-->
				<style> 
					.success, .failure{
						margin: 0 auto;
						position: absolute;
						top: 0px;
						left: 0;
						z-index: 99;
						padding: 5px;
						width: 100%;
						background: #4ADB60;
						color: #fff;
						text-align: center;
					}
					.failure{
						background: #D84C49;
					
						}
				</style>
				<?php                           //Use the POST method to get the user input and store them in PHP variables
                                $firstname = $_POST['firstname']; //$firstname now has the value "Bob" or whatever the user inputs
                                $message = $_POST['message']; //message value
                                $from = 'paigxjbj@server235.web-hosting.com'; //who is the message from: in your case, this value MUST be the email from the server
                                $to = 'paigemadelinejones@gmail.com';  //What email to send the message to, (your gmail)
                                $subject = 'Message from Website Contact Form';  //Add a subject
                           
                                                    
                                $body = "From: $firstname\n Message:\n $message"; // \n defines a new line, this is the body of the email
                                                            
                                if ($_POST['submit']) { //If the user submitted the form then send the message!				 
                                    if (mail ($to, $subject, $body, $from)) { //this is the php mail() function that takes parameters to, subject, body, from 
                                        echo "<p class='success' onclick='hide()'>Your message has been sent!</p>"; //print this html code on success
                                    } else { 
                                        echo error_get_last()['message']; //if error, show error message
										print_r(error_get_last());
										echo "<p class='failure' onclick='hide()'>Something went wrong, go back and try again!</p>"; //print this code on error
                                   } 
								}
                               
							
                            ?>
			</div>
		</div>
	</div>
	<!-- footer -->
	<footer class="footer">
		<p class="footer__copyright">&copy; moon boots 2017. All Rights Reserved.</p>
	</footer><!-- footer END -->
<script>
	
</script>
	<!-- Optimized loading JS Start -->
	<script>var scr = {"scripts":[
		{"src" : "js/libs.min.js", "async" : false},
		{"src" : "js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Optimized loading JS End -->

</body>
</html>
