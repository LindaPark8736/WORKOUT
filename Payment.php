<?php 
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="Payment.css">
</head>
<body>
    <div class="payment1">
        <div class="container">
            <div class="box">
                <select>
                    <option value="">Select an option</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                    <option value="yellow">Yellow</option>
                </select>

                

                <div class="input-group">
                    <button type="submit" class="btn" name="pay_user">Pay now</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="input-group">
                    <button type="submit" onclick="window.location.href = 'login.php'">No thank you</button>
                </div>
            </div>
        </div>

    </div>
</body>
</html>