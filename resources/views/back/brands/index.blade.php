@extends('back.layout.app')

@section('title')
    <title> liste des marques</title>
@endsection

@section('content')

    @section('header')
        Liste des marques
    @endsection

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        {{-- Flash messages --}}
        @if(session()->has('success'))
            @include('messages.success')
        @elseif(session()->has('error'))
            @include('messages.error')
        @endif

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header d-flex">
                        <h3 class="card-title mr-auto">Listes des marques</h3>
                        <div class="ml-auto">
                            <a href="{{ route('backbrands.create') }}" class="btn btn-success">Ajouter une marque</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td><img class="img" src="{{ Storage::disk('public')->url('images/' . $brand->images[0]->filename) }}" style="height: 65px"></td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->created_at }}</td>
                                    <td>{{ $brand->updated_at }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ route('backbrands.edit', $brand->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                                        <form action="{{ route('backbrands.destroy', $brand->id) }}" method="post" class="form-inline ml-auto">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <div class="form-group has-white">
                                                <input type="hidden" name="brand_id" class="form-control" value="{{ $brand->id }}">
                                            </div>
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
@endsection

@section('js')
    <!-- DataTables -->
{{--    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>--}}
{{--    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>--}}
{{--    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>--}}
{{--    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>--}}
{{--    <script>--}}
{{--        $(function () {--}}
{{--            $("#example1").DataTable({--}}
{{--                "responsive": true,--}}
{{--                "autoWidth": false,--}}
{{--            });--}}
{{--        //     $('#example2').DataTable({--}}
{{--        //         "paging": true,--}}
{{--        //         "lengthChange": false,--}}
{{--        //         "searching": false,--}}
{{--        //         "ordering": true,--}}
{{--        //         "info": true,--}}
{{--        //         "autoWidth": false,--}}
{{--        //         "responsive": true,--}}
{{--        //     });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
