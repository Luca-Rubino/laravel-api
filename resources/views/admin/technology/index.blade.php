@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @if (session('message_delete'))
            <div class="alert alert-success">
                {{ session('message_delete') }}
            </div>
            @elseif (session('message_restore'))
            <div class="alert alert-success">
                {{ session('message_restore') }}
            </div>
            @endif
            <div class="col-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome linguaggio</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($technologies as $technology)

                        <tr>
                            <th scope="row">{{ $technology->id}}</th>

                            <td>

                                <span class="badge text" style="background-color: {{ $technology->colore }}"> {{ $technology->nome}}</span>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $technologies->links() }}
            </div>

        </div>
</div>
@endsection

