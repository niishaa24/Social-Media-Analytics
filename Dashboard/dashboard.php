<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
    exit();
}

// Read Python generated report
$report = [];

$file = "report.csv";

if (file_exists($file)) {

    if (($handle = fopen($file, "r")) !== FALSE) {

        $headers = fgetcsv($handle);
        $values = fgetcsv($handle);

        for ($i = 0; $i < count($headers); $i++) {
            $report[$headers[$i]] = $values[$i];
        }

        fclose($handle);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

<div class="sidebar">

    <h2>SMA</h2>

    <a href="../index.php">🏠 Home</a>
    <a href="dashboard.php">📊 Dashboard</a>
    <a href="../analytics/analytics.php">📈 Analytics</a>
    <a href="../Reports/reports.php">📄 Reports</a>
    <a href="../contact/contact.php">📞 Contact</a>

</div>


<div class="main-content">

    <h1>Dashboard</h1>

    <div class="top-bar">
        <a href="../Login/logout.php" class="logout-btn">Logout</a>
    </div>


    <h2>Social Media Overview</h2>

    <p>Welcome to your Social Media Analytics Dashboard.</p>


    <div class="dashboard-cards">


        <div class="card">
            <h2>Total Posts</h2>
            <p>
                <?php echo $report["Total Posts"] ?? "0"; ?>
            </p>
        </div>


        <div class="card">
            <h2>Total Likes</h2>
            <p>
                <?php echo $report["Total Likes"] ?? "0"; ?>
            </p>
        </div>


        <div class="card">
            <h2>Total Followers</h2>
            <p>
                <?php echo $report["Total Followers"] ?? "0"; ?>
            </p>
        </div>


    </div>


</div>
<div class="chart-container">

    <h2>Platform Likes Analysis</h2>

    <canvas id="likesChart"></canvas>

</div>


<script>

const ctx = document.getElementById('likesChart');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: [
            'Instagram',
            'Facebook',
            'Twitter',
            'YouTube',
            'LinkedIn'
        ],

        datasets: [{

            label: 'Likes',

            data: [
                4500,
                3200,
                5200,
                8000,
                2100
            ]

        }]

    },

    options: {

        responsive:true,

        plugins:{
            legend:{
                display:true
            }
        }

    }

});

</script>


</body>

</html>