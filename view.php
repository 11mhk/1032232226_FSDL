<?php
include 'db.php';

$search = "";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $result = $conn->query("SELECT * FROM students WHERE roll_no='$search'");
} else {
    $result = $conn->query("SELECT * FROM students");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1d2b64, #00c6ff);
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: white;
        }

        .search-box {
            text-align: center;
            margin: 20px;
        }

        input[type="text"] {
            padding: 10px;
            border-radius: 8px;
            border: none;
        }

        input[type="submit"] {
            padding: 10px 15px;
            background: #36d1dc;
            border: none;
            border-radius: 8px;
            color: white;
            cursor: pointer;
        }

        table {
            width: 85%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        th {
            background: linear-gradient(to right, #36d1dc, #5b86e5);
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            text-align: center;
        }

        tr {
            transition: 0.3s;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #e0f7ff;
            transform: scale(1.01);
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }

        a[href*="delete"] {
            background: #ff4d4d;
        }

        a[href*="update"] {
            background: #4caf50;
        }

        .back {
            text-align: center;
            margin-top: 20px;
        }

        .back a {
            background: white;
            color: black;
            padding: 10px 15px;
            border-radius: 8px;
        }
    </style>

</head>

<body>

<h2>Student Records</h2>

<div class="search-box">
    <form method="GET">
        <input type="text" name="search" placeholder="Enter Roll No">
        <input type="submit" value="Search">
    </form>
</div>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Contact</th>
    <th>Action</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['first_name']} {$row['last_name']}</td>
        <td>{$row['roll_no']}</td>
        <td>{$row['contact']}</td>
        <td>
            <a href='delete.php?id={$row['id']}'>Delete</a>
            <a href='update.php?id={$row['id']}'>Update</a>
        </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No records found</td></tr>";
}
?>

</table>

<div class="back">
    <a href="index.php">⬅ Back to Form</a>
</div>

</body>
</html>