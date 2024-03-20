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
                            <th>Nom</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regions as $region)
                        <tr>
                            <td>{{ $region->nom }}</td>
                            <td>
                                <button type="button" class="btn btn-primary"><a href="{{route('pages.editregion', ['id' => $region->id])}}" class="text-white">Modifier</a></button>
                                <button type="button" class="btn btn-danger"><a href="{{route('pages.deleteregion', ['id' => $region->id])}}" class="text-white">Supprimer</a></button>
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

