<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Screen</title>
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
            font-size: 14px;
            color: #888;
            margin-bottom: 8px;
        }
        .amount {
            font-size: 24px;
            font-weight: bold;
        }
        .bank-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }
        .bank-info img {
            width: 50px;
            height: auto;
            margin-right: 4px;
            text-align: right;
        }
        .account-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }
        .virtual-account {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .copy {
            color: #007bff;
            cursor: pointer;
            text-align: right;
        }
        .instructions {
            margin-top: 16px;
        }
        .instructions p {
            font-size: 14px;
            margin: 8px 0;
        }
        .dropdown {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .dropdown h4 {
            margin: 5px;
        }
        .dropdown .arrow {
            font-size: 16px;
        }
        .dropdown-content {
            display: none;
            padding-left: 16px;
        }
        .dropdown-content.show {
            display: block;
        }
        .confirm-button {
            width: 93%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: block;
            text-align: center;
        }
        .back-button {
            display: block;
            text-align: center;
            margin-top: 8px;
            color: #888;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="http://localhost/buket/payment" class="back-link">
                <i class="fas fa-regular fa-angle-left back-icon"></i> <!-- Font Awesome icon -->
                Payment
            </a>
        </div>
        <div class="content">
            <div class="amount">Rp300.000</div>
            <div class="order-id">Order ID #12345679</div>
            <div class="bank-info">
                <span>Bank BCA</span>
                <img src="assets/img/BCA.png" alt="BCA">
            </div>
            <div class="account-container">
                <div id="virtual-account" class="virtual-account">Virtual Account<br>1208128746293700</div>
                <div class="copy" onclick="copyToClipboard()"><b>Copy</b></div>
            </div>
            <div class="instructions">
                <div class="dropdown" onclick="toggleDropdown('atm-instructions')">
                    <h4>Petunjuk Transfer ATM</h4>
                    <span class="arrow">▼</span>
                </div>
                <div id="atm-instructions" class="dropdown-content">
                    <p>1. Login Ke MBanking Anda. Pilih Bayar, Kemudian Pilih Lainnya</p>
                    <p>2. Pilih Penyedia Layanan Transferpay Dan Masukkan 1208128746293700 Kode Bayar.</p>
                </div>
                <div class="dropdown" onclick="toggleDropdown('mbanking-instructions')">
                    <h4>Petunjuk Transfer MBanking</h4>
                    <span class="arrow">▼</span>
                </div>
                <div id="mbanking-instructions" class="dropdown-content">
                    <p>1. Login Ke MBanking Anda. Pilih Bayar, Kemudian Pilih Lainnya</p>
                    <p>2. Pilih Penyedia Layanan Transferpay Dan Masukkan 1208128746293700 Kode Bayar.</p>
                </div>
            </div>
            <a href="http://localhost/buket/cpayment" class="confirm-button">Confirm Payment</a>
            <a href="http://localhost/buket/payment" class="back-button">Back</a>
        </div>
    </div>

    <script>
        function toggleDropdown(id) {
            var content = document.getElementById(id);
            content.classList.toggle('show');
        }
        function copyToClipboard() {
            var virtualAccountText = document.getElementById("virtual-account").innerText;
            var textToCopy = virtualAccountText.split('\n')[1]; // Get the virtual account number only
            navigator.clipboard.writeText(textToCopy).then(function() {
                alert('Virtual account number copied to clipboard');
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        }
    </script>

</body>
</html>
