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
                            <li><a class="button primary large" href="{$conf->action_root}registerShow">Zarejestruj</a></li>
                            <li><a class="button primary large" href="{$conf->action_root}loginShow">Zaloguj sie</a></li>
                            <li><a class="button primary large" href="{$conf->action_root}addProductShow">Dodaj Produkt</a></li>

						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">{$smarty.now|date_format}</span>
									<h2>Lista oferowanych gier<br />									
								</header>
                                <a  class="image main"></a>

							</article>

						<!-- Posts -->
							<section class="posts">
                                {foreach $game as $g}
								<article>
                                <h2>{$g["name"]}</h2>
                                <h3>{$g["price"]} zł</h2>
                                <a class="image fit"><img src={$g["image"]} alt="" /></a>
                                <p>{$g["description"]}</p>
                                <ul class="actions special">
                                    <li><a class="button">guzik</a></li>
                                </ul>
								</article>
                             {/foreach}

                             {*  *}

                                    
								
							</section>

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