<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Link Zoom dan Presensi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Link</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Link Zoom dan Presensi Gerigi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <?php if($this->session->flashdata('failed_editLink')): ?>
              <div class="alert alert-danger"><?php echo $this->session->flashdata('failed_editLink'); ?></div>
          <?php endif; ?>
          <?php if($this->session->flashdata('failed_setLink')): ?>
              <div class="alert alert-danger"><?php echo $this->session->flashdata('failed_setLink'); ?></div>
          <?php endif; ?>
          <?php if($this->session->flashdata('success_setLink')): ?>
              <div class="alert alert-success"><?php echo $this->session->flashdata('success_setLink'); ?></div>
          <?php endif; ?>
          <table id="datatables" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Kelompok Besar</th>
                <th>Link Zoom</th>
                <th>Link Presensi</th>
                <th>Ubah</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($lists as $list) : ?>
                <tr>
                  <td class="text-center"><?= $i++; ?></td>
                  <td><?= $list['dateUse']; ?></td>
                  <td><?= $list['namaKelBesar']; ?></td>
                  <td><?= $list['link_zoom']; ?></td>
                  <td><?= $list['link_presensi']; ?></td>
                  <td class="text-center">
                    <a href="editLink/<?= $list['id']?>" class="btn btn-primary btn-sm">
                      Ubah
                    </button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nama Kelompok Besar</th>
                <th>Nama Kelompok Kecil</th>
                <th>Nama Mahasiswa</th>
                <th>Tanggal Pengumpulan</th>
                <th>Ubah</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->