<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Product</title>
</head>
<body>
    <nav class="navbar-expand-lg navbar-light bg-white">
        <a href="dashboard.php" class="navbar-brand ms-3">
            <i class="fa-solid fa-house fa-2x text-dark">
        </a>

        <div class="ms-auto me-3 navbar-nav">
            <a href="#" class="nav-link" title="Logout">
                <i class="fa-solid fa-user-xmark fa-2x text-danger"></i>
            </a>
        </div>
    </nav>

    <main>
        <div class="container me-5">
            <div class="card border-0 mx-auto w-50">
                <div class="card-header bg-white border-0">
                    <h1 class="display-4 fw-bold text-info text-center">
                        <i class="fa-solid fa-box"></i> Add Product
                    </h1>
                </div>
                <div class="card-body">
                    <form action="" method="post" class="w-75 mx-auto">
                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="product-name" class="form-label small text-secondary">Product Name</label>
                                <input type="tel" name="product_name" id="product-name" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="price" class="form-label small text-secondary">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="price-tag">$</span>
                                    <input type="number" name="price" id="price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="quantity" class="form-label small text-secondary">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <button type="submit" class="btn btn-info w-100" name="add_product">Add</button>
                            </div>
                        </div>


                    </form>
                </div>

            </div>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>