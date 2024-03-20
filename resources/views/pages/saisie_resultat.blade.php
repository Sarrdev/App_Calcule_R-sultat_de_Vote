@extends('pages.layouts._app')


    <!-- Begin page -->
    @section('content')
        
    <div id="layout-wrapper">
        <div class="header-border"></div>
        

        <!-- ========== Left Sidebar Start ========== -->
        
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

                <div class="container-fluid">

                    <!-- start page title -->
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Validation</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Formulaire</a></li>
                                        <li class="breadcrumb-item active">Saisi résultat</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                  <form action="{{route('pages.storscore')}}" method="POST">
                                    @csrf
                                    <h4 class="card-title">Saisi résultat</h4>
                                    @if (Session::has('succes'))
                                      <div class="alert alert-danger" role="alert">
                                        {{session::get('success')}}
                                      </div>
                                    @endif
                                        <div class="form-row">
                                          <div class="col-md-4 mb-3"> 
                                            <label for="validationCustom01">Région</label>
                                            <select name="region" id="region" class="form-control" required>
                                                <option value="">Sélectionnez une région</option>
                                                @foreach($regions as $region)
                                                    <option value="{{ $region->id }}">{{ $region->nom }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">
                                              Looks good!
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Département</label>
                                            <select name="depatement" id="departement" class="form-control" required>
                                              <option value="">Sélectionnez le département</option>
                                              @foreach($departements as $departement)
                                                  <option value="{{ $departement->id }}">{{ $departement->nom}}</option>
                                              @endforeach
                                          </select>
                                            <div class="valid-feedback">
                                              Looks good!
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Commune</label>
                                            <select name="commune" id="bureau" class="form-control" required>
                                              <option value="">Sélectionnez le commune</option>
                                              @foreach($communes as $commune)
                                                  <option value="{{ $commune->id }}">{{ $commune->nom }}</option>
                                              @endforeach
                                          </select>
                                            <div class="valid-feedback">
                                              Looks good!
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Centre de vote</label>
                                            <select name="centre" id="bureau" class="form-control" required>
                                              <option value="">Sélectionnez le centre de vote</option>
                                              @foreach($centres as $centre)
                                                  <option value="{{ $centre->id }}">{{ $centre->nom }}</option>
                                              @endforeach
                                          </select>
                                            <div class="valid-feedback">
                                              Looks good!
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Bureau de vote</label>
                                            <select name="bureau_de_vote_id" id="bureau" class="form-control" required>
                                              <option value="">Sélectionnez le bureau de vote</option>
                                              @foreach($bureaux as $bureau)
                                                  <option value="{{ $bureau->id }}">{{ $bureau->n°bureau }}</option>
                                              @endforeach
                                          </select>
                                            <div class="valid-feedback">
                                              Looks good!
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3"> 
                                            <label for="validationCustom01">Candidat</label>
                                            <select name="candidat_id" id="region" class="form-control" required>
                                                <option value="">Sélectionnez le candidat</option>
                                                @foreach($candidats as $candidat)
                                                    <option value="{{ $candidat->id }}">{{ $candidat->prenom }}  {{$candidat->nom}}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">
                                              Looks good!
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="nombre_de_voix">Nombre de Voix:</label>
                                                <input type="number" name="nombre_voix" id="nombre_voix" class="form-control" placeholder="Entrez le nombre de voix" required>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Ajouter</button>
                                    </form>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            
        
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>




     <!-- Validation custom js-->
     <script src="{{url('assets/pages/validation-demo.js')}}"></script>
  @endsection



