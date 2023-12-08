<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php

	$keyword = $_POST['searchInput']

	?>
	
    <div class="container">
        <div class="header" style="font-weight:bold">
            <a href="./index.html">Home</a> |
            <a href="./products.php">Products</a> |
            <a href="./search.html">Search</a> |
            <a href="./game.html">Game</a> |
            <a href="./contact.html">Contact</a> |
            <a href="./login.html">Login</a> |
            <a href="./signup.html">Sign Up</a>
        </div>
        <h1>Search Results</h1>
        <form class="form-container">
            <h3>Sample Search Field</h3>
            <input type="search" placeholder="Search">
            <button type="submit" class="submit-button">Submit</button>
            <button type="reset" class="reset-button">Clear</button>
        </form>
        <div class="container"> <!-- will make standout more on its own later. -->
            <div>
                <li>Search Result #1</li>
                <li>Search Result #2</li>
                <li>Search Result #3</li>
                <li>Search Result #4</li>
            </div>
        </div>
    </div>
    <br>
    <footer>
        <p>Contributors: BD, JC, HZ</p>
        <a href="https://github.com/bdeweesevans/webdev-final" target="_blank" rel="noopener noreferrer">Github</a>
    </footer>
</body>