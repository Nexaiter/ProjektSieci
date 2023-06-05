<?php
/* Smarty version 4.3.0, created on 2023-06-04 11:50:38
  from 'C:\xampp\htdocs\ProjektStudia\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647c5e6eb79ac6_41986540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e18111c6ac31d0f934794fbdb8af96e3c5811ec1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektStudia\\app\\views\\Login.tpl',
      1 => 1685872236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647c5e6eb79ac6_41986540 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Hello World | Amelia framework</title>
</head>

<body>
    
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Password: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Sign in" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	


</body>

</html><?php }
}
