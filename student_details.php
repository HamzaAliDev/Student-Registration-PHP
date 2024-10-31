<!DOCTYPE html>
<head>
    <title>Student Details</title>
</head>
<body>
    <?php 
        if (isset($_POST['name']) && isset($_POST['roll']) && isset($_POST['course'])) {
            $name = $_POST['name'];
            $roll = $_POST['roll'];
            $course = $_POST['course'];
        }
    ?>
    <h1>Student Details</h1>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Roll Number:</strong> <?php echo $roll; ?></p>
    <p><strong>Course:</strong> <?php echo $course; ?></p>

    <a href="register.php">Register Another Student</a>
</body>
</html>
