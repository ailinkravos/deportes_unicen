<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:18:09
  from 'C:\xampp\htdocs\DepUnicen\deportes_unicen\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb4f912588c3_43746334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d3db19924213ed90fba237f937263cda6228ad7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DepUnicen\\deportes_unicen\\templates\\footer.tpl',
      1 => 1572556631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5dbb4f912588c3_43746334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <footer>
            <ul>
                <li><i class="fab fa-instagram"> <a href="http://instagram.com/deportesunicen"target= _blank> @DeportesUnicen</a> </i>
                </li>
                <li><i class="fab fa-facebook-square"> <a href="https://www.facebook.com/deporte.unicen"target= _blank> Deporte
                            Unicen</a></i> </li>
                <li><i class="fab fa-twitter-square"> <a href="http://twitter.com/depunicen"target= _blank> @DepUnicen</a></i> </li>
                <li><i class="fas fa-phone-square"> 0249 - 4385511</i> </li>
                <li><i class="fas fa-envelope-square"> deportes@rec.unicen.edu.ar</i> </li>
            </ul>
        </footer>
    <?php echo '<script'; ?>
 src = "js/barraMenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/validar.js"> <?php echo '</script'; ?>
>
</body>

</html><?php }
}
