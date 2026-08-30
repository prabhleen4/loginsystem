BOOK OASIS

A. About the Project

Book Oasis is an e-commerce website developed for buying, exploring, and managing books.

The website offers books in four categories:

1. New Books : Newly available books for purchase.
2. Free Books : Books available to users free of cost.
3. Donated Books : Books that have been donated and made available through the platform.
4. Pre-Loved Books : Previously owned books available for purchase or reuse.

The project was developed using HTML, CSS, JavaScript, PHP, and MySQL. It also uses phpMyAdmin for database management.

Book Oasis includes both a customer-side interface for browsing and purchasing books and a supplier interface that allows suppliers to add new books to the website.

The project demonstrates how a frontend, PHP backend, and MySQL database can work together to create a dynamic e-commerce website.

B. Features 

1. Customer Side Features

- Browse books from different categories
- Explore books from different categories.
- View book details and prices
- Add books to the shopping cart
- Update or remove items from the cart
- View the total price of selected books
- Proceed to checkout
- Simulated payment process

2. Supplier Side Features

- Dedicated supplier interface
- Add new books to the website
- Enter book details through a supplier form
- Store newly added book information in the MySQL database
- Display supplier-added books on the website (*WORK IN PROGRESS*)

3. Database Features

- Store user iformation and supplier information in database. (*Sensitive information encrypted*)
- Store book information in MySQL
- Store and retrieve data dynamically
- Store information required for the checkout process
- Connect the website with the database using PHP

C. Technologies Used

Frontend

•	HTML5 — Structure and content of the website.
•	CSS3 — Styling, layout, and visual design.
•	JavaScript — Client-side interactivity and functionality.

Backend

•	PHP — Server-side processing and communication with the database.

Database

•	MySQL — Storing and managing application data.
•	phpMyAdmin — Creating, managing, and testing the MySQL database.
Development Tools
•	XAMPP — Local development environment using Apache and MySQL.
•	Git — Version control.
•	GitHub — Hosting and managing the project repository. 

D. How Book Oasis Works

Book Oasis consists of a customer-side interface and a supplier-side interface.

1. Customer Workflow :

Customer
   ↓
Browse Books
   ↓
Select a Book
   ↓
Add to Cart
   ↓
Checkout
   ↓
Simulated Payment Process

2. Supplier Workflow:

Supplier
   ↓
Supplier Interface
   ↓
Enter Book Information
   ↓
Submit Book Details
   ↓
PHP Backend
   ↓
MySQL Database
(*The supplier workflow is currently a Work in Progress (WIP). Some supplier-side functionality is still under development.*)

E. Databases

Book Oasis uses "MySQL" to store and manage website data.

The database was created and managed using "phpMyAdmin". It is used to demonstrate how an e-commerce website can store, retrieve, and manage information.

The database is used for information related to the website, such as:-

- Books
- Book categories
- Prices
- User information
- Orders
- Checkout information
- Payment simulation data

PHP is used to connect the website with the MySQL database and handle database-related operations.

(*The payment functionality in this project is for "simulation and educational purposes only" and does not process real payments.*)

F. How to Run the Project Locally

Book Oasis was developed using XAMPP and can be run on a local computer.

Step 1. Install XAMPP

Install XAMPP and start the following services:

- Apache
- MySQL

Step 2. Place the Project in XAMPP

Copy the Book Oasis project folder into the `htdocs` folder of XAMPP.

For example: C:\xampp\htdocs\BookOasis

Step 3. Create the Database

Open phpMyAdmin in your browser:

http://localhost/phpmyadmin

Create the database required by the project.

Import the SQL files from "Databses folder" into phpMyAdmin.

Step 4. Configure the Database Connection

Make sure the PHP database connection is configured with the correct local MySQL details.

Typical XAMPP settings are:

Host: localhost
Username: root
Password:
Database: your_database_name

Step. Open Book Oasis Website

Open the following in your browser:

https://localhost/loginsystem/

The Book Oasis website should now run locally through XAMPP.




        










