<?php
/* Smarty version 3.1.33, created on 2019-10-29 00:54:32
  from 'C:\xampp2\htdocs\pagdeportes\Deportes\deportes_unicen\templates\ver_facultad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db77fb8498fb6_16048674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '767f5111e256ee78f7f0a4cf4c9146512fd81c69' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\pagdeportes\\Deportes\\deportes_unicen\\templates\\ver_facultad.tpl',
      1 => 1572306867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5db77fb8498fb6_16048674 (Smarty_Internal_Template $_smarty_tpl) {
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
