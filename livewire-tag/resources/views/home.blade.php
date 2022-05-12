@extends('layouts.app')

@section('content')
    <div class="container">



        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->slug }}</td>
                    <th>
                        <button class="btn btn-primary">Update</button>
                        <button class="btn btn-danger">Delete</button>

                    </th>
                </tr>
            @endforeach
        </table>



    </div>
@endsection
