@extends('admin.dashboard')

@section('content')
    {{-- <h1>AQUI VA IR EL CHART</h1> --}}
    <div class="row col-6">
        <canvas id="myChart" width="400" height="400"></canvas>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

    <script>
        var data = @json($data);
        datos=[data]

        var label = @json($label);
        label = [label]

        // console.log(data)
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label[0],
                datasets: [{
                    label: 'LIDERES DE MESA',
                    data: datos[0],
                    backgroundColor: [
                        'rgba(27, 37, 239, 0.2)',
                        'rgba(223, 239, 27, 0.2)',
                        // 'rgba(255, 206, 86, 0.2)',
                        // 'rgba(75, 192, 192, 0.2)',
                        // 'rgba(153, 102, 255, 0.2)',
                        // 'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(27, 37, 239, 1)',
                        'rgba(223, 239, 27, 1)',
                        // 'rgba(255, 206, 86, 1)',
                        // 'rgba(75, 192, 192, 1)',
                        // 'rgba(153, 102, 255, 1)',
                        // 'rgba(255, 159, 64, 1)'
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
