<!-- jquery -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'js/';

</script>

<!-- chart -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
@yield('js')
<script src="{{ URL::asset('assets/dash_assets/assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assets/dash_assets/assets/js/custom.js') }}"></script>
<script src="{{ URL::asset('assets/dash_assets/assets/js/nicescroll/jquery.nicescroll.js') }}"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>

$(document).ready(function () {
    $('#example').DataTable();
});
</script>