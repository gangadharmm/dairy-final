<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";  // Replace with your database username
    $password = "";      // Replace with your database password
    $dbname = "dairy";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve POST data
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    $amount = $_POST['amount']; // Retrieve the amount from POST data

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO payments (firstname, email, address, city, state, zip, cardname, cardnumber, expmonth, expyear, cvv, amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssd", $firstname, $email, $address, $city, $state, $pincode, $cardname, $cardnumber, $expmonth, $expyear, $cvv, $amount);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>
                alert('Order payment successful. Total Amount: ₹" . htmlspecialchars($amount) . "');
                window.location.href='success.php?firstname=" . urlencode($firstname) . "&email=" . urlencode($email) . "&address=" . urlencode($address) . "&city=" . urlencode($city) . "&state=" . urlencode($state) . "&pincode=" . urlencode($pincode) . "&cardname=" . urlencode($cardname) . "&cardnumber=" . urlencode($cardnumber) . "&expmonth=" . urlencode($expmonth) . "&expyear=" . urlencode($expyear) . "&cvv=" . urlencode($cvv) . "&amount=" . urlencode($amount) . "';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
