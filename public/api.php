<?php
require('./utils.php');
use General\Utils;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $min = isset($_GET['min']) ? (int) $_GET['min'] : 0;
    $max = isset($_GET['max']) ? (int) $_GET['max'] : 100;

    // Ensure $min is less than $max for valid range
    if ($min >= $max) {
        http_response_code(400);
        echo json_encode(["error" => "Invalid range: min should be less than max"]);
        exit;
    }

    $randomNumber = Utils::getSecureRandom($min, $max);
    echo json_encode(["random_number" => $randomNumber]);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
}
