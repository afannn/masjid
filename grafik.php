<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Chart.js demo</title>

</head>

<body>


    <h1>Chart.js Sample</h1>
    <div>
        <canvas id="chart" width="600" height="400"></canvas>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('chart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            datasets: [{
                type: 'bar',
                label: 'Pemasukan',
                data: [10, 20, 30, 40],
                backgroundColor: '#02A43F',
            }, {
                type: 'bar',
                label: 'Pengeluaran',
                data: [12, 32, 17, 20],
                backgroundColor: '#3EB86C',
            },
            {
                type: 'bar',
                label: 'Kas Bulanan',
                data: [10, 22, 29, 18],
                backgroundColor: '#94D5AC',
            }],
            labels: ['Januari', 'Februari', 'Maret', 'April']
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

</html>