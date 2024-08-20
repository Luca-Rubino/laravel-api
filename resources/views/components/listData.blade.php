@section('file-data')
    <section class="container-fluid">
        @foreach($datas as $data)
            <article>
                <div>
                    <h1>{{ $data['title'] }}</h1>
                    <h3>{{ $data['subTitle'] }}</h3>
                </div>
                <span>
                    <img src="{{ Vite::asset("$data[url]") }}" alt="{{ $data['title'] }}">
                    <p>{{ $data['autors'] }}</p>
                </span>
                <div>
                    <h4>{{ $data['ruole'] }}</h4>
                    <p>{{ $data['description'] }}</p>
                </div>
            </article>
        @endforeach
    </section>
@endsection