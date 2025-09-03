<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #007BFF;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Student Registration</h2>
        <form method="POST" action="process.php">
            <label>Full Name:</label>
            <input type="text" name="fullname" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Department:</label>
            <input type="text" name="department" required>

            <label>Matric Number:</label>
            <input type="text" name="matric" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>