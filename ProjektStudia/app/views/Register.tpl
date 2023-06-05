<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
 <meta charset="utf-8"/>
 <title>Nowa akcja | Amelia framework</title>
</head>

<body>
  tpl rejestracji !

    <form action="{$conf->action_url}register" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>register to system</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="password" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="register" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
    </form>	

 </body>

</html>