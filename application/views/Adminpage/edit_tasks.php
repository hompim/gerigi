<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Tugas!</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Dashboard</a></li>
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
          <h3 class="card-title">Edit Tugas Gerigi</h3>
        </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="../setTasks/<?php echo $lists['id_info']?>" method="POST">
        <div class="card-body">
          <input type="hidden" class="form-control" id="id_info" name="id_info" value="<?php echo $lists['id_info']?>">
          <div class="form-group">
            <label>Nama Tugas</label>
            <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" value="<?php echo $lists['nama_tugas']?>">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="5"><?=$lists['keterangan']?></textarea>
          </div>
          <div class="form-group">
            <label>Tanggal Digunakan:</label>
              <div class="input-group date">
                  <input type="date" value="<?php echo $lists['dateUse']?>" name="dateUse" id="dateUse" class="form-control datetimepicker-input">
              </div>
          </div>
          <div class="form-group">
            <label>Submit Form: (Ya Jika Membutuhkan Pengumpulan | Tidak Jika Tidak Membutuhkan Pengumpulan)</label>
              <select class="form-control" name="SubmitForm" id="SubmitForm">
                <?php if($lists['SubmitForm'] == 'tidak'): ?>
                <option value="ya">Ya</option>
                <option selected value="tidak">Tidak</option>
                <?php else:?>
                <option selected value="ya">Ya</option>
                <option value="tidak">Tidak</option>
                <?php endif;?>
              </select>
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