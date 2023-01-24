<?php
/* Smarty version 4.3.0, created on 2023-01-24 17:10:09
  from '/usr/local/var/www/cstest/tpl/template/catalogmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d010f18331c6_16154655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc7c795a9434bd43b59a5d50c05817e64ff733f2' => 
    array (
      0 => '/usr/local/var/www/cstest/tpl/template/catalogmenu.tpl',
      1 => 1674580175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d010f18331c6_16154655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => '/usr/local/var/www/cstest/tpl/compile/dc7c795a9434bd43b59a5d50c05817e64ff733f2_0.file.catalogmenu.tpl.php',
    'uid' => 'dc7c795a9434bd43b59a5d50c05817e64ff733f2',
    'call_name' => 'smarty_template_function_menu_87967321363d010f17faff3_51077265',
  ),
));
if ((isset($_GET['group']))) {?>
    <?php $_smarty_tpl->_assignInScope('get', $_GET['group']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('get', 0);
}?>



<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['array']->value), true);
}
/* smarty_template_function_menu_87967321363d010f17faff3_51077265 */
if (!function_exists('smarty_template_function_menu_87967321363d010f17faff3_51077265')) {
function smarty_template_function_menu_87967321363d010f17faff3_51077265(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    
    <ul class="level-<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
"> 
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            
            <li class="<?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['get']->value) {?>active<?php }?>">
                
                <a href="?group=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                </a> <?php echo $_smarty_tpl->tpl_vars['v']->value['prods_count'];?>

                <?php if ((is_array($_smarty_tpl->tpl_vars['v']->value['child_groups']) && !empty($_smarty_tpl->tpl_vars['v']->value['child_groups']))) {?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['v']->value['child_groups'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                <?php }?>
                
            </li>
            
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </ul>
        
<?php
}}
/*/ smarty_template_function_menu_87967321363d010f17faff3_51077265 */
}
