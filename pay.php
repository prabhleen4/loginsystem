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

// Handle sign-up
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user_form (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->close();
    $message = "Sign-up successful! You can now log in to make a payment.";
}

// Handle payment
if (isset($_POST['pay'])) {
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_form.php"); // Redirect to login form if not logged in
        exit();
    }

    $amount = $_POST['amount'];
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO payments (user_id, amount) VALUES (?, ?)");
    $stmt->bind_param("id", $user_id, $amount);
    $stmt->execute();
    $stmt->close();
    $message = "Payment of $amount was successful!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input[type="text"], input[type="password"], input[type="number"] { width: 100%; padding: 10px; margin: 5px 0; }
        button { padding: 10px 15px; }
        .message { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Payment System</h1>

    <?php if (isset($message)): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>

    <h2>Sign Up</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="signup">Sign Up</button>
    </form>

    <h2>Login</h2>
    <p>If you already have an account, please <a href="login_form.php">log in here</a>.</p>

    <?php if (isset($_SESSION['user_id'])): ?>
        <h2>Make a Payment</h2>
        <form method="post">
            <input type="number" name="amount" placeholder="Amount" required>
            <button type="submit" name="pay">Pay</button>
        </form>
    <?php endif; ?>

</body>
</html>

<?php $conn->close(); ?>
