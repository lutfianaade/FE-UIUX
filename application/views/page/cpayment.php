<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Lobster Two' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
       body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .confirmation-box {
            position:fixed; /* Memastikan posisi relatif untuk menempatkan elemen "x" */
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
            height: 370px;
        }
        .confirmation-box img {
            width: 100px;
            margin: 25px;
            
        }
        .confirmation-box h1 {
            margin-top: 10px;
            font-size: 40px;
            margin-bottom: 15px;
            font-family: 'Lobster Two';

        }
        .confirmation-box p {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .confirmation-box .btn-success {
            background-color:#396854;
            color: whitesmoke;
            border: none;
            padding: 10px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: auto; 
            text-decoration: none;
        }
        .confirmation-box button:hover {
            background-color: #45a049;
        }
        .x-corner {
            position:absolute;
            top: 20px;
            right: 50px;
            font-size: 16px;
            cursor: pointer;
            font-family: 'Roboto', sans-serif;
            text-decoration: none;
            color:black
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <a href="http://localhost/buket/payment_detail" class="x-corner"><b> X </b></a>
        <h1>Thank you!</h1>
        <img src="assets/img/payment.png" >
        <p>Your order is received</p>
        <a href="http://localhost/buket/order" class="btn btn-success" type="button" target="blank">Cek Status</a>
    </div>
</body>
</html>