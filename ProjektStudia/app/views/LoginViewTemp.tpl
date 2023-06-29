<!DOCTYPE HTML>
<html>
	<head>
		<title>Elements Reference - Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <style>
			.login-wrapper {
				display: flex;
				justify-content: center;
				align-items: center;
				/* height: 100vh; */
			}

			.container {
				width: 400px;
				text-align: center;
			}
		</style>
	</head>
    
	<body>
	<div class="login-wrapper">
		<div class="container">
			<header>
				<h2>Logowanie do systemu</h2>
				<p>Zaloguj się lub zarejestruj</p>               
			</header>
            
			<form action="{$conf->action_url}login" method="post" class="login-form">
				<div class="row gtr-uniform gtr-50">
					<div class="col-12">
						<input type="text" name="login" id="id_login" placeholder="Login" value="{$form->login}">
					</div>
					<div class="col-12">
						<input type="password" name="pass" id="id_pass" placeholder="Hasło">
					</div>
					<div class="col-12">
						<input type="submit" value="Zaloguj" class="button primary large">
					</div>

                    <div class="col-12">
                    <a class="button primary large" href="{$conf->action_root}registerShow">Zarejestruj sie</a></br>
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
				</div>
			</form>

            
		</div>
</div>
