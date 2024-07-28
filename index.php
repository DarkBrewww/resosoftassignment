<form action="process.php" method="post">
    <input type="text" name="name" required>
    <input type="number" name="payment_amount" required>
    <input type="radio" name="with_gst" value="1"> With GST
    <input type="radio" name="with_gst" value="0" checked> Without GST
    <input type="submit" value="Submit">
</form>
