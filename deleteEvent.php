<?php 
include 'connection/session.php';
include 'connection/database.php';
$id= $_GET['id'];
$sql = "DELETE FROM playerStats WHERE Id='".$id."'";


if ($db->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$db->close();
?>