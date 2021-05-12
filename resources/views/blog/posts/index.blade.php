@extends('layouts.main')
@section('content')
    <table>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}
                    <a href="{{route( 'blog.posts.show', $item->id)}}"> <img src="https://img.icons8.com/wired/32/000000/view-file.png"/></a>

                </td>
                <td>{{$item->created_at}}</td>
            </tr>
        @endforeach
    </table>
@endsection
