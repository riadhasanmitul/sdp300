<div class="container">
    <a href="index.php" class="btn btn-info">&#8666; Back to Home</a>
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <!-- Add button for generating the statistics report -->
    <form action="generate_report.php" method="POST" style="display: inline-block;">
        <button type="submit" class="btn btn-primary">Generate Statistics Report</button>
    </form>
</div>

<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: admin.php");
    exit();
}

include 'connection.php';

$stats_query = "SELECT country, COUNT(*) as submission_count FROM gad7_submissions GROUP BY country ORDER BY submission_count DESC LIMIT 10";
$result = mysqli_query($conn, $stats_query);

$average_score_query = "SELECT country, AVG(gad7_score) as average_score FROM gad7_submissions GROUP BY country";
$average_score_result = mysqli_query($conn, $average_score_query);

$total_submissions_query = "SELECT COUNT(*) as total_submissions FROM gad7_submissions";
$total_result = mysqli_query($conn, $total_submissions_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_submissions = $total_row['total_submissions'];
?>

<?php
include 'connection.php';

$stats_query = "SELECT country, COUNT(*) as submission_count FROM gad7_submissions GROUP BY country ORDER BY submission_count DESC LIMIT 10";
$result = mysqli_query($conn, $stats_query);
$average_score_query = "SELECT country, AVG(gad7_score) as average_score FROM gad7_submissions GROUP BY country";
$average_score_result = mysqli_query($conn, $average_score_query);
$total_submissions_query = "SELECT COUNT(*) as total_submissions FROM gad7_submissions";
$total_result = mysqli_query($conn, $total_submissions_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_submissions = $total_row['total_submissions'];

?>

<div class="container" style="font-size: 25px;">
    <h2>Submission Statistics</h2>
    <p><strong>Total Submissions:</strong> <?php echo $total_submissions; ?></p>
    
    <h3>Average GAD-7 Score by Country</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Country</th>
                <th>Average GAD-7 Score</th>
                <th>Feedback</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($average_score_result)) {
                $average_score = round($row['average_score'], 2);

                // Determine feedback based on average score
                if ($average_score <= 4) {
                    $feedback = "Minimal Anxiety";
                } elseif ($average_score <= 9) {
                    $feedback = "Mild Anxiety";
                } elseif ($average_score <= 14) {
                    $feedback = "Moderate Anxiety";
                } else {
                    $feedback = "Severe Anxiety";
                }

                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['country']) . "</td>";
                echo "<td>" . $average_score . "</td>";
                echo "<td>" . $feedback . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<div class="container">
    <h2>Top 10 Countries by Submission Count</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Country</th>
                <th>Submission Count</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['country']) . "</td>";
                echo "<td>" . $row['submission_count'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<style>
    /* Global styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f7f6;
    margin: 0 0 50px 0;
    padding: 0;
}

.container {
    width: 90%;
    margin: 0 auto;
    padding-top: 50px;
}

h2, h3 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

h3 {
    color: #555;
}

/* Table styling */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.table thead {
    background-color: #007bff;
    color: white;
    font-weight: bold;
}

.table th, .table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tr:hover {
    background-color: gray;
}

/* Button styling */
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
    border: none;
}
.btn-info {
    background-color: #2df9da;
    color: black;
    border: none;
}
.btn-danger:hover {
    background-color: #c82333;
}
.btn-info:hover {
    background-color: #c82333;
}
/* Result section */
.result-section {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
    text-align: center;
}

.result-section h3 {
    color: #28a745;
    margin-bottom: 20px;
}

/* Pagination buttons */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination a {
    padding: 10px 15px;
    margin: 0 5px;
    text-decoration: none;
    border: 1px solid #007bff;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
}

.pagination a:hover {
    background-color: #0056b3;
}

</style>