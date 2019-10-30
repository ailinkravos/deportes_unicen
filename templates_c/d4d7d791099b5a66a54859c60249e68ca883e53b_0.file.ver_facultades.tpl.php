<?php
/* Smarty version 3.1.33, created on 2019-10-30 22:52:43
  from 'C:\xampp2\htdocs\pagdeportes\Deportes\deportes_unicen\templates\ver_facultades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dba062b0ecba0_04480671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d7d791099b5a66a54859c60249e68ca883e53b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\pagdeportes\\Deportes\\deportes_unicen\\templates\\ver_facultades.tpl',
      1 => 1572472360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5dba062b0ecba0_04480671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header>
        <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['facultades']->value[0]->nombre_facultad;?>
</h1>
        </header>
<h3 id = "menu">Menú</h3>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
