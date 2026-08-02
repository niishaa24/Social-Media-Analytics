<?php

$report = [];

$file = "../Dashboard/report.csv";

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

<title>Reports</title>

<link rel="stylesheet" href="../css/style.css">

</head>


<body>


<nav>

<a href="../index.php">Home</a>
<a href="../Dashboard/dashboard.php">Dashboard</a>
<a href="../analytics/analytics.php">Analytics</a>
<a href="reports.php">Reports</a>
<a href="../contact/contact.php">Contact</a>

</nav>



<section class="welcome">


<h1>Reports</h1>


<h2>Social Media Reports</h2>


<p>
View and analyze your social media performance reports.
</p>



<div class="dashboard-cards">


<div class="card">

<h2>Total Posts Report</h2>

<p>
<?php echo $report["Total Posts"] ?? "0"; ?>
</p>

</div>



<div class="card">

<h2>Likes Report</h2>

<p>
<?php echo $report["Total Likes"] ?? "0"; ?>
</p>

</div>



<div class="card">

<h2>Followers Report</h2>

<p>
<?php echo $report["Total Followers"] ?? "0"; ?>
</p>

</div>


</div>


</section>


</body>

</html>