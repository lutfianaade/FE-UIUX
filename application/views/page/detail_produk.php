<div class="container">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="http://localhost/buket/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
            </ol>
        </nav>
    </div>

    <div class="checkout-header text-center" style="margin-bottom: 20px;">
        <h2>Detail Produk</h2>
    </div>

    <div class="container px-lg-5">
        <div class="row mx-lg-n5">
            <div class="col py-3 px-lg-5">
                <img src="assets/uang.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col py-3 px-lg-5">
                <div class="m-2">
                    <p>Buket Wisuda</p>
                    <h><b>Buket Wisuda Boneka Teddy <br> Rp150.000</b></h3>
                        <div class="col-md-12">
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star-half text-warning" aria-hidden="true"></i>
                            <span>4,5(41 Reviews)</span>
                        </div>
                        <hr>
                        <p><b>Description</b></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quod facere quidem iste voluptatum delectus corporis voluptate officiis pariatur minima. At, fuga aliquam! Error enim optio fugiat, cupiditate explicabo adipisci?</p>
                        <hr>
                        <p><b>Quantity</b></p>
                        <div class="quantity-controls" style="display: flex; align-items: center;">
                            <button type="button" class="btn btn-dark" style="width: 30px; height: 30px;" id="decrease-chair">-</button>
                            <input type="text" id="quantity-chair" style=" width: 50px; text-align: center; margin: 0 5px;" value="0" readonly>
                            <button type="button" class="btn btn-dark" style="width: 30px; height: 30px;" id="increase-chair">+</button>
                        </div>
                </div>
                <div class="p-2">
                    <a href="http://localhost/buket/keranjang" type="button" class="btn w-100 btn-dark p-2">Add Cart</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="p-5">
        <h3 class="text-center">Penilaian Pelanggan</h3>
        <div class="row p-2 card-columns">
            <div class="col card p-2">
                <div class="card-body">
                    <h5 class="card-title">Sehun</h5>
                    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="col card p-2">
                <div class="card-body">
                    <h5 class="card-title">Kyungsoo</h5>
                    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="col card p-2">
                <div class="card-body">
                    <h5 class="card-title">Suho</h5>
                    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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