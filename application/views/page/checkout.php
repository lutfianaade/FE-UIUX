<div class="container">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="http://localhost/buket/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>

    <div class="checkout-header text-center" style="margin-bottom: 20px;">
        <h2>Checkout</h2>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <h4>Informasi Pemesanan</h4>
            <form>
                <div class="form-group">
                    <label for="name">Nama (Pemesan)</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama (Pemesan)">
                </div>
                <div class="form-group">
                    <label for="phone">No. Telp Pemesan</label>
                    <input type="text" class="form-control" id="phone" placeholder="No. Telp Pemesan">
                </div>
                <div class="form-group">
                    <label for="province">Provinsi</label>
                    <select class="form-control" id="province">
                        <option>Pilih Provinsi</option>
                        <option>Jawa Tengah</option>
                        <option>Jawa Barat</option>
                        <option>Jawa Timur</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">Kota</label>
                        <input type="text" class="form-control" id="city" placeholder="Kota">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zip">Kode Pos (Pengiriman)</label>
                        <input type="text" class="form-control" id="zip" placeholder="Kode Pos (Pengiriman)">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Alamat Pengiriman</label>
                    <input type="text" class="form-control" id="address" placeholder="Alamat Pengiriman">
                </div>
                <h4>Metode Pengiriman</h4>
                <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="homeDelivery" name="shippingMethod" class="custom-control-input" checked>
                        <label class="custom-control-label" for="homeDelivery">Home delivery (1-3 business days) Free</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="pickupPoint" name="shippingMethod" class="custom-control-input">
                        <label class="custom-control-label" for="pickupPoint">Pickup Point (2-5 business days) Free</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="pickupInStore" name="shippingMethod" class="custom-control-input">
                        <label class="custom-control-label" for="pickupInStore">Pickup in Store (2-5 business days) Free</label>
                    </div>
                </div>
                <a href="http://localhost/buket/payment" type="submit" class="btn btn-dark btn-block">Bayar Sekarang</a>
            </form>
        </div>
        <div class="col-lg-5">
            <h4>Detail Harga</h4>
            <div class="product-detail d-flex mb-3">
                <img src="assets/uang.jpg" style="width: 50px; height: 50px;" alt="Product Image">
                <div class="ml-3">
                    <h5>Money Buket</h5>
                    <p>Rp150.000</p>
                </div>
            </div>
            <div class="product-detail d-flex mb-3">
                <img src="assets/uang.jpg" style="width: 50px; height: 50px;" alt="Product Image">
                <div class="ml-3">
                    <h5>Money Buket</h5>
                    <p>Rp150.000</p>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Pesan untuk Penjual</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Pesan untuk Penjual"></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Discount code" aria-label="Discount code" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2">Apply</button>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <span>Subtotal</span>
                <span>Rp300.000</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <span>Discount</span>
                <span>0</span>
            </div>
            <div class="d-flex justify-content-between font-weight-bold mb-3">
                <span>Total</span>
                <span>Rp300.000</span>
            </div>
        </div>
    </div>
</div>