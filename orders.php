<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem2</title>
    <style>
        table, td, th {
            border: 1px solid black;
            width: auto;
        }
    </style>
</head>
<body>
    <h1>MENU</h1>
    <table>
        <tr>
            <th>Order</th>
            <th>Price </th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <form action="Handleorder.php" method="GET">
        <!-- Order Selection -->
        <label for="order">Select your order:</label>
        <select name="order" id="order">
            <option value="Burger">Burger</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Steak</option>
        </select>
        
        <!-- Quantity and Cash Inputs -->
        <p>Quantity: <input type="number" name="Quantity" required></p>
        <p>Cash: <input type="number" name="Cash" required></p>

        <!-- Submit button -->
        <p><input type="submit" value="Submit" name="getorder"></p>
    </form>
</body>
</html>