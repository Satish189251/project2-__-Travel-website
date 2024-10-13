<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelling";

//create & check connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("connection Error: " . $conn->connect_errno);
}

//get the data from the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $message = $_POST['message'];

    $sql = "INSERT INTO traveller(customer_name,customer_email,customer_phone,customer_message) VALUES('$username','$email','$phone','$message')";

    if ($conn->query($sql) === true) {
        echo "Registration Successfully Added";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
