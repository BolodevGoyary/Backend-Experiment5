<?php
include "db_connect.php";

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT username, email FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($username, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
<body>
<h2>Edit User</h2>
<form action="update_user.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="text" name="username" value="<?php echo $username; ?>"><br><br>
<input type="email" name="email" value="<?php echo $email; ?>"><br><br>
<button type="submit">Update</button>
</form>
</body>
</html>