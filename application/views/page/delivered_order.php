<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Delivered</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<style>
    .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; }
    .modal-content { background: #fff; padding: 20px; border-radius: 5px; width: 90%; max-width: 500px; }
    .close { position: absolute; top: 10px; right: 10px; font-size: 20px; cursor: pointer; }
</style>
<body>
    <div class="container py-3 justify-content:center">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="http://localhost/buket/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="http://localhost/buket/order">Order Detail</a></li>
                    <li class="breadcrumb-item active" aria-current="page"></a>Delivered Order</li>
                </ol>
            </nav>
        </div>

        <div class="checkout-header text-center" style="margin-bottom: 30px;">
            <h2>Delivered Order</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row m-2">
                        <div class="col-6">
                            <p><b>Order Timeline</b></p>
                        </div>
                        <div class="col-6 text-right">
                            <p><b>28 Juli 2024 08:54:22</b></p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 col-md-3 text-center mb-3">
                                <img src="assets/img/make order.png" class="img-fluid" style="width: 100px;height:80px" alt="Make Order">
                            </div>
                            <div class="col-6 col-md-3 text-center mb-3">
                                <img src="assets/img/on deliv.png"  class="img-fluid" style="width: 120px;height:100px" alt="On Delivery">
                            </div>
                            <div class="col-6 col-md-3 text-center mb-3">
                                <img src="assets/img/track.png" class="img-fluid" style="width: 100px;height:80px" alt="Track">
                            </div>
                            <div class="col-6 col-md-3 text-center mb-3">
                                <img src="assets/img/done order.png" class="img-fluid" style="width: 100px;height:80px" alt="Order Delivered">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <table class="table text-center">
                        <thead>
                            <tr class="col-12">
                                <th class="col-6">Produk</th>
                                <th class="col-2">Jumlah</th>
                                <th class="col-2">Total</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="assets/img/wisuda.jpeg" style="width: 90px; height: 100px; padding-right:5px;">Buket Wisuda</td>
                                <td class="p-5">1</td>
                                <td class="p-5">150.000</td>
                                <td id="openModalButton" class="btn btn-sm btn-warning m-4" style="height: 40px; cursor: pointer;">Review</td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/wisuda.jpeg" style="width: 90px; height: 100px; padding-right:5px;">Buket Wisuda</td>
                                <td class="p-5">1</td>
                                <td class="p-5">150.000</td>
                                <td id="openModalButton" class="btn btn-sm btn-warning m-4" style="height: 40px; cursor: pointer;">Review</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right"><b>Subtotal</b></td>
                                <td>Rp300.000</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
            </div>
        </div>
    </div>
    <!-- Modal -->
<div id="reviewModal" class="modal">
    <div class="modal-content">
        <span id="closeModal" class="close">&times;</span>
        <h5>Review Form</h5>
        <form id="reviewForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea id="review" name="review" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>
</div>

<script>
    // JavaScript to handle modal functionality
    document.getElementById('openModalButton').addEventListener('click', function() {
        document.getElementById('reviewModal').style.display = 'flex';
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('reviewModal').style.display = 'none';
    });

    window.onclick = function(event) {
        if (event.target == document.getElementById('reviewModal')) {
            document.getElementById('reviewModal').style.display = 'none';
        }
    };
</script>

<!-- Include Bootstrap JS for modal functionality -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>