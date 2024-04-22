<?php
include ("database.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
    // Get review ID from the request
    $reviewId = $_GET['id'];


    // Prepare and execute SQL statement to delete the review
    $sql = "DELETE FROM review_table WHERE review_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $reviewId);
    
    if ($stmt->execute()) {
        // Return success response
        http_response_code(200);
        echo "Review deleted successfully";
    } else {
        // Return error response
        http_response_code(500);
        echo "Failed to delete review";
    }
} else {
    // Return error response for unsupported request method or missing ID
    http_response_code(400);
    echo "Bad Request";
}
?>