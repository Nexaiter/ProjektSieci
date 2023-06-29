<?php
/* Smarty version 4.3.0, created on 2023-06-10 00:35:38
  from 'C:\xampp\htdocs\ProjektStudia\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6483a93a1f4ce4_74647775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7fabb2be2d10e50a04589101cd534933f90dbd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektStudia\\app\\views\\RegisterView.tpl',
      1 => 1686350135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6483a93a1f4ce4_74647775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6634896076483a93a1f2315_20064912', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_6634896076483a93a1f2315_20064912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_6634896076483a93a1f2315_20064912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
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
<?php
}
}
/* {/block 'top'} */
}
