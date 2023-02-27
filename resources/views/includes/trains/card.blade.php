@if (isset($train))
<div class="col-12 col-md-6 col-lg-3">
    <div class="my-card p-3 text-center">
        <figure><img class="img-fluid" src="{{ $train->poster }}" alt=""></figure>
        <h5>{{ $train->title }}</h5>
        <h5>{{ $train->nationality }}</h5>
        <p>Anno : {{ $train->date }}</p>
    </div>
</div>   
@endif