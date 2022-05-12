@extends('layouts.app')

@section('content')
<div class="container">

    <section>
        @livewire('tags.create')
    </section>

    <section>
        @livewire('tags.index')
    </section>
    

    

</div>
@endsection