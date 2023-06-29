<?php
/* Smarty version 4.3.0, created on 2023-06-28 13:49:16
  from 'C:\xampp\htdocs\ProjektStudia\app\views\RegisterViewTemp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649c1e3c93ede3_35494086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8622beac4044b9431b59a8960670a27be20d7b1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektStudia\\app\\views\\RegisterViewTemp.tpl',
      1 => 1687949152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649c1e3c93ede3_35494086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
				<h2>Rejestracja do systemu</h2>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
	            <fieldset>    
                <div class="pure-control-group" style="margin-bottom:20px">
		        	<label for="login">Login: </label>
		        	<input id="login" type="text" name="login">
	        	</div>
                
                <div class="pure-control-group">
			    <label for="pass">Hasło: </label>
			    <input id="password" type="password" name="password" /><br />
		        </div>
		        <div class="pure-controls">
			        <input type="submit" value="Zarejestruj" class="pure-button pure-button-primary" />
		        </div>
                <div class="col-12">
                    <a class="button primary large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Powrót</a>
                
	        </fieldset>
            </form>	
			</header>
            
			                    
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_830845239649c1e3c936993_78395419', 'messages');
?>

				</div>
			</form>

            
		</div>
</div>
<?php }
/* {block 'messages'} */
class Block_830845239649c1e3c936993_78395419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_830845239649c1e3c936993_78395419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


						<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
							<div class="messages bottom-margin">
								<ul>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
										<span msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</span>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							</div>
						<?php }?>

					<?php
}
}
/* {/block 'messages'} */
}
