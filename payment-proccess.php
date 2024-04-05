<?php

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movietheatredb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = [ 
     'user_id' => $_SESSION['user'],
    'payment_id' => $_POST['payment_id'],
    'amount' => $_POST['amount']/100,
    'movie' => $_POST["movie"], // Adding movie information
    'seats' => $_POST["seats"] // Adding seats information
];
echo $_POST['user_id'];
// Define the SQL query to insert data into the orders table
$sql = "INSERT INTO orders (user_id, payment_id, amount, movie, seats) VALUES (?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the parameters and execute the query
$stmt->bind_param("sssss", $data['user_id'], $data['payment_id'], $data['amount'], $data['movie'], $data['seats']);

if ($stmt->execute()) {
    $arr = array('msg' => 'Payment successfully credited', 'status' => true);
    echo json_encode($arr);
} else {
    $arr = array('msg' => 'Error: Unable to insert data into the database', 'status' => false);
    echo json_encode($arr);
}

// Close the statement and database connection
$stmt->close();
$conn->close();

?>
