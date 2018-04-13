@extends ('layouts.app')
    @section ('content')
        <div id="blogview">
            <h1>{{ $article -> title }}</h1>
            <p>{{$article -> description}}</p>
        </div>
@endsection
