 <!-- BEGIN PAGA BACKDROPS-->
 <div class="sidenav-backdrop backdrop"></div>
 <div class="preloader-backdrop">
     <div class="page-preloader">Loading</div>
 </div>
 <!-- END PAGA BACKDROPS-->
 <!-- CORE PLUGINS-->
 <script src="{{ asset('Assets/Backend/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('Assets/Backend/vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('Assets/Backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('Assets/Backend/vendors/metisMenu/dist/metisMenu.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('Assets/Backend/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
 <!-- PAGE LEVEL PLUGINS-->
 <script src="{{ asset('Assets/Backend/vendors/chart.js/dist/Chart.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('Assets/Backend/endors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}v" type="text/javascript"></script>
 <script src="{{ asset('Assets/Backend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
 <script src="{{ asset('Assets/Backend/vendors/jvectormap/jquery-jvectormap-us-aea-en.js') }}" type="text/javascript"></script>
 <!-- CORE SCRIPTS-->
 <script src="{{ asset('Assets/Backend/js/app.min.js') }}" type="text/javascript"></script>
 <!-- PAGE LEVEL SCRIPTS-->
 <script src="{{ asset('Assets/Backend/js/scripts/dashboard_1_demo.js') }}" type="text/javascript"></script>
 {{-- Data Tables --}}
 <script src="{{ asset('Assets/Backend/vendors/DataTables/datatables.min.js') }}" type="text/javascript"></script>
 <script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    })
</script>