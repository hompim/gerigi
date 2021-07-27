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
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Tugas Gerigi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <?php if($this->session->flashdata('success_setMakeTasks')): ?>
              <div class="alert alert-success"><?php echo $this->session->flashdata('success_setMakeTasks'); ?></div>
          <?php endif; ?>
          <?php if($this->session->flashdata('success_setTasks')): ?>
              <div class="alert alert-success"><?php echo $this->session->flashdata('success_setTasks'); ?></div>
          <?php endif; ?>
          <?php if($this->session->flashdata('success_deleteTasks')): ?>
              <div class="alert alert-success"><?php echo $this->session->flashdata('success_deleteTasks'); ?></div>
          <?php endif; ?>
          <table id="datatables" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Tugas</th>
                <th>Keterangan Tugas</th>
                <th>Submit Form</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach ($lists as $list) : ?>
                <tr>
                  <td class="text-center"><?= $i++; ?></td>
                  <td><?= $list['dateUse']; ?></td>
                  <td><?= $list['nama_tugas']; ?></td>
                  <td><?= $list['keterangan']; ?></td>
                  <?php if ($list['SubmitForm'] == "tidak"):?>
                  <td>Tidak</td>
                  <?php else:?>
                  <td>Ya</td>
                  <?php endif;?>                  
                  <td class="text-center">
                    <a href="./editTasks/<?php echo $list['id_info']?>" target='_blank' class="btn btn-sm btn-primary">Edit</a>
                  </td>
                  <td class="text-center">
                    <a href="./deleteTasks/<?php echo $list['id_info']?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Tugas</th>
                <th>Keterangan Tugas</th>
                <th>Status Form</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </tfoot>
          </table>
        </div>
          <a href="./makeTasks" class="btn btn-app">
            <i class="far fa-plus-square"></i> Add Tugas
          </a>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->