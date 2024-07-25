<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Cassadelanonna | <?php echo $judul ?> </title>
</head>

<style>
    /*Navbar*/
    .navbar-brand h3 {
            font-family: 'Sacramento', cursive;
            color: black;
            font-size: 40px;
    }
    .navbar-nav .nav-link {
            color: black !important; /* Mengubah warna link menjadi hitam */
    }
    .navbar .navbar-nav a{
        color: black;
        display: inline-block;
        font-size: 1.3rem;
        margin: 0 1rem;
    }
    
</style>

<body>
    <nav class="navbar navbar-expand-lg border-bottom border-dark" style="flex-direction: row; align-items: center; justify-content:center; padding:1.4rem 7%">
        <div class="container d-flex py-2">
            <a class="navbar-brand" href="#">
                <h3 style="color: black;"><b>Casadellanonna</b></h3>
            </a>

            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a href="http://localhost/buket/home">Home</a>
                    <a href="http://localhost/buket/produk">Produk</a>
                    <a href="#">Contact</a>
                </div>
            </div>

            <div>
                <a href="http://localhost/buket/keranjang" class="btn btn-outline-dark" style="border: none">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <div class="btn-group open">
                    <a class="btn" href="#"><i class="fa fa-user fa-fw"></i> User</a>
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><a href="#" class="btn btn-block">Profile</a></li>
                        <li><a href="#" class="btn btn-block">My Orders</a></li>
                        <li><a href="#" class="btn btn-block">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>