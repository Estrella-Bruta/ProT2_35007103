<!--inicio del formulario de login-->
<div class="container d-flex justify-content-center">
<form class="form-login w-60">

    <h2 class="tex-form">Iniciar Sesion</h2>

    <label for="inputEmail"  class="form-label">Email</label>
    <input class="form-control" type="email" name="email" id="" placeholder="Correo Electronico" requiredaria-label="default input example">
    <label for="inputPassword" class="form-label">Password</label>
    <input  class="form-control" type="password" name="contraseña" id="" placeholder="ingresar contraseña" required minlength="6" aria-label="default input example">

    <div class="buttons">
        <button type="button" class="btn btn-success me-3">Ingresar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </div> 

    <div class="dropdown">
        <p class="text-white">¿Aun no te registraste?<a class="dropdown" href="#">Registrate aqui</a></p>
    </div>
</form>
</div>
<!--fin del formulario de login-->
