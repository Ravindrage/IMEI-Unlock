<?php 

include("connection.php");


$endYear = $_GET['endYear'] ?? '';
$topic = $_GET['topic'] ?? '';
$sector = $_GET['sector'] ?? '';
$region = $_GET['region'] ?? '';
$pest = $_GET['pest'] ?? '';
$source = $_GET['source'] ?? '';
$swot = $_GET['swot'] ?? '';
$country = $_GET['country'] ?? '';
$city = $_GET['city'] ?? '';

// Build SQL query with filters
$sql = "SELECT intensity, likelihood, relevance, end_year, country, topic, region, city FROM excel_data WHERE 1=1";

if (!empty($endYear)) {
    $sql .= " AND end_year = '$endYear'";
}
if (!empty($topic)) {
    $sql .= " AND topic = '$topic'";
}
if (!empty($sector)) {
    $sql .= " AND sector = '$sector'";
}
if (!empty($region)) {
    $sql .= " AND region LIKE '%$region%'";
}
if (!empty($pest)) {
    $sql .= " AND pestle = '$pest'";
}
if (!empty($source)) {
    $sql .= " AND source LIKE '%$source%'";
}
if (!empty($swot)) {
    $sql .= " AND swot LIKE '%$swot%'";
}
if (!empty($country)) {
    $sql .= " AND country LIKE '%$country%'";
}
if (!empty($city)) {
    $sql .= " AND city LIKE '%$city%'";
}

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} 

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);


?>