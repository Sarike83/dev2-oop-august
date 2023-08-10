<?php
    session_start();

    # The purpose of this block of code is to prevent the users from going into the page
    # without logging in, therefore, this block of code is going to redirect the users to the login page
    # if they are not yet logged-in

    if(empty($_SESSION)) {
        header("location: ../views/");
        exit;
    }

    include "../classes/Product.php";

    $product = new Product;

    $product_details = $product->displaySpecificProduct($_GET['product_id']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Buy Product</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between">
        <a href="dashboard.php" class="ms-3" title="Home">
        <i class="fa-solid fa-house fa-2x text-dark"></i>
        </a>
        <a href="#" class="nav-link text-secondary">
            <span class="fw-bold fs-5">Welcome, <?= ucfirst($_SESSION['username']) ?></span>
        </a>
        <a href="#" class="me-3" title="Logout">
            <i class="fa-solid fa-user-xmark fa-2x text-danger"></i>
        </a>
    </nav>

    <div class="container mt-5">
        <div class="card mx-auto w-50 border-0">
            <div class="card-header bg-white border-0">
                <h1 class="diplay-4 text-success text-center"> <i class="fa-solid fa-cash-register"></i> Buy Product</h1>
            </div>
            <div class="card-body">
                <form action="../views/payment.php?product_id=<?= $product_details['id']?>" method="post" class="w-75 mx-auto pt-4 p-5">
                    <div class="row mb-3">
                        <div class="col-md">
                            <label for="product-name" class="form-label">Product Name</label>
                            <h2 class="display-6 fw-bold"> <?= $product_details['product_name']?> </h2>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="price" class="form-label small fw-bold text-secondary">Price</label>
                            <h2 class="display-6 fw-bold"> <?= $product_details['price']?> </h2>
                        </div>
                        <div class="col-md-6">
                            <label for="quantity" class="form-label small fw-bold text-secondary">Stocks Left</label>
                            <h2 class="display-6 fw-bold"> <?= $product_details['quantity']?> </h2>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="buy-quantity" class="form-label fw-bold small text-secondary">Buy Quantity</label>
                        <input type="number" name="buy_quantity" id="buy-quantity" class="form-control form-control-lg fw-bold text-center" required min="1" max="<?= $product_details['quantity']?>">
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <button type="submit" name="buy_product" class="btn btn-success w-100">Pay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>