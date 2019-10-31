<?php
/* Smarty version 3.1.33, created on 2019-10-31 16:24:59
  from 'C:\xampp2\htdocs\pagdeportes\Deportes\deportes_unicen\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbafccbb4ac81_06267807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62119225484d3174fba42dbeafa5d95013ce599d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\pagdeportes\\Deportes\\deportes_unicen\\templates\\header.tpl',
      1 => 1572535341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbafccbb4ac81_06267807 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=devicewidth", initial-scale="1.0";
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
            
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
    <body>
        <h2 id = "menu">Menú</h2>
    <nav class = nonav>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facultades']->value, 'facultad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facultad']->value) {
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
site/<?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
"><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </nav> 
    <?php }
}
