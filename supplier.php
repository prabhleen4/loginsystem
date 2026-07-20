<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Supplier Page</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-image: url(https://wallpaperaccess.com/full/3939649.jpg);
            background-size: cover;
        }
        .container {
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            margin-right: 60px;
            color:#089da1;
            font-size: 80px;
            padding-left: 10px;
        }
        #book-list {
            margin-top: 20px;
        }
        .book-item {
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }
        button {
            padding: 5px 10px;
            background-color:darkcyan;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color:pink;
        }
        .edit-btn {
            background-color: #4CAF50;
        }
        .edit-btn:hover {
            background-color: #388E3C;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            background-color:rgb(188, 219, 229);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Book Supplier Page</h1>
        
        <h2>Add or Edit a Book</h2>
        <label for="isbn-input">ISBN</label>
        <input type="text" id="isbn-input" placeholder="Enter ISBN number">

        <label for="book-input">Book Title</label>
        <input type="text" id="book-input" placeholder="Enter book title">

        <label for="genre-input">Genre</label>
        <input type="text" id="genre-input" placeholder="Enter genre">

        <label for="author-input">Author</label>
        <input type="text" id="author-input" placeholder="Enter author name">

        <label for="description-input">Description</label>
        <textarea id="description-input" placeholder="Enter book description"></textarea>

        <button id="add-book-btn" onclick="addOrUpdateBook()">Add Book</button>

        <h2>Book List</h2>
        <div id="book-list"></div>
    </div>

    <script>
        let editMode = false;
        let currentBookItem = null;

        // Function to check if ISBN already exists
        function isbnExists(isbn) {
            const bookItems = document.querySelectorAll('.book-item');
            for (let i = 0; i < bookItems.length; i++) {
                const existingIsbn = bookItems[i].querySelector('.isbn').innerText.replace('ISBN: ', '');
                if (existingIsbn === isbn) {
                    return true;
                }
            }
            return false;
        }

        function addOrUpdateBook() {
            const isbnInput = document.getElementById('isbn-input');
            const bookInput = document.getElementById('book-input');
            const genreInput = document.getElementById('genre-input');
            const authorInput = document.getElementById('author-input');
            const descriptionInput = document.getElementById('description-input');

            const isbn = isbnInput.value.trim();
            const bookTitle = bookInput.value.trim();
            const genre = genreInput.value.trim();
            const author = authorInput.value.trim();
            const description = descriptionInput.value.trim();

            if (isbn && bookTitle && genre && author && description) {
                if (!editMode && isbnExists(isbn)) {
                    alert('This ISBN already exists. Please enter a unique ISBN.');
                    return;
                }

                const bookList = document.getElementById('book-list');

                if (editMode) {
                    // Update existing book item
                    currentBookItem.querySelector('.isbn').innerText = `ISBN: ${isbn}`;
                    currentBookItem.querySelector('.title').innerText = `Title: ${bookTitle}`;
                    currentBookItem.querySelector('.genre').innerText = `Genre: ${genre}`;
                    currentBookItem.querySelector('.author').innerText = `Author: ${author}`;
                    currentBookItem.querySelector('.description').innerText = `Description: ${description}`;
                    
                    editMode = false;
                    currentBookItem = null;
                    document.getElementById('add-book-btn').innerText = 'Add Book';
                } else {
                    // Create a new book item
                    const bookItem = document.createElement('div');
                    bookItem.className = 'book-item';
                    bookItem.innerHTML = `
                        <div class="isbn">ISBN: ${isbn}</div>
                        <div class="title">Title: ${bookTitle}</div>
                        <div class="genre">Genre: ${genre}</div>
                        <div class="author">Author: ${author}</div>
                        <div class="description">Description: ${description}</div>
                        <button class="edit-btn" onclick="editBook(this)">Edit</button>
                        <button onclick="deleteBook(this)">Delete</button>
                    `;
                    bookList.appendChild(bookItem);
                }

                clearInputs();
            } else {
                alert('Please fill out all fields.');
            }
        }

        function editBook(button) {
            const bookItem = button.parentElement;
            
            document.getElementById('isbn-input').value = bookItem.querySelector('.isbn').innerText.replace('ISBN: ', '');
            document.getElementById('book-input').value = bookItem.querySelector('.title').innerText.replace('Title: ', '');
            document.getElementById('genre-input').value = bookItem.querySelector('.genre').innerText.replace('Genre: ', '');
            document.getElementById('author-input').value = bookItem.querySelector('.author').innerText.replace('Author: ', '');
            document.getElementById('description-input').value = bookItem.querySelector('.description').innerText.replace('Description: ', '');

            currentBookItem = bookItem;
            document.getElementById('add-book-btn').innerText = 'Update Book';
            editMode = true;
        }

        function deleteBook(button) {
            const bookItem = button.parentElement;
            bookItem.remove();

            if (editMode && currentBookItem === bookItem) {
                clearInputs();
                document.getElementById('add-book-btn').innerText = 'Add Book';
                editMode = false;
                currentBookItem = null;
            }
        }

        function clearInputs() {
            document.getElementById('isbn-input').value = "";
            document.getElementById('book-input').value = "";
            document.getElementById('genre-input').value = "";
            document.getElementById('author-input').value = "";
            document.getElementById('description-input').value = "";
        }
    </script>
</body>
</html>
