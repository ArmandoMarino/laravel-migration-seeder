@if (isset($train))
<div class="col-12 col-md-6 col-lg-3">
    <div class="my-card p-3 text-center">
        {{-- <figure><img class="img-fluid" src="{{ $train->poster }}" alt=""></figure> --}}
        <h5>Company  : {{ $train->company }}</h5>
        <span> Departure Station : {{ $train->dep_station }}</span>
        <span> Arrival Station : {{ $train->arr_station }}</span>
        <ul>
            <li> Departure Time : {{ $train->dep_time }}</li>
            <li> Arrival Time : {{ $train->arr_time }}</li>
            <li> Codice Treno : {{ $train->code_train }}</li>
            <li> Carriage Number : {{ $train->carriage_num }}</li>
            <li> In Time : {{ $train->in_time }}</li>
            <li> Late : {{ $train->is_deleted }}</li>
        </ul>
    </div>
</div>   
@endif