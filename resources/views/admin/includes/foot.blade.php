<!--   Core JS Files   -->
<script src="{{ asset('js/admin/core/popper.min.js') }}"></script>
<script src="{{ asset('js/admin/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/chartjs.min.js') }}"></script>

<script>
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
    damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/admin/soft-ui-dashboard.min.js') }}"></script>
