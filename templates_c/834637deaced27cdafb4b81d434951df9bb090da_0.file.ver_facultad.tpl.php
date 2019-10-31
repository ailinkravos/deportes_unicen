<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:41:09
  from 'C:\xampp\htdocs\DepUnicen\deportes_unicen\templates\ver_facultad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb54f54227b1_34170245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '834637deaced27cdafb4b81d434951df9bb090da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DepUnicen\\deportes_unicen\\templates\\ver_facultad.tpl',
      1 => 1572557697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dbb54f54227b1_34170245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class= historia>
    <h2><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
</h2>
    <h3>Historia</h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['facultad']->value->historia;?>
</p> 
</div>
<div class= copa>
    <h1>Copas</h1>
   <table>
            <tr>
                 <td>A&ntildeo</td>
                 <td>Edici&oacuten</td>
            </tr>
            <tr>
                 
                             </tr>

     </table>
</div>
<div class=formFacu>
<form>
    <h2> Ingrese nueva facultad</h2> 
     <ul>
          <li>Facultad: <input type="text" id="nombre" placeholder="facultad" name="facultad" value="" > </li>
          <li>Sede: <input type="text" id="sede" placeholder="sede" name="sede" value="" ></li>
          <li>Historia: <input type="text" id="historia" placeholder="historia" name="historia" value="" ></li>
          <li><button type="submit">Agregar facultad</button></li>
     </ul>
    </form> 
             
</div>
<div class=formAlumno> 
<form>
    <h2> Complete sus datos</h2>
     <ul>
          <li>Nombre: <input type="text" id="nombre" placeholder="nombre" name="nombre" value="" > </li>
          <li>Apellido: <input type="text" id="apellido" placeholder="apellido" name="apellido" value="" > </li>
          <li>Facultad: <input type="text" id="facultad" placeholder="facultad" name="facultad" value="" ></li>
          <li>Disciplina: <input type="text" id="disciplina" placeholder="disciplina" name="disciplina" value="" ></li>
          <li>Celular: <input type="text" id="celular" placeholder="celular" name="celular" value="" > </li>
          <li>Email: <input type="text" id="email" placeholder="email" name="email" value="" > </li>
          <li><button type="submit">Enviar</button></li>
     </ul>
    </form> 
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
