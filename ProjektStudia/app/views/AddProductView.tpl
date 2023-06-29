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

            <header style="font-weight: bold;text-align: center;" >
            <h2> </h2>  
            </header>            

				<!-- Main -->
					<div id="main">

                    <h2>Dodawanie gier do systemu</h2>
                    <form action="{$conf->action_root}addGame" method="post" class="pure-form pure-form-aligned bottom-margin">

                    <fieldset>    
                    <div class="pure-control-group" style="margin-bottom:20px">
                        <label for="name">Nazwa gry: </label>
                        <input id="login" type="text" name="name">
                    </div>
                    
                    <div class="pure-control-group">
                    <label for="pass">Krótki opis gry: </label>
                    <input id="description" type="text" name="description" /><br />
                    </div>

                    <div class="pure-control-group">
                    <label for="pass">Cena gry: </label>
                    <input id="price" type="text" name="price" /><br />
                    </div>

                    <div class="pure-control-group">
                    <label for="pass">Adres obrazka: </label>
                    <input id="image" type="text" name="image" /><br />
                    </div>

                    <div class="pure-controls">
                        <input type="submit" value="Dodaj do systemu" class="pure-button pure-button-primary" />
                    </div>
                    <div class="col-12">
                        <a class="button primary large" href="{$conf->action_root}editProductShow">Edytuj grę</a>
                        <a class="button primary large" href="{$conf->action_root}shopMainShow">Powrót</a>
					</div>

                    {block name=messages}

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

					{/block}
				<!-- Footer -->
					<footer id="footer">				
					
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design:HTML5 UP</a></li></ul>
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