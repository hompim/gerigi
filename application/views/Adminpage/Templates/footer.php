<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- Default to the left -->
  <strong>Copyright &copy; 2021 <a href="<?= base_url(''); ?>">GERIGI ITS 2021</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/admin/vendor/'); ?>jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin/vendor/'); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/admin/vendor/'); ?>datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/admin/vendor/'); ?>datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/js/'); ?>adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function() {
    $("#datatables").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["csv", "excel", "colvis"]
    }).buttons().container().appendTo('#datatables_wrapper .col-md-6:eq(0)');
  });
</script>
</body>

</html>