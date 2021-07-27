<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Buat Tugas!</h1>
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
          <h3 class="card-title">Buat Tugas Gerigi</h3>
        </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="./setMakeTasks" method="POST">
        <div class="card-body">
          <input type="hidden" class="form-control" id="id_info" name="id_info" required>
          <div class="form-group">
            <label>Nama Tugas</label>
            <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" required>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="5" required></textarea>
          </div>
          <div class="form-group">
            <label>Tanggal Digunakan:</label>
              <div class="input-group date">
                  <input type="date" name="dateUse" id="dateUse" class="form-control datetimepicker-input" required>
              </div>
          </div>
          <div class="form-group">
            <label>Submit Form: (Ya Jika Membutuhkan Pengumpulan | Tidak Jika Tidak Membutuhkan Pengumpulan)</label>
              <select class="form-control" name="SubmitForm" id="SubmitForm" required>
                <option value="ya">Ya</option>
                <option selected value="tidak">Tidak</option>
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