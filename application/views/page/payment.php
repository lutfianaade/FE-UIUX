<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 350px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .header {
            background-color: #ffcc00;
            padding: 16px;
            text-align: left;
            font-size: 18px;
            font-weight: bold;
        }
        .header a {
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
        }
        .header .back-icon {
            margin-right: 10px;
            font-size: 1em;
        }
        .content {
            padding: 16px;
        }
        .order-id {
            font-size: 12px;
            color: #888;
            margin-bottom: 8px;
        }
        .amount {
            font-size: 24px;
            font-weight: bold;
        }
        .all-payment{
            margin: 16px 0;
        }
        .payment-methodss {
            margin: 16px 0;
        }
        .payment-methods {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 5%;
        }
        .payment-method {
            flex: 1 1 calc(50% - 20px); /* Two columns */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: inherit;
            box-sizing: border-box;
        }
        .payment-method img {
            max-width: 50px;
            margin-right: 20px;
            display: block;
        }
        
        .payments-methods {
            display: flex;
            align-items: center;
            gap: 20px; /* Spacing between images */
            padding-left: 8px;
        }
        .payments-methods img {
            max-width: 60px; /* Adjust size as needed */
            height: auto;
            display: block; /* Ensures the image is treated as a block element */
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="http://localhost/buket/checkout" class="back-link">
                <i class="fas fa-regular fa-angle-left back-icon"></i> <!-- Font Awesome icon -->
                Payment
            </a>
        </div>
        <div class="content">
            <div class="amount">Rp300.000</div>
            <div class="order-id">Order ID #12345679</div>
            <div class="all-payment">
                <strong>All Payment Methods</strong>
            </div>
            <div class="payment-methodss">
                <strong>Virtual Account</strong>
                <div class="payment-methods">
                    <a href="http://localhost/buket/payment_detail" class="payment-method">
                        <img src="assets/img/BCA.png" alt="BCA">
                    </a>
                    <a href="#" class="payment-method">
                        <img src="assets/img/Permata Bank.png" alt="PermataBank">
                    </a>
                    <a href="#" class="payment-method">
                        <img src="assets/img/BRI.png" alt="BANK BRI">
                    </a>
                    <a href="#" class="payment-method">
                        <img src="assets/img/Mandiri.png" alt="Mandiri">
                    </a>
                    <a href="#" class="payment-method">
                        <img src="assets/img/BNI.png" alt="BNI">
                    </a>
                    <a href="#" class="payment-method">
                        <span>Other Bank</span>
                    </a>
                </div>
            </div>
            <div class="other-payments">
                <strong>ShopeePay/SpayLater</strong>
                <div class="payments-methods">
                    <a href="#" class="payments-methods">
                        <img src="assets/img/spay.png" alt="ShopeePay">
                    </a>
                    <a href="#" class="payments-methods">
                        <img src="assets/img/qris.png" alt="QRIS">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
