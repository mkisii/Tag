@extends('layouts.app')

@section('content')
<div class="container">

    <section>
        @livewire('projects.create')
    </section>

    <section>
        @livewire('projects.index')
    </section>
    

    

</div>
@endsection