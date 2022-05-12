<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head :title = "$title ?? '' "/>
</head>
<body>
    <x-partials.nav />

    <main>
        {{-- {{$slot}} --}}
    </main>
    <section>
        {{-- {{$body}} --}}
        @livewire('tag')
    </section>

    <x-partials.footer />
    @livewireScripts
    
</body>
</html>