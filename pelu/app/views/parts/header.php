<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/home/logout">Peluqueria Candis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."home/home":"" ?>">
        <?php echo isset($_SESSION['user']) ? "Home":""?></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."users/index":"" ?>">
        <?php echo isset($_SESSION['user']) ? "Usuarios":""?></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."servicios/index":"" ?>">
        <?php echo isset($_SESSION['user']) ? "Servicios":""?></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."tipos/index":"" ?>">
        <?php echo isset($_SESSION['user']) ? "Tipos de Servicios":""?></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."fotos/index":"" ?>">
        <?php echo isset($_SESSION['user']) ? "Fotos":""?></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."userServicio/index":"" ?>">
        <?php echo isset($_SESSION['user']) ? "UsuarioServicio":""?></a>
      </li>
      </ul>

    <!-- nuevo -->
    <ul class="navbar-nav">
      <li class="nav-item active"><a class="nav-link" href=""><?php echo isset($_SESSION['user']) ? $_SESSION['user']->name :'' ?></a></li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."login/logout": PATH."home/login" ?>">
        <?php echo isset($_SESSION['user']) ? "Logout":"Login"?></a>
      </li>
    </ul>
  </div>
</nav>
