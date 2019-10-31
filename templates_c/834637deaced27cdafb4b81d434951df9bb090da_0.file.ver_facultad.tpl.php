<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:16:57
  from 'C:\xampp\htdocs\DepUnicen\deportes_unicen\templates\ver_facultad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb4f498a5759_16655075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '834637deaced27cdafb4b81d434951df9bb090da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DepUnicen\\deportes_unicen\\templates\\ver_facultad.tpl',
      1 => 1572556607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dbb4f498a5759_16655075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h2><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
</h2>
    <h3>Historia</h3> 
    <p>
        <?php echo $_smarty_tpl->tpl_vars['facultad']->value->historia;?>

    </p> 
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
