<?php
    session_start();

    include '../classes/Product.php';

    $product = new Product;
    $product_details = $product->displaySpecificProduct($_GET['product_id']);

    if (empty($_SESSION)) {
        header("location: ../views");
        exit;
    }

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
    <title>Payment</title>
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

    <div class="container mt-3">
        <div class="card border-0 mx-auto w-50">
            <div class="card-header bg-white border-0">
                <h1 class="display-4 fw-bold text-center text-success"> <i class="fa-solid fa-hand-holding-dollar"></i> Payment</h1>
            </div>
            <div class="card-body">
                <form action="../actions/product-actions.php?product_id=<?= $product_details['id']?>" method="post" class="w-75 mx-auto pt-4 p-5">
                    <div class="row mb-3">
                        <div class="col-md">
                            <label for="product-name" class="form-label small text-secondary">Product Name</label>
                            <h2 class="display-6 fw-bold"> <?= $product_details['product_name'] ?> </h2>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-5">
                            <label for="price" class="form-label small text-secondary">Total Price</label>
                            <h2 class="display-6 fw-bold">$ <?= $product_details['price'] * $_POST['buy_quantity'] ?> </h2>
                        </div>

                        <div class="col-md-7">
                            <label for="quantity" class="form-label small text-secondary">Buy Quantity <span class="text-danger">*</spam></label>
                            <h2 class="display-6 fw-bold"> <?= $_POST['buy_quantity'] ?> </h2>
                            <input type="hidden" name="buy_quantity" value="<?= $_POST['buy_quantity'] ?>">
                            <div class="form-text text-danger">
                                Maximum of <?= $product_details['quantity'] ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="payment" class="form-label small text-secondary">Payment</label>
                        <div class="col-md-8 mx-auto">
                            <div class="input-group mb-3">
                                <span class="input-group-text fw-bold">$</span>
                                <input type="number" name="payment" id="payment" class="form-control form-control-lg text-center text-danger" min="<?= $product_details['price'] * $_POST['buy_quantity'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <button type="submit" class="btn btn-success w-100" name="pay_product">Pay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>