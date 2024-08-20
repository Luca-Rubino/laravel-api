@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('message_nuovo_progetto'))
            <div class="alert alert-success">
                {{ session('message_nuovo_progetto') }}
            </div>

        @elseif (session('message_update_progetto'))
            <div class="alert alert-success">
                {{ session('message_update_progetto')}}
            </div>
        @endif
        <div class="col-12">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome Progetto</th>
                        <th scope="col">Tipo di progetto</th>
                        <th scope="col">Tecnologia utilizzata</th>
                        <th scope="col">link della repository</th>
                        <th scope="col">Azioni</th>
                    </tr>
                    </thead>
                    <tbody>


                    <tr>
                        <th scope="row">{{ $project->id}}</th>
                        <td>{{ $project->nome}}</td>
                        <td>
                            @forelse ($project->Technologies as $technology)
                            <span class="badge text" style="background-color: {{ $technology->colore }}">

                                {{ $technology->nome}}
                            </span>
                            @empty
                            Nessuna tecnologia impostata
                            @endforelse
                        </td>
                        @if ($project->type->nome == null)
                            <td>Tipo di progetto non presente</td>
                        @else
                        <td>{{ $project->type->nome}}</td>

                        @endif


                        <td><a href=" {{ $project->url_repo}}">Clicca qui per vedere la repository</a></td>
                        <td>
                            <div class="d-flex ">

                                <a href="{{ route('admin.project.edit', ['project' => $project->id]) }}" class="btn btn-warning d-flex justify-content-center mx-2">Edit</a>
                                <form action="{{ route('admin.project.destroy', ['project' => $project->id]) }}" method="POST" class="d-inline-block delete_form" data_project_id="{{ $project->id }}" data_project_nome="{{ $project->nome }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <div class="border border-dark d-flex justify-content-center">

                    <img class="img-fluid" src="{{ asset('storage/' . $project->img) }}" alt="">
                </div>
        </div>



    </div>
</div>
@endsection
