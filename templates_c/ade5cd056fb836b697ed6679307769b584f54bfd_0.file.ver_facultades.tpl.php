<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:03:59
  from 'C:\xampp\htdocs\DepUnicen\deportes_unicen\templates\ver_facultades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb5a4faf5e81_15467157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ade5cd056fb836b697ed6679307769b584f54bfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DepUnicen\\deportes_unicen\\templates\\ver_facultades.tpl',
      1 => 1572559436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dbb5a4faf5e81_15467157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header>
        <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['facultades']->value[0]->nombre_facultad;?>
</h1>
        
        </header>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
