<?php
/* Smarty version 3.1.33, created on 2019-10-30 22:23:15
  from 'C:\xampp\htdocs\DepUnicen\deportes_unicen\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db9ff438491b5_99673079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fed02c1ddc7292ba25354c172842f080aa9b2dd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DepUnicen\\deportes_unicen\\templates\\header.tpl',
      1 => 1572470515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db9ff438491b5_99673079 (Smarty_Internal_Template $_smarty_tpl) {
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
    <nav>
        <?php echo $_smarty_tpl->tpl_vars['facultades']->value[0]->nombre_facultad;?>

    </nav>    <?php }
}
