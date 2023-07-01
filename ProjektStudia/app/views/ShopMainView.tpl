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
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
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
							 {if Core\RoleUtils::inRole("user")}
                                <li><a class="button primary large" href="{$conf->action_root}showOrder">Koszyk</a></li>
                            {/if}                         
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">{$smarty.now|date_format}</span>
									<h2>Game World<br />
									</a></h2>
									<p>Witaj w GameWorld - Twoim pierwszym przystanku w świecie gier! Jesteśmy dynamicznym sklepem internetowym, który oferuje szeroki wybór gier dla różnych platform, dostarczając niezapomniane doznania dla pasjonatów rozrywki w każdym wieku. Nasza misja polega na zapewnieniu klientom najnowszych tytułów, klasycznych hitów i wyjątkowych ekskluzywności, aby zaspokoić nawet najbardziej wymagające gusta graczy.</p>
								</header>
								<a  class="image main"><img src="https://www.052b.pl/wp-content/uploads/2019/05/projekt-sklepu-internetowego.png" alt="" /></a>
								
								<h2>Game World<br />
									</a></h2>
									<p>W GameWorld oferujemy kompleksową gamę usług związanych z sprzedażą gier. Nasze szerokie portfolio obejmuje gry na konsole, komputery PC oraz urządzenia przenośne. Z nami możesz być pewien, że znajdziesz najgorętsze nowości na rynku, od fascynujących przygodowych tytułów po intensywne gry akcji, strategie, symulatory, sportowe i wiele więcej.</p>
									<p>Nasza pasja do gier jest nieodłączną częścią naszego DNA, dlatego dbamy o to, aby nasza oferta była zawsze aktualna i różnorodna. Współpracujemy z renomowanymi wydawcami i producentami, aby dostarczać Ci gry od najlepszych twórców branży.</p>
									<p>W GameWorld dbamy również o wygodę naszych klientów. Nasza responsywna strona internetowa umożliwia łatwe i intuicyjne przeglądanie katalogu gier, proste zamawianie i szybką dostawę. Zapewniamy również pomoc techniczną, gdybyś potrzebował wsparcia w instalacji lub rozwiązywaniu problemów z grami.</p>
									<p>Dołącz do naszej społeczności graczy i odkryj nieograniczone możliwości, jakie oferuje świat gier. GameWorld to miejsce, gdzie Twoje marzenia o epickich przygodach i niesamowitych wyzwaniach stają się rzeczywistością.</p>
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
								<p>Uniwersytet Śląski w Katowicach<br />
								Bankowa 12, 40-007 Katowice</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p>(12)297345</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p>totallynot@sus.code.com</a></p>
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