<!--navegacion-->
<nav class="navbar navbar-expand-xl bg-body-tertiary bg-opacity-25">
    <!--logo-->
    <div class="container-xl">
        <a class="d-flex navbar-brand" href="<?php echo base_url('principal_ultimo')?>"><img src="<?php echo base_url ('assets/img/logo.png')?>" alt="Monita" width="90 br-50px"></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" container collapse navbar-collapse justify-content-end " id="navbarNavAltMarkup">

            <ul class="navbar-nav w-frex">
                <li><a class="nav-link" aria-current="page" href="<?php echo base_url('/quienes_somos') ?>">Quienes somos</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/acerca_de') ?>" > Acerca de </a></li>
                <li><a class="nav-link" href="<?php echo base_url('registro') ?>">Registrarse</a></li>
                <li><a class="nav-link" href="<?php echo base_url('login')?>">Login</a></li>
            </ul>

            <form class=" d-flex" role="Search" action="">
                <input class="form-control border-success justify-content-lg-end me-2" type="search" placeholder="Search" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
</nav>

<!--fin navegacion-->
