<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:18:49
  from 'C:\xampp\htdocs\DepUnicen\deportes_unicen\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb4fb9aba532_91188100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde76bd1cc853b208f0f0ac733e748f36bc7cb6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DepUnicen\\deportes_unicen\\templates\\login.tpl',
      1 => 1572556433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dbb4fb9aba532_91188100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<form> 
    <div class="form-group"> 
        <label for="correo">Email</label> 
        <input type="username" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Ingresa el email">  
    </div> 
    <div class="form-group"> 
        <label for="InputPassword1">Password</label> 
        <input type="password" class="form-control" id="InputPassword1" placeholder="Contraseña"> 
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
        <?php }?>
    </div> 
    <button type="submit" class="btn btn-primary">Enviar</button> 
</form> 
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
