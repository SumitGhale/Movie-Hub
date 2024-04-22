<?php

require_once "database.php";

$sql = "SELECT review_id FROM review_table";

    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $review_id = $row['review_id'];
        }};

$review_id = $_SESSION['review_id'];
if(isset($_POST['deleteReview'])) {
    $sqlQuery = "DELETE FROM review_table WHERE id = $review_id"; 

    if ($conn->query($sqlQuery) === TRUE) {
      echo "Review deleted successfully.";
    } else {
      echo "Error deleting review: " . $conn->error;
    }

    $conn->close();
}
?>