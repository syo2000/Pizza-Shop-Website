
<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Đăng xuất</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Bạn thực sự muốn đăng xuất ?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Hủy</button>
                  <a href="login" class="btn btn-primary">Đăng xuất</a>
                </div>
              </div>
            </div>
          </div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <script> document.write(new Date().getFullYear()); </script>           
            </span>
          </div>
        </div>

      </footer>
<!-- Footer -->
    </div>
  </div>
  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="public/vendor/jquery/jquery.min.js"></script>
  <script src="public/vendor/jquery/jquery_cdn.js"></script>

  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="public/js/style-admin.min.js"></script>  
  <script src="public/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="public/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
  <!--Datatable-->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
    });
  </script>
  
  
</body> 

</html>