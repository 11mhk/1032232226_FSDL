<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1d2b64, #00c6ff);
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #00c6ff;
            outline: none;
            box-shadow: 0 0 5px #00c6ff;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #36d1dc, #5b86e5);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.03);
            background: linear-gradient(to right, #5b86e5, #36d1dc);
        }

        a {
            display: block;
            text-align: center;
            margin-top: 12px;
            color: #007bff;
            font-weight: bold;
        }
    </style>

</head>

<body>

<div class="container">
    <h2>Student Registration</h2>

    <form method="POST" action="insert.php">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="text" name="roll" placeholder="Roll No" required>
        <input type="password" name="pass" placeholder="Password" required>
        <input type="password" name="cpass" placeholder="Confirm Password" required>
        <input type="text" name="contact" placeholder="Contact Number" required>

        <button type="submit">Register</button>
    </form>

    <a href="view.php">View Students</a>
</div>

</body>
</html>