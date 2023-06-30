@extends('layouts.app')

@section('content')
<div class="container-fluid bg-dark mainSize">
    <div class="container tableSize overflow-auto">
        <div class="row g-4">
            <table class="table table-warning table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Ritardo</th>
                    <th scope="col">Stato</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        @if ($train->data_di_partenza == "2023-06-30")
                            <tr>
                                <td>{{$train->Codice_treno}}</th>
                                <td>{{$train->azienda}}</td>
                                <td>{{ $train->data_di_partenza }}</td>
                                <td>{{ $train->stazione_di_partenza }}</td>
                                <td>{{ $train->stazione_di_arrivo }}</td>
                                <td>{{ $train->orario_di_partenza }}</td>
                                <td>{{ $train->orario_di_arrivo }}</td>
                                <td>+ {{ $train->in_orario }} min</td>
                                @if ($train->cancellato == 1)
                                    <td class="text-danger">Annullato</td>
                                @else
                                    <td class="text-success">Valido</td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
