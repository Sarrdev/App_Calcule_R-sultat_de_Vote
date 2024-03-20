
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> SN2024 inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center mb-5">
                                            <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                                 <b>SENEGAL 2K24</b>
                                            </a>
                                        </div>
                                        <h1 class="h5 mb-1">Créer un compte!</h1>
                                        <p class="text-muted mb-4">Vous n'avez pas de compte? Créez votre compte, ça ne prend que quelques second</p>
                                        <script>
                                            function validateForm() {
                                                var password = document.getElementById("exampleInputPassword").value;
                                                var confirmPassword = document.getElementById("exampleRepeatPassword").value;
                                                
                                                if (password !== confirmPassword) {
                                                    alert("Les mots de passe ne correspondent pas.");
                                                    return false; // Empêche la soumission du formulaire
                                                }
                                                return true; // Soumission du formulaire
                                            }
                                        </script>
                                        @if (Session::has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{session::get('success')}}
                                            </div>
                                        @endif
                                        <form class="user" action="{{route('inscription')}}" method="POST" onsubmit="return validateForm()">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" name="nom" class="form-control form-control-user" id="exampleFirstName" placeholder="Nom" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="prenom" class="form-control form-control-user" id="exampleLastName" placeholder="Prénom" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" name="password_confirmation" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="confirmer le mot de passe" required>
                                                </div>
                                            </div>
                                            <button class="btn btn-success btn-block waves-effect waves-light"> S'inscrire </button>

                                            <div class="text-center mt-4">
                                                <h5 class="text-muted font-size-16">Se connecter avec</h5>
                                            
                                                <ul class="list-inline mt-3 mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </form>

                                        <div class="row mt-4">
                                            <div class="col-12 text-center">
                                                <p class="text-muted mb-0">Vous avez déja un compte?  <a href="{{route('connexion')}}" class="text-muted font-weight-medium ml-1"><b>Se connecter</b></a></p>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>