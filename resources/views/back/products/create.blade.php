@extends('back.layout.app')

@section('title')
    <title>Création d'un produit</title>
@endsection

@section('content')

    @section('header')
        Création d'un produit
    @endsection

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Création d'un produit</h3>
                    </div>
                    <form role="form" action="{{ route('backproducts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nom du produit</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Entrer le nom de la marque">
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>


                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="form-control-label bmd-label-floating" for="description"> Description du produit</label>
                                    <textarea class="textarea12 @error('description') is-invalid @enderror" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        {{ old('description') }}
                                    </textarea>
                                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image">Image principale</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}">
                                        <label class="custom-file-label" for="image">Choisir un fichier</label>
                                        @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image">Images secondaire</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('images') is-invalid @enderror" multiple name="images" id="images" value="{{ old('images') }}">
                                        <label class="custom-file-label" for="images">Choisir un fichier</label>
                                        @error('images')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="banner">Prix</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="fas fa-euro-sign"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                                    @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Couleurs</label>
                                <select class="form-control select2bs4 @error('color') is-invalid @enderror" name="color" style="width: 100%;">
                                    <option value="" disabled selected>Choisissez une couleur</option>
                                    @foreach(config('sneakerx.colors') as $key => $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('color')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label>Taille</label>
                                <select class="form-control select2bs4 @error('size') is-invalid @enderror" name="size" style="width: 100%;">
                                    <option value="" disabled selected>Choisissez la taille</option>
                                    @foreach(config('sneakerx.sizes') as $key => $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('size')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label>Quantité</label>
                                <select class="form-control select2bs4 @error('qty') is-invalid @enderror" name="qty" style="width: 100%;">
                                    <option value="" disabled selected>Choisissez la quantité</option>
                                    @foreach(config('sneakerx.quantities') as $key => $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('qty')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="release_date">Date de sortie:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">

                                    <input type="date" class="form-control @error('release_date') is-invalid @enderror" name="release_date" id="release_date" value="{{ old('release_date') }}"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                    @error('release_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="is_published">Publié ?</label>
                                <select name="is_published" class="form-control select2bs4 @error('is_published') is-invalid @enderror" style="width: 100%;">
                                    <option selected="selected" value="0">Non</option>
                                    <option value="1">Oui</option>
                                </select>
                                @error('is_published')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label>Marque</label>
                                <select name="brand" class="form-control select2bs4 @error('brand') is-invalid @enderror" style="width: 100%;">
                                    <option disabled selected="selected">Sélectionnez une marque</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                @error('brand')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')

    <!-- bs-custom-file-input -->
{{--    <script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>--}}


    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{ asset('adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- AdminLTE App -->
{{--    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>--}}



    <script>
        $(function () {
            //Initialize Select2 Elements
            // $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            // $('[data-mask]').inputmask()

            //Date range picker
            // $('#reservationdate').datetimepicker({
            //     format: 'YYYY-MM-DD',
            // });
            //Date range picker
            // $('#reservation').daterangepicker()
            // //Date range picker with time picker
            // $('#reservationtime').daterangepicker({
            //     timePicker: false,
            //     timePickerIncrement: 30,
            //     locale: {
            //         format: 'MM/DD/YYYY'
            //     }
            // })
            // // //Date range as a button
            // $('#daterange-btn').daterangepicker(
            //     {
            //         ranges   : {
            //             'Today'       : [moment(), moment()],
            //             'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            //             'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            //             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            //             'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            //             'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            //         },
            //         startDate: moment().subtract(29, 'days'),
            //         endDate  : moment()
            //     },
            //     function (start, end) {
            //         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            //     }
            // )

            //Timepicker
            // $('#timepicker').datetimepicker({
            //     format: 'LT'
            // })
            //
            //Bootstrap Duallistbox
            // $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            // $('.my-colorpicker1').colorpicker()
            //color picker with addon
            // $('.my-colorpicker2').colorpicker()

            // $('.my-colorpicker2').on('colorpickerChange', function(event) {
            //     $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            // });

            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('unchecked'));
            });

        })
    </script>


    <!-- Summernote -->
    <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
    <script>
        $(function () {
            // Summernote
            $('.textarea12').summernote()
        })
    </script>

@endsection
