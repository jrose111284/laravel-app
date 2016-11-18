@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Owner</th>
            <th>Catergory</th>
            <th>Photo</th>
            <th>Title</th>
            <th>body</th>
            <th>Post link</th>
            <th>Comments</th>
            <th>Created at</th>
            <th>Update</th>
        </thead>
        <tbody>

        @if($post)


            @foreach($post as $posts)


                <tr>
                    <td>{{$posts->id}}</td>
                    <td>{{$posts->user->name}}</td>
                    <td>{{$posts->category}}</td>
                    <td><img height="50" src="{{$posts->photo ? $posts->photo->file : 'http://placehold.it/400x400' }} " alt=""></td>
                    <td>{{$posts->title}}</td>
                    <td>{{$posts->body}}</td>
                    <td>{{$posts->created_at->diffForhumans()}}</td>
                    <td>{{$posts->updated_at->diffForhumans()}}</td>

                </tr>

            @endforeach

        @endif

        </tbody>
    </table>



@endsection