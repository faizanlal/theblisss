<?php
$conn = mysqli_connect("localhost", "root", "", "register");

if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);

    $query = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Thank you for your message! We will contact you soon :)'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Error: Unable to process message. Please try again later.');</script>";
    }
} else {
    echo "<script>alert('Invalid form submission');</script>";
}

mysqli_close($conn);
?>
