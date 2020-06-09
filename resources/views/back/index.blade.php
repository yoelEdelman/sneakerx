@extends('back.layout.app')

@section('main')
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>U</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



@endsection

@section('js')
    <!-- jQuery -->
{{--    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>--}}
    <!-- Bootstrap 4 -->
{{--    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>--}}
    <!-- DataTables -->
{{--    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>--}}
{{--    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>--}}
{{--    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>--}}
{{--    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>--}}
    <!-- AdminLTE App -->
{{--    <script src="/adminlte/js/adminlte.min.js"></script>--}}
    <!-- AdminLTE for demo purposes -->
    {{--    <script src="/adminlte/js/demo.js"></script>--}}
    <!-- page script -->
{{--    <script>--}}
    {{--    $(function () {--}}
    {{--        $("#example1").DataTable({--}}
    {{--            "responsive": true,--}}
    {{--            "autoWidth": false,--}}
    {{--        });--}}
    {{--        $('#example2').DataTable({--}}
    {{--            "paging": true,--}}
    {{--            "lengthChange": false,--}}
    {{--            "searching": false,--}}
    {{--            "ordering": true,--}}
    {{--            "info": true,--}}
    {{--            "autoWidth": false,--}}
    {{--            "responsive": true,--}}
    {{--        });--}}
    {{--    });--}}
    {{--</script>--}}
@endsection
