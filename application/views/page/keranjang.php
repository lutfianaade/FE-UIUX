<div class="container ">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="http://localhost/buket/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
            </ol>
        </nav>
    </div>

    <div class="checkout-header text-center" style="margin-bottom: 20px;">
        <h2>Keranjang</h2>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="assets/snack.jpg" class="img-fluid" alt="Coffee Table" width="60">
                            <div>Buket Wisuda</div>
                            <div>Rp70.000</div>
                        </td>
                        <td>
                            <div class="quantity-controls" style="display: flex; align-items: center;">
                                <button type="button" class="btn btn-dark" style="width: 30px; height: 30px;" id="decrease-coffee">-</button>
                                <input type="text" id="quantity-coffee" style=" width: 50px; text-align: center; margin: 0 5px;" value="0" readonly>
                                <button type="button" class="btn btn-dark" style="width: 30px; height: 30px;" id="increase-coffee">+</button>
                            </div>
                        </td>
                        <td>Rp70.000</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="assets/uang.jpg" class="img-fluid" alt="Daily Chair" width="60">
                            <div>Buket Uang</div>
                            <div>Rp100.000</div>
                        </td>
                        <td>
                            <div class="quantity-controls" style="display: flex; align-items: center;">
                                <button type="button" class="btn btn-dark" style="width: 30px; height: 30px;" id="decrease-chair">-</button>
                                <input type="text" id="quantity-chair" style=" width: 50px; text-align: center; margin: 0 5px;" value="0" readonly>
                                <button type="button" class="btn btn-dark" style="width: 30px; height: 30px;" id="increase-chair">+</button>
                            </div>
                        </td>
                        <td>Rp100.000</td>
                    </tr>
                </tbody>
            </table>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Coupon code" aria-label="Coupon code" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2">Apply coupon</button>
                </div>
            </div>
            <button class="btn btn-dark">Update cart</button>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cart totals</h5>
                    <p class="card-text">
                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>Rp170.000</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Total</span>
                        <span>Rp170.000</span>
                    </div>
                    </p>
                    <a href="http://localhost/buket/checkout" class="btn btn-dark btn-block">Prosseced to checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const updateQuantity = (id, operation) => {
            const quantityInput = document.getElementById(`quantity-${id}`);
            let currentValue = parseInt(quantityInput.value);
            if (operation === 'decrease' && currentValue > 0) {
                quantityInput.value = currentValue - 1;
            } else if (operation === 'increase') {
                quantityInput.value = currentValue + 1;
            }
        };

        document.getElementById('decrease-coffee').addEventListener('click', function() {
            updateQuantity('coffee', 'decrease');
        });
        document.getElementById('increase-coffee').addEventListener('click', function() {
            updateQuantity('coffee', 'increase');
        });
        document.getElementById('decrease-chair').addEventListener('click', function() {
            updateQuantity('chair', 'decrease');
        });
        document.getElementById('increase-chair').addEventListener('click', function() {
            updateQuantity('chair', 'increase');
        });
    });
</script>