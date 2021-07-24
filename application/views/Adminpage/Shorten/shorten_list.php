<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Gerigi Shorten Link</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('Shorten'); ?>">Shorten Link</a></li>
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
          <h3 class="card-title">Daftar Gerigi Shorten Link</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="datatables" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Buat</th>
                <th>Nama Shorten Link</th>
                <th>Shorten Link</th>
                <th>URL Asli</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($lists as $list) : ?>
                <tr>
                  <td class="text-center"><?= $i++; ?></td>
                  <td><?= $list['date_created']; ?></td>
                  <td><?= $list['name']; ?></td>
                  <td class="text-nowrap">
                    <a href="<?= base_url('') . $list['shorten']; ?>" target="_blank">
                      gerigi.its.ac.id/<?= $list['shorten']; ?>
                    </a>
                  </td class="text-wrap">
                  <td>
                    <a href="<?= $list['origin']; ?>" target="_blank">
                      <?= $list['origin']; ?>
                    </a>
                  </td>
                  <td class="text-center">
                    <a href="<?= base_url('shorten/delete_shorten?shorten=' . $list['shorten']); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Tanggal Buat</th>
                <th>Nama Shorten Link</th>
                <th>Shorten Link</th>
                <th>URL Asli</th>
                <th>Aksi</th>
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