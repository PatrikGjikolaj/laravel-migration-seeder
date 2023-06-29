@extends('layouts.app')

@section('content')
<div class="container-fluid bg-warning">
    <div class="container py-3">
        <div class="row g-4">
            @foreach ($trains as $train)
                @if ($train->data_di_partenza == "2023-06-29")
                    <div class="col-3 ">
                        <div class="card p-3 bg-success">
                            <p>Codice treno: {{$train->Codice_treno}}</p>
                            <h4>Compagnia: {{$train->azienda}}</h4>
                            <p>Stazione di partenza: {{ $train->stazione_di_partenza }}</p>
                            <p>Orario di partenza: {{ $train->orario_di_partenza }}</p>
                            <p>Stazione di partenza: {{ $train->stazione_di_arrivo }}</p>
                            <p>Orario di partenza: {{ $train->orario_di_arrivo }}</p>
                            @if ($train->in_orario > 0)
                            <p>Ritardo: {{ $train->in_orario }}</p>
                            @endif
                            @if ($train->cancellato == 1)
                            <p>Stato: Cancellato</p>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
