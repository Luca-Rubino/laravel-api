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
                            <th scope="col">nome</th>
                            <th scope="col">data di nascita</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($creators as $creator)

                        <tr>
                            <th scope="row">{{ $creator->id}}</th>

                            <td>
                                {{ $creator->nome}}

                            </td>
                            <td>
                                {{ $creator->data_di_nascita}}

                            </td>

                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $creators->links() }}
            </div>

        </div>
</div>
@endsection

