<aside class="main-sidebar sidebar-light-olive elevation-4">
    <!-- Brand Logo -->
    <center><a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Adminseguridad</span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src='{{url("plantilla")}}/dist/img/user2-160x160.jpg' class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Modulos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='{{route('modulo.create')}}' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Modulos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='{{route('modulo.index')}}' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Modulos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-check-double"></i>
              <p>
                Inidicadores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='{{route('indicador.create')}}' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Inidicadores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='{{route('indicador.index')}}' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Inidicadores</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Items
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='{{route('item.create')}}' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='{{route('item.index')}}' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Items</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-stopwatch"></i>
              <p>
                Periodo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='{{route('periodo.create')}}' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Periodo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Evaluar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='{{route('evaluacion.create')}}' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Evaluacion</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>