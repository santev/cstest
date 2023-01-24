<?php
/* Smarty version 4.3.0, created on 2023-01-22 16:17:33
  from '/usr/local/var/www/cstest/tpl/template/productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63cd619d91ccb8_60104137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dacce5c6beb393097685f2fc4ef59a140822c698' => 
    array (
      0 => '/usr/local/var/www/cstest/tpl/template/productlist.tpl',
      1 => 1674403384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cd619d91ccb8_60104137 (Smarty_Internal_Template $_smarty_tpl) {
?><ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <li>
        <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>
<?php }
}
