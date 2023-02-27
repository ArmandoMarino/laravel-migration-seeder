@extends('layouts.main')

@section('title', 'MOVIES')


{{-- HTML --}}
@section('content')
<h1>Binary 9 3/4</h1>
<div id="content-movies" class="my-2">
    <div class="row g-4">
        @forelse ($trains as $train)
            @include('includes.trains.card')
            @empty
            <h2>Nessun risultato</h2>
        @endforelse
    </div>   
</div>
@endsection
