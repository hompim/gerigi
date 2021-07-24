<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tugas Gerigi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Tugas</li>
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
          <h3 class="card-title">Daftar Gerigi Shorten Link</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="datatables" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelompok Besar</th>
                <th>Nama Kelompok Kecil</th>
                <th>Nama Mahasiswa</th>
                <th>Tanggal Pengumpulan</th>
                <th>Link</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($lists as $list) : ?>
                <tr>
                  <td class="text-center"><?= $i++; ?></td>
                  <td><?= $list['namaKelBesar']; ?></td>
                  <td><?= $list['namaKelKecil']; ?></td>
                  <td><?= $list['nama']; ?></td>
                  <td><?= $list['dateCreate']; ?></td>
                  <td class="text-center">
                    <a href="https://<?php echo $list['link'];?>" target='_blank' class="btn btn-sm btn-primary">Lihat Tugas</a>
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
                <th>Link</th>
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