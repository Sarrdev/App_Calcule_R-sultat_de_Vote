@extends('pages.layouts._app')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Listes des candidats</h4>
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                    <thead>
                        <tr> 
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Parti politique</th>
                            <th>Fonction</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidats as $candidat)
                        <tr>
                            <td>{{ $candidat->prenom }}</td>
                            <td>{{ $candidat->nom }}</td>
                            <td>{{ $candidat->parti_politique }}</td>
                            <td>{{ $candidat->fonction }}</td>
                            <td>
                                <button type="button" class="btn btn-primary"><a href="{{route('pages.edit', ['id' => $candidat->id])}}" class="text-white">Modifier</a></button>
                                <button type="button" class="btn btn-danger"><a href="{{route('pages.delete', ['id' => $candidat->id])}}" class="text-white">Supprimer</a></button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection

