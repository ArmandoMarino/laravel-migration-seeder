@if (isset($train))
<div class="col-12 col-md-6 col-lg-3">
    <div class="card p-3 text-center">
        {{-- <figure><img class="img-fluid" src="{{ $train->poster }}" alt=""></figure> --}}
        <h5>Compagnia : {{ $train->company }}</h5>
        <span> Stazione di partenza : {{ $train->dep_station }}</span>
        <span> Stazione di arrivo : {{ $train->arr_station }}</span>
        <ul>
            <li> Orario di Partenza : {{ $train->dep_time }}</li>
            <li> Orario di Arrivo : {{ $train->arr_time }}</li>
            <li> Codice Treno : {{ $train->code_train }}</li>
            <li> Numero di Carrozza : {{ $train->carriage_num }}</li>
            <li> In Orario : {{ $train->in_time }}</li>
            <li> In Ritardo : {{ $train->is_deleted }}</li>
        </ul>
    </div>
</div>   
@endif