@extends('pages.layouts._app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Résultats enregistrés</h1>
        @if ($resultats->isEmpty())
            <div class="alert alert-info" role="alert">
                Aucun résultat enregistré pour le moment.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Bureau de vote</th>
                            <th scope="col">Candidat</th>
                            <th scope="col">Nombre de voix</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resultats as $resultat)
                            <tr>
                                <td>
                                    @if ($resultat->bureauDeVote)
                                        {{ $resultat->bureauDeVote->n°bureau }}
                                    @else
                                        <span class="text-muted">Bureau de vote non spécifié</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($resultat->candidat)
                                        {{ $resultat->candidat->prenom }} {{ $resultat->candidat->nom }}
                                    @else
                                        <span class="text-muted">Candidat non spécifié</span>
                                    @endif
                                </td>
                                <td>{{ $resultat->nombre_voix }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
