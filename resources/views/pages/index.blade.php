@extends('pages.layouts._app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="card-title">Tableau de bord</h2>
                </div>
                <div class="card-body">
                    <h3 class="text-center mb-4">Application de saisie des résultats pour les élections présidentielles au Sénégal</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box bg-info">
                                <span class="info-box-icon"><i class="fas fa-users fa-3x text-white"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text text-white" style="font-size: 1.5em;">Population du Sénégal</span>
                                    <span class="info-box-number text-white" style="font-size: 2em;">18 millions</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box bg-success">
                                <span class="info-box-icon"><i class="fas fa-vote-yea fa-3x text-white"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text text-white" style="font-size: 1.5em;">Nombre de votants</span>
                                    <span class="info-box-number text-white" style="font-size: 2em;">4 millions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ajoutez d'autres statistiques ou éléments de votre tableau de bord ici -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h2 class="card-title">Diagramme en barres</h2>
                </div>
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Population', 'Nombre de votants'],
            datasets: [{
                label: 'Millions',
                data: [18, 4],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
