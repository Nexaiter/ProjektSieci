<?php
/* Smarty version 4.3.0, created on 2023-06-30 20:26:39
  from 'C:\xampp\htdocs\ProjektStudia\app\views\GameListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649f1e5fe5d575_64844408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '197ff40672cd8b8444f22781d09f21ab04ff7407' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektStudia\\app\\views\\GameListView.tpl',
      1 => 1688149599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649f1e5fe5d575_64844408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ProjektStudia\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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

				<!-- Header -->
					<header id="header">
						<h1> </h1>
					</header>

				<!-- Nav -->
				<nav id="nav">
				<ul class="links">
					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shopMainView">Strona główna</a></li>
					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
gameListShow">Lista gier</a></li>
					
				</ul>
				
				
				<ul class="icons">
										<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="button primary large">Wyloguj</a>
					<?php } else { ?>	
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button primary large">Zaloguj</a>
					<?php }?>
					<?php if (Core\RoleUtils::inRole("admin")) {?>
					
						<li><a class="button primary large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addProductShow">Dodaj Produkt</a></li>
					<?php }?>                           
				</ul>
			</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date"><?php echo smarty_modifier_date_format(time());?>
</span>
									<h2>Lista oferowanych gier<br />									
								</header>
                                <a  class="image main"></a>

							</article>

							<div class="bottom-margin">
							<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
gameSearch">
							 <legend>Opcje wyszukiwania</legend>
							  <fieldset>							
								<input type="text" placeholder="Nazwa" name="name" value="" />


								<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
							  </fieldset>
							</form>
						</div>

						<!-- Posts -->
							<section class="posts">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['game']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
								<article>
                                <h2><?php echo $_smarty_tpl->tpl_vars['g']->value["name"];?>
</h2>
                                <h3><?php echo $_smarty_tpl->tpl_vars['g']->value["price"];?>
 zł</h2>
                                <a class="image fit"><img src=<?php echo $_smarty_tpl->tpl_vars['g']->value["image"];?>
 alt="" /></a>
                                <p><?php echo $_smarty_tpl->tpl_vars['g']->value["description"];?>
</p>
                                <ul class="actions special">
                                    <li><a class="button">guzik</a></li>
                                </ul>
								</article>
                             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                             
                                    
								
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
}
