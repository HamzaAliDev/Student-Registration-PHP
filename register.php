<!-- register.php -->
<!DOCTYPE html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h1>Student Registration Form</h1>
    <form action="student_details.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="roll">Roll Number:</label>
        <input type="text" id="roll" name="roll" required>
        <br><br>
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required>
        <br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
