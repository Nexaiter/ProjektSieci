<?php
/* Smarty version 4.3.0, created on 2023-06-28 22:56:35
  from 'C:\xampp\htdocs\ProjektStudia\app\views\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649c9e83935270_80273359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd2f80dca29c61e5580a7159808549127bdc6bc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektStudia\\app\\views\\EditView.tpl',
      1 => 1687985566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649c9e83935270_80273359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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

                    <h2>Edytowanie gry</h2>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
editGame" method="post" class="pure-form pure-form-aligned bottom-margin">

                    <fieldset>    
                    <div class="pure-control-group" style="margin-bottom:20px">
                        <label for="name">Nazwa gry: </label>
                        <input id="login" type="text" name="name">
                    </div>
                                        
                    <div class="pure-control-group">
                    <label for="pass">Cena gry: </label>
                    <input id="price" type="text" name="price" /><br />
                    </div>

                    <div class="pure-controls">
                        <input type="submit" value="Dokonaj edycji" class="pure-button pure-button-primary" />
                    </div>
                    <div class="col-12">
                        <a class="button primary large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addProductShow">Powrót</a>
					</div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1913100221649c9e8392d572_54733176', 'messages');
?>

				<!-- Footer -->
					<footer id="footer">				
					
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design:HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'messages'} */
class Block_1913100221649c9e8392d572_54733176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1913100221649c9e8392d572_54733176',
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
