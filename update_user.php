<?php
include "db_connect.php";

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];

$stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
$stmt->bind_param("ssi", $username, $email, $id);

if ($stmt->execute()) {
    echo "Update successful";
} else {
    echo "Update failed";
}
$stmt->close();
?>