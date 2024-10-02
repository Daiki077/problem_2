<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEIPT</title>
    <style>
        .sorry {
            border: 3px dotted red;
            padding: 10px;
            margin-top: 10px;
            color: red;
        }
        .receipt {
            border: 3px dotted black;
            padding: 10px;
            margin-top: 10px;
        }
        .total {
            margin-top: 10px;
        }
        .center {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php 
if (isset($_GET["getorder"])) {
    $Q = $_GET['Quantity'];
    $C = $_GET['Cash'];
    $O = $_GET['order'];

    // Ensure valid input for quantity and cash
    if ($Q > 0 && $C > 0) {
        // Set the price based on the selected order
        if ($O == "Burger") {
            $total = $Q * 50;
        } elseif ($O == "Fries") {
            $total = $Q * 75;
        } elseif ($O == "Steak") {
            $total = $Q * 150;
        } else {
            exit; // Exit if the order is invalid
        }

        // Check if cash is less than total
        if ($C < $total) {
            echo "<div class='sorry'>Sorry, balance not enough.</div>";
        } else {
            // Print the receipt details if cash is sufficient
            echo "<div class='receipt'>"; // Start receipt div
            echo "<div class='center'>"; // for centering the word recipt
            echo "<h1>RECEIPT</h1> </div>"; // Title for the receipt
            echo "<div class='total'>"; // Start total div
            echo "<h1>Total Price: $total PHP</h1>"; // Total of price
            echo "<h1>YOU PAID: $C PHP</h1>"; // Total amount of your cash
            $CH = $C - $total; // Calculate change
            echo "<h1>CHANGE: $CH PHP</h1>";
            
            // Display the current time
            date_default_timezone_set("Asia/Manila");
            $currentTime = date("Y/m/d H:i:sa");
            echo "<h1>$currentTime</h1>";
            echo "</div>"; // Closing the total div
            echo "</div>"; // Closing the receipt div
        }
    }
}
?>    
</body>
</html>