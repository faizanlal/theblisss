<?php
$conn = mysqli_connect("localhost", "root", "", "register");


if (!$conn) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['email'] = $email;
            mysqli_close($conn);
            echo "<script>alert('Login successful'); window.location='index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Invalid email or password'); window.location='login.php';</script>";
            exit(); 
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

