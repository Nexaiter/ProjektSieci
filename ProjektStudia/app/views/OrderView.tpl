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

            <header style="font-weight: bold;text-align: center;" >
            <h2> </h2>  
            </header>            

				<!-- Main -->
					<div id="main">

                    <h2>Zamówione gry</h2>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nazwa gry</th>
                                        <th>Cena</th>
                                        <th>Ilość</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $gameOrder as $g}
                                    <tr>
                                        <td>{$g["name"]}</td>
                                        <td>{$g["price"]} zł</td>
                                        <td>{$g["amount"]} szt.</td>
                                        <td>
                                        <li><a class="button primary large" href="{$conf->action_root}removeOrder/{$g['id']}">Usuń 1 sztukę</a></li>
                                        </td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                            {if $sum > 0 }
                                Suma całkowita {$sum} zł </br>
                            <a class="button primary large" href="{$conf->action_root}buyOrder">Zakup</a>
                            {else if $sum == 0}
                                <a class="button primary large" href="{$conf->action_root}gameListShow">Idź coś kupić</a>
                            {/if}
                            
                           
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
				
                    <footer>
                    <a class="button primary large" href="{$conf->action_root}shopMainView">Powrót</a>
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