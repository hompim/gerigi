<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Link Interaksi & Feedback</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Link Interaksi & Feedback</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Link Interaksi & Feedback Gerigi</h3>
        </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="../setLinkTests" method="POST">
        <div class="card-body">
          <p>Nama Kelompok Besar: <?php echo $lists['namaKelBesar'];?></p>
          <p>Tanggal: <?php echo $lists['dateUse'];?></p>
          <input type="hidden" class="form-control" id="idRundown" name="idRundown" value="<?php echo $lists['idRundown']?>">
          <input type="hidden" class="form-control" id="idTest" name="idTest" value="<?php echo $lists['idTest']?>">
          <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control" id="link" name="link" value="<?php echo $lists['link']?>">
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->