<?php
/* Smarty version 3.1.33, created on 2019-10-29 01:23:25
  from 'C:\xampp2\htdocs\pagdeportes\Deportes\deportes_unicen\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7867d3a2bf2_78568444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62119225484d3174fba42dbeafa5d95013ce599d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\pagdeportes\\Deportes\\deportes_unicen\\templates\\header.tpl',
      1 => 1572308602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db7867d3a2bf2_78568444 (Smarty_Internal_Template $_smarty_tpl) {
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
