@extends('pages.layouts._app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header" style="color: #3498db;" >
                <h1 class="card-title" style="margin-bottom: 0;">Candidats Perdus</h1>
            </div>                                              
            <div class="card-body">
                <div class="table-responsive w-100">
                    <table class="table table-striped table-bordered">
                        <thead style="background-color: #343a40; color: white;">
                            <tr>
                                <th scope="col">Candidat</th>
                                <th scope="col">Pourcentage de Voix</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $candidatsUniques = $candidatsPerdus->unique('candidat_id');
                            @endphp
                            @foreach($candidatsUniques as $resultat)
                            @php
                                $totalVoixCandidat = $candidatsPerdus->where('candidat_id', $resultat->candidat_id)->sum('nombre_voix');
                                $pourcentage = ($totalVoix != 0) ? ($totalVoixCandidat / $totalVoix) * 100 : 0;
                            @endphp
                            <tr>
                                <td>{{ $resultat->candidat->prenom }} {{ $resultat->candidat->nom }}</td>
                                <td><span class="badge bg-danger fs-5 text-white" style="font-size: 1.1em;">{{ number_format($pourcentage, 2) }}%</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
