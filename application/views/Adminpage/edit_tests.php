<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Gerigi Pretest, Posttest, & Feedback</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Pretest, Posttest, & Feedback</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="callout callout-info">
        <h5>Tanggal: <?php echo $lists[0]['dateUse'];?></h5>
      </div>
      <div class="callout callout-info">
        <h5>Nama Acara: <?php echo $lists[0]['nama'];?></h5>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Pretest, Posttest, & Feedback</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <?php if($this->session->flashdata('success_setLinkTests')): ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('success_setLinkTests'); ?></div>
        <?php endif; ?>
          <table id="datatables" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelompok Besar</th>
                <th>Link</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($lists as $list) : ?>
                <tr>
                  <td class="text-center"><?= $i++; ?></td>
                  <td><?= $list['namaKelBesar']; ?></td>
                  <td><a href="<?php echo $list['link'];?>" target="_blank"> <?= $list['link']?></td>
                  <td class="text-center">
                    <a href="../editLinkTests/<?php echo $list['idTest']?>" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nama Kelompok Besar</th>
                <th>Link</th>
                <th>Edit</th>
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