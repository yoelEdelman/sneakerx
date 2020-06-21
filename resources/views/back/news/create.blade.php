@extends('back.layout.app')

@section('title')
    <title>Création d'une actualité</title>
@endsection

@section('content')

@section('header')
    Création d'une actualité
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
                        <h3 class="card-title">Création d'une actualité</h3>
                    </div>
                    <form role="form" action="{{ route('backnews.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Nom de l'actualité</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Entrer le nom de l'actualité">
                                @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label for="summary">Résumé</label>
                                <input type="text" class="form-control @error('summary') is-invalid @enderror" id="summary" name="summary" value="{{ old('summary') }}" placeholder="Résumé de l'actualité">
                                @error('summary')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}">
                                        <label class="custom-file-label" for="image">Choisir un fichier</label>
                                        @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="form-control-label bmd-label-floating" for="content"> Contenu de l'actualité</label>
                                    <textarea class="textarea @error('content') is-invalid @enderror" name="content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        {{ old('content') }}
                                    </textarea>
                                    @error('content')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="is_published">Publié ?</label>
                                {{--                                <input type="checkbox" name="is_published" class=" @error('is_published') is-invalid @enderror">--}}
                                <select name="is_published" class="form-control select2bs4 @error('is_published') is-invalid @enderror" style="width: 100%;">
                                    <option selected="selected" value="0">Non</option>
                                    <option value="1">Oui</option>
                                </select>
                                @error('is_published')<div class="invalid-feedback">{{ $message }}</div>@enderror
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
            $('.textarea').summernote()
        })
    </script>
@endsection
