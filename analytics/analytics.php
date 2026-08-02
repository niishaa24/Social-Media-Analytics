<?php

// Read dataset report
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

<title>Analytics</title>

<link rel="stylesheet" href="../css/style.css">

</head>


<body>


<nav>

<a href="../index.php">Home</a>

<a href="../Dashboard/dashboard.php">Dashboard</a>

<a href="analytics.php">Analytics</a>

<a href="../Reports/reports.php">Reports</a>

<a href="../contact/contact.php">Contact</a>

</nav>



<section class="welcome">


<h1>Analytics</h1>


<h2>Social Media Performance</h2>


<p>
Analyze your social media performance and engagement.
</p>



<div class="dashboard-cards">


<div class="card">

<h2>Total Engagement</h2>

<p>
<?php echo ($report["Total Likes"] ?? 0) + ($report["Total Comments"] ?? 0) + ($report["Total Shares"] ?? 0); ?>
</p>

</div>



<div class="card">

<h2>Total Reach</h2>

<p>
<?php echo $report["Total Followers"] ?? 0; ?>
</p>

</div>



<div class="card">

<h2>Total Posts</h2>

<p>
<?php echo $report["Total Posts"] ?? 0; ?>
</p>

</div>


</div>


</section>


</body>

</html>