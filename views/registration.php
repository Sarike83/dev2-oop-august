<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registration</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card border-0 mx-auto w-50">
            <div class="card-header border-o bg-white">
                <h1 class="fw-bold text-danger text-center display-4"><i class="fa-solid fa-user-plus"></i>Registration</h1>
            </div>
            <div class="card-body">
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>