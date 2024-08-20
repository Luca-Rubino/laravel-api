@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="col-12">
            <form action="{{ route('admin.project.store') }}" method="POST" id="creation_form" enctype="multipart/form-data">
                @csrf

                <div class="input-group-sm container mb-5 w-50">

                    <label for="nome">Nome</label>
                    <input type="text" class="form-control mb-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nome progetto" id="nome" name="nome" value="{{ old('nome') }}">


                    <label for="type_id">Tipo di progetto</label>

                    <select class="form-select form-select-sm mb-2" aria-label="Tipo di progetto" id="type_id" name="type_id">
                        @foreach ($types as $type)

                        <option value="{{$type->id}}">{{$type->nome}}</option>
                        @endforeach
                    </select>


                        <label for="technology_id">Linguaggio utilizzato</label>
                        <div class="customCheckBoxHolder d-flex flex-wrap ">
                            @foreach ($technologies as $technology)
                            <input name="technologies[]" type="checkbox" class="customCheckBoxInput" id="technology-check-{{$technology->id}}" autocomplete="off" value="{{$technology->id}}"
                            {{ in_array($technology->id, old('technologies', [])) ? "checked" : ""}}>
                            <label class="customCheckBoxWrapper m-1" for="technology-check-{{$technology->id}}" style="--dynamic-color: {{ $technology->colore }}">
                                <div class="customCheckBox">
                                    <div class="inner">{{$technology->nome}}</div>
                                </div>
                            </label>

                            @endforeach

                    </div>

                    <label for="url_repo">url_repo</label>
                    <input type="text" class="form-control mb-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="url_repo" id="url_repo" name="url_repo" value="{{ old('url_repo') }}">

                    <div>
                        <label for="img" class="form-label">Inserisci un'immagine del progetto</label>
                        <input class="form-control mb-3" type="file" id="img" name="img">
                    </div>

                    <div class="d-flex justify-content-between ">

                            <input class="btn btn-primary" type="submit" value="crea un nuovo progetto">
                            <input class="btn btn-warning" type="reset" value="resetta campi">

                    </div>
                </div>
            </form>
            <a href="{{ route('admin.project.index')}}" class="card-link d-flex justify-content-center">Torna alla lista dei progetti</a>
        </div>

    </div>
</div>
@endsection


@section('custom_script')
@vite('resources/js/delete_confirm.js')
@endsection
