{* {extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}register" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Rejestrowanie do systemu</legend>
	<fieldset>
    
        <div class="pure-control-group">
			<label for="login">Login: </label>
			<input id="login" type="text" name="login">
		</div>
        <div class="pure-control-group">
			<label for="pass">Password: </label>
			<input id="password" type="password" name="password" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="register" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
{/block} *}
