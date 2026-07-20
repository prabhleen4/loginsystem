<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image" href="trav2.png">


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: white;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color:azure;
  color: black; 
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
 nav {
            
            background-color: #089da1;
            color:  black;
            padding: 10px;
            text-align: center;
                    }
        nav a{
           text-decoration: none;
           color: black;
           padding:25px;
           font-weight:bold;}
       nav a:hover{
           background-color:grey;
           color:white;}

.title {
  color: rgba(128, 128, 128, 0.8); /* Grey with 80% opacity */
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black; 
  background-color: white; 
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size:18px;
}

.button:hover {
  background-color: grey;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Additional Colors */
.about-section h1 {
  color: black ; /* Light orange with 90% opacity */
}

.about-section p {
  color: black;
  font-size:20px;
}

.card {
  background-color: #089da1; 
}

.card h2{
color: white;
} .card p {
  color: white;
  font-size:20px; 
}
</style>
</head>
<body>

<div class="about-section">
  <img src="image/logo.png" width="150" height="100">
  <h1>WELCOME TO BOOK OASIS</h1>
  <p>Welcome to BOOK OASIS, your go-to platform for discovering and enjoying a vast collection of books across various genres. Our mission is to make reading accessible to everyone by offering both free and premium books tailored to your preferences and location. Whether you're looking for the latest releases, classic literature, or academic materials, we have something for every reader. We also provide options to donate books, join a waitlist for out-of-stock titles, and connect with authors and suppliers to ensure a seamless and enriching experience for all. At BOOK OASIS, we believe in the power of books to inspire, educate, and entertain, and we are committed to bringing that experience to readers around the world.</p>
</div>
<nav>
    <a href="INDEX.php" style="margin: 0 10px;">HOME</a>
    <a href="oasis_contact.php" style="margin: 0 10px;">CONTACT</a>
    <!-- Add more navigation links as needed -->
</nav>

<h2 style="text-align:center; COLOR:black; font-size:30px"><B>OUR TEAM</B></h2>

<div class="row">
  <div class="column">
    <div class="card">
      <br>
      <center><img src="image/about_pic/ash.jpg" alt="Ashmeet kaur" style="width:300px; height:300px"></center>
      <div class="container">
        <center><h2>Ashmeet Kaur</h2>
        <p class="title">Co-Founder</p>
        
        <p>ashmeet12@gmail.com</p>
        <p><button class="button"><b>Contact</b></button></p></center>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <br>
      <center><img src="image/about_pic/prab.jpg" alt="Prabhleen Kaur" style="width:300px ; height:300px"></center>
      <div class="container">
        <center><h2>Prabhleen Kaur</h2>
        <p class="title">Co-Founder</p>
        
        <p>prabhleen1234@gmail.com</p></center>
        <p><button class="button"><b>Contact</b></button></p>
      </div>
    </div>
  </div>

<div class="row">
  <div class="column">
    <div class="card">
      <br>
      <center><img src="image/about_pic/harp.jpg" alt="harpreet kaur" style="width:300px; height:300px"></center>
      <div class="container">
        <center><h2>Harpreet Kaur</h2>
        <p class="title">Co-Founder</p>
        
        <p>harpreet12@gmail.com</p>
        <p><button class="button"><b>Contact</b></button></p></center>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <br>
      <center><img src="image/about_pic/amrit.jpg" alt="Amritpal Kaur" style="width:300px ; height:300px"></center>
      <div class="container">
        <center><h2>Amritpal Kaur</h2>
        <p class="title">Co-Founder</p>
        
        <p>amrit1234@gmail.com</p></center>
        <p><button class="button"><b>Contact</b></button></p>
      </div>
    </div>
  </div>
  
  
</div>

</body>
</html>



