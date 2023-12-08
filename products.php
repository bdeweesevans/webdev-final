<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
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
        <h1>Shopping</h1>
        <form action="#" method=get>
            <h2>Our Shop:</h2>
            <div id="product1">
                <h3>1 Hour PS5 Time</h3>
                <p>New Spiderman game?!</p>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6cbhg24BNYD9JqSkB6wDexsHk_7sqPOC76F5vWSWEEA&s" alt="Product 1" width="200"><br>
                <label for="quantity1">Quantity:</label>
                <input type="number" id="quantity1" name="quantity1" value="0" min="0" onchange="updateSubtotal(1, 10)">
                <p>Unit Cost: $12.00</p>
                <p>Subtotal: $<span id="subtotal1">0.00</span></p>
              </div>
              
            <div id="product2">
                <h3>1 Hour PC Time</h3>
                <p>Ryzen CPU!</p>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXJbfwgNSdbM69N2HNf4LwhOHAJeCBUv_ixhHzbjvGQQ&s" alt="Product 2" width="200"><br>
                <label for="quantity2">Quantity:</label>
                <input type="number" id="quantity2" name="quantity2" value="0" min="0" onchange="updateSubtotal(2, 15)">
                <p>Unit Cost: $20.00</p>
                <p>Subtotal: $<span id="subtotal2">0.00</span></p>
            </div>
              
            <div id="product3">
                <h3>5 Game Tokens</h3>
                <img src="https://crescent.edu/uploads/editor/images/Blackjack.png" alt="Product 3" width="200"><br>
                <label for="quantity3">Quantity:</label>
                <input type="number" id="quantity3" name="quantity3" value="0" min="0" onchange="updateSubtotal(3, 10)">
                <p>Unit Cost: $10.00</p>
                <p>Subtotal: $<span id="subtotal3">0.00</span></p>
            </div>

            <h3>Grand Total: $<span id="grandTotal">0.00</span></h3>

            <h2>Your Information:</h2>

            <div>
                Name:<br>
                <input type="text" id="name" name="name" placeholder="John Doe" required>
            </div>

            <div>
                Phone Number:<br>
                <input type="tel" id="phone" name="phone" placeholder="123-456-7890" required>
            </div>

            <div>
                Email Address:<br>
                <input type="email" id="email" name="email" placeholder="youremail@gmail.com" 
                    value="<?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?>" 
                    required>
            </div>

            <div>
                Billing Address:<br>
                <input type="text" id="address-street" name="address" placeholder="Street Address" required>
                <input type="text" id="address-city" name="address" placeholder="City" required>
                <input type="text" id="address-state" name="address" placeholder="State" required>
                <input type="text" id="address-areacode" name="address" placeholder="Area Code" required>
            </div>

            <div>
                Name on Credit Card:<br>
                <input type="text" id="cc-name" name="cc-name" placeholder="John Doe" required>
            </div>

            <div>
                Credit Card Number:<br>
                <input type="text" id="cc-number" name="cc-number" pattern="[0-9]{16}" placeholder="1234567890987654"required>
            </div>

            <div>
                Credit Card Expiration:<br>
                <input type="month" id="cc-expiration" name="cc-expiration" required>
            </div>

            <div>
                Credit Card CVV:<br>
                <input type="text" id="cc-cvv" name="cc-cvv" pattern="[0-9]{3,4}" placeholder="123" required>
            </div>

            <div>
                <input type="checkbox" id="saveInfo" name="saveInfo">
                <label for="saveInfo">Save my information for next time</label><br><br>
            </div>

            <input type="submit" class="submit-button" value="Submit Order">
            <input type="reset" class="reset-button" value="Reset">
        </form>
        
    </div>
    <br>
    <footer>
        <p>Contributors: BD, JC, HZ</p>
        <a href="https://github.com/bdeweesevans/webdev-final" target="_blank" rel="noopener noreferrer">Github</a>
    </footer>

    <script src="products.js"></script>
</body>

</html>