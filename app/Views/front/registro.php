<!--inicio del formulario de Registro-->
<div class="container d-flex justify-content-center">
    <form class="form-registro w-60">

    <h2 class="Tex-form">Registrar Usuario</h2>
    
    <label for="inputNombre"  class="form-label">Nombre</label>
    <input class="form-control" type="text" name="nombre" placeholder="Nombre" required minlength="3" aria-label="default input example">

    <label for="inputApellido"  class="form-label">Apellido</label>
    <input class="form-control" type="text" name="apellido" placeholder="Apellido" required minlength="3" aria-label="default input example">

    <label for="inputEmail"  class="form-label">Email</label>
    <input class="form-control" type="email" name="email" id="" placeholder="Correo Electronico" requiredaria-label="default input example">

    <label for="inputUsuario" class="form-label">Usuario</label>
    <input  class="form-control" type="Usuario" name="username" placeholder="Introdusca un Nombre de Usuario" required aria-label="default input example">

    <label for="inputPassword" class="form-label">Password</label>
    <input  class="form-control" type="password" name="contraseña" id="" placeholder="ingresar contraseña" required minlength="6" aria-label="default input example">
    <div class="buttons">
        <button type="button" class="btn btn-success me-3">Guardar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </div>
</form>
</div>
<!--fin del formulario de Registro-->