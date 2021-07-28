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
            <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Shorten Link</li>
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
          <h3 class="card-title">Form Pembuatan Shorten Link</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Nama Shorten Link</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama shorten link" value="<?= set_value('name'); ?>">
                  <?= form_error('name', '<div class="text-danger mt-2 ml-2">', '</div>'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="shorten">Alamat Shorten Link</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><?php echo base_url(); ?></span>
                    </div>
                    <input type="text" class="form-control" id="shorten" name="shorten" placeholder="Masukkan alamat link pendek" value="<?= set_value('shorten'); ?>">
                  </div>
                  <?= form_error('shorten', '<div class="text-danger  ml-2">', '</div>'); ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="origin">Alamat Asli</label>
              <input type="text" class="form-control" id="origin" name="origin" placeholder="Masukkan alamat web asli" value="<?= set_value('shorten'); ?>">
              <?= form_error('origin', '<div class="text-danger mt-2 ml-2">', '</div>'); ?>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Buat Shorten Link!</button>
          </div>
        </form>
      </div>
      <!-- /.card -->

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->