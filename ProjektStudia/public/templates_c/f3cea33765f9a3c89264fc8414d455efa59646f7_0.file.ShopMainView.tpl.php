<?php
/* Smarty version 4.3.0, created on 2023-07-01 22:00:08
  from 'C:\xampp\htdocs\ProjektStudia\app\views\ShopMainView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a085c8b8e2f3_04134539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3cea33765f9a3c89264fc8414d455efa59646f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektStudia\\app\\views\\ShopMainView.tpl',
      1 => 1688241607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a085c8b8e2f3_04134539 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
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
							 <?php if (Core\RoleUtils::inRole("user")) {?>
                                <li><a class="button primary large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showOrder">Koszyk</a></li>
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
