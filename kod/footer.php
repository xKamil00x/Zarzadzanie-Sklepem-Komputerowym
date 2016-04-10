  <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Projekt Zespołowy - Politechnika Koszalińska<br>Wydział Elektroniki i Informatyki | Semestr VI<br>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a >KomputeREX</a> - Oprogramowanie dla firm.</strong>
      </footer>

  
    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>        
   <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
