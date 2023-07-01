<?php
/* Smarty version 4.3.0, created on 2023-07-01 16:52:12
  from 'C:\xampp\htdocs\ProjektStudia\app\views\OrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a03d9c877e70_35729980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b673c486fece379042d51887777553442f1ad2e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektStudia\\app\\views\\OrderView.tpl',
      1 => 1688223131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a03d9c877e70_35729980 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
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
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gameOrder']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['g']->value["name"];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['g']->value["price"];?>
 zł</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['g']->value["amount"];?>
 szt.</td>
                                        <td>
                                        <li><a class="button primary large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
removeOrder/<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">Usuń 1 sztukę</a></li>
                                        </td>
                                    </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                            <?php if ($_smarty_tpl->tpl_vars['sum']->value > 0) {?>
                                Suma całkowita <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
 zł </br>
                            <a class="button primary large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
buyOrder">Zakup</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sum']->value == 0) {?>
                                <a class="button primary large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
gameListShow">Idź coś kupić</a>
                            <?php }?>
                            
                           
                        </div>
                        
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136816176964a03d9c874068_32552467', 'messages');
?>

				
                    <footer>
                    <a class="button primary large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shopMainView">Powrót</a>
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
class Block_136816176964a03d9c874068_32552467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_136816176964a03d9c874068_32552467',
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
