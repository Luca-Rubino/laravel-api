<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/scss/app.scss', 'resources/js/app.js')
    @include('components.head')
    <title>@yield('page-title')</title>
</head>
<body>
    @yield('navbar')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="col-12 text-center mb-4 p-4">
                Project List
            </h1>
            <table class="table table-light table-hover table-striped col-8">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        {{-- <th scope="col">Programming Languages</th>
                        <th scope="col">Actions</th> --}}
                    </tr>
                </thead>
                @foreach ($projects as $project)
                <tbody>
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->type->name }}</td>
                        <td>{{ $project->prog_langs }}</td>

                        <td>
                            @forelse ($project->technologies as $technology )
                                {{ $technology->name }}
                            @empty
                                <p>no techonologies</p>
                            @endforelse
                        </td>

                        <td>
                            <a href="{{Route('admin.projects.show', $project)}}" class="btn btn-primary btn-sm me-2 ms-2">Show</a>
                            <a href="{{Route('admin.projects.edit', $project)}}" class="btn btn-light btn-sm me-2">Edit</a>
                            <form action="{{Route('admin.projects.destroy', $project)}}" method="POST" class="d-inline-block">
                                @method("DELETE")
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            </table>
        </div>
    </div>
    @yield('footer')
</body>
</html>