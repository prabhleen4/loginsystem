<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #089da1;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: grey;
        }
        .hidden {
            display: none;
        }
    </style>
    <!-- Adding jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Payment Form (Rs. 80 Fee Included)</h2>
    <form id="paymentForm">
        <!-- Personal Information -->
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Payment Method Selection -->
        <div class="form-group">
            <label for="paymentMethod">Select Payment Method</label>
            <select id="paymentMethod" name="paymentMethod" required>
                <option value="" disabled selected>Select a payment method</option>
                <option value="debitCard">Debit Card</option>
                <option value="upi">UPI</option>
                <option value="netBanking">Net Banking</option>
                <option value="qrCode">QR Code</option>
            </select>
        </div>

        <!-- Debit Card Information -->
        <div id="debitCardDetails" class="hidden">
            <h3>Debit Card Payment</h3>
            <div class="form-group">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" maxlength="16" placeholder="1234 5678 9012 3456">
            </div>

            <div class="form-group">
                <label for="expDate">Expiration Date</label>
                <input type="month" id="expDate" name="expDate">
            </div>

            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="123">
            </div>
        </div>

        <!-- UPI Payment -->
        <div id="upiDetails" class="hidden">
            <h3>UPI Payment</h3>
            <div class="form-group">
                <label for="upiId">UPI ID</label>
                <input type="text" id="upiId" name="upiId" placeholder="user@bank">
            </div>
        </div>

        <!-- Net Banking Payment -->
        <div id="netBankingDetails" class="hidden">
            <h3>Net Banking Payment</h3>
            <div class="form-group">
                <label for="bankName">Bank Name</label>
                <input type="text" id="bankName" name="bankName">
            </div>

            <div class="form-group">
                <label for="accountNumber">Account Number</label>
                <input type="text" id="accountNumber" name="accountNumber">
            </div>
        </div>

        <!-- QR Code Payment -->
        <div id="qrCodeDetails" class="hidden">
            <h3>QR Code Payment</h3>
            <p>Please scan the QR code below to complete the payment:</p>
            <img src="your-qr-code-image.png" alt="QR Code" style="width:200px;">
        </div>

        <!-- Payment Fee -->
        <div class="form-group">
            <label>Payment Fee: Rs. 80</label>
        </div>

        <!-- Submit Button -->
        <button type="submit">Submit Payment</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        // Show the corresponding payment details based on the selected method
        $('#paymentMethod').change(function() {
            const selectedMethod = $(this).val();
            
            // Hide all payment method details initially
            $('#debitCardDetails, #upiDetails, #netBankingDetails, #qrCodeDetails').addClass('hidden');
            
            // Show the selected payment method details
            if (selectedMethod === 'debitCard') {
                $('#debitCardDetails').removeClass('hidden');
            } else if (selectedMethod === 'upi') {
                $('#upiDetails').removeClass('hidden');
            } else if (selectedMethod === 'netBanking') {
                $('#netBankingDetails').removeClass('hidden');
            } else if (selectedMethod === 'qrCode') {
                $('#qrCodeDetails').removeClass('hidden');
            }
        });

        // Handle form submission
        $('#paymentForm').submit(function(event) {
            event.preventDefault(); // Prevent actual form submission

            // Display payment success message
            alert("Payment successful! Rs. 80 fee has been applied.");

            // Redirect to Add Book page after 2 seconds
            setTimeout(function() {
                window.location.href = "supplier.php"; // Replace with actual URL of the Add Book page
            }, 2000); // 2-second delay before redirect
        });
    });
</script>

</body>
</html>


<!--Htmlll file m. <form id="paymentForm" action="submit_payment.php" method="POST">
    <!-- Form fields as before -->
</form>-->
