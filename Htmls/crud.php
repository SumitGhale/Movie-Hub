<?php
if (isset($_POST['row_id'])) {
    $row_id = $_POST['row_id'];
    include 'database.php';
    $sql = "DELETE FROM favorites WHERE movie_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $row_id);


    if ($stmt->execute()) {
        header("Location: favourites.php");
    } else {
        echo "Delete unsuccessfull";
    }
}elseif(isset($_POST['insert_row_id'])){
    $row_id = $_POST['insert_row_id'];
    include 'database.php';
    $sql = "INSERT INTO favorites (user_id, movie_id) VALUES(17, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $row_id);


    if ($stmt->execute()) {
        header("Location: favourites.php");
    } else {
        echo "Could not add to favorites";
    }
}else{
    echo"Movie not found";
}
