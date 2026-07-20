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
        <img class="book-image" src="free/free8.jpg" alt="Book Cover">
        <div class="book-details">
            <div class="book-title">Pictorial History:World's Great Nation</div>
            <div class="book-author"><strong>Author:</strong>Manzenro</div>
            <div class="book-isbn"><strong>ISBN:</strong> 401-2-316148-41-5</div>
          <div class="book-price"><strong>Price:</strong> Rs.0</div>
            <div class="book-description">
                <strong>Book Description:</strong>
                <p>This is an expansive and richly detailed chronicle of the rise and legacy of the legendary nation of Pictoria. This book traces the origins of Pictoria from its early days as a small, isolated kingdom to its ascent as one of the most influential and powerful empires the world has ever seen.Through vivid storytelling and meticulous historical analysis, the book covers Pictoria's military conquests, cultural achievements, political intrigue, and the remarkable individuals who shaped its destiny.</p>
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