{include file ="header.tpl"}
<div class= historia>
    <h2>{$facultad->nombre_facultad}</h2>
    <h3>Historia</h3> 
    <p>{$facultad->historia}</p> 
</div>
<div class= copa>
    <h1>Copas</h1>
   <table>
            <tr>
                 <td>A&ntildeo</td>
                 <td>Edici&oacuten</td>
            </tr>
            <tr>
                <td>{$copas->ganador}</td> 
                {* lo comenté por que me salta error  *}
                {* <td>{$copas->edicion}</td> lo comenté por que me salta error *}
             </tr>

     </table>
</div>
<div class=formFacu>
<form>
{* hay que ver cómo hacer que se lo muestre solo al ABM *}
    <h2> Ingrese nueva facultad</h2> 
     <ul>
          <li>Facultad: <input type="text" id="nombre" placeholder="facultad" name="facultad" value="" > </li>
          <li>Sede: <input type="text" id="sede" placeholder="sede" name="sede" value="" ></li>
          <li>Historia: <input type="text" id="historia" placeholder="historia" name="historia" value="" ></li>
          <li><button type="submit">Agregar facultad</button></li>
     </ul>
    </form> 
    {* COMO CREAMOS LOS BOTONES PARA ELIMINAR Y EDITAR LA FACULTAD QUE CREA EL ABM *}
    {* <button type="button" id="btn-fac" class="eliminarFac">Eliminar facultad</button> *}
    {* <button type="button" id="btn-fac" class="editarFac">Editar Facultad</button> *} 
</div>
<div class=formAlumno> 
<form>
{* en la seccion de "olimpiadas se muestra pero no deberia..." *}
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
{include file='templates/footer.tpl'}
