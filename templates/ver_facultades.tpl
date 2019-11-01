{include file ="header.tpl"}
<header>
        <h1 class="titulo">{$facultades[0]->nombre_facultad}</h1>
        
        {* <img class="logo" src="../images/logodeporte.jpg" alt="logo de deportes de la unicen" /> *}
</header>
<<<<<<< HEAD

=======
<h2 id = "menu">Menú</h2>
    <nav class = nonav>
        <ul>
            {foreach from=$facultades item=facultad}
                <li><a href="{$URL}site/{$facultad->nombre_facultad}">{$facultad->nombre_facultad}</li>
            {/foreach}
        </ul>
    </nav>
>>>>>>> fdd3f917c30a3aeae838abe3c4ce8890daeeccc6
{include file ='templates/footer.tpl'}
