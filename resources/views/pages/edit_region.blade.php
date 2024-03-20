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
                                <h4 class="mb-0 font-size-18">Modification</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Formulaire</a></li>
                                        <li class="breadcrumb-item active">Candidat</li>
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
                                  <form action="{{route('pages.updateregion', ['id'=>$region->id])}}" method="POST">
                                    @csrf
                                    <h4 class="card-title">Modification</h4>
                                    @if (Session::has('succes'))
                                      <div class="alert alert-danger" role="alert">
                                        {{session::get('success')}}
                                      </div>
                                    @endif
                                        <div class="form-row">
                                          <div class="col-md-4 mb-3"> 
                                            <label for="validationCustom01">Nom</label>
                                            <input type="text" name="nom" class="form-control" id="validationCustom01" placeholder="Prénom du candidat" value="{{$region->nom}}"  required>
                                            <div class="valid-feedback">
                                              Looks good!
                                            </div>
                                          </div>
                                        </div>
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Modifier</button>
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