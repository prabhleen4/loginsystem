<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Description</title>
    <link rel="stylesheet" href="prestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
        .book-container {
            display: flex;
            border: 1px solid #ccc;
            margin: 40px;
            padding: 20px;
            border-radius: 8px;
            max-width: 800px;
            margin-top:30px;
        }
    .book-image {
        width: 200px;
        margin-right: 20px;
    }
    .book-details {
        max-width: 500px;
    }
    .book-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .book-author, .book-isbn, .book-price {
        margin-bottom: 8px;
        font-size: 18px;
    }
    .book-description {
        margin-top: 15px;
        font-size: 16px;
    }
    .add-to-cart {
        margin-top: 20px;
    }
    .add-to-cart button {
        background-color: #089da1;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .add-to-cart button:hover {
        background-color: #grey;
    }
    .view-cart {
            margin-top: 20px;
        }
        .view-cart a {
            background-color: grey;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .view-cart a:hover {
            background-color: #089da1;
        }
    </style>
    
</head>
<body>
    <section>
    <nav>

        <div class="logo">
            <img src="logo1.png">
        </div>

        <ul>
            <li><a href="INDEX.php">Home</a></li>
            <li><a href="oasis_about.php">About</a></li>
            <li><a href="oasis_contact.php">Contact</a></li>
            <li><a href="mainpg.php">Categories</a></li>
            <li><a href="cart.php">Add to Cart</a></li>
            
        </ul>

        <div class="social_icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-heart"></i>
            <button type="button" class="sbtn" onclick=window.location.href="register_form.php">Sign-In</button>
            <button type="button" class="sbtn" onclick=window.location.href="login_form.php">Log-In</button>


        </div>


    </nav>
    </section>



    <div class="book-container">
        <img class="book-image" src="new/arrival_5.jpg" alt="Book Cover">
        <div class="book-details">
            <div class="book-title" id="book-title">To Kill a Mockingbird</div>
            <div class="book-author"><strong>Author:</strong> Harper Lee</div>
            <div class="book-isbn"><strong>ISBN:</strong> 978-0-060935-46-7</div>
            <div class="book-price"><strong>Price:</strong> Rs. 1620</div>
            <div class="book-description">
                <strong>Book Description:</strong>
                <p>To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 
                    July 1960 and became instantly successful. In the United States, it is widely read in high schools and middle schools</p>
            </div>
            <div class="add-to-cart">
                <button onclick="addToCart()">Add to Cart</button>
            </div>
            <div class="view-cart">
                <a href="cart.php">View Cart</a>
            </div>
        </div>
    </div>

    <script>
        function addToCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let bookTitle = document.getElementById('book-title').textContent;
            let existingBook = cart.find(book => book.title === bookTitle);
    
            if (existingBook) {
                // If the book already exists, increment its quantity
                existingBook.quantity += 1;
            } else {
                // Otherwise, add a new book to the cart
                let book = {
                    title: bookTitle,
                    price: 1620,
                    quantity: 1
                };
                cart.push(book);
            }
    
            localStorage.setItem('cart', JSON.stringify(cart));
            alert("Book added to cart!");
        }
    </script>

</body>
</html>