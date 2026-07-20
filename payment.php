<?php
// Database connection
$host = 'localhost';
$db = 'user_db';
$user = 'root'; // Default username for XAMPP/MAMP
$pass = ''; // No password for root user by default

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    // Directly insert the payment entry without checking for duplicates
    $stmt = $conn->prepare("INSERT INTO payments (name, amount) VALUES (?, ?)");
    $stmt->bind_param("sd", $name, $amount);
    $stmt->execute();
    $stmt->close();
    $message = "Payment added successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Database</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        button {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #089da1;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: grey;
        }
        .message {
            color: #089da1;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Database</h1>

        <?php if (isset($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="amount">Amount:</label>
            <input type="number" step="0.01" id="amount" name="amount" required>

            <button type="submit">Add Payment</button>
        </form>

        <h2>Proceed to Payment</h2>
        <form method="post" action="payment_processing.php">
            <input type="hidden" name="amount" value="<?php echo htmlspecialchars($amount); ?>"> <!-- Pass amount to the payment page -->
            <button type="submit">Pay</button>
        </form>
    </div>

    <?php $conn->close(); ?>
</body>
</html>
