@extends('layout')

@section('content')
<div class="container">
    <a style="border-radius: 30px" class="btn btn-outline-success" href="">Category</a>
    <a style="border-radius: 30px" class="btn btn-outline-success" href="{{route('blog.create')}}">Create</a>
</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Images</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($blogs as $blog)
        <tbody>
        <tr>
            <th scope="row">{{$blog->id}}</th>
            <td>{{$blog->title}}</td>
            <td>{{$blog->content}}</td>
            <td>{{$blog->images}}</td>
            <td>{{$blog->category->name}}</td>
            <td></td>
        </tr>
        @endforeach

        </tbody>
    </table>

@endsection
