<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Header -->
					<header id="header">
						<h1> </h1>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="{$conf->action_root}shopMainView">Strona główna</a></li>
                            <li class="active"><a href="{$conf->action_root}gameListShow">Lista gier</a></li>
							
						</ul>
                        
                        
						<ul class="icons">
                            {* <li><a class="button primary large" href="{$conf->action_root}registerShow">Zarejestruj</a></li>
                            <li><a class="button primary large" href="{$conf->action_root}loginShow">Zaloguj sie</a></li>    *}
							{if count($conf->roles)>0}
								<a href="{$conf->action_root}logout" class="button primary large">Wyloguj</a>
							{else}	
								<a href="{$conf->action_root}loginShow" class="button primary large">Zaloguj</a>
							{/if}
                            {if Core\RoleUtils::inRole("admin")}
                            
                                <li><a class="button primary large" href="{$conf->action_root}addProductShow">Dodaj Produkt</a></li>
                            {/if}                           
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">{$smarty.now|date_format}</span>
									<h2><a href="#">Strona główna<br />
									</a></h2>
									<p>Jakis glowny opis</p>
								</header>
								<a  class="image main"><img src="https://www.052b.pl/wp-content/uploads/2019/05/projekt-sklepu-internetowego.png" alt="" /></a>
								
							</article>

						<!-- Posts -->
                        {if $msgs->isMessage()}
							<div class="messages bottom-margin">
								<ul>
									{foreach $msgs->getMessages() as $msg}
										{strip}
											<span msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if}
												{if $msg->isInfo()}info{/if}">{$msg->text}</span>
										{/strip}
									{/foreach}
								</ul>
							</div>
						{/if}

						<!-- Footer -->
							<footer>
							
							</footer>

					</div>

				<!-- Footer -->
					<footer id="footer">
						
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section>						
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

            
            

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>