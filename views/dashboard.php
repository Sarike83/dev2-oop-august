<?php
    session_start();

    include "../classes/Product.php";

    $product = new Product;

    $product_list = $product->displayProducts();
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
    <title>Dashboard</title>
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
        <div class="card w-75 border-0 mx-auto">
            <div class="card-header border-0 bg-white">
                <div class="row">
                    <div class="col text-start">
                        <h1 class="display-6 fw-bold">Product List</h1>
                    </div>
                    <div class="col text-end">
                        <i class="fa-solid fa-plus fa-3x text-info" data-bs-toggle="modal" data-bs-target="#add-product" style="cursor: pointer;"></i>                    
                    </div>
                </div>
            </div>

            <div class="card-body">
                <!-- PRODUCTS TABLE -->
                <?php
                    if (empty($product_list)) {
                ?>
                        <div class="container-fluid bg-dark p-5 text-danger text-center">
                            <h1 class="display-6 fw-bold pt-5 pb-3">No Records Found</h1>
                            <i class="fa-regular fa-circle-xmark fa-8x pb-5"></i>
                        </div>
                <?php
                    } else {
                ?>
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                            <?php
                                foreach($product_list as $product) {
                            ?>
                                    <tr>
                                        <td> <?= $product['id'] ?> </td>
                                        <td> <?= $product['product_name'] ?> </td>
                                        <td> <?= $product['price'] ?> </td>
                                        <td> <?= $product['quantity'] ?> </td>
                                        <td>
                                            <a href="edit-product.php?product_id=<?= $product['id']?>" class="btn btn-warning btn-sm" title="Edit Product">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                            <a href="../actions/delete-product.php?product_id=<?= $product['id']?>" class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>

                                        <?php
                                            if($product['quantity'] > 0) {
                                        ?>
                                            <td>
                                                <a href="../views/buy-product.php?product_id=<?= $product['id'] ?>" class="btn btn-success btn-sm">
                                                     <i class="fa-solid fa-cash-register"></i>
                                                </a>
                                            </td>
                                        <?php
                                            } else {
                                        ?>
                                            <td></td>
                                        <?php
                                            }
                                        ?>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </tbody>

                        </table>
                <?php
                    }
                ?>
                

            </div>
            
        </div>
    </div>

    <!-- Add A Product Modal -->
    <div class="modal fade" id="add-product" tabindex="-1" arialabelledby="product-registration" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <h1 class="display-4 fw-bold text-info text-center"><i class="fa-solid fa-box"></i>Add Product</h1>
                    <form action="../actions/product-actions.php" method="post" class="w-75 mx-auto pt-4 p-5">
                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="product-name" class="form-label small text-secondary">Product Name</label>
                                <input type="text" name="product_name" id="product-name" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="price" class="form-label small text-secondary">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="price-tag">$</span>
                                    <input type="number" name="price" id="price" class="form-control" aria-label="Price" aria-describedby="price-tag">
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

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>