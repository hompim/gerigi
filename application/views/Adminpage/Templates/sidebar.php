<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('Admin'); ?>" class="brand-link">
    <img src="<?=base_url('assets/') ?>img/LogoGerigi.png" alt="Logo Gerigi" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-bold">GERIGI 2021</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard Menu -->
        <li class="nav-item">
          <a href="<?= base_url('Admin'); ?>" class="nav-link <?= $title == 'Admin' ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <!-- Shorten Link Menu -->
        <li class="nav-item <?= ($title == 'Buat Shorten Link' || $title == 'Daftar Shorten Link') ? 'menu-open' : ''; ?>">
          <a href="" class="nav-link <?= ($title == 'Buat Shorten Link' || $title == 'Daftar Shorten Link') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-link"></i>
            <p>
              Shorten Link
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('Shorten'); ?>" class="nav-link <?= $title == 'Buat Shorten Link' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Buat Baru</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Shorten/list'); ?>" class="nav-link <?= $title == 'Daftar Shorten Link' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Link</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Zoom & Presensi Menu -->
        <li class="nav-item">
          <a href="<?= base_url('Admin/link'); ?>" class="nav-link <?= $title == 'Zoom & Presensi' ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-concierge-bell"></i>
            <p>
              Zoom & Presensi
            </p>
          </a>
        </li>

        <!-- Pretest & Posttest Menu -->
        <li class="nav-item">
          <a href="<?= base_url('Admin/tests'); ?>" class="nav-link <?= $title == 'Pretest & Posttest' ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pretest & Posttest
            </p>
          </a>
        </li>

        <!-- Tugas Menu -->
        <li class="nav-item">
          <a href="<?= base_url('Admin/viewTasks'); ?>" class="nav-link <?= $title == 'Tugas' ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
              Tugas
            </p>
          </a>
        </li>

        <!-- Buat Tugas Menu -->
        <li class="nav-item">
        <a href="<?= base_url('Admin/addTasks'); ?>" class="nav-link <?= $title == 'Buat Tugas' ? 'active' : ''; ?>">
          <i class="nav-icon fas fa-tasks"></i>
          <p>
            Buat Tugas
          </p>
        </a>
      </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>