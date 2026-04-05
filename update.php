<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $contact = $_POST['contact'];

    $conn->query("UPDATE students SET contact='$contact' WHERE id=$id");

    header("Location: view.php");
}

$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Update Contact</h2>

<form method="POST">
    Contact: <input type="text" name="contact" value="<?php echo $row['contact']; ?>">
    <input type="submit" value="Update">
</form>