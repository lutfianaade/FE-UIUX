<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
        .btn-warning {
            color: whitesmoke;
            border: 1px solid #ddd;
            width: 75px;
            height: 40px;
        }
        .btn-primary {
            color: whitesmoke;
            border: 1px solid #ddd;
            width: 75px;
            height: 40px;
        }
        .btn-sm {
            padding: 0.2rem 0.4rem; /* Reduce padding to make the button smaller */
            font-size: 0.75rem;     /* Reduce font size to make the text smaller */
            line-height: 1.2;       /* Adjust line-height if needed */
            border-radius: 0.2rem;  /* Keep the border-radius for rounded corners */
        }
        .m-4 {
            margin: 0.5rem; /* Reduce margin to make the spacing around the button smaller */
        }
    </style>
<body>

    <div class="container">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="http://localhost/buket/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"></a>Order</li>
                </ol>
            </nav>
        </div>

        <div class="checkout-header text-center" style="margin-bottom: 30px;">
            <h2>Order Detail</h2>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pesanan Dibuat</th>
                    <th>Total Harga</th>
                    <th>Status Transaksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>26 Juni 2024 13:53:55</td>
                    <td>Rp300.000</td>
                    <td class="btn btn-sm btn-warning m-4">Pending</td>
                    <td>
                        <a href="http://localhost/buket/tracking_order" class="btn btn-sm" target="blank">
                            <i class="fas fa-sharp fa-solid fa-eye"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>15 Mei 2024 13:53:55</td>
                    <td>Rp300.000</td>
                    <td class="btn btn-sm btn-primary m-4">Selesai</td>
                    <td>
                        <a href="http://localhost/buket/delivered_order" class="btn btn-sm" target="blank">
                            <i class="fas fa-sharp fa-solid fa-eye"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
