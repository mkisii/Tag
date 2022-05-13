@extends('layouts.app')

@section('content')
    <div class="container bg-secondary">
        <div>
            <div ><h3 class="text-center text-white">Tags</h3></div>
        <section>
            <table class="table text-white">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        
                    </tr>
                </thead>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->slug }}</td>
    
                @endforeach
            </table>
        </section>

        </div>

        <div><h3 class=" text-center text-white">Projects</h3></div>


        <div>
            <section>
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">TYPE</th>
                            
                        </tr>
                    </thead>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->type }}</td>
        
                    @endforeach
                </table>
            </section>

        </div>









    </div>
@endsection
