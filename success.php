<?php
// Retrieve the values from the URL and handle potential missing parameters
$firstname = isset($_GET['firstname']) ? htmlspecialchars($_GET['firstname']) : 'N/A';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'N/A';
$address = isset($_GET['address']) ? htmlspecialchars($_GET['address']) : 'N/A';
$city = isset($_GET['city']) ? htmlspecialchars($_GET['city']) : 'N/A';
$state = isset($_GET['state']) ? htmlspecialchars($_GET['state']) : 'N/A';
$pincode = isset($_GET['pincode']) ? htmlspecialchars($_GET['pincode']) : 'N/A';
$cardname = isset($_GET['cardname']) ? htmlspecialchars($_GET['cardname']) : 'N/A';
$cardnumber = isset($_GET['cardnumber']) ? htmlspecialchars($_GET['cardnumber']) : 'N/A';
$expmonth = isset($_GET['expmonth']) ? htmlspecialchars($_GET['expmonth']) : 'N/A';
$expyear = isset($_GET['expyear']) ? htmlspecialchars($_GET['expyear']) : 'N/A';
$cvv = isset($_GET['cvv']) ? htmlspecialchars($_GET['cvv']) : 'N/A';
$amount = isset($_GET['amount']) ? htmlspecialchars($_GET['amount']) : '0.00'; // Default to '0.00' if amount is not set
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Success</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      body {
        font-family: Arial, sans-serif;
        color: #333;
        text-align: center;
        padding: 20px;
        background-color: #f9f9f9;
      }
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h1 {
        color: #4caf50;
      }
      p {
        margin: 10px 0;
      }
      .btn-home {
        background-color: #4caf50;
        color: white;
        border: none;
        padding: 15px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 20px;
      }
      .btn-home:hover {
        background-color: #45a049;
      }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Payment Successful!</h1>
        <p>Thank you, <?php echo $firstname; ?>!</p>
        <p>Your payment was successful. Here are your order details:</p>
        <p><strong>Full Name:</strong> <?php echo $firstname; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
        <p><strong>City:</strong> <?php echo $city; ?></p>
        <p><strong>State:</strong> <?php echo $state; ?></p>
        <p><strong>Pincode:</strong> <?php echo $pincode; ?></p>
        <p><strong>Card Name:</strong> <?php echo $cardname; ?></p>
        <p><strong>Card Number:</strong> <?php echo $cardnumber; ?></p>
        <p><strong>Expiration Month:</strong> <?php echo $expmonth; ?></p>
        <p><strong>Expiration Year:</strong> <?php echo $expyear; ?></p>
        <p><strong>CVV:</strong> <?php echo $cvv; ?></p>
        <p><strong>Total Amount:</strong> ₹<?php echo $amount; ?></p>
        <a href="main.html" class="btn-home">Go to Home</a>
    </div>
</body>
</html>
