<?php
include 'db.php';

$name = $_POST['name'];
$payment_amount = $_POST['payment_amount'];
$with_gst = $_POST['with_gst'];

if ($with_gst) {
    $total_payable_amount = $payment_amount + ($payment_amount * 0.18);
} else {
    $total_payable_amount = $payment_amount;
}

$sql = "INSERT INTO user_details (name, payment_amount, with_gst, total_payable_amount) VALUES ('$name', '$payment_amount', '$with_gst', '$total_payable_amount')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
