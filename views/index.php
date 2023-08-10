<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Registration</title>
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card border-0 w-50 mx-auto">
            <div class="card-header border-0 bg-white mt-5">
                <h1 class="display-4 fw-bold text-center text-primary">LOGIN<i class="fa-solid fa-right-to-bracket"></i></h1>
            </div>
            <div class="card-body">
                <form action="../actions/user-actions.php" class="mx-auto w-75" method="post">
                    <div class="row mb-2 g-2">
                        <label for="username" class="col-form-label col-md-3 text-md-end text-secondary small">Username</label>
                        <div class="col-md-8">
                            <input type="text" name="username" id="username" class="form-control" placeholder="USERNAME">
                        </div>
                    </div>
                    <div class="row mb-2 g2">
                        <label for="password" class="col-form-label col-md-3 text-md-end text-secondary small">Password</label>
                        <div class="col-md-8">
                            <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD">
                        </div>
                    </div>
                    <div class="row mb-2 g-2">
                        <div class="col-md-8 offset-md-3">
                            <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                        </div>
                    </div>
                    <div class="row mb-2 g-2">
                        <div class="col-md-8 offset-md-3 text-center">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#registration">Create An Account</button>
                        </div>
                    </div>
                </form>

                <!-- Registration Modal -->
                <div class="modal fade" id="registration" tabindex="-1" arialabelledby="registration" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-5">
                                <h1 class="display-4 fw-bold text-danger text-center"><i class="fa-solid fa-user-plus"></i>Registration</h1>
                                <form action="../actions/user-actions.php" method="post">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="first-name" class="form-label">Firstname</label>
                                            <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="last-name" class="form-label">Lastname</label>
                                            <input type="text" name="last_name" id="last-name" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="username" id="username" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-danger w-100" name="register">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>