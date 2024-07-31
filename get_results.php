<?php
require 'database.php';

$post = $_POST['post'];

$sql = "SELECT user_name, votes FROM candidates WHERE acad_year = '$post'";
$result = mysqli_query($conn, $sql);

$output = '<table class="table">';
$output .= '<thead><tr><th>Candidate</th><th>Votes</th></tr></thead>';
$output .= '<tbody>';

while ($row = mysqli_fetch_array($result)) {
    $output .= '<tr>';
    $output .= '<td>' . $row['user_name'] . '</td>';
    $output .= '<td>' . $row['votes'] . '</td>';
    $output .= '</tr>';
}

$output .= '</tbody></table>';

echo $output;