<!-- jQuery -->
<script src="{{url('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('admin/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{url('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- Sweetalert -->
<script src="{{url('admin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Summernote -->
<script src="{{url('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- Import Dropzone -->
<!-- <script src="https://unpkg.com/dropzone"></script> -->
<script type="text/javascript" src="{{ url('admin/dropzone/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ url('admin/dropzone/callimagedropzone.js') }}"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#portofolio-content').summernote();
  });

  $('.custom-file-input').change(function (e) {
      var files = [];
      for (var i = 0; i < $(this)[0].files.length; i++) {
          files.push($(this)[0].files[i].name);
      }
      $(this).next('.custom-file-label').html(files.join(', '));
  });

  function deleted_item( id, track )
  {

    var dataObj       = {};
    dataObj.id        =  id;
    dataObj.track     =  track;
    if( id != null)
    {
      dataObj.id     =  id;
    }
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel plx!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
          $.ajax({
                url: '/ajax/delete-item',
                type: 'POST',
                cache: false,
                datatype: 'json',
                data: {data:dataObj},
                headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                success: function(data)
                {
                  if(data.delete == true)
                  {
                    swal({
                      title: 'Deleted',
                      text: 'Your selected item deleted.',
                      type: 'success',
                      timer: 2000,
                      showCancelButton: false,
                      showConfirmButton: false
                    },
                    function(){ 
                         location.reload();
                     }
                    );
                  }                    
                },
                
                error:function(){}
          });            
      } else {
        swal("Cancelled", "Your imaginary file is safe :)", "error");
      }
    });
  }

  $(document).on('input change', '#slider_pax', function() {
      $('#slider_pax_value').html( $(this).val() );
  });
</script>