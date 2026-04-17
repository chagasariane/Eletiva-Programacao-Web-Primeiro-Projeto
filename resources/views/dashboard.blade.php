@extends('layout')

@section('conteudo')


{{-- resources/views/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Chart.js (para gráficos mock) --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="#">Dashboard</a>

    <div class="ms-auto d-flex align-items-center">
        <span class="text-white me-3">
            Olá, {{ Auth::user()->name }}
        </span>

        <form method="POST" action="/logout">
            @csrf
            <button class="btn btn-danger btn-sm" type="submit">
                Logout
            </button>
        </form>
    </div>
</nav>

<div class="container mt-4">

    <div class="row">
        {{-- Gráfico 1 --}}
        <div class="col-md-6 mb-4">
            <div class="card p-3">
                <h5>Vendas Mensais</h5>
                <canvas id="chart1"></canvas>
            </div>
        </div>

        {{-- Gráfico 2 --}}
        <div class="col-md-6 mb-4">
            <div class="card p-3">
                <h5>Usuários Ativos</h5>
                <canvas id="chart2"></canvas>
            </div>
        </div>

        {{-- Gráfico 3 --}}
        <div class="col-md-6 mb-4">
            <div class="card p-3">
                <h5>Receita</h5>
                <canvas id="chart3"></canvas>
            </div>
        </div>

        {{-- Gráfico 4 --}}
        <div class="col-md-6 mb-4">
            <div class="card p-3">
                <h5>Performance</h5>
                <canvas id="chart4"></canvas>
            </div>
        </div>
    </div>

</div>

<script>
    // Gráfico 1
    new Chart(document.getElementById('chart1'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr'],
            datasets: [{
                label: 'Vendas',
                data: [10, 20, 30, 40]
            }]
        }
    });

    // Gráfico 2
    new Chart(document.getElementById('chart2'), {
        type: 'line',
        data: {
            labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
            datasets: [{
                label: 'Usuários',
                data: [5, 15, 10, 25]
            }]
        }
    });

    // Gráfico 3
    new Chart(document.getElementById('chart3'), {
        type: 'pie',
        data: {
            labels: ['Produto A', 'Produto B', 'Produto C'],
            datasets: [{
                data: [30, 50, 20]
            }]
        }
    });

    // Gráfico 4
    new Chart(document.getElementById('chart4'), {
        type: 'doughnut',
        data: {
            labels: ['Meta', 'Realizado'],
            datasets: [{
                data: [70, 30]
            }]
        }
    });
</script>

</body>
</html>


@endsection