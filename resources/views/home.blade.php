@extends('layouts.main')

@section('title', 'TRAINS')


{{-- HTML --}}
@section('content')
<div id="content-movies" class="my-2">
<h1>Trains Info :</h1>

    <div class="row g-4">
        @forelse ($trains as $train)
            @include('includes.trains.card')
            @empty
            <h2>Nessun risultato</h2>
        @endforelse
    </div>   
</div>
@endsection
