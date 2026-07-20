

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Online Bookstore</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color:#E1EBEE;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #089da1;
            color: white;
        }
        table td {
            text-align: center;
        }
        .btn {
            padding: 5px 10px;
            background-color: grey;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #089da1;
        }
        .cart-summary {
            text-align: right;
        }
        .cart-summary h2 {
            margin-bottom: 10px;
        }
        .checkout-btn {
            padding: 10px 20px;
            background-color: #089da1;
            color: white;
            text-decoration: none;
           /* border-radius: 4px;*/
            display: inline-block;
            margin-top: 20px;
        }
        .checkout-btn:hover {
            background-color: grey;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Your Cart</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="cart-table-body">
                <!-- Cart items will be populated here -->
            </tbody>
        </table>

        <div class="cart-summary">
            <h2>Total: Rs.<span id="cart-total">0.00</span></h2>
            <!--<a href="payment.php" class="checkout-btn">Proceed to Checkout</a>-->
            <button class="checkout-btn" onclick="proceedToCheckout()">Proceed to Checkout</button>

        </div>
    </div>

    <script>
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let total = 0;

        function renderCart() {
            let cartTableBody = document.getElementById('cart-table-body');
            cartTableBody.innerHTML = '';
            total = 0;

            if (cart.length === 0) {
                cartTableBody.innerHTML = '<tr><td colspan="5">Your cart is empty.</td></tr>';
            } else {
                cart.forEach((book, index) => {
                    let subtotal = (book.price * book.quantity).toFixed(2);
                    total += parseFloat(subtotal);

                    cartTableBody.innerHTML += `
                        <tr>
                            <td>${book.title}</td>
                            <td>Rs.${book.price.toFixed(2)}</td>
                            <td>
                                <input type="number" value="${book.quantity}" min="1" onchange="updateQuantity(${index}, this.value)">
                            </td>
                            <td>Rs.${subtotal}</td>
                            <td><button class="btn" onclick="removeFromCart(${index})">Remove</button></td>
                        </tr>
                    `;
                });
            }

            document.getElementById('cart-total').textContent = total.toFixed(2);
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        function updateQuantity(index, newQuantity) {
            cart[index].quantity = parseInt(newQuantity);
            renderCart();
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            renderCart();
        }
        function proceedToCheckout() {
            if (cart.length === 0) {
                alert("Your cart is empty. Please add books to the cart before proceeding to checkout.");
            } else {
                 window.location.href = "payment.php";
        }
    }   


        renderCart();
    </script>

</body>
</html>


