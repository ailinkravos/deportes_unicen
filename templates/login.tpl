{include 'templates/header.tpl'} 
<form> 
    <div class="form-group"> 
        <label for="correo">Email</label> 
        <input type="username" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Ingresa el email">  
    </div> 
    <div class="form-group"> 
        <label for="InputPassword1">Password</label> 
        <input type="password" class="form-control" id="InputPassword1" placeholder="Contraseña"> 
        {if $error}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
        {/if}
    </div> 
    <button type="submit" class="btn btn-primary">Enviar</button> 
</form> 
{include 'templates/footer.tpl'}

