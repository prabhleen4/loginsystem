<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store Website</title>
    <link rel="icon" type="image" href="image/logo.png">
    <link rel="stylesheet" href="css/mainpg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    
        <nav>

            <div class="logo">
                <img src="image/logo.png">
            </div>

            <ul>
                <li><a href="INDEX.php">Home</a></li>
                <li><a href="oasis_about.php">About</a></li>
                <li><a href="oasis_contact.php">Contact</a></li>
                <li><a href="mainpg.php">Categories</a></li>
                <li><a href="#Reviews">Add to Cart</a></li>
            </ul>

            <div class="social_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
                <button type="button" class="sbtn" onclick=window.location.href="register_form.php">Sign-In</button>
                <button type="button" class="sbtn" onclick=window.location.href="login_form.php">Log-In</button>


            </div>

        </nav>

        <br><br><br><br><br><br>
        

            
            <div class="row">
              <div class="column">
            <a href="donated_books.php"><img class="image"  src="image/BANNER/DONATED.png" alt="Snow" style="width:100%"></a>
              </div>
              <div class="column">
              <a href="free_books.php"><img class="image" src="image/BANNER/FREE.png" alt="Forest" style="width:100%">
              </div>
              
            </div>

            
            <div class="row">
                <div class="column">
                <a href="new_books.php"><img class="image" src="image/BANNER/NEW.png" alt="Snow" style="width:100%">
                </div>
                <div class="column">
                <a href="pre_loved_books.php"><img class="image" src="image/BANNER/PRE-LOVED.png" alt="Forest" style="width:100%">
                </div>
                
              </div>
  

</body>
</html>

