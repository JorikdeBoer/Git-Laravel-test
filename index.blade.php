@extends ('layouts.app')
    @section ('content')
        <!-- The view of the blogs page, view all blogs -->
        <h1> Great Blogs by the best bloggers. </h1>
        <div id="blogOverview">
            <ul>
                @foreach($articles as $article)
                <h1>{{ $article -> title }}</h1>
                <p>{{$article -> description}}</p>
                <a href="{{ route('articles.article', $article->id) }}" class="btn btn-info btn-md" style="margin-top:15%;">
                              Bekijk dit artikel
</a>
                @endforeach()
            </ul>
        </div>
@endsection
