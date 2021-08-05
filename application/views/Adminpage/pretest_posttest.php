<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Gerigi Interaksi dan Feedback</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Interaksi dan Feedback</li>
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
          <h3 class="card-title">Rundown Acara</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="datatables" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Acara</th>
                <th>Jam</th>
                <th>Edit Acara</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($lists as $list) : ?>
                <tr>
                  <td class="text-center"><?= $i++; ?></td>
                  <td><?= $list['dateUse']; ?></td>
                  <td><?= $list['nama']; ?></td>
                  <td><?= $list['jam']; ?></td>
                  <?php if ($list['hasLink'] == "Ya"):?>
                  <td>
                    <a href="./editTests/<?php echo $list['idRundown']?>" class="btn btn-primary btn-sm">
                    Edit Acara
                    </a>
                  </td>
                  <?php else: ?>
                    <td><a>Tidak ada Link</a></td>
                  <?php endif;?>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Acara</th>
                <th>Jam</th>
                <th>Edit Acara</th>
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