<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
   <!-- <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>
              <a class="nav-link dropdown-toggle d-none d-sm-inline-block mt-img-avatar" href="#" data-bs-toggle="dropdown">
                <img src="<?php echo media(); ?>/images/img/user2-160x160.jpg" height="32" class="img-circle elevation-1" alt="Perfil" /> <span class="text-dark">Víctor Guzmán</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Cambiar contraseña</a>
                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="log-out"></i> Cerrar sesión</a>
              </div>
            </li>
     
    </ul>-->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo BASE_URL; ?>/Admin/administrarEncuestas" class="brand-link">
      <span class="brand-text font-weight-light">Encuestas SEUAT</span>
    </a>


    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-legacy text-sm nav-compact flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="ml-3 mr-2" data-feather="book-open"></i>
              <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
              <p>
                Evaluaciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL; ?>/Admin/administrarEncuestas" class="nav-link">
                   <i class="ml-3 mr-2" data-feather="flag"></i>

                  <p>Encuestas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL; ?>/Admin/ListaDocentes" class="nav-link">
                   <i class="ml-3 mr-2" data-feather="flag"></i>

                  <p>Lista de Docentes</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL; ?>/Admin/ListaAlumnos" class="nav-link">
                   <i class="ml-3 mr-2" data-feather="flag"></i>

                  <p>Lista de Alumnos</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>