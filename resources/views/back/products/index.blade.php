@extends('back.layout.app')

@section('title')
    <title> liste des produits</title>
@endsection

@section('content')

    @section('header')
        Liste des produits
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
                        <h3 class="card-title mr-auto">Listes des produits</h3>
                        <div class="ml-auto">
                            <a href="{{ route('products.create') }}" class="btn btn-success">Ajouter un produits</a>
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
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td><img class="img" src="{{ Storage::disk('public')->url('images/' . $product->main_image) }}" style="height: 65px"></td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                                        <form action="{{ route('products.destroy', $product->id) }}" method="post" class="form-inline ml-auto">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <div class="form-group has-white">
                                                <input type="hidden" name="product_id" class="form-control" value="{{ $product->id }}">
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
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
        });
    </script>
@endsection
