@extends('layouts.main')

@section('content')
    <table>
        @if ($item->exists)

            <div class="blog-post">

                <h1 class="blog-post-title">{{$item->title}}</h1>
                <h3>Category : {{$item->category_id}}</h3>
                <h4>{{$item->excerpt}}</h4>

                <p>{{$item->content_raw}}</p>

                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight"><p>{{$item->published_at}}</a></p> </div>
                </div>
            </div>


        @endif
    </table>
@endsection
