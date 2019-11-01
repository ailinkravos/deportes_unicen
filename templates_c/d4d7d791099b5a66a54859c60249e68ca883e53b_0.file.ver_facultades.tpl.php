<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:06:08
  from 'C:\xampp2\htdocs\pagdeportes\Deportes\deportes_unicen\templates\ver_facultades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb5ad02f23d9_64544864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d7d791099b5a66a54859c60249e68ca883e53b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\pagdeportes\\Deportes\\deportes_unicen\\templates\\ver_facultades.tpl',
      1 => 1572559564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dbb5ad02f23d9_64544864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header>
        <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['facultades']->value[0]->nombre_facultad;?>
</h1>
        
        </header>
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
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
