<?php
/* Smarty version 4.3.0, created on 2023-01-24 18:40:46
  from '/usr/local/var/www/cstest/tpl/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d0262e119235_95812255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'debc3ca4592dfcc2ea109c1dd288b6817dd83e6a' => 
    array (
      0 => '/usr/local/var/www/cstest/tpl/template/index.tpl',
      1 => 1674585642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d0262e119235_95812255 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</title>
        <style>

            .left {
                width: 30%;
                float:left;
            }

            .right {
                width: 70%;
                float:right;
            }

            ul.level-0 {
                display: block;
            }

            .visible {
                display: block;
            }

            .green {
                color: green;
            }

            ul {
                display: none;
            }
        </style>
        <?php echo '<script'; ?>
 src="vendor/components/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <span><a href="/<?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
">Все товары</a></span>


        <div class="container">
            <div class="left">
                <?php echo $_smarty_tpl->tpl_vars['catalog_menu']->value;?>

            </div>
            <div class="right">
                <?php echo $_smarty_tpl->tpl_vars['product_list']->value;?>

            </div>
        </div>

        <?php echo '<script'; ?>
>

            $("li.active").parents("ul").addClass("visible");
            $("li.active").children("a").addClass("green");
            $("li.active").children("ul").addClass("visible");

        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
