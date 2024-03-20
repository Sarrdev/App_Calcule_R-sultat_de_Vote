@extends('pages.layouts._app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Résultats des élections</h5>
                    @if ($resultatsElections['gagnantPremierTour'])
                        <div class="alert alert-success" role="alert">
                            <span style="font-size: 1.1em;">Gagnant au premier tour : {{ $resultatsElections['gagnantPremierTour'] }} @if(isset($resultatsElections['pourcentageGagnant'])) - voix ({{ number_format($resultatsElections['pourcentageGagnant'], 2) }}%)@endif</span>
                        </div>
                    @elseif (!empty($resultatsElections['candidatsSecondTour']))
                        <div class="alert alert-warning" role="alert">
                            Candidats au second tour :
                            <ul class="list-group">
                                @foreach ($resultatsElections['candidatsSecondTour'] as $candidat)
                                    <li class="list-group-item">{{ $candidat }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <div class="alert alert-info" role="alert">
                            Aucun candidat ne participe ni au second tour ni n'a remporté plus de 50% des voix au premier tour.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <canvas id="resultatsChart"></canvas>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('resultatsChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($labels),
            datasets: [{
                label: 'Votes',
                data: @json($votes),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)', 
                    'rgba(255, 206, 86, 0.2)', 
                    'rgba(75, 192, 192, 0.2)', 
                    'rgba(153, 102, 255, 0.2)', 
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)', 
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)', 
                    'rgba(75, 192, 192, 1)', 
                    'rgba(153, 102, 255, 1)', 
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
