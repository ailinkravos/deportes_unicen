<?php
/* Smarty version 3.1.33, created on 2019-10-30 22:23:20
  from 'C:\xampp\htdocs\DepUnicen\deportes_unicen\templates\ver_facultad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db9ff48071737_45317819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '834637deaced27cdafb4b81d434951df9bb090da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DepUnicen\\deportes_unicen\\templates\\ver_facultad.tpl',
      1 => 1572470515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5db9ff48071737_45317819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h3>Historia</h3> 
    <p>
        <?php echo $_smarty_tpl->tpl_vars['facultad']->value->historia;?>
 
            </p> 
    </div>


<?php }
}
