<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: admin.php");
    exit();
}
include 'connection.php';
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$stats_query = "SELECT country, COUNT(*) as submission_count FROM gad7_submissions GROUP BY country ORDER BY submission_count DESC";
$result = mysqli_query($conn, $stats_query);
if (!$result) {
    die("Error in stats_query: " . mysqli_error($conn));
}

$average_score_query = "SELECT country, AVG(gad7_score) as average_score FROM gad7_submissions GROUP BY country";
$average_score_result = mysqli_query($conn, $average_score_query);
if (!$average_score_result) {
    die("Error in average_score_query: " . mysqli_error($conn));
}

$total_submissions_query = "SELECT COUNT(*) as total_submissions FROM gad7_submissions";
$total_result = mysqli_query($conn, $total_submissions_query);
if (!$total_result) {
    die("Error in total_submissions_query: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 0 && mysqli_num_rows($average_score_result) == 0) {
    die("No data found in the database.");
}

$report_content = "GAD-7 Questionnaire Statistics Report\n";
$report_content .= "-------------------------------------\n";
$total_row = mysqli_fetch_assoc($total_result);
$total_submissions = $total_row['total_submissions'];
$report_content .= "Total Submissions: $total_submissions\n\n";

$report_content .= "Countries by Submission Count:\n";
while ($row = mysqli_fetch_assoc($result)) {
    $report_content .= $row['country'] . ": " . $row['submission_count'] . " submissions\n";
}
$report_content .= "\nAverage GAD-7 Scores by Country:\n";
while ($row = mysqli_fetch_assoc($average_score_result)) {
    $average_score = round($row['average_score'], 2);
    $report_content .= $row['country'] . ": Average Score = " . $average_score . "\n";
}

$report_file = __DIR__ . "/gad7_statistics_report.txt";
if (!file_put_contents($report_file, $report_content)) {
    die("Error writing to file.");
}
header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=gad7_statistics_report.txt");
readfile($report_file);
unlink($report_file);
exit();
?>
