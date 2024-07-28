<?php
include 'db.php'; 


$sql = "SELECT * FROM user_details";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Records</title>
</head>
<body>
    <h2>User Records</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Payment Amount</th>
            <th>With GST</th>
            <th>Total Payable Amount</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["payment_amount"] . "</td>";
                echo "<td>" . ($row["with_gst"] ? "Yes" : "No") . "</td>";
                echo "<td>" . $row["total_payable_amount"] . "</td>";
                echo "<td> <a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No records found</td></tr>";
        }
        ?>
    </table>

    <br>
    <a href="index.php">Add New Record</a>
</body>
</html>

<?php
$conn->close();
?>
