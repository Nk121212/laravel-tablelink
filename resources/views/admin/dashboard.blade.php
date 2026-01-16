<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Tablelink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Tablelink Admin</a>
            <div class="navbar-nav ms-auto">
                <a href="#" class="nav-link">Users</a>
                <a href="#" class="nav-link">Flights</a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <h1 class="h3 mb-4">Admin Dashboard</h1>
        
        <div class="row">
            <!-- Line Chart -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Line Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="lineChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            
            <!-- Bar Chart -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="barChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <!-- Pie Chart -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Pie Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="pieChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fetch chart data dari API
        fetch('{{ route("admin.chart.data") }}')
            .then(response => response.json())
            .then(data => {
                // Line Chart
                new Chart(document.getElementById('lineChart'), {
                    type: 'line',
                    data: {
                        labels: data.line.labels,
                        datasets: [{
                            label: 'Line Chart',
                            data: data.line.data,
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1
                        }]
                    }
                });

                // Bar Chart
                new Chart(document.getElementById('barChart'), {
                    type: 'bar',
                    data: {
                        labels: data.bar.labels,
                        datasets: [{
                            label: 'Bar Chart',
                            data: data.bar.data,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.6)',
                                'rgba(54, 162, 235, 0.6)',
                                'rgba(255, 206, 86, 0.6)',
                                'rgba(75, 192, 192, 0.6)'
                            ]
                        }]
                    }
                });

                // Pie Chart
                new Chart(document.getElementById('pieChart'), {
                    type: 'pie',
                    data: {
                        labels: data.pie.labels,
                        datasets: [{
                            data: data.pie.data,
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ]
                        }]
                    }
                });
            })
            .catch(error => {
                console.error('Error loading chart data:', error);
                // Fallback data jika API error
                const fallbackData = {
                    line: { labels: ['Jan', 'Feb', 'Mar'], data: [10, 20, 30] },
                    bar: { labels: ['A', 'B', 'C'], data: [5, 10, 15] },
                    pie: { labels: ['X', 'Y', 'Z'], data: [100, 200, 300] }
                };
                
                new Chart(document.getElementById('lineChart'), {
                    type: 'line',
                    data: {
                        labels: fallbackData.line.labels,
                        datasets: [{ label: 'Line', data: fallbackData.line.data, borderColor: 'blue' }]
                    }
                });
                
                new Chart(document.getElementById('barChart'), {
                    type: 'bar',
                    data: {
                        labels: fallbackData.bar.labels,
                        datasets: [{ label: 'Bar', data: fallbackData.bar.data, backgroundColor: 'green' }]
                    }
                });
                
                new Chart(document.getElementById('pieChart'), {
                    type: 'pie',
                    data: {
                        labels: fallbackData.pie.labels,
                        datasets: [{ data: fallbackData.pie.data, backgroundColor: ['red', 'blue', 'yellow'] }]
                    }
                });
            });
    </script>
</body>
</html>
