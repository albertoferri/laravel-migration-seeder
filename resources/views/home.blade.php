@extends('layouts/app')

@section('content')

<main class="row row-cols-4 gap-3 d-flex justify-content-center ">
    @foreach($trains as $train)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $train->company }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train->train_code }}</h6>
                <p class="card-text">
                    Partenza: {{ $train->departure_station }} alle {{ $train->departure_time }}<br>
                    Arrivo: {{ $train->arrival_station }} alle {{ $train->arrival_time }}<br>
                    Numero di carrozze: {{ $train->number_of_carriages }}<br>
                    In orario: {{ $train->on_time ? 'Sì' : 'No' }}<br>
                    Cancellato: {{ $train->cancelled ? 'Sì' : 'No' }}
                </p>
            </div>
        </div>
    @endforeach
</main>

@endsection
