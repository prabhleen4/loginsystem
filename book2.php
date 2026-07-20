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
            padding: 20px;
            border-radius: 8px;
            max-width: 800px;
            margin-top:30px;
            margin: 40px;
        }
        .book-image {
            width: 200px;
            margin-right: 20px;
        }
        .book-details {
            max-width: 580px;
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
            background-color: #098da1;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .add-to-cart button:hover {
            background-color: gray;
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
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#books">Books</a></li>
            <li><a href="#Arrivals">Arrivals</a></li>
            <li><a href="#Reviews">Reviews</a></li>
        </ul>

        <div class="social_icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-heart"></i>
            <button type="button" class="sbtn" onclick=window.location.href="sign up.html">Sign-In</button>
            <button type="button" class="sbtn" onclick=window.location.href="log in.html">Log-In</button>

        </div>

    </nav>
    <br><br><br><br>


    <div class="book-container">
        <img class="book-image" src="free/free2.jpg" alt="Book Cover">
        <div class="book-details">
            <div class="book-title">Old and Middle English</div>
            <div class="book-author"><strong>Author:</strong>Jane Austen</div>
            <div class="book-isbn"><strong>ISBN:</strong> 868-1-316148-41-1 </div>
          <div class="book-price"><strong>Price:</strong> Rs.0</div>
            <div class="book-description">
                <strong>Book Description:</strong>
                <p>Spanning almost seven centuries, this anthology encapsulates the foundation and consolidation of literature written in English, culminating in some of the finest works produced in English in the high Middle Ages.</p>
            </div>
            <div class="add-to-cart">
                <button onclick="Download()">Download</button>
            </div>
        </div>
    </div>

    <script>
        function Download() {
            alert("Download complete!");
        }
    </script>

</body>
</html>