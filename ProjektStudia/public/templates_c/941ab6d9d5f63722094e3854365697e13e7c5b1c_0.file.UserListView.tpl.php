<?php
/* Smarty version 4.3.0, created on 2023-06-10 00:11:20
  from 'C:\xampp\htdocs\ProjektStudia\app\views\UserListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6483a3884f9f91_61643187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '941ab6d9d5f63722094e3854365697e13e7c5b1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektStudia\\app\\views\\UserListView.tpl',
      1 => 1686348679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6483a3884f9f91_61643187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14954668686483a3884f28c3_15413538', 'top');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15507732606483a3884f3127_06930376', 'bottom');
?>

    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_14954668686483a3884f28c3_15413538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_14954668686483a3884f28c3_15413538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_15507732606483a3884f3127_06930376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_15507732606483a3884f3127_06930376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    
    
    <table id="tab_user" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>login</th>
            <th>password</th>
            <th>permission</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["password"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["permission"];?>
</td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
    
    <?php
}
}
/* {/block 'bottom'} */
}
